<!-- View pour afficher les information des sites de fouille -->
<div class="main"><br><strong>Site of <?=$site[0]->location;?> :</strong> <br>

    <?php 
        foreach($site as $key){
            echo "<br>";
            foreach($key as $keys => $value){
                echo $keys." : <strong>".$value."</strong><br> ";
            }
        }
    ?>

    <br><br><a href="/Home/indexo_n/<?=$note?>">List notes</a>
    <br><br><a href="/Home/indexo_s/<?=$skeleton?>">List skeletons</a>
    <br><br><button onclick="window.location.href='http://localhost:8080'">Return</button>
</div>
