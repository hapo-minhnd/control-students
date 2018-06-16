@extends('layouts.elements.front_student')
@section('content')
    <div class="content-wrapper" style="background-color: white">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center text-primary">BẢNG ĐIỂM : </h1>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Mã số sinh viên</th>
                                    <th>Mã môn</th>
                                    <th>Mã lớp</th>
                                    <th>Tên môn</th>
                                    <th>Số điểm</th>
                                <tr>
                                </thead>
                                <tbody>
                                @foreach(  $pointSubjects as $pointSubject)
                                    <tr>
                                        <td>{{ $pointSubject->code_student }}</td>
                                        <td>{{ $pointSubject->code_subject }}</td>
                                        <td>{{ $pointSubject->code_class }}</td>
                                        <td>{{ $pointSubject->name_class }}</td>
                                        <td>{{ $pointSubject->point }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

