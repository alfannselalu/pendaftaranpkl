@include('siswa.statusPrakerin.header')

@include('siswa.statusPrakerin.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="row justify-content-center" style="position: relative; bottom:2rem; right: 5rem;">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="card o-hidden border-dark shadow-lg">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="p-5">
                                            <div class="text-center mb-2">
                                                <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Absensi</h1>
                                            </div>
                                            <form action="/absensi/{{ $absensi->id }}" method="POST" class="user" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="mt-1">
                                                    <label for="tanggal" class="form-label">Hari/Tanggal</label>
                                                    <input value="{{ old('tanggal', $absensi->tanggal) }}" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" autofocus required>
                                                    @error('tanggal')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label for="jam_masuk" class="form-label">Jam Masuk</label>
                                                    <input value="{{ old('jam_masuk', $absensi->jam_masuk) }}" type="time" class="form-control @error('jam_masuk') is-invalid @enderror" name="jam_masuk" id="jam_masuk" autofocus required>
                                                    @error('jam_masuk')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label for="jam_pulang" class="form-label">Jam Pulang</label>
                                                    <input value="{{ old('jam_pulang', $absensi->jam_pulang) }}" type="time" class="form-control @error('jam_pulang') is-invalid @enderror" name="jam_pulang" id="jam_pulang" autofocus required>
                                                    @error('jam_pulang')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mt-3">
                                                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                                    <input value="{{ old('nama_siswa', $absensi->nama_siswa) }}" type="text" class="mt-1 w-full form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" id="nama_siswa" required>
                                                    @error('nama_siswa')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <input value="{{ old('keterangan', $absensi->keterangan) }}" type="text" class="w-full form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" required>
                                                    @error('keterangan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Absensi</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')
