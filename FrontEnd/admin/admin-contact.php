<?php

    require('include/db_config.php');
    require('include/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Panel - Pages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
        
            require('include/admin-head-links.php');
        ?>
    </head>
    <body>
        <section>
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between p-3 w-100">
                    
                <h3>Admin Panel</h3>
                <a href="logout.php" class="ph-btn mt-0">logout</a>
                </div>
            </div>
        </section>
        <!-- <?php require('include/admin-header.php')?> -->
        <main>
            <section class="container">
                <div class="row">
                    <div class="col-9 p-4 overflow-hidden">
                    <!-- General Settings section -->
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h2 class="card-title">Card title</h2>
                                <!-- Button trigger modal -->
                                <button type="button" onclick="" class="ph-btn ph-btn__form mt-0" data-bs-toggle="modal" data-bs-target="#general-s">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
                                    edit
                                </button>
                            </div>
                            <div class="ph-card-wrapper">
                                <h3>Site Title</h3>
                                <p id="site_title">asdsfdg</p>
                            </div>
                            <div class="ph-card-wrapper">
                                <h3>Sasdf</h3>
                                <p id="site_content">asdsfdg</p>
                            </div>
                        </div>
                    </div>
                    <!-- General Settings pop up modal  -->
                    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" >general setting</h1>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="ph-input-wrapper">
                                                <label for="">text 1</label>
                                                <input type="text" name="site_title" id="site_title_input" placeholder="Site Title" >
                                            </div>
                                            <div class="ph-input-wrapper">
                                                <label for="">text 2</label>
                                                <textarea name="Site About" name="site_content"  id="site_content_input" placeholder="sadsf"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="site_title.value = general_data.site_title, site_content.value = general_data.site_content" type="button" class="ph-btn ph-btn__text" data-bs-dismiss="modal">cancel</button>
                                        <button onclick="upd_general(site_title_input.value, site_content_input.value)" type="button" class="ph-btn ">save</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- shutdown section -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="card-title m-0">
                                    Shutdown Reservation
                                </h5>
                                <form action="">
                                    <div class="form-check form-switch">
                                        <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown_toggle" >
                                    </div>
                                </form>
                            </div>
                            <p class="card-text">
                                No Customers will be able to make reservations.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require('../include/script.php')?>
        <?php require('include/admin-scripts.php')?>

        <script>
            let general_data;

            function get_general() {
                let site_title = document.getElementById('site_title');
                let site_content = document.getElementById('site_content');

                let site_title_input = document.getElementById('site_title_input');
                let site_content_input = document.getElementById('site_content_input');

                // Correcting the variable name to match the element ID
                let shutdown_toggle = document.getElementById('shutdown_toggle');  // Ensure the element ID matches the variable name

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_curd.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    general_data = JSON.parse(this.responseText);

                    site_title.innerText = general_data.site_title;
                    site_content.innerText = general_data.site_content;

                    site_title_input.value = general_data.site_title;
                    site_content_input.value = general_data.site_content;

                    // Use the correct variable name
                    if (general_data.shutdown == 0) {
                        shutdown_toggle.checked = false;
                        shutdown_toggle.value = 0;
                    } else {
                        shutdown_toggle.checked = true;
                        shutdown_toggle.value = 1;
                    }
                }

                xhr.send('get_general');
            }


            function upd_general(site_title_value, site_content_value){

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_curd.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {

                    // fetching the modal using id
                    var myModal = document.getElementById('general-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();

                    if(this.responseText == 1){
                        alert('success', 'Changes Saved!');
                        get_general();
                    }
                    else{

                        alert('error', 'No Changes Made!')
                    }
                }

                xhr.send('site_title='+site_title_value + '&site_content='+ site_content_value+'&upd_general');

            }

            function upd_shutdown(val){

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_curd.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {

                    if(this.responseText == 1 && general_data.shutdown==0){
                        alert('success', 'Reservations have been shutdown!');
                    }
                    else{
                        alert('error', 'Disabled Shutdown!');
                    }
                    get_general();
                }

                xhr.send('upd_shutdown=' + val);

            }

            window.onload = function() {
                get_general();
            }


        </script>
    </body>
</html>