<?php
require_once("./html_helper.php");
require_once("./partials/_header.php");
require_once("./partials/_footer.php");

render_header();
isset($_SESSION["user_card"]) ? $products = $_SESSION["user_card"] : $products = array();
render_card($products);
render_footer();

?>