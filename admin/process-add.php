<?php
    
    $ex_titile = $_POST['exTitle'];
    $ex_date = $_POST['exdate'];
    $duration= $_POST['Duration'];
    $duration = $_POST['Total'];
    $mark = $_POST['Mark'];
    $createdon = $_POST['Createdon'];
    $status = $_POST['Status'];
    $ex_code = $_POST['exCode'];
   include '../config.php';

    // Bước 02:
    $sql = "INSERT INTO exams (exam_title, exam_datetime, duration, total_question,marks_per_right_answer,created_on,status,exam_code)
    VALUES ('$ex_titile','$ex_date','$duration','$mark','$createdon','$status',' $ex_code')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }

    //Bước 04: Đóng kết nối
   mysqli_close($conn);


?>