<div class="home">
	<h1>Brainstormen doe je hier</h1>

	<div class="login">
		<h2>Login</h2>
		<?php if(empty($_SESSION['user']))
			{ ?>
		        <form action="index.php?page=project" method="post">
		            <label for="email">E-mail: </label>
		            <input type="email" name="email" />
		            <label for="password">Wachtwoord: </label>
		            <input type="password" name="password" />
		            <input id="loginButton" type="submit" value="Begin Brainstormen" />
		        </form>
		        <a href="index.php?page=register">Nog geen lid? Registreer hier!</a>
      	<?php 
      		} ?>
	</div>
</div>