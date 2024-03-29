@extends('layout.frontend')

@section('content')

<section class="col-12 px-0 ">

<!----------------------------------- contract header start here-------------------------------  -->
<section class="aboutusheader text-center p-5">
    <h1 class="text-light stylest-front py-2">Contact</h1>
    <div class="py-2">
        <a class="footer-option-a px-2" href="/">Home</a>
        <a class="footer-option-a px-2" href="">Contact</a>
    </div>
</section>
<!----------------------------------- contract header end here-------------------------------  -->

<!-- ------------------------------------- main start here------------------------------------- -->
<section class="col-lg-8 m-auto py-5">
    <form action="/sendmessage" method="post">
        <div class="d-lg-flex align-content-center py-lg-2">
            <input class="p-2 px-4 rounded-2 h5 input-field-color w-50" type="text" required name="name" placeholder="Enter your name">
            <input class="p-2 px-4 rounded-2 h5 input-field-color w-50" type="email" required name="email" placeholder="Enter your email">
        </div>

        <div class="d-lg-flex align-content-center py-lg-2">
            <input class="p-2 px-4 rounded-2 h5 input-field-color w-50" type="text" required name="subject" placeholder="Subject">
            <input class="p-2 px-4 rounded-2 h5 input-field-color w-50" type="number" required name="phone" placeholder="Enter your phone number">
        </div>

        <div class="d-lg-flex align-content-center py-2">
            <textarea class="p-2 px-4 rounded-2 h5 input-field-color w-100" name="message" id="message" cols="30" rows="10" placeholder="Start writting"></textarea>
        </div>

        <div class="d-flex align-content-center py-2">
            <button class="sendmsgbtn" type="submit">Send message</button>
        </div>
    </form>
</section>
<!-- ------------------------------------- main end here------------------------------------- -->


</section>

@endsection