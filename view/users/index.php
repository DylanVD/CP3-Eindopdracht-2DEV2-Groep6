<div class="home">
	<h1>Brainstormen doe je hier</h1>

	<div class="login">
		<h2>Login</h2>
		<?php if(empty($_SESSION['user']))
			{ ?>
				<form action="index.php?page=login" method="post" enctype="multipart/form-data">
		            <label class="col-sm-2 control-label" for="email">E-mail: </label>
		            <input type="text" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>" placeholder="email"/>
		          	</br>
		          	<?php if(!empty($errors['email'])) echo $errors['email'] . '</span>'; ?>	

		          	<label class="col-sm-2 control-label" for="password">Wachtwoord:: </label>
		            <input type="password" name="password" value="<?php if(!empty($_POST['password'])) echo $_POST['password'];?>" placeholder="wachtwoord:"/>
		          	</br>
		          	<?php if(!empty($errors['password'])) echo $errors['password'] . '</span>'; ?>	

		            <input id="loginButton" type="submit" value="Begin Brainstormen" />
		        </form>
		        <a href="index.php?page=register">Nog geen lid? Registreer hier!</a>
      	<?php 
      		} ?>
	</div>
</div>