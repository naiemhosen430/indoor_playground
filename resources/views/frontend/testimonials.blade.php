@extends('layout.frontend')

@section('content')

<section class="col-12 px-0 ">

<!----------------------------------- Testimonials header start here-------------------------------  -->
<section class="aboutusheader text-center p-5">
    <h1 class="text-light stylest-front py-2">Testimonials</h1>
    <div class="py-2">
        <a class="footer-option-a px-2" href="/">Home</a>
        <a class="footer-option-a px-2" href="">Testimonials</a>
    </div>
</section>
<!----------------------------------- Testimonials header end here-------------------------------  -->


<!----------------------------------- main header start here-------------------------------  -->
<section class="col-lg-10 m-auto py-5 row">

    <div class="col-lg-5 col-12 m-auto p-lg-0 rounded-2 py-4 row">
        <div class="col-lg-3">
            <img class="w-100 full-rounded d-block" src="https://html.rometheme.pro/kids/images/team-img1.jpg" alt="">
        </div>

        <div class="col-lg-9 py-2 client-single-box">
            <p clas="py-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</p>
            <h4>--John Doel</h4>
            <h6 class="text-info">Contractor</h6>
        </div>
    </div>

    <div class="col-lg-5 col-12 m-auto p-lg-0 rounded-2 py-4 row">
        <div class="col-lg-3">
            <img class="w-100 full-rounded d-block" src="https://html.rometheme.pro/kids/images/team-img2.jpg" alt="">
        </div>

        <div class="col-lg-9 py-2 client-single-box">
            <p clas="py-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</p>
            <h4>--John Doel</h4>
            <h6 class="text-info">Contractor</h6>
        </div>
    </div>

    <div class="col-lg-5 col-12 m-auto p-lg-0 rounded-2 py-4 row">
        <div class="col-lg-3">
            <img class="w-100 full-rounded d-block" src="https://html.rometheme.pro/kids/images/team-img3.jpg" alt="">
        </div>

        <div class="col-lg-9 py-2 client-single-box">
            <p clas="py-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</p>
            <h4>--John Doel</h4>
            <h6 class="text-info">Contractor</h6>
        </div>
    </div>

    <div class="col-lg-5 col-12 m-auto p-lg-0 rounded-2 py-4 row">
        <div class="col-lg-3">
            <img class="w-100 full-rounded d-block" src="https://html.rometheme.pro/kids/images/team-img4.jpg" alt="">
        </div>

        <div class="col-lg-9 py-2 client-single-box">
            <p clas="py-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</p>
            <h4>--John Doel</h4>
            <h6 class="text-info">Contractor</h6>
        </div>
    </div>

</section>
<!----------------------------------- main header end here-------------------------------  -->



<!----------------------------------- Testimonials slider start here-------------------------------  -->
<section class="text-center py-5">
    <div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-lg-8 col-12 p-2 m-auto testimonials-slider-item" alt="First slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit, aperiam at iste facere repellendus exercitationem porro dicta reprehenderit ut corrupti aspernatur</p>
                        <img class="testimonials-slider-img" src="https://html.rometheme.pro/kids/images/team-img2.jpg" alt="">
                        <h4>---MD Naiem Hosen</h4>
                        <h6>Web developer</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-8 col-12 p-2 m-auto testimonials-slider-item" alt="First slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit, aperiam at iste facere repellendus exercitationem porro dicta reprehenderit ut corrupti aspernatur</p>
                        <img class="testimonials-slider-img" src="https://html.rometheme.pro/kids/images/team-img2.jpg" alt="">
                        <h4>---MD Naiem Hosen</h4>
                        <h6>Web developer</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-8 col-12 p-2 m-auto testimonials-slider-item" alt="First slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit, aperiam at iste facere repellendus exercitationem porro dicta reprehenderit ut corrupti aspernatur</p>
                        <img class="testimonials-slider-img" src="https://html.rometheme.pro/kids/images/team-img2.jpg" alt="">
                        <h4>---MD Naiem Hosen</h4>
                        <h6>Web developer</h6>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>
<!----------------------------------- Testimonials slider end here-------------------------------  -->

</section>

@endsection