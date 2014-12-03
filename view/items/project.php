<section id="tools">
	<div id="myProjects">
		<h2>Mijn projecten:</h2>
		<h3>Project 1</h3>
		<h3 class="active">Project 2</h3>
		<h3>Project 3</h3>
		<a href="index.php?page=new"><button>+</button></a>
	</div>
	<form id="postIt">
		    <label for="postit">Nieuwe Post-it</label>
            <textarea name="postit"></textarea>
            <button>Post It!</button>
	</form>
	<form id="uploadPicture">
	<label for="addImageImage">Upload een foto/Video</label>
            <input id="addImageImage" type="file" name="addImageImage" />
            <button>Voeg in!</button>
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
</section>

<section id="whiteboard">
	<h1>Project 2</h1>

	<div id="postItText">
		<p class="removePostIt">X</p>
		<p>feiuhfuiehzfiuhezniufhnezfi^znefbljmz</p>
	</div>
</section>