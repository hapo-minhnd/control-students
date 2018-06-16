@extends('layouts.elements.front_teacher')
@section('content')
    <div class="content-wrapper" style="background-color: white">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="text-center text-primary">THÔNG TIN GIÁO VIÊN: </h1>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-5">
                        <img src="/img/admin.jpg" class="user-image">
                    </div>
                    <div class="col-sm-6">
                        <div>Họ và tên:<span class="margin-left-10">{{Auth::guard('teacher')->user()->name_teacher}}</span>
                        </div>
                        <br>
                        <div>Mã số giáo viên:<span
                                    class="margin-left-10">{{Auth::guard('teacher')->user()->code_teacher}}</span></div>
                        <br>
                        <div>Giới tính:<span
                                    class="margin-left-10">{{Auth::guard('teacher')->user()->gender}}</span>
                        </div>
                        <br>
                        <div>Số điện thoại:<span class="margin-left-10">{{Auth::guard('teacher')->user()->telephone_number}}</span>
                        </div>
                        <br>
                        <div>Email:<span class="margin-left-10">{{Auth::guard('teacher')->user()->email}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
