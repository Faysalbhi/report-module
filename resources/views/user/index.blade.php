
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AIMS</title>
    <link rel="shortcut icon" href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/project-assets/favicon.ico">

    <link href="{{ asset('global_assets') }}/css/icons/fontawesome/styles.min.css"rel="stylesheet" type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/css/icons/material/styles.min.css"rel="stylesheet" type="text/css">
    <link href="{{asset('global_assets')}}/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/bootstrap.min.css" rel="stylesheet"type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/bootstrap_limitless.min.css" rel="stylesheet"type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/components.css" rel="stylesheet"type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/custom.css" rel="stylesheet" type="text/css">
    <link href="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
            <style>
            th,td{
                padding: 1rem 0rem !important;
            }
            a:hover{
                color: black !important;

            }
            .page-content label {
                max-height: 100%;
                min-height: 45px;
            }

            .select2-results__option[aria-selected=true] {
                color: #fff;
                background-color: #006a4e;
                ;
            }

            a {
                color: black;
            }

            body {
                word-break: break-word;
            }

            .form-group label {
                min-height: 45px;
                max-height: 100%;
            }

            .select2-results__option:first-child>.select2-results__group {
                background-color: #006a4e;
                color: white;
            }

            .select2-results__group {
                background-color: #006a4e;
                color: white;
            }
        </style>
          
