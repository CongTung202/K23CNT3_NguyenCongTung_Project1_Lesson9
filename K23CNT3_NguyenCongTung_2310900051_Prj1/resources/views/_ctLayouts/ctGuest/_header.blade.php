<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Header</title>
    <link rel="icon" href="https://i.pinimg.com/736x/43/61/09/4361091dd491bacbbcdbaa0be7a2d2be.jpg" type="image/x-icon" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #5becff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo img {
            height: 70px; /* Điều chỉnh chiều cao logo */
        }
        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .menu{
            padding-left:30px;
            font-size: 20px;
        }
        .menu ul li {
            margin: 0 8px;
        }
        .menu ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }
        .menu ul li a:hover {
            color: #e2942e; /* Màu khi hover */
        }
        .btn-menu-fixed {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        .btn-menu-fixed span {
            width: 25px;
            height: 3px;
            background: #333;
            margin: 3px 0;
            transition: all 0.3s;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <nav class="container d-flex justify-content-between align-items-center py-3">
                <div class="logo">
                    <a href="/ctGuest/Home">
                        <img src="{{asset('imgbanner/Logo.png')}}" alt="logo-dienthoai">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="/ctGuest/Home">TRANG CHỦ</a></li>
                        <li><a href="/ctGuest/Introduction">GIỚI THIỆU</a></li>
                        <li><a href="/ctGuest/SanPham">SẢN PHẨM</a></li>
                        <li><a href="/ctGuest/ct-create">ĐĂNG NHẬP/ĐĂNG KÝ</a></li>
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