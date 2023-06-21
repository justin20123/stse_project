<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container d-flex" style="height: 100vh;">
            {{-- style="background-color: #292098; --}}
            <div class="d-flex justify-content-center align-items-center flex-column" style="width: 100%;">
                <div class="card text-black bg-transparent">
                    <div class="card-body">
                        <div style="width:400px">
                            <div class="row justify-content-center">
                                <div class="col"></div>
                                <h2 class="col">PT.EduWijaya</h2>
                                <div class="col"></div>
                            </div>

                            <br>
                            <h4>Login Account</h4>
                            <form action="/login" method="post">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="" id=""
                                        aria-describedby="helpId" placeholder="Type your username here">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="text" class="form-control" name="" id=""
                                        aria-describedby="helpId" placeholder="Type your password here">
                                    <small id="helpId" class="form-text text-muted">{{ session('message') }}</small>
                                </div>
                                <div class="row justify-content-around align-items-center g-2">
                                    <div class="col-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="remember">
                                            <label class="form-check-label">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="">Forget Password</a>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
