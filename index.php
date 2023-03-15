<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
    <!--Nav Bar-->
    <?php
    include 'navbar.php';
?>


    <!--Carousel-->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
              <div class="carousel-item active" >
                <div class="overlay-image" style="background-image:url(./homepage-images/survey2.jpg);"></div>
                  <div class="container2">
                    <h1>Example Headline</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis eaque sint, tenetur asperiores aspernatur.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                      Sign up today
                    </a>
                  </div>
              </div>
              <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(./homepage-images/survey1.jpg);"></div>
                <div class="container2">
                  <h1>Example Headline</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis eaque sint, tenetur asperiores aspernatur.</p>
                  <a href="#" class="btn btn-lg btn-primary">
                    Sign up today
                  </a>
                </div>
              </div>
              <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(./homepage-images/survey3.jpg);"></div>
                <div class="container2">
                  <h1>Example Headline</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis eaque sint, tenetur asperiores aspernatur.</p>
                  <a href="#" class="btn btn-lg btn-primary">
                    Sign up today
                  </a>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
          <span class="sr-only"></span>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
          <span class="sr-only"></span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
      <!--footer-->
      <section class="parallax text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container 3">
          <div class="row"></div>
          <div class="d-sm-flex align-items-center justify-content-between bg-dark p-5" style="--bs-bg-opacity: .5;">
            <div>
              <h1>DMI SURVEYING</h1>
              <p class="lead my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt molestiae doloribus ut possimus unde. 
              </p>
            </div>
          </div>
        </div>
      </section>
   

    
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="nav-bar.js"></script> 
  </body>
</html>