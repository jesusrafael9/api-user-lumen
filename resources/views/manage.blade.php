<!DOCTYPE html>

<html>

<head>

	<title>Users - Interfaz</title>


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

</head>

<body>


	<div class="container" id="manage-vue">


		<div class="row">

		    <div class="col-lg-12 margin-tb">

		        <div class="pull-left">

		            <h2>List - Users</h2>

		        </div>

		    </div>

		</div>


		<!-- Item Listing -->

		<table class="table table-bordered">

			<tr>

				<th>Name</th>

				<th>Email</th>

				<th>Photo</th>

			</tr>

			<tr v-for="item in items">

				<td>@{{ item.name }}</td>

				<td>@{{ item.email }}</td>

				<td><img src="photos/@{{ item.image }}"></img></td>

			</tr>

		</table>


	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>


	<script type="text/javascript" src="http://localhost/api-user-lumen/public/js/user.js"></script>


</body>

</html>