@include('siswa.statusPrakerin.header')

@include('siswa.statusPrakerin.sidebar')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Chatting </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Chatting</a></li>
                                            <li class="breadcrumb-item active">Chattings</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-kontak overflow-hidden">
                                    <div class="mt-4">
                                        <h5 style="margin-left: 20px">Cari Kontak</h5>
                                    </div>
                                    <hr>
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-kontak" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <label style="margin-left: 20px" for="comments">Kontak:</label>
                                    <div class="scrollable-list">
                                        <!-- Daftar yang dapat di-scroll -->
                                        <ul>
                                            <a href="#" onclick="addToCart('Product 1')">Ardiansyah Reza(SMK 7 Negri 1)</a>
                                            <a href="#" onclick="addToCart('Product 2')">Product 2</a>
                                            <a href="#" onclick="addToCart('Product 3')">Product 3</a>
                                            <a href="#" onclick="addToCart('Product 1')">Product 1</a>
                                            <a href="#" onclick="addToCart('Product 2')">Product 2</a>
                                            <a href="#" onclick="addToCart('Product 3')">Product 3</a>
                                            <a href="#" onclick="addToCart('Product 1')">Product 1</a>
                                            <a href="#" onclick="addToCart('Product 2')">Product 2</a>
                                            <a href="#" onclick="addToCart('Product 3')">Product 3</a>
                                        </ul>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <!-- Isi dengan konten sesuai kebutuhan -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mt-3">
                                                    <h5 style="margin-left: 20px;">Kirim Pesan Untuk,</h5>
                                                </div>
                                                <hr>
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Tulis Pesan Anda</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 225px"></textarea>
                                                    </div>
                                                    <label for="fileInput" style="display: block; margin-bottom: 5px; margin-top: 10px">Pilih File:</label>
                                                    <input type="file" id="fileInput" name="fileInput" style="margin-bottom: 5px; border: 1px #D3D3D3 solid; border-radius: 3px;">
                                                    <br>
                                                    <input type="submit" value="Kirim" style="background-color: #007BFF; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer; margin-left: 87%;">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    PT.Era Solution
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end d-none d-sm-block">
                                        Design & Develop by Alfan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
            <!-- end main content-->

        </div>

@include('siswa.statusPrakerin.footer')