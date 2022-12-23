<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WoodCase-DashBoard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/Admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Admin/css/style.css">
    <link rel="stylesheet" href="..assets/Admin/lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="..assets/Admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css">



</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>TimeZone</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../assets/ProductImg/291687523_189860590051806_4702903943460163817_n.jpg"
                            alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Kisotama</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('dashboard') }}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Product Manage</a>

                    <div class="nav-item dropdown">
                        <a href="{{ url('admin/cat')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Category</a>

                    </div>
                    <a href="{{url('admin/admin')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Admin
                        Manage</a>

                        <a href="{{url('admin/user')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>User
                            Manage</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle"
                                        src="../assets/ProductImg/291687523_189860590051806_4702903943460163817_n.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Bro someone just buy ur case</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">早上好中国
                                            现在我有冰激淋 我很喜欢冰激淋</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Stop ingoring me!!</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../assets/ProductImg/291687523_189860590051806_4702903943460163817_n.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Session::get('name') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<!--
    Lay tu ben dashboard
-->
<form class="row contact_form" action="{{ url('product-update') }}" method="post" enctype="multipart/form-data">
@csrf
<input type="hidden" id="img_pass" name="img_pass" value="{{$data->img}}">
<input type="hidden" class="form-control" id="id" name="id"  value="{{ $data->id }}" placeholder="id">
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <tr class="text-white">
                        <td scope="col">Product name</td>
                        <td>
                            <input type="text" class="form-control" id="product" name="product"
                            value="{{ $data->product }}" placeholder="Products Name">
                        </TD>
                    </tr>

                    <tr class="text-white">
                        <td scope="col">Product price:</td>
                        <td>
                            <input type="text" class="form-control" id="price" name="price"
                            value="{{ $data->price }}" placeholder="Price">
                        </TD>
                    </tr>
                    <tr class="text-white">
                        <td scope="col">Product picture:</td>
                        <td>
                            <img src="../assets/ProductImg/{{$data->img}}" id="blah" alt="your image" width="400" height="400" />
                        </TD>
                    </tr>

                    <tr class="text-white">
                        <td scope="col">Product Category:</td>
                        <td>
                            <select name="categoryID" class="form-control">
                                @foreach ( $categories as $category )
                                <option value="{{ $category->id }}">
                                {{ $category->cat_name }}
                                </option>
                                @endforeach
                            </select>
                        </TD>
                    </tr>
                    <tr class="text-white">
                        <td scope="col">Choose new picture:</td>
                        <td>
                            <input type="file" class="form-control" id="img" name="img" value="{{ $data->img }}"
                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0]);
                            document.getElementById('img_pass').value = (this.files[0].name)">
                        </TD>
                    </tr>
                    <tr class="text-white">
                        <td scope="col"></td>
                        <td>
                            <button type="submit" value="submit" class="btn btn-primary">
                                Update
                        </TD>
                    </tr>


            </table>
        </div>
    </div>
</div>
</form>



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="../public/assets/Admin/lib/chart/chart.min.js">
     <script src="../public/assets/Admin/lib/easing/easing.min.js"></script>
     <script src="../public/assets/Admin/lib/waypoints/waypoints.min.js"></script>
     <script src="../public/assets/Admin/lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="../public/assets/Admin/lib/Admin/lib/tempusdominus/js/moment.min.js"></script>
     <script src="../public/assets/Admin/lib/Admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="../public/assets/Admin/lib/Admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


    <!-- Template Javascript -->
    <script src="../public/assets/Admin/js/main.js"></script>
</body>

</html>
