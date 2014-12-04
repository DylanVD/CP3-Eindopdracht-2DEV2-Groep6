<div class="home">
	<h1>Brainstormen doe je hier</h1>

	<div class="login" id="register" >
		<h2>Registreer</h2>
		<?php if(empty($_SESSION['user'])){ ?>
        <form  action="index.php?page=register" method="post">
        	<ul>
        		<li class="left">
        			<div class="form-group<?php if(!empty($errors['username'])) echo ' has-error'; ?>">
		            <label class="col-sm-2 control-label" for="username">Gebruikersnaam: </label>
		            <input type="text" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username'];?>" placeholder="gebruikersnaam"/>
		          	</br>
		          	<?php if(!empty($errors['username'])) echo $errors['username'] . '</span>'; ?>
		          </div>
		          <div class="form-group<?php if(!empty($errors['firstname'])) echo ' has-error'; ?>">
		           	<label class="col-sm-2 control-label" for="firstname" for="firstName">Voornaam: </label>
		            <input type="firstName" name="firstName" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname'];?>" placeholder="voornaam" />
		         </br>
		          	<?php if(!empty($errors['lastname'])) echo $errors['lastname'] . '</span>'; ?>
		          </div>
		          <div class="form-group<?php if(!empty($errors['lastname'])) echo ' has-error'; ?>">
		            <label class="col-sm-2 control-label" for="lastname" for="lastName">Achternaam: </label>
		            <input type="lastName" name="lastName" value="<?php if(!empty($_POST['lastname'])) echo $_POST['lastname'];?>" placeholder="achternaam"/>
        			</br>
		          	<?php if(!empty($errors['lastname'])) echo $errors['lastname'] . '</span>'; ?>
        			</div>
        		</li>
        		<li class="left">
        			<div class="form-group<?php if(!empty($errors['email'])) echo ' has-error'; ?>">
		            <label class="col-sm-2 control-label" for="email" for="email">E-mail: </label>
		            <input type="email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>" placeholder="email"/>
		          </br>
		          	<?php if(!empty($errors['email'])) echo $errors['email'] . '</span>'; ?>
		          </div>
		          <div class="form-group<?php if(!empty($errors['password'])) echo ' has-error'; ?>">
		            <label for="password">Wachtwoord: </label>
		            <input type="password" name="password" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>
		          </br>
		          	<?php if(!empty($errors['password'])) echo $errors['password'] . '</span>'; ?>
		          </div>
		          <div class="form-group<?php if(!empty($errors['repeat'])) echo ' has-error'; ?>">
		            <label for="repeat">Herhaal wachtwoord: </label>
		            <input type="password" name="repeat" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>
        			</br>
		          	<?php if(!empty($errors['repeat'])) echo $errors['repeat'] . '</span>'; ?>
        			</div>
        		</li>
        	</ul>

            <input id="loginButton" type="submit" value="Begin Brainstormen" />
        </form>

      	<?php } ?>
	</div>
</div>
