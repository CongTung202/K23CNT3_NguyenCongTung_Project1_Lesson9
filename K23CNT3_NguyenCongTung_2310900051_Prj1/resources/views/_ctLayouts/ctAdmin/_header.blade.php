<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Header</title>
    <link rel="icon" href="https://i.pinimg.com/736x/43/61/09/4361091dd491bacbbcdbaa0be7a2d2be.jpg" type="image/x-icon" />
    <style>
        .custom-header {
            background-color: rgb(120, 222, 248);
        }
        .custom-header .navbar-brand,
        .custom-header .nav-link {
            color: black;
        }
        .custom-header .nav-link:hover {
            color: #004d00; 
        }
        .navbar-collapse {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header class="custom-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light custom-header">
                <a class="navbar-brand" href="{{ route('CongTung.Home') }}">Trang Chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @if (Cookie::has('ctTaiKhoan'))
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chào, {{ Cookie::get('ctTaiKhoan') }}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('CongTung.Logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="nav-link btn btn-link" style="color: black;">Đăng Xuất</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('CongTung.Login') }}">Đăng Nhập</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>