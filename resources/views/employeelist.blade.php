@extends('layouts.main')
@section('header')
    <h1 class="m-0">
        Form Input Employee                 
    </h1>
@endsection
@section('container')
<form action="{{ url('/customerlist') }}" method="post">
    @csrf
    <div class="container">
        <div id="rcorners1">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" placeholder="Masukkan Nama" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="Alamat">Address</label>
                <input type="text" placeholder="Masukkan Alamat" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="kota">City</label>
                <input type="text" placeholder="Masukkan kota" class="form-control" id="kota" name="kota" required>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="Nomor Telepon">Phone</label>
                        <input type="text" placeholder="Masukkan Nomor Telepon" class="form-control" id="notelp" name="nomortelepon" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="image">Image</label>
                            <div class="btn-group w-100">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                </span>
                            </div>
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalconfirm">Simpan</button>
                <button type="reset" class="btn btn-warning" data-toggle="modal" data-target="#modalconfirm"> Batal </button>
            </div>
        <!-- <div class="text-right">
            <button type="submit" class="btn btn-success">Tambah Karyawan</button>
        </div> -->
        </div>
    </div>
</form>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
    });
    }
    $(document).ready(
        function(){
            $('#sidebarcollapse').on('click',function(){
                $('#sidebar').toggleClass('active');
            });
        }
    )
</script>
@endsection