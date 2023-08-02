
<!-- Start of Header -->

<?php require_once("header.php") ?>

<!-- End of Header -->

<!-- After the opening body tag <body> -->
     
     <?php #require_once("Views/home.php") ?>

     <main class="main">

     <?php 

          require "Classes/Fruit.php";

          // $mango = new Fruit();
          // $mango->name = 'Mango'; // OK
          // $mango->color = 'Yellow'; // ERROR
          // $mango->weight = '300'; // ERROR
          $strawberry = new Strawberry("Strawberry", "red");
          $strawberry->message();
          $strawberry->intro();

     ?>
     </main>

<!-- Before the closing body tag </body>  -->

<!-- Start of Footer -->

<?php require_once("footer.php") ?>

<!-- End of Footer -->
