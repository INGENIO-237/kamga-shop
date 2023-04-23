<?php 

require_once('./html_helper.php');
    require('partials/_header.php');
    require('partials/_footer.php'); 
    require_once('../model/catalogue_helper.php');

    session_start();
    render_header();

    echo "
        <h1>CATALOGUE</h1>
        <form action='./search.php' style='float: right; margin-bottom: 10px;' method='POST'>
            <input type='search' placeholder='chercher....' style='height:35px; padding: 6px;' name='query'> 
            <input type='submit' value='Rechercher' style='border-radius: 10px; padding: 10px; background-color: blue; color: #fff; border: 0px;'>
        </form>
    ";
    $catalogue = get_catalogue_data();

    // print_r($catalogue);
    render_catalogue($catalogue);
 
    render_footer();
?>