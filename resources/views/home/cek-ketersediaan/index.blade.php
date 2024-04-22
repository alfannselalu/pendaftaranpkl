<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Era Solution | PKL </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('pkl') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('pkl') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('pkl') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    {{-- MY STYLE CSS --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
    style="background-image:url('../images/3.jpg'); background-size: 100% 100% ; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

    @include('home.navbar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @if (session()->has('status_message'))
                <div class="fw-bold text-success text-dark p-4">
                    <div class="container">
                        {{ session('status_message') }}
                    </div>
                </div>
                @endif

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                            <div class=" text-dark" >
                               
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin-left: 20px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-0 mt-2">Cek Ketersediaan</h4>
                                        <ol class="breadcrumb m-0 text-dark fw-bold">
                                            <li class="breadcrumb-item"><a class="text-dark" href="javascript: void(0);">Informations</a></li>
                                            <li class="breadcrumb-item text-dark active">Information</li>
                                        </ol>
                                    </div>
                                   
                                    
                                    
                                    
                                    <!-- App Search-->
                                    <div class="d-flex flex-column flex-sm-row justify-content-end mt-2 mb-2">
                                        <form action="/cek-ketersediaan" class="mb-3 mb-sm-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search.." name="search"
                                                    value="{{ request('search') }}">
                                                <button class="btn btn-primary" type="submit">Search</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="datatable"
                                            class="table-small dt-responsive nowrap w-100">
                                            <thead style="font-size:20px ; text-align:center; color:white; background-color: #556ee6;" >
                                                <tr>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody id="myTableBody" style="text-align: center; ">
                                                @foreach ($departments as $index => $department)
                                                    <tr class="{{ $index % 2 === 0 ? 'even' : 'odd' }}">
                                                        <td style="padding: 8px 8px 8px 8px; font-size: 16px; font-weight:bold;">{{ $department->posisi }}</td>
                                                        <td style="padding: 8px 8px 8px 8px; font-size: 15px; ">
                                                            @if ($department->status == '0')
                                                                <a href="" class="bg-warning text-light bg-status" >Pending</a>
                                                            @elseif($department->status == 'Kosong')
                                                                <a href="" class="bg-danger text-white bg-status">Kosong</a>
                                                                <p class="text-danger">Maaf, Ini Sedang Kosong.</p>
                                                            @else
                                                                <a href="" class="bg-success text-light bg-status">Tersedia</a>
                                                                <p class="text-success">Posisi Ini Tersedia.</p>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
                <!-- </div> -->
                <!-- end page title -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('pkl') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('pkl') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('pkl') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('pkl') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('pkl') }}/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('pkl') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="{{ asset('pkl') }}/assets/js/pages/dashboard.init.js"></script>

    </body>

</html>
