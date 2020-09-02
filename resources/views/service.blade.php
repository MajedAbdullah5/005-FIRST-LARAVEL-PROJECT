@section('title','Service')
@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{URL('images/758582_ea1f.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
        </div>
   </div>
   <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
        <h5>Contact</h5>
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
            <div class="col-md-6 pt-10">
            <h5 class="mb-10">Address</h5>
            <p  class="p-2">North alipur, Dagonbhuian,Feni,3920</p>
            <p class="p-2">+8801890312202</p>
            <p class="p-2">Majedabdullah635@gmail.com</p>

    </div>
    </div>
    </div>
@endsection