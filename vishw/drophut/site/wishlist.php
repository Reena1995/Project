<?php
include_once('header.php');
?>
<head>
    <style>
        .aa-wishlist-table .aa-add-to-cart-btn {
    font-size: 10px;
    padding: 8px 10px;
  }
  .aa-wishlist-table .aa-add-to-cart-btn {
    font-size: 7px;
    padding: 8px 0;
  }

  #cart-view .cart-view-area .aa-wishlist-table .table thead tr th {
    font-size: 14px;
    padding: 10px 0;
  }
  .aa-wishlist-table .aa-add-to-cart-btn {
    font-size: 7px;
    min-width: auto;
    padding: 8px 0;
  }

  #cart-view .cart-view-area .aa-wishlist-table .table thead tr th {
    font-size: 14px;
    padding: 10px 0;
  }

  
    </style>
</head>
 
   <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li>wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
     
   
 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table aa-wishlist-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="assets\img\product\drone1.4.jpg" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Foldable GPS FPV</a></td>
                        <td>$106.76</td>
                        <td>In Stock</td>
                        <td><a href="cart" class="add-to-cart">Add To Cart</a></td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="assets\img\product\drone2.1.jpg" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Shift IZI Nano</a></td>
                        <td>$180.32</td>
                        <td>In Stock</td>
                        <td><a href="cart" class="add-to-cart">Add To Cart</a></td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="assets\img\product\drone3.1.jpg" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Consectetur adipisicing</a></td>
                        <td>$58.39</td>
                        <td>In Stock</td>
                        <td><a href="cart" class="add-to-cart">Add To Cart</a></td>
                      </tr>                     
                      </tbody>
                  </table>
                </div>
             </form>             
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <?php
 include_once('footer.php');
 ?>