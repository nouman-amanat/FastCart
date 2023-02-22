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

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form action="form"method="POST">
            @csrf
            <div class="mb-3 ">

                <label for="" class="form-label">Name</label>
                <input type="Name" name="username" id="" class="form-control w-50" placeholder="Name"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted"><span class="text-danger">@error('username'){{$message}}@enderror</span></small>
                <label for="" class="form-label">Email</label>
                <br>
                <input type="Email" name="email" id="" class="form-control w-50" placeholder="Email"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted"><span class="text-danger">@error('email'){{$message}} @enderror</span></small>
                <label for="" class="form-label">Password</label>
                <br>
                <input type="Password" name="password" id="" class="form-control w-50" placeholder="Password"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted"><span class="text-danger">@error('password'){{$message}}

                @enderror</span></small>
                <label for="" class="form-label">Confirm Password</label>
                <br>
                <input type="Password" name="cnf_password" id="" class="form-control w-50"
                    placeholder="Confirm password" aria-describedby="helpId">
                <small id="helpId" class="text-muted"><span class="text-danger">@error('cnf_password'){{$message}}@enderror</span></small>

                <button class="btn btn-outline-danger">Submit</button>
            </div>
        </form>
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
