<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();

        return view('forum.index', compact('forums')); //forums is the table name from the database
    }

    public function create()
    {
        return view('forum.forumForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $forum = new Forum;
        $forum->title = $request->title;
        $forum->description = $request->description;
        $forum->save();

        return redirect()->route('forums.index')->with('success', 'Posted successfully.');
    }

    public function show($id)
    {
        $forum = Forum::find($id);
        $comments = $forum->comments;
    
        return view('forum.show', compact('forum', 'comments'));
    }
}
