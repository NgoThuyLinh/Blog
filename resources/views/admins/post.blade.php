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
      		List Post
		</h1>
		<a href="{{asset('admin/post/create')}}"><button class="btn btn-primary" style="margin-top:15px;"><i class=" fa fa-plus" style="margin-right:10px"></i>Creat</button></a>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home/ </a></li>
		    <li class="active">Post/</li>
		    <li class="active">List Post</li>
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
					                    <th style="text-align: center;border-bottom:none;width: 160px">Title</th>
					                    {{-- <th style="text-align: center;border-bottom:none">Thumbnail</th> --}}
					                    <th style="text-align: center;border-bottom:none">Description</th>
					                    <th style="text-align: center;border-bottom:none; width: 82px;">Action</th>
					                </tr>
					            </thead>
					            
		                    </table>
		                </div>
		            </div>
				</div>
			</div>
		</div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
@section('footer')

	<script type="text/javascript">

		$(document).ready(function(){

		    $('#dataTables-example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: url_posts,
		        columns: [
		            { data: 'id', name: 'id' },
		            { data: 'title', name: 'title' },
		            // { data: 'thumbnail', name: 'thumbnail' },
		            { data: 'description', name: 'description' },
		            { data: 'action', name: 'action' }
		        ]
		    });
		    $(document).on('click','.delete', function(e){
				e.preventDefault();
				var $this=$(this);
				var id=$(this).attr("data-id");
				console.log(id);
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
							url:"post/"+id,
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