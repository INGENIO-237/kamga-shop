<?php require('partials/_header.php') ?>

<section class="card">
    <div class="form">
        <p style="background-color: #000; color: #fff; padding: 10px;">FILTRER PAR</p>
        <div class="form1">

            <form>
                <p>
                    Prix <span style="padding: 0 0 0 19rem;">-</span><br />
                    <label style="text-align: center;">120 résultat</label><BR>
                    <input type="range" id="rangeInput" name="rangeInput" min="27" max="293" value="0" oninput="amount.value=rangeInput.value">

                    <output id="amount" name="amount" for="rangeInput">0</output>
                </p>

            </form>
            <hr>
            <form>
                <p> MARQUE<span style="padding: 0 0 0 15rem;">-</span> <br>
                    <input type="search" placeholder="Marque" height="30px">
                    <svg role="presentation" class="i-search" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                        <circle cx="14" cy="14" r="12" />
                        <path d="M23 23 L30 30" />
                    </svg></input><br>
                    <input type="checkbox"><label>Tefal</label><br>
                    <input type="checkbox"><label>Générique</label><br>
                </p>
            </form>


        </div>
    </div>
    <div class="row1">

        <div class="cardView">
            <img src="./media/casserole1.webp" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>150£</b></h4>
                <p>TATOO MOBILE<BR>Groupe de 4 casserole</p>
            </div>
        </div>
        <div class="cardView">
            <img src="./media/casserole2.png" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>14£</b></h4>
                <p>Casserole L<BR>Une casserole en inox</p>
            </div>
        </div>
        <div class="cardView">
            <img src="./media/casserole3.jpg" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>159£</b></h4>
                <p>Set Casserole de 5<BR>Groupe de 5 casserole de taille croissante</p>
            </div>
        </div>
    </div>
</section>
<section class="card" id="card2" style="margin-bottom: 10px;">
    <div class="form">
        <div class="form1">
            <form>
                <p>
                    Vendeur <span style="padding: 0 0 0 19rem;">-</span><br />
                    <span style="padding: 0 0 0 2rem;"></span><input type="checkbox" /> <label>Fnao.be</label><br />
                    <span style="padding: 0 0 0 2rem;"> <select>
                            <option selected>Vendeurs partenaires</option>
                        </select>
                </p>
            </form>
            <hr>
            <form>
                <p> TYPE DE CASSEROLES<span style="padding: 0 0 0 5rem;">-</span><br />
                    <input type="checkbox" /> <label>Casseroles</label><br />
                    <input type="checkbox" /> <label>Poèle et sauteuse</label><br />
                </p>
            </form>
            <hr>
            <form>
                <p> CAPACITE<span style="padding: 0 0 0 17rem;">-</span><br />
                    <input type="checkbox" /> <label>1500ml</label><br />
                    <input type="checkbox" /> <label>2100ml</label><br />
                    <input type="checkbox" /> <label>3000ml</label><br />
                </p>
            </form>

        </div>
    </div>
    <div class="row1">

        <div class="cardView">
            <img src="./media/casserole4.png" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>30£</b></h4>
                <p>Casserole à manche<BR>Taille adaptée pour plusieurs fonctions</p>
            </div>
        </div>
        <div class="cardView">
            <img src="./media/casserole5.webp" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>50£</b></h4>
                <p>Set Casserole de 2<BR>Entièrement en inox
                </p>
            </div>
        </div>
        <div class="cardView">
            <img src="./media/casserole6.jpg" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>200£</b></h4>
                <p>Jeu de casserole<BR>Entièrement en inox</p>
            </div>
        </div>
    </div>
</section>

<section class="card" id="card2" style="margin-bottom: 250px;">
    <div class="form" style="border: 0px #fff; ;">

    </div>
    <div class="row1">

        <div class="cardView">
            <img src="./media/casserole7.jpg" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>200£</b></h4>
                <p>Set Casserole de 5<BR>jolie casseroles en tefal</p>
            </div>
        </div>
        <div class="cardView">
            <img src="../media/casserole8.jpg" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>250£</b></h4>
                <p>Set Casserole de 5<BR>Entièrement en inox </p>
            </div>
        </div>
        <div class="cardView">
            <img src="./media/casserole9.jpeg" alt="Avatar1" style="width:100%">
            <div class="container">
                <h4><b>250£</b></h4>
                <p>Set Casserole de 5<BR>Entièrement en inox</p>
            </div>
        </div>
    </div>
</section>

<?php require('partials/_footer.php') ?>