<?php
    include '../header.php';
    include '../config.php';
error_reporting(0);
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "SELECT * FROM exams WHERE id=$id";

    //Execute the Query
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        while($row =mysqli_fetch_assoc($result)){
            $title=$row['exam_tile'];
            $exdate = $row['exam_datetime'];
            $duration = $row['duration'];
            $total = $row['total_question'];
            $mark = $row['marks_per_right_answer'];
            $creaton = $row['creat_on'];
            $status = $row['status'];
            $ex_code = $row['exam_code'];
    }
}
?>
    <main class="container">
        <h2>Sửa thông tin</h2>
        <form action="process-edit.php" method="post">
            <input type="hidden" class="from-control" name='id'value="<?php echo $id;?>">
            <div class="mb-3">
                <label for="exam_tile" class="form-label">Tên bài thi</label>
                <input type="text" class="form-control" name='exam_tile' value="<?php echo $title;?>">
             </div>
             <div class="mb-3">
                <label for="exam_datetime" class="form-label">Ngày thi</label>
                <input type="date" class="form-control" name='exam_datetim' value="<?php echo $exdate;?>">
             </div>
             <div class="mb-3">
                <label for="bd_age" class="form-label">Thời gian làm bài</label>
                <input type="time" class="form-control" name='bd_age' value="<?php echo $duration;?>">
             </div>
             <div class="mb-3">
                <label for="total_question" class="form-label">Số câu hỏi</label>
                <input type="int" class="form-control" name='total_question' value="<?php echo $total;?>">
             </div>
             <div class="mb-3">
                <label for="marks_per_right_answer" class="form-label">Điểm cho mỗi câu tl đúng</label>
                <input type="int" class="form-control" name='marks_per_right_answer' value="<?php echo $mark;?>">
             </div>
             <div class="mb-3">
                <label for="creat_on" class="form-label">Ngày tạo bài thi</label>
                <input type="date" class="form-control" name='creat_on' value="<?php echo $creaton;?>">
             </div>
             <div class="mb-3">
                <label for="status" class="form-label">Trạng thái</label>
                <input type="text" class="form-control" name='status' value="<?php echo $status;?>">
             </div>
             <div class="mb-3">
                <label for="exam_code" class="form-label">Mã truy cập</label>
                <input type="text" class="form-control" name='exam_code' value="<?php echo $ex_code?>">
             </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </main>
<?php
    include '../footer.php';
?>