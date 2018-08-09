<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
// use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $users = Auth::user();
    //     $userlogin['id']= $users->id;
    //     $userlogin['username']= $users->username;
    // }
    public function showblog($slug)
    {
    	$posttops=Post::top();
        $category = Category::where('slug',$slug)->first();
        $id= $category['id'];
        $posts = Post::where("category_id", $id)->simplepaginate(env('PAGES'));
        return view('blogs/blog',['posts'=>$posts, 'category' => $category],['posttops'=>$posttops]);

    }
    public function show($id)
    {
        $category = Category::where('id',$id)->first();
        return response ()->json ( $category );

    }
    public function index(){
        $categories = Category::All();

        return view('admins/category',['categories'=> $categories]);
    }
    public function anyData(){
        return Datatables::of(Category::query())->make(true);
    }
    public function getList(){
        $categories= Category::orderBy('id','desc');;
        return datatables()->eloquent($categories)
            ->addColumn('action', function($category){
                return '<button data-id="'. $category->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $category->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $category->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        // ->addColumn('photo', function($user){
        //     return '<img class="img-fluid" src="'. $user->avatar .'">';
        // })
        ->rawColumns(['action', 'description'])
        ->toJson();
    }
    public function update(Request $request, $id){
        $post=$request->all();
        $post['thumbnail']=$request->thumbnail->store('thumbnail');
        $category = Category::where('id',$id)->first()->update($post);
        return response()->json("yes");
        
    }
    public function store(Request $request){
        //die(var_dump($request->thumbnail));
        $post=$request->all();
        $post['thumbnail']=$request->thumbnail->store('thumbnail');

        $category= new Category;
        $category->name=$post['name'];
        $category->thumbnail=$post['thumbnail'];
        $category->slug=$post['slug'];
        $category->description=$post['description'];
        $category->save();
        return redirect()->route('category.index');
    }
    public function destroy($id){
        Category::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
