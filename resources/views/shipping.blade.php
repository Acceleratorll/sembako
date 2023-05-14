@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Shipping                 
    </h1>
@endsection

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @elseif($message =  Session::get('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        <div class="row" style="height: 10px"></div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Shipping ID</th>
                                            <th scope="col" class="text-center">Date</th>
                                            <th scope="col" class="text-center">Method</th>
                                            <th scope="col" class="text-center">Cost</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>12-31-2022</td>
                                            <td>COD</td>
                                            <td>Rp. 12.000,00</td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>12-31-2022</td>
                                            <td>Gojek</td>
                                            <td>Rp. 12.000,00</td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>12-31-2022</td>
                                            <td>Pengiriman Prioritas</td>
                                            <td>Rp. 12.000,00</td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>12-31-2022</td>
                                            <td>Pengiriman Hemat</td>
                                            <td>Rp. 12.000,00</td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>12-31-2022</td>
                                            <td>COD</td>
                                            <td>Rp. 12.000,00</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
    $(document).ready( function () {
        $('#table').DataTable();
    } );
    $(document).ready(
        function(){
            $('#sidebarcollapse').on('click',function(){
                $('#sidebar').toggleClass('active');
            });
        }
    )   
</script>
</body>
</html>
@endsection