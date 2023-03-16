<?php require('partials/_header.php') ?>
<?php require_once('./html_helper.php') ?>
<?php require_once('../model/catalogue_helper.php') ?>


<?php
    session_start();
    render_header();

    if(isset($_POST) && !empty($_POST)){
        // $product = array(
        //     "nom"=>$_POST["p_nom"],
        //     "prix"=>$_POST["p_prix"],
        //     "qtity"=>$_POST["quantity"]
        // );
        
        // addToCard($product);
        var_dump($_POST);
    }

    $catalogue = get_catalogue_data();
    render_catalogue($catalogue);
    ?>

<?php 
    require('partials/_footer.php'); 
    render_footer();
?>