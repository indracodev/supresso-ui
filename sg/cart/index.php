<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <title>SUPRESSO · Cart</title>
</head>

<body id="cart">
    <header id="main-header" class="fixed-top">
        <?php include 'navbar.php' ?>
    </header>

    <main class="wrapper">
        <section>
            <div class="container">
                <a href="#" class="text-dark"><i class="bi bi-chevron-left"></i> Continue Shopping</a>
            </div>
        </section>

        <section>
            <form action="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-auto">
                            <h5 class="gotham-bold">
                                Shopping Cart [1]
                            </h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="d-none d-lg-block">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Item</th>
                                            <th scope="col"></th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row"><button class="btn btn-sm"><i class="bi bi-x-lg"></i></button></th>
                                            <td><img src="" class="img-fluid img-produk" alt=""></td>
                                            <td><span><strong>Sumatera Mandheling Coffee Capsules</strong><br><small>$ 7.50</small></span></td>
                                            <td>
                                                <div class="input-group">
                                                    <button class="btn"><i class="bi bi-dash-circle"></i></button>
                                                    <input type="text" value="1" min="1" max="100" class="form-control border-0">
                                                    <button class="btn"><i class="bi bi-dash-circle"></i></button>
                                                </div>
                                            </td>
                                            <td><span><small><del>$ 7.50</del></small><br><strong>$5.90</strong></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="col-lg-auto">
                            <div class="container-fluid">
                                <header><a href="#"><img src="" class="img-fluid w-100" alt=""></a></header>
                                <div class="row">
                                    <div class="col-6">Subtotal</div>
                                    <div class="col-6 text-right">$ 22.50</div>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                    <button class="btn btn-outline-dark">Apply Coupon</button>
                                </div>
                                <div class="row">
                                    <div class="col-6">Discount</div>
                                    <div class="col-6 text-right">$ 0.0</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">Total</div>
                                    <div class="col-6 text-right">$ 22.50</div>
                                </div>
                                <button class="btn btn-orange btn-block">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="related-products">
            <div class="container">
                <P class="text-center">BEFORE YOU COMPLETE YOUR PURCHASE, CONSIDER</P>
                <div id="related-slider1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="col product-item">
                                <div class="card card-produk">
                                    <div class="card-header">
                                        <a href="#">
                                            <img src="" class="card-img" alt="">
                                        </a>
                                        <div class="out-stock"><span>Out of stock</span></div>
                                        <label for="" class="discount">SAVE 20%</label>
                                        <button class="btn btn-cart"><i class="bi bi-cart4"></i></button>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title">Sumatra Mandheling Coffee Beans</h1>
                                        <p class="card-text">200g</p>
                                        <p class="card-text">
                                            <span>$ 13.59</span> <del>$ 15.10</del>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end product item -->
                        </div>

                    </div>

                    <div>
                        <div class="carousel-control carousel-control-prev" data-target="#related-slider1" data-slide="prev"><i class="bi bi-chevron-left"></i></div>
                        <div class="carousel-control carousel-control-next" data-target="#related-slider1" data-slide="next"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
    </main> <!-- end wrapper -->

    <?php include 'footer.php' ?>
    <!-- <script type="text/javascript">[].forEach.call(document.querySelectorAll("*"), function(a){a.style.outline="1px solid green";});</script> -->
</body>

</html>