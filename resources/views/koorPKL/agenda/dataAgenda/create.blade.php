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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Add New Data Agenda</h1>
                                        </div>
                                        <form action="/dataAgenda" method="POST" class="agenda" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mt-1">
                                                <label for="user_id" class="form-label"> Name</label>
                                                <select class="form-select" name="user_id">
                                                    @foreach ($users as $user)
                                                        @if(old('user_id') == $user->id)
                                                            <option value="{{ $user->id }}" selected>{{ $user->nama }}</option>
                                                        @else
                                                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="kelas" class="form-label"> Kelas</label>
                                                <select class="form-select" name="kelas">
                                                    @foreach ($users as $user)
                                                        @if(old('kelas') == $user->id)
                                                            <option value="{{ $user->id }}" selected>{{ $user->kelas }}</option>
                                                        @else
                                                            <option value="{{ $user->id }}">{{ $user->kelas }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="jurusan" class="form-label"> Jurusan</label>
                                                <select class="form-select" name="jurusan">
                                                    @foreach ($users as $user)
                                                        @if(old('jurusan') == $user->id)
                                                            <option value="{{ $user->id }}" selected>{{ $user->jurusan }}</option>
                                                        @else
                                                            <option value="{{ $user->id }}">{{ $user->jurusan }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="kategori_id" class="form-label"> Kategori</label>
                                                <select class="form-select" name="kategori_id">
                                                    @foreach ($kategori_agendas as $kategori)
                                                        @if(old('kategori_id') == $kategori->id)
                                                            <option value="{{ $kategori->id }}" selected>{{ $kategori->kategori }}</option>
                                                        @else
                                                            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <label for="tanggal" class="form-label">Hari/Tanggal</label>
                                                <input value="{{ old('tanggal') }}" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" autofocus required>
                                                @error('tanggal')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Create Data Agenda</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('admin.dashboard.footer')

