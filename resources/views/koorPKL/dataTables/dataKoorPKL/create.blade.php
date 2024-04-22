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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Add New Koordinator</h1>
                                        </div>
                                        <form action="/dataKoor" method="POST" class="user" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mt-3">
                                                <label for="nama_koor" class="form-label">Nama Koordinator</label>
                                                <input value="{{ old('nama_koor') }}" type="text" class="mt-1 w-full form-control @error('nama_koor') is-invalid @enderror" name="nama_koor" id="nama_koor" required autofocus>
                                                @error('nama_koor')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input value="{{ old('username') }}" type="text" class="mt-1 w-full form-control @error('username') is-invalid @enderror" name="username" id="username" required>
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                <label for="email" class="form-label">Email</label>
                                                <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autofocus required>
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mt-1">
                                                    <label for="password" class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="mt-1">
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
                                            <div class="mt-1">
                                                <label for="image" class="form-label">Image</label>
                                                <input value="{{ old('image') }}" type="file" class="w-full form-control @error('image') is-invalid @enderror" name="image" id="image" required>
                                                @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Add Koordinator</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('siswa.statusPrakerin.footer')
