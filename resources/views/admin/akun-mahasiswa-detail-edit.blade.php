@extends('layout')

@section('content')
    <div class="section-header">
        <h1 class="mr-auto ms-3">Edit Mahasiswa</h1>
    </div>
    {{-- <div class="row">
            <div class="col-6"></div>
        </div> --}}
        <div class="section">
        <div class="section-body">
    <div class="row">
        <div class="col-lg-7 d-none d-lg-flex align-self-center">
            <img src="{{ asset('assets/img/edit-akun.svg') }}" alt="" style="margin-top: -20px" class="w-75 mx-auto">
        </div>
        <div class="col-lg-5">
            <div class="card me-3">
                <div class="card-body">
                    <form action="{{ route('update-mahasiswa', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="text-center mb-4">
                            <img src="{{ asset('f/avatar/' . $user->foto) }}"
                                style="height: 150px;width:150px;border-radius:50%" alt="" class="pict-oval">
                        </div>
                        <div class="form-group">
                            <label class="mb-0" for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" name="nim"
                                value="{{ $user->nim }}" autocomplete="off" disabled>
                        </div>
                        <div class="form-group">
                            <label class="mb-0" for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $user->nama }}" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label class="mb-0" for="no_hp">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                value="{{ $user->no_hp }}" autocomplete="off" required>
                        </div>
                        {{-- <div class="form-group">
                                    <label class="mb-0" for="prodi">Program Studi</label>
                                    <select class="custom-select mr-sm-2" id="prodi" name="prodi" required>
                                        <option selected hidden value="">Pilih</option>
                                        @foreach ($daftarFakultas as $fakultas)
                                            @if ($fakultas->prodi->count())
                                            <optgroup label="Fakultas {{ $fakultas->nama }}">
                                                @foreach ($fakultas->prodi as $prodi)
                                                    <option value="{{ $prodi->id }}" {{ $mahasiswa->id_prodi == $prodi->id ? 'selected' : '' }}>{{ $prodi->nama }}</option>
                                                @endforeach
                                            </optgroup>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> --}}
                        {{-- <div class="form-group">
                                    <label class="mb-0" for="level">Role</label>
                                    <select class="custom-select mr-sm-2" id="level" name="level" required>
                                        <option selected hidden value="">Pilih</option>
                                        <option value="asisten" {{ $mahasiswa->level == "asisten" ? 'selected' : '' }}>Asisten Lab</option>
                                        <option value="mahasiswa" {{ $mahasiswa->level == "mahasiswa" ? 'selected' : '' }}>Mahasiswa</option>
                                    </select>
                                </div> --}}
                        <div class="form-group">
                            <label class="mb-0" for="no_hp">Ganti Foto Profil</label>
                            <input type="file" class="form-control" id="foto" name="foto" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="mb-0" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small id="passHelp" class="form-text text-muted">Kosongkan jika tidak ingin mengganti
                                password</small>
                        </div>
                </div>
                <div class="card-footer text-right pb-4 mt-0">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('style')
    <style>
        .pict-oval {
            object-fit: cover;
        }
    </style>
@endpush