</head>
<body>
   <input type="hidden" value="Kpq5S7JxEhk0SeVD3ZV6YR4EauOv8sQttUTGpmom" id="csrf_token_identifier">
   <input type="hidden" value="" id="procurement_auth_token_identifier">
   <!-- Main navbar -->
   <!-- /main navbar -->
   <!-- Main navbar -->
   <div class="navbar navbar-expand-md navbar-dark bg-success navbar-static">
      <div class="navbar-brand">
         <a href="http://baf-forms.pondit.com/dashboard" class="d-inline-block">
         <img class="card-img" src="http://baf-forms.pondit.com/storage/organization-setup/setup-1644762070.svg" height="40px!important" alt="">        </a>
      </div>
      <div class="d-md-none">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
         <i class="icon-tree5"></i>
         </button>
         <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
         <i class="icon-paragraph-justify3"></i>
         </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-mobile">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a href="#" id="collapseButton"
                  class="sidebar-control sidebar-main-toggle d-none d-md-block text-white">
               <i class="icon-paragraph-justify3"></i>
               </a>
            </li>
         </ul>
         <span class="navbar-text font-weight-bold ml-md-3">
         LAC Protim Chanchal Biswas <br>
         </span>
         <div class="m-auto">
            <h1>AIMS</h1>
         </div>
         <ul class="navbar-nav ml-md-auto">
            <li class="nav-item">
               <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="false">
               <i class="icon-grid2"></i>
               <span class="badge bg-brown badge-pill">5</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                  <div class="dropdown-content-header border-bottom p-2 bg-light">
                     <span class="font-weight-semibold">Modules</span>
                  </div>
                  <div class="dropdown-content-body dropdown-scrollable">
                     <div class="row" style="padding: 0">
                        <div class="col-4">
                           <a href="#"
                              class="btn btn-block btn-float m-0 text-brown">
                           <i class="fa fa-solid fa-book fa-2x"></i>
                           <span>Policy Manager</span>
                           </a>
                        </div>
                        <div class="col-4">
                           <a href="#"
                              class="btn btn-block btn-float m-0 text-success">
                           <i class="fa fa-solid fa-list fa-2x"></i>
                           <span>Procurement</span>
                           </a>
                        </div>
                        <div class="col-4">
                           <a href="#"
                              class="btn btn-block btn-float m-0 text-indigo-400">
                           <i class="fa fa-solid fa-gavel fa-2x"></i>
                           <span>Tender</span>
                           </a>
                        </div>
                        <div class="col-4">
                           <form action="http://baf-forms.pondit.com/masterdata/access-to-child-module" method="POST">
                              <input type="hidden" name="_token" value="Kpq5S7JxEhk0SeVD3ZV6YR4EauOv8sQttUTGpmom">                                <button type="submit" class="btn btn-block btn-float m-0 text-indigo">
                              <i
                                 class="fa fa-file fa-2x"></i>
                              <span>pcm/pre-pcm</span>
                              </button>
                           </form>
                        </div>
                        <div class="col-4">
                           <form action="http://baf-forms.pondit.com/masterdata/access-to-child-module" method="POST">
                              <input type="hidden" name="_token" value="Kpq5S7JxEhk0SeVD3ZV6YR4EauOv8sQttUTGpmom">                                <button type="submit" class="btn btn-block btn-float m-0 text-brown">
                              <i
                                 class="fa fa-file-alt fa-2x"></i>
                              <span>OPR</span>
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
               <a href="#" class="navbar-nav-link" data-toggle="dropdown">
               <i class="fas fa-bell"></i>
               <span class="badge bg-orange-300 badge-pill" id="unread_message">0</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350" id="procurement_message_details">
                  <div>
                     <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                           <li class="nav-item"><a href="#act_notification" class="nav-link active"
                              data-toggle="tab">Action</a></li>
                           <li class="nav-item"><a href="#info_notification" class="nav-link " data-toggle="tab">Info</a>
                           </li>
                        </ul>
                        <div class="tab-content" style="max-height: 400px;width: 500px;overflow:auto">
                           <div class="tab-pane fade show active" id="act_notification">
                              <div class="act_notification_list"></div>
                              <div class="text-center">
                                 <i class="icon-spinner6 spinner act_notification_spinner display_none p-2"
                                    style="font-size:25px"></i>
                              </div>
                              <div class="load_more_button_act_notification text-center"></div>
                           </div>
                           <div class="tab-pane fade" id="info_notification">
                              <div class="info_notification_list"></div>
                              <div class="text-center">
                                 <i class="icon-spinner6 spinner info_notification_spinner display_none p-2"
                                    style="font-size:25px"></i>
                              </div>
                              <div class="load_more_button_info_notification text-center"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <style>
                  .display_none {
                  display: none
                  }
                  .notification-details {
                  background-color: rgb(242, 241, 241);
                  border-radius: 10px;
                  }
                  .text-default {
                  color: black
                  }
                  .cursor-pointer {
                  cursor: pointer;
                  }
                  .head-tab-content-line-one-notification {
                  max-height: 130px;
                  overflow: auto
                  }
               </style>
            </li>
            <li class="nav-item">
               <a href="#" class="navbar-nav-link dropdown-toggle caret-0" title=Logout onclick="logout()" data-toggle="dropdown" aria-expanded="false">
               <i class="icon-switch2"></i>
               <span class="d-md-none ml-2">Logout</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350t" >
                  <a href="http://baf-forms.pondit.com/profile" class="dropdown-item"><i class="icon-user-lock"></i> Profile</a>
                  <form method="POST" action="http://baf-forms.pondit.com/logout">
                     <input type="hidden" name="_token" value="Kpq5S7JxEhk0SeVD3ZV6YR4EauOv8sQttUTGpmom">
                     <a href="route('logout')" class="dropdown-item text-danger font-weight-bold"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                        >
                     <i class="icon-switch2"></i>
                     Log out
                     </a>
                  </form>
               </div>
            </li>
         </ul>
      </div>
   </div>
   <!-- Page content -->
   <div class="page-content">
      <!-- Main sidebar -->
      <!-- Main sidebar -->
      <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
         <!-- Sidebar mobile toggler -->
         <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
            </a>
            <span class="font-weight-semibold">Navigation</span>
            <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
            </a>
         </div>
         <!-- /sidebar mobile toggler -->
         <!-- Sidebar content -->
         <div class="sidebar-content">
            <!-- User menu -->
            <div class="sidebar-user-material">
               <div class="sidebar-user-material-body">
                  <img class="card-img" src="http://baf-forms.pondit.com/storage/organization-setup/setup-1644762762.jpeg" alt="Card image" >
                  <div class="sidebar-user-material-footer">
                     <a href="#user-nav"
                        class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle collapsed"
                        data-toggle="collapse" aria-expanded="false"><span>My Account</span></a>
                  </div>
               </div>
               <div class="collapse" id="user-nav" style="">
                  <ul class="nav nav-sidebar">
                     <li class="nav-item">
                        <a href="http://baf-forms.pondit.com/profile" class="nav-link" data-popup="tooltip" title="Profile" data-original-title="Profile">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="http://baf-forms.pondit.com/show-own-signature" class="nav-link" data-popup="tooltip" title="Update Signature" data-original-title="Update Signature">
                        <i class="fas fa-pen"></i>
                        <span>Update Signature</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="http://baf-forms.pondit.com/change-password" class="nav-link" data-popup="tooltip" title="Change Password" data-original-title="Change Password">
                        <i class="fas fa-key"></i>
                        <span>Change Password</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /user menu -->
            <!-- user info menu -->
            <div class="card">
               <div class="card border-1 border-success m-2">
                  <div class="card-header header-elements-inline justify-content-end">
                     <div class="header-elements">
                        <div class="list-icons">
                           <a class="list-icons-item" data-action="collapse"></a>
                           <a class="list-icons-item" data-action="reload"></a>
                           <a class="list-icons-item" data-action="remove"></a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body" style="">
                     <div class="menu-title title d-flex">
                        <span class="mr-2 mt-1">
                        <i class="fas fa-user fa-2x text-success"></i>
                        </span>
                        <a href="#" class="d-flex flex-column text-dark ">
                        <span class="name"> Protim Chanchal Biswas </span>
                        <span> [LAC]
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /user info menu -->
            <!-- Task menu -->
            <div class="card">
               <div class="card border-1 border-orange m-2">
                  <div class="card-header header-elements-inline justify-content-end">
                     <div class="header-elements">
                        <div class="list-icons">
                           <a class="list-icons-item" data-action="collapse"></a>
                           <a class="list-icons-item" data-action="reload"></a>
                           <a class="list-icons-item" data-action="remove"></a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body" style="">
                     <div class="menu-title notification d-flex">
                        <span class="mx-1 text-dark"> You have <a
                           href="#"
                           class="text-danger pending_task"> 0 </a> pending tasks.</span>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /task menu -->
            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
               <ul class="nav nav-sidebar" data-nav-type="accordion">
               </ul>
            </div>
            <!-- /main navigation -->
         </div>
         <!-- /sidebar content -->
      </div>
      <!-- /main sidebar -->        <!-- /main sidebar -->
      <!-- Main content -->
      <div class="content-wrapper">
         <!-- Page header -->
         <div class="page-header page-header-light">
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
               <div class="d-flex">
                  <div class="breadcrumb">
                     <a href="http://baf-forms.pondit.com/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                  </div>
                  <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
               </div>
               <div class="header-elements d-none">
                  <div class="breadcrumb justify-content-center">
                  </div>
               </div>
            </div>
         </div>
         <!-- /page header -->
         <!-- Content area -->
         <div class="content">
            <div class="page-content">
               <div class="content-wrapper">
                  <div class="content pb-0">
                     <!-- Report Genarator Filter Option (Store Inward) start -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                              <div class="card-header
                                 header-elements-inline"
                                 style="background-color:#006a4e;
                                 padding-top: 0.5rem !important;
                                 padding-bottom: 0.5rem;">
                                 <h6 class="card-title"
                                    style="color:white; font-weight:
                                    bold; font-size: 18px;">
                                    Documentory Receive Management
                                 </h6>
                                 <div class="header-elements">
                                    <div class="list-icons">
                                       <a class="list-icons-item"
                                          data-action="collapse"
                                          style="color: white;"></a>
                                       <a class="list-icons-item"
                                          data-action="reload"
                                          style="color: white;"></a>
                                       <a class="list-icons-item"
                                          data-action="remove"
                                          style="color: white;"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mt-2 justify-content-around" style="">
                                 <strong style="font-size: 16px;">This Filter will Generate Documentory Receive Management Reports.</strong>
                              </div>
                              <form id="filterForm" data-action="getFilterdata">
                                 <div class="card-body row mt-2 justify-content-around">
                                    <div class="form-group col-sm-2">
                                       <label style="font-weight: bold;font-size: 15px;">Base/Unit</label>
                                       <select class="form-control select"  name="base" id="base_name" data-fouc>
                                          <!-- <optgroup label="Base/Unit"> -->
                                          <option value="" selected="selected">Select</option>
                                          <option value="All Bases">All Bases</option>
                                          <option value="BSR Base">BSR</option>
                                          <option value="BBD Base">BBD</option>
                                          <option value="MTR Base">MTR</option>
                                          <option value="ZHR Base">ZHR</option>
                                          <option value="CXB Base">CXB</option>
                                          <option value="PKB Base">PKB</option>
                                          <!-- </optgroup> -->
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-2">
                                       <label style="font-weight: bold; font-size: 15px;">CRV Status</label>
                                       <select class="form-control select" name="status" id="filter_status"
                                          data-fouc>
                                          <!-- <optgroup label=" Functional test"> -->
                                          <option value="" selected="selected">Select State</option>
                                          <!-- <option value="On Queue">On Queue</option> -->
                                          <option value="Completed">Completed</option>
                                          <option value="Ongoing">Ongoing</option>
                                          <!-- </optgroup> -->
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                       <label style="font-weight: bold; font-size: 15px;">Date/Date Range</label>
                                       <select title="Select Design" class="form-control select" name="date" id="designselectedchange">
                                          <option value="" selected="selected">Select Date/Date Range</option>
                                          <option value="Today">Today's/Daily</option>
                                          <option value="This Week">This Week</option>
                                          <option value="This Month">This Month</option>
                                          <option value="This Quarter">This Quarter</option>
                                          <option value="SpecificDate">Specific Date</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-1" style="padding-top: 50px">
                                       <button id="savebtn" type="submit" class="btn btn-success bg-success" onclick="getFilterValues()">Filter</button>
                                    </div>
                                 </div>
                              </form>
                              <!-- Report Genarator Result Option (Documentory Receive Management) Start -->
                              <div class="card-body" style = "padding:0px !important;">
                                 <div class="table-responsive" id="table-responsive" style = "padding:1.25rem !important; display: none;">
                                    <table style="padding: 1rem;  width: 100% !important; color:  #333; font-size: 0.8rem;">
                                       <thead>
                                          <tr class="bg-success">
                                             <th colspan="6" style="text-align: center; border-bottom: 1px solid ; font-size: large;"><span id="status"></span> Documentory Receive Management Report <span id="base"></span> <span id="date"></span> </th>
                                          </tr>
                                          <tr >
                                             <th colspan="6" style="text-align: left; border-bottom: 1px solid rgb(181, 177, 177);; font-size: medium; padding-top: 10%">
                                                <span>Show Per Page</span>
                                                <select name="show" id="" style="height: 26px; margin-left: 10px; margin-right: 1%; ">
                                                   <option value="">5</option>
                                                   <option value="">10</option>
                                                   <option value="">20</option>
                                                </select>
                                             </th>
                                          </tr>
                                          <tr style="border-bottom: 2px solid rgb(181, 177, 177); " >
                                             <th class="text-center">Ser No</th>
                                             <th class="text-center">Description</th>
                                             <th class="text-center">Base/Unit</th>
                                             <th class="text-center">CRV Status</th>
                                             <th class="text-center">Date</th>
                                             <th class="text-center">Current Desk</th>
                                             <!-- <th colspan="2" class="text-center" >On Desk</th> -->
                                          </tr>
                                       </thead>
                                       <tbody id="tableBody" class="act_list text-center">
                                          
                                          
                                       </tbody>
                                    </table>
                                    <div class="card-footer d-flex justify-content-between align-items-center ">
                                       <nav>
                                          <ul class="pagination">
                                             <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                                <span class="page-link" aria-hidden="true">‹</span>
                                             </li>
                                             <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                             <li class="page-item"><a class="page-link">2</a></li>
                                             <li class="page-item"><a class="page-link">3</a></li>
                                             <li class="page-item"><a class="page-link">4</a></li>
                                             <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                             <li class="page-item"><a class="page-link">9</a></li>
                                             <li class="page-item"><a class="page-link">10</a></li>
                                             <li class="page-item">
                                                <a class="page-link" href="http://aims.baf.org/system/authorize/users?page=2" rel="next" aria-label="Next »">›</a>
                                             </li>
                                          </ul>
                                       </nav>
                                    </div>
                                 </div>
                              </div>
                              <!-- Report Genarator Result Option (Documentory Receive Management) End -->
                           </div>
                        </div>
                     </div>
                     <!-- Report Genarator Filter Option (Store Inward) End -->
                     <!-- modal start-->
                     <div class="modal fade" id="SpecificDate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header pb-2 bg-success"
                                 style="color: white;">
                                 <h4 class="modal-title">Select Specific Date </h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              </div>
                              <div class="modal-body">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <input type="text" class="form-control daterange-left" name="start_date_end_date" id="start_date-end_date">
                                       <span class="input-group-append"> <span class="input-group-text"><i class="icon-calendar22"></i></span> </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal" onclick="getCustomDateValue()">SAVE</button>
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
                     <!-- modal end-->
                  </div>
               </div>
            </div>
         </div>
         <!-- /content area -->
         <!-- Footer -->
         <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
               <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
               <i class="icon-unfold mr-2"></i>
               Footer
               </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-footer">
               <span class="navbar-text"> &copy; <a href="#">  <a href="http://pondit.com" target="_blank"></a>  </span>
            </div>
         </div>
         <!-- /footer -->
      </div>
      <!-- /main content -->
   </div>
   <!-- /page content -->
   <script>
      var csrf_token = document.getElementById('csrf_token_identifier').value;
      var authtoken = document.getElementById('procurement_auth_token_identifier').value;;
   </script>
   <script src="http://baf-forms.pondit.com/vendor/pondit/baf/common/assets/js/utility.js"></script>
   <!-- /global stylesheets -->
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/main/jquery.min.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/demo_pages/form_multiselect.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/demo_pages/form_select2.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/forms/selects/select2.min.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/ui/moment/moment.min.js"></script>
   <!-- Date Piker Scripts -->
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/plugins/pickers/daterangepicker.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/js/custom.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/demo_pages/content_cards_draggable.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/global_assets/js/demo_pages/picker_date.js"></script>
   <!-- 
      TINYMCE SCRIPTS
      -->
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/js/tinymce/tinymce.min.js"></script>
   <script src="http://baf-forms.pondit.com/vendor/themebazar/ponditlimitless/assets/js/tinymce/jquery.tinymce.min.js"></script>
   <!-- /core JS files -->
   <script>
      function getFilterValues() {
          let base = $("#base_name").val();
          let result = $("#filter_result").val();
          let status = $("#filter_status").val();
          let range = $("#filter_range").val();
          let date =$("#designselectedchange").val();
          let data=1;
      
          $('#base').html(base ? ", "+base : '');
          $('#result').html(result);
          $('#status').html(status);
          $('#range').html(range ? "of "+range : '');
          $('#date').html(date ?  "for "+date : '');
         document.getElementById("table-responsive").style.display = "block";
      }
