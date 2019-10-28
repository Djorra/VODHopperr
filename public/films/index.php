<?php
    include '../../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products ORDER By id ASC LIMIT 30';


    $title = 'Films';


    $db = new DB;
    $product = $db->get($query);
    include "../../partials/head.php";



    include "../../partials/menu.php"; ?>

    <div class="container products">
        <div class="row">
        	<?php foreach($product as $products) { ?>
            <div class="col-sm-2">
            	<br>
                <img src="<?= Http::asset('public/img/'.$products['image']); ?>">
                <br>
            </div>
        	<?php } ?>
        </div>
    </div>
<?php include "../../partials/footer.php"; ?>
