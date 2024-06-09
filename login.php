<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
}
if(isset($_POST["submit"])){
  $nameemail = $_POST["nameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE name = '$nameemail' OR email = '$nameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if (password_verify($password, $row["password"])){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: dashboard.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
else{
  echo
  "<script> alert('User Not Registered'); </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
</head>
<style>
body {
    background-color: #2b6559;
    font-family: "Poppins", sans-serif;
    overflow: hidden;
}

#login-container {
    width: 700px;
    height: 400px;
    margin: 60px auto;
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 2px 1px 4px 2px gray;

}

.login {
    width: 50%;
    padding: 20px;
}

form {
    margin: 50px auto;
    margin-left: 30px;
    text-align: center;
}

form h1 {
    text-transform: uppercase;
    font-weight: bolder;
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(63, 121, 74, 0.2);
}

form p {
    font-size: 13px;
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
    height: auto;
    border-radius: 0 10px 10px 0;
}
</style>

<body>
    <div class="container" id="login-container">
        <div class="login">
            <form class="" action="" method="post" autocomplete="off">
                <h1>Login</h1>
                <p>Start your excellent experience</p>
                <label for="nameemail"></label>
                <input type="text" name="nameemail" id="nameemail" required value="" placeholder="Username or Email" />
                <label for="password"></label>
                <input type="password" name="password" id="password" required value="" placeholder="Password" />
                <button type="submit" name="submit"><span>Submit</span></button>
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </form>
        </div>
        <div class="pic">
            <img src="assets/img/2a.jpg" alt="Travel Image" />
        </div>
    </div>
</body>

</html>