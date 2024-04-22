@include('koorPKL.dashboard.header')
@include('koorPKL.dashboard.sidebar')


            {{-- <div class="main-content-evaluation">
                <div class="row-evaluation justify-content-center align-items-center">
                    <div class="col-md-10 col-sm-12">
                        <div class="card o-hidden border-dark shadow-lg custom-form">
                            <div class="card-evaluation">
                                <div class="row">
                                    <div class="col-md-12">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="card o-hidden border-dark shadow-lg">
                        <div class="card-body p-0 mt-5">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="p-5">
                                        <div class="text-center mb-2">
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Koordinator</h1>
                                        </div>
                                        <form action="{{ route('send.message', ['recipientId' => $users->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf <!-- Include CSRF token for security -->
                                                <div class="form-group">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" name="judul" class="form-control form-title mb-3 @error('judul') is-invalid @enderror" placeholder="Enter title...">
                                                    @error('judul')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control form-deskripsi @error('deskripsi') is-invalid @enderror" rows="6" placeholder="Enter description..."></textarea>
                                                    @error('deskripsi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="sertifikat">Sertifikat (PDF only)</label>
                                                    <input type="file" name="sertifikat" class="form-control-file @error('sertifikat') is-invalid @enderror" id="sertifikat" accept=".pdf">
                                                    @error('sertifikat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            <button type="submit" class="btn btn-primary btn-evaluation mt-3">Simpan</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')
