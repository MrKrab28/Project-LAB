@extends('layout')

@section('content')

        <div class="section-header">
            <div class="position-relative mt-5">
                <a href="{{ route('edit-mahasiswa', $user->id) }}" class="btn btn-info position-absolute top-0 end-0">
                    <i class="fas fa-edit"> Edit</i>
                </a>
            </div>
            <h1 class="mr-auto">{{ $user->nama }}</h1>

        </div>
        <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mr-auto">Data Mahasiswa</h5>
                        </div>
                        <div class="card-body">

                            <div class="text-center mb-4">
                                <img src="{{ asset('f/avatar/' . $user->foto) }}"
                                style="height: 150px;width:150px;border-radius:50%" alt="" class="pict-oval">


                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-0" for="nim">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control-plaintext" name="nim" id="nim"
                                    value="{{ $user->nim }}" disabled>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-0" for="nama">Nama</label>
                                <input type="text" class="form-control-plaintext" name="nama" id="nama"
                                    value="{{ $user->nama }}" disabled>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-0" for="no_hp">No. Handphone</label>
                                <input type="text" class="form-control-plaintext" name="no_hp" id="no_hp"
                                    value="{{ $user->no_hp }}" disabled>
                            </div>
                            {{-- <div class="form-group mb-2">
                                <label class="mb-0" for="fakultas">Fakultas</label>
                                <input type="text" class="form-control-plaintext" id="fakultas"
                                    value="{{ $mahasiswa->prodi->fakultas->nama }}" disabled>
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-0" for="prodi">Program Studi</label>
                                <input type="text" class="form-control-plaintext" id="prodi"
                                    value="{{ $mahasiswa->prodi->nama }}" disabled>
                            </div> --}}

                        </div>
                        {{-- @if (!$mahasiswa->active)
                            <div class="card-footer text-right d-lg-none">
                                <button class="btn btn-outline-danger">Tolak</button>
                                <button class="btn btn-success">Verifikasi</button>
                            </div>
                        @endif --}}
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-flex align-self-center">
                    <img src="{{ asset('assets/img/profil.svg') }}" alt="" class="w-75 mx-auto">
                </div>
            </div>
        </div>
    </div>

    {{-- <form action="{{ route('admin.mhs-action', 'verifikasi') }}" method="POST" id="formVerifikasi">
        @csrf
        <input type="hidden" name="id" value="{{ $mahasiswa->id }}">
    </form>
    <form action="{{ route('admin.mhs-action', 'tolak') }}" method="POST" id="formTolak">
        @csrf
        <input type="hidden" name="id" value="{{ $mahasiswa->id }}">
    </form> --}}
@endsection
@push('style')
<style>
    .pict-oval{
        object-fit: cover;
    }
    </style>
@endpush
@push('scripts')
    <script>
        function action(jenis) {
            switch (jenis) {
                case "verifikasi":
                    $('#formVerifikasi').submit();
                    break;

                case "tolak":
                    $('#formTolak').submit();
                    break;

                default:
                    break;
            }
        }
    </script>
@endpush
