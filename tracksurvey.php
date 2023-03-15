<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</head>

<body>
    <!--Nav Bar-->
<?php
include 'navbar.php';
?>


    <!--Booking section-->
    <section class="p-5 text-light formsec">
        <div class="container-lg">
            <div class="text-center">
                <h1> Track Survey </h1>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                <form id="track_survey_form" class="d-flex" role="search">
                            <input class="form-control me-2" type="search" name="survey_id"
                                placeholder="Track your Survey" aria-label="Search">
                            <button class="btn btn-success" type="submit">Track</button>
                        </form>


                </div>

                <div class="col-lg-7 mt-3">
                <div class="card" style=" color: black;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <span id="tracker_id"></span>
                            </h5>
                            <p class="card-text">
                                <span>Name: </span> <span id="request_name">aaaa</span>
                            </p>
                            <p class="card-text">
                                <span>Address: </span> <span id="address"></span>
                            </p>
                            <p class="card-text">
                                <span>Email Address: </span> <span id="email_address"></span>
                            </p>
                            <p class="card-text">
                                <span>Mobile Number: </span> <span id="mobile_number"></span>
                            </p>
                            <p class="card-text">
                                <span>Requested Schedule: </span> <span id="requested_schedule"></span>
                            </p>
                            <p class="card-text">
                                <span>Status: </span> <span id="status"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->

    <section class="parallax text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container 3">
            <div class="row"></div>
            <div class="d-sm-flex align-items-center justify-content-between bg-dark p-5 m-5"
                style="--bs-bg-opacity: .5;">
                <div>
                    <h1>DMI SURVEYING</h1>
                    <p class="lead my-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt molestiae doloribus ut
                        possimus unde.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

    </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="nav-bar.js"></script>
    <script src="tracksurvey.js"></script>



</body>
</html>
