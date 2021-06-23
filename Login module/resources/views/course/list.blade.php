<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Instracture Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/demo/demo.css" rel="stylesheet" />
</head>
<body>
<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="/course/list">
              <i class="now-ui-icons education_atom"></i>
              <p>Courses</p>
            </a>
          </li>
          <li>
            <a href="/note">
              <i class="now-ui-icons location_map-big"></i>
              <p>Notes</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="/profile">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="/student">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Students List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="/home">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
   
    <div id="wrapper">
    
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            
        <div id="main-content">
        <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand"> </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> Course Management</h1>

<!-- DataTales Example -->
<span id="message"></span>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
          <div class="col">
            <h6 class="m-0 font-weight-bold text-primary">Course List</h6>
          </div>
          <div class="col" align="right">
            <button type="button" name="add_class" id="add_class" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
          </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="class_table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Course Id</th>
                        <th>Course Name</th>
                        
                        <th>Edit Course Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <td>01</td>
                    <td>ACN</td>
                    <td></td> 
                    <td>Valid</td>
                    <td></td>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



<div id="classModal" class="modal fade">
<div class="modal-dialog">
<form method="post" id="class_form">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="modal_title">Add Class</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<span id="form_message"></span>
<div class="form-group">
<label>Class Name</label>
<input type="text" name="class_name" id="class_name" class="form-control" required data-parsley-pattern="/^[a-zA-Z0-9 \s]+$/" data-parsley-trigger="keyup" />
</div>
</div>
<div class="modal-footer">
<input type="hidden" name="hidden_id" id="hidden_id" />
<input type="hidden" name="action" id="action" value="Add" />
<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>

<div id="subjectModal" class="modal fade">
<div class="modal-dialog">
<form method="post" id="subject_form">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="subject_modal_title">Add Subject</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<span id="subject_form_message"></span>
<div class="form-group">
    <label>Subject Name</label>
    <input type="text" name="subject_name" id="subject_name" class="form-control" required data-parsley-pattern="/^[a-zA-Z0-9 \s]+$/" data-parsley-trigger="keyup" />
</div>
</div>
<div class="modal-footer">
<input type="hidden" name="hidden_subject_id" id="hidden_subject_id" />
<input type="hidden" name="class_id" id="class_id" />
<input type="hidden" name="hidden_action" id="hidden_action" value="Add" />
<input type="submit" name="submit" id="subject_form_submit_button" class="btn btn-success" value="Add" />
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</form>
</div>
</div>
</body>
</html>