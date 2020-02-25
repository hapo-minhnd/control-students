{{--<!DOCTYPE html>
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
<!DOCTYPE html>--}}
{{--<html>
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
</html>--}}
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<body>
<style type="text/css">
    body {
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    }
    .header {
        background-color: #ac0;
        background-image: -webkit-gradient(linear, 0 100%, 100% 0,
        color-stop(.25, rgba(255, 255, 255, .2)), color-stop(.25, transparent),
        color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .2)),
        color-stop(.75, rgba(255, 255, 255, .2)), color-stop(.75, transparent),
        to(transparent));
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
        transparent 75%, transparent);
        background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
        transparent 75%, transparent);
        width: 100.0%;
        text-align: center;
    }
    .header table tr:first-child td {
        padding: 50px 20px 25px;
    }
    .header table tr td {
        padding: 15px 20px;
    }
    .content {
        width: 500px;
    }
    td {
        text-align: center;
    }
    .centered {
        margin: 0 auto;
    }
    .text-header {
        color: #ffffff;
        font-size: 25px;
        line-height: 25px;
    }
    .body .content tr td {
        color: #292e31;
        font-size: 14.0px;
        font-weight: normal;
        padding: 20px 15px;
        text-align: left;
        border-width: 0px 0px 1.0px;
        border-bottom-style: solid;
        border-bottom-color: #eaeff2;
        line-height: 25px;
    }
    .middle {
        color: #ffffff;
        font-size: 13.0px;
        line-height: 17.0px;
    }
    .middle table tr td {
        padding: 8px 15px;
    }
    .footer {
        border-top: 1.0px solid #e4e6e8;
        color: #959fa5;
        font-size: 13.0px;
        line-height: 17.0px;
        background: #f9fafa;
    }
    .footer table tr:first-child td {
        color: #515f66;
        font-size: 15.0px;
        line-height: 21.0px;
    }
    .footer table tr td {
        padding: 15px;
    }
    .highlight {
        color: #008cdd;
        text-decoration: none;
    }
    .mail-template-btn {
        background-color: #ac0;
        background-image: -webkit-gradient(linear, 0 100%, 100% 0,
        color-stop(.25, rgba(255, 255, 255, .2)), color-stop(.25, transparent),
        color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .2)),
        color-stop(.75, rgba(255, 255, 255, .2)), color-stop(.75, transparent),
        to(transparent));
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
        transparent 75%, transparent);
        background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%,
        transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%,
        transparent 75%, transparent);
        width: 100.0%;
        text-align: center;
        border-radius: 30px;
        color: #fff;
        text-transform: uppercase;
        border: none;
        padding: 15px 30px;
        font-size: 14px;
        text-decoration: unset;
    }
    @media screen and (max-width: 480px) {
        .content {
            width: 100%;
        }
    }
</style>

<div class="header">
    <table class="content centered">
        <tr>
            <td>
                <img src="{{ $message->embed('img/logo_header.png') }}" class="logo-pos">
            </td>
        </tr>
        <tr>
            <td class="text-header">
                Chào mừng đến với đại học Bách Khoa Hà Nội
            </td>
        </tr>
    </table>
</div>
<div class="middle">
    <table class="content centered">
        <tr>
            <td style="text-align: left">
            </td>
        </tr>
    </table>
</div>
<div class="body">
    <table class="content centered">
        <tr>
            <td>
                <p>Chào mừng giảng viên mới {{ $teacher->name_teacher }} của đại học Bách Khoa Hà Nội !!!. Bạn hãy click vào đường link sau đây để hoàn tất việc xác thực tài khoản.</p>
            </td>
        </tr>
        <tr>
            <td style="text-align: center !important; padding-top: 25px; padding-bottom: 25px;">
                <a href="{{ route('teacher.verify',$teacher->email_token) }}" class="mail-template-btn">Link đăng nhập</a>
            </td>
        </tr>
        <tr>
            <td>
                Nguyễn Đức Minh
                <br/>
            </td>
        </tr>
    </table>
</div>
<div class="footer">
    <table class="content centered">
        <tr>
            <td>
                Copyright © 2018 Biohackin Inc. All rights reserved
            </td>
        </tr>
    </table>
</div>
</body>
</html>