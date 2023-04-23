<?php 

require_once('./html_helper.php');
    require('partials/_header.php');
    require('partials/_footer.php'); 
    require_once('../model/catalogue_helper.php');

    session_start();
    render_header();

    
    $catalogue = get_catalogue_data();

    // print_r($catalogue);
    render_catalogue($catalogue);
 
    render_footer();
?>