@extends('layouts.elements.front_admin')
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

        <!-section class="content container-fluid">
        <form method="get" action="{{route('search_statistic_score')}}" class="form-validate">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="code_student">Search( MSSV):</label>
                    <input type="text" class="form-control" id="code_student_enter" name="code_student">
                </div>
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>AVG point</th>
                    <th>semester</th>
                <tr>
                @foreach(  $pointSubjects as $pointSubject)
                    <tr>
                            <td><p>{{$pointSubject->code_student}}</p></td>
                            <td><p>{{$pointSubject->point}}</p></td>
                            <td><p>{{$pointSubject->semester}}</p></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection