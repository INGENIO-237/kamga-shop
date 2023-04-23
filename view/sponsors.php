<?php 

require_once('./html_helper.php');
    require('partials/_header.php');
    require('partials/_footer.php'); 
    session_start();
    render_header();

    $jsonString = file_get_contents("http://playground.burotix.be/adv/banner_for_isfce.json");
    $jsonData = json_decode($jsonString, true);

    echo("
        <div class='row'>
            <div class='col-md-8'>
            </div>
            <div class='col-md-4'>".
                render_sponsor($jsonData)
            ."</div>
        </div>

    ");
 
    render_footer();
?>