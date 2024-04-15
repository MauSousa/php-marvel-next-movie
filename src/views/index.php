<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Curl - PHP - Marvel</title>
</head>
<body class="bg-dark-subtle d-flex justify-content-center">
    <main class="container d-flex justify-content-center mt-3 flex-column">
        <section class="d-flex justify-content-center mb-2">
            <h1>Next Marvel Movie</h1>
        </section>
        <section class="d-flex justify-content-center">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                            <h3 class="mt-2"><?=$data['title']?> se estrena en <?=$data['days_until']?> días</h3>
                            <img src="<?=$data['poster_url'];?>" class="d-block" alt="<?=$data['title']?>">
            <p>Fecha de estreno: <?= convert_date($data['release_date']); ?></p>
                </div>
                <div class="carousel-item">
                            <h3 class="mt-2"><?=$data['following_production']['title']?> </h3>
                            <img src="<?=$data['following_production']['poster_url'];?>" class="d-block" alt="<?=$data['following_production']['title']?>">
            <p>Fecha de estreno: <?= convert_date($data['release_date']); ?></p>
                </div>
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </section>
    </main>
</body>
</html>
