<div class="home">
	<h1>Brainstormen doe je hier</h1>
	<div class="login">
		<h2>Login</h2>
		<?php if(empty($_SESSION['user'])){ ?>
				<form action="index.php?page=login" method="post">

		            <label class="col-sm-2 control-label" for="email">E-mail: </label>
								<input class="<?php if(!empty($errors['email'])) echo 'error-input'?>" type="email" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">
								<?php if(!empty($errors['email'])) echo '<span class="error-message">' . $errors['email'] . '</span>'; ?>
							</br>
		          	<label class="col-sm-2 control-label" for="password">Wachtwoord: </label>
 								<input class="<?php if(!empty($errors['email'])) echo 'error-input'?>" type="password" name="password" placeholder="wachtwoord" value="<?php if(!empty($_POST['password'])) echo $_POST['password'];?>">
 								<?php if(!empty($errors['password'])) echo '<span class="error-message">' . $errors['password'] . '</span>'; ?>
 							</br>

		            <input id="loginButton" type="submit" value="Begin Brainstormen" />
		        </form>

		        <a href="index.php?page=register">Nog geen lid? Registreer hier!</a>
      	<?php
      		} ?>
	</div>
</div>