</script>

<script>
         $(document).ready(function(){


            $('#savebtn').click(function(event){
               event.preventDefault();
               var formdata = $('#filterForm').serialize();

               var url = 'getFilterdata';
               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
               });
               $.ajax({
                     url: url,
                     type:'POST',
                     data:{
                        data:formdata,
                     },
                     dataType: 'JSON',
                     
                     success:function(response){
                     $.each(response,function(key,value){
                        $('#tableBody').append(`<tr style="border-bottom: 1px solid rgb(181, 177, 177); "><td>${key+1}</td><td>${value.description}</td><td>${value.desk}</td><td>${value.crv_status}</td></tr>`);

                     });

                     },
                     error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                  }
               });
            });

         });
      
   </script>
   <script>
      $(function () {
          $('#designselectedchange').on('change', function () {
              if ($(this).val() === 'SpecificDate') {
                  $('#SpecificDate').modal('show');
              }
          });
      });
      
      function getCustomDateValue() {
          let startDate = $("#start_date-end_date").val();
          let formattingOptionVal = startDate;
          let formattingOption = startDate;
          let option = `<option value="${formattingOptionVal}">${formattingOption}</option>`;
          $("#designselectedchange").append(option).change();
          $('#designselectedchange').val(startDate)
      }
      
      
   </script>
  
</body>
</html>