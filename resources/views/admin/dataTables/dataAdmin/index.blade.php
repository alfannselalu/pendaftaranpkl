@include('admin.dashboard.header')


@include('admin.dashboard.sidebar')


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
                                    <h4 class="mb-sm-0 font-size-18">Data Admin</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admins</a></li>
                                            <li class="breadcrumb-item active">Admin</li>
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
                                        
                                        <h4 class="card-title mb-0 pb-4">Admin</h4>
                                        <!-- App Search-->
                                        <a href="/dataAdmin/create" class="btn btn-primary shadow-sm">Add New Admin</a>
                                        <div class="app-search float-end d-none d-lg-block mt-2 mb-2">
                                            <form action="/dataAdmin">
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
                                                <th>Nama Admin</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>

                                            <tbody class="text-center">
                                                @foreach ($admins as $admin )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $admin->nama_admin }}</td>
                                                <td>{{ $admin->username }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td> @if ($admin->image) 
                                                    <img src="{{ asset('storage/' . $admin->image) }}" alt="{{ $admin->nama_admin }}" class="img-fluid" style="width: 5rem; height:4rem;"> 
                                                    @else Tidak ada gambar 
                                                @endif 
                                            </td>                                                 <td>
                                                    <a href="/dataAdmin/{{ $admin->id }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                                    <form action="/dataAdmin/{{ $admin->id }}" method="POST" class="d-inline">
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
                                            Design & Develop by SMKN 9 Bekasi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')
