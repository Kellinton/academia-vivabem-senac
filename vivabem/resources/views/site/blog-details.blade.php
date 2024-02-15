@extends('layout.layout')

@section('title','Blog Details')

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
                        <h1 class="breadcumb-title">Blog Details</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="blog.html">BLOG</a></li>
                            <li class="active">BLOG DETAILS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="blog-single">
                        <div class="blog-thumb">
                            <img src="assets/img/blog/blog_details1_1.png" alt="img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog-details.html"><i class="far fa-clock"></i>25 JUNE, 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>POST BY: ADMIN</a>
                            </div>
                            <h2 class="blog-title">Strategies for Maximizing Your Workouts</h2>
                            <p class="mb-30">Our gym team members are not only passionate about fitness but also about fostering a sense of community within our gym. They create a warm and inclusive environment where members feel welcomed, supported, and connected. They organize group activities, challenges, and events that bring our members together, encouraging camaraderie, friendly competition, and mutual support.
                            </p>
                            <p>We understand that every individual is unique, with different goals, abilities, and preferences. Our gym team members excel in providing a personalized approach to your fitness journey. They take the time to listen, assess, and customize your workouts and programs to ensure they align with your objectives and fit your lifestyle. This personalized attention allows for a more effective and rewarding fitness</p>
                            <blockquote>
                                <p>We offer discounted membership options for students and seniors who want to prioritize their health</p>
                                <cite>William Benjamin</cite>
                                <span class="desig">Top Author</span>
                            </blockquote>
                            <p class="mb-30">Our standard membership provides access to our gym facilities during regular operating hours. This option is ideal for individuals who prefer independent workouts and want to make use of our state-of-the-art equipment and amenities. For those seeking an elevated gym experience, our premium membership offers additional perks and benefits. Along with access to all our gym facilities, premium members enjoy exclusive privileges such as priority class reservations, complimentary towel service, and access to specialized training programs or workshops.</p>
                            <p class="mb-35">We understand the importance of fitness for the whole family. Our family membership option allows multiple family members to join under a single membership, making it a cost-effective choice. This option encourages a healthy and active lifestyle for everyone in your household.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="thumb mb-sm-0 mb-30">
                                        <img src="assets/img/blog/blog_details1_2.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="thumb">
                                        <img src="assets/img/blog/blog_details1_3.png" alt="img">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-35">We offer discounted membership options for students and seniors who want to prioritize their health and fitness. These specialized memberships are designed to make fitness accessible and affordable for these specific groups. If you're visiting the area or want to bring a friend along for a workout, we offer day passes and guest passes. These options allow temporary access to our gym facilities and give you a chance to experience what Fitmas has to offer.</p>
                        </div>
                        <div class="share-links clearfix ">
                            <span class="share-links-title">Tags:</span>
                            <div class="tagcloud">
                                <a href="blog.html">ADVICE</a>
                                <a href="blog.html">FIT</a>
                                <a href="blog.html">AUTHOR</a>
                                <a href="blog.html">FAMILY</a>
                            </div>
                        </div>
                        <div class="blog-author bg-smoke2">
                            <div class="auhtor-img">
                                <img src="assets/img/blog/blog-author.png" alt="Blog Author Image">
                            </div>
                            <div class="media-body">
                                <h3 class="author-name"><a href="team-details.html">William Benjamin</a></h3>
                                <span class="author-desig">Author</span>
                                <p class="author-text">We offer discounted membership options for students and seniors who want to prioritize their health and fitness. These specialized in memberships are designed</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-wrap">
                        <h2 class="blog-inner-title">3 Comments</h2>
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
                        <!-- Comment Form -->
                        <div class="comment-form bg-smoke2 mb-30">
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
                    </div> <!-- Comment end -->

                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post1.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Essential Strategies for Maximizing Your</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post2.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Functional training into
                                            your Routine...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post3.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Nutrition Tips Advice for Gym Goers</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Training</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Mental Yoga Training</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit Body Class</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Project Gallery</h3>
                            <div class="insta-feed">
                                <a href="blog.html"><img src="assets/img/widget/widget1-1.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-2.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-3.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-4.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-5.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-6.png" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">ADVICE</a>
                                <a href="blog.html">FIT</a>
                                <a href="blog.html">AUTHOR</a>
                                <a href="blog.html">FAMILY</a>
                                <a href="blog.html">Fitmas</a>
                                <a href="blog.html">HEALTH</a>
                                <a href="blog.html">FITNESS</a>
                                <a href="blog.html">GYM</a>
                                <a href="blog.html">JUDGE</a>
                                <a href="blog.html">SOLUTION</a>
                                <a href="blog.html">TRAINING</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>   

@endsection

