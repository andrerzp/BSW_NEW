<!DOCTYPE html>
<html lang="en">
<head>
    @include('DashboardInstrument.head')

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('DashboardInstrument.navbar')
    <!-- /.navbar -->

    <!-- Sidebar -->
    @include('DashboardInstrument.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Permohonan Saya</b></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">BSW - BP Batam</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Manajemen Data Users
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <div class="card-body">
                                    <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
                                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Cari..">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TGL.REGISTRASI</th>
                                            <th>PERMOHONAN</th>
                                            <th>PERIZINAN</th>
                                            <th>JENIS</th>
                                            <th>DOWNLOAD</th>
                                            <th>STATUS</th>
                                            <th>SETTING</th>
                                        </tr>
                                        </thead>

                                        <tbody>
{{--                                        @foreach ($data_fatwa as $item)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$loop->iteration}}</td>--}}
{{--                                                <td>{{$item->tanggal}}</td>--}}
{{--                                                <td>{{$item->no_telp}}</td>--}}
{{--                                                <td>{{$item->peruntukan}}</td>--}}
{{--                                                <td>Fatwa Planologi</td>--}}
{{--                                                <td><a href="{{ url('app/public/img'.$item->gambar) }}" target="_blank"><u>Tanda bukti pendaftaran</u></a></td>--}}
{{--                                                <td>--}}
{{--                                                    <button type="button" class="btn btn-primary btn-sm col-md-14">Verifikasi <i class="fas fa-check-circle" style="color:white"></i></button>--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="{{ route ('detail')}}" class="btn">--}}
{{--                                                        <button type="button" class="btn btn-info btn-sm col-xs-2">Detail<i class="fas fa-check-circle" style="color:white"></i></button>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="{{url('edit-user',$item->id)}}" class="btn">--}}
{{--                                                        <button type="button" class="btn btn-danger btn-sm col-xs-2 ">Status<i class="fas fa-eye" style="color:white"></i></button>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="{{url('delete',$item->id)}}" onclick="return confirm('Apakah Sudah Yakin Ingin Di Hapus?')" class="btn">--}}
{{--                                                        <button type="button" class="btn btn-warning btn-sm col-xs-2">Delete</button>--}}
{{--                                                    </a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        @include('DashboardInstrument.footer')
    </footer>
</div>
<!-- Delete !-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- delete -->

<!-- ./wrapper -->
@include('DashboardInstrument.script')
@include('sweetalert::alert')
</body>
</html>
