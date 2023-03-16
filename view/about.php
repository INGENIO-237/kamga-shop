<?php 
    require("./html_helper.php"); 
    require("partials/_header.php"); 
    require("partials/_footer.php");
    
    session_start();
    
    render_header();
    render_about();
    render_footer();    
?>