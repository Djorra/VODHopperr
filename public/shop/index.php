<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products ORDER By id ASC LIMIT 6';

    $db = new DB;
    $product = $db->find($query);


    $title = $product['title'];
    include "../../partials/head.php";



    include "../../partials/menu.php"; ?>

    <div class="container product">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <br>
                <br>
                <img src="<?= Http::asset('public/img/'.$product['image']); ?>">
            </div>
        </div>
    </div>
<?php include "../../partials/footer.php"; ?>
