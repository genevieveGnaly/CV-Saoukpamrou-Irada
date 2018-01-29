<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<title></title>
</head>
<body style="background-color: #dce";">
	<marquee><h1>AJOUTER CENTRE D'INTERET</h1></marquee>

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
		</li>
		<li><a href="#" style="float: right;">A propos</a></li>

	</ul>
	</div>

		</nav>
		<div class="row">
		<div class="col-sm-3"><a href="#">Modifier Profil</a><br><br><a href="#">Créer CV</a><br><br><a href="#">Afficher votre CV</a><br><br><a href="#">Ajouter expérience</a><br><br><a href="#">Ajouter Diplome</a><br><br><a href="#">Ajouter centre d'interet</a><br><br></div>
	<div class="col-sm-6 col-sm-offset-1"><form method="POST" action="" enctype="multipart/form-data">
	     		<div class="form-group">
				<label>Centre d'interet</label>
				<input type="text" name="centre_d_interet" class="form-control" placeholder="Sport">
			</div>

			<div class="form-group">
			<label>Description</label>
			<textarea name="description" placeholder="" class="form-control"></textarea></div>

			<button type="submit"  name="Valider" class="btn btn-success" >Valider</button>
		</form>

		</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	


</body>
</html>

