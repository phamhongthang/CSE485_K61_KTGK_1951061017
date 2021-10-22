<?php
    include '../header.php';
    include '../config.php';
?>

    <main class="container">
        <h2>Thêm thông tin </h2>
        <form action="process-add.php" method="post">
            <div class="form-group row">
                <label for="exTitle" class="col-sm-2 col-form-label">Tên bài thi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exTitle" name="exTitle" >
                </div>
            </div>
            <div class="form-group row">
                <label for="exdate" class="col-sm-2 col-form-label">Ngày thi</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="exdate" name="exdate">
                </div>
            </div>
            <div class="form-group row">
                <label for="Duration" class="col-sm-2 col-form-label">Thời gian làm bài</label>
                <div class="col-sm-10">
                <input type="time" class="form-control" id="Duration" name="Duration">
                </div>
            </div>
            <div class="form-group row">
                <label for="Total" class="col-sm-2 col-form-label">Số câu hỏi</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="Total" name="Total">
                </div>
            </div>
            <div class="form-group row">
                <label for="Mark" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng</label>
                <div class="col-sm-10">
                <input type="int" class="form-control" id="Mark" name="Mark">
                </div>
            </div>
            <div class="form-group row">
                <label for="Createdon" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
                <div class="col-sm-10">
              <input type="date" class="form-control" id="Createdon" name="Createdon">
                </div>   
            </div>   
            <div class="form-group row">
                <label for="Status" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Status" name="Status">
                </div>
            </div>  
            <div class="form-group row">
                <label for="exCode" class="col-sm-2 col-form-label">Mã truy cập</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exCode" name="exCode">
                </div>
            </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
<?php
    include '../footer.php';
    
?>