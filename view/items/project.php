<section id="tools">
	<div id="myProjects">
		<h2>Mijn projecten:</h2>
		<h3>Project 1</h3>
		<h3 class="active">Project 2</h3>
		<h3>Project 3</h3>
		<a href="index.php?page=new"><button>+</button></a>
	</div>
	<div>
	</div>
	<form id="postIt">
		    <label for="postit">Nieuwe Post-it</label>
            <textarea name="postit"></textarea>
            <button>Post It!</button>
	</form>
	<form id="uploadPicture" action="index.php?page=project" method="post" class="form-horizontal" enctype="multipart/form-data" id="addImage">
		<div class="form-group<?php if(!empty($errors['image'])) echo ' has-error'; ?>">
			<label class="col-sm-2 control-label" for="addImageImage">Upload een foto/Video</label>
      <input id="addImageImage" type="file" name="image" class="form-control" value="<?php if(!empty($_POST['image'])) echo $_POST['image'];?>" />
      <span class="error-message"<?php if(empty($errors['image'])) echo 'style="display: none;"';?>>
								  <?php if(empty($errors['image'])){ echo 'Please select an image'; }else echo $errors['image']; ?></span>
      <button class="btn btn-default">Voeg in!</button>
    </div>
	</form>
	<form id="invite">
	<label for="invite">Nodig vrienden uit</label>
            <input type="postit" name="invite" />
            <button>Invite!</button>
	</form>
      <ul>
          <?php if(!empty($_SESSION['user'])){ ?>
          <li>Signed in as <?php echo $_SESSION['user']['username'];?></li>
          <li><a href="index.php?page=logout" class="navbar-link">Logout</a></li>
          <?php } ?>
      </ul>


      <div id="loggedIn">
 		<?php if(!empty($_SESSION['user'])){ ?>
          <p>Signed in as <?php echo $_SESSION['user']['username'];?></li>
          <p><a href="index.php?page=logout" class="navbar-link">Logout</a></li>
          <?php } ?>
      </div>
</section>

<section id="whiteboard">
	<h1>Project 2</h1>
	<?php
   foreach($items as $item) {
        echo '<img id="move_image" src="uploads/'. $item['items_image'].'.'. $item['items_extension'].'">';
    }
    ?>

	<div id="postItText">
		<p class="removePostIt">X</p>
		<p>feiuhfuiehzfiuhezniufhnezfi^znefbljmz</p>
	</div>
</section>
