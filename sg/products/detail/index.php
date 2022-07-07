<?php include '../../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php' ?>
    <title>SUPRESSO · Detail ?</title>
</head>

<body id="detail">
    <header id="main-header" class="fixed-top">
        <?php include 'navbar.php' ?>
    </header>

    <main class="wrapper">
        <section>
            <div class="container">
                <a href="#" class="text-dark"><i class="bi bi-chevron-left"></i> Back to product category</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="detail-img-produk mb-lg-5">
                            <div id="carouselProduk" class="carousel slide carousel-produk d-md-flex" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner mb-3 order-md-2">
                                    <div class="carousel-item active">
                                        <img src="img/produk1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/produk2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/produk3.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/produk4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <button class="carousel-control carousel-control-prev pt-0 align-items-center" type="button" data-target="#carouselProduk" data-slide="prev"><i class="bi bi-chevron-left"></i></button>
                                    <button class="carousel-control carousel-control-next pt-0 align-items-center" type="button" data-target="#carouselProduk" data-slide="next"><i class="bi bi-chevron-right"></i></button>
                                </div>
                                <ol class="carousel-indicators position-relative order-md-1 d-md-block">
                                    <li data-target="#carouselProduk" data-slide-to="0" class="active"><img src="img/produk1.png" class="card-img w-100"></li>
                                    <li data-target="#carouselProduk" data-slide-to="1"><img src="img/produk2.png" class="card-img w-100"></li>
                                    <li data-target="#carouselProduk" data-slide-to="2"><img src="img/produk3.png" class="card-img w-100"></li>
                                    <li data-target="#carouselProduk" data-slide-to="3"><img src="img/produk4.jpg" class="card-img w-100"></li>
                                </ol>
                            </div>
                        </div>

                        <div class="collapse">
                            <div class="section-review">
                                <h5 class="gotham-bold">Ratings & Reviews</h5>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="gotham-bold display-2 mb-0">3.0</h4>
                                        <p class="mb-0">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <i class="bi bi-star"></i>
                                        </p>
                                        <p class="mb-0">( 1 x Reviews)</p>
                                    </div>

                                    <div class="col">
                                        <ul class="progress-bar-list list-unstyled m-0">
                                            <li class="media">
                                                <span class="progress-bar-item gotham-medium">5</span>
                                                <div class="media-body progress rounded-pill">
                                                    <div class="progress-bar bg-dark w-100"></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <span class="progress-bar-item gotham-medium">4</span>
                                                <div class="media-body progress rounded-pill">
                                                    <div class="progress-bar bg-dark w-75"></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <span class="progress-bar-item gotham-medium">3</span>
                                                <div class="media-body progress rounded-pill">
                                                    <div class="progress-bar bg-dark w-50"></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <span class="progress-bar-item gotham-medium">2</span>
                                                <div class="media-body progress rounded-pill">
                                                    <div class="progress-bar bg-dark w-25"></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <span class="progress-bar-item gotham-medium">1</span>
                                                <div class="media-body progress rounded-pill">
                                                    <div class="progress-bar bg-dark w-0"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col">
                                        <hr>
                                        <div class="btn-group btn-group-sm mb-4" style="white-space: nowrap;">
                                            <button class="btn btn-outline-dark active">All Reviews</button>
                                            <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 5</button>
                                            <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 4</button>
                                            <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 3</button>
                                            <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 2</button>
                                            <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 1</button>
                                        </div>
                                        <div class="daftar-review">
                                            <ul class="list-unstyled">
                                                <li class="media">
                                                    <span class="media-user"><img src="img/user.jpg" class="img-fluid w-100"></span>
                                                    <div class="media-body">
                                                        <h5 class="media-title gotham-medium mb-1">Shandy Satrio Wissar</h5>
                                                        <p class="mb-1">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                            <i class="bi bi-star"></i>
                                                        </p>
                                                        <p class="mb-2">2022-02-22 18:02:26</p>
                                                        <p class="text-muted small">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="detail-spek-produk">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 border-0 pt-0">
                                    <strong class="spek-title gotham-bold">Aceh Gayo Coffee Beans</strong>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <span class="d-block mb-1">Coffee Form</span>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-dark active">Beans</button>
                                        <button class="btn btn-sm btn-outline-dark">Ground</button>
                                        <button class="btn btn-sm btn-outline-dark">Drip</button>
                                        <button class="btn btn-sm btn-outline-dark">Capsules</button>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <span class="d-block mb-1">Weight</span>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-dark active">250g</button>
                                        <button class="btn btn-sm btn-outline-dark">500g</button>
                                        <button class="btn btn-sm btn-outline-dark">1000g</button>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <span class="gotham-bold harga harga-diskon">$ 11.68</span>
                                    <span class="gotham-bold harga harga-coret px-3">$ 14.60</span>
                                    <span class="gotham-bold harga harga-normal d-none">$ 14.60</span>
                                    <span class="diskon">SAVE 10%</span>
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <div class="d-flex justify-content-between quantity">
                                        <span>Quantity</span>
                                        <form class="form-inline">
                                            <button class="btn p-0"><i class="bi bi-dash-circle"></i></button>
                                            <input value="1" min="1" max="100" class="form-control text-center rounded-0 p-0">
                                            <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                        </form>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 border-secondary pb-5">
                                    <button class="btn btn-orange d-flex justify-content-center align-items-center w-100">
                                        <span>Add To Cart</span> <img src="http://192.168.1.92/sgpoin/img/ikon-shopcart.svg" class="img-fluid mx-3" width="16" style="filter: invert(1);">
                                    </button>
                                </li>
                                <li class="list-group-item px-0 border-secondary">
                                    <button class="btn p-0 d-flex w-100 justify-content-between collapsed" data-toggle="collapse" data-target="#collapse3">
                                        <span>Details</span>
                                        <span><i class="bi bi-plus-lg"></i><i class="bi bi-dash-lg"></i></span>
                                    </button>
                                    <div class="collapse" id="collapse3">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 text-justify">
                                                <small>Aceh Gayo coffee is often used in most coffee shops commonly for cafe latte. It has light earthy notes with a mild body and bittersweet spicy chocolate taste. Soft in acidity, this coffee reveals some elegant caramel-fruity flavours, marrying a perfect combination of spicy and sweet. Its unique taste will make you crave for more.t</small>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <span>Spicy - Caramel & Chocolaty - Fruity - Slightly Earthy Notes</span>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="row row-cols-1 row-cols-md-2">
                                                    <div class="col mb-3 mb-md-0">
                                                        <span>Medium Acidity<br class="d-none d-lg-inline"></span><img src="img/bulat3.svg" class="img-fluid ml-3 ml-lg-0" width="85">
                                                    </div>
                                                    <div class="col">
                                                        <span>Mild Body<br class="d-none d-lg-inline"></span><img src="img/bulat3.svg" class="img-fluid ml-3 ml-lg-0" width="85">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="row row-cols-1 row-cols-md-2">
                                                    <div class="col mb-3 mb-md-0">Full City Roast</div>
                                                    <div class="col">100% Arabica Coffee</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="row row-cols-2">
                                                    <div class="col">Intensity</div>
                                                    <div class="col">6 / 12</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 border-secondary">
                                    <button class="btn p-0 d-flex w-100 justify-content-between collapsed" data-toggle="collapse" data-target="#collapse4">
                                        <span>Packaging Specification</span>
                                        <span><i class="bi bi-plus-lg"></i><i class="bi bi-dash-lg"></i></span>
                                    </button>
                                    <div class="collapse" id="collapse4">
                                        <div class="table-responsive mb-4">
                                            <table class="table table-sm text-center mt-4 mb-0" style="min-width: 820px;">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col" width="20%">COFFEE FORM</th>
                                                        <th scope="col" width="15%">WEIGHT</th>
                                                        <th scope="col" width="32%">CARTON CONFIGURATION</th>
                                                        <th scope="col" width="11%">20</th>
                                                        <th scope="col" width="11%">40</th>
                                                        <th scope="col" width="11%">40 HC</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">Cans</td>
                                                        <td>200g</td>
                                                        <td>12 Cans x 200g</td>
                                                        <td>200</td>
                                                        <td>400</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Cans</td>
                                                        <td>200g</td>
                                                        <td>12 Cans x 200g</td>
                                                        <td>200</td>
                                                        <td>400</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Cans</td>
                                                        <td>200g</td>
                                                        <td>12 Cans x 200g</td>
                                                        <td>200</td>
                                                        <td>400</td>
                                                        <td>400</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Cans</td>
                                                        <td>200g</td>
                                                        <td>12 Cans x 200g</td>
                                                        <td>200</td>
                                                        <td>400</td>
                                                        <td>400</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-lg-none">
                                        <button class="btn p-0 d-flex w-100 justify-content-between collapsed" data-toggle="collapse" data-target="#collapse2">
                                            <span>Reviews</span>
                                            <span><i class="bi bi-plus-lg"></i><i class="bi bi-dash-lg"></i></span>
                                        </button>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <button class="btn p-0 d-flex w-100 justify-content-between collapsed" data-toggle="collapse" data-target="#collapse1">
                                            <span>Reviews</span>
                                            <span><i class="bi bi-plus-lg"></i><i class="bi bi-dash-lg"></i></span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-review">
                    <h5 class="gotham-bold">Ratings & Reviews</h5>
                    <div class="row">
                        <div class="col">
                            <h4 class="gotham-bold display-2 mb-0">3.0</h4>
                            <p class="mb-0">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </p>
                            <p class="mb-0">( 1 x Reviews)</p>
                        </div>

                        <div class="col">
                            <ul class="progress-bar-list list-unstyled m-0">
                                <li class="media">
                                    <span class="progress-bar-item gotham-medium">5</span>
                                    <div class="media-body progress rounded-pill">
                                        <div class="progress-bar bg-dark w-100"></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="progress-bar-item gotham-medium">4</span>
                                    <div class="media-body progress rounded-pill">
                                        <div class="progress-bar bg-dark w-75"></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="progress-bar-item gotham-medium">3</span>
                                    <div class="media-body progress rounded-pill">
                                        <div class="progress-bar bg-dark w-50"></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="progress-bar-item gotham-medium">2</span>
                                    <div class="media-body progress rounded-pill">
                                        <div class="progress-bar bg-dark w-25"></div>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="progress-bar-item gotham-medium">1</span>
                                    <div class="media-body progress rounded-pill">
                                        <div class="progress-bar bg-dark w-0"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col">
                            <hr>
                            <div class="btn-group btn-group-sm mb-4" style="white-space: nowrap;">
                                <button class="btn btn-outline-dark active">All Reviews</button>
                                <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 5</button>
                                <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 4</button>
                                <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 3</button>
                                <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 2</button>
                                <button class="btn btn-outline-dark"><i class="bi bi-star-fill"></i> 1</button>
                            </div>
                            <div class="daftar-review">
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <span class="media-user"><img src="img/user.jpg" class="img-fluid w-100"></span>
                                        <div class="media-body">
                                            <h5 class="media-title gotham-medium mb-1">Shandy Satrio Wissar</h5>
                                            <p class="mb-1">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </p>
                                            <p class="mb-2">2022-02-22 18:02:26</p>
                                            <p class="text-muted small">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="related-products">
            <div class="container">
                <h5 class="gotham-bold">Related Products</h5>
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