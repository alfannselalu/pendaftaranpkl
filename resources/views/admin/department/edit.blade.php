@include('admin.dashboard.header')

@include('admin.dashboard.sidebar')

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
                                                <h1 class="h4 mb-5 pt-4 text-xl font-semibold">Update Posisi</h1>
                                            </div>
                                            <form action="/department/{{ $department->id }}" method="POST" class="department" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mt-1">
                                                    <label for="posisi" class="form-label">Posisi</label>
                                                    <input value="{{ old('posisi', $department->posisi) }}" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" id="posisi" autofocus required>
                                                    @error('posisi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="status" class="pt-2">Status</label>
                                                    <div class="input-group mb-3">
                                                        <select name="status" class="mt-3" style="display: inline-block; height:3rem; width: 5rem !important;">
                                                            @if ($department->status == '0')
                                                                <option selected value="0">Pending</option>
                                                                <option value="Kosong">Kosong</option>
                                                                <option value="Tersedia">Tersedia</option>
                                                            @elseif($department->status == 'Kosong')
                                                                <option value="0">Pending</option>
                                                                <option selected value="Kosong">Kosong</option>
                                                                <option value="Tersedia">Tersedia</option>
                                                            @else
                                                                <option value="0">Pending</option>
                                                                <option value="Kosong">Kosong</option>
                                                                <option selected value="Tersedia">Tersedia</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Update Posisi</button>
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