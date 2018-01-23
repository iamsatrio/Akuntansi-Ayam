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
    @stack('css')
</head>

<body>

<div class="wrapper has-footer">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="main-container">    <!-- START: Main Container -->
        <center>
        <div class="page-header">
            <h1><i class="fa fa-list"></i> Rekening Akuntansi</h1>
        </div>
        <a href="{{route('account.create')}}" class="btn btn-info"><span class="fa fa-plus-circle"></span> Tambah Rekening Akuntansi</a>
        </center>
        <div class="content-wrap">  <!--START: Content Wrap-->

            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Rekening Akuntansi</h3>
                            <div class="tools">
                                <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-dataTable">
                                <thead>
                                <tr>
                                    <th colspan="2">Rekening Akuntansi</th>
                                    <th>Type</th>
                                    <th>Normal</th>
                                    <th>Debet</th>
                                    <th>Kredit</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="2">1-100 Aktiva Lancar</td>
                                    <td>Header</td>
                                    <td>Normal</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                    <td></td>
                                  </tr>
                                  @foreach ($header1 as $key => $row)
                                    <tr>
                                        <td></td>
                                        <td>{{$row->account_code}} - {{$row->name}}</td>
                                        <td>
                                          @if ($row->typeId == 1)
                                            Detail
                                          @else
                                            Header
                                          @endif
                                        </td>
                                        <td>{{$row->normal}}</td>
                                        <td>Rp. {{number_format($row->debit)}}</td>
                                        <td>Rp. {{number_format($row->credit)}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="button group">
                                                <a href="{{route('account.edit',['account' => $row->id])}}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button></a>
                                                <form action="{{route('account.destroy',['account' => $row->id])}}" method="post">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                  <tr>
                                    <td colspan="2">1-200 Aktiva Tetap</td>
                                    <td>Header</td>
                                    <td>Normal</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                    <td></td>
                                  </tr>
                                  @foreach ($header2 as $key => $row)
                                    <tr>
                                        <td></td>
                                        <td>{{$row->account_code}} - {{$row->name}}</td>
                                        <td>
                                          @if ($row->typeId == 1)
                                            Detail
                                          @else
                                            Header
                                          @endif
                                        </td>
                                        <td>{{$row->normal}}</td>
                                        <td>Rp. {{number_format($row->debit)}}</td>
                                        <td>Rp. {{number_format($row->credit)}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="button group">
                                                <a href="{{route('account.edit',['account' => $row->id])}}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button></a>
                                                <form action="{{route('account.destroy',['account' => $row->id])}}" method="post">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                  <tr>
                                    <td colspan="2">2-100 Utang Lancar</td>
                                    <td>Header</td>
                                    <td>Normal</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                    <td></td>
                                  </tr>
                                  @foreach ($header3 as $key => $row)
                                    <tr>
                                        <td></td>
                                        <td>{{$row->account_code}} - {{$row->name}}</td>
                                        <td>
                                          @if ($row->typeId == 1)
                                            Detail
                                          @else
                                            Header
                                          @endif
                                        </td>
                                        <td>{{$row->normal}}</td>
                                        <td>Rp. {{number_format($row->debit)}}</td>
                                        <td>Rp. {{number_format($row->credit)}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="button group">
                                                <a href="{{route('account.edit',['account' => $row->id])}}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button></a>
                                                <form action="{{route('account.destroy',['account' => $row->id])}}" method="post">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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


<script type="text/javascript" src="{{asset('plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatable/dataTables.bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/app.base.js')}}"></script>
<script type="text/javascript" src="{{asset('js/page-table.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        DataTableBasic.init();
    });
</script>
@stack('js')
</body>
</html>
