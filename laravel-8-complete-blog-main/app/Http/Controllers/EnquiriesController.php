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
        $enquiry = new Enquiry();
        $enquiry->title = $request->title;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->is_urgent = $request->has('is_urgent');
        $enquiry->save();

        return redirect()->route('enquiries.index')
        ->with('success');
    }



}
