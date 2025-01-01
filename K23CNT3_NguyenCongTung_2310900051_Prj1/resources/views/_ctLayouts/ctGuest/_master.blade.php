<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <link rel="icon" href=
"https://s3.zerochan.net/240/27/20/4368527.avif"
        type="image/x-icon" />
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .carousel{
            padding-top:30px;
            padding-bottom: 30px;
        }
        .wrapper {
            width: calc(100% - 0px); 
            background: #ffffff;
        }
        .content-body{
            background-color: rgb(255, 255, 233)
        }
        .carousel-item {
            width: 60%;
            height: 300px; /* Chiều cao của carousel */
            display: flex; /* Sử dụng flexbox để căn giữa */
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center; /* Căn giữa theo chiều dọc */
            padding-left: 20%;
        }
        .carousel-item img {
            max-width: 70%; /* Giới hạn chiều rộng tối đa là 70% */
            height: auto; /* Giữ tỷ lệ khung hình */
        }
        .hot-sale{
            display: flex;
            justify-content: center;
        }
        /* Three columns side by side */
        .column {
        float: left;
        width: 25%;
        padding: 0 10px;
        margin-bottom: 20px; /* Khoảng cách giữa các cột */
    }

    /* Display the columns below each other instead of side by side on small screens */
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    /* Add some shadows to create a card effect */
    .card {
        max-width: 8880px;
        height: auto;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px; /* Bo góc cho thẻ card */
        overflow: hidden; /* Đảm bảo không có nội dung nào tràn ra ngoài */
    }

    /* Some left and right padding inside the container */
    .container {
        padding: 13px 16px;
    }

    /* Clear floats */
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    .product-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: start; /* Sử dụng space-between để tạo khoảng cách đều */
        margin: 20px 0;
    }
    .product-card {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 10px;
        padding: 15px;
        width: calc(20% - 20px); /* Điều chỉnh width để có 5 card trên một dòng */
        text-align: center;
        box-sizing: border-box; /* Đảm bảo padding và border không làm thay đổi kích thước */
    }
    .product-image {
        width: 100%; /* Đặt chiều rộng hình ảnh bằng 100% của thẻ chứa */
        height: 200px; /* Đặt chiều cao cố định cho hình ảnh */
        object-fit: cover; /* Cắt hình ảnh để phù hợp với kích thước mà không làm biến dạng */
        border-radius: 5px; /* Tùy chọn: bo góc hình ảnh */
    }
    .product-info {
        margin-top: 10px;
    }
    .price {
        font-weight: bold;
        color: #d9534f; /* Màu sắc cho giá */
    }
    .category, .status {
        font-size: 0.9em;
        color: #777;
    }

</style>
</head>
<body style="background: #fac8c8">
    <section class="container-fluid d-flex">
        <section class="wrapper">
            <header>
                <h2>@include('_ctLayouts.ctGuest._header')</h2>
            </header>
            <section class="content-body border my-1">
                @yield('content-body')
            </section>
        </section>
    </section>
    <section>
        @include('_ctLayouts.ctGuest._footer')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>