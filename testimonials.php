<?php
include "includes/header.php";
?>

<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search..." />
                    <button type="submit"><i class="bx bx-search-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="page-banner-area" id="montgomery">
    <div class="container">
        <div class="page-banner-content">
            <h2>Happy Patient</h2>
            <ul class="pages-list">
                <li><a href="index.php">Home</a></li>
                <li>Happy Patient</li>
            </ul>
        </div>
    </div>
</div>




<section class="ptb-100">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class=" style124 " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true" class="buttontest"> <button type="button"
                    class="btn btn-light style">Testimonials</button></a>
        </li>
        <li class="nav-item">
            <a class=" style124 " id="pills-profile-tab" data-toggle="pill" href="#testmonial" role="tab"
                aria-controls="pills-profile" aria-selected="false" class="buttontest style-btns"><button type="button"
                    class="btn btn-light">Video
                    Testimonials</button></a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <section class="testimonial text-center">
                <div class="container">

                    <div class="heading white-heading">
                        Testimonial
                    </div>
                    <div id="testimonial4"
                        class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                        data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="testimonial4_slide">
                                    <img src="assets/images/kiran-test_11zon.webp" class="img-circle img-responsive" />
                                    <p> I strongly recommend Dr. Kiran , because his treatment is painless
                                        and
                                        friendly nature towards his patients.
                                        Great service. Doctor who cares about the patient and not the money.
                                        Office
                                        is modern.
                                    </p>
                                    <h4>Client 1</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide">
                                    <img src="assets/images/kiran-test2_11zon.webp" class="img-circle img-responsive" />
                                    <p>very experienced.I love this dentist office! It’s very clean,
                                        everyone is
                                        very polite, and they always make me laugh.
                                    </p>
                                    <h4>Client 2</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial4_slide">
                                    <img src="assets/images/kiran-test_11zon.webp" class="img-circle img-responsive" />
                                    <p>Everyone is friendly and they treat me with love. Dr. Kiran is kind,
                                        gentle,
                                        and compassionate. He is one sweet man!
                                    </p>
                                    <h4>Client 3</h4>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="testmonial" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
                <div id="video" class="owl-carousel owl-theme">
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                    <div class="item">
                        <iframe src="https://www.youtube.com/embed/V5sOfs_R0AA" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="videotest"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
include "includes/footer.php";
?>