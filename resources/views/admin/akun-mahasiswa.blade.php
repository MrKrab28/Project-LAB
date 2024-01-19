@extends('layout')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Akun Mahasiswa</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama Lengkap</th>
                                        <th>No. HP</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $users as $user )


                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nim }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->no_hp }}</td>
                                        <td>{{ $user->level }}</td>
                                        <td>{{ $user->level }}</td>

                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm" onclick="document.location.href = '{{ route('detail-mahasiswa', $user->id) }}'">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>

                                            <form action="{{ route('delete-mahasiswa', $user) }}" class="d-inline"
                                            method="POST" >
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                                </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
