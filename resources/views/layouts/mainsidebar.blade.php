<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{$title}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- custom CSS -->
        <link rel="stylesheet" href="/style.css">
        <!-- custom CSS -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script
        src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet"
            href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <!-- SideBar -->
        <div class="sidebar">
            <div class="logo-header">
                <span class="logo">
                    <i><img src="/image/logo1.png" width="60" height="60" class="d-inline-block align-top" alt=""></i>
                </span>
                <div class="logo-text">
                    <p class="namapt">PT Bank Perkreditan Rakyat</p>
                    <p class="namaperusahaan">DINAR PUSAKA</p>
                </div>
            </div>
            <a href="{{ url('dashboard') }}">Dashboard</a>
            <a href="{{ url('cabanglist') }}">Cabang</a>
            <a href="{{ url('periodelist') }}">Periode</a>
            <!-- <button class="dropdown-btn">Karyawan
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="{{ url('karyawanlist') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Karyawan</a>
            </div> -->
            <a href="{{ url('karyawanlist') }}">Karyawan</a>
            <a href="{{ url('presensi') }}">Presensi</a>
            <button class="dropdown-btn">Gaji
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="{{ url('gaji') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Gaji</a>
                <a href="{{ url('penggajian') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Penggajian</a>
                <a href="{{ url('potonggaji') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Potong Gaji</a>
                <a href="{{ url('bonus') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Bonus</a>
            </div>
            <a href="{{ url('bonus') }}">Bonus</a>
            
            <!--Pengajuan-->
            <button class="dropdown-btn">Pengajuan
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="{{ url('pengajuancutilist') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Pengajuan Cuti</a>
                <a href="{{ url('pengajuanizinketerlambatanlist') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Pengajuan Izin Keterlambatan</a>
                <a href="{{ url('pengajuanlemburlist') }}"><i class="fa fa-fw fa-circle" style="padding-right:10px"></i>Pengajuan Lembur</a>
            </div>
            <a href="{{ url('tunjanganinsentif') }}">Tunjangan Insentif</a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-center text-white">Logout</button>
            </form>
             <!-- SideBar -->
        </div>
        
        <div class="main">
            @yield('container')
        </div>
        <br></br>
    </body>
</html>
