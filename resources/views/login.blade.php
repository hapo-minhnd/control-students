@extends('layouts.welcome.front')
@section('content')
<body>
<form method="post"  class="form-validate" action="{{url('login')}}">
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Remember me
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
        <span class="psw"><a href="http://localhost:8080/php-create/create.html">CREAT ACCOUNT</a></span>
    </div>
</form>
</body>
@endsection
