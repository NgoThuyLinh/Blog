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
      		List Category
		</h1>
		<button type="button" class="btn btn-primary add" style="margin-top:15px;" data-toggle="modal" data-target="#add"><i class=" fa fa-plus" style="margin-right:10px"></i>Thêm mới</button>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active">Category/</li>
		    <li class="active">List Category</li>
		</ol>      
    </div>
    <div class="content">
    	<div id="page-wrapper">
			<div class="row">
		    	<div class="col-lg-12">
		 			<div class="panel panel-default">
		                <div class="table-responsive card-body">
		                    <table width="100%" class="table table-striped table-bordered table-hover  " id="dataTables-example" style="border-bottom: 1px solid #F2F2F2">
					            <thead>
					                <tr>
					                    <th style="text-align: center;border-bottom:none">ID</th>
					                    <th style="text-align: center;border-bottom:none">Name</th>
					                    <th style="text-align: center;border-bottom:none">Description</th>
					                    <th style="text-align: center;border-bottom:none">Thumbnail</th>
					                    <th style="text-align: center;border-bottom:none; width: 82px;">Action</th>
					                </tr>
					            </thead>
					            
		                    </table>
		                </div>
		            </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="detail" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
					  	<div class="modal-header">
					    	<button type="button" class="close" data-dismiss="modal">&times;</button>
					    	<h4 class="modal-title">Information Category</h4>
					  	</div>
				        <div class="modal-body">
					      	<div class="container"> 
								<div class="row">
									<div class="col-md-12">
										<div class="span2 col-md-12">
											<h1 id="name" class="col-md-10">
											</h1>  
											<img class="img-responsive col-md-8" src="" id="thumbnail" style="float: left;">
										</div> 
										<div class="span4">
											
											<p>
												 <h3><i class="fa fa-pencil"></i> Slug: </h3><span id="slug"></span>
												<br>
												<h3><i class="fa fa-envelope"></i> Decription: </h3><span id="description"></span>
												<br>
											</p>
										</div>
									</div>
								</div> 
								
							</div>
					    	<div style="height: 50px"></div>
				        </div>
		    		</div>
		    		<!-- /.modal-content --> 
		  		</div>
		    	<!-- /.modal-dialog --> 
			</div>
		</div>
		{{-- Create --}}
	    <div class="row">
			<div id="add" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Create Category</h4>
					  </div>
					  <div class="modal-body">
					  	<form  role="form" id="form_add" method="POST" enctype="multipart/form-data">
					  		@csrf
							<div class="form-group">
					          	<label class="control-label">Name</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="name" value="" required="">
					            	</div>
					            	
					          	</div>
					        </div>        
					        <div class="form-group">
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" multiple="true"  class="form-control" name="thumbnail" value="">
					            	</div>
					          	</div>
					        </div>
					        <div class="form-group">
					          	<label class="control-label">Slug</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="text" class="form-control" name="slug" value="{{old('name')}}" required="">
					            	</div>
					          	</div>
					        </div>
					       	<div class="form-group">
					          	<label class="control-label">Description</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="text" class="form-control" name="description" value="{{old('name')}}" required="">
					            	</div>
					          	</div>
					        </div>
					       	<button type="submit"class="btn btn-primary create" >Creat</button>
						</form>
					  </div>
					  <div class="modal-footer">
					    
					    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					  </div>
					</div>

				</div>
			</div>
	    </div>
	    <!-- edit -->
	    <div class="row">
			<div id="edit" class="modal fade" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Edit Category</h4>
					  </div>
					  <div class="modal-body">
					  	<form  role="form" id="form_edit" enctype="multipart/form-data">
					  		@csrf
					  		<input type="hidden" class="form-control" name="id" value="" required="">
							<div class="form-group">
					          	<label class="control-label">Name</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div >
						              	<input type="text" class="form-control" name="name" value="" required="">
					            	</div>
					            	
					          	</div>
					        </div>        
					        <div class="form-group">
					          	<label class="control-label">Thumbnail</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="file" multiple class="form-control thumbnail" name="thumbnail" value="">
						              	{{-- <span class="thumbnail"></span> --}}
					            	</div>
					          	</div>
					        </div>
					        <div class="form-group">
					          	<label class="control-label">Slug</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="text" class="form-control" name="slug" value="{{old('name')}}" required="">
					            	</div>
					          	</div>
					        </div>
					       	<div class="form-group">
					          	<label class="control-label">Description</label>
					          	<div class="" style="padding-bottom: 30px">
					          		<div>
						              	<input type="text" class="form-control" name="description" value="{{old('name')}}" required="">
					            	</div>
					          	</div>
					        </div>
					       	<button type="submit" class="btn btn-primary edit" >Save</button>
						</form>
					  </div>
					  <div class="modal-footer">
					    
					    <button type="button" class="btn btn-default" id="closeModal" data-dismiss="modal">Cancel</button>
					  </div>
					</div>

				</div>
			</div>
	    </div>
    </div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

    <script type="text/javascript">

		$(document).ready(function(){

		    var table = $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_categories,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'name', name: 'name' },
		            // { data: 'slug', name: 'slu' },
		            { data: 'description', name: 'description' },
		            { data: 'thumbnail', name: 'thumbnail' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    $(document).on('click','.create', function(){
		    	
				$.ajax({
				    url: 'category/store',
				    processData: false,
				    method: 'POST',
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				    }
				});
		 	});
		 	$(document).on('click','.btn-edit', function(){
		 		var id=$(this).attr("data-id");
				$.ajax({
				    url: 'category/show/'+id,
				    method: 'GET',
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				        $('#form_edit').find('input[name="id"]').val(response.id);
				        $('#form_edit').find('input[name="name"]').val(response.name);
				        //$('#form_edit').find('input[name="thumbnail"]').val(response.thumbnail);
				        $('.thumbnail').text(response.thumbnail);
				        $('#form_edit').find('input[name="slug"]').val(response.slug);
				        $('#form_edit').find('input[name="description"]').val(response.description);

				    }
				});
		 	});
		 	$(document).on('click','.detail', function(){
		 		var id=$(this).attr("data-id");
				$.ajax({
				    url: 'category/show/'+id,
				    method: 'GET',
				    
				    // dataType: 'JSON',
				    success: function (response) {
				        console.log(response);
				        // var images = $('#thumbnail').attr("src");
				        $('#name').text(response.name);
				        document.getElementById('thumbnail').src=response.thumbnail;
				        $('#slug').text(response.slug);
				        $('#description').text(response.description);

				    }
				});
		 	});
		 	$('#form_edit').submit(function(event) {
			    event.preventDefault();
			    var data = new FormData();
        		data.append('thumbnail', $('#form_edit').find('input[type=file]')[0].files[0]);

        		data.append('name',$('#form_edit').find('input[name="name"]').val());
        		data.append('username',$('#form_edit').find('input[name="username"]').val());
        		data.append('email',$('#form_edit').find('input[name="email"]').val());
			    var id = $('input[name="id"]').val();
			    $.ajax({
			        url: 'category/update/'+id ,
			        type: 'POST',
			        contentType: false,
			        processData: false,
			        data : data
			        ,
			        success: function(result)
			        {
			            if(result == "yes"){
			            	$('#edit').modal('hide');
			            	table.ajax.reload();
			            }
			        },
			        error: function(data)
			        {
			            console.log(data);
			        }
			    });

			});
		 	$(document).on('click','.btn-info',function(){
				var category_id= $(this).attr('data-id');
				$.ajax({
					type: 'GET',
					url: 'category/'+ category_id,
					success: function(response){
						console.log(response);
						$('#id').text('ID:'+response.id);
						$('#name').text('Name:'+response.name);
						$('#slug').text('Slug:'+response.slug);
						$('#description').text('Description:'+response.description);
					}
				})
			});
		 	$(document).on('click','.delete', function(e){
				e.preventDefault();
				var $this=$(this);
				var id=$(this).attr("data-id");
				// console.log(id);
				swal({
	              title: "Are you sure?",
	              text: "Once deleted, you will not be able to recover this database!",
	              icon: "warning",
	              buttons: true,
	              dangerMode: true,
	            })
	            .then((willDelete) => {
		              if (willDelete) {
		                $.ajax({
						url:"category/"+id,
						type:'DELETE',
						data:{
							id:id
						},
						success: function(res){
							$this.parents('tr').remove();
						},
						error: function(error){

						}
					})
	                swal("Poof! Your imaginary file has been deleted!", {
	                  icon: "success",
	                });
	              } else {
	                swal("Your imaginary file is safe!");
	              }
	            });
				
			});

		});
	</script>

@endsection
@section('footer')


@endsection