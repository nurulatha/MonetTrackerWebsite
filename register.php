<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE name = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username os Email Has Already Taken'); </script>";
  }
  else{
    if( strlen($password) >= 8){ 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert hashed password to the database
        $query = "INSERT INTO tb_user (name, email, password, total_amount) VALUES ('$name', '$email', '$hashedPassword', 0)";
        mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      
    }
    if(strlen($password) < 8){
      echo "<script> alert('Password should be at least 8 characters'); </script>";
  }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Form</title>

</head>
<style>
body {
    background-color: #2b6559;
    font-family: "Poppins", sans-serif;
    overflow: hidden;
}

#login-container {
    padding-bottom: 20px;
    width: 740px;
    height: 420px;
    margin: 34px auto;
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 2px 1px 4px 2px gray;

}

.login {
    width: 50%;
    padding: 10px;
}

form {
    margin: 50px auto;
    margin-left: 30px;
    text-align: center;
}

form h1 {
    text-transform: uppercase;
    font-weight: bolder;
    padding-top: 40px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(63, 121, 74, 0.2);
}

form p {
    font-size: 12px;
    margin-bottom: 10px;
}

form label {
    display: flex;
    font-size: 16px;
    font-weight: 600;
    padding: 8px;
    padding-left: 15px;
}

input {
    width: 86%;
    padding: 8px;
    margin: 8px 0;
    outline: none;
    border: 1px solid gray;
    border-radius: 5px;
}

button {
    width: 275px;
    margin: 15px;
    margin-left: 15px;
    padding: 8px;
    padding-top: 10px;
    background: #2b6559;
    outline: none;
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 17px;
    cursor: pointer;
    transition: 0.5s;


}

button span {
    display: inline-block;
    position: relative;
    transition: 0.5s;
}

button span:after {
    content: "\00bb";
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

button:hover span {
    padding-right: 30px;
}

button:hover span:after {
    opacity: 1;
    right: 0;
}

p a {

    text-decoration: none;
    color: #1e6355;
    transition: color 0.5s;
}

p a:hover {
    color: #000;
}

hr {
    border-top: 2px solid #2b6559;
}

.pic img {
    width: 100%;
    padding-top: 30px;
    height: auto;
    border-radius: 0 10px 10px 0;
}
</style>

<body>
    <div class="container" id="login-container">
        <div class="login">
            <form class="" action="" method="post" autocomplete="off">
                <h1>Sign Up</h1>
                <p>Start your excellent experience, its free</p>
                <label for="name"></label>
                <input type="text" name="name" id="name" required value="" placeholder="Username" />
                <label for="email"></label>
                <input type="email" name="email" id="email" required value="" placeholder="Email" />
                <label for="password"></label>
                <input type="password" name="password" id="password" required value="" placeholder="Password" />
                <button type="submit" name="submit"><span>Submit</span></button>
                <p>have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
        <div class="pic">
            <img src="assets/img/2a.jpg" alt="Travel Image" />
        </div>
    </div>
</body>

</html>