<html>
  <head>
    <title>PHP Form Handling</title>
  </head>
  <body>
      
       <?php
       pre_r($_REQUEST);
       if (isset($_REQUEST['submit'])) { // the post form has been submitted
          echo "First Name:".$_REQUEST['firstname'].'<br />';
          echo "Last Name:".$_REQUEST['lastname'].'<br />';
       }
       ?>
       <form action="" method="POST">
         <p>First Name: <input type="text" name="firstname" value=""></p>
         <p>Last Name: <input type="text" name="lastname" value=""></p>
         <input type="submit" name="submit" value="Submit">
       </form>  
  </body>
</html>

<?php
    function pre_r( $array ) {
      echo '<pre>';
      print_r($array);  
      echo '</pre>';
  }
