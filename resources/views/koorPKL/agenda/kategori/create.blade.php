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
                                            <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Add New Kategori</h1>
                                        </div>
                                        <form action="/kategoriAgenda" method="POST" class="kategori" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mt-1">
                                                <label for="kategori" class="form-label">Kategori Agenda</label>
                                                <input value="{{ old('kategori') }}" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori" autofocus required>
                                                @error('kategori')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Create Kategori</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main content-->


@include('admin.dashboard.footer')

