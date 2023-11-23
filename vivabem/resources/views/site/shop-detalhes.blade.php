@extends('layout.layout')

@section('title','Shop Details')

@section('conteudo')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Shop Details</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="shop.html">SHOP</a></li>
                            <li class="active">SHOP DETAILS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Product Details
    ==============================-->
    <section class="product-details space-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-thumb">
                        <div class="img"><img src="assets/img/product/product-details1.png" alt="Product Image"></div>
                        <div class="product-tag">Sale</div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 align-self-center">
                    <div class="product-about">
                        <p class="price">$150.00 <del>$260.00</del></p>
                        <h2 class="product-title">Aero Rear Diffuser</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">2</span> customer reviews</span></div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">2</span> customer reviews)</a>
                        </div>
                        <p class="text">Syndicate customized growth strategies prospective human capital leverage other's optimal e-markets without transparent catalysts for change highly efficient methods of unit solutions.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-circle-check"></i>Lifetime structural, one year face finish warranty
                                </li>
                                <li><i class="far fa-circle-check"></i>Mapped from “Center Caps” under ” tment” tab
                                </li>
                                <li><i class="far fa-circle-check"></i>Fully copatible with OEM equipment
                                </li>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <button class="quantity-minus qty-btn"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="2" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <button class="btn">Buy It Now</button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">Wheel-fits-chevy-camaro</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Tires & Wheels</a></span>
                            <span>Tags: <a href="shop.html">Automotive parts</a><a href="shop.html">Wheels</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-area">
                <ul class="nav product-tab-style1" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="info-tab" data-bs-toggle="tab" href="#add_info" role="tab" aria-controls="add_info" aria-selected="false">Additional Information</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Reviews (03)</a>
                    </li>
                </ul>
                <div class="tab-content" id="productTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <p>Credibly negotiate emerging materials whereas clicks-and-mortar intellectual capital. Compellingly whiteboard client-centric sources before cross-platform schemas. Distinctively develop future-proof outsourcing without multimedia based portals. Progressively coordinate next-generation architectures for collaborative solutions. Professionally restore backward-compatible quality vectors before customer directed metrics. Holisticly restore technically sound internal or "organic" sources before client-centered human capital underwhelm holistic mindshare for prospective innovation.</p>
                        <p class="mb-n1">Seamlessly target fully tested infrastructures whereas just in time process improvements. Dynamically exploit team driven functionalities vis a vis global total linkage redibly synthesize just in time technology rather than open-source strategic theme areas.</p>
                    </div>
                    <div class="tab-pane fade" id="add_info" role="tabpanel" aria-labelledby="add_info">
                        <table class="woocommerce-table">
                            <tbody>
                                <tr>
                                    <th>Brand</th>
                                    <td>Jakuna</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>Yellow</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td>400 gm</td>
                                </tr>
                                <tr>
                                    <th>Battery</th>
                                    <td>Lithium</td>
                                </tr>
                                <tr>
                                    <th>Material</th>
                                    <td>Wood</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="comments-wrap mt-0">
                            <ul class="comment-list">
                                <li class="comment-item">
                                    <div class="post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/blog_comment1.png" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 JUN, 2023</span>
                                            <h3 class="name">Daniel Adam</h3>
                                            <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug-and-play markets whereas synergistic scenarios.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment-item">
                                            <div class="post-comment">
                                                <div class="comment-avater">
                                                    <img src="assets/img/blog/blog_comment2.png" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 JUN, 2023</span>
                                                    <h3 class="name">Zenelia Lozhe</h3>
                                                    <p class="text">Collaboratively empower multifunctional e-commerce for prospective application mlessly productivate</p>
                                                    <div class="reply_and_edit">
                                                        <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment-item">
                                    <div class="post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/blog_comment3.png" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 JUN, 2023</span>
                                            <h3 class="name">John Smith</h3>
                                            <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug-and-play markets whereas synergistic scenarios.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn">Reply <i class="far fa-reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- Comment end -->
                        <!-- Comment Form -->
                        <div class="comment-form bg-smoke2">
                            <div class="form-title">
                                <h3 class="blog-inner-title"> Leave a Reply</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Name" class="form-control style-white">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Email Address" class="form-control style-white">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Type Your Message" class="form-control style-white"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="btn">Get a Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
            Related Product
            ==============================-->
            <div class="space">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 text-center">
                        <div class="title-area text-center">
                            <span class="sub-title text-theme2">PRODUCTS</span>
                            <h2 class="sec-title">Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row global-carousel" id="productCarousel" data-slide-show="4" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1">

                    <div class="col-lg-3 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/product/1.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#" class="btn style2">Add to Cart</a>
                                </div>
                                <div class="product-tag">Sale</div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">Gym Bag</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/product/2.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#" class="btn style2">Add to Cart</a>
                                </div>
                                <div class="product-tag">Sale</div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">Treadmill</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/product/3.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#" class="btn style2">Add to Cart</a>
                                </div>
                                <div class="product-tag">Sale</div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">School Bag</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/product/4.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#" class="btn style2">Add to Cart</a>
                                </div>
                                <div class="product-tag">Sale</div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">Gym T-Shirt</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/product/5.png" alt="Product Image">
                                <div class="actions">
                                    <a href="#" class="btn style2">Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-details.html">Leg Press Machine</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    

@endsection
