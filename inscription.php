<?php include('connection.php');
 $msg="";
	if (isset($_POST['valider'])){
		/*echo '<pre>';(text pour savoir si il prend en compte l'image)
		print_r ($_FILES['image']);die();*/
		if (move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name'])) 
		{
			$sql= "INSERT INTO codeuses (nom,prenoms,date_de_naissance;photo,specialisation;email,mot_de_pass,resume) VALUES
			 ('".mysqli_real_escape_string ($link,$_POST['nom'])."',
			 '".mysqli_real_escape_string ($link,$_POST['prenoms'])."', 
			 '".mysqli_real_escape_string ($link,$_POST['date_de_naissance'])."', 
			 '".$_FILES['photo']['name']."',
			 '".mysqli_real_escape_string ($link,$_POST['specialisation'])."', 
			 '".mysqli_real_escape_string ($link,$_POST['email'])."',
			 '".mysqli_real_escape_string ($link,$_POST['mot_de_pass'])."',
			 '".mysqli_real_escape_string ($link,$_POST['resume'])."')"; 
			
			if (isset($_GET['id']))
			{
				$sql="UPDATE codeuses SET 
				nom='".$_POST['nom']."', 
				prenoms='".$_POST['prenoms']."', 
				date_de_naissance='".$_POST['date_de_naissance']."',
				photo='".$_FILES['photo']['name']."',
				specialisation='".$_POST['specialisation']."', 
				email='".$_POST['email']."', 
				mot_de_pass='".$_POST['mot_de_pass']."', 
				resume='".$_POST['resume']."' 

				 WHERE id=".$_GET['id']; 
 			} 
			$result=mysqli_query($link ,$sql);
      	//die($sql);(pour texter la variable $sql et voir si il y a des erreurs)


			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}
		
}
	if (isset($_GET['id'])){
	$update="SELECT * FROM codeuses WHERE id=".$_GET['id'];
	$res=mysqli_query($link, $update);
	$dataU=mysqli_fetch_array($res);
	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<title>Inscription</title>
</head>
<body style="background-color: #cde;">
	<marquee><h1>PAGE D'INSCRIPTION </h1></marquee>
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
		<li><a href="#" style="">Sheisthecode Cv</a></li>
		<li><a href="#" style="float: right;">A propos</a></li>
		<li><a href="#" style="float: right;">s'inscrire</a></li>
		<li><a href="#" style="float: right;">se connecter</a></li>
	</ul>
	</div>

		</nav>
		<h1 style="text-align: center;"><strong>PAGE D'INSCRIPTION</strong></h1>

		<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form method="POST" action="" enctype="multipart/form-data">
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

			<button type="submit"  name="valider" class="btn btn-success" >Valider</button>
		</form>
	</div>

    </div>

































<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>