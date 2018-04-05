<?php
	include_once "header.php";
?>

<body class="tutorial-page">

<?php
	include_once "navbar.php";
?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/documentation.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Liste documentations</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="section">
	    <div class="container">
				<div class="row tim-row">
	                <h2 class="text-center">Documentation utilisateur</h2>
	                <legend></legend>
	                <div class="col-md-8 col-md-offset-2">
                    <center><a class="waves-effect waves-light btn" href="documentation.php">Accéder</a></center>

                  </div>
        </div>

				<div class="row tim-row">
	                <h2 class="text-center">Documentation technique</h2>
	                <legend></legend>
	                <div class="col-md-8 col-md-offset-2">
                    <center><a class="waves-effect waves-light btn" href="DocumentationTechnique.docx">Accéder</a></center>

                  </div>
        </div>

	        </div>
	    </div>
	</div>

</div>

<?php
  include_once "footer.php";
 ?>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script>

		$().ready(function(){

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

		});

</script>
</html>
