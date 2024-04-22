@include('koorPKL.dashboard.header')

@include('koorPKL.dashboard.sidebar')

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
                                                <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Kategori</h1>
                                            </div>
                                            <form action="/kategoriAgenda/{{ $kategori->id }}" method="POST" class="kategori" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mt-1">
                                                    <label for="kategori" class="form-label">Kategori</label>
                                                    <input value="{{ old('kategori', $kategori->kategori) }}" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori" autofocus required>
                                                    @error('kategori')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Kategori</button>
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


@include('admin.dashboard.footer')