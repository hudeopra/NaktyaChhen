<?php

    require('../include/db_config.php');
    require('../include/essentials.php');
    adminLogin();

    if(isset($_POST['get_general'])){
        $query = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        $res = select($query,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general'])){
        $form_data = filteration($_POST);

        $query = "UPDATE `settings` SET `site_title`=?,`site_content`=? WHERE `sr_no`=?";
        $values = [$form_data['site_title'],$form_data['site_content'],1];
        $res = update($query,$values,'ssi');

        echo $res;
    }

    
    if (isset($_POST['upd_shutdown'])) {
        $form_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
        $query = "UPDATE `settings` SET `shutdown` = ? WHERE `sr_no` = ?";
        $values = [$form_data, 1];
        $res = update($query, $values, 'si');
        
        // Debugging statement
        error_log("Server response for upd_shutdown: $res");
        
        echo $res;
    }
    

?>