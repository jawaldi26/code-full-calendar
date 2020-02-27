<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title . ' | ' . title() ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php $this->load->view('layout/asstes') ?>
</head>

<body class="hold-transition skin-purple layout-top-nav">
	<div class="wrapper">
		<?php $this->load->view('layout/header') ?>
		<!-- Full Width Column -->
		<div class="content-wrapper">
			<?php $this->load->view('layout/content-header') ?>
			<section class="content">
				{content}
			</section>
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2020 <a href="<?= site_url() ?>"><?= title() ?></a>.</strong> All rights
			reserved.
			<!-- /.container -->
		</footer>
	</div>
	<!-- ./wrapper -->
</body>

</html>
