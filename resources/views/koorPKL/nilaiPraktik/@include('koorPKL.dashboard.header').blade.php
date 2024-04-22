@include('koorPKL.dashboard.header')

@include('koorPKL.dashboard.sidebar')

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
                                    <h4 class="mb-sm-0 font-size-18">Nilai Praktik </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Nilai</a></li>
                                            <li class="breadcrumb-item active">Penilaian</li>
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
                                        
                                        <h4 class="card-title mb-0 pb-4">Penilaian</h4>
                                        <!-- App Search-->
                                        
                                        <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                            <form action="/nilai-praktik">
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
                                                <th>Asal Sekolah</th>
                                                <th>Aspek Penilaian</th>
                                                <th>Nilai</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>

                                            <tbody class="text-center">
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->nama }}</td>
                                                        <td>{{ $user->nama_sekolah }}</td>
                                                        @if ($user->nilaiPraktik->isNotEmpty())
                                                            <td>{{ $user->nilaiPraktik[0]->aspek_penilaian }}</td>
                                                            <td>{{ $user->nilaiPraktik[0]->nilai }}</td>
                                                        @else
                                                            <td>No Value</td>
                                                            <td>No Value</td>
                                                        @endif
                                                        <td style="width: 115px;"> <!-- Atur lebar sesuai kebutuhan Anda -->
                                                            <a href="javascript:void(0);" class="open-popup" data-userid="{{ $user->id }}">
                                                                <i class="mdi mdi-plus btn btn-primary" style="font-size: 14px; height: 37px; width:43px;"></i>
                                                            </a>
                                                            <a href="javascript:void(0);" class="open-popup" data-popup-id="edit_popup_{{ $user->id }}">
                                                                <i class="bx bx-edit btn btn-info" style="font-size: 17px; height: 37px;"></i>
                                                            </a>
                                                        </td>
                                                        
                                                    <!-- Popup for each user -->
                                                    <div class="popup-container" id="popup_{{ $user->id }}">
                                                        <div class="popup-content">
                                                            <!-- ... (your existing popup content) ... -->
                                                            <form action="{{ route('nilai.store', ['userId' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                                                @csrf                                      
                                                                <h4>Masukkan Nilai</h4>
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <label for="aspek_penilaian">Aspek Penilaian</label>
                                                                            <input type="text" name="aspek_penilaian" id="aspek_penilaian" min="0" max="10" placeholder="Masukkan Nilai" >
                                                                        </div>
                                                                        <div>
                                                                            <label for="nilai">Nilai</label>
                                                                            <input type="text" name="nilai" id="nilai" min="0" max="10"  placeholder="Masukkan Nilai" >
                                                                            </div>
                                                                    </div>        
                                                                    <button type="submit" class="btn btn-primary btn-evaluation">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="popup-container" id="edit_popup_{{ $user->id }}">
                                                                <div class="popup-content">
                                                                    <!-- ... (your existing edit popup content) ... -->
                                                                    <form action="{{ route('nilai.update', ['userId' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT') <!-- Add this line for Laravel to recognize the update method -->
                                                            
                                                                        <h4>Edit Nilai</h4>
                                                                        <div class="d-flex">
                                                                            <div>
                                                                                <label for="aspek_penilaian">Aspek Penilaian</label>
                                                                                <input type="text" name="aspek_penilaian" id="aspek_penilaian" min="0" max="10" value="{{ $user->nilaiPraktik->isNotEmpty() ? $user->nilaiPraktik[0]->aspek_penilaian : '' }}" placeholder="Masukkan Nilai">
                                                                            </div>
                                                                            <div>
                                                                                <label for="nilai">Nilai</label>
                                                                                <input type="text" name="nilai" id="nilai" min="0" max="10" value="{{ $user->nilaiPraktik->isNotEmpty() ? $user->nilaiPraktik[0]->nilai : '' }}" placeholder="Masukkan Nilai">
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary btn-evaluation">Simpan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
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
                                            Design & Develop by Alfan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')