<?php
//if(isset($_POST["submit"])){
    //echo $_POST["cv_drop_hidden"];
    // if (!isset($_POST["cv_drop_submit"])){
    //     header("Location: ./");
    //     exit();
    // } else {
        require '../../inc/dbh.php';
        $name =  $_POST['Name'];
        $dept =  $_POST['department'];
        $university = $_POST['university'];
        $grad = $_POST['exp_year_grad'];
        $email = $_POST['Email'];
        $phone = "0".$_POST['phone'];
        $company =  $_POST['company'];
        $cv = $_FILES["cv_drop_file"]['name'];

        //Last CV id
        $get_current_id_query = 'SELECT * FROM `cv_drop` ORDER BY id DESC LIMIT 1';
        $result = $conn->query($get_current_id_query);
        $next_id = 1;
        if ($result->num_rows >= 0) {
            while($row = $result->fetch_assoc()) {
               $next_id = $row["id"] + 1;
               //echo $next_id;
            }
        }
        //PDF Name
        $file_name = $_FILES['cv_drop_file']['name'];
        $file_tmp =$_FILES['cv_drop_file']['tmp_name'];
        $file_type=$_FILES['cv_drop_file']['type'];
        $tmp = explode('.',$_FILES['cv_drop_file']['name']);


        //Store based on company
        if($company === "rfl"){
            move_uploaded_file($file_tmp,"./RFL/"."[".$next_id."] ".$file_name);
        }
        if($company === "banglalink"){
            move_uploaded_file($file_tmp,"./Banglalink/"."[".$next_id."] ".$file_name);
        }
        if($company === "walton"){
            move_uploaded_file($file_tmp,"./Walton/"."[".$next_id."] ".$file_name);
        }
        if($company === "datasoft"){
            move_uploaded_file($file_tmp,"./DataSoft/"."[".$next_id."] ".$file_name);
        }
        if($company === "bat"){
            move_uploaded_file($file_tmp,"./BAT/"."[".$next_id."] ".$file_name);
        }
        if($company === "staffasia"){
            move_uploaded_file($file_tmp,"./StaffAsia/"."[".$next_id."] ".$file_name);
        }
        // Windows
        // move_uploaded_file($file_tmp,"./files/"."[".$next_id."]".$file_name);
        $cv_final = "[".$next_id."] ".$file_name;



        // $sql = "INSERT INTO cv_drop (name,department,university,grad_year, email,phone,company,cv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $sql = "INSERT INTO cv_drop (department,university,grad_year, email,phone,company,cv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['hasErr'] = 'fail';
            // header("Location: ./index.php");
            ?>
            <script>
              window.location = "./";
            </script>
            <?php
                exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $dept, $university, $grad, $email,$phone,$company,$cv_final);
            mysqli_execute($stmt);

            if (empty(mysqli_stmt_error($stmt))) {
                $_SESSION['hasErr'] = 'success';
                // header("Location: ./index.php?cv_drop=success");
                // header("Location: ./index.php");
                ?>
                <script>
                  window.location = "./";
                </script>
                <?php
                exit();
            } else {
              $_SESSION['hasErr'] = 'fail';
                // header("Location: ./index.php");
                ?>
                <script type="text/javascript">
                  window.location = "./";
                </script>
                <?php
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    //}
//}
?>
