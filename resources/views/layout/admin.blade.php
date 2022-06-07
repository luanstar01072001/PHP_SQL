<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LN*Store</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets//vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets//vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets//css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets//images/favicon.svg" type="image/x-icon')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/assets//favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets//favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets//favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('admin/assets//favicon/site.webmanifest')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    {{-- <img src="assets/images/logo.svg" alt="" srcset=""> --}}
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>



                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Trang Chủ</span>
                            </a>

                        </li>

                        <li class="sidebar-item  ">
                          <a href="{{("LoaiMyPham")}}" class='sidebar-link'>
                              <i data-feather="layers" width="20"></i>
                              <span>Loại Mỹ Phẩm</span>
                          </a>

                      </li>

                      <li class="sidebar-item  ">
                        <a href="{{("MyPham")}}" class='sidebar-link'>
                            <i data-feather="layers" width="20"></i>
                            <span>Mỹ Phẩm</span>
                        </a>

                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{("NhanVien")}}" class='sidebar-link'>
                            <i data-feather="layers" width="20"></i>
                            <span>Nhân Viên</span>
                        </a>

                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{("NhaCungCap")}}" class='sidebar-link'>
                            <i data-feather="layers" width="20"></i>
                            <span>Nhà Cung Cấp</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{("Slide")}}" class='sidebar-link'>
                            <i data-feather="layers" width="20"></i>
                            <span>Slide</span>
                        </a>

                    </li>
                    <li class="sidebar-item  ">
                        <a href="{{("donhang")}}" class='sidebar-link'>
                            <i data-feather="layers" width="20"></i>
                            <span>Đơn hàng</span>
                        </a>

                    </li>


                    {{-- </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span></span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="component-alert.html"></a>
                                </li>

                                <li>
                                    <a href="component-badge.html"></a>
                                </li>

                                <li>
                                    <a href="component-breadcrumb.html"></a>
                                </li>

                                <li>
                                    <a href="component-buttons.html"></a>
                                </li>

                                <li>
                                    <a href="component-card.html"></a>
                                </li>

                                <li>
                                    <a href="component-carousel.html"></a>
                                </li>

                                <li>
                                    <a href="component-dropdowns.html"></a>
                                </li>

                                <li>
                                    <a href="component-list-group.html"></a>
                                </li>

                                <li>
                                    <a href="component-modal.html"></a>
                                </li>

                                <li>
                                    <a href="component-navs.html"></a>
                                </li>

                                <li>
                                    <a href="component-pagination.html"></a>
                                </li>

                                <li>
                                    <a href="component-progress.html"></a>
                                </li>

                                <li>
                                    <a href="component-spinners.html"></a>
                                </li>

                                <li>
                                    <a href="component-tooltips.html"></a>
                                </li>

                            </ul>

                        </li> --}}




                        {{-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span></span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="component-extra-avatar.html"></a>
                                </li>

                                <li>
                                    <a href="component-extra-divider.html"></a>
                                </li>

                            </ul>

                        </li>




                        <li class='sidebar-title'> &amp; </li>



                        <li class="sidebar-item  has-sub">
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

                        </li>




                        <li class="sidebar-item  ">
                            <a href="form-layout.html" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>Form Layout</span>
                            </a>

                        </li>




                        <li class="sidebar-item  ">
                            <a href="form-editor.html" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Form Editor</span>
                            </a>

                        </li>




                        <li class="sidebar-item  ">
                            <a href="table.html" class='sidebar-link'>
                                <i data-feather="grid" width="20"></i>
                                <span>Table</span>
                            </a>

                        </li>




                        <li class="sidebar-item  ">
                            <a href="table-datatable.html" class='sidebar-link'>
                                <i data-feather="file-plus" width="20"></i>
                                <span>Datatable</span>
                            </a>

                        </li>




                        <li class='sidebar-title'>Extra UI</li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Widgets</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="ui-chatbox.html">Chatbox</a>
                                </li>

                                <li>
                                    <a href="ui-pricing.html">Pricing</a>
                                </li>

                                <li>
                                    <a href="ui-todolist.html">To-do List</a>
                                </li>

                            </ul>

                        </li> --}}




                        {{-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
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

                        </li>




                        <li class='sidebar-title'>Pages</li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Authentication</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                  <li><a href="{{("LoaiMyPham")}}"><i class="fa fa-circle-o"></i>Loại sản phâm</a></li>
                                </li>

                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>

                                <li>
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>

                            </ul>

                        </li>




                        <li class="sidebar-item  has-sub">
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




                    </ul> --}}
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="https://scontent.fhan7-1.fna.fbcdn.net/v/t1.6435-9/120219620_1098288670587676_5381558928092900608_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=174925&_nc_ohc=I-XrEA4T2xwAX8zL7RC&_nc_ht=scontent.fhan7-1.fna&oh=00_AT-xVkY7JMW6UH8mGAyXEBEfOAz2WfhUobFWQ6b67BKPhQ&oe=628B5453"
                                        alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Ngô Văn Luân</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </nav>
            @yield('main')

          </div>
    

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Ngô Văn Luân</p>
                    </div>
                    <div class="float-end">
                        <p>Bản quyền  <span class='text-danger'><i data-feather="heart"></i></span> thuộc về <a
                                href="http://ahmadsaugi.com">Ngô Văn Luân</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin')}}/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/app.js"></script>

    <script src="{{asset('admin')}}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/pages/dashboard.js"></script>


    <script src="{{asset('admin')}}/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('admin')}}/assets/js/vendors.js"></script>

    <script src="{{asset('admin')}}/assets/js/main.js"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('js')

    
                <script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'editor2' );
                        CKEDITOR.replace( 'editor3' );
                        CKEDITOR.replace( 'editor4' );
                        CKEDITOR.replace( 'editor5' );
                        CKEDITOR.replace( 'editor6' );
                        CKEDITOR.replace( 'editor7' );
                        CKEDITOR.replace( 'editor8' );
                        CKEDITOR.replace( 'editor9' );
                </script>
    <script>
        $(function() {
          $('#example1').DataTable();
          $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
          });
        });
      </script>


</body>

</html>