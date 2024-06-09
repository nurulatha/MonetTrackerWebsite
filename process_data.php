<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];

    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $type = $_POST['type'];

    $user_id = $_SESSION["id"];

    $insertQuery = "INSERT INTO inputdata (id, title, amount, category, date, type, user_id) 
                    VALUES ('', '$title', '$amount', '$category', '$date', '$type', '$user_id')";

    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        if ($type == 'income') {
            $updateTotalQuery = "UPDATE tb_user SET total_amount = total_amount + $amount WHERE id = $user_id";
        } elseif ($type == 'expense') {
            $updateTotalQuery = "UPDATE tb_user SET total_amount = total_amount - $amount WHERE id = $user_id";
        }
        mysqli_query($conn, $updateTotalQuery);
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: login.php");
}
?>