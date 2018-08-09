@extends('layouts/admins/master')
@section('header')
	<style type="text/css">
		.odd td, .even td{
			text-align:center;
		}
	</style>
@endsection

@section('content')
	<div class="content-header">
	    <h1>
      		Create Post
		</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active">Post/</li>
		    <li class="active">Create Post</li>
		</ol>      
    </div>
	<div class="content">
		<div id="page-wrapper">
			<form action="{{asset('admin/post')}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
				@csrf
				<div class="col-md-8">            
		            <div class="card card-primary">
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control" id="" placeholder="Input Title" name="title">
							</div>
		              	</div>	              	
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Description</label>
								<textarea id="editor1" class="form-control" name="description"  rows="2"></textarea>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Content</label>
								<textarea id="editor2" class="form-control" name="content"  rows="3"></textarea>
							</div>
		              	</div>
		              	
			        </div>           
	          	</div>
	          	<div class="col-md-4">
	          		<div class="card card-primary">
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Slug</label>
								<input type="text" class="form-control" id="" placeholder="Input Slug" name="slug">
							</div>
		              	</div>
		              	<div class="card-body">
			              	<div class="form-group">
			                    <label for="exampleInputFile">Thumbnail</label>
			                    	<div class="input-group">
				                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="thumbnail" multiple >
					                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
				                      	</div>
					                    <div class="input-group-append">
					                        <span class="input-group-text" id="">Upload</span>
					                    </div>
			                    	</div>
			                </div>
	              		</div> 
	              	<div class="card card-primary">
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">User_id</label>
								<select name="user_id" size="3" class="form-control" required="required">
									@foreach($users as $user)
										<option @if($user->id==session('id')) selected @else disabled @endif value="{{$user->id}}">{{$user->name}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Category_id</label>
								<select name="category_id" size="3" class="form-control" required="required" >
									@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<button type="submit" class="btn btn-primary form-control">Create</button>
	              	</div>              	
	          	</div>
			</form>	
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
@endsection
@section('footer')
	<script type="text/javascript">
		$(function () {
	    	CKEDITOR.replace('editor1');
	    	CKEDITOR.replace('editor2');
	    	//bootstrap WYSIHTML5 - text editor
	    	$('.textarea').wysihtml5();
		 });

		$(document).ready(function(){

		    $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_categories,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            // { data: 'slug', name: 'slug' },
		            { data: 'description', name: 'description' },
		            { data: 'action', name: 'action' }
		        ]
		    });

		});
	</script>
@endsection