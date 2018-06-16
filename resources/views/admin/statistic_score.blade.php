@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>
        <section class="content container-fluid">
        <!-section class="content container-fluid">
            <form method="get" action="{{route('search_statistic_score')}}" class="form-validate">
                {{ csrf_field() }}
            <div class="col-sm-3">
                <div class="form-group ">
                    <label for="code_student">Search( MSSV):</label>
                    <input type="text" class="form-control " id="code_student_enter" name="code_student">
                </div>
                <div class="form-group ">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            <table class="table table-bordered table-striped dataTable">
                <tr>
                    <th>Mã số sinh viên</th>
                    <th>Điểm trung bình</th>
                    <th>Học kì</th>
                    <th>Tổng số môn học</th>
                <tr>
                @foreach(  $pointSubjects as $pointSubject)
                    <tr>
                        <td><p>{{$pointSubject->code_student}}</p></td>
                        <td><p>{{$pointSubject->avgpoint}}</p></td>
                        <td><p>{{$pointSubject->semester}}</p></td>
                        <td><p>{{$pointSubject->die}}</p></td>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection