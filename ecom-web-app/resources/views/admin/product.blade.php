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


    <style type="text/css">
    
    

    .div_center h1{
        font-size: 40px;
    line-height: 50px;
    color: rgb(250, 250, 250);
    font-weight: 500;
    padding-bottom: 40px; 
    }
    .div_center{
        
    text-align: center;
    }

    .div_center input{
        color: black;
    }

    
    .text-color{
      color: black;
    }
    .div_center div{
      padding-bottom: 15px;
    }
    #submit{
      color: #fff;
    }

    label{
      display: inline-block;
      width: 200px;
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
                    <div class="div_center">
                        <h1>Add Product</h1>
                        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                              
                          @csrf

                          <div> 
                                <label>Product Title</label>
                                <input type="text" name="title" placeholder="Write a Title" required="">
                              </div>

                              <div> 
                                <label>Description</label>
                                <input type="text" name="description" placeholder="Write a Description">
                              </div>

                              
                              
                              <div> 
                                <label>Catagory</label>
                                <select class="text-color"  name="catagory" required="">
                                  <option value="" selected=""  >Add a catagory here</option>
                                  @foreach($catagory as $catagory)
                                  <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                                 @endforeach
                                </select>
                             </div>
                             
                             <div> 
                              <label>Quantity</label>
                              <input type="number" name="quantity" min=0 required="">
                            </div>

                             <div> 
                                <label>Price</label>
                                <input type="number" name="price" placeholder="100" required="">
                              </div>

                              <div> 
                                <label>Image</label>
                                 <input type="file" name="image" required="">
                               </div>

                              <div> 
                                <label></label>
                                 <input class="btn btn-primary" type="submit" value="Add product"  id="submit">
                               </div>     
                               
                              </form>
                    </div>
                  
            </div>
        </div>
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