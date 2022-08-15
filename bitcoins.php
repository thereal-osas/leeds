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
    <title>All Accounts - Leaked Blocks</title>

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
    <script src="js/ckeditor.js"></script>
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
                    href="#"
                  >
                    Change Password
                  </a>

                  <a
                    class="dropdown-item"
                    href="#"
                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                  >
                    Logout
                  </a>

                  <form
                    id="logout-form"
                    action="#"
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
          <div class="card-header">
            <div class="card-title">
              <h4>All Accounts</h4>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Crypto Type</th>
                    <th>Account Balance</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Available</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/TEdCJzdCpxoViHVKLubmfciFPaz9gMccz4yZI5B2.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$250.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$118.00</td>

                    <td>
                      114 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession2">Buy</a>

                                    <div class="modal fade mt-2" id="editSession2" tabindex="-1" role="dialog" aria-labelledby="editSession2Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/TEdCJzdCpxoViHVKLubmfciFPaz9gMccz4yZI5B2.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$400.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$206.00</td>

                    <td>
                      102 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession3">Buy</a>

                                    <div class="modal fade mt-2" id="editSession3" tabindex="-1" role="dialog" aria-labelledby="editSession3Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/khV0BxcJKWZM6FKo664Hyl4F7sJtwTTySXerfkw9.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$950.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$400.00</td>

                    <td>
                      58 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession4">Buy</a>

                                    <div class="modal fade mt-2" id="editSession4" tabindex="-1" role="dialog" aria-labelledby="editSession4Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/9upGN0NiXpUAaXzSD7iXANe9Jy8jSOtoDj3t3yhb.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$2,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$720.00</td>

                    <td>
                      31 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession5">Buy</a>

                                    <div class="modal fade mt-2" id="editSession5" tabindex="-1" role="dialog" aria-labelledby="editSession5Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yewCEW0ywQ9zHt0EEAAAKGWMwMOinch1nZaas6Cz.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$5,400.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$1,800.00</td>

                    <td>
                      0 pcs
                      <br />
                      <span class="btn btn-danger btn-sm text-white"
                        >Sold out</span
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/N1dvVo5ANund5qHANPvwy9A4vJ1V1d6Np1fq9Tgx.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$12,400.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$4,500.00</td>

                    <td>
                      56 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession7">Buy</a>

                                    <div class="modal fade mt-2" id="editSession7" tabindex="-1" role="dialog" aria-labelledby="editSession7Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/sQzyXqEqYdEeYW7dI91hd2TPWnbxHBOvpFeBVCZc.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$28,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$8,700.00</td>

                    <td>
                      0 pcs
                      <br />
                      <span class="btn btn-danger btn-sm text-white"
                        >Sold out</span
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/0pxpXzNEnGEydGzzRFy39D2vkva7yjJ1qRDO1I6r.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$60,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$20,900.00</td>

                    <td>
                      9 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession9">Buy</a>

                                    <div class="modal fade mt-2" id="editSession9" tabindex="-1" role="dialog" aria-labelledby="editSession9Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/OzBMxQPOiiazbI9JgRuf7tPFmWSvppV9Z8b2eNM5.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      /><br />
                      Bitcoin
                    </td>
                    <td>$130,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Email access provided? Yes
                    </td>
                    <td>$37,900.00</td>

                    <td>
                      4 pcs
                      <br />
                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                      <!--<a href="#" class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#editSession10">Buy</a>

                                    <div class="modal fade mt-2" id="editSession10" tabindex="-1" role="dialog" aria-labelledby="editSession10Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">-->

                      <!--</div>
                                        </div>
                                    </div>-->
                    </td>
                  </tr>
                </tbody>
              </table>
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
