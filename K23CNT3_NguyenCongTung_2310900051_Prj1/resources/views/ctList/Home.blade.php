<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
        @if(isset($name))
            <h2>Xin Chào, {{ $name }}</h2>
        @else
            <h2>Xin Chào, Khách</h2>
        @endif
        <br>
        <div class="fex justify-center">
          @if(Session::has('ctRemember'))
              <div class="alr alr-success">
                  {{Session::get('ctRemember') }}</p>
                  <a href="/">Đăng Xuất</a>
              </div>
              @else
              <a href="/">Login</a> 
              @endif
      </div>
</body>
</html>