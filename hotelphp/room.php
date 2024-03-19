<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-ROOMS</title>
    <?php require('inc/link.php');?>
    <link rel="icon" href="icon">
    <link rel="stylesheet" href="https://upkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
    
       
        .availability-form{
            margin-top: -50px;
            z-index:2;
            position: relative;
        }

        input[type=number]{
            -moz-appearance: textfield;
        }
        @media screen and(max-width:575px){
            .availability-form{
            margin-top: 25px;
        padding:0 35px ;
        }
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
       <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
       
       <div class="h-line bg-dark"></div>
       <p class="text-center mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>Laboriosam ad, cum tempore aut eum beatae. Ipsum ullam non veniam vitae?</p>
    </div>
    <div class="container">
        <div class="row">
           <div class="col-lg-3 col-md-12 mb-4 px-lg-0">
              <nav class="navbar navbar-expand-lg bg-white navbar-light rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2" >FILTER</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
                      <div class="border p-3 rounded mb-3 bg-light">
                        <h5 class="mb-3"style="font-size:18px;">CHECK AVAILABILITY</h5>
                        <label  class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label  class="form-label">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                      </div>
                       <div class="border p-3 rounded mb-3 bg-light">
                         <h5 class="mb-3"style="font-size:18px;">FACILITIES</h5>
                        <div class=" mb-2 ">
                        <input type="checkbox"id="f1" class="form-check-input shadow-none me-1 ">
                        <label for="f1" class="form-check-label"> Facility one</label>
                       </div>
                      <div class=" mb-2 ">
                        <input type="checkbox"id="f2" class="form-check-input shadow-none me-1 ">
                        <label for="f2" class="form-check-label"> Facility two</label>
                      </div>
                      <div class=" mb-2 ">
                        <input type="checkbox"id="f3" class="form-check-input shadow-none me-1 ">
                        <label for="f3" class="form-check-label"> Facility three</label>
                      </div>
                       
                      </div>
                      <div class="border p-3 rounded mb-3 bg-light">
                         <h5 class="mb-3"style="font-size:18px;">GUESTS</h5>
                         <div class="d-flex">
                            <div class="me-3" >
                                <label for="" class="form-label">Adults</label>
                                <input type="number"class="form-control shadow-none " >
                            </div>
                            <div>
                                <label for="" class="form-label">Children</label>
                                <input type="number"class="form-control shadow-none" >
                            </div>
                         </div>
                      </div>

                    </div>
                </div>
              </nav>
           </div>
           <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 shadow" >
                    <div class="row g-0 align-items-center px-3 py-2">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                           <img src="..." class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-2 px-md-3 px-0">
                        <h5 class="mb-3">Single Room</h5>
                        <div class="features mb-4">
                        
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Sofa
                                    </span>
                                
                                
                                    
                                </div>
                        </div>
                        <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Room heater
                                    </span>
                        </div> 
                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white btn-bg shdow-none mb-2  ">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shdow-none ">More details</a>
                        </div>
                    </div>
                </div>
            <div class="card mb-4 shadow" >
                    <div class="row g-0 align-items-center px-3 py-2">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="..." class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Single Room</h5>
                        <div class="features mb-4">
                        
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Sofa
                                    </span>
                                
                                
                                    
                                </div>
                        </div>
                        <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Room heater
                                    </span>
                        </div> 
                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white btn-bg shdow-none mb-2 ">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shdow-none ">More details</a>
                        </div>
                    </div>
            </div>
            <div class="card mb-4 shadow" >
                    <div class="row g-0 align-items-center px-3 py-2">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="..." class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-4 px-md-3 px-0">
                        <h5 class="mb-3">Single Room</h5>
                        <div class="features mb-4">
                        
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        2 Rooms
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        1 Sofa
                                    </span>
                                
                                
                                    
                                </div>
                        </div>
                        <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Television
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                            Room heater
                                    </span>
                        </div> 
                        <div class="guests mb-2">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white btn-bg shdow-none mb-2 px-3">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shdow-none ">More details</a>
                        </div>
                    </div>
            </div>
                
            </div>

        </div>
    </div>

    
    <?php require('inc/footer.php');?>


 



</body>
</html>


