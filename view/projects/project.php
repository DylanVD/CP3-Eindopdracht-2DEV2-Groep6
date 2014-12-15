<section id="tools">
	<div id="myProjects">
		<h2>Mijn projecten:</h2>
		<div id="projecten">
			<?php foreach ($projects as $project){ ?>
			<a href="index.php?page=project&amp;id=<?php echo $project['id'];?>">
				<h3><?php echo $project['title'];?></h3>
			</a>
			<?php } ?>
		</div>

		<a  id="createProject" href="index.php?page=new"><button>+</button></a>

	</div>


	<form id="postIt">
    <label for="postit">Nieuwe Post-it</label>
    <textarea name="postit"></textarea>
    <button>Post It!</button>
 
	</form>
	<form id="uploadPicture" action="index.php?page=project" method="post" class="form-horizontal" enctype="multipart/form-data" id="addImage">
		<div class="form-group<?php if(!empty($errors['image'])) echo ' has-error'; ?>">
			<label class="col-sm-2 control-label" for="addImageImage">Upload een foto/Video</label>x
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


      <div id="loggedIn">
 		<?php if(!empty($_SESSION['user'])){ ?>
          <p>Signed in as </br><?php echo $_SESSION['user']['username'];?></p>
          <a href="index.php?page=logout" class="navbar-link">Logout</a>
          <?php } ?>
      </div>
</section>

<section id="whiteboard">

	<h1><?php echo $board['title'];?></h1>
	<?php
	   foreach($items as $item) {
	        echo '<img id="move_image" src="uploads/'. $item['items_image'].'.'. $item['items_extension'].'">';
	    }
    ?>

	<div id="postItText">
		<p class="removePostIt">X</p>
		<p>Dit is een testje jaja toch wel</p>
	</div>
</section>
