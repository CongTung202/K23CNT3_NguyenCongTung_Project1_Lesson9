<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <form action="{{ route('create.sinhvien') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Thêm Mới</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="MASV" class="col-form-label">MASV</label>
                        <input type="text" name="MASV" class="form-control" id="MASV" required>
                    </div>
                    <div class="mb-3">
                        <label for="HOSV" class="col-form-label">HOSV</label>
                        <input type="text" name="HOSV" class="form-control" id="HOSV" required>
                    </div>
                    <div class="mb-3">
                        <label for="TENSV" class="col-form-label">TENSV</label>
                        <input type="text" name="TENSV" class="form-control" id="TENSV" required>
                    </div>
                    <div class="mb-3">
                        <label for="PHAI" class="col-form-label">PHAI</label>
                       <input type="radio" name="PHAI" id="PHAI" value="1" required>Nam
                       
                       <input type="radio" name="PHAI" id="PHAI" value="0">Nữ
                    </div>
                    <div class="mb-3">
                        <label for="NGAYSINH" class ="col-form-label">NGAYSINH</label>
                        <input type="date" name="NGAYSINH" class="form-control" id="NGAYSINH" required>
                    </div>
                    <div class="mb-3">
                        <label for="NOISINH" class="col-form-label">NOISINH</label>
                        <input type="text" name="NOISINH" class="form-control" id="NOISINH" required>
                    </div>
                    <div class="mb-3">
                        <label for="MAKHOA" class="col-form-label">MAKHOA</label>
                        <select name="MAKHOA" class="form-control" id="MAKHOA" required>
                            <option value="AV">Anh Văn</option>
                            <option value="BC">BlockChain</option>
                            <option value="IT">IT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="HOCBONG" class="col-form-label">HOCBONG</label>
                        <input name="HOCBONG" type="number" step="0.01" class="form-control" id="HOCBONG">
                    </div>
                    <div class="mb-3">
                        <label for="DIEMTB" class="col-form-label">DIEMTB</label>
                        <input name="DIEMTB" type="number" step="0.01" class="form-control" id="DIEMTB">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/" class="btn btn-success">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>