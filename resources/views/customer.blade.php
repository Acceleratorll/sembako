@extends('layouts.main')

@section('header')
    <h1 class="m-0">
        Customer                 
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
                                <div class="button-action" style="margin-bottom: 20px">
                                    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('/componentlist') }}'">
                                        <span>+ Add Items</span>
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Customer ID</th>
                                            <th scope="col" class="text-center">Name</th>
                                            <th scope="col" class="text-center">Address</th>
                                            <th scope="col" class="text-center">Phone</th>
                                            <th scope="col" class="text-center">City</th>
                                            <th scope="col" class="text-center">Membership</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>Karim Benzema</td>
                                            <td>Jl. DJuanda</td>
                                            <td>088298679835</td>
                                            <td>Bogor</td>
                                            <td>Gold</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>Asensio</td>
                                            <td>Jl. DJuanda</td>
                                            <td>088298346735</td>
                                            <td>Sukabumi</td>
                                            <td>Bronze</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>Toni Cross</td>
                                            <td>Jl. DJuanda</td>
                                            <td>088234529835</td>
                                            <td>Bandung</td>
                                            <td>Platinum</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>Luka Modric</td>
                                            <td>Jl. DJuanda</td>
                                            <td>088298673474</td>
                                            <td>Cianjur</td>
                                            <td>Silver</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        <tr>
                                            <td>#11232</td> 
                                            <td>Alaba</td>
                                            <td>Jl. DJuanda</td>
                                            <td>088267549835</td>
                                            <td>Cikarang</td>
                                            <td>Gold</td>
                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
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