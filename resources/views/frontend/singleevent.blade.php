@extends('layout.frontend')

@section('content')


<section class="col-12 py-5 m-auto">

<!----------------------------------- Events header start here-------------------------------  -->
<section class="aboutusheader text-center p-5">
    <h1 class="text-light">Events</h1>
    <div>
        <a class="footer-option-a px-2 text-light" href="/">Home</a>
        <a class="footer-option-a px-2 text-light" href="">Events</a>
    </div>
</section>
<!----------------------------------- Events header end here-------------------------------  -->

<!----------------------------------- event start here-------------------------------  -->
<section class=" event py-5 col-10 m-auto row">
    <div class="col-8">
        <img class="w-100" src="https://html.rometheme.pro/kids/images/event-preview-img.jpg" alt="">
        <h3 class="py-2">English Day on Carfree day</h3>
        <h5>March 19, 2016 / 08:00 am - 10:00 am</h5>
        <p class="py-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </p>
        <p class="py-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="py-4 px-4 left-border">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <div class="py-4">
            <h3 class="py-2">Research Beyond The Business Plan</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn w-100 text-left" id="option" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <input type="radio" name="option" id="option">
                            Collapsible Group Item #1
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
                        <button class="btn w-100 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <input type="radio" name="option" id="option">
                            Collapsible Group Item #2
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
    </div>

    <div class="col-4">
        <div>
            <h1 class="p-2 border-redius-top h4 px-4 bg-dark text-light">Venue</h1>
            <div class="p-2">
                <p class="m-0">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</p>
                <p class="m-0">Phone</p>
                <p class="m-0 text-info">074574217447</p>
                <p class="m-0">Website:</p>
                <a class="text-info text-decoration-none" href="/">http://www.website.com</a>
            </div>
        </div>

        <div class="py-4">
            <h1 class="p-2 h4 px-4 bg-dark text-light">etail</h1>
            <div class="p-2">
                <p class="m-0">Start:</p>
                <p class="m-0 text-info">July 16 @ 11:00 am</p>
                <p class="m-0">End:</p>
                <p class="m-0 text-info">July 29 @ 4:00 pm</p>
            </div>
        </div>

        <div class="py-4">
            <h1 class="p-2 h4 px-4 bg-dark text-light">Organizer</h1>
            <div class="p-2">
                <p class="m-0">Phone:</p>
                <p class="m-0 text-info">074574217447</p>
                <p class="m-0">Website::</p>
                <p class="m-0 text-info">http://www.website.com</p>
            </div>
        </div>

        <div class="py-4 text-center ">
            <a class="event-join-a" href="/">Join</a>
        </div>
    </div>
</section>
<!----------------------------------- event end here-------------------------------  -->

</section>

@endsection