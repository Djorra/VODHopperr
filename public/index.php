<?php
    include '../boot.php'; // laadt alle benodigdheden in

    $query = 'SELECT * FROM products ORDER By id ASC LIMIT 6';

    $db = new DB;
    $products = $db->get($query);


    $title = 'Home';
    include "../partials/head.php";
?>

<?php include "../partials/menu.php"; ?>

<div class="container">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .componentsBox.raider-15-6-nieuw {
        background: url(https://gamepc.nl/files/file_upload/file_upload/file/519/achtergrond-raider-15-nieuw.jpg) left top no-repeat;
        background-size: cover;
      }

      .componentsBox.raider-pro-rgb-apex {
        background: url(https://gamepc.nl//files/file_upload/file_upload/file/524/apex-legends-gamepc.jpg) left top no-repeat;
        background-size: cover;
      }


    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>


  <div>
	  <h1>VODHopper</h1>
	  <form id="index-search" action="/search">
	  	<input type="text" placeholder="Zoek naar een film" name="keyword" autocomplete="off">
	  	<button type="submit">
	  		<i class="fa fa-search"></i>
	  	</button>
	  </form>
  </div>



<?php include "../partials/footer.php"; ?>

