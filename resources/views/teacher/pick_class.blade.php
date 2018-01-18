@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content container-fluid">
            <h2>Mời giảng viên chọn lớp: </h2>
            @foreach( $classes as $classStudent)
                <form method="get" action="{{route('pick_class', $classStudent->code_class)}}" id="form-check" class="col-sm-1">
                    {{ csrf_field() }}
                    <button style="cursor:pointer" type="submit"  class="btn btn-primary " value="{{$classStudent->name_class}}">
                        {{$classStudent->name_class}}
                    </button>
                </form>
            @endforeach
        </section>
        <!-- /.content -->
    </div>
@endsection