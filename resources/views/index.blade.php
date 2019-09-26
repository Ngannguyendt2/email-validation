<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/index">
    @csrf
    <input type="email" name="email" placeholder="Nhap email can kiem tra">
    <button type="submit">Check</button>
    @if(!empty(request('email')))
        Kết quả: {{ $check?'Đúng định dạng Email':'Sai định dạng Email' }}
    @endif
</form>
</body>
</html>
