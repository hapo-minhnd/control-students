@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bảng điểm
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <table>
                <tr>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Mã môn</th>
                    <th>Giáo viên</th>
                <tr>
                @foreach(  $ClassStudents as $classSubject)
                    <tr>
                        <form method="post" action="{{route('update_class_admin', $classSubject->id)}}" id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td><input type="text" class="form-control check none" id="code_class" name="code_class"
                                       value="{{ $classSubject->code_class }}"></td>
                            <td><input type="text" class="form-control check none" id="name_class" name="name_class"
                                       value="{{ $classSubject->name_class }}"></td>
                            <td><input type="text" class="form-control check none" id="code_subject" name="code_subject"
                                       value="{{ $classSubject->code_subject }}"></td>
                            <td><input type="text" class="form-control check none" id="code_teacher" name="code_teacher"
                                       value="{{ $classSubject->code_teacher }}"></td>
                            <td class=" none">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary button-none">
                                    Submit
                                </button>
                            </td>
                        </form>
                    </tr>
                @endforeach
                <tr>
                    <form method="post" action="{{route('create_class')}}" id="form-check">
                        {{ csrf_field() }}
                        <td><input type="text" class="form-control " id="code_class" name="code_class"
                            ></td>
                        <td><input type="text" class="form-control " id="name_class"
                                   name="name_class" ></td>
                        <td><input type="text" class="form-control " id="code_subject"
                                   name="code_subject" ></td>
                        <td><input type="text" class="form-control " id="code_teacher"
                                   name="code_teacher" ></td>
                        <td class="none">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </td>
                    </form>
                </tr>
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection