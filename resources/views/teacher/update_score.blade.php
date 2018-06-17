@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3 class="text-blue">
                Bảng điểm lớp {{$id}}:
            </h3>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="col-sm-8 col-lg-offset-2">
                <table class="table table-bordered table-striped dataTable">
                    <tr>
                        <th>Mã số sinh viên:</th>
                        <th>Mã lớp học:</th>
                        <th>Điểm:</th>
                    <tr>
                    @foreach(  $pointSubjects as $pointSubject)
                        <tr>
                            <form method="post" action="{{route('update_point_teacher', $pointSubject->id)}}"
                                  id="form-check">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <td><p>{{ $pointSubject->code_student }}</p></td>
                                <td><p>{{ $pointSubject->code_class }}</p></td>
                                <td><input type="text" class="form-control check none" id="point" style="width: auto"
                                           name="point" value="{{ $pointSubject->point }}"></td>
                                <td class=" none">
                                    <button style="cursor:pointer" type="submit" class="btn btn-primary button-none">
                                        Submit
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </table>
                <div class="text-center">
                    {{ $pointSubjects->links() }}
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection