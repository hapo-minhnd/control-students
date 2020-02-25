@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="loader"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="text-blue">Tạo tài khoản giáo viên:</h2>
                        <form class="form-validate" id="consultation">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="code_teacher">Mã số giáo viên:</label>
                                <input type="text" class="form-control" id="code_teacher" name="code_teacher">
                            </div>
                            @if($errors->has('code_teacher'))
                                <p class="bg-danger">{{$errors->first('code_teacher')}}</p>
                            @endif
                            <div class="form-group">
                                <label for="password">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            @if($errors->has('password'))
                                <p class="bg-danger">{{$errors->first('password')}}</p>
                            @endif
                            <div class="form-group">
                                <label for="Retype_password">Nhập lại mật khẩu:</label>
                                <input type="password" class="form-control" id="Retype_password" name="Retype_password">
                            </div>

                            <div class="form-group">
                                <label for="name">Họ và tên:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            @if($errors->has('name'))
                                <p class="bg-danger">{{$errors->first('name')}}</p>
                            @endif
                            <div class="form-group">
                                <label for="gender">Giới tính:</label>
                                <input type="radio" name="gender" value="Nu">Nữ
                                <input type="radio" name="gender" value="Nam" class="margin-left-20">Nam
                            </div>
                            <div class="form-group">
                                <label for="telephone">Số điện thoại:</label>
                                <input type="text" class="form-control" id="telephone" name="telephone">
                            </div>
                            @if($errors->has('telephone'))
                                <p class="bg-danger">{{$errors->first('telephone')}}</p>
                            @endif
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            @if($errors->has('email'))
                                <p class="bg-danger">{{$errors->first('email')}}</p>
                            @endif
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary" id="sendAdvice">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </body>

        </section>
        <!-- /.content -->
    </div>
@endsection
@section("script")
    <script type="text/javascript">
      $('#sendAdvice').click(function (e) {
        let data = $("#consultation").serialize();
        e.preventDefault();
        $('.loader').show();
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '{{ route('create_teacher') }}',
          type: 'POST',
          data: data,
          dataType: 'json',
          contentType: "application/x-www-form-urlencoded",
          success: function (data) {
            $('.loader').hide();
            $("#consultation")[0].reset();
            alert('Tạo tài khoản thành công!');
          },
          error: function (data) {
            $('.loader').hide();
            alert('Tạo tài khoản thất bại!');
          },
        });
      });
    </script>
@endsection
