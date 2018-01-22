<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/validationEngine/validationEngine.jquery.css')}}">
    @stack('css')
</head>

<body>

<div class="wrapper has-footer">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="main-container">    <!-- START: Main Container -->
        <center>
            <div class="page-header">
                <h1><i class="fa fa-plus-circle"></i> Form Tambah Rekening Group</h1>
            </div>
        </center>
        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{--<h3 class="panel-title">Form Tambah Customer</h3>--}}
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="#" role="form" id="formvalidationtooltip">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label>Nama Rekening Group</label>
                                        <input type="text"
                                               class="form-control"
                                               name="name" placeholder="Nama Rekening Group"
                                               required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Normal</label>
                                        <select name="normal_id" class="form-control" required>
                                            <option value="">--Pilih Satu--</option>
                                            <option value="1">Debet</option>
                                            <option value="2">Kredit</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Laporan</label>
                                        <select name="report_id" class="form-control" required>
                                            <option value="">--Pilih Satu--</option>
                                            <option value="1">Neraca</option>
                                            <option value="2">Laba Rugi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions fluid">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>  <!-- END: Panel Body -->
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>  <!--END: Content Wrap-->
    </div>  <!-- END: Main Container -->

    @include('layouts.footer')

</div>  <!-- END: wrapper -->


<script type="text/javascript" src="{{asset('plugins/lib/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/lib/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/lib/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.base.js')}}"></script>


<script src="{{asset('plugins/validationEngine/jquery.validationEngine.js')}}"></script>
<script src="{{asset('plugins/validationEngine/languages/jquery.validationEngine-en.js')}}"></script>
<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/page-validation.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        FormValidationInline.init();
        FormValidationTooltip.init();
    });
</script>
@stack('js')
</body>
</html>