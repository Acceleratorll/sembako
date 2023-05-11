@extends('layouts.main')
@section('header')
    <h1 class="m-0">
        Oerder Details                 
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
                                            <th scope="col" class="text-center">Order ID</th>
                                            <th scope="col" class="text-center">Store ID</th>
                                            <th scope="col" class="text-center">Shipping ID</th>
                                            <th scope="col" class="text-center">Customer ID</th>
                                            <th scope="col" class="text-center">Payment ID</th>
                                            <th scope="col" class="text-center">PPN</th>
                                            <th scope="col" class="text-center">Discount</th>
                                            <th scope="col" class="text-center">Total</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>10%</td>
                                            <td>20%</td>
                                            <td>Rp. 12.000,00</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-warning btn-sm" href="#">Details</a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>10%</td>
                                            <td>20%</td>
                                            <td>Rp. 12.000,00</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-warning btn-sm" href="#">Details</a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>10%</td>
                                            <td>None</td>
                                            <td>Rp. 10.000,00</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-warning btn-sm" href="#">Details</a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>#11232</td>
                                            <td>10%</td>
                                            <td>60%</td>
                                            <td>Rp. 30.000,00</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-warning btn-sm" href="#">Details</a>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">IMPORT DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('/cabang/import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>PILIH FILE</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                                <button type="submit" class="btn btn-success">IMPORT</button>
                            </div>
                        </form>
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
@endsection