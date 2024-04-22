<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Register Koor - PKL </title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('e_apac') }}/assets/images/favicon.ico">

        <!-- Icons Css -->
        <link href="{{ asset('e_apac') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        <link href="{{ asset('e_apac') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('e_apac') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" >
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('../images/2.jpg'); background-size: 100% 100% ; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
            
            <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            

            <div class="w-full pt-2 sm:justify-center items-center sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden">

                <div class="mb-5 pb-5 text-center">
                    <h5 class="text-primary" style="color: blue; position: relative;">Hello.</h5>
                    <p class="d-inline-block fs-6 text-muted">Please Register.</p>
                </div>
                <hr style="background-color: black; height: 3px;">

                @if (session()->has('success'))
                        <div class="alert alert-success col-lg-8" role="alertP">
                            {{ session('success') }}
                        </div>
                    @endif
                
                @if (Session::has('error'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('error') }}
                </div>
                @endif

                <form method="POST" class="mt-4 w-full max-w-md mx-auto" action="{{ route('koor.register.create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_koor">Nama</label>
                        <input type="text" name="nama_koor" class="block mt-1 w-full border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm @error('nama_koor') is-invalid @enderror"
                            id="nama_koor" autofocus required>
                        @error('nama_koor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="block mt-1 w-full border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm @error('username') is-invalid @enderror"
                            id="username" autofocus required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="block mt-1 w-full border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm @error('email') is-invalid @enderror" id="email" autofocus required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="block mt-1 w-full border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            id="password" required>
                    </div>
                    <button class="mt-3 inline-flex justify-center items-center w-full px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" type="submit">Register</button>                               
                </form>            
            </div>
            
        </div>
    </body>
</html>
