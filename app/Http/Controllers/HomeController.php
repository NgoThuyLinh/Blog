<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
    public function index()
    {
        $this->middleware('auth');
        $users = Auth::user();
        session(['id' => $users->id,'username'=>$users->username]);
        return view('admins/database');
    }
    public function blog(){
        $posts  = Post::getAll(); // lấy tất cả bài viết bằng câu lệnh hàm all()
        $categories= Category::all();
        $tags= Tag::all();
        $posttops= Post::top();
        return view('blogs/index',[
            'posts' => $posts, 'tags' =>$tags, 'categories' => $categories, 'posttops' => $posttops
        ]);
    }
}

