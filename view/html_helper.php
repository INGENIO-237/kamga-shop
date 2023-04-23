<?php

function render_catalogue($catalogue){
    echo "<div class='album'>
    <div class='container'>
    <h1>CATALOGUE</h1>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>";
    for($i = 0; $i < count($catalogue); $i++){
        echo "<div class='col'>
          <div class='card shadow-sm'>
            <img class='bd-placeholder-img card-img-top' width='100%' height='225' src='". $catalogue[$i]['image_pro'] ."'/>

            <div class='card-body'>
                <form method='post' action='../controller/card.php'>
                    <p class='card-text' name='p_nom'>". $catalogue[$i]['nom_pro'] ."</p>
                    <p class='card-text' name='p_prix'>". $catalogue[$i]['prix_pro'] ."€</p>
                    <div class='row d-flex justify-content-between align-items-center'>
                        <div class='col-sm-6'>
                            <input type='number' class='form-control' min='0' value='". $i ."' hidden name='id'>
                            <input type='text' class='form-control' min='0' hidden name='nom". $i ."' value='". $catalogue[$i]['nom_pro'] ."'>
                            <input type='number' class='form-control' min='0' hidden name='prix". $i ."' value='". $catalogue[$i]['prix_pro'] ."'>
                            <input type='number' class='form-control' min='0' value='0' width='10%' name='quantity". $i ."'>
                        </div>
                        <div class='col-sm-6'>
                            <button class='btn btn-success' type='submit'>Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>";
    }   
    echo "</div>
    </div>
    </div>";
}


function render_card($products){
    $total = 0;
    echo "<section class='Produits'>
<div style='margin:2.5rem;'>
    <h1 style='text-align: center; margin: 2.5rem; font-size: 30px;'>VOTRE PANIER</h1>
  
  <form action='' style='float: right; margin-bottom: 10px;'>
    <input type='search' placeholder='chercher....' style='height:35px; padding: 6px;'> 
    <input type='submit' value='Rechercher' style='border-radius: 10px; padding: 10px; background-color: blue; color: #fff; border: 0px;'>
  </form> 
  
<form action='../controller/discard.php' method='post'>
<table  style='margin-bottom: 100px;' class='table_commande table'>
    
        <tr>
            <th>Formule</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Sous-total</th>
        </tr>";
    
    for($i=0; $i < count($products); $i++){
        $total += (int)$products[$i]['qtity']*(int)$products[$i]['prix_pro'];
        echo"
        <tr>
            <td style='color: hotpink;'>". $products[$i]['nom_pro'] ."</td>
            <td style='color: blue;'>". $products[$i]['prix_pro'] ."</td>
            <td style='color: hotpink;'>". $products[$i]['qtity'] ."</td>
            <td style='color: blue;'>". (int)$products[$i]['qtity']*(int)$products[$i]['prix_pro'] ."</td>
        </tr>
        ";
    }


    echo"<tr>
          <th>Total à payer</th>
          <th colspan='2'></th>
          <th style='color: blue;'>". $total ."</th>
      </tr>
</table>
<button type='submit' name='checkout' class='btn btn-primary col-md-12'>Payer</button>
</form>
</div>

</section>";
}

function render_about(){
    echo "<div style='padding-top: 150px;padding-top: 100px;'>
    <h1>
    KAMGA SHOP
</h1>
<p>
    Kamga'Shop est la réference en terme de produit de qualité et moins chers. Venez découvrir un univers commercial sans pareil
</p>
<br><br>
<div>
    <h2>Contact</h2>
    <table style='height: 500px; width: 700px; padding: 20px;' class='text-left'>
        <tr>
            <td>KamgaShop</td>
        </tr>
        <tr>
            <td>info@masociete.be</td>
        </tr>
        <tr>
            <td>0494 12 34 56
            </td>
        </tr>
        <tr>
            <td>Rue du professeur bienveillant, 11040 Etterbeek</td>
        </tr>
        <tr>
            <td>0123.456.789</td>
        </tr>
    </table>
</div>
</div>
";
}

function render_sponsor($jsonData){
    foreach($jsonData as $key=>$value){

        echo("
        <a href=". $value['link'] .">
            <div class='card' style='width: 18rem; color: ". $value['color'] .";'>
                <img src=". $value['image'] ." class='card-img-top' alt=". $value['image'] .">
                <div class='card-body'>
                    <h5 class='card-title'>". $value['link'] ."</h5>
                    <p class='card-text text-justify'>". $value['text'] ."</p>
                </div>
            </div>
        </a>
        ");
    }
}
      

?>