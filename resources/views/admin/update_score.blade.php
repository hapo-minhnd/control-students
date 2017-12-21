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

        <!-- Main content -->
        <section class="content container-fluid">
            <form method="get" action="{{route('sreach_score')}}" class="form-validate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="code_student">Search( MSSV):</label>
                    <input type="text" class="form-control" id="code_student_enter" name="code_student">
                    <label for="code_student">Search( semester):</label>
                    <input type="text" class="form-control" id="semester" name="semester">
                </div>
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>Name</th>
                    <th>code subject</th>
                    <th>Point</th>
                    <th>semester</th>
                <tr>
                @foreach(  $pointSubjects as $pointSubject)
                    <tr>
                        <form method="post" action="{{route('update_point', $pointSubject->id)}}" id="form-check">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <td><input type="text" class="form-control check none" id="code_student" name="code_student"
                                       value="{{ $pointSubject->code_student }}"></td>
                            <td><input type="text" class="form-control check none" id="name" name="name"
                                       value="{{ $pointSubject->name }}"></td>
                            <td><input type="text" class="form-control check none" id="code_subject"
                                       name="code_subject" value="{{ $pointSubject->code_subject }}"></td>
                            <td><input type="text" class="form-control check none" id="point"
                                       name="point" value="{{ $pointSubject->point }}"></td>
                            <td><input type="text" class="form-control check none" id="semester" name="semester"
                                       value="{{ $pointSubject->semester }}"></td>
                            <td class=" none">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary button-none">
                                    Submit
                                </button>
                            </td>
                        </form>
                    </tr>
                @endforeach
                <tr>
                    <form method="post" action="{{route('create_point')}}" id="form-check">
                        {{ csrf_field() }}
                        <td><input type="text" class="form-control " id="code_student" name="code_student"
                                   ></td>
                        <td><input type="text" class="form-control " id="name" name="name"
                                   ></td>
                        <td><input type="text" class="form-control " id="code_subject"
                                   name="code_subject" ></td>
                        <td><input type="text" class="form-control " id="point"
                                   name="point" ></td>
                        <td><input type="text" class="form-control " id="semester" name="semester"
                                   "></td>
                        <td class="none">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </td>
                    </form>
                </tr>
            </table>
            <div class="text-center">
                {{ $pointSubjects->links() }}
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection