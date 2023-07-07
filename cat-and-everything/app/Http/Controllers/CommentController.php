<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Forum;

class CommentController extends Controller
{
    public function store(Request $request, Forum $forum)
{
    $request->validate([
        'content' => 'required',
    ]);

    $comment = new Comment;
    $comment->content = $request->content;
    if (auth()->check()) {
        $comment->user_id = auth()->user()->id;
    } else {
        // Handle the case for unauthenticated users
        $comment->user_id = null;
        // You can also consider storing the comment with a default or guest user ID
        // For example: $comment->user_id = 0;
    }    
    $forum->comments()->save($comment);
    

    return redirect()->route('forums.show', $forum)->with('success', 'Comment added successfully.');
}

    
}
