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
            <form method="POST" action="{{route('sreach_student')}}" class="form-validate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="code_student">MSSV:</label>
                    <input type="text" class="form-control" id="code_student" name="code_student">
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
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->code_student }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->Year_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->code_class }}</td>
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

