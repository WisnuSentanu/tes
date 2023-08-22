<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aplikasi Penggajian</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="img/favicon.ico" rel="icon">

    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
            background-color: #F8F8FF;
        }

        .login-box {
            justify-content: space-between;
            margin: 10px;
            border-bottom: 2px solid black;
            width: 500px;
            padding: 60px;
            border: none;
        }

        .login-inside {
            width: 100%;
            padding: 5px 0;
            background: none;
            border: none;
            outline: none;
            font-size: 18px;
            color: black;
            border-bottom: 2px solid #d9d9d9;
            margin-left: 10px; /* Add left margin */
        }

        .btn-login {
            display: block;
            width: 97%;
            height: 40px;
            background-color: #00BFD8;
            color: white;
            font-size: 1.2rem;
            border-radius: 25px;
            align-items: center;
            border: none;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
        }

        .i {
            color: #000;
            display: flex;
            padding-right: 10px;
            padding-left: 10px;
            align-items: center;
        }

        .i input::placeholder {
            color: #999;
            font-size: 18px;
        }

        form div {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message') }}
        </div>
        @endif
        <div class="login-box">
            <form action="" method="post">
                <center><img src="{{ url(Storage::url('assets/man.png')) }}" alt="" width="100px"></center>
                <h3 class="login-title" ><center><b>Aplikasi Penggajian</b></center></h3>
                <br><br>
                @csrf
                <div class="i">
                    <i class="fa fa-user fa-2x"></i>
                    <label for="username" class="form-label"></label>
                    <input type="text" name="username" id="username" class="login-inside" placeholder="Username" required>
                </div>
                <div class="i">
                    <i class="fa fa-lock fa-2x"></i>
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" class="login-inside" placeholder="Password" required>
                </div>
                <div>
                    <button type="submit" class="btn-login">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
