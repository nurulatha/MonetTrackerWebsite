<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    if (isset($_GET['id'])) {
        $dataId = $_GET['id'];

        $getDataQuery = "SELECT amount, type, user_id FROM inputdata WHERE id = $dataId";
        $getDataResult = mysqli_query($conn, $getDataQuery);

        if ($getDataResult) {
            $dataRow = mysqli_fetch_assoc($getDataResult);
            $amountToDelete = $dataRow['amount'];
            $user_id = $dataRow['user_id'];
            $type = $dataRow['type'];

            
            $deleteQuery = "DELETE FROM inputdata WHERE id = $dataId";
            $result = mysqli_query($conn, $deleteQuery);

            if ($result) {
                 $updateTotalQuery = "UPDATE tb_user 
                    SET total_amount = (
                       SELECT SUM(CASE WHEN type = 'income' THEN amount ELSE -amount END) 
                       FROM inputdata 
                       WHERE user_id = $id
                    ) 
                    WHERE id = $id";
                    mysqli_query($conn, $updateTotalQuery);

                header("Location: dashboard.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        header("Location: dashboard.php");
    }
} else {
    header("Location: login.php");
}
?>