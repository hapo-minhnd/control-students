@extends('layouts.elements.front_student')
@section('content')
    <div class="content-wrapper" style="background-color: white">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center text-primary">THÔNG TIN SINH VIÊN</h1>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-5">
                        <img src="/img/{{Auth::guard('student')->user()->image}}" class="user-image" style="width: 250px">
                    </div>
                    <div class="col-sm-6">
                        <div>Họ và tên:<span class="margin-left-10">{{Auth::guard('student')->user()->name}}</span>
                        </div>
                        <br>
                        <div>Mã số sinh viên:<span
                                    class="margin-left-10">{{Auth::guard('student')->user()->code_student}}</span></div>
                        <br>
                        <div>Ngày-tháng năm sinh:<span
                                    class="margin-left-10">{{Auth::guard('student')->user()->Year_of_birth}}</span>
                        </div>
                        <br>
                        <div>Địa chỉ:<span class="margin-left-10">{{Auth::guard('student')->user()->address}}</span>
                        </div>
                        <br>
                        <div>Email:<span class="margin-left-10">{{Auth::guard('student')->user()->email}}</span></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
