<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper">
  <div class="container-fluid">
    <ul class="breadcrumb pl-0 pb-0 mb-0">
      <li><a href="#"><i class="ti-angle-left"></i> Operations</a></li>
    </ul>
    <div class="row sw-dash-landing">
      <div class="col-md-12 sw-xs-welcome">
        <h3 class="mt-4 mb-3">Categories</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="bg-white box-shadow b-radius-3 w-100">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
              <form class="form-inline pt-4 px-4">
                <div class="form-group bn-search">
                  <!-- <span class="bn-search"><i class="ti-search"></i></span> -->
                  <input type="search" class=" form-control mr-2" id="exampleInputName2" placeholder="Search Categories">
                </div>
                <div class="form-group mb-0">
                  <select class="form-control">
                    <option>All categories</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
          <hr>
          <form class="row pb-4">
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 mb-2">
              <span class="ml-4 pt-3 hidden-xs">Select 2 of 50 categories</span>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 mb-2">
              <div class="form-inline px-4 text-right">
                <div class="form-group">
                  <select class="form-control">
                    <option>More Options</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option>Show 25 Categories</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive bg-white box-shadow">
          <table class="table table-hover bn-table">
            <thead>
              <tr>
                <th class="w-10">
                  <input class="ml-2" id="GridCheck" type="checkbox"><label class="mb-0 ml-1" for="GridCheck">All
                    </label>
                </th>
                <th class="w-25">Name</th>
                <th class="w-25">Slug</th>
                <th class="w-25">linked Products</th>
                <th class="w-15">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="checkbox" class="ml-2">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>Puma </span><br><small class="text-muted">Apparel</small><br><small
                        class="text-muted">Extra</small></div>
                  </div>
                </td>
                <td>t-shirt</td>
                <td>27 Products</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default" href="#">View</a>
                    <a class="mx-4" href="#"><i class="ti-trash"></i></a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" class="ml-2">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>T-shirt </span><br><small class="text-muted">Apparel</small></div>
                  </div>
                </td>
                <td>t-shirt</td>
                <td>27 Products</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default" href="#">View</a>
                    <a class="mx-4" href="#"><i class="ti-trash"></i></a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" class="ml-2">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>T-shirt </span><br><small class="text-muted">Apparel</small></div>
                  </div>
                </td>
                <td>t-shirt</td>
                <td>27 Products</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default" href="#">View</a>
                    <a class="mx-4" href="#"><i class="ti-trash"></i></a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" class="ml-2">
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>T-shirt </span><br><small class="text-muted">Apparel</small></div>
                  </div>
                </td>
                <td>t-shirt</td>
                <td>27 Products</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default" href="#">View</a>
                    <a class="mx-4 text-" href="#"><i class="ti-trash"></i></a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- <div class="col-md-3 mt-5 col-md-offset-6 text-right">Displaying pages</div> -->
      <div class="col-md-6 col-md-offset-6 text-right mt-3">
        <span class="text-right mr-3 bn-text">Displaying pages</span>
        <ul class="pagination bn-pagination pull-right my-0">
          <li><a class="bn-pagination-link ti-angle-left" href="#"></a></li>
          <li><input type="number" class="form-control" value="01" /></li>
          <li><span class="bn-pagination-numbs">of 10</span></li>
          <li><a class="bn-pagination-link ti-angle-right" href="#"></a></li>
        </ul>

      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>