<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'body' => 'required|string',
            'author_name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = Comment::create([
            'blog_id' => $request->blog_id,
            'body' => $request->body,
            'author_name' => $request->author_name,
            'parent_id' => $request->parent_id,
        ]);

        // Render the comment as an HTML fragment
        $commentHtml = view('livewire.front._replies', ['comments' => [$comment]])->render();

        return response()->json([
            'message' => 'Comment added successfully!',
            'commentHtml' => $commentHtml
        ]);
    }
}
