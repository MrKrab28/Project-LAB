<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <link href="{{ asset('assets/plugins/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

<body>
    <section class="vh-100 mb-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('create') }}">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center fw-bold mx-3 mb-0">Sign Up</h3>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="username" class="form-control form-control-lg"
                                placeholder="Masukkan NIM" name="nim" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="text" id="NIM" class="form-control form-control-lg"
                                placeholder="Masukkan Nama" name="nama" />

                        </div>
                        <div class="form-outline mb-3">
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Masukkan Email" name="email" />

                        </div>
                        <div class="form-outline mb-3">
                            <input type="text" id="no_hp" class="form-control form-control-lg"
                                placeholder="No. Handphone" name="no_hp" />

                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Password" name="password" />

                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>

                        </div>
                    

                    </form>
                </div>
            </div>
        </div>

    </section>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('assets/plugins/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
</body>

</html>
