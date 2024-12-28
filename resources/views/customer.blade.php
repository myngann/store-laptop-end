<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NovaLap | Khách hàng</title>
<!-- Thêm CSS của DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<!-- DataTables responsive CSS -->
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- DataTables Buttons CSS -->
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Khách hàng</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NovaLap</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="order" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Đơn hàng
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Hóa đơn
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
               Sản phẩm
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customer" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Khách hàng
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="employee" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Nhân viên
                
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-retweet"></i>
              <p>
                Giao dịch
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhập hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chuyển kho</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Kho hàng
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="discount" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Khuyến mại
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Chi nhánh
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="account" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Tài khoản
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
          </li>
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Khách hàng</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Quản lý khách hàng</h3>
                  
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    
                  <div class="row mb-3">
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="filterEngine" placeholder="Tìm kiếm">
                    </div>
                    <div class="col-md-3">
                      <button class="btn btn-success" id="searchBtn">Tìm kiếm</button>
                    </div>
                  </div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      
                      <th>Mã khách hàng</th>
                      <th>Họ tên</th>
                      <th>Giới tính  </th>
                      <th>Ngày sinh</th>
                      <th>SĐT</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số đơn đã đặt</th>
                    </tr>
                    
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>12/12/1999</td>
                        <td>078967856</td>
                        <td>cm@gm.com</td>
                        <td>Quận 1</td>
                        <td>12</td>
                        <td>
                          <button class="btn btn-success btn-sm" onclick="opencustomerModal({ id: 1 })">Sửa</button>
                          <button class="btn btn-danger btn-sm" onclick="confirmDeletecustomer(1)">Xóa</button>
                        </td> 
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>12/12/1999</td>
                        <td>078967856</td>
                        <td>cm@gm.com</td>
                        <td>Quận 1</td>
                        <td>12</td>
                        <td>
                          <button class="btn btn-success btn-sm" onclick="opencustomerModal({ id: 1 })">Sửa</button>
                          <button class="btn btn-danger btn-sm" onclick="confirmDeletecustomer(1)">Xóa</button>
                        </td> 
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>12/12/1999</td>
                        <td>078967856</td>
                        <td>cm@gm.com</td>
                        <td>Quận 1</td>
                        <td>12</td>
                        <td>
                          <button class="btn btn-success btn-sm" onclick="opencustomerModal({ id: 1 })">Sửa</button>
                          <button class="btn btn-danger btn-sm" onclick="confirmDeletecustomer(1)">Xóa</button>
                        </td> 
                       
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">NovaLap</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
  <!-- Modal Thêm khách hàng mới -->
 <!-- Modal Thêm/Sửa khách hàng -->
 <div class="modal fade" id="addcustomerModal" tabindex="-1" role="dialog" aria-labelledby="addcustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addcustomerModalLabel">Thông tin khách hàng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addcustomerForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="makhachhang">Mã khách hàng</label>
                  <input type="text" class="form-control" id="makhachhang" placeholder="Mã khách hàng" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="gender">Giới tính</label>
                  <select class="form-control" id="gender">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Họ tên</label>
                  <input type="text" class="form-control" id="name" placeholder="Nhập họ tên khách hàng">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sdt">SĐT</label>
                  <input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Nhập Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="note">Ghi chú</label>
                  <input type="text" class="form-control" id="note" placeholder="Ghi chú">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" class="form-control" id="address" placeholder="Địa chỉ">
                </div>
              </div>
              
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="savecustomerBtn">Lưu khách hàng</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal xóa khách hàng mới -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmModalLabel">Xác nhận xóa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa khách hàng này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
      </div>
    </div>
  </div>
</div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>

<script>
    let customerToDelete = null;
  
    // Hàm mở modal: Thêm mới hoặc sửa khách hàng
    function opencustomerModal(customer = null) {
      if (customer) {
        // Điền thông tin khi sửa
        document.getElementById('makhachhang').value = customer.makhachhang || '';
        document.getElementById('name').value = customer.name || '';
        document.getElementById('gender').value = customer.gender || '';
        document.getElementById('sdt').value = customer.sdt || '';
        document.getElementById('email').value = customer.email || '';
        document.getElementById('note').value = customer.note || '';
        document.getElementById('address').value = customer.address || '';
  
        // Cập nhật giao diện
        document.getElementById('addcustomerModalLabel').innerText = 'Sửa khách hàng';
        document.getElementById('savecustomerBtn').innerText = 'Cập nhật khách hàng';
        document.getElementById('savecustomerBtn').setAttribute('onclick', `updatecustomer(${customer.id})`);
      } else {
        // Reset form khi thêm mới
        document.getElementById('addcustomerForm').reset();
  
        // Cập nhật giao diện
        document.getElementById('addcustomerModalLabel').innerText = 'Thêm khách hàng mới';
        document.getElementById('savecustomerBtn').innerText = 'Lưu khách hàng';
        document.getElementById('savecustomerBtn').setAttribute('onclick', 'savecustomer()');
      }
  
      $('#addcustomerModal').modal('show');
    }
  
    // Thu thập dữ liệu từ form
    function collectFormData() {
      return {
        makhachhang: document.getElementById('makhachhang').value,
        name: document.getElementById('name').value,
        gender: document.getElementById('gender').value,
        sdt: document.getElementById('sdt').value,
        email: document.getElementById('email').value,
        note: document.getElementById('note').value,
        address: document.getElementById('address').value,
      };
    }
  
    // Lưu khách hàng mới
    function savecustomer() {
      const customerData = collectFormData();
      console.log('Đang lưu khách hàng mới:', customerData);
  
      // Xử lý ảnh khách hàng (nếu có)
      const imageInput = document.getElementById('customerImage');
      if (imageInput.files.length > 0) {
        const file = imageInput.files[0];
        console.log('Ảnh khách hàng:', file.name);
      }
  
      alert('Khách hàng mới đã được lưu!');
      $('#addcustomerModal').modal('hide');
    }
  
    // Cập nhật khách hàng
    function updatecustomer(id) {
      const customerData = collectFormData();
      console.log('Đang cập nhật khách hàng ID:', id, 'Dữ liệu:', customerData);
      alert('Khách hàng đã được cập nhật!');
      $('#addcustomerModal').modal('hide');
    }
  
    // Mở modal xác nhận xóa
    function confirmDeletecustomer(customerId) {
      customerToDelete = customerId;
      $('#deleteConfirmModal').modal('show');
    }
  
    // Xóa khách hàng
    function deletecustomer() {
      if (customerToDelete) {
        console.log('Đang xóa khách hàng ID:', customerToDelete);
        alert('Khách hàng đã được xóa!');
        $('#deleteConfirmModal').modal('hide');
        customerToDelete = null;
      }
    }
  </script>

  

  
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
  @csrf
</form>

</body>
</html>