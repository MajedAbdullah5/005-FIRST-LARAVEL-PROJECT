@extends('layout.app')
@section('title','Homepage')

@section('content')

<div class="container-fluid pixabay">
<div class="row">
    <div class="col-md-5 divCenter ">
        <h1 class="text-white">KEEP SILENT & WORK SMARTLY</h1>
        <h4 class="">AN ARCHITECT</h4>
        <button class="btn btn-outline-primary">LEARN MORE</button>

    </div>
</div>
</div>
<h2 class="text-center">My Services</h2>
<hr>
<div class="container mt-3">

<div class="row">
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>

</div>
<div class="row">
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
    </div>
</div>
    <h1 class="text-center">Contact</h1>
    <hr>
  <div class="row"> 
<div class="col-md-6 pt-10">

        <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Number</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+880">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Send Now</button>
        </div>
        </form>
</div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.678239058229!2d91.3392098493051!3d22.96207412427762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37535db5a7621d9d%3A0x1283ebbf9672f8a9!2sNorth%20Alipur%20High%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1599059077648!5m2!1sen!2sbd" width="540" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </div> 
@endsection
