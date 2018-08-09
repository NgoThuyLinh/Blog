<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
    protected $fillable = ['name', 'slug'];
    public static function getAll(){
    	$tags= Tag::All();
    	return $tags;
    }
    public function posts(){
      return $this->belongsToMany('App\Post','post_tags','tag_id','post_id');
    }
}
