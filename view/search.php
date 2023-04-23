<?php
require_once("./html_helper.php");
require_once("./partials/_header.php");
require_once("./partials/_footer.php");
require_once("../controller/search.php");
session_start();
render_header();

if($_POST && !empty($_POST)){
    $results = get_search_data($_POST['query']);
    
    echo "<p>Resultat pour: <b><i>'" . $_POST['query'] ."'</i></b>";
    render_catalogue($results);
}

render_footer();

?>