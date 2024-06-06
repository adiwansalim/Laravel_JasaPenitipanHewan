<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Admin Penitipan | Transaction Input</title>
    <link rel="icon" href="{{ asset('assets/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class=" "></i>
            <span class="logo_name">Penitipan Hewan</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="pengguna">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Pengguna</span>
                </a>
            </li>
            <li>
                <a href="hewan">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Hewan</span>
                </a>
            </li>
            <li>
                <a href="transaksi">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Transaction</span>
                </a>
            </li>
            <li>
            <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" class="d-none">
            @csrf</form>
                <a href="{{ route('actionlogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin Penitipan</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Data Hewan</h3><br>
            <a target="_blank"
        href="tambahhewan" class="btn btn-primary">Add Data</a>
         <a target="_blank"
        href="eksporhewan" class="btn btn-primary"><i class="bi bi-printer">Cetak Data</i></a>
            <div class="form-login">
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>


                        <th>Nama hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hewan as $b)

                    <tr>
                        <td>{{$b->nama}}</td>
                        <td>{{$b->jenis}}</td>
                        <td>
                            <a type="button" class="btn btn-warning" href="/ubahhewan/{{$b->id_hewan}}">Edit</a>
                            <a type="button" class="btn btn-danger" href="/deletehewan/{{$b->id_hewan}}">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </section>
</body>
</html>
