<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta
      name="csrf-token"
      content="PwKGPG83FsCjvJMf0enHffapfGphT4mDkb0GG6hd"
    />
    <title>about - Leaked Blocks</title>

    <!-- Scripts -->
    <script src="js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://www.leakedblocks.co/ckeditor/ckeditor.js"></script>
    <style>
      .mainbody {
        background-color: #00888a !important;
      }

      .nav-link {
        font-size: 16px;
        font-weight: bolder;
        color: #00888a !important;
      }
    </style>
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img
              src="leedslogo.png"
              class="brand-image"
              style="width: 150px; height: 50px"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
              </li>

              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="bitcoins.php"
                >
                  Bitcoin Logins
                </a>
              </li>
              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="banks.php"
                >
                  Bank Logins
                </a>
              </li>
              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="cashapps.php"
                >
                  Cashapp Logins
                </a>
              </li>
              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="tutorials.php"
                >
                  Tutorials
                </a>
              </li>
              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="transactions.php"
                >
                  Transactions
                </a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              <li class="nav-item dropdown">
                <a
                  id="navbarDropdown"
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  v-pre
                >
                  Richard <span class="caret"></span>
                </a>

                <div
                  class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="navbarDropdown"
                >
                  <a
                    class="dropdown-item"
                    href="https://www.leakedblocks.co/password"
                  >
                    Change Paaword
                  </a>

                  <a
                    class="dropdown-item"
                    href="https://www.leakedblocks.co/logout"
                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                  >
                    Logout
                  </a>

                  <form
                    id="logout-form"
                    action="https://www.leakedblocks.co/logout"
                    method="POST"
                    style="display: none"
                  >
                    <input
                      type="hidden"
                      name="_token"
                      value="PwKGPG83FsCjvJMf0enHffapfGphT4mDkb0GG6hd"
                    />
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container py-4">
        <div class="card">
          <h2 class="text-center p-2">Who we are</h2>
          <div class="card-body">
            <p></p>
            <div class="p-3">
              <h6>You can reach us here</h6>
              <p>
                <b>Email:</b> info@leakedblocks.co <br />
                <b>Phone Number:</b> 𝗧𝗘𝗟𝗘𝗚𝗥𝗔𝗠: @leakedblocks
              </p>
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

    <script
      src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
      defer
    ></script>

    <script>
      //Datatables
      $(document).ready(function () {
        $('#example1').DataTable({
          ordering: false,
        })

        $('#example2').DataTable({
          ordering: true,
        })
      })
    </script>

  </body>
</html>
