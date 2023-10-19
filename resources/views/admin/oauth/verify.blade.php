<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oauth 1.0 checking By Narihy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card{
            padding: 20px;
        }
        .myBtn{
            width: 100%;
            margin-top: 20px;
            height: 40px;
            color: rgb(255, 255, 255);
            background-color: rgb(234, 23, 23);
            border: 2px #0707b9;
        }
        .card-bottom {
            top: 0;
            margin-top: 6px;
            border-top: 2px solid black;
            padding-top: 5px;
        }
        .logout {
            float: right;
            border: transparent;
            background-color: transparent;
            color: rgb(29, 29, 247);
            transition: color 2s;
        }
        .logout:hover {
            color: rgb(0, 0, 255);
        }
    </style>
</head>
<body>

    <div class="container" style="margin-top: 30vh">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <h2 class="text-center">Security guard</h2>
                    <p style="text-align: justify">L'application renforce la sécurité de votre compte en exigeant un code de confirmation à l'entrée. Vous recevrez ce code par e-mail uniquement. Une fois que vous l'avez validé avec succès, vous pouvez accéder à votre compte en toute confiance. Le code de confirmation que nous vous avons envoyez n'est valable que pour cette séssion.</p>
                    <form action="" method="post">
                        @csrf
                        <input type="text" name="code" id="code" class="form-control" placeholder="XXXX-XX-XXX-XXXX">
                        @if (session('error'))
                            <p style="color: red">
                                {{session('error')}}
                            </p>
                        @endif
                        <input type="submit" value="Valider" class="myBtn">
                    </form>
                    <div class="card-bottom">
                        <div class="row mb-3">
                            <div class="col-6">
                                Oauth 1.0 checking by NARIHY
                            </div>
                            <div class="col-6">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <input type="submit" value="Se deconnecter" class="logout">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
