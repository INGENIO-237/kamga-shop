<?php
require_once("./html_helper.php");
require_once("./partials/_header.php");
require_once("./partials/_footer.php");

render_header();
session_start();
render_card($_SESSION["user_card"]);
render_footer();

?>