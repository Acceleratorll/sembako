@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Form Input Carousel                  
    </h1>
@endsection

@section('container')
    <div class="container">
        <div id="rcorners1">
            <form action="{{ url('/componentlist') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="Show Title">Slide Show Title</label>
                <input type="text" placeholder="Masukkan Nama Cabang" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="Caption 1">Caption 1</label>
                        <input type="text" placeholder="Masukkan Caption 1" class="form-control" name="Caption1" id="Caption1" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Caption 2">Caption 2</label>
                        <input type="text" placeholder="Masukkan Caption 2" class="form-control" name="Caption2" id="Caption2" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="Caption 3">Caption 3</label>
                        <input type="text" placeholder="Masukkan Caption 3" class="form-control" name="Caption3" id="Caption3" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Thumnail Picture">Thumnail Picture</label>
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
            <!-- <div class="form-group">
                <label for="Longitude">Longitude:</label>
                <input type="text" class="form-control" name="longitude" id="longitude" >
            </div>
            <div class="form-group">
                <label for="Langitude">Langitude:</label>
                <input type="text" class="form-control" name="langitude" id="langitude">
            </div>
            <div class="form-group">
                <label for="uangkelola">Uang Kelola:</label>
                <select require class="form-control">
                    <option value="" disabled selected hidden>Pilih uang kelola</option>
                    <option>Rp 1.000.000.000</option>
                    <option>Rp 2.000.000.000</option>
                    <option>Rp 3.000.000.000</option>
                    <option>Rp 4.000.000.000</option>
                    <option>Rp 5.000.000.000</option>
                    <option>Rp 6.000.000.000</option>
                    <option>Rp 7.000.000.000</option>
                    <option>Rp 8.000.000.000</option>
                    <option>Rp 9.000.000.000</option>
                    <option>Rp 10.000.000.000</option>
                </select>
            </div> -->
            <div class="text-right">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalconfirm">Simpan</button>
                <button type="reset" class="btn btn-warning" data-toggle="modal" data-target="#modalconfirm"> Batal </button>
            </div>
            
            </form>
        </div>
    </div>
    
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