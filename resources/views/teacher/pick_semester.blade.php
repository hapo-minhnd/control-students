@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chọn kỳ đăng ký:
            </h1>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @foreach( $classes as $classStudent)
                <form method="get" action="{{route('pick_semester_teacher', $classStudent->semester)}}" id="form-check" class="col-sm-1">
                    {{ csrf_field() }}
                    @if ($classStudent->semester  == null)
                    @else
                        <button style="cursor:pointer" type="submit"  class="btn btn-primary " value="{{$classStudent->semester}}">
                            {{$classStudent->semester}}
                        </button>
                    @endif
                </form>
            @endforeach
        </section>
        <!-- /.content -->
    </div>
@endsection