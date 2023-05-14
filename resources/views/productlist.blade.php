@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Form Input Products                  
    </h1>
@endsection

@section('container')
    <div class="container">
        <div id="rcorners1">
            <form action="{{ url('/productlist') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="Nama Product">Nama Product</label>
                <input type="text" placeholder="Masukkan Nama Product" class="form-control" name="NamaProduct" id="NamaProduct" required>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="ID Category">ID Category</label>
                        <input type="text" placeholder="Masukkan ID Category" class="form-control" name="IDCategory" id="IDCategory" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="text" placeholder="Masukkan Quantity" class="form-control" name="Quantity" id="Quantity" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" placeholder="Masukkan Price" class="form-control" name="Price" id="Price" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Image">Image</label>
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