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
                    Change Password
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
                    <th>Logo</th>
                    <th>Bank Name</th>
                    <th>Balance</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Available</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Wells Fargo</td>
                    <td>$4,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
                    <td>
                      108 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/TZ0FcGpKzP8dt4sIpuiCy2sXyboR7T5d9qXmkiqJ.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Wells Fargo</td>
                    <td>$7,800.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$750.00</td>
                    <td>
                      86 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Wells Fargo</td>
                    <td>$18,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,200.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/unj7WBvcsVGB78390HVueQqnazVc5Jk1kUlXKlIg.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Wells Fargo</td>
                    <td>$32,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$2,500.00</td>
                    <td>
                      35 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Chime Bank</td>
                    <td>$3,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Chime Bank</td>
                    <td>$11,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$900.00</td>
                    <td>
                      80 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/Eiyko2tWtvwGRCtE8U2fTy4r5zTRNet3L3KIztmf.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Chime Bank</td>
                    <td>$19,600.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,300.00</td>
                    <td>
                      62 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>BOA</td>
                    <td>$4,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
                    <td>
                      90 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/unj7WBvcsVGB78390HVueQqnazVc5Jk1kUlXKlIg.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>BOA</td>
                    <td>$7,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$750.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>BOA</td>
                    <td>$16,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,000.00</td>
                    <td>
                      18 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Go2bank</td>
                    <td>$4,100.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
                    <td>
                      71 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Go2bank</td>
                    <td>$13,900.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$980.00</td>
                    <td>
                      59 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/Eiyko2tWtvwGRCtE8U2fTy4r5zTRNet3L3KIztmf.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Go2bank</td>
                    <td>$20,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,500.00</td>
                    <td>
                      85 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>CITI BANK</td>
                    <td>$4,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$450.00</td>
                    <td>
                      57 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/TZ0FcGpKzP8dt4sIpuiCy2sXyboR7T5d9qXmkiqJ.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>CITI BANK</td>
                    <td>$7,900.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$750.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>CITI BANK</td>
                    <td>$17,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,100.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/unj7WBvcsVGB78390HVueQqnazVc5Jk1kUlXKlIg.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Walmart MoneyCard</td>
                    <td>$5,100.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$550.00</td>
                    <td>
                      103 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Walmart MoneyCard</td>
                    <td>$12,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,000.00</td>
                    <td>
                      69 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Walmart MoneyCard</td>
                    <td>$25,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,300.00</td>
                    <td>
                      56 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/TZ0FcGpKzP8dt4sIpuiCy2sXyboR7T5d9qXmkiqJ.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Suncoast CU</td>
                    <td>$8,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$750.00</td>
                    <td>
                      68 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Suncoast CU</td>
                    <td>$22,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,300.00</td>
                    <td>
                      63 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Suncoast CU</td>
                    <td>$53,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$4,200.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Suncoast CU</td>
                    <td>$180,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$11,000.00</td>
                    <td>
                      35 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>HSBC</td>
                    <td>$4,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>HSBC</td>
                    <td>$18,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,200.00</td>
                    <td>
                      53 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/Eiyko2tWtvwGRCtE8U2fTy4r5zTRNet3L3KIztmf.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>HSBC</td>
                    <td>$150,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$9,500.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$5,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$500.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/TZ0FcGpKzP8dt4sIpuiCy2sXyboR7T5d9qXmkiqJ.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$7,800.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$750.00</td>
                    <td>
                      42 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/WMF5MiHMH5Za4c5Q2WNYoykfX8UDNgS0JNqk8XlY.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$17,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,200.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/unj7WBvcsVGB78390HVueQqnazVc5Jk1kUlXKlIg.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$32,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$2,500.00</td>
                    <td>
                      21 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/G6yJMBcSfFBKe87WTpcwBjjQEKbD8VxrLysoqsBn.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$55,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: UK
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$4,200.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/Eiyko2tWtvwGRCtE8U2fTy4r5zTRNet3L3KIztmf.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Barclays</td>
                    <td>$130,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: US
                      Pounds/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$8,700.00</td>
                    <td>
                      16 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Bank of Montreal</td>
                    <td>$3,700.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$400.00</td>
                    <td>
                      70 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Bank of Montreal</td>
                    <td>$6,900.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$700.00</td>
                    <td>
                      29 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Bank of Montreal</td>
                    <td>$19,400.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,100.00</td>
                    <td>
                      68 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Bank of Montreal</td>
                    <td>$28,000.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$2,000.00</td>
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
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Royal Bank of Canada</td>
                    <td>$4,100.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$470.00</td>
                    <td>
                      50 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="https://www.leakedblocks.co/storage/logo/yWBVPvenNf8WJGDeIVKhGBdOvNkWA0jVvJMbLMQu.jpg"
                        class="img-fluid"
                        style="height: 40px; width: 60px"
                      />
                    </td>
                    <td>Royal Bank of Canada</td>
                    <td>$15,500.00</td>
                    <td>
                      2-factor authenticator is Disabled./ Account currency: CA
                      dollars/ Bank Login: Yes/ Email access provided: Yes
                    </td>
                    <td>$1,320.00</td>
                    <td>
                      36 pcs

                      <br />

                      <a
                        href="#"
                        class="btn btn-info btn-sm text-white"
                        >Buy</a
                      >
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
