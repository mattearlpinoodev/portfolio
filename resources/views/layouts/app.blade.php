<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    
    <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="../dashboard/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="../dashboard/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../dashboard/assets/css/app.css">
    <link rel="shortcut icon" href="../dashboard/assets/images/logo.png " type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <!-- <img src="../dashboard/assets/images/logo.svg" alt="" srcset=""> -->
        <h1 class="text-primary">{{ucwords(Auth::user()->role)}}</h1>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
            
            
                <li class="sidebar-item active ">
                    <a href="http://127.0.0.1:8000/home" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

            
            
            
                <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Components</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="component-alert.html">Alert</a>
                        </li>
                        
                        <li>
                            <a href="component-badge.html">Badge</a>
                        </li>
                        
                        <li>
                            <a href="component-breadcrumb.html">Breadcrumb</a>
                        </li>
                        
                        <li>
                            <a href="component-buttons.html">Buttons</a>
                        </li>
                        
                        <li>
                            <a href="component-card.html">Card</a>
                        </li>
                        
                        <li>
                            <a href="component-carousel.html">Carousel</a>
                        </li>
                        
                        <li>
                            <a href="component-dropdowns.html">Dropdowns</a>
                        </li>
                        
                        <li>
                            <a href="component-list-group.html">List Group</a>
                        </li>
                        
                        <li>
                            <a href="component-modal.html">Modal</a>
                        </li>
                        
                        <li>
                            <a href="component-navs.html">Navs</a>
                        </li>
                        
                        <li>
                            <a href="component-pagination.html">Pagination</a>
                        </li>
                        
                        <li>
                            <a href="component-progress.html">Progress</a>
                        </li>
                        
                        <li>
                            <a href="component-spinners.html">Spinners</a>
                        </li>
                        
                        <li>
                            <a href="component-tooltips.html">Tooltips</a>
                        </li>
                        
                    </ul> -->
                    
                </li>

            
            
<!--             
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i> 
                        <span>Extra Components</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="component-extra-avatar.html">Avatar</a>
                        </li>
                        
                        <li>
                            <a href="component-extra-divider.html">Divider</a>
                        </li>
                        
                    </ul>
                    
                </li> -->

            
            
            
                <li class='sidebar-title'>Forms &amp; Tables</li>
            
            
            
                <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Form Elements</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="form-element-input.html">Input</a>
                        </li>
                        
                        <li>
                            <a href="form-element-input-group.html">Input Group</a>
                        </li>
                        
                        <li>
                            <a href="form-element-select.html">Select</a>
                        </li>
                        
                        <li>
                            <a href="form-element-radio.html">Radio</a>
                        </li>
                        
                        <li>
                            <a href="form-element-checkbox.html">Checkbox</a>
                        </li>
                        
                        <li>
                            <a href="form-element-textarea.html">Textarea</a>
                        </li>
                        
                    </ul>
                    
                </li> -->

            
            
<!--             
                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Form Layout</span>
                    </a>
                    
                </li> -->

            
            
            
                <li class="sidebar  ">
                    <a href="{{ route('users.index') }}" class='sidebar-link'>
                        <i data-feather="users" width="20"></i> 
                        <span>Users</span>
                    </a>
                    
                </li>

                <li class="sidebar  ">
                    <a href="{{ route('contacts.index') }}" class='sidebar-link'>
                        <i data-feather="users" width="20"></i> 
                        <span>Contacts</span>
                    </a>
                    
                </li>

            
            
            
                <li class="sidebar-item  ">
                    <a href="{{ route('abouts.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>About</span>
                    </a>
                    
                </li>

            
<!--             
            
                <li class="sidebar-item  ">
                    <a href="table-datatable.html" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Datatable</span>
                    </a>
                    
                </li> -->

            
            
