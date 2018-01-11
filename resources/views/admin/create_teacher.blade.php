@extends('layouts.elements.front_admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Register</h2>
                    <form method="post" action="{{url('admin/home/create/teacher')}}" class="form-validate">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="code_teacher">Code teacher:</label>
                            <input type="text" class="form-control" id="code_teacher" name="code_teacher">
                        </div>
                        @if($errors->has('code_teacher'))
                        <p class="bg-danger">{{$errors->first('code_teacher')}}</p>
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
                            <label for="gender">Gender:</label>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone:</label>
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