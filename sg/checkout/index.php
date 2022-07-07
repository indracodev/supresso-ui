<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <title>SUPRESSO · Checkout</title>
</head>

<body id="checkout">
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
                            <h5 class="gotham-bold">Checkout</h5>
                            <h5>Let us know more about you!<br>OR <a href="#" style="color: #fd4f00;">Login with your account</a></h5>

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-controdl">
                            </div>

                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" class="form-controdl">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-controdl">
                            </div>

                            <h5>Where would you like your item(s) to be sent?</h5>

                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Address 2 (optional)</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">City</label>
                                <select name="" id="" class="custom-select">
                                    <option>Select an option</option>
                                    <option value="1" selected>Singapore</option>
                                    <option value="2">Indonesia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Province</label>
                                <select name="" id="" class="custom-select">
                                    <option>Select an option</option>
                                    <option value="1" selected>Singapore</option>
                                    <option value="2">Indonesia</option>
                                </select>
                            </div>

                            <div class="form-grouo">
                                <label for="">Country/ Region</label>
                                <input type="text" class="form-control" placeholder="Indonesia">
                            </div>
                        </div>

                        <div class="col-lg-auto">
                            <div class="container-fluid">
                                <header>
                                    <h5>Summary [1]</h5>
                                </header>

                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-5"><img src="" class="img-fluid w-100" alt=""></div>
                                    <div class="col-7"><span><strong>Sumatra Mandheling Coffee Beans</strong><br><small>QTY. 1</small></span></div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-6">Subtotal</div>
                                    <div class="col-6 text-right">$ 22.50</div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Jalur Nugraha Ekakurir (JNE) <br><i>[<strong>REG</strong>] Layanan Reguler</i> | Rp 7.000,- | 2-3 Hari Kerja
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Jalur Nugraha Ekakurir (JNE) <br><i>[<strong>YES</strong>] Yakin Esok Sampai</i> | Rp 7.000,- | 2-3 Hari Kerja
                                        </label>
                                    </div>
                                </div>

                                <hr>
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

                            <div>
                                <p>Additional information</p>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <h5 class="gotham-bold">Payment Method</h5>

                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                                    <label class="form-check-label" for="exampleRadios3">Bank Transfer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">Credit Card</label>
                                </div>
                                <hr>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                    <label class="form-check-label" for="defaultCheck1">
                                        I want the latest news, innovations and offers from Supresso
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        I accept <a href="" style="color: #fd4f00;"><u>Supresso Terms & Conditions</u></a>
                                    </label>
                                </div>
                            </div>

                            <a href="#" class="btn btn-orange btn-block">Proceed to Payment</a>
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