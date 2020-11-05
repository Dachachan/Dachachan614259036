<html>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->

<head>
<title> Software Engineering </title>
</head>
<body>

<div class="container mt-3">
<form class="border border p-5" action="./reg_train" method="POST">

<div class="container-fluid mt-5">
<center><div class="row">
<div class="col">
<h4><strong>ข้อมูลการเดินทาง<br></strong></h4>
</div>
<div class="col-3">
<!-- <img src="img/img.png" width="150" height="180">
<input type="file" name="Img"> -->
</div>
<center>
</div>
</div>

<h4>หมายเลขขบวน</h4>
<div class="row">
    <div class="col-1">
    <label class="form-label ml-3">หมายเลขขบวน</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="T_id">
    </div>
</div>
<h4>ต้นทาง</h4>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">สถานี</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="station">
    </div>
    <div class="col-1">
        <label class="form-label ml-3">เวลาออก</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="time_out">
    </div>
</div>
<h4>ห้วยราช</h4>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">ถึง</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="to">
    </div>
    <div class="col-1">
        <label class="form-label ml-3">ออก</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="out">
    </div>
</div>
<h4>ปลายทาง</h4>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">สถานี</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="station_destination">
    </div>
    <div class="col-1">
        <label class="form-label ml-3">ถึงเวลา</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="to_time">
    </div>
    </div>
    <h4>หมายเหตุ</h4>
    <div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">ประเภทรถไฟ</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="note">
    </div>
</div >
<button type="submit" class="btn btn-secondary" style="width:100" style="text-align:right">เพิ่มข้อมูล</button>
<br>
 </form>
 <center><a href="http://localhost/menuproject/index.php/Manage_menu/showall">ไปหน้าแสดงเมนู</a></center>
</div>
</body>
</html>