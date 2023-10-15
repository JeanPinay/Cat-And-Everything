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
    $forum->comments()->save($comment);

    return redirect()->route('forums.show', $forum)->with('success', 'Comment added successfully.');
}

    
}
