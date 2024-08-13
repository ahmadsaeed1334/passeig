<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentController extends Controller
{
    public function storeReply(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'body' => 'required|string|max:1000',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = Comment::create([
            'blog_id' => $request->blog_id, // This should be the correct blog ID passed from the form
            'body' => $request->body,
            'author_name' => auth()->user()->name,  // Use the logged-in admin's name
            'parent_id' => $request->parent_id,
        ]);

        return response()->json(['message' => 'Reply added successfully!', 'comment' => $comment]);
    }


    // Method to delete a comment
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully!']);
    }
}
