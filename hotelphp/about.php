<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-ABOUT</title>
    <?php require('inc/link.php');?>
    <link rel="icon" href="icon">
    <link rel="stylesheet" href="https://upkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
    
       .bline{
        border-top-color:var(--button) !important;
       }
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
       <h2 class="fw-bold h-font text-center">ABOUT US</h2>
       
       <div class="h-line bg-dark"></div>
       <p class="text-center mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam ad, cum tempore aut eum beatae. Ipsum ullam non veniam vitae?</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-2 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                     Perspiciatis blanditiis dolorum id quidem obcaecati, nulla hic.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
                <img src="" alt=""class="w-100" >
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center bline">
                    <img src="images/about/hotel.svg" alt="img"width="70px">
                    
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center bline">
                    <img src="images/about/customer.svg" alt=""width="70px">
                    <h4 class="mt-3">100+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center bline">
                    <img src="images/about/rating.svg" alt=""width="70px">
                    <h4 class="mt-3">100+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center bline">
                    <img src="images/about/staff.svg" alt=""width="70px">
                    <h4 class="mt-3">100+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>


    
    <?php require('inc/footer.php');?>


 



</body>
</html>


