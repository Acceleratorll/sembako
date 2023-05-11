@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Reture                 
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
                                            <th scope="col" class="text-center">Retur ID</th>
                                            <th scope="col" class="text-center">Order ID</th>
                                            <th scope="col" class="text-center">Product ID</th>
                                            <th scope="col" class="text-center">Customer ID</th>
                                            <th scope="col" class="text-center">Returned Date</th>
                                            <th scope="col" class="text-center">Qty</th>
                                            <th scope="col" class="text-center">Note</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>12-31-2022</td>
                                            <td>3</td>
                                            <td>Barang Rusak</td>
                                            <td class="project-state text-center">
                                                <span class="badge badge-warning">Waiting</span>
                                            </td>
                                            <td class="text-right py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                                                </div>
                                            </td>
                                        <tr>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>12-31-2022</td>
                                            <td>2</td>
                                            <td>Barang Kotor</td>
                                            <td class="project-state text-center">
                                                <span class="badge badge-success">Accepted</span>
                                            </td>
                                            <td class="text-right py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                                                </div>
                                            </td>
                                        <tr>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>12-31-2022</td>
                                            <td>3</td>
                                            <td>Barang Lecet</td>
                                            <td class="project-state text-center">
                                                <span class="badge badge-danger">Canceled</span>
                                            </td>
                                            <td class="text-right py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                                                </div>
                                            </td>
                                        <tr>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>12-31-2022</td>
                                            <td>3</td>
                                            <td>Tukar Ukuran</td>
                                            <td class="project-state text-center">
                                                <span class="badge badge-success">Accepted</span>
                                            </td>
                                            <td class="text-right py-0 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-info"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                                                </div>
                                            </td>
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