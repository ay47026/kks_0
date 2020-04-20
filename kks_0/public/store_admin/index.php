<!DOCTYPE html>
<html>

<head>

    <title>Krishna kirana store</title>
    <meta lang="en-us">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="Krishna kirana store,kirana store, grosary,food product, milk product ,online kirana store" />

    <meta name="description" content=" Krishna kirana store,big store , best store in kanpur, online kirana store">

    <meta name="author" content="Abhishek yadav">
    <meta charset="utf-8">

    <!-- title image -->
    <!--   <link rel="shortcut icon" href="images/ti2.jpg" type="image/x-icon" />
 -->
    <!-- bootstrap file -->
    <link rel="stylesheet" type="text/css" href="../comman_file/css/bootstrap.min.css">

    <!-- fontawesome file -->
    <link rel="stylesheet" type="text/css" href="../comman_file/css/all.css">

    <!-- main css file -->
    <link rel="stylesheet" type="text/css" href="css/index.css">

     <!-- bootstrap table file -->
    <link rel="stylesheet" type="text/css" href="../comman_file/css/bootstrap-table.min.css">
</head>

<body>




    <!-- MENU NAVIGATION FOR STORE_ADMIN-->

    <div class="main-page">

        <div class="header">

        </div>
        <!-- menu navigation -->
        <div class="flex-row d-flex justify-content-start align-item-center section">

            <!-- *****left section | menus **** -->
            <div class="left-section">

                <div class="nav flex-column nav-pills" id="l-s-menu-tab" role="tablist" aria-orientation="vertical">

                    <!-- YOUR PRODUCT TAB -->
                    <a class="nav-link active" id="products-tab" data-toggle="pill" href="#products" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="fas fa-shopping-cart mr-2"></i>Products</a>

                    <!-- YOUR SALE tab-->
                    <a class="nav-link" id="sale-tab" data-toggle="pill" href="#sale" role="tab" aria-controls="sale" aria-selected="false"> Sale</a>


                </div>
            </div>
            <!-- ****left section end ***-->

            <!-- **right sectiion start**** -->
            <div class="right-section">

                <div class="tab-content w-100 h-100" id="v-pills-tabContent">

                    <!-- product tab content field  START-->
                    <div class="tab-pane fade show active w-100 h-100" id="products" role="tabpanel" aria-labelledby="products-tab">

                   

                        <!-- horizontal nav tabs -->
                        <nav>

                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <span class="title-tab-name"><i>Products ::</i></span>

                                <!-- add catagory tab-->
                                <a class="nav-item nav-link active" id="add-catagory-tab" data-toggle="tab" href="#add-catagory" role="tab" aria-controls="add-catagory" aria-selected="true">Add catagory</a>

                                <!-- add brand tab -->
                                <a class="nav-item nav-link" id="add-brand-tab" data-toggle="tab" href="#add-brand" role="tab" aria-controls="add-brand" aria-selected="false">Add brand</a>

                                <!-- add product tab -->
                                <a class="nav-item nav-link" id="add-product-tab" data-toggle="tab" href="#add-product" role="tab" aria-controls="add-product" aria-selected="false">Add product</a>

                                <!-- view products tab -->
                                <a class="nav-item nav-link" id="view-product-tab" data-toggle="tab" href="#view-product" role="tab" aria-controls="view-product" aria-selected="false">View products</a>
                            </div>

                        </nav>


                        <div class="tab-content" id="nav-tabContent">

                            <!-- /////////////////////////////////////////// -->
                            <!-- add catagory content field -->
                            <div class="tab-pane fade   w-100 h-100 p-2" id="add-catagory" role="tabpanel" aria-labelledby="add-catagory-tab">

                               <?php include('tabs/product/add_catagory_include.php') ;?>
                              

                            </div>

                            <!-- /////////////////////////////////////////////////////////////// -->
                            <!-- add brand content field -->
                            <div class="tab-pane fade w-100 h-100 p-2" id="add-brand" role="tabpanel" aria-labelledby="add-brand-tab">

                                 <?php include('tabs/product/add_brand_include.php') ;?>

                            </div>

                            <!-- /////////////////////////////////////////////////////////////// -->
                            <!-- add product content field -->
                            <div class="tab-pane fade  w-100 h-100 p-2" id="add-product" role="tabpanel" aria-labelledby="add-product-tab">
                              
                               <?php include('tabs/product/add_product_include.php') ;?>
                              
                            </div>

                      

                        <!-- view product content field -->
                        <div class="tab-pane show active fade w-100 h-100 p-2" id="view-product" role="tabpanel" aria-labelledby="view-product-tab">
                           <?php include('tabs/product/view_product_include.php') ;?>
                        </div>

                        

                    </div>


                    </div>

                <!-- product content field end -->
           

                <!-- yoru sale tab content field -->
                <div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">

                    <h3>Sale</h3>

                </div>


            </div>
        </div>
        <!-- ****right section end*** -->

</div>






    <!-- displaya response  -->

   <!--  <div class="alert  response-alert" role="alert">
        Please present te response here
    </div> -->










    <!-- ***********script links******** -->

    <!-- jquery -->
    <script src="../comman_file/js/jquery-3.4.1.min.js"></script>

    <!-- popper -->
    <script src="../comman_file/js/popper.min.js"></script>

    <!-- bootstrap  -->
    <script src="../comman_file/js/bootstrap.min.js"></script>

     <!-- bootstrap table  -->
    <script src="../comman_file/js/bootstrap-table.min.js"></script>

    <!-- main js file -->
    <script src="js/index.js"></script>




    <script>
        $(document).ready(function() {

        });

    </script>
</body>

</html>
