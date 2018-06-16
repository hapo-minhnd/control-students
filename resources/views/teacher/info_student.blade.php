@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content container-fluid">
            <form method="get" action="{{route('search_student_teacher')}}" class="form-validate">
                {{ csrf_field() }}
                <div class="container-fluid" style="padding-left: 0px">
                    <div class="form-group">
                        <b class="col-sm-3 text-primary" style="margin-top: 8px; padding-left: 0px">Tìm kiếm (MSSV hoặc
                            Mã lớp):</b>
                        <input type="text" class="form-control col-sm-6" id="code_student_enter" name="code_student">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary col-sm-1 margin-left-20">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                   aria-describedby="example1_info">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 182px;">Mã số sinh viên
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 182px;">Tên
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 182px;">Ngày sinh
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 182px;">Quê quán
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 182px;">Mã lớp
                    </th>
                <tr>
                @foreach(  $students as $student)
                    <tr>
                        <td>{{ $student->code_student }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->Year_of_birth }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->code_class }}</td>
                    </tr>
                @endforeach
            </table>
            <div class="text-center">
                {{ $students->links() }}
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection