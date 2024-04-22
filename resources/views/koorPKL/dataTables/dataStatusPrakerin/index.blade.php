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
                                            
                                            <h4 class="card-title mb-0 mb-3">Status Prakerin</h4>
                                            <!-- App Search-->
                                            {{-- <a href="/penerimaan-pkl/create" class="btn btn-primary shadow-sm">Add New Status</a> --}}
                                            <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                                <form action="/penerimaan-pkl">
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
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
            
                                                <tbody class="text-center">
                                                    @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $user->nama }}</td>
                                                        <td>{{ $user->nama_sekolah }}</td>
                                                        <td>{{ $user->kelas }}</td>
                                                        <td>{{ $user->jurusan }}</td>
                                                        <td>{{ $user->nama_pembimbing }}</td>
                                                        <td>{{ $user->nomor_telepon }}</td>
                                                        <td>{{ $user->tanggal_bergabung }}</td>
                                                        <td>{{ $user->department->posisi }}</td>
                                                        <td>
                                                            @if ($user->status == '0')
                                                                <a href="#" class="bg-warning text-light bg-status">Pending</a>
                                                            @elseif($user->status == 'Ditolak')
                                                                <a href="#" class="bg-danger text-white bg-status">Ditolak</a>
                                                            @else
                                                                <a href="#" class="bg-success text-light bg-status">Diterima</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <form class="app-search float-end d-none d-lg-block">
                                                                @csrf
                                                                <div class="search-status-container">
                                                                    <div class="position-relative" style="border: none">
                                                                        <a href="javascript:void(0);" onclick="openPopup('{{ $user->id }}')">
                                                                            <i class="mdi mdi-cog-sync icon-bell"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="popup-container" id="popup_{{ $user->id }}" style="display: none;">
                                                                <div class="popup-content-status">
                                                                    <span class="close-button" onclick="closePopup('{{ $user->id }}')">&times;</span>
                                                        
                                                                    <div class="col-md-6">
                                                                        <form action="/penerimaan-pkl/{{ $user->id }}" id="form_{{ $user->id }}" method="post" enctype="multipart/form-data" class="d-flex">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="status" class="pt-2">Status</label>
                                                                                <div class="d-flex">
                                                                                <div class="input-group mb-3">
                                                                                    <select name="status" class="mt-3" style="display: inline-block; height:3rem; width: 7rem !important; text-align:center;">
                                                                                        @if ($user->status == '0')
                                                                                            <option selected value="0">Pending</option>
                                                                                            <option value="Ditolak">Ditolak</option>
                                                                                            <option value="Diterima">Diterima</option>
                                                                                        @elseif($user->status == 'Ditolak')
                                                                                            <option value="0">Pending</option>
                                                                                            <option selected value="Ditolak">Ditolak</option>
                                                                                            <option value="Diterima">Diterima</option>
                                                                                        @else
                                                                                            <option value="0">Pending</option>
                                                                                            <option value="Ditolak">Ditolak</option>
                                                                                            <option selected value="Diterima">Diterima</option>
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-primary btn-status">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <a href="/penerimaan-pkl/{{ $user->id }}/edit" class="btn btn-warning"><i class="mdi mdi-message-draw"></i></a> --}}
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

@include('siswa.statusPrakerin.footer')