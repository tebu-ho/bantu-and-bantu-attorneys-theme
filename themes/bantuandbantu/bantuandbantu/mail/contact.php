<?php
  /* Set e-mail recipient */
  $myemail = "lorem@email.com";

  /* Check all form inputs using check_input function*/
  $firstName = check_input($_POST['firstName']);
  $lastName = check_input($_POST['lastName']);
  $email = check_input($_POST['email']);
  $tel = check_input($_POST['tel']);
  $message = check_input($_POST['message']);
  $type = "Atlantis contact";

  /* If e-mail is not valid show error message */
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
      show_error("E-mail address not valid");
  }

  /* Message for the e-mail */
  $message = "Hello!

  Your contact form has been submitted by:

  Name: $firstName $lastName
  E-mail: $email
  Tel: $tel

  Subject: $type
  
  Message:
  $message
  

  End of message
  ";

  /* Send the message using mail() function */
  mail($myemail, $type, $message);

  /* Redirect visitor to the thank you page */
  header('Location: index.html');
  exit();
               
  /* Used functions */
  function check_input($data, $problem='') {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      if ($problem && strlen($data) == 0) {
          show_error($problem);
      }
      return $data;
  }

  function show_error($myError) {
?>
<html>
  <body>
  <b>Please correct the following error:</b><br />
  <?php echo $myError; ?>
  </body>
</html>
<?php
  exit();
}
?>