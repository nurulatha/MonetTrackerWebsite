<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Money Tracker</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<style>
* {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body {
    display: flex;
}

.sidebar {
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 210px;
    height: 100vh;
    padding: 0 1rem;
    color: #fff;
    overflow: hidden;
    transition: all 0.5s linear;
    background: rgba(43, 101, 89, 1);
}

.logo {
    display: flex;
    align-items: center;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.2);
}

.logo img {
    width: 30px;
    /* Adjust the width based on your logo size */
    margin-right: 10px;
}

.logo h1 {
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    margin: 0;
}

.menu {
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}

.menu li {
    padding: 1rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}

.menu li:hover,
.active {
    background: rgba(206, 243, 235, 0.56);
}

.menu a {
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.menu a span {
    overflow: hidden;
}

.menu a i {
    font-size: 1.2rem;
}

.logout {
    position: absolute;
    bottom: 25px;
    left: 0;
    width: 100%;
}

.main--content {
    position: relative;
    background: #ebe9e9;
    width: 90%;
    padding: 1rem;
}

.header--wrapper img {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
}

.header--wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background: #fff;
    border-radius: 10px;
    padding: 10px 2 rem;
    margin-bottom: 1rem;
}

.header--title {
    color: #2b6559;
    margin: 10px;
    margin-left: 15px;
}

.user--info {
    display: flex;
    align-items: center;
    gap: 1;
}

.search--box {
    background: rgb(237, 237, 237);
    border-radius: 15px;
    color: rgba(113, 99, 186, 255);
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
}

.search--box input {
    background: transparent;
    padding: 10px;
}

.search--box i {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5 ease-out;
}

.search--box i:hover {
    transform: scale(1.2);
}

.profile--details {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
}

.profile--details h3 {
    color: #2b6559;
    margin-bottom: 10px;
}

.profile--details p {
    font-size: 16px;
    margin-bottom: 10px;
}

.motivational-phrases {
    margin-top: 10px;
}
</style>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="assets/img/logom.png" alt="Money Tracker Logo" />
            <h1>Money Tracker</h1>
        </div>
        <ul class="menu">
            <li>
                <a href="dashboard.php">
                    <i class="fas fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="profile.php">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="statistik.php">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistic</span>
                </a>
            </li>

            <li>
                <a href="inputdata.php">
                    <i class="fas fa-edit"></i>
                    <span>Add Data</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-calendar"></i>
                    <span>History</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Welcome, <?php echo $row["name"]; ?></h2>
            </div>
            <div class="user--info">

                <img src="assets/img/av.png" alt="">
            </div>
        </div>
        <div class="profile--details">
            <h3>Your Profile</h3>
            <p><strong>Name:</strong> <?php echo $row["name"]; ?></p>
            <p><strong>Email:</strong> <?php echo $row["email"]; ?></p>

            <h3>Motivational Phrases</h3>
            <p>Choose a phrase that inspires you:</p>

            <select id="motivational-phrases" class="motivational-phrases">
                <option value="saving">Your savings are your future!</option>
                <option value="investing">Invest in yourself for a brighter tomorrow!</option>
                <option value="budgeting">Budgeting today, freedom tomorrow!</option>
                <!-- Add more phrases as needed -->
            </select>

            <!-- Display selected phrase -->
            <p id="selected-phrase"></p>
        </div>
    </div>


    </div>
    </div>
</body>

</html>