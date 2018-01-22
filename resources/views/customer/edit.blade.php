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
                <h1><i class="fa fa-plus-circle"></i> Form Tambah Customer</h1>
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
                            <form action="{{route('customer.update',['customer' => $data->id])}}" method="post" role="form" id="formvalidationtooltip">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="PUT">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Kode Customer</label>
                                        <input type="text"
                                               class="form-control"
                                               name="customer_code" value="{{$data->customer_code}}" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text"
                                               class="form-control"
                                               name="name" value="{{$data->name}}"
                                               required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address" required id="address" cols="30" rows="6"
                                                  placeholder="Alamat Lengkap" class="form-control">{{$data->address}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="number"
                                               class="form-control"
                                               name="phone" value="{{$data->phone}}"
                                               required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status_id" class="form-control" required>
                                            <option value="">--Pilih Satu--</option>
                                            @if ($data->status == 0 )
                                              <option value="option1">Aktif</option>
                                              <option value="option2" selected>Non-Aktif</option>
                                            @else
                                              <option value="option1" selected>Aktif</option>
                                              <option value="option2">Non-Aktif</option>
                                            @endif
                                        </select>
                                    </div>

                                </div>

                                <div class="form-actions fluid">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-warning">Save</button>
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
