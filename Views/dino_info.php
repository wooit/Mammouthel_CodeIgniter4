<!-- View pour afficher les info pour de chaque squelette + img -->
<div class="main">
    <br>
    <strong><?=$dino_info[0]->name?> info of <?=$dino_info[0]->location;?> :</strong> 
    <br>
    <br>

    <?php 
        for($i=0;$i<count($dino_info);$i++){ 
            echo "<strong>Depht : </strong>".$dino_info[$i]->depht." <br><strong>Position : </strong>".$dino_info[$i]->position."<br><strong>Image :  </strong><br>&nbsp;".$dino_info[$i]->photo." <br>";
        }
    ?>

    <br>
    <br>
    <button onclick="window.location.href='http://localhost:8080/Home/indexo_s/<?=$dino_info[0]->site_id?>'">Return</button>
</div>