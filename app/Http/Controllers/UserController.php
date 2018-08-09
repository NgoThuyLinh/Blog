<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index(){
        $users = User::All();
        return view('admins/user',['users'=> $users]);
    }
    public function anyData(){
        return Datatables::of(User::query())->make(true);
    }
    public function getList(){
        $users= User::orderBy('id','desc');
        return datatables()->eloquent($users)
            ->addColumn('action', function($user){
                return '<button data-id="'. $user->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $user->id .'" class="btn btn-sm btn-warning edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button data-id="'. $user->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        // ->addColumn('photo', function($user){
        //     return '<img class="img-fluid" src="'. $user->avatar .'">';
        // })
        ->rawColumns(['action'])
        ->toJson();
    }
    public function destroy($id)
    {
        User::where('id',$id)->first()->delete();
        return response()->json(['eror'=>false]);
    }
     public function update(Request $request, $id)
    {
        $user = User::find($id)->update($request->all());
        return response()->json('yes');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return response()->json($users);
    }
    public function show($id)
    {
        $users = User::find($id);
        return response()->json($users);
    }
    public function store(Request $request)
    {
        $data = $request->all();       
        $user =  new User;
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->username=$data['username'];
        $user->password=bcrypt($data['password']);
        $user->save();
        return response()->json('yes');
    }

}
