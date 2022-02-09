@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        {{--  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>  --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="/daftar" class="mitra">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    {{--  MULAI SINI  --}}
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="nama_lengkap" placeholder="{{ __('Nama Lengkap') }}" value="{{ old('name') }}" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="jenis_kelamin" placeholder="{{ __('Jenis Kelamin') }}" value="{{ old('name') }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="nik" placeholder="{{ __('NIK') }}" value="{{ old('name') }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="tempat_lahir" placeholder="{{ __('Tempat Lahir') }}" value="{{ old('name') }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="tanggal_lahir" placeholder="{{ __('Tanggal Lahir') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="umur" placeholder="{{ __('Umur') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="status_perkawinan" placeholder="{{ __('Status Perkawinan') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="domisili" placeholder="{{ __('Domisili') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="kelurahan" placeholder="{{ __('Kelurahan') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="pendidikan" placeholder="{{ __('Pendidikan') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="nowa" placeholder="{{ __('Nomor WA') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="email" placeholder="{{ __('Email') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="pekerjaan" placeholder="{{ __('Pekerjaan') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="pengalaman" placeholder="{{ __('Pengalaman') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="motor" placeholder="{{ __('Apakah Bisa Mengendarai Sepeda Motor') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="hp" placeholder="{{ __('Apakah Punya HP') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="zoom" placeholder="{{ __('Apakah Bisa Menggunakan Zoom') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="spek_hp" placeholder="{{ __('Spek HP') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="pas_foto" placeholder="{{ __('Pas Foto') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="ktp" placeholder="{{ __('KTP') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-mitra" name="umur" placeholder="{{ __('Umur') }}" value="{{ old('name') }}">
                                    </div>

                                    {{--  SAMPAI SINI  --}}

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-mitra btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>


                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">
                                        {{ __('Already have an account? Login!') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
