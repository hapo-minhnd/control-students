@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách lớp trong kỳ:
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <table>
                <tr>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Học kỳ</th>
                    <th>Giáo viên</th>
                <tr>
                @foreach(  $ClassStudents as $classSubject)
                    <tr>
                        <form method="post" action="{{route('update_class_teacher', $classSubject->id)}}" id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td><p>{{ $classSubject->code_class }}</p></td>
                            <td><p>{{ $classSubject->name_class }}</p></td>
                            <td><p>{{ $classSubject->semester }}</p></td>
                            <td><span>{{ $classSubject->code_teacher }}</span>
                                @if ($classSubject->code_teacher  == null)
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary" value="{{ $code_teacher = auth()->guard('teacher')->user()->code_teacher}}" id="teacher" name="teacher">
                                        Đăng ký
                                    </button>
                                @elseif( auth()->guard('teacher')->user()->code_teacher == $classSubject->code_teacher)
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary " value="" id="teacher" name="teacher">
                                        Xóa đăng ký
                                    </button>
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