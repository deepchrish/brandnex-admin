<?php
$title = "Home";
$pageDescription = "Home page description";
include 'header.php';
include 'navbar.php';
?>

<div class="page-wrapper">
  <div class="container-fluid">
    <ul class="breadcrumb pl-0 pb-0 mb-0">
      <li><a href="#"><i class="ti-angle-left"></i> Human Resource</a></li>
    </ul>
    <div class="row sw-dash-landing">
      <div class="col-md-12 sw-xs-welcome">
        <h3 class="mt-4 mb-3">Schedule</h3>
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
                  <input type="search" class=" form-control mr-2" id="exampleInputName2"
                    placeholder="Search Categories">
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 text-right">
              <form class="form-inline pt-4 px-4">
                <div class="form-group mb-0">
                  <label for="shortby" class="mr-3">Short by </label>
                  <select id="shortby" class="form-control">
                    <option>Recently Added</option>
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
                <th>
                  <!-- <input class="ml-2" id="GridCheck" type="checkbox"><label class="mb-0 ml-1" for="GridCheck">All
                    </label> -->
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkboxAll" onchange="checkAll(this)"
                      name="chk[]">
                    <label class="custom-control-label" for="checkboxAll"></label>
                  </div>
                </th>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Shift Name</th>
                <th>Clock In</th>
                <th>Clock out</th>
                <th>Break</th>
                <th>Repeat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkbox1" name="chk[]">
                    <label class="custom-control-label" for="checkbox1"></label>
                  </div>
                </td>
                <td><a href="#">19707</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>Akash Pathak </span><br><small class="text-muted text-success">Clocked in at
                        9:00 AM</small></div>
                  </div>
                </td>
                <td>Design Team Shift</td>
                <td>09:00 AM</td>
                <td>05:00 PM</td>
                <td>60 Mins, 12:30 PM</td>
                <td>Every Weekday</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default mr-3" href="#">Edit</a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkbox2" name="chk[]">
                    <label class="custom-control-label" for="checkbox2"></label>
                  </div>
                </td>
                <td><a href="#">19707</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>Cindy Baker</span><br><small class="text-muted text-danger">Clocked out at
                        3:00 PM</small></div>
                  </div>
                </td>
                <td>Human Recources Shift</td>
                <td>09:00 AM</td>
                <td>05:00 PM</td>
                <td>60 Mins, 12:30 PM</td>
                <td>Every Weekday</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default mr-3" href="#">Edit</a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkbox3" name="chk[]">
                    <label class="custom-control-label" for="checkbox3"></label>
                  </div>
                </td>
                <td><a href="#">19707</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>Simran Kapoor</span><br><small class="text-muted text-success">Clocked in at
                        9:00 AM</small></div>
                  </div>
                </td>
                <td>Sales Team Shift</td>
                <td>09:00 AM</td>
                <td>05:00 PM</td>
                <td>60 Mins, 12:30 PM</td>
                <td>Every Weekday</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default mr-3" href="#">Edit</a>
                    <a class="" href="#"><i class="ti-menu"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" id="checkbox4" name="chk[]">
                    <label class="custom-control-label" for="checkbox4"></label>
                  </div>
                </td>
                <td><a href="#">19707</a></td>
                <td>
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle"
                      src="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/portrait/small/avatar-s-1.jpg"
                      alt="avatar" height="32" width="32">
                    <div class="ml-2"><span>Cindy Baker</span><br><small class="text-muted text-success">Clocked in at
                        9:00 AM</small></div>
                  </div>
                </td>
                <td>Design Team Shift</td>
                <td>09:00 AM</td>
                <td>05:00 PM</td>
                <td>60 Mins, 12:30 PM</td>
                <td>Every Weekday</td>
                <td>
                  <div class="d-flex align-items-center">
                    <a class="btn btn-default mr-3" href="#">Edit</a>
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