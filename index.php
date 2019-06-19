<?php
include('user.php');
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="stylecontact.css">
</head>

<body>

	<!-- En tete -->
	<header>
		<a href="/sqwen/index.php" id="logo">
			<img src="images/monlogo.png">
			<h4>SADOVNIC SORIN 2SNA</h4>
		</a>
		<nav class="blocmenu">
			<ul>
				<li class="nav-item">
					<a class="nav" href="letp.html">Le Tp</a>
				</li>
				<li class="nav-item">
					<a class="nav" href="wizards.php">Wizards</a>
				</li>
				<li class="nav-item">
					<a class="nav" href="#CV">Login</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- Div Titre -->

	<div id="lestitres">
		<div id="Fond_bleu">
			<h1> <strong>Mon Stage chez </strong> <em>Wizards Technlogies</em></h1>
			<p class="soustitre"><strong> </strong>Développement Full-Stack</p>
		</div>
	</div>

	<!-- BLOC DU MILIEU -->
	<aside>
		<div class="lycee">
				<a class="la" href="https://www.larmand.fr/index.php" target=_blank>
					<h1 class="la">Lycee Louis Armand</h1>
				<img src="images/Armand.png" class="lai">
				</a>
		</div>
			

		<div class="identifiant">
			<div class="head">
				<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
				<?php
					if(isset($_POST['prenom'])){
						echo '<p class="bonjour"> Bonjour  '.ucfirst(strtolower($_POST['prenom'])).' ! VOICI MON RAPPORT DE STAGE.</p>';
						$data = new user();
						$data->insert($_POST['prenom']);
						setcookie('user',$_POST['prenom'],time()+60,'/');
					}else{
						echo '<h2>Quel est votre nom?</h2>';
						echo '<input type="text" name="prenom"  placeholder="Entrer le nom" />';
						echo '<input type="submit" value="Valider" class="bouton" />';
					}
				?>
				</form>
			</div>
		</div>
		<img src="images/wizz.png" class="wizards">
	</aside>
	<?php
	if(isset($_POST['prenom'])){
		echo '
			<div class="somm1">
		<nav  class="sommaire">
			<ul>
				<li class="menu1"><a href="#html">Wizzard Technologies</a>
					<ul class="submenu">
						<li><a href="wizards.php">Le secteur d’activité</a></li>
						<li><a href="#">Organigramme de l'."'".'entreprise</a></li>
						<li><a href="#">L’agilité & les métiers chez Wizzards</a></li>

					</ul>
				</li>

				<li class="menu2"><a href="#wiizd">Mon Stage</a>
					<ul class="submenu">
						<li><a href="#">Remerciements</a></li>
						<li><a href="#">Inntroduction</a></li>
						<li><a href="#">Le Metier</a></li>
						<li><a href="#">Mes Missions</a></li>
					</ul>
				</li>
				<li class="menu3"><a href="#menu3">Objectifs</a>
					<ul class="submenu">
						<li><a href="#">Html(Structure)</a></li>
						<li><a href="#">CSS (Style)</a></li>
						<li><a href="#">Php (DataBase)</a></li>
					</ul>

				</li> 
				<li class="menu4"><a href="#menu4">Conclusion</a>
					<ul class="submenu">
						<li><a href="#">Bilan</a></li>
						<li><a href="#">Formation</a></li>

					</ul>
				</li>

			</ul>
		</nav>
	</div>
		';
	}
	?>
	

	<!-- Bas de page-->
	<footer>
		<ul class="basdepage">
			<li>©Stage développeur web 2019</li>
			<li>Sadovnic Sorin</li>
			<li>Seconde pro Systéme Numérique</li>
			<li>Année Scolaire 2018/2019</li>
		</ul>
	</footer>

</body>
</html>