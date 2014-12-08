<div class="home">
	<h1>Brainstormen doe je hier</h1>
<?php if(empty($_SESSION['user'])){ ?>
	<div class="login" id="register" >
		<h2>Registreer</h2>
		<form action="index.php?page=register" method="post">
        	<ul>
        		<li class="left">
		            <label class="col-sm-2 control-label" for="username">Gebruikersnaam: </label>
 								<input type="username" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username'];?>" placeholder="gebruikersnaam" />
 							</br>
		          	<?php if(!empty($errors['username'])) echo $errors['username'] . '</span>'; ?>
		           	<label class="col-sm-2 control-label" for="firstname">Voornaam: </label>
		            <input type="firstname" name="firstname" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname'];?>" placeholder="voornaam" />
		         </br>
		          	<?php if(!empty($errors['lastname'])) echo $errors['lastname'] . '</span>'; ?>
		            <label class="col-sm-2 control-label" for="lastname">Achternaam: </label>
		            <input type="lastname" name="lastname" value="<?php if(!empty($_POST['lastname'])) echo $_POST['lastname'];?>" placeholder="achternaam"/>
        			</br>
		          	<?php if(!empty($errors['lastname'])) echo $errors['lastname'] . '</span>'; ?>
        		</li>
        		<li class="left">
		            <label class="col-sm-2 control-label" for="email" for="email">E-mail: </label>
		            <input type="email" name="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>" placeholder="email"/>
		          </br>
		          	<?php if(!empty($errors['email'])) echo $errors['email'] . '</span>'; ?>
		            <label for="password">Wachtwoord: </label>
		            <input type="password" name="password" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>
		          </br>
		          	<?php if(!empty($errors['password'])) echo $errors['password'] . '</span>'; ?>
		            <label for="repeat">Herhaal wachtwoord: </label>
		            <input type="password" name="repeat" placeholder="<?php if(!empty($errors['password'])) echo $errors['password']; ?>"/>
        			</br>
		          	<?php if(!empty($errors['repeat'])) echo $errors['repeat'] . '</span>'; ?>
        		</li>
        	</ul>

            <input id="loginButton" type="submit" value="Begin Brainstormen" />
        </form>

      	<?php } ?>
	</div>
</div>
