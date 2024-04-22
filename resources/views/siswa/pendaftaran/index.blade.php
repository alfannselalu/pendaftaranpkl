@include('siswa.statusPrakerin.header')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                <div class="page-content">
                    @if (session()->has('success'))
                        <div class="alert alert-success col-lg-8" role="alertP">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Siswa</a></li>
                                            <li class="breadcrumb-item active">Siswa</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                                <div class="text-dark fw-bold">
                                    <h3>Terima Kasih Telah Daftar</h3> 
                                </div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Silahkan Login</button>
                                </form>                                
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                PT.Era Solution
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by SMKN 9 BEKASI
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
            

@include('siswa.statusPrakerin.footer')