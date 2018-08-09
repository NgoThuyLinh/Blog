<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
	protected $table = 'post_tags'; // bảng posts trong database
    protected $fillable = ['post_id','tag_id'];
    public static function getAll(){
    	$posttags= PostTag::all();
    	return $posttags;
    }
    
}
