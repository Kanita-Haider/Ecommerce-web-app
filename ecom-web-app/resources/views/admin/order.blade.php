<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecommerce Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style>

.h2_font{
        font-size:40px;
        padding-bottom: 40px;
    }
      table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
      }
  
      table, th, td {
        border: 1px solid #ddd;
      }
  
      th, td {
        padding: 8px;
      }
  
      th {
        font-weight: bold;
        background-color: #fff;
        color: #000;
      }
  
      tr:hover {
        background-color: #444;
      }
  
     
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');    
      <!-- partial -->
      @include('admin.header'); 
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                
                    <h1 class="h2_font"  >Order Details</h1>
                    <table>
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Name</th>
                          <th>User ID</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Product ID</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Payment Status</th>
                          <th>Delivery Status</th>
                          <th>Image</th>
                          <th>Delivery & Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($order as $order)
                        <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->name}}</td>
                          <td>{{$order->user_id}}</td>
                          <td>{{$order->phone}}</td>
                          <td>{{$order->address}}</td>
                          <td>{{$order->product_id}}</td>
                          <td>{{$order->quantity}}</td>
                          <td>{{$order->price}}</td>
                          <td>{{$order->payment_status}}</td>
                          <td>{{$order->delivery_status}}</td>
                          <td><img style="width:auto; height:auto; border-radius:10px;  " src="/product/{{$order->image}}"></td>
                         
                         
                          <td>
                            @if($order->delivery_status=='processing')

                            <a href="{{url('delivered',$order->id)}}" class="btn btn-primary" >Delivered</a>
                         
                            @else
                            <p style="color: rgb(27, 236, 27);">Delivered</p>

                            @endif
                        </td>
                        
                        </tr>

                        @endforeach
                        
                        <!-- Add more rows as needed -->
                      </tbody>
                    </table>
                  

            </div>
        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
     <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>