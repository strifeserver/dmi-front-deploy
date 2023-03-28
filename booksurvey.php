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
                <h1> Book a Survey </h1>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form id="request_survey">

                        <label for="name" class="form-label">Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </span>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="input name">
                        </div>


                        <label for="address" class="form-label">Address:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </span>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="input address">
                        </div>


                        <label for="email" class="form-label">Email address:</label>
                        <div class="mb-4 input-group">
                            <span class="class input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </span>
                            <input type="email" class="form-control" id="email" name="email_address"
                                placeholder="input email">
                        </div>


                        <label for="mobile-number" class="form-label">Mobile number</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                +63
                            </span>
                            <input type="tel" class="form-control" id="mobile-number" name="mobile_number">
                        </div>

                        <label for="requested_schedule" class="form-label">Request Schedule</label>
                        <div class="mb-4 input-group">
                            <input type="tel" class="form-control" id="datepicker"
                                name="requested_schedule">
                        </div>
                        <label for="requested_schedule" class="form-label">Upload Files (Hold CTRL to select multiple files)</label>
                        <div class="mb-4 input-group">
                            <input type="file" name="customer_survey_files[]" multiple>
                        </div>

                        <div class="my-4 mb-4 text-center">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>

                    </form>

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
    <script src="nav-bar.js"></script>
    <script src="booksurvey.js"></script>



</body>
</html>
