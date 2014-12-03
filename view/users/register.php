<div class="home">
	<h1>Brainstormen doe je hier</h1>

	<div class="login" id="register" >
		<h2>Registreer</h2>
		<?php if(empty($_SESSION['user'])){ ?>
        <form  action="index.php?page=home" method="post">
        	<ul>
        		<li class="left">
		            <label for="username">Gebruikersnaam: </label>
		            <input type="text" name="username" alue="<?php if(!empty($_POST['username'])) echo $_POST['username'];?>" placeholder="<?php if(!empty($errors['username'])) echo $errors['username']; ?>"/>
		            <label for="firstName">Voornaam: </label>
		            <input type="firstName" name="firstName" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname'];?>" placeholder="<?php if(!empty($errors['firstname'])) echo $errors['firstname']; ?>" />
		            <label for="lastName">Achternaam: </label>
		            <input type="lastName" name="lastName" value="<?php if(!empty($_POST['lastname'])) echo $_POST['lastname'];?>" placeholder="<?php if(!empty($errors['lastname'])) echo $errors['lastname']; ?>"/>     			
        		</li>
        		<li class="left">
		            <label for="email">E-mail: </label>
		            <input type="email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>" placeholder="<?php if(!empty($errors['email'])) echo $errors['email']; ?>"/>
		            <label for="password">Wachtwoord: </label>
		            <input type="password" name="password" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>
		            <label for="repeat">Herhaal wachtwoord: </label>
		            <input type="password" name="repeat" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>   			
        		</li>
        	</ul>

            <input id="loginButton" type="submit" value="Begin Brainstormen" />
        </form>

      	<?php } ?>
	</div>
</div>