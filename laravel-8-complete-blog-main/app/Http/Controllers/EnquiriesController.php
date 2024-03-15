<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Post;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    /**
     *
     *    Display all enquires
     *
     */

    public function index() {
        $data['enquiries'] = Enquiry::orderby('id')->paginate(10);
        return view('enquiries.index', $data);
    }

    public function create(Request $request) {
        // Get post id from url parameters
        $postId = $request->input('post_id');

        // Retrieve the post and its user
        $post = Post::with('user')->findOrFail($postId);

        return view('enquiries.create', compact('post'));

    }

    public function store(Request $request) {

        // validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'is_urgent' => 'nullable|boolean',
        ]);

        // create a new enquiry
        $enquiry = new Enquiry();
        $enquiry->title = $request->title;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->is_urgent = $request->has('is_urgent');
        $enquiry->save();

        // retrieve the post
        $postId = $request->input('post_id');
        $post = Post::findOrFail($postId);

        // get the user who made the post
        $user = $post->user;

        // append enquiry to the messages column of that user
        $user->messages .= "\n\nEnquiry Title: {$enquiry->title}\nFrom: {$enquiry->email}\nMessage: {$enquiry->message}";
        $user->save();

        return redirect()->route('enquiries.index')
        ->with('success', 'Enquiry sent successfully');
    }



}
