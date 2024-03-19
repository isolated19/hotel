<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <?php require('inc/link.php');?>
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
    <!--carousel swipperjs -->
    <div class="container-fluid px-lg-4 mt-4">
         <div class="swiper ">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <!-- <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" >
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" >
                </div> -->
                <div class="swiper-slide">
                     <img src="images/carousel/3.jpg" >
                </div>
                
            </div>
        
        </div>

    </div>

    <!-- Availbility-form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    
                      
                    <div class="row">
                    
                            <div class="col-lg-3 mb-3">
                                <label  class="form-label" style="font-weight:500;">State</label>
                                <select class="form-select shdow-none" id="">
                                
                                    <option value="1">Tamilnadu</option>
                                    <option value="2">kerala</option>
                                    <option value="3">Karnataka</option>
                                    
                                </select>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label  class="form-label" style="font-weight:500;">City</label>
                                <select class="form-select shdow-none" id="">
                                
                                    <option value="1">Chennai</option>
                                    <option value="2">Coimbatore</option>
                                    <option value="3">Salem</option>
                                    
                                </select>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label  class="form-label" style="font-weight:500;">Area</label>
                                <select class="form-select shdow-none" id="">
                                
                                    <option value="1">Chengalpattu</option>
                                    <option value="2">Tambaram</option>
                                    <option value="3">Guindy</option>
                                    
                                </select>
                            </div>
                        
                    </div>
                    <div class="row align-items-end">
                        
                        <div class="col-lg-3 mb-3">
                            <label  class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label  class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label  class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shdow-none" id="">
                              
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label  class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shdow-none" id="">
                              
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2" >
                            <button type="submit" class="btn text-white shadow-none btn-bg">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Rooms available -->
    <h2 class="mt-5 pt-4 mb-4 text-center fa-old h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3  ">
                <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
                    <img src="images/room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Single Room</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                
                            </span>            
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white btn-bg shdow-none">Book now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shdow-none">More details</a>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 my-3  ">
                <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
                    <img src="images/room/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Single Room</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                
                            </span>            
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white btn-bg shdow-none">Book now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shdow-none">More details</a>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 my-3  ">
                <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
                    <img src="images/room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Single Room</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                
                            </span>            
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white btn-bg shdow-none">Book now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shdow-none">More details</a>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href=""class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>
    <!-- facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fa-old h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"> 
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3"><br>Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"> 
                <img src="images/features/tv.svg" width="80px">
                <h5 class="mt-3"><br>Television</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"> 
                <img src="images/features/phone.svg" width="80px">
                <h5 class="mt-3"><br>Landline</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"> 
                <img src="images/features/fan.svg" width="80px">
                <h5 class="mt-3"><br>Ventilation</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3"> 
                <img src="images/features/clock.svg" width="80px">
                <h5 class="mt-3">24/7<br>Services</h5>
            </div> 
            <div class="col-lg-12 text-center mt-5">
                <a href=""class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div> 
        </div>
    </div>
    <!-- testimonial -->
    <h2 class="mt-5 pt-4 mb-4 text-center fa-old h-font">OUR TESTIMONALS</h2>
    <div class="container">
    <div class="swiper mySwiper">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide shadow bg-white p-4">
                   <div class="profile d-flex align-items-center p-4">
                    <img src="images/testimonal/profile.svg" alt="">
                    <h6 class="m-0 ms-2" >user1</h6>
                   </div>
                   <p>
                    <!-- user description -->
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum nulla molestiae fugit voluptate tenetur adipisci autem animi rem aperiam! 
                   </p>
                </div>
                <div class="swiper-slide bg-white p-4">
                   <div class="profile d-flex align-items-center p-4">
                    <img src="images/testimonal/profile.svg" alt="">
                    <h6 class="m-0 ms-2" >user2</h6>
                   </div>
                   <p>
                    <!-- user description -->
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum nulla molestiae fugit voluptate tenetur adipisci autem animi rem aperiam! 
                   </p>
                </div>

                <div class="swiper-slide bg-white p-4">
                   <div class="profile d-flex align-items-center p-4">
                    <img src="images/testimonal/profile.svg" alt="">
                    <h6 class="m-0 ms-2" >user3</h6>
                   </div>
                   <p>
                    <!-- user description -->
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum nulla molestiae fugit voluptate tenetur adipisci autem animi rem aperiam! 
                   </p>
                </div>
                
                
            </div>
            <div class="swiper-pagination"></div>
        
        </div>
        <div class="col-lg-12 text-center mt-5">
                <a href=""class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
            </div> 
    </div>
    <!-- contact us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fa-old h-font">CONTACT US</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" height="320px" rounded   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248756.1313116749!2d80.04419915343976!3d13.047473316843673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1710175450088!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel:+919956882626" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+919956882626</a> <br>
                    <a href="tel:+919956882626" class="d-inline-block  text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+919956882626</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter"></i> Twitter</span>
                    </a> <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook"></i> Facebook</span>
                    </a> <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram"></i> Instagram</span>
                    </a> <br>
                  
                </div>
            </div>
        </div>
    </div>
    
    <?php require('inc/footer.php');?>


 




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
//   const swiper = new Swiper('.swiper', {
//   // Optional parameters
//   spaceBetween: 30,
//   effect:"fade",
//   loop: true,
//   autoplay: {
//     delay: 3500,
//     disableOnInteration:false,
//   },
//   });
  var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteration:false,
      },
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,

      },
   
 });


</script
</body>
</html>



<!-- const swiper = new Swiper('.swiper-testimonial', {
  // Optional parameters
  spaceBetween: 30,
  effect:"fade",
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteration:false,
  },
}); -->