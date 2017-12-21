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
                        <h2>Cập nhật thông tin</h2>
                        <form method="POST" action="/register">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="MSSV">MSSV:</label>
                                <input type="text" class="form-control" id="MSSV" name="MSSV">
                            </div>

                            <div class="form-group">
                                <label for="HVT">Họ và tên:</label>
                                <input type="text" class="form-control" id="HVT" name="HVT">
                            </div>

                            <div class="form-group">
                                <label for="DC">Địa chỉ:</label>
                                <input type="text" class="form-control" id="DC" name="DC">
                            </div>
                            <div class="form-group">
                                <label for="ML">Mã lớp:</label>
                                <input type="text" class="form-control" id="ML" name="ML">
                            </div>
                            <div class="form-group">
                            <label>Giới tính:</label>
                                <input type="radio" name="gender" value="NỮ" >Nữ
                                <input type="radio" name="gender" value="Nam" >Nam
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