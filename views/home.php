<div class="dashboard active" id="dashboard">
    <div class="themeChoose" id="allBoxes">
        <p>Choisissez le genre de musique</p>
        <div class="allBoxes">
            <?php
            foreach ($genre as $elem){ ?> 
            <div class="themeBox button" data-value="<?php echo ($elem["Genre"]);?>" data-info="<?php echo($elem["Genre"]);?>">
                <div class="themeBoxImg">
                    <img src="../ressources/img/genre/<?php echo ($elem["img"]);?> " alt="" srcset="">
                </div>
                <p><?php echo ($elem["Genre"]);?></p>
            </div>
            <?php } ?>
            </div>
    </div>
</div>
