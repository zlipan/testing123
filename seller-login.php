    <?php
      
      define( 'DB_NAME', 'seller-login' );
      define( 'DB_USER', 'root');
      define( 'DB_PASSWORD','');
      define( 'DB_HOST', 'localhost');

     $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
      
     if ($conn) {
  
     } else{
      die("Connection failed: " . mysqli_connect_error());
     }

     if(isset($_POST['submit'])) {
      $username = mysqli_real_escape_string($conn, $POST_['username']);
      $password = mysqli_real_escape_string($conn, $POST_['password']); 
     }
      $user_check_query = " SELECT * FROM users WHERE username = '$username' or password = '$password' LIMIT 1"; 
      $result =  mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($result);  

     if (count($erros) == 0) {

      $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      mysqli_query ($conn, $query);
      header('location: seller.html');
     }
    
    ?>
     
     
    


     