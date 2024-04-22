@include('koorPKL.dashboard.header')

@include('koorPKL.dashboard.sidebar')

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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Nilai Praktik</h1>
                                        </div>
                                        <form action="{{ route('nilai-praktik.update', $nilaiPraktik->id) }}" method="POST" class="agenda" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                
                                            <div class="mt-1">
                                                <label for="user_id" class="form-label"> Nama</label>
                                                <select class="form-select" name="user_id">
                                                    @foreach ($users as $user)
                                                        @if(old('user_id', $nilaiPraktik->user_id) == $user->id)
                                                            <option value="{{ $user->id }}" selected>{{ $user->nama }}</option>
                                                        @else
                                                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                
                                            <div class="mt-1">
                                                <label for="nama_sekolah" class="form-label"> Nama Sekolah</label>
                                                <select class="form-select" name="nama_sekolah">
                                                    @foreach ($users as $user)
                                                        @if(old('nama_sekolah', $nilaiPraktik->nama_sekolah) == $user->nama_sekolah)
                                                            <option value="{{ $user->nama_sekolah }}" selected>{{ $user->nama_sekolah }}</option>
                                                        @else
                                                            <option value="{{ $user->nama_sekolah }}">{{ $user->nama_sekolah }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="nilai" class="form-label">Nilai Siswa</label>
                                                <input value="{{ old('nilai', $nilaiPraktik->nilai) }}" type="number" class="form-control @error('nilai') is-invalid @enderror" name="nilai" id="nilai" autofocus required>
                                                @error('nilai')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="aspek_penilaian" class="form-label">Aspek Penilaian</label>
                                                <input value="{{ old('aspek_penilaian', $nilaiPraktik->aspek_penilaian) }}" type="text" class="form-control @error('aspek_penilaian') is-invalid @enderror" name="aspek_penilaian" id="aspek_penilaian" autofocus required>
                                                @error('aspek_penilaian')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                
                                            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Nilai Praktik</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('admin.dashboard.footer')

