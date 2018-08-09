<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $table = 'posts'; // bảng posts trong database
    protected $fillable = ['title', 'thumbnail', 'description','content','slug','user_id','category_id','view_count'];
    public static function getAll(){
    	$posts= Post::simplepaginate(env('PAGES'));
    	return $posts;
    }
    public static function top(){
        $posts=DB::table('posts')->orderBy('view_count', 'asc')->limit(4)->get();
        return $posts;
    }
    public static function scopeSearch($searchTerm)
    {
        return Post::all()->where('title', 'like', '%' .$searchTerm. '%');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function tags(){
      return $this->belongsToMany('App\Tag','post_tags','post_id','tag_id');
    }

}
