<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="theme-color" content="#41b883">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<title>Vue</title>
	<!-- MDB icon -->
	<!--	<link rel="icon" href="--><? //= base_url() ?><!--assets/img/mdb-favicon.ico" type="image/x-icon">-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<?php
	if (isset($v3) && !empty($v3)):
		?>
		<!-- Vue-->
		<link rel="stylesheet" href="<?= base_url() ?>assets/vue/vuetify.min.css">
		<script type="text/javascript" src="<?= base_url() ?>assets/vue/vue.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>assets/vue/vuetify.js"></script>
	<?php
	else:
	?>
		<!-- Vue-->
		<script type="text/javascript" src="<?= base_url() ?>assets/vue/vue3.js"></script>
	<?php
	endif;
	?>

</head>
<body>

<?php
$this->load->view($_section_);
?>

<!-- jQuery -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->

<script type="text/javascript">
	const BASE_URL = "<?= base_url() ?>";
</script>

<?php
$this->load->view($_script_);
?>

</body>
</html>
