<!DOCTYPE html>
<html>
<head>
    <title>Activation Email - Allaravel.com</title>
</head>
<body>
<p>
    Chào mừng thành viên {{ $teacher->name_teacher }} !!!. Bạn hãy click vào đường link sau đây để hoàn tất việc xác thực tài khoản.
    </br>
    <a href="{{ route('teacher.verify',$teacher->email_token) }}"
       class="button"
       target="_blank">
        Link active gmail teacher
    </a>
</p>
</body>
</html>