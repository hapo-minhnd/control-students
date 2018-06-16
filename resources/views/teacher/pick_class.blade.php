@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content container-fluid">
            <h3 class="text-blue">Danh sách lớp giảng viên dậy trong kì @if($semester != ''){{$semester}}
                @else
                    <span></span>
                @endif    : </h3>
            <table class="table table-bordered table-striped dataTable">
                <tr>
                    <th>Mã lớp</th>
                    <th>Tên lớp</th>
                    <th>Mã môn</th>
                </tr>
            @foreach( $classes as $classStudent)
                <tr>
                    <form method="get" action="{{route('pick_class', $classStudent->code_class)}}" id="form-check" class="col-sm-1">
                        {{ csrf_field() }}
                        <td><p>{{ $classStudent->code_class }}</p></td>
                        <td><p>{{ $classStudent->name_class }}</p></td>
                        <td><p>{{ $classStudent->code_subject }}</p></td>
                        <td><button style="cursor:pointer" type="submit"  class="btn btn-primary " value="{{$classStudent->name_class}}">Login</button></td>
                    </form>
                </tr>
            @endforeach
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection