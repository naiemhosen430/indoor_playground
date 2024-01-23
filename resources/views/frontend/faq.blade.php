@extends('layout.frontend')

@section('content')

<section class="col-12 px-0 ">

<!----------------------------------- faq header start here-------------------------------  -->
<section class="aboutusheader text-center p-5">
    <h1 class="text-light stylest-front py-2">Faqs</h1>
    <div class="py-2">
        <a class="footer-option-a px-2" href="/">Home</a>
        <a class="footer-option-a px-2" href="">Faqs</a>
    </div>
</section>
<!----------------------------------- faq header end here-------------------------------  -->


<!----------------------------------- faq main start here-------------------------------  -->
<section class="col-lg-8 m-auto faq-main py-lg-5 py-4">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p>
    <div class="py-5 faq-sub-main">
        <h1 class="stylest-front">What We Do</h1>



        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn w-100 text-left d-flex align-content-center border-0 p-0" id="option" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <input class="collaps-radio" type="radio" name="q1" id="q1">
                            <label class="py-2 px-2" for="q1">
                                <la class="collaps-header">    
                                    Collapsible Group Item #1
                                </h1>
                            </label>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn w-100 text-left d-flex align-content-center border-0 p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <input class="collaps-radio" type="radio" name="q2" id="q2">
                            <label class="py-2 px-2" for="q2">
                                <la class="collaps-header">    
						            How successful are children when they graduate from Kids?
                                </h1>
                            </label>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn w-100 text-left d-flex align-content-center border-0 p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <input class="collaps-radio" type="radio" name="q2" id="q2">
                            <label class="py-2 px-2" for="q2">
                                <la class="collaps-header">    
                                    Collapsible Group Item #2
                                </h1>
                            </label>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

        </div>

        <div class="py-5 mt-5">
            <a class="h4 text-info py-2 text-decoration-none" href="/contact">Can't find your answer?. Contact us now!</a>
        </div>

    </div>
</section>
<!----------------------------------- faq main end here-------------------------------  -->


</section>

@endsection