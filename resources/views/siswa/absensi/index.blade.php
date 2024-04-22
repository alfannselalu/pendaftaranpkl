@include('siswa.statusPrakerin.header')

@include('siswa.statusPrakerin.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                
                <div class="page-content">
                    <div class="container-fluid">
                        @if (session()->has('success'))
                            <div class="alert alert-success text-dark p-4">
                                <div class="container">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        @if (session()->has('fail'))
                            <div class="alert alert-danger text-white p-4">
                                <div class="container">
                                    {{ session('fail') }}
                                </div>
                            </div>
                        @endif

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Absensi Siswa </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Absensi</a></li>
                                            <li class="breadcrumb-item active">Absensi</li>
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
                                        
                                        <h4 class="card-title mb-0 mt-2">Absensi</h4>
                                        <!-- App Search-->

                                        <div class="mt-3">
                                            <a href="/absensi/create" class="btn btn-primary shadow-sm mt-4">Add New Absensi</a>
                                            <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                                <form action="/absensi">
                                                    <div class="input-group position-relative">
                                                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                                        <button class="btn btn-primary" type="submit">Search</button>
                                                    </div>
                                                </form>
                                            </div>
    
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
                                                <th>Aksi</th>
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
                                                <td>
                                                    <a href="/absensi/{{ $absensi->id }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                                    <form action="/absensi/{{ $absensi->id }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bx bx-x-circle"></i></button>
                                                    </form>
                                                </td>
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



@include('siswa.statusPrakerin.footer')