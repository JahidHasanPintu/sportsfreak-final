<?php
include("admin/db.php");
$title = '';
$category ='';
$picture = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM news WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $category = $row['category'];
    $picture = $row['picture'];
    $description = $row['description'];
    $time = $row['created_at'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Details News</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
      <?php include("shared/header.php") ?>
        
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $title; ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on <?php echo $time; ?> </div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?php echo $category; ?></a>
                            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo $picture; ?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $description;?></p>
                            
                            <p class="fs-5 mb-4">All of these positive skills helped me to make sports not only a passion, but a career. My career in sports is not a job, it is a passion. I love to coach, teach and inspire student-athletes around the World. Sports inspire all of us to do great things. All while cheering positively for our favorite teams. All while having fun in a safe environment. I love sports. They are a true love of mine.</p>
                            <h2 class="fw-bolder mb-4 mt-5">Why you should read <?php echo $title; ?></h2>
                            <p class="fs-5 mb-4">Let me count the ways….I love sports for all the amazing doors they have opened for me in my life. Playing sports have allowed me to travel the World, make new friends and experience new cultures. I have run a road race in Sweden. Played basketball in Fiji and Australia. </p>
                            <p class="fs-5 mb-4">Coached basketball in Belgium, France and The Netherlands. Played soccer with kids in Denmark. And most recently experienced shooting hoops while wearing flip-flops in The Philippines. All of this because of a bouncing ball and a desire to have fun playing the sports I love. I love sports for everything they have taught me about teamwork, leadership, community, hard work, the pursuit of excellence and achieving goals. </p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-dark" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Cricket</a></li>
                                        <li><a href="#!">Football</a></li>
                                        <li><a href="#!">Tennis</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Worldcup</a></li>
                                        <li><a href="#!">AsiaCup</a></li>
                                        <li><a href="#!">Uefa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget -->
                    <div class="card mb-4">
                        <div class="card-header">Breaking News</div>
                        <div class="card-body">Mushfiqur Rahim has retired from T20I cricket! Maybe he has taken thi decission for the failure of asia cup.</div>
                    </div>
                </div>
            </div>
        </div>
       <?php include("shared/footer.php") ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
