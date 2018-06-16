<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class="login-background">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{route('post_teacher')}}" method="POST" role="form" class="box-login">
                <legend>Đăng nhập với tài khoản giáo viên:</legend>
                @if($errors->has('errorlogin'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{$errors->first('errorlogin')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="">Tài khoản:</label>
                    <input type="text" class="form-control" id="codeTeacher" placeholder="code_teacher" name="code_teacher" value="{{old('code_teacher')}}">
                    @if($errors->has('code_student'))
                        <p style="color:red">{{$errors->first('code_student')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu:</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    @if($errors->has('password'))
                        <p style="color:red">{{$errors->first('password')}}</p>
                    @endif
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary button-login" name="accept">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>