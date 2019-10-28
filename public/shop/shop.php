<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products WHERE slug = :slug';

    $db = new DB;
    $product = $db->find($query, ['slug' => $_GET['slug']]);


    $title = $product['title'];
    include "../../partials/head.php";

 

    include "../../partials/menu.php"; 
    include "../../partials/cart.php"; ?>

    <div class="container product">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <br>
                <br>
                <img src="<?= Http::asset('img/'.$product['image']); ?>">
            </div>
            <div class="col-sm-6">
                <br>
                <br>
                <h1><?= $product['title']; ?></h1>
                <h2>&euro;<?= $product['price']; ?></h2><br>

                <?= $product['seo_description']; ?><br><br>
                <a href="<?= Http::asset('api/cart.php?id='.$product['id'].'&action=add'); ?>"  
                    class="btn btn-success order">Toevoegen aan winkelmand
                </a>
            </div>
            <div class="col-sm-6">
                <h3>Specificaties</h3>
                <h5><?= $product['description']; ?></h5>
            </div>
        </div>
    </div>  

<?php include "../../partials/footer.php"; ?>
