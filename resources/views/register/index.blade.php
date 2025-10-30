<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />



</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">


                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Form</h1>
                                    </div>
                                    <form class="user" action="register" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                id="name" placeholder="Nama Lengkap" required
                                                value="{{ old('name') }}">
                                            <label for="floatingInput">Nama Lengkap</label>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                id="email" placeholder="Nama Lengkap" required
                                                value="{{ old('email') }}">
                                            <label for="floatingInput">Email</label>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" id="username" placeholder="Username" required
                                                value="{{ old('username') }}">
                                            <label for="floatingInput">Username</label>
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">

                                            <select class="form-select" aria-label="Default select example"
                                                name="rt" id="rt" value="{{ old('rt') }}">
                                                <option selected>Pilih RT</option>
                                                <option value="1">RT 1</option>
                                                <option value="2">RT 2</option>
                                                <option value="3">RT 3</option>
                                                <option value="4">RT 4</option>
                                                <option value="5">RT 5</option>
                                                <option value="6">RT 6</option>
                                                <option value="7">RT 7</option>
                                                <option value="8">RT 8</option>
                                                <option value="9">RT 9</option>
                                                <option value="10">RT 10</option>
                                                <option value="11">RT 11</option>
                                                <option value="12">RT 12</option>
                                                <option value="13">RT 13</option>
                                                <option value="14">RT 14</option>
                                                <option value="15">RT 15</option>
                                                <option value="16">RT 16</option>
                                                <option value="17">RT 17</option>
                                                <option value="18">RT 18</option>
                                                <option value="19">RT 19</option>
                                                <option value="20">RT 20</option>
                                                <option value="21">RT 21</option>
                                                <option value="22">RT 22</option>
                                                <option value="23">RT 23</option>
                                                <option value="24">RT 24</option>
                                                <option value="25">RT 25</option>
                                                <option value="26">RT 26</option>
                                                <option value="27">RT 27</option>
                                                <option value="28">RT 28</option>
                                                <option value="29">RT 29</option>
                                                <option value="30">RT 30</option>
                                                <option value="31">RT 31</option>
                                                <option value="32">RT 32</option>
                                                <option value="33">RT 33</option>
                                                <option value="34">RT 34</option>
                                                <option value="35">RT 35</option>
                                                <option value="36">RT 36</option>
                                                <option value="37">RT 37</option>

                                            </select>
                                            @error('rt')
                                                <div class="invalid-feedback">
                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" placeholder="Password" required>
                                            <label for="floatingInput">Password</label>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>




                                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                                            Register
                                        </button>

                                    </form>

                                    <hr>
                                    <hr>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->

    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>


    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
</body>

</html>
