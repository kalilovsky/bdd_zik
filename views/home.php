<div class="dashboard active" id="dashboard">
    <div class="themeChoose" id="allBoxes">
        <p>Choisissez le genre de musique</p>
        <div class="allBoxes">
            
                <?php
                foreach ($genre as $elem) { ?>
                    <div class="themeBox button" data-value="<?php echo ($elem["idGenre"]); ?>" data-info="<?php echo ($elem["Genre"]); ?>">
                        <div class="themeBoxImg">
                            <img src="../ressources/img/genre/<?php echo ($elem["img"]); ?> " alt="" srcset="">
                        </div>
                        <p><?php echo ($elem["Genre"]); ?></p>
                    </div>
                <?php } ?>
           
        </div>
    </div>
</div>
<script>
     Array.from( document.getElementsByClassName("button")).forEach(e=>{
        e.addEventListener("click", ()=>{
            
            let formData1 = new FormData()
            formData1.append("selectedGenre",e.dataset.value);
            const url = "../index.php?selectedGenre="+e.dataset.value+"&currentPage=showSongsByCat";
            fetch(url)
            .then(data => window.location.assign("./index.php"));

        })
    });

</script>