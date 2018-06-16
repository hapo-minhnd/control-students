@extends('layouts.elements.front_student')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Đăng ký lớp học:
            </h1>
            <br>
            <small>
                @if($day)
                    Đang trong thời gian đăng ký: {{$day}}
                @else
                    Không trong thời gian đăng ký.
                @endif
            </small>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
            <table class="table table-bordered table-striped dataTable">
                <tr>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Học kỳ</th>
                    <th>Đăng ký</th>
                <tr>
                @foreach(  $ClassStudents as $classSubject)
                    <tr>
                        <form method="post" action="{{route('update_class_student', $classSubject->code_class)}}" id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;"><p name="code_class" id="code_class">{{ $classSubject->code_class }}</p></td>
                            <td class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;"><p>{{ $classSubject->name_class }}</p></td>
                            <td class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;"><p>{{ $classSubject->semester }}</p></td>
                            <td class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">
                                @php
                                $code_student = auth()->guard('student')->user()->code_student;
                                $check = App\Models\PointSubject::where('code_student', $code_student)->where('code_class', $classSubject->code_class)->get();
                                @endphp
                                @if ($check->count() === 0)
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary " id="student" name="student" name="student" value="{{ $code_student = auth()->guard('student')->user()->code_student}}">
                                        Đăng ký
                                    </button>
                                @else
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary " id="student" name="student" name="student" value="">
                                        Xóa đăng ký
                                    </button>
                                @endif
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
@endsection