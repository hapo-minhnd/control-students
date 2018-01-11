<!DOCTYPE html>
<html>
<head>
    <title>Activation Email - Allaravel.com</title>
</head>
<body>
<p>
    Chào mừng thành viên {{ $student->name }} !!!. Bạn hãy click vào đường link sau đây để hoàn tất việc xác thực tài khoản.
    </br>
    <a href="{{ route('student.verify',$student->email_token) }}"
       class="button"
       target="_blank">
        Link active gmail
    </a>
</p>
</body>
</html>