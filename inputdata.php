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



.input-form {
    max-width: 400px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 5px;
}

.input-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.input-form input,
.input-form textarea,
.input-form select {
    width: 100%;
    padding: 7px;
    margin-bottom: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.input-form button {
    background-color: #2b6559;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 288px;
}

.input-form button:hover {
    background-color: #1d473f;
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
            <li>
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

            <li class="active">
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

        <div class="input-form">
            <form id="moneyForm" action="process_data.php" method="post">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required>

                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="others">Others</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="education">Education</option>
                    <option value="transportation">Transportation</option>
                    <option value="health">Health</option>
                    <option value="snack">Snack</option>
                </select>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="type">Type:</label>
                <select id="type" name="type" required>
                    <option value='income'>Income</option>
                    <option value='expense'>Expense</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>


    </div>
    </div>
</body>

</html>