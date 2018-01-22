<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Show Up!">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
    @stack('css')
</head>
<style>
    #btnX {
        width: 250px;
    }
</style>
<body>

<div class="wrapper has-footer">
@include('layouts.header')
@include('layouts.sidebar')
<!-- START: Main Container -->
    <center>
        <div class="main-container">

            <div class="page-header">
                <h1>Menu Utama</h1>
                <!-- <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Pages</a></li>
                    <li class="active">Blank Page</li>
                </ol> -->
            </div>

            <!--START: Content Wrap-->
            <div class="content-wrap">

                <div class="row">
                    <div class="col-md-4">
                        <a href="{{route('indexCustomer')}}" class="btn btn-secondary btn-lg" id="btnX">
                            <i class="fa fa-users"></i>
                            <br>
                            Master Customers
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="{{route('indexReminder')}}" class="btn btn-danger btn-lg" id="btnX">
                            <i class="fa fa-bell"></i>
                            <br>
                            Hutang & Piutang
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-lg" id="btnX">
                            <i class="fa fa-book"></i>
                            <br>
                            Laporan
                        </a>
                    </div>

                    <div class="clearfix">&nbsp;</div>

                    <div class="col-md-4">
                        <a href="{{route('indexAccountGroup')}}" class="btn btn-info btn-lg" id="btnX">
                            <i class="fa fa-bars"></i>
                            <br>
                            Rekening Group
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-lg" id="btnX">
                            <i class="fa fa-calculator"></i>
                            <br>
                            Jurnal
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-lg" id="btnX">
                            <i class="fa fa-hourglass"></i>
                            <br>
                            Neraca
                        </a>
                    </div>

                    <div class="clearfix">&nbsp;</div>

                    <div class="col-md-4">
                        <a href="{{route('indexAccount')}}" class="btn btn-linkedin btn-lg" id="btnX">
                            <i class="fa fa-user"></i>
                            <br>
                            Rekening Akuntansi
                        </a>
                    </div>

                    {{--<div class="col-md-4">--}}
                        {{--<a href="#" class="btn btn-primary btn-lg" id="btnX">--}}
                            {{--<i class="fa fa-calculator"></i>--}}
                            {{--<br>--}}
                            {{--Jurnal--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<a href="#" class="btn btn-warning btn-lg" id="btnX">--}}
                            {{--<i class="fa fa-hourglass"></i>--}}
                            {{--<br>--}}
                            {{--Neraca--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </center>
</div>

<script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/lib/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.base.js')}}"></script>
@stack('js')
</body>
</html>
