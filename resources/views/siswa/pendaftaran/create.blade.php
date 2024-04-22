@include('siswa.statusPrakerin.header');

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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Daftar Prakerin</h1>
                                        </div>
                                        <form action="/pendaftaran" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div>
                                                <div class="mb-3 row">
                                                    <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" placeholder="Masukkan Nama" name="nama" autofocus required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="username" class="col-md-2 col-form-label">Username</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="nama_sekolah" class="col-md-2 col-form-label">Nama Sekolah</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('nama_sekolah') is-invalid @enderror" type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-md-2 col-form-label">E-Mail</label>
                                                    <div class="col-md-10">
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" required parsley-type="email" placeholder="Masukkan Email" name="email" required/>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                        <label for="password" class="col-md-2 col-form-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="nama_pembimbing" class="col-md-2 col-form-label">Nama Pembimbing</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('nama_pembimbing') is-invalid @enderror" type="text" placeholder="Masukkan Nama Pembimbing" name="nama_pembimbing">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="kelas" class="col-md-2 col-form-label">Kelas</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('kelas') is-invalid @enderror" type="number" placeholder="Masukkan Kelas" name="kelas">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="jurusan" class="col-md-2 col-form-label">Jurusan</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('jurusan') is-invalid @enderror" type="text" placeholder="Masukkan Jurusan" name="jurusan">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="nomor_telepon" class="col-md-2 col-form-label">No.Telp</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('nomor_telepon') is-invalid @enderror" type="number" placeholder="+627-0542-999" name="nomor_telepon">
                                                    </div>
                                                </div>                                                    
                                                <hr style="border: 1px solid rgba(0, 0, 0, 0.066);">
                                            <div>
                                                <div class="form-group mb-3 row">
                                                    <label for="tanggal_lahir" class="col-md-2 col-form-label">Kelahiran</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date" name="tanggal_lahir">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="jenis_kelamin">
                                                            <option selected hidden disabled>Pilih Jenis Kelamin</option>
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control @error('alamat') is-invalid @enderror" type="textarea" placeholder="Masukkan Alamat" name="alamat"></textarea>
                                                    </div>
                                                </div>
                                            </div>                            
                                            <div class="form-group mb-3 row">
                                                <label for="department_id" class="col-md-2 col-form-label"> Posisi</label>
                                                <div class="col-md-10">
                                                        <select class="form-select" name="department_id">
                                                            @foreach ($departments as $department)
                                                                @if(old('department_id') == $department->id)
                                                                    <option value="{{ $department->id }}" selected>{{ $department->posisi }}</option>
                                                                @else
                                                                    <option value="{{ $department->id }}">{{ $department->posisi }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label for="tanggal_bergabung" class="col-md-2 col-form-label">Tanggal Bergabung</label>
                                                <div class="col-md-10">
                                                    <input class="form-control @error('tanggal_bergabung') is-invalid @enderror" type="date" name="tanggal_bergabung">
                                                </div>
                                            </div>
                                            {{-- <div class="form-group mb-3 row">
                                                <label for="user_id" class="col-md-2 col-form-label"> User_id</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="user_id">
                                                        @foreach ($user_details as $user_detail)
                                                            @if(old('user_id') == $user_detail->id)
                                                                <option value="{{ $user_detail->id }}" selected>{{ $user_detail->username }}</option>
                                                            @else
                                                                <option value="{{ $user_detail->id }}">{{ $user_detail->username }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                                <div class="form-group mb-3 row">
                                                    <label for="image" class="col-md-2 col-form-label">Gambar</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" autofocus>
                                                    </div>                                              
                                                </div>
                                            </div>
                                                <div class="form-group mb-3 row">
                                                    <label for="cv" class="col-md-2 col-form-label">CV</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control @error('cv') is-invalid @enderror" type="file" id="cv" name="cv" autofocus>
                                                    </div>                                              
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-md mb-4" id="simpan">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')
