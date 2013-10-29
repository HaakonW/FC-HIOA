<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> FC HIOA </title>
	<link rel= title= type= href=>
	<style type="text/css"></style>
</head>

<body>	
	<header>
		<h1> FC HIOA  </h1>
		
	</header>
		<!-- NAVIGATION BAR -->
	<nav> 
		 <ul class="NavBar">
			<li>
		<a class="Link_Bar" href="index.php">HJEM</a>
				</li>
				<li>
		 <a class="Link_Bar" href="index.php?page=1">Underside1</a> 
				</li>
			<li>
			<a class="Link_Bar" href="index.php?page=2">Underside2</a>
			</li>
				<li>
		 <a class="Link_Bar" href="index.php?page=3">Underside3</a>
			</li>
				<li>
		 <a class="Link_Bar" href="index.php?page=4">Underside4</a>
			</li>
		</ul> 

	 </nav>	


		 <section>

		 </section>

		 <aside> 
		 		
		 </aside>

		 <article>
		 </article>


		<footer>
			
		</footer>	
		
	<?php
if(isset($_GET["page"]))
{
	if($_GET["page"]==1)
	{
		include("Underside1.php");
	}
	else if($_GET["page"]==2)
	{
		include("Underside2.php");
	}
	else if($_GET["page"]==3)
	{
		include("Underside3.php");
	}
	else if($_GET["page"]==4)
	{
		include("Underside4.php");
	}
	else if($_GET["page"]==5)
	{
		include("Underside5.php");
	}
	else if($_GET["page"]==6)
	{
		include("Underside6.php");
	}
	else
	{
		include("Forside.php");
	}
}
	else
	{
	include("Forside.php");
	}
?>		

</body>
</html>