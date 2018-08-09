<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\PostTag;

class TagController extends Controller
{
    public function showblog($id)
    {
        $posts = Tag::find($id)->posts;
        return view('blogs/tag',['posts'=>$posts]);

    }
}
