<?php
    if (!isset($_POST["submitted"])){
        header("Location: ./");
        exit();
    } else {
        require '../inc/dbh.php';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $date = date("Y-m-d");

        $sql = "INSERT INTO contact (sent_date, name, email, subject, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo '{"status": 0, "reply": "'.mysqli_stmt_error($stmt).'"}';
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'sssss', $date, $name, $email, $subject, $message);
            mysqli_execute($stmt);

            if (!empty(mysqli_stmt_error($stmt))) {
                echo '{"status": 0, "reply": "'.mysqli_stmt_error($stmt).'"}';
                exit();
            } else {
                echo '{"status": 1, "reply": "Message Received Successfully."}';
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>