<!doctype html>
<html lang="en">

<head>
	<title>Sidebar 01</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/adminpage.css">
</head>

<!-- Modal add product -->
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('realisation.store') }}" id="form" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="title">title</label>
						<input type="text" class="form-control title" id="title" name="title" aria-describedby="title"
							placeholder="title">
					</div>
					<div class="form-group">
						<label for="file">files</label>
						<input type="file" class="form-control files" id="files" aria-describedby="files"
							placeholder="title" name="files[]" multiple>
					</div>
					<div class="form-group">
						<label for="type">type</label>
						<select class="form-control type" id="type" name="type">
							<option disabled selected="selected">select ...</option>
							<option>image</option>
							<option>video</option>
						</select>
					</div>
					<div class="form-group">
						<label for="category">category</label>
						<select class="form-control category" id="category" name="category">
							<option disabled selected="selected">select ...</option>
							<option>branding</option>
							<option>shoting products</option>
							<option>events</option>
							<option>marketing</option>
							<option>production</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<body>

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="p-4 pt-5">

				<ul class="list-unstyled components mb-5">

					<li>
						<a href="products.html">Products</a>
					</li>

					<li>
						<a href="#">Messages</a>
					</li>
					<li class="active">
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
							class="dropdown-toggle">Settings</a>
						<ul class="collapse list-unstyled" id="homeSubmenu">
							<li>
								<a href="#"></a>
							</li>
							<li>
								<a href="#">Add Admin</a>
							</li>
							<li>
								<a href="#">Profile</a>
							</li>
							<li>
								<a href="#">logout</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<button type="button" id="sidebarCollapse" class="btn btn-primary">
						<i class="fa fa-bars"></i>
						<span class="sr-only">Toggle Menu</span>
					</button>
					<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="text-right mr-4 mb-4">
				<button class="btn btn-primary " data-toggle="modal" data-target="#addProjectModal">add project</button>
			</div>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">title</th>
							<th scope="col">image/video</th>
							<th scope="col">categorie</th>
							<th scope="col">action</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($projects as $project)
						<tr>
							<th scope="row">{{$project->id}}</th>
							<td>{{$project->title}}</td>
							<td>{{$project->type}}</td>
							<td>{{$project->category}}</td>
							<td>
								<button class=" btn btn-danger btn-delete" data-project-id="{{$project->id}}">delete</button>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="assets/js/admin.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<script>
	$(function() {

		$('#form').validate({
			rules: {
			title:{
				required: true,
			},
			type: {
				required: true,
			},
			category: {
				required: true,
			},
			files: {
				required: true,
				filesize: 20,
			},
			},
			messages: {
			title:{
				required: "enter the product name"
			},
			type: {
				required: "enter the type",
			},
			category: {
				required: "category please",
			},
			files: {
				required: "avatar please",
				filesize : "size is chi haja" ,
			},
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
			},
			unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
			}
		});

		$("#form").submit(function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '{{ route('realisation.store') }}',
				method: 'post',
				processData: false,
				contentType: false,
				data: formData,
				success: function(response) {
					window.location.reload();
					if (response.status == 200) {
						Swal.fire(
							'Added!',
							'Product Added Successfully!',
							'success'
						)
					}
					$('#form')[0].reset();
					$("#addProjectModal").modal('hide');
				}

			});
		});
	});
	</script>
	<script>
		$(document).ready(function() {
			$('.btn-delete').click(function(e) {
				e.preventDefault();
				var projectId = $(this).data('project-id');
				var csrfToken = $('meta[name="csrf-token"]').attr('content');
				var url = '{{ route("realisation.delete", ":id") }}';
				url = url.replace(':id', projectId);
				$.ajax({
					type: 'DELETE',
					url: url,
					data: {
						'_token': csrfToken
					},
					success: function(response) {
					if (response.message == 150) {
						Swal.fire(
							'deleted!',
							'project deleted Successfully!',
							'success'
						)
					}
					window.location.reload();
				}
				});
			});
});

	</script>
</body>

</html>