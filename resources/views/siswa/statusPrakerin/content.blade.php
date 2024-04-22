
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
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Status Prakerin</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Informations</a></li>
                                            <li class="breadcrumb-item active">Information</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <h4 class="card-title mb-0 mt-2">Status Prakerin</h4>
                                            <!-- App Search-->
                                            <div class="app-search float-end d-none d-lg-block">
                                                <form action="/statusPkl">
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
                                                    <th>Kelas</th>
                                                    <th>Jurusan</th>
                                                    <th>Nama Pembimbing</th>
                                                    <th>No.Telp</th>
                                                    <th>Tanggal Bergabung</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
            
                                                <tbody class="text-center">
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->nama }}</td>
                                                    <td>{{ $user->nama_sekolah }}</td>
                                                    {{-- <td>{{ $user->user_id }}</td> --}}
                                                    <td>{{ $user->kelas }}</td>
                                                    <td>{{ $user->jurusan }}</td>
                                                    <td>{{ $user->nama_pembimbing }}</td>
                                                    <td>{{ $user->nomor_telepon }}</td>
                                                    <td>{{ $user->tanggal_bergabung }}</td>
                                                    <td>{{ $user->department->posisi }}</td>
                                                    <td>
                                                        @if ($user->status == '0')
                                                        <a href="" class="bg-warning text-light bg-status">Pending</a>
                                                        @elseif($user->status == 'Ditolak')
                                                        <a href="" class="bg-danger text-white bg-status">Ditolak</a>
                                                        @else
                                                        <a href="" class="bg-success text-light bg-status">Diterima</a>
                                                        @endif
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