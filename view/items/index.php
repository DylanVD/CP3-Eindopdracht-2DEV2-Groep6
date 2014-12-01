<div id="home">
	<h1>Brainstormen doe je hier</h1>

	<div id="login">
		<h2>Login</h2>
		<?php if(empty($_SESSION['user'])){ ?>
        <form action="index.php?page=login" method="post">
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="email" />
            <label for="password">Wachtwoord: </label>
            <input type="password" name="password" placeholder="password" />
            <input id="loginButton" type="submit" value="Begin Brainstormen" />
        </form>
        <a href="index.php?page=register">Register</a>
      	<?php } ?>

	      <ul>
	          <?php if(!empty($_SESSION['user'])){ ?>
	          <li>Signed in as <?php echo $_SESSION['user']['username'];?></li>
	          <li><a href="index.php?page=logout" class="navbar-link">Logout</a></li>
	          <?php } ?>
	      </ul>
	</div>
</div>