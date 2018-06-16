@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content container-fluid">
            <form method="get" action="{{route('sreach_teacher')}}" class="form-validate">
                {{ csrf_field() }}
                <div class="container-fluid" style="padding-left: 0px">
                    <div class="form-group">
                        <b class="col-sm-3 text-primary" style="margin-top: 8px; padding-left: 0px">Tìm kiếm (MSSV hoặc Mã lớp):</b>
                        <input type="text" class="form-control col-sm-6" id="code_student_enter" name="code_student">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary col-sm-1 margin-left-20">Submit</button>
                    </div>
                </div>
            </form>
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Mã số giáo viên</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Họ tên</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Giới tính</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Số điện thoại</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Email</th>
                <tr>
                @foreach(  $teachers as $teacher)
                    <tr>
                        <form method="post" action="{{route('update_teacher', $teacher->id)}}"  id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td><input type="text" class="form-control check none" id="code_student" name="code_student" value="{{ $teacher->code_teacher }}"></td>
                            <td><input type="text" class="form-control check none" id="name_student" name="name" value="{{ $teacher->name_teacher }}"></td>
                            <td><input type="text" class="form-control check none" id="year_of_birth" name="year_of_birth" value="{{ $teacher->gender }}"></td>
                            <td><input type="text" class="form-control check none" id="address" name="address" value="{{ $teacher->telephone_number }}"></td>
                            <td><input type="text" class="form-control check none" id="code_class" name="code_class" value="{{ $teacher->email }}"></td>
                            <td class=" none"><button style="cursor:pointer" type="submit" class="btn btn-primary button-none">Submit</button></td>
                        </form>
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

