<?php 

 if ($_POST) {

    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has Space";
    }

    if (empty($username)) {
        $error['username_empty'] = "Needed Username must";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (count($error) == 0) {

        wp_create_user($username, $password);
        echo "User Created Successfully";
        exit();
    }else{

        print_r($error);

    }
 }
  ?>