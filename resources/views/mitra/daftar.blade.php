@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
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
                                    
                                    <div class="form-group" name="nama_lengkap">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" placeholder="Nama Lengkap" id="nama_lengkap" autofocus>
                                        @error('nama_lengkap')   
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group" name="jenis_kelamin_label">
                                        <label for="jenis_kelamin_label">Jenis Kelamin</label><br>
                                        <input type="radio" id="pria" name="pria" value="pria">
                                        <label for="pria">Pria</label><br>
                                        <input type="radio" id="wanita" name="wanita" value="wanita">
                                        <label for="wanita">Wanita</label><br>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="nik">NIK</label><br>
                                        <input type="number" class="form-control" name="nik" placeholder="NIK">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                    </div>

                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" class="form-control" name="umur" placeholder="Umur">
                                    </div>

                                    <div class="form-group" name="status_pernikahan_label">
                                        <label for="status_pernikahan_label">Status Pernikahan</label><br>

                                        <input type="radio" id="menikah" name="menikah" value="menikah">
                                        <label for="menikah">Menikah</label><br>
                                        <input type="radio" id="tidak_menikah" name="tidak_menikah" value="tidak_menikah">
                                        <label for="tidak_menikah">Tidak Menikah</label><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="domisili">Domisili</label>
                                        <input type="text" class="form-control" name="domisili" placeholder="Domisili">
                                    </div>

                                    <div class="form-group">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan">
                                    </div>

                                    <div class="form-group">
                                        <label for="nowa">Nomor WA</label>
                                        <input type="number" class="form-control" name="nowa" placeholder="Nomor WA">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pengalaman">Pengalaman</label>
                                        <input type="text" class="form-control" name="pengalaman" placeholder="Pengalaman">
                                    </div>

                                    <div class="form-group">
                                        <label for="spek_hp">Spek HP</label>
                                        <input type="text" class="form-control" name="spek_hp" placeholder="Spek HP">
                                    </div>

                                    <div class="form-group" name="bisa_motor_label">
                                        <label for="bisa_motor_label">Apakah Bisa Mengendarai Sepeda Motor</label><br>

                                        <input type="radio" id="bisa_motor" name="bisa_motor" value="bisa_motor">
                                        <label for="bisa_motor">Bisa</label><br>
                                        <input type="radio" id="tidak_motor" name="tidak_motor" value="tidak_motor">
                                        <label for="tidak_motor">Tidak</label><br>
                                    </div>

                                    <div class="form-group" name="bisa_hp_label">
                                        <label for="bisa_hp_label">Apakah Bisa Menggunakan Handphone</label><br>

                                        <input type="radio" id="bisa_hp" name="bisa_hp" value="bisa_hp">
                                        <label for="bisa_hp">Bisa</label><br>
                                        <input type="radio" id="tidak_hp" name="tidak_hp" value="tidak_hp">
                                        <label for="tidak_hp">Tidak</label><br>
                                    </div>

                                    <div class="form-group" name="bisa_zoom_label">
                                        <label for="bisa_zoom_label">Apakah Bisa Menggunakan Zoom</label><br>

                                        <input type="radio" id="bisa_zoom" name="bisa_zoom" value="bisa_zoom">
                                        <label for="bisa_zoom">Bisa</label><br>
                                        <input type="radio" id="tidak_zoom" name="tidak_zoom" value="tidak_zoom">
                                        <label for="tidak_zoom">Tidak</label><br>
                                    </div>

                                    <div class="form-group">
                                        <label for="pas_foto">Pas Foto</label>
                                        <input type="file" class="form-control" name="pas_foto" placeholder="Pas Foto">
                                    </div>

                                    <div class="form-group">
                                        <label for="ktp">KTP</label>
                                        <input type="file" class="form-control" name="ktp" placeholder="KTP">
                                    </div>

                                    {{--  SAMPAI SINI  --}}

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-mitra btn-block">
                                            Daftar
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
