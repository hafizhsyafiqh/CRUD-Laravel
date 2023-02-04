<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
               Admin Sistem Informasi Monitoring dan Evaluasi Dokumen Perencanaan Daerah
            </div>

            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" href="berandaadmin">Beranda</a>
                          </li>
                          @if (Auth::user()->role=="1")
                          <li class="nav-item">
                            <a class="nav-link" href="urusanadmin">Data Urusan</a>
                          </li>
                          @endif
                          <li class="nav-item">
                            <a class="nav-link" href="bidangurusanadmin">Bidang Urusan</a>
                          </li>
                          <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                          </li>
                        </ul>

                      </div>
                    </div>
                  </nav>
            </div>

            <div class="content">
                @yield('content')
            </div>
            <div class="footer">
                Copyright Dedi Iskandar
            </div>
        </div>
        <div>

        </div>
        <div>

        </div>
    </body>
</html>