<!--             
                <li class='sidebar-title'>Extra UI</li> -->
            
            
            
                <li class="sidebar-item  ">
                    <a href="{{ route('skills.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Skills</span>
                    </a>
                    
                </li>
                <li class="sidebar-item  ">
                <a href="{{ route('educational_attainments.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Educational Attainment</span>
                    </a>
                    
                </li>
                <li class="sidebar-item  ">
                <a href="{{ route('experiences.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Experiences</span>
                    </a>
                    
                </li>
                <li class="sidebar-item  ">
                <a href="{{ route('blogs.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Blogs</span>
                    </a>
                    
                </li>
                <li class="sidebar-item  ">
                <a href="{{ route('webinars.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Webinar</span>
                    </a>
                    
                </li>

                <li class="sidebar-item  ">
                <a href="{{ route('works.index') }}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Works</span>
                    </a>
                    
                </li>
                  
            
            
            
                <!-- <li class="sidebar-item  has-sub">
                <a href="{{ route('educational_attainments.index') }}" class='sidebar-link'>
                        <i data-feather="trending-up" width="20"></i> 
                        <span>Charts</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="ui-chart-chartjs.html">ChartJS</a>
                        </li>
                        
                        <li>
                            <a href="ui-chart-apexchart.html">Apexchart</a>
                        </li>
                        
                    </ul>
                    
                </li> -->

            
            
            
                <!-- <li class='sidebar-title'>Pages</li> -->
            
            
<!--             
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Authentication</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                        
                    </ul>
                    
                </li> -->

            
            
            
                <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="alert-circle" width="20"></i> 
                        <span>Errors</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="error-403.html">403</a>
                        </li>
                        
                        <li>
                            <a href="error-404.html">404</a>
                        </li>
                        
                        <li>
                            <a href="error-500.html">500</a>
                        </li>
                        
                    </ul>
                    
                </li>

             -->
            
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>

@include('layouts.topbar')

@yield('content')


    <!-- <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>BALANCE</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>$50 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Revenue</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>$532,2 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>ORDERS</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>1,544 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Sales Today</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>423 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas4" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class='card-heading p-1 pl-3'>Sales</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">
                                    <h1 class='mt-5'>$21,102</h1>
                                    <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> than last month</p>
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>Last Month</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-blue mr-2'></div><span class='text-xs'>Current Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Orders Today</h4>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>Offenburg</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dale</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>0500 527693</td>
                                        <td>New Quay</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nathaniel</td>
                                        <td>mi.Duis@diam.edu</td>
                                        <td>(012165) 76278</td>
                                        <td>Grumo Appula</td>
                                        <td>
                                            <span class="badge bg-danger">Inactive</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Darius</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ganteng</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oleg</td>
                                        <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                        <td>0500 441046</td>
                                        <td>Rossignol</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kermit</td>
                                        <td>diam.Sed.diam@anteVivamusnon.org</td>
                                        <td>(01653) 27844</td>
                                        <td>Patna</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header">
                        <h4>Your Earnings</h4>
                    </div>
                    <div class="card-body">
                        <div id="radialBars"></div>
                        <div class="text-center mb-5">
                            <h6>From last month</h6>
                            <h1 class='text-green'>+$2,134</h1>
                        </div>
                    </div>
                </div>
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                        </h4>
                
                    </div>
                    <div class="card-body px-0 py-1">
                        <table class='table table-borderless'>
                            <tr>
                                <td class='col-3'>UI Design</td>
                                <td class='col-6'>
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>60%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>VueJS</td>
                                <td class='col-6'>
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>30%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Laravel</td>
                                <td class='col-6'>
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>50%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>ReactJS</td>
                                <td class='col-6'>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>80%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Go</td>
                                <td class='col-6'>
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div> --> 
    <script src="../dashboard/assets/js/feather-icons/feather.min.js"></script>
    <script src="../dashboard/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../dashboard/assets/js/app.js"></script>
    
    <script src="../dashboard/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../dashboard/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../dashboard/assets/js/pages/dashboard.js"></script>

    <script src="../dashboard/assets/js/main.js"></script>
</body>
</html>


