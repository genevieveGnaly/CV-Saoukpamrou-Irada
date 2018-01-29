<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<title>AJOUTER DIPLOME</title>
</head>
<body style="background-color: pink;">

	<h1 style="text-align: center;">AJOUTER EXPERIENCE</h1>

<div class="container-fluid">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">toggle navigation</span>
					<a href="" class="navbar-brand a" >Sheisthecode cv
</a>
</button>

</div>

<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav-right">
		<li><a href="#" style="">Sheisthecode cv</a></li>
		<li><a href="#" style="float: right;">User</a></li>
		<li><a href="#" style="float: right;">A propos</a></li>

	</ul>
	</div>

		</nav>
		<div class="row">
		<div class="col-sm-3"><a href="modifier profil.php">Modifier Profil</a><br><br><a href="creation cv.php">Créer CV</a><br><br><a href="consulter cv.php">Afficher votre CV</a><br><br><a href="ajouter experience.php">Ajouter expérience</a><br><br><a href="ajouter diplome.php">Ajouter Diplome</a><br><br><a href="ajouter centre d'interet.php">Ajouter centre d'interet</a><br><br></div>
	<div class="col-sm-6 col-sm-offset-1"><form method="POST" action="" enctype="multipart/form-data">
	     		<div class="form-group">
				<label>Etablissement</label>
				<input type="text" name="Etablissement" class="form-control" placeholder="Etablissement">
			</div>

			<div class="form-group">
				<label>Diplome</label>
				<input type="text" name="diplome" placeholder="Diplome" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Date d'obtention</label>
				<input type="text" name="date_d_obtention" placeholder="Année/mm/JJ" class="form-control">
			</div>

			<button type="submit"  name="Valider" class="btn btn-success" >Valider</button>
		</form>

		</div>


<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	

</body>
</html>