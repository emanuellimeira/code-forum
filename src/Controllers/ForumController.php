<?php

namespace CodeEdu\CodeForum\Controllers;

use CodeEdu\CodeForum\Models\Topic;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
    	$topics = Topic::all();
    	return view('codeforum::forum.index', compact('topics'));
    }
    public function topic($id)
    {
        $topic = Topic::findOrFail($id);
        return view('codeforum::forum.topic', compact('topic'));
    }
}
