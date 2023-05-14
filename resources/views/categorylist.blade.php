@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Form Input Category                  
    </h1>
@endsection

@section('container')
    <div class="container">
        <div id="rcorners1">
            <form action="{{ url('/categorylist') }}" method="post">
                @csrf
            <div class="form-group">
                <label for="ID Category">ID Category</label>
                <input type="text" placeholder="Masukkan ID Category" class="form-control" name="IDCategory" id="IDCategory" required>
            </div>
            <div class="form-group">
                <label for="Nama Category">Nama Category</label>
                <input type="text" placeholder="Masukkan Nama Category" class="form-control" name="NamaCategory" id="NamaCategory" required>
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" placeholder="Masukkan Description" class="form-control" name="Description" id="Description" required>
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