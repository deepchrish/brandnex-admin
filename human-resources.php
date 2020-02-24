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
        <h3 class="mt-4 mb-3">Human Resource</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 my-3">
        <div class="bg-white box-shadow b-radius-3 bn-hr-grid p-4">
          <h4>Employees</h4>
          <img src="images/employees.svg" class="img-fluid my-3" alt="employee image">
          <h5>Our Employees make us awesome.</h5>
          <p>Our employees will be listed here. We woud be able to set their details, create their schedules and choose their payrolls through here.</p>
          <a href="#"><i class="ti-plus"></i> Add an Employee</a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 my-3">
        <div class="bg-white box-shadow b-radius-3 bn-hr-grid p-4">
          <h4>Schedule</h4>
          <img src="images/e-clock.svg" class="img-fluid my-3" alt="employee image">
          <h5>Maintain a healthy work schedule for your employees</h5>
          <p>Our employees’s schedule details will be listed here, Create a schedule for your employees here.</p>
          <a href="#"><i class="ti-plus"></i> Add an Employee</a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 my-3">
        <div class="bg-white box-shadow b-radius-3 bn-hr-grid p-4">
          <h4>Compensation</h4>
          <img src="images/e-compensation.svg" class="img-fluid my-3" alt="employee image">
          <h5>Pay your employees with a well deserving compensation</h5>
          <p>Set a payroll and comission for your employees and keep a track of all that you pay to them per hour or monthly.</p>
          <a href="#"><i class="ti-plus"></i> Create a Compensation</a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 my-3">
        <div class="bg-white box-shadow b-radius-3 bn-hr-grid p-4">
          <h4>Announcement</h4>
          <img src="images/e-announce.svg" class="img-fluid my-3" alt="employee image">
          <h5>Let your team know what’s up.</h5>
          <p>Send important updates to your team about any new happenings in your company. An approaching deadline, a party or a vacation. Whatever it is.</p>
          <a href="#"><i class="ti-plus"></i> Send an Announcement</a>
        </div>
      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>