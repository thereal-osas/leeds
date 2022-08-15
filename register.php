
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="xYfDubKFnIRZ4KL3uYZ2VwOboN2TXQ4wSr2xgaDc">
        <title>Sign Up - Leaked Blocks</title>

        <!-- Scripts -->
        <script src="js/app.js" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="js/ckeditor.js"></script>
        <style>
            .mainbody{
                background-color: #00888A !important;
            }

            .nav-link {
                font-size: 16px;
                font-weight: bolder;
                color: #00888A !important;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="leedslogo.png" class="brand-image" style="width: 150px; height: 50px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                                                                                        <li class="nav-item px-1">
                                    <a class="nav-link" href="home.php">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="about.php">
                                        About
                                    </a>
                                
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="bitcoins.php">
                                        Bitcoin Logins
                                    </a>
                                </li>
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="banks.php">
                                        Bank Logins
                                    </a>
                                </li>
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="cashapps.php">
                                        Cashapp Logins
                                    </a>
                                </li>
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="tutorials.php">
                                        Tutorials
                                    </a>
                                </li>
                                <li class="nav-item px-1">
                                    <a class="nav-link" href="transactions.php">
                                        Transactions
                                    </a>
                                </li>
                                
                                                    </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                                                            <li class="nav-item px-1">
                                    <a class="nav-link" href="index.php">
                                        <b><i class="fa fa-sign-in"></i> Login</b>
                                    </a>
                                </li>
                                                                    <li class="nav-item px-1">
                                        <a class="nav-link btn btn-info btn-sm text-white" href="register.php">Register</a>
                                    </li>
                                                                                    </ul>
                    </div>
                </div>
            </nav>

            <div class="container py-4">
                
                                
                    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="text-center p-3">
                    <h2><b>Create An Account</b></h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="form.php">
                        <input type="hidden" name="_token" value="xYfDubKFnIRZ4KL3uYZ2VwOboN2TXQ4wSr2xgaDc">                        <div class="form-group">
                            <label for="username" class="form-label text-md-right"><b>Username</b></label>
                            <input id="username" type="text" class="form-control " name="username" value="" required autocomplete="username" autofocus>

                                                    </div>

                        

                        <div class="form-group">
                            <label for="name" class="form-label text-md-right"><b>Name</b></label>
                            <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>

                                                    </div>



                        <div class="form-group">
                            <label for="email" class="form-label text-md-right"><b>E-Mail Address</b></label>

                            <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                                                    </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right"><b>Password</b></label>

                            <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                                    </div>

                        <div class="form-group">
                        <label for="password-confirm" class="col-form-label text-md-right"><b>Confirm Password</b></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="btn-save" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="index.php" class="btn btn-secondary">
                                        Login
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>

            <div class="text-white fixed-bottom bg-dark p-2">
                <div class="container">
                    <div class="text-center">
                        <p>© 2022 Leaked Blocks. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>

        <script>
            //Datatables
            $(document).ready( function () {
                $('#example1').DataTable(
                {
                    "ordering": false
                });

                $('#example2').DataTable(
                {
                    "ordering": true
                });
            });
        </script>
    </body>
</html>
