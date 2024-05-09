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
        
            require('../include/head-links.php');
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
                    <div class="col-9p-4 overflow-hidden">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h2 class="card-title">Card title</h2>
                                <!-- Button trigger modal -->
                                <button type="button" class="ph-btn ph-btn__form mt-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    edit
                                </button>



                            
                            
                            </div>
                            <div class="ph-card-wrapper">
                                <h3>Sasdf</h3>
                                <p>asdsfdg</p>
                            </div>
                            <div class="ph-card-wrapper">
                                <h3>Sasdf</h3>
                                <p>asdsfdg</p>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" >general setting</h1>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn  " data-bs-dismiss="modal">cancel</button>
                                            <button type="button" class="ph-btn ">save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require('../include/script.php')?>
    </body>
</html>