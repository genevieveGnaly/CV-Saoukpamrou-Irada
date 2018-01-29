<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<title>MODIFIER PROFIL</title>
</head>
<body style="background-color: yellowgreen;">
	<h1><marquee>MODIFIER LE PROFIL</marquee></h1>

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
		<li><a href="#" style="float: right;">User</a><a href="login.php" style="float: right;">Connection</a>
			<a href="inscription.php" style="float: right;">Inscription</a>
		</li></li>
		<li><a href="#" style="float: right;">A propos</a></li>

	</ul>
	</div>

		</nav>

		<div class="row">
		<div class="col-sm-3"><a href="#">Modifier Profil</a><br><br><a href="#">Créer CV</a><br><br><a href="#">Afficher votre CV</a><br><br><a href="#">Ajouter expérience</a><br><br><a href="#">Ajouter Diplome</a><br><br><a href="#">Ajouter centre d'interet</a><br><br></div>
	<div class="col-sm-6 col-sm-offset-1"><form method="POST" action="" enctype="multipart/form-data">
	     		<div class="form-group">
				<label>Nom</label>
				<input type="text" name="nom" class="form-control" placeholder="Nom">
			</div>

			<div class="form-group">
				<label>Prénoms</label>
				<input type="text" name="prenoms" placeholder="Prenoms" class="form-control">
			</div>
			<div class="form-group">
				<label>Date de naissance</label>
				<input type="text" name="date_de_naissance" placeholder="Année/mm/JJ" class="form-control">
			</div>
			<div class="form-group">
			<label>Resumé</label>
			<textarea name="resume" placeholder="" class="form-control"></textarea>
			 <div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="Email" class="form-control">
			</div>
		     <div class="form-group">
				<label>Télephone</label>
				<input type="text" name="contact" placeholder="Télephone" class="form-control">
			 </div>
		      <div class="form-group">
				<label>Mot de pass</label>
				<input type="text" name="mot_de_pass" placeholder="Password" class="form-control">
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" placeholder="" class="form-control">
			</div>  

			<button type="submit"  name="Modifier" class="btn btn-success" >Modifier</button>
		</form>

		</div>
	





































<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>