<?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
        $subject = "Thanks for choosing to join The Rutgers Times newsletter";
        $message = " We are committed to bringing our subscribers the most up to date news around the community. We are dedicated to safely and securly 
        bringing our members updates on a daily basis. Once again thank you for choosing the Rutgers Times, have a great day!";
        $sender = "From: TheRutgersTimes2023@gmail.com";
        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thank You for Subscribing " ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "An Error has occured while attempting to reach your email. Please try again" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address, Please input a valid address!" ?>
        </div>
        <?php
      }
    }
    ?>