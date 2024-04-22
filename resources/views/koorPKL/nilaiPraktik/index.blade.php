@include('koorPKL.dashboard.header')

@include('koorPKL.dashboard.sidebar')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-dark p-4">
                                <div class="container">
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif

                        @if (session()->has('fail'))
                            <div class="alert alert-danger text-dark p-4">
                                <div class="container">
                                    {{ session('fail') }}
                                </div>
                            </div>
                        @endif
                                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">All Nilai Praktik</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Nilai Praktiks</a></li>
                                            <li class="breadcrumb-item active">Nilai Praktik</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <h4 class="card-title mb-0 mt-2">All Nilai Praktik</h4>
                                            <!-- App Search-->
                                            <div class=" mt-3">
                                                <a href="/nilai-praktik/create" class="btn btn-primary shadow-sm mt-4">Create Nilai Praktik</a>
                                                <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                                    <form action="/nilai-praktik">
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
                                                    <th>Nama</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>Nilai Siswa</th>
                                                    <th>Aspek Penilaian</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
            
                                                <tbody class="text-center">
                                                @foreach ($nilaiPraktiks as $nilai)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $nilai->user->nama }}</td>
                                                    <td>{{ $nilai->user->nama_sekolah }}</td>
                                                    <td>{{ $nilai->nilai }}</td>
                                                    <td>{{ $nilai->aspek_penilaian }}</td>
                                                    <td>
                                                        <a href="/nilai-praktik/{{ $nilai->id }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                                        <form action="/nilai-praktik/{{ $nilai->id }}" method="POST" class="d-inline">
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

@include('admin.dashboard.footer')
