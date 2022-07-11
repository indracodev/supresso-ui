<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../meta.php' ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $supresso ?>assets/css/product.css">
    <title>SUPRESSO · Our Collection</title>
</head>

<body id="products">
    <header id="main-header" class="fixed-top">
        <?php include '../navbar.php' ?>
    </header>

    <main class="wrapper">
        <section class="pt-3 mb-5 pt-lg-0">
            <nav>
                <div class="container">
                    <div class="d-lg-flex justify-content-between">
                        <h4 class="gotham-bold mb-0">Coffee Collection</h4>
                        <button class="btn p-0 collapsed" id="open-filter" data-toggle="collapse" data-target="#filter-collapse">Filter | Sort by <i class="bi bi-chevron-down"></i><i class="bi bi-chevron-up"></i></button>
                    </div>

                    <div class="collapse" id="filter-collapse">
                        <form action="" class="pt-3">
                            <div class="container-fluid border border-secondary py-3 rounded">
                                <div class="mb-4 mb-lg-0">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-auto mb-3 mb-lg-0">
                                            <button class="btn btn-sm btn-light rounded mb-1"><small>Single Origin <i class="bi bi-x-circle"></i></small></button>
                                            <button class="btn btn-sm btn-light rounded mb-1"><small>World Blend <i class="bi bi-x-circle"></i></small></button>
                                            <button class="btn btn-sm btn-light rounded mb-1"><small>Beans <i class="bi bi-x-circle"></i></small></button>
                                            <button class="btn btn-sm btn-light rounded mb-1"><small>Popular Products <i class="bi bi-x-circle"></i></small></button>
                                        </div>

                                        <div class="col-12 d-lg-none"><hr class="mt-0"></div>

                                        <div class="col-lg-4">
                                            <div class="btn-group w-100">
                                                <button class="btn btn-light rounded mr-1">Reset</button>
                                                <button class="btn btn-orange rounded ml-1">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="d-none d-lg-block">
                                
                                <div class="row justify-content-lg-around">
                                    <div class="col-6 col-md-4 col-lg-auto mb-4 mb-xl-0">
                                        <h6 class="gotham-bold mb-3">Collection</h6>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
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
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                                <label class="form-check-label" for="defaultCheck1">World Blend</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-auto mb-4 mb-xl-0">
                                        <h6 class="gotham-bold mb-3">Type</h6>
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

                                    <div class="col-6 col-md-4 col-lg-auto mb-4 mb-xl-0">
                                        <h6 class="gotham-bold mb-3">Form</h6>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
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

                                    <div class="col-6 col-md-4 col-lg-auto mb-4 mb-xl-0">
                                        <h6 class="gotham-bold mb-3">Packaging</h6>
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

                                    <div class="col-6 col-md-4 col-lg-auto mb-4 mb-xl-0">
                                        <h6 class="gotham-bold mb-3">Weight</h6>
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

                                    <div class="col-auto px-0 d-none d-lg-block border-left"></div>

                                    <div class="col-12 col-lg-auto mb-4 mb-xl-0">
                                        <hr class="mt-0 d-lg-none">
                                        <h6 class="gotham-bold mb-3">Sort by</h6>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">Highest Prices</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">Lowest Prices</label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                <div class="row product-list row-cols-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 mr-0">
                    <div class="col product-item pr-0">
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
                                <h5 class="card-title">Sumatra Mandheling Coffee Beans</h5>
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

    <?php include '../footer.php' ?>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#nav-coffee-mobile, #nav-coffee-desktop').addClass('active');
        
        });
    </script>
    <!-- <script type="text/javascript">[].forEach.call(document.querySelectorAll("*"), function(a){a.style.outline="1px solid green";});</script> -->
</body>

</html>