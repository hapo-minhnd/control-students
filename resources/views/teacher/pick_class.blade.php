@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <h2>Mời giảng viên chọn lớp: </h2>
            @foreach( $classes as $classStudent)
                <form method="get" action="{{route('pick_class', $classStudent->code_class)}}" id="form-check">
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