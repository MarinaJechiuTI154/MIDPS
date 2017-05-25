<?php

    //Login Form----------------------------------
   
        if (array_key_exists('username', $_POST) OR array_key_exists('password', $_POST)) {  
        
        $link = mysqli_connect("localhost","root","","yahtzee");
        
            if (mysqli_connect_error()) {
        
                die ("Eroare la conectarea la db");
        
            } 
        if ($_POST['username'] == '') {
            
            //echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            //echo "<p>Password is required.</p>";
            
        } else {
            $query = "SELECT `id` FROM `users` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."' AND password='".mysqli_real_escape_string($link, $_POST['password'])."'";
            $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $_POST['username'];
            header ("Location: index.php");
                
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your inserted username or password is not correct!</strong></p></div>';
                //echo"<p>Wrong Password or Email, Try Again !</p>";
                }   
            }    
        }  
?>

