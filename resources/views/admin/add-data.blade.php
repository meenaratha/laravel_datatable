<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.partials._sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.partials._navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                          <form id="fetchStockForm" action="/fetch-stock" method="POST">
                            @csrf
                            <label for="exchange_name">Select Exchange</label>
                            <select id="exchange_name" class="js-example-basic-single form-control" style="width: 50%;" name="exchange_name">
                                <option value="" selected disabled>Select Exchange</option>
                                @foreach($tables as $table)
                                    <option value="{{ $table }}">{{ $table }}</option>
                                @endforeach
                            </select>
                            <button type="button" id="fetchButton" class="btn btn-success"><i class="mdi mdi-arrow-down-drop-circle-outline"></i>Get</button>
                        </form>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Stock List</h4>
                                <input type="text" class="form-control w-25" id="searchInput" placeholder="Search by Tickers">
                                <div class="table-responsive">
                                  <table class="table table-dark text-center" id="stock-table">
                                      <!-- Table headers -->
                                      <thead>
                                          <tr>
                                              <th style="color: white;">No</th>
                                              <th style="color: white;">Tickers</th>
                                              <th style="color: white;">MachinePrediction</th>
                                              <th style="color: white;">RealTimePrice</th>
                                              <th style="color: white;">Select</th>
                                          </tr>
                                      </thead>
                                      <!-- Table body -->
                                      <tbody id="stock-table-body">
                                          @if(isset($stockData) && count($stockData) > 0)
                                              @foreach($stockData as $key => $stock)
                                                  <tr>
                                                      <td>{{ $key + 1 }}</td>
                                                      <td>{{ $stock->Tickers }}</td>
                                                      <td>{{ $stock->MachinePrediction }}</td>
                                                      <td>{{ $stock->RealTimePrice }}</td>
                                                      <td class="d-flex justify-content-center align-items-center">
                                                          <div class="form-check form-check-flat form-check form-check-success">
                                                              <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input">
                                                              </label>
                                                          </div>
                                                      </td>
                                                  </tr>
                                              @endforeach
                                              <div style="margin-top-20px;"></div>
                                              <div class="col-mt-12">
                                                  <!-- Pagination links if needed -->
                                                  {!! $stockData->links() !!}
                                              </div>
                                          @else
                                              <tr>
                                                  <td colspan="5">No data available.</td>
                                              </tr>
                                          @endif
                                      </tbody>
                                  </table>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div >
                          <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Select User Type</h4>
                                  <div class="template-demo">
                                    <button type="button" id="premiumUserBtn" class="btn w-2 btn-inverse-primary btn-fw">Premium</button>
                                    <button type="button" id="basicUserBtn" class="btn w-2 btn-inverse-info btn-fw">Basic</button>
                                    <button type="button" id="trailUserBtn" class="btn w-2 btn-inverse-success btn-fw">Trial</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row" >
                          <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Premium</h4>
                                <div class="table-responsive">
                                  <table class="table table-dark text-center">
                                    <thead>
                                      <tr>
                                        <th style="color: white;">No</th>
                                        <th style="color: white;">User Name</th>
                                        <th style="color: white;">Account Type</th>
                                        <th style="color: white;">Stock List</th>
                                        <th style="color: white;">TimeLine</th>
                                        <th style="color: white;">Edit</th>
                                        <th style="color: white;">Save</th>
                                        <th style="color: white;">Delete</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td> 1 </td>
                                        <td> Herman Beck </td>
                                        <td> XX-XX</td>
                                        <td class="d-flex justify-content-center align-items-center"> <!-- Modified cell -->
                                          <div class="form-check form-check-flat form-check form-check-success">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input">
                                            </label>
                                          </div>
                                        </td>
                                        <td>
                                          <select name="" id="" class="  btn btn-outline-info" >
                                            <option value="" selected disabled>Time Duration</option>
                                            <option value="30">30 Days</option>
                                            <option value="60">60 Days</option>
                                            <option value="90">90 Days</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-success btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-info btn-icon">
                                            <i class="mdi mdi-checkbox-marked"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-danger btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td> 2 </td>
                                        <td> Herman Beck </td>
                                        <td> XX-XX</td>
                                        <td class="d-flex justify-content-center align-items-center"> <!-- Modified cell -->
                                          <div class="form-check form-check-flat form-check form-check-success">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input">
                                            </label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="dropdown">
                                            <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuOutlineButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton6">
                                              <h6 class="dropdown-header">Settings</h6>
                                              <a class="dropdown-item" href="#">30 Days</a>
                                              <a class="dropdown-item" href="#">60 Days</a>
                                              <a class="dropdown-item" href="#">90 Days</a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-success btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-info btn-icon">
                                            <i class="mdi mdi-checkbox-marked"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-danger btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td> 3 </td>
                                        <td> Herman Beck </td>
                                        <td> XX-XX</td>
                                        <td class="d-flex justify-content-center align-items-center"> <!-- Modified cell -->
                                          <div class="form-check form-check-flat form-check form-check-success">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input">
                                            </label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="dropdown">
                                            <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuOutlineButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton6">
                                              <h6 class="dropdown-header">Settings</h6>
                                              <a class="dropdown-item" href="#">30 Days</a>
                                              <a class="dropdown-item" href="#">60 Days</a>
                                              <a class="dropdown-item" href="#">90 Days</a>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-success btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-info btn-icon">
                                            <i class="mdi mdi-checkbox-marked"></i>
                                          </button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-inverse-danger btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('admin.partials._footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/assets/js/file-upload.js')}}"></script>
    <script src="{{asset('admin/assets/js/typeahead.js')}}"></script>
    <script src="{{asset('admin/assets/js/select2.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add this script at the end of your Blade template -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#fetchButton').on('click', function() {
            var selectedExchange = $('#exchange_name').val();
            if (selectedExchange) {
                $.ajax({
                    type: 'POST',
                    url: '/fetch-stock',
                    data: {
                        _token: '{{ csrf_token() }}',
                        exchange_name: selectedExchange
                    },
                    success: function(response) {
                        if (response.stockData) {
                            var stockData = response.stockData;
                            var tableBody = $('#stock-table-body');
                            tableBody.empty(); // Clear existing table rows
                            
                            // Populate table with fetched data
                            $.each(stockData.data, function(key, stock) {
                                var row = '<tr>' +
                                    '<td>' + (key + 1) + '</td>' +
                                    '<td>' + stock.Tickers + '</td>' +
                                    '<td>' + stock.MachinePrediction + '</td>' +
                                    '<td>' + stock.RealTimePrice + '</td>' +
                                    '<td class="d-flex justify-content-center align-items-center">' +
                                    '<div class="form-check form-check-flat form-check form-check-success">' +
                                    '<label class="form-check-label">' +
                                    '<input type="checkbox" class="form-check-input">' +
                                    '</label>' +
                                    '</div>' +
                                    '</td>' +
                                    '</tr>';
                                tableBody.append(row);
                            });

                            // Display pagination links if available
                            $('.pagination').html(stockData.links);
                        } else {
                            // Handle error or no data case
                            tableBody.html('<tr><td colspan="5">No data available.</td></tr>');
                            $('.pagination').empty();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX error
                        console.error(error);
                    }
                });
            }
        });
    });
</script>


  </body>
</html>