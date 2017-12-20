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
            <form method="get" action="{{route('sreach_student')}}" class="form-validate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="code_student">Search( MSSV or Code class):</label>
                    <input type="text" class="form-control" id="code_student_enter" name="code_student">
                </div>
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <table>
            <tr>
                <th>MSSV</th>
                <th>Name</th>
                <th>birth day</th>
                <th>Address</th>
                <th>code class</th>
            <tr>
                @foreach(  $students as $student)
                <tr>
                    <form method="post" action="{{route('update_student', $student->id)}}"  id="form-check">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <td><input type="text" class="form-control check none" id="code_student" name="code_student" value="{{ $student->code_student }}"></td>
                        <td><input type="text" class="form-control check none" id="name_student" name="name" value="{{ $student->name }}"></td>
                        <td><input type="text" class="form-control check none" id="year_of_birth" name="year_of_birth" value="{{ $student->Year_of_birth }}"></td>
                        <td><input type="text" class="form-control check none" id="address" name="address" value="{{ $student->address }}"></td>
                        <td><input type="text" class="form-control check none" id="code_class" name="code_class" value="{{ $student->code_class }}"></td>
                        <td class=" none"><button style="cursor:pointer" type="submit" class="btn btn-primary button-none">Submit</button></td>
                    </form>
                </tr>
                @endforeach
            </table>
            <div class="text-center">
            {{ $students->links() }}
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

