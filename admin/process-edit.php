<?php
    $id=$_POST['id'];
    $ex_title = $_POST['ex_tiltle'];
    $ex_date= $_POST['ex_date'];
    $duration= $_POST['duration'];
    $total=$_POST['total_question'];
    $mark = $_POST['marks'];
    $creat = $_POST['createdon'];
    $status= $_POST['status'];
    $ex_code= $_POST['ex_code'];
    include '../config.php';

    // Bước 02:
    $sql = "UPDATE exams SET exam_title='$ex_title', exam_datetime='$ex_date', duration='$duration', total_question='$total', mark_per_right_answer='$mark', created_on='$creat',  status='$status',exam_code='$ex_code' WHERE id='$id'";

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
