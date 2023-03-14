<?php

function render_catalogue($catalogue){
    for($i = 0; $i < count($catalogue); $i++){
        echo "<div class='cardView'><img src='" . $catalogue[$i]['image'] . "' alt='". $catalogue[$i]['nom'] ."'><div class='container'><h4><b>". $catalogue[$i]['prix'] ."£</b></h4><p>" . $catalogue[$i]['nom'] . "</p></div></div>";
    }
}

?>