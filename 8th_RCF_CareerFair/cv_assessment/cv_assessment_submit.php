<?php
//if(isset($_POST["submit"])){
    //echo $_POST["cv_drop_hidden"];
    if (!isset($_POST["cv_assessment_hidden"])){
       header("Location: ./");
         exit();
    } else {
        require '../../inc/dbh.php';
        $name =  $_POST['Name'];
        $dept =  $_POST['department'];
        $university = $_POST['university'];
        $email = $_POST['Email'];
        $phone = "0".$_POST['phone'];
        $cv = $_FILES["cv_assessment_file"]['name'];

        //Last CV id
        $get_current_id_query = 'SELECT * FROM `cv_assessment` ORDER BY id DESC LIMIT 1';
        $result = $conn->query($get_current_id_query);
        $next_id = 1;
        if ($result->num_rows >= 0) {
            while($row = $result->fetch_assoc()) {
               $next_id = $row["id"] + 1;
               //echo $next_id;
            }
        }
        //PDF Name
        $file_name = $_FILES['cv_assessment_file']['name'];
        $file_tmp =$_FILES['cv_assessment_file']['tmp_name'];
        $file_type=$_FILES['cv_assessment_file']['type'];
        $tmp = explode('.',$_FILES['cv_assessment_file']['name']);


        //Store
        move_uploaded_file($file_tmp,"./files/"."[".$next_id."] ".$file_name);
        // Windows
        // move_uploaded_file($file_tmp,"./files/"."[".$next_id."]".$file_name);
        $cv_final = "[".$next_id."] ".$file_name;



        $sql = "INSERT INTO cv_assessment (name,department,university, email,phone,cv) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./index.php?cv_assessment=fail");
                exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssss', $name, $dept, $university, $email,$phone,$cv_final);
            mysqli_execute($stmt);

            if (empty(mysqli_stmt_error($stmt))) {
                header("Location: ./index.php?cv_assessment=success");
                exit();
            } else {
                header("Location: ./index.php?cv_assessment=fail");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
//}
?>
