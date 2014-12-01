<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>10der</title>
	<link rel="stylesheet" href="css/screen.css">
</head>
<body>

	<header>
    <nav>
      <div>
      <?php if(empty($_SESSION['user'])){ ?>
        <form action="index.php?page=login" method="post">
            <input type="email" name="email" placeholder="email" class="form-control" />
                <input type="password" name="password" placeholder="password" class="form-control" />
                <input type="submit" value="Login" class="btn btn-default" />
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
    </nav>
  </header>
		<div class="container">
			<?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
			<?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

			<?php echo $content; ?>
		</div>

		<script src="js/app.js"></script>
	</body>
</html>
