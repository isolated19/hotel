<?php 
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Admin - Settings</title>
    <?php 
    require('inc/link.php');
  
?>
</head>
<body class="bg-light" >
    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content" >
        <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4" >SETTINGS</h3>
                <!-- General Settings -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0" >Shutdown Website</h5>
                            <button type="button" class="btn btn-bg text-white" data-bs-toggle="modal" data-bs-target="#general-set">
                              <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                     
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title" ></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
                <div class="modal fade" id="general-set" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form  >
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">General Setting</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class=" mb-3">
                                  <label class="form-label">Site Title</label>
                                   <input type="text" name="site_title"  id="site_title_inp" class="form-control shadow-none" >
                                </div>
                                <div class=" mb-3">
                                  <label class="form-label">About us  </label>
                                   <textarea  id="site_about_inp"  class="form-control shadow-none" name="site_about"  rows="1"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title.value =general_data.site_title,site_about.value =general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="button"onclick="upd_general(site_title.value,site_about.value)" class="btn btn-bg text-white shadow-none">Submit</button>
                            </div>
                            </div>  
                        </form>
                       
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php 
    require('inc/script.php');
   
?>
<script>
    let general_data;
    function get_general()
    {
        let site_title =document.getElementById('site_title');
        let site_about =document.getElementById('site_about') ;
        let site_title_inp =document.getElementById('site_title_inp');
        let site_about_inp =document.getElementById('site_about_inp') ;
      

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','appplication/x-www-form-urlencoded');

        // xhr.onload =function(){
           
        //     general_data = JSON.parse(this.responseText);
        //     site_title.innerText = general_data.site_title;
        //     site_about.innerText = general_data.site_about;

        //     site_title_inp.value =general_data.site_title;
        //     site_about_inp.value =general_data.site_about;
        // }

        xhr.onload = function() {
            if (this.responseText.trim() !== "") { // Check if response is not empty
                general_data = JSON.parse(this.responseText);
                // Rest of your code to handle parsed JSON data
            } else {
                console.error("Empty or invalid JSON response received.");
            }
};

        xhr.send('get_general');
    }

    function upd_general(site_title_val,site_about_val)
    {  
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','appplication/x-www-form-urlencoded');

        xhr.onload =function(){
            console.log(this.responseText);
           
        // general_data = JSON.parse(this.responseText);
        // site_title.innerText = general_data.site_title;
        // site_about.innerText = general_data.site_about;

        // site_title_inp.value =general_data.site_title;
        // site_about_inp.value =general_data.site_about;
        }
        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');

    }

    window.onload = function(){
        get_general();
    }
</script>
</body>
</html>