<!-- View pour afficher les info des squelettes retrouvés sur le site de fouille selectionné -->
<div class="main"><br><strong>List skeletons<?=$liste_skeletons[0]->location;?> :</strong> 
    <br>
    <br>

    <?php 
        for($i=0;$i<count($liste_skeletons);$i++){ 
            echo "<strong>Name : </strong><a class='no_a' href='/Home/skel_info/".$liste_skeletons[$i]->skeleton_id."'>".$liste_skeletons[$i]->name."</a> <br>";
        }
    ?>

    <br>
    <br>
    <button onclick="window.location.href='http://localhost:8080/Home/indexo/<?=$index?>'">Return</button>
</div>