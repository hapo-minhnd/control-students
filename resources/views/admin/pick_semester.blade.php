@extends('layouts.elements.front_admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-blue">
                Chọn học kỳ muốn tổng kết:
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @foreach( $classes as $classStudent)
                <form method="get" action="{{route('pick_class_point', $classStudent->semester)}}" id="form-check" class="col-sm-1">
                    {{ csrf_field() }}
                    @if ($classStudent->semester  == null)
                    @else
                        <button style="cursor:pointer; width: 200%" type="submit"  class="btn btn-primary " value="{{$classStudent->semester}}">
                            {{$classStudent->semester}}
                        </button>
                    @endif
                </form>
            @endforeach
        </section>
        <!-- /.content -->
    </div>
@endsection