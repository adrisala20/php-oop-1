<?php
include __DIR__ ."/View/header.php";
include __DIR__ ."/Models/Movie.php";
?>

<main>
    <div class="container">

    
    <?php
    //$title,$language,$cover,$price,$rating
    $movie1 = new Movie('jay in crime', 'it', 'detalles',9.99,10);
    echo $movie1->title;
    echo $movie1-> showAll();
    ?>
    </div>
</main>

<?php 
include __DIR__ ."/View/footer.php";
?>
