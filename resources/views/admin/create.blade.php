@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>Tạo tài khoản học sinh: </h2>
                         <form method="post" action="{{url('admin/home/create/student')}}" class="form-validate">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="code_student">Mã sinh viên:</label>
                                <input type="text" class="form-control" id="code_student" name="code_student">
                            </div>
                             @if($errors->has('code_student'))
                                 <p class="bg-danger">{{$errors->first('code_student')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                             @if($errors->has('password'))
                                 <p class="bg-danger">{{$errors->first('password')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="Retype_password">Retype_password:</label>
                                <input type="password" class="form-control" id="Retype_password" name="Retype_password">
                            </div>

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                             @if($errors->has('name'))
                                 <p class="bg-danger">{{$errors->first('name')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="year_of_birth">Year of birth:</label>
                                <input type="date" class="form-control" id="year_of_birth" name="year_of_birth">
                            </div>
                             @if($errors->has('year_of_birth'))
                                 <p class="bg-danger">{{$errors->first('year_of_birth')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="address">Adress:</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                             @if($errors->has('address'))
                                 <p class="bg-danger">{{$errors->first('address')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="code_class">Code class:</label>
                                <input type="text" class="form-control" id="code_class" name="code_class">
                            </div>
                             @if($errors->has('password'))
                                 <p class="bg-danger">{{$errors->first('password')}}</p>
                             @endif
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                             @if($errors->has('email'))
                                 <p class="bg-danger">{{$errors->first('email')}}</p>
                             @endif
                             <div class="form-group">
                                 <label for="filesTest">Ảnh đại diện:</label>
                                 <input type="file" name="filesTest" required="true">
                             </div>
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
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