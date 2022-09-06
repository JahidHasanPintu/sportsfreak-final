<?php include("admin/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Freak - online sports news paper</title>
    <link rel="stylesheet" href="card.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include("shared/header.php") ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="banner1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="banner2.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="banner3.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    
      <main class="my-5">
        <div class="container">
          <!--Section: News-->
          <section class="text-center">
            <h4 class="mb-5"><strong>Latest News</strong></h4>
    
            <div class="row">
            <?php
          $query = "SELECT * FROM news";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <div class="box col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="<?php echo $row['picture']; ?>" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['category']; ?></h5>
                    <p class="card-text">
                    <?php echo $row['title']; ?>
                    </p>
                    <a href="details.php?id=<?php echo $row['id']?>" class="btn btn-dark">Read</a>
                  </div>
                </div>
              </div>
          
          <?php } ?>
              
          </section>
          <!--Section: Content-->
        </div>
      </main>
      <!--Main layout-->
    
      
     
    
        <hr class="m-0" />
    
        
    
        <?php include("shared/footer.php") ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>

