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
                        <form method="POST" action="/login/admin">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="password">Older Password:</label>
                                    <input type="password" class="form-control" id="password" name="older_password">
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password:</label>
                                    <input type="password" class="form-control" id="password" name="new_password">
                                </div>
                                <div class="form-group">
                                    <label for="password">Repeat Password:</label>
                                    <input type="password" class="form-control" id="password" name="repeat_password">
                                </div>
                                <div class="form-group">
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection