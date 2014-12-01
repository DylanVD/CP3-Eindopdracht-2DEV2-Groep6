<section id="content">
    <h1>Review</h1>

    <div class="hidden">
        <section >
            <div>
                <audio controls src="uploads/<?php echo $audio['audio'];?>.mp3" preload="metadata"></audio>
            </div> 
        </section>

        <section class="app">
            <ol>
               <?php
                if(isset($items)) {
                         foreach($items as $item) {
                            echo '<li>';
                            ?>       
                                <a name="play" href="<?php echo $item['audio'] ?>"><?php echo $item['title'] ?></a>
                           
                            <?php echo '</li>' ;
                        }
                    }?>
                
            </ol>
            <div class="indicators">
            <div class="control-bar">
                <div class="wrap">&nbsp;</div>
            </div>
        </div>
        </section>

    </div>
</section>

