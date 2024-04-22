<body data-sidebar="dark" data-layout-mode="light" style="background-color: #eaeaea;">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                            <a href="../admin/index.html" class="text-light">
                                <span class="d-none d-xl-inline-block ms-1" key="t-siswa">
                                    <h3 class="mt-3">
                                        @if (Route::has('login'))
                                            @auth
                                                {{ Auth::user()->username }}
                                            @endauth
                                        @endif
                                    </h3>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        {{-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form> --}}
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">!</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    {{-- @if (count($data) === 0)
                                        <p>No messages found.</p>
                                    @else
                                        @foreach ($data as $pesan)
                                            <a href="{{ route('show.message', ['id' => $pesan['recipient_id'], 'message_id' => $pesan['id']]) }}" class="text-reset notification-item">
                                                <div class="avatar-xs me-3"></div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1" key="t-your-order">{{ $pesan['judul'] }}</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1" key="t-grammar">{{ $pesan['deskripsi'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    @endif --}}
                                </div>
                                
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (Route::has('login'))
                                    @auth
                                        @if (auth()->check())
                                            <img class="rounded-circle header-profile-user"
                                            src="{{ asset('storage/' . auth()->user()->image) }}"
                                            alt="Header Avatar">
                                        @else
                                            <img class="rounded-circle header-profile-user"
                                                src="{{ asset('e_apac') }}/assets/images/users/avatar-1.jpg"
                                                alt="Header Avatar">
                                        @endif
                                    @endauth
                                @endif
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">
                                    @if (Route::has('login'))
                                        @auth
                                            {{ Auth::user()->username }}
                                        @endauth
                                    @endif
                                </span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                {{-- <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a> --}}
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger"> <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>Logout</button>
                                </form>                            
                            </div>
                        </div>
                        
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="/statusPkl" class="#">
                                    <i class="bx bx-select-multiple"></i>
                                    <span key="t-dashboards">Status Prakerin</span>
                                </a>
                            </li>
                            <li>
                                <a href="/nilaiPrakerin" class="#">
                                    <i class="mdi mdi-book-education-outline"></i>
                                    <span key="t-layouts">Nilai Prakerin</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-poll-h"></i>
                                    <span key="t-tables">Agenda</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="/agendaSiswa" key="t-data-tables">Data Agenda</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="/chatting" class="#">
                                    <i class="bx bx-chat"></i>
                                    <span key="t-layouts">Chatting</span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="/absensi" class="#">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-layouts">Absensi</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            
