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
        <form class="form_score">
            <label for="MSSV">MSSV:</label>
            <input type="text" class="form-control update_score" id="MSSV" placeholder="" name="MSSV">
            <label for="MH">Môn học:</label>
            <input type="text" class="form-control update_score" id="MH" placeholder="" name="MH">
            <label for="HK">Học kì:</label>
            <input type="text" class="form-control update_score" id="HK" placeholder="" name="HK">
            <button type="submit" class="btn btn-primary" name="accept">OK</button>
        </form>
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>Môn học</th>
                    <th>Học kì</th>
                    <th>Mã lớp</th>
                    <th>Điểm số</th>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection