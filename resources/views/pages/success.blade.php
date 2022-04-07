@extends('layouts.success')
@section('title', 'Checkout Success')
@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{url('frontend/frontend/images/ic_mail.png')}}" alt="Success">
                <h1>Yay! Success</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto beatae fugit inventore quo voluptatem repellat?</p>
                <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-3">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection