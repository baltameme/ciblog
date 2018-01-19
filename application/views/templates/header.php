<html>
	<head>
		<title>CIBlog</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" >
		<link rel="stylesheet" href="https://bootswatch.com/3/darkly/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">ciBlog</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li><a href="<?php echo base_url(); ?>about">About</a></li>
					<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
					<li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
