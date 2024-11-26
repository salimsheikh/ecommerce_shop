<!DOCTYPE html>
<html>

<head>
    @include('admin.head')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">{{ __('Category') }}</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Category') }}</li>
                </ul>
            </div>

            <section class="no-padding-top">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        <div class="col-lg-6">
                            <div class="block">
                                <div class="block-body">
                                    <form action="{{ url('admin/add_category') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="category_name" class="form-control-label">Category Name</label>
                                            <input type="text" name="category_name" placeholder="Category Name"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Add Category" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="block">
                              <div class="title"><strong>Categories</strong></div>
                              <div class="table-responsive"> 
                                <table class="table table-striped table-sm">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Category Name</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter      </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admin-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admin-assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/front.js') }}"></script>
</body>

</html>
