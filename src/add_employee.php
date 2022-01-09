<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU - Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>  
                </ul>
                </div>
            </div>
        </nav>
        </div>
    </header>
    <div class = "container">
        <h5 class="text-center text-primary mt-5">Thêm mới nhân viên </h5>
    <form action="process_add.php" method="post">
        <div class="mb-3">
            <label for="ten" class="form-label">Họ và tên </label>
            <input type="text" class="form-control" id="hovaten" name = "hovaten" placeholder = "Nhập họ và tên">
        </div> 
        <div class="mb-3">
            <label for="chuc_vu" class="form-label">Chức vụ </label>
            <input type="text" class="form-control" id="chucvu" name = "chucvu" placeholder = "Nhập chức vụ">
        </div>
        <div class="col-auto">
            <label for="don_vi" class="form-label">Phòng ban</label>
            <select class="form-select" id="phongban" name = "phongban">
            <?php
                // Bước 01: Kết nối Database Server
                $conn = mysqli_connect('localhost','root','','1951060880_employees');
               if(!$conn){
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
               // Bước 02: Thực hiện truy vấn
               $sql = "SELECT phongban FROM nhanvien group by phongban";
               $result = mysqli_query($conn,$sql);
                //Bước 03: xử lý kết quả truy vấn
                    if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <option><?php echo $row['phongban']; ?></option>
                <?php
                        }
                    }
                // Bước 03: Đóng kết nối
                mysqli_close($conn);
            ?> 
            </select>
            <br>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>