<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <title>SUPRESSO · Our Collection</title>
</head>

<body id="products">
    <header id="main-header" class="fixed-top">
        <?php include 'navbar.php' ?>
    </header>

    <main class="wrapper">
        <section>
            <nav>
                <div class="container">
                    <div class="d-lg-flex justify-content-between">
                        <h5 class="gotham-bold">Coffee Collection</h5>
                        <button class="btn">Filter | Sort by</button>
                    </div>
                    <div class="collapse">
                        <form action="">
                            <div class="container-fluid">
                                <hr class="d-lg-none">
                                <div>
                                    <button class="btn btn-light btn-block">Reset</button>
                                    <button class="btn btn-orange btn-block">Apply</button>
                                </div>
                                <hr class="d-none d-lg-block">
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Collection</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Single Origin</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Luwak Prestige</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Organic</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Rainforest</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Gourmet</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">World Blend</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Type</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Arabica</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Robusta</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Blend</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Form</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Beans</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Ground</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Drip</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Capsules</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Packaging</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Can</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Pouch</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Drip</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Capsule</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Box</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Weight</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">50g</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">60g</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">100g</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">200g</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">500g</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">1000g</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto">
                                        <h5 class="gotham-medium">Sort by</h5>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Highest Prices</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Lowest Prices</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Latest Products</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Popular Products</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </section>

        <section id="product" class="product">
            <div class="container">
                <div class="row product-list">
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
        </section>
    </main> <!-- end wrapper -->

    <?php include 'footer.php' ?>
    <!-- <script type="text/javascript">[].forEach.call(document.querySelectorAll("*"), function(a){a.style.outline="1px solid green";});</script> -->
</body>

</html>