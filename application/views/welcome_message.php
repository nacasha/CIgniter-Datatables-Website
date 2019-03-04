<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<style>
		h1 {
			text-align: center;
			padding-bottom: 20px;
		}

		body {
			padding: 50px;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div id="container">
		<h1>Cigniter Datatables</h1>

		<div class="row">
			<div class="col-md-6">
				<?php
					$this->datatables->generate('dt_authors');
				?>
			</div>
			<div class="col-md-6">
				<?php
					$this->datatables->generate('dt_posts');
				?>
			</div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<?php 
	$this->datatables->jquery('dt_authors');
	$this->datatables->jquery('dt_posts');
?>
</html>
