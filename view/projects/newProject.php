
<div id="newProject">

    <div id="new">
        <h1>Nieuw Project</h1>
         <form id="newProjectForm" action="index.php?page=new" method="post">
            <label for="title">Titel project:</label>
            <input type="title" name="title" value="<?php if(!empty($_POST['title'])) echo $_POST['title'];?>"/>
            <?php if(!empty($errors['title'])) echo $errors['title']; ?>
            <p>Druk "ENTER" om te beginnen met brainstormen</p>
        </form>
</div>

