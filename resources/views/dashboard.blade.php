@extends('layouts.main')

@section('header')
        <div class="col-12 col-sm-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <p>Payments</p>
                    <h3>Rp. 12.000.000,00</h3>
                    <p>Total Payments for Today</p>
                </div>
                <div class="icon">
                    <i class="fas fa-usd"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
            <!-- ./col -->
            <div class="col-12 col-sm-6">
                <!-- small card -->
                <div class="small-box bg-success">
                <div class="inner">
                    <p>Profit</p>
                    <h3>Rp. 6.500.000,00</h3>
                    <p>Total Profit for Today</p>
                </div>
                <div class="icon">
                    <i class="fas fa-line-chart "></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <div class="clearfix hidden-md-up"></div>
            <!-- ./col -->
            <div class="col-12 col-sm-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <p>Order</p>
                    <h3>1264</h3>
                    <p>Total Order for Today</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-12 col-sm-6">
                <!-- small card -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <p>Retur</p>
                    <h3>12</h3>
                    <p>Total Retur for Today</p>
                </div>
                <div class="icon">
                    <i class="fas fa-retweet"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                    <h3 class="card-title">Total Revenue</h3>
                    <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Rp. 125.000.000,00</span>
                        <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 5.1%
                        </span>
                        <span class="text-muted">then last month</span>
                    </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="sales-chart" height="200" style="display: block; width: 602px; height: 200px;" width="602" class="chartjs-render-monitor"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> Profit
                    </span>

                    <span>
                        <i class="fas fa-square text-gray"></i> Loss
                    </span>
                    </div>
                </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Latest Order</h3>
                        <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                        </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Karim Benzema</td>
                            <td>
                            <small class="text-warning mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Waiting
                            </td>
                            <td>Rp. 1.500.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Modric</td>
                            <td>
                            <small class="text-warning mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Waiting
                            </td>
                            <td>Rp. 500.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Toni Kross</td>
                            <td>
                            <small class="text-success mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Delivered
                            </td>
                            <td>Rp. 800.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Asensio</td>
                            <td>
                            <small class="text-success mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Delivered
                            </td>
                            <td>Rp. 1.270.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Alaba</td>
                            <td>
                            <small class="text-success mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Delivered
                            </td>
                            <td>Rp. 1.030.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#11232</td>
                            <td>12-31-2022</td>
                            <td>Vini Jr.</td>
                            <td>
                            <small class="text-success mr-1">
                                <i class="fas fa-arrow-up"></i>
                            </small>
                            Delivered
                            </td>
                            <td>Rp. 460.000,00</td>
                            <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-search"></i>
                            </a>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

@endsection

@section('container')
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