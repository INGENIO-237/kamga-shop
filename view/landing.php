<?php require('partials/_header.php') ?>
<?php require_once('./html_helper.php') ?>
<?php require_once('../model/catalogue_helper.php') ?>


<?php
    session_start();
    render_header();
    $catalogue = get_catalogue_data();
    render_catalogue($catalogue);
?>

<?php 
    require('partials/_footer.php'); 
    render_footer();
?>