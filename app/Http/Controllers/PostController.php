<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // public function __construct()
    // {
    //     $users = Auth::user();
    //     $userlogin['id']= $users->id;
    //     $userlogin['username']= $users->username;
    // }
    public function index(){
        $posts = Post::All();
        return view('admins/post',['posts'=> $posts]);
    }
    public function showblogs($slug){
        $post=Post::where('slug', $slug)->first();
        // $post->increment('view_count');
        return view('blogs/post', ['post'=>$post]);
    }
    public function show($id){
        $post=Post::where('id', $id)->first();
        return response()->json($post);
    }
    public function search(Request $request){
        $data = $request->all();
        $data['thumbnail']=$request->thumbnail->store('thumbnail');
        $searchTerm=$data['search'];
    	$posttops=Post::top();
        $posts = Post::scopeSearch($searchTerm);
        return view('blogs/page', compact('posts', 'searchTerm'),['posttops'=>$posttops]);
    }
    public function anyData(){
        return Datatables::of(Post::query())->make(true);
    }
    public function getList(){
        $posts= Post::orderBy('id','desc');
        return datatables()->eloquent($posts)
            ->addColumn('action', function($post){
                return '<button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                        <button data-id="'. $post->id .'" class="btn btn-sm btn-danger delete" type="button"><i class="fa fa-trash"></i></button>';
            })
        // ->addColumn('thumbnail', function($post){
        //     return '<img class="img-fluid" src="'. $post->thumbnail .'">';
        // })
        ->rawColumns(['action','description'])
        ->toJson();
    }
    public function create(){
        $categories = Category::All();
        $users = User::All();
        return view('admins/createpost',['categories'=>$categories,'users'=>$users]);
    }
    public function store(Request $request){
        $post=$request->all();
        foreach ($request->thumbnail as $key => $image) {
            $post['thumbnail']= $image->store('thumbnail');
        }
        $post['view_count']=0;
        // dd($post);
        Post::create([
            'title' => $post['title'],
            'thumbnail' => $post['thumbnail'],
            'description' => $post['description'],
            'content' => $post['content'],
            'slug' => $post['slug'],
            'user_id' => $post['user_id'],
            'category_id' => $post['category_id'],
            'view_count' => $post['view_count'],
        ]);
        return redirect()->route('post.index');
        // ->with('flag','Thêm mới thành công')

    }
    public function destroy($id){
        Post::where('id',$id)->first()->delete();
        return response()->json($id);
    }

}
