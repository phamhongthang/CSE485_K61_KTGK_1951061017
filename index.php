<?php
    include 'header.php';
?>

    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->:
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bài thi</th>
                    <th scope="col">Tên bài thi</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Thời gian làm bài</th>
                    <th scope="col">Số câu</th>
                    <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
                    <th scope="col">Ngày tạo bài thi</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Mã truy cập bài thi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    //Bước 1
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * FROM exams";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['exam_title'].'</td>';
                            echo '<td>'.$row['exam_datetime'].'</td>';
                            echo '<td>'.$row['duration'].'</td>';
                            echo '<td>'.$row['total_question'].'</td>';
                            echo '<td>'.$row['marks_per_right_answer'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['status'].'</td>';
                            echo '<td>'.$row['exam_code'].'</td>';
                            echo'<td><a href="admin/index.php">Chi tiết</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    
<?php
    include 'footer.php';
?>