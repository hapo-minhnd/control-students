@extends('layouts.elements.front_teacher')
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
                    <th>Giáo viên</th>
                <tr>
                @foreach(  $ClassStudents as $classSubject)
                    <tr>
                        <form method="post" action="{{route('update_class_teacher', $classSubject->id)}}" id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td><p>{{ $classSubject->code_class }}</p></td>
                            <td><p>{{ $classSubject->name_class }}</p></td>
                            <td>
                                @if ($classSubject->code_teacher  == null)
                                <input type="checkbox" class=" check none" id="teacher"
                                       name="teacher" value="{{ $code_teacher = auth()->guard('teacher')->user()->code_teacher}}">
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary ">
                                        Đăng ký
                                    </button>
                                @else
                                <p>{{ $classSubject->code_teacher }}</p>
                                @endif
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection