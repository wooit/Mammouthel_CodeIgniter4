<!-- View pour afficher les notes relatives au site de fouille selectionné -->
<div class="main"><br><strong>List notes of <?=$liste_notes[0]->location?> :</strong> <br>

    <?php 
        foreach($liste_notes as $key){
            echo "<br>";
            foreach($key as $keys => $value){
                echo "<strong>".$keys."</strong> : ".$value." <br>";
            }
        }
    ?>

    <br>
    <br>
    <button onclick="window.location.href='http://localhost:8080/Home/indexo/<?=$index?>'">Return</button>
</div>