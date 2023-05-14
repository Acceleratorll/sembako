<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- <title>Items</title> -->

    <!-- TEMPLATE -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="image/logo1.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">


    
    <!-- bootdtrap css cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> -->


    <!-- Latest compiled and minified CSS ??????-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
    <!-- popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript ??????/ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- bootstrap dropdown js ?????? -->
    <!-- <script src="https://gist.github.com/dstaley/8c9d53f88d1ad53c57b4.js"></script> -->

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

        <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- datatables -->
        <script
        src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script
        src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

        <!-- datatable datagroups -->
        <link href="https://cdn.datatables.net/rowgroup/1.0.2/css/rowGroup.dataTables.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.datatables.net/rowgroup/1.0.2/js/dataTables.rowGroup.min.js"></script>
    <style>
        
        body{
            background-color: rgb(238, 203, 86);
            /* color: white; */
        }
        .iq-card{
            /* background-color:white; */
            margin-top:8%;
        }
        h1,p{
            margin: 0;
            padding: 0;
        }
        input[type=button]:hover{
            text-decoration:underline;
            
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="container justify-content-center align-items-center text-center" >
            <div class="iq-card">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-sm-3">
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col">
                                    <h1>BPR Dinar Pusaka</h1>
                                    <!-- <p>Penerbit dan Percetakan</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col text-left">
                                    <h4>Register</h4>
                                    <hr>
                                </div>
                            </div>
                            <form action="/register" method="post">
                                @csrf
                                <div class="row form-group">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" id="" class="form-control" placeholder="Masukkan Nama Belakang">
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm">
                                        <div class="input-group">
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="text" id="" class="form-control" placeholder="Masukkan Nomor Telepon">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input class="form-control" id="date" name="date" placeholder="Masukkan Tanggal Lahir" type="text" readonly="readonly" style="background-color:white"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <select class="form-control" style="height:45px">
                                                <option>Masukkan Jenis Kelamin</option>
                                                <option>Pria</option>
                                                <option>Wanita</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col">
                                        <div class="input-group">
                                            <input type="password" id="" class="form-control" placeholder="Masukkan Password">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col-sm">
                                        <div class="input-group">
                                            <input type="password" id="" class="form-control" placeholder="Masukkan Kembali Password Baru">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm" style="text-align:left; color:black;">
                                        Digunakan Untuk Pemulihan Kata Sandi
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm">
                                        <div class="input-group">
                                            <select class="form-control" style="height:45px">
                                                <option>Apa Warna Kesukaanmu?</option>
                                                <option>Siapakah Nama Orang Tuamu?</option>
                                                <option>Anda Merupakan Anak Dari Berapa Bersaudara?</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm">
                                        <div class="input-group">
                                            <input type="text" id="" class="form-control" placeholder="Masukkan Jawabanmu Disini">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col-sm text-center">
                                        <button type="button" class="btn" style="background-color:green; color:white; width:50%; font-size:20px" onclick="location.href='login.php'">Daftar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
