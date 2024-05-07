<?php
include __DIR__ . "/View/header.php";
include __DIR__ . "/Models/Movie.php";
$movies =[
    new Movie ('Babylon A.D.', 'en', 'https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg', 9.99, 5.601),
]
?>

<main>
    <div class="container">
        <section>
            <h2>Movies</h2>
            <div class="row">
                <?php foreach($movies as $movie) {?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?=$movie-> cover?>" class="card-img-top" alt="<?=$movie->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <p class="card-text"><?= $movie->language?></p>
                            <p class="card-text"><?= $movie->price?></p>
                            <p class="card-text"><?= $movie->rating?></p>

                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                
                <?php   //$title,$language,$cover,$price,$rating
             }?>
            </div>

        </section>

    </div>
</main>

<?php
include __DIR__ . "/View/footer.php";
?>