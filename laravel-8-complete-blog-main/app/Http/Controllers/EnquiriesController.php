<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Message;
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

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        // validate incoming request
        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'message' => 'required',
            'is_urgent' => 'nullable|boolean',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        // create a new enquiry
        Enquiry::create([
            'title'=> $request->input('title'),
            'email'=> $request->input('email'),
            'message'=> $request->input('message'),
            'is_urgent'=> $request->input('is_urgent'),
            'first_name'=> $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
        ]);

        return redirect()->route('blog.index')
        ->with('success', 'Enquiry sent successfully');
    }



}
