
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card overflow-hidden">
                                        <div class="bg-primary bg-soft">
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="text-primary p-3">
                                                        <h5 class="text-primary">Welcome Back !</h5>
                                                        <p>Admin Dashboard</p>
                                                    </div>
                                                </div>
                                                @foreach ($admins as $admin)
                                                <div class="col-5 align-self-end">
                                                    @if ($admin->image) 
                                                    <img src="{{ asset('storage/' . $admin->image) }}" alt="{{ $admin->nama_admin }}" class="img-fluid " style="width: 2.5rem; height:3rem;"> 
                                                    {{-- @else Tidak ada gambar  --}}
                                                    @endif                                                
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    @foreach ($admins as $admin)
                                                    <div class="avatar-md profile-user-wid">
                                                        @if ($admin->image) 
                                                        <img src="{{ asset('storage/' . $admin->image) }}" alt="{{ $admin->nama_admin }}" class="img-thumbnail rounded-circle " style="width: 4rem; height:4rem;"> 
                                                        {{-- @else Tidak ada gambar  --}}
                                                        @endif                                                
                                                    </div>
                                                    @endforeach
                                                    <h5 class="font-size-15 text-truncate">Admin</h5>
                                                    <p class="text-muted mb-0 text-truncate">Admin PKL</p>
                                                </div>
                            
                                                <div class="col-sm-4">
                                                    <div class="pt-4">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <h5 class="font-size-15">Admin</h5>
                                                                <p class="text-muted mb-0">Admin</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <a href="/dataAdmin" class="btn btn-primary waves-effect waves-light btn-sm">Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-3">
                                    <div class="card overflow-hidden">
                                      
                                        <div class="card-body pt-0">
                                            <div class="row">
                                               <div style="text-align: center; margin-top: 20px;">
                                                <h4 style="font-size: 130%;">Jumlah Anak PKL</h4>
                                               </div>
                                               <div>
                                                <i class="bx bxs-user-circle" style="font-size: 7.5em; margin-left: 26%;"></i>
                                               </div>
                                               <h6 style="text-align: center; margin-top: 12%;"><span style="color: green;">2</span> siswa/siswi</h6>
                                            </div>
                                            <a href="#" style="background-color: #007BFF; color: white; padding: 5px 30px 5px 30px; border: none; border-radius: 5px; cursor: pointer; margin-top: 3px; margin-bottom: 5px; margin-left: 56px; width: 50%; ">Detail</a>
                                        </div>
                                        {{Route('data-pkl')}}{{ $jumlahAnakPkl }}''
                                    </div>
                                    
                                </div> --}}
                            <!-- end row -->
    
                        </div><!-- end row -->
                            
                        </div>
                            <!-- </div> -->
                        <!-- end page title -->

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

        </div>
        <!-- END layout-wrapper -->