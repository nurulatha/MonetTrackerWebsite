<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];

    if (isset($_GET['id'])) {
        $dataId = $_GET['id'];
        $getDataQuery = "SELECT * FROM inputdata WHERE id = $dataId";
        $getDataResult = mysqli_query($conn, $getDataQuery);

        if ($getDataResult) {
            $dataRow = mysqli_fetch_assoc($getDataResult);

            // Proses update data
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $title = $_POST['title'];
                $amount = $_POST['amount'];
                $category = $_POST['category'];
                $date = $_POST['date'];
                $type = $_POST['type'];

                // Query untuk mengupdate data
                $updateQuery = "UPDATE inputdata 
                                SET title = '$title', amount = '$amount', category = '$category', date = '$date', type = '$type' 
                                WHERE id = $dataId";

                $result = mysqli_query($conn, $updateQuery);

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
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Data - Money Tracker</title>
</head>
<style>
form {
    max-width: 400px;
    margin: 20px auto;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Tombol Update */
input[type="submit"] {
    background-color: #2b6559;
    color: #fff;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #205549;
}

/* Tampilan yang dipilih pada dropdown */
select option[selected] {
    background-color: #2b6559;
    color: #fff;
}

/* Style tambahan untuk memberi sentuhan estetika */
body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
}

h2 {
    color: #2b6559;
}

@media screen and (max-width: 600px) {
    form {
        width: 90%;
    }
}
</style>

<body>
    <h2>Edit Data</h2>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $dataRow['title']; ?>" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="text" name="amount" value="<?php echo $dataRow['amount']; ?>" required>
        <br>
        <label for="category">Category:</label>
        <input type="text" name="category" value="<?php echo $dataRow['category']; ?>" required>
        <br>
        <label for="date">Date:</label>
        <input type="date" name="date" value="<?php echo $dataRow['date']; ?>" required>
        <br>
        <label for="type">Type:</label>
        <select name="type" required>
            <option value="income" <?php echo ($dataRow['type'] == 'income') ? 'selected' : ''; ?>>Income</option>
            <option value="expense" <?php echo ($dataRow['type'] == 'expense') ? 'selected' : ''; ?>>Expense</option>
        </select>
        <br>
        <input type="submit" value="Update">
    </form>
</body>

</html>