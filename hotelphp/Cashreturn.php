<!DOCTYPE html>
<html>
<head>
    <title>Refund Page</title>
    <?php require('inc/link.php');?>
</head>
<body>
    <?php require('inc/header.php');?>
    <h2 class="mt-5 text-center">Refund Request Form</h2>
   <div class="container">
     <div class="row">
     <div class="col-lg-6 col-md-6 mb-5 mx-auto px-4 ">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                  <form action="">
                    <h5>Fill the form</h5>
                    <div class="row">
                    <div class="mt-3 col-lg-5 ">
                    <label for="transaction_id"class="form-label " style="font-weight:500;">Transaction ID:</label><br>
                    <input type="text" id="transaction_id"class="form-control shadow-none" name="transaction_id" required>
        
                    </div> 
                    <div class="mt-3 col-lg-5 ">
                        <label for="" class="form-label "style="font-weight:500;">Email</label>
                        <input type="email" class="form-control shadow-none" >
                    </div>
                    </div>

                    <div class="row">
                    <div class="mt-3 col-lg-5 ">
                        <label for="" class="form-label "style="font-weight:500;">Amount:</label>
                        <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mt-3 col-lg-5 ">
                      <form action="/upload" method="post" enctype="multipart/form-data">
                      <label for="" class="form-label "style="font-weight:500;">Upload the Photo</label>
                      <input type="file" name="photo" accept="image/*">
                    </div>
                    </div>
                    <div class="mt-3  ">
                        <label for="" class="form-label "style="font-weight:500;">Reason for Refund:</label>
                       
                        <textarea class="form-control shadow-none" rows="5"style="resize:none;" ></textarea>
                          
       
       
                    </div>
                    <button type="submit"class="btn  text-white btn-bg shadow-none mt-3">Submit</button>
                  </form>
                </div>

    </div>
     </div>
   </div>
  
</body>
</html>




<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $transaction_id = $_POST["transaction_id"];
    $amount = $_POST["amount"];
    $reason = $_POST["reason"];
    
    // Process refund (this is a placeholder)
    // Here you would typically connect to your payment gateway's API to process the refund
    // For demonstration purposes, we're just echoing the submitted data
    echo "Refund Requested for Transaction ID: $transaction_id <br>";
    echo "Amount: $amount <br>";
    echo "Reason: $reason <br>";
    echo "Refund Processing... <br>";
    
    // Add your refund processing logic here
    
    // Display a message confirming the refund request
    echo "Refund Request Processed Successfully!";
} else {
    // Redirect back to the refund page if accessed directly
    // header("Location: index.php");
    exit();
}
?>