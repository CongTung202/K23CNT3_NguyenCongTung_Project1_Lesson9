<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
        <div class="card-hearder">
            <h1>Danh Sach Sinh Vien</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Ma Sv</td>
                    <td>ho sv</td>
                    <td>ten sv</td>
                    <td>gioitinh</td>
                    <td>ngaysinh</td>
                    <td>noisinh</td>
                    <td>makhoa</td>
                    <td>hocbong</td>
                    <td>chucnang</td>
                    <td>
                        Chuc Nang</td>

                </tr>
            </thead>

            <tbody>
                @foreach ($SinhVien as $item)
                @php
                $stt=0;
                $stt++;
                @endphp
                <tr>
                    <td class="text-center">{{$stt}} </td>
                    <td>{{$item->MASV}}</td>
                    <td>{{$item->HOSV}}</td>
                    <td>{{$item->TENSV}}</td>
                    <td>{{$item->PHAI}}</td>
                    <td>{{$item->NGAYSINH}}</td>
                    <td>{{$item->NOISINH}}</td>
                    <td>{{$item->MAKH}}</td>
                    <td>{{$item->HOCBONG}}</td>
                    <td>{{$item->DIEMTB}}</td>
                    <td class="text-center">
                        <a href="/"
                        class="btn btn-success">
                        Chi tiết</a>
                        <a href="/"
                        class="btn btn-primary">
                        Sửa</a>
                        <a href="/" class="btn btn-danger" onclick="return confirm('Bạn muốn xóa sinh viên này?')">
                       Xoa
                        </a>
                    </td>
                    
                </tr>
            </div>
                @endforeach
        </tbody>
        </table>
        <div class="card-footer">
            <h3>Tổng số: {{$SinhVien->count()}}</h3>
            <a href="/ct/them" class="btn btn-primary">Thêm mới</a>
        </div>
        </div>
    </section>
       
</body>
</html>
