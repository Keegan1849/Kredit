<?php
session_start();

$username = "";
$password = "";
$error = 0;
$processed = 0;
$error_message = "Error Message: ";
$result = "";
$sql = ""; 

$servername = "localhost:3306";
$username = "root";
$password = "password";
$database = "kredit";
//Create DB Connection
$conn = new mysqli($servername, $username, $password, $database);
$conn_error = false;
if($conn->connect_error){
    $conn_error = true;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $processed = 1;
    if(empty($_POST["username"])){
        $error = 1;
        $error_message .= "<br>&middot;Please enter a username.";
    }else{
        $username = $_POST["username"];
    }
    if(empty($_POST["password"])){
        $error = 1;
        $error_message .= "<br>&middot;Please enter a password.";
    }else{
        $password = $_POST["password"];
    }


}
if($error == 0){
    $sql = "SELECT * FROM user WHERE user_username = '" . $username . "' AND user_password =  '" . $password . "';";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $_SESSION["username"] = $username;
        header("Location: search.php");

    }else{
        $error = 1;
        $error_message = "Invaid username or password";
    }

}
?>

<html>
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LOGIN</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="scripts/style.css">
        <link rel="stylesheet" href="scripts/style2.css">
        <link rel="stylesheet" href="scripts/createacc.css">

    </head>
    <body>
<h1 id="Kred">KREDIT</h1>
    <div class="overlay">
<!-- LOGN IN FORM -->
<form>
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2 id="log">LOGIN</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p id="log">Log in with your USERNAME and PASSWORD</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">

     

      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye">👁</i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in"> Log In </button>
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
      <button class="btn submits frgt-pass"   >Forgot Password</button>
<!--     Sign Up button -->
      <button class="btn submits sign-up">Sign Up 
<!--         Sign Up font icon -->
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>

    </body>
    <script src="scripts/createacc.js"></script>

</html>
<?php
$conn->close();
?>