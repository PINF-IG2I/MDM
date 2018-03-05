<?php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php");
	die("");
}

?>


</div>
<!-- fin du content --> 

<!-- fin du wrap -->
</div>

<div id="footer">
  <div class="container">
   	 <p class="text-muted credit">
		<?php
		// Si l'utilisateur est connecte, on affiche un lien de deconnexion 
		if (secure("isConnected","SESSION"))
		{
			echo "Utilisateur <b>$_SESSION[last_name]</b> connecté"; 
			echo "<a href=\"controleur.php?action=Logout\">Se Déconnecter</a>";
		}
		?>
		Copyright - TOPINF - IG2I
	</p>
  </div>
</div>

</body>
</html>
