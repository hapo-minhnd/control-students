@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <form method="get" action="{{route('sreach_score')}}" class="form-validate col-sm-3">
                {{ csrf_field() }}
                <div>
                    <div class="form-group">
                        <label for="code_student">Tìm kiếm theo MSSV:</label>
                        <input type="text" class="form-control" id="code_student_enter" name="code_student">
                        <label for="code_student">Tìm kiếm theo mã lớp:</label>
                        <input type="text" class="form-control" id="code_class" name="code_class">
                    </div>
                    <div class="form-group">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
            </form>
            <div class="col-sm-9">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Mã số sinh viên</th>
                        <th>Mã lớp học</th>
                        <th>Điểm</th>
                    <tr>
                    @foreach(  $pointSubjects as $pointSubject)
                        <tr>
                            <form method="post" action="{{route('update_point', $pointSubject->id)}}" id="form-check">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <td><input type="text" class="form-control check none" id="code_student"
                                           name="code_student"
                                           value="{{ $pointSubject->code_student }}"></td>
                                <td><input type="text" class="form-control check none" id="code_class"
                                           name="code_class" value="{{ $pointSubject->code_class }}"></td>
                                <td><input type="text" class="form-control check none" id="point"
                                           name="point" value="{{ $pointSubject->point }}"></td>
                                <td class=" none">
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary button-none">
                                        Submit
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    <tr>
                        <form method="post" action="{{route('create_point')}}" id="form-check">
                            {{ csrf_field() }}
                            <td><input type="text" class="form-control " id="code_student" name="code_student"
                                ></td>
                            <td><input type="text" class="form-control " id="code_class"
                                       name="code_class"></td>
                            <td><input type="text" class="form-control " id="point"
                                       name="point"></td>
                            <td class="none">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </td>
                        </form>
                    </tr>
                </table>
                <div class="text-center">
                    {{ $pointSubjects->links() }}
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection