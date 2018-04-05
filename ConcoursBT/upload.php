<?php
	include_once "header.php";
	session_start();
	if ($_SESSION['Type'] == '1')
	{
		exit(header('Location:public.php'));
	}
?>

<body class="components-page">

<?php
	include_once 'navbar.php';
?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/upload.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Déposer une oeuvre</h1>
				</div>
			</div>
		</div>
	</div>

    <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
        	<div class="text-center">
        	<h3>Sélectionner le type d'oeuvre à déposer</h3>
        	</div><br>
        	<center>
        		<button class="btn btn-primary" data-toggle="modal" data-target="#modalvideo">Une vidéo
	        </button>
	        <button class="btn btn-primary" data-toggle="modal" data-target="#modalphoto">Une image
	        </button>
	        <button class="btn btn-primary" data-toggle="modal" data-target="#modalart">Une peinture
	        </button>
	        <button class="btn btn-primary" data-toggle="modal" data-target="#modalmusique">Une musique
	        </button><br><br>
	        <?php
		if (isset($_GET['Acces']))
		{
			$acces = $_GET['Acces'];
			if ($acces == 'Déposé')
			{
				echo "L'image a été déposée";
			}
			if ($acces == 'Nondéposé')
			{
				echo "<font color='red' size=2px>Le format de l'image est incorrect ! Veuillez respecter nos conditions</font>";
			}
		}
	  ?>
	    	</center>
        </div>
	        </div>
		</div>
	</div>
<?php
			include_once "footer.php";
		?>
    </div>
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

</html>

<!-- Sart Modal -->

<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Déposer une photo</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Déposer une image</h4>
			</div>
			<div class="modal-body">
				<form action="upimage.php" method="post" enctype="multipart/form-data">
    Choisir l'image à déposer : <small><b>Uniquement en format JPG ou PNG</b></small>
    <div class="form-group label-floating">
    	<label class="control-label">Nom de l'image</label>
		<input type="text" class="form-control" name="nom" required>
    </div>
    <br>
    <input type="file" name="fichier" id="fileToUpload" required>
    <div class="form-group label-floating">
    	<label class="control-label">Description</label>
		<textarea type="text" class="form-control" name="about" rows='4' required></textarea>
    </div> 

			</div>
			<div class="modal-footer">
				<input type="submit" value="Déposer l'image" class="btn btn-default btn-simple" name="deposer">
				</form>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Déposer une peinture</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalmusique" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Déposer une musique</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->
