<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-CONTACT</title>
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
       <h2 class="fw-bold h-font text-center">CONTACT US</h2>
       
       <div class="h-line bg-dark"></div>
       <p class="text-center mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>Laboriosam ad, cum tempore aut eum beatae. Ipsum ullam non veniam vitae?</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                <iframe class="w-100 rounded mb-4" height="320px" rounded   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248756.1313116749!2d80.04419915343976!3d13.047473316843673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1710175450088!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
                <h5>Address</h5>
                <a href="" target="_blank" class="d-inilne-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill">chennai</i>
                </a>

                <h5 class="mt-4">Call us</h5>
                 <a href="tel:+919956882626" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919956882626
                 </a> <br>
                 <a href="tel:+919956882626" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919956882626
                 </a>

                 <h5 class="mt-4">Email</h5>
                 <a href="mailto:hotelmanagement@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> hotelmanagement@gmail.com
                 </a>
                 <h5>Follow us</h5>
                 <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1"></i>
                 </a> 
                 <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i>
                    
                 <a href="#" class="d-inline-block  text-dark fs-5  ">
                    <i class="bi bi-instagram me-1"></i> 
                 </a>  

                </div>

            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                  <form action="">
                    <h5>Send a message</h5>
                    <div class="mt-3">
                        <label for="" class="form-labe "style="font-weight:500;">Name</label>
                        <input type="text" class="form-control shadow-none" >
                    </div> 
                    <div class="mt-3">
                        <label for="" class="form-labe "style="font-weight:500;">Email</label>
                        <input type="email" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-labe "style="font-weight:500;">Subject</label>
                        <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-labe "style="font-weight:500;">Message</label>
                       
                        <textarea class="form-control shadow-none" rows="5"style="resize:none;" ></textarea>
                    </div>
                    <button type="submit"class="btn  text-white btn-bg shadow-none mt-3">SEND</button>
                  </form>
                </div>

            </div>

        </div>
    </div>

    
    <?php require('inc/footer.php');?>


 



</body>
</html>


