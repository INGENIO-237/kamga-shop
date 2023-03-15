<?php
require_once("./partials/_header.php");

render_header();

function render_login()
{
    echo ("
    <link rel='stylesheet' href='css/signin.css'>
    
<main class='container form-signin'>
  <form action='../controller/user_handler.php' method='post'>
    <h2 class='text-center'>KAMGA'Shop</h2>
    <h1 class='text-center h3 mb-3 fw-normal'>Connexion</h1>

    <div class='form-floating'>
      <input type='text' class='form-control' id='floatingInput' name='login' placeholder='nom@exemple.com'>
      <label for='floatingInput'>Login</label>
    </div>
    <div class='form-floating'>
      <input type='password' class='form-control' id='floatingPassword' name='password' placeholder='Mot de passe'>
      <label for='floatingPassword'>Mot de passe</label>
    </div>

    <div class='checkbox mb-3'>
      <label>
        <input type='checkbox' value='remember-me'> Se rappeler de moi
      </label>
    </div>
    <button class='w-100 btn btn-lg btn-primary' type='submit'>Connexion</button>
  </form>
</main>
");
}

render_login();

?>