@include('siswa.statusPrakerin.header')

@include('siswa.statusPrakerin.sidebar')


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
                                    <h4 class="mb-sm-0 font-size-18">Data Penilaian </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Penilaian</a></li>
                                            <li class="breadcrumb-item active">Data Penilaian</li>
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
        
                                        <h4 class="card-title mb-0 mt-2">Data Penilaian</h4>
                                        <!-- App Search-->
                                        <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                            <form action="/agendaSiswa">
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
                                                <th>Nama</th>
                                                <th>Nama Sekolah</th>
                                                <th>Nilai Siswa</th>
                                                <th>Aspek Penilaian</th>
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

        </div>
        <!-- END layout-wrapper -->

@include('siswa.statusPrakerin.footer')