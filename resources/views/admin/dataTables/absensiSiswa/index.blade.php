@include('admin.dashboard.header')

@include('admin.dashboard.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                
                <div class="page-content">
                    <div class="container-fluid">
                        @if (session()->has('success'))
                    <div class="fw-bold text-success text-dark p-4">
                        <div class="container">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Data Absensi Siswa </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Data Absensi Siswa</a></li>
                                            <li class="breadcrumb-item active">Data Absensi Siswa</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h4 class="card-title mb-0 pb-4">Data Absensi Siswa</h4>
                                        <!-- App Search-->
                                        <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                            <form action="/adminAbsensi">
                                                <div class="input-group position-relative">
                                                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                </div>
                                            </form>
                                        </div>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100" style="border-collapse: collapse; border: 1px solid #cccccc;">
                                            <thead>
                                            <tr style="background: steelblue; color: white; text-align:center;">
                                                <th>No</th>
                                                <th>Hari/Tanggal</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Pulang</th>
                                                <th>Nama Siswa</th>
                                                <th>Keterangan</th>
                                            </tr>
                                            </thead>

                                            <tbody class="text-center">
                                                @foreach ($absensis as $absensi)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $absensi->tanggal }}</td>
                                                <td>{{ $absensi->jam_masuk }}</td>
                                                <td>{{ $absensi->jam_pulang }}</td>
                                                <td>{{ $absensi->nama_siswa }}</td>
                                                <td>{{ $absensi->keterangan }}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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



@include('admin.dashboard.footer')