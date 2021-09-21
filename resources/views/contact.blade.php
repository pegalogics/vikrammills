@extends('layouts.master')

@section('title',
  'About')

@section('content')
       
        @include('inc.user.banner')

        <!-- CONTACT MESSAGE AREA START -->
        <div class="ltn__contact-message-area pt-115 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-7">
                        <div class="ltn__form-box contact-form-box-2 mb-50 box-shadow--- white-bg--">
                        <p align="center">{{ $contactPage->description}}</p>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- CONTACT MESSAGE AREA END -->

        <!-- CONTACT MESSAGE AREA START -->
        <div class="ltn__contact-message-area pt-30 pb-70">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-md-7">
                        @if(Session::has('success'))
                        <x-alert message="{{Session::get('success')}}" type='success'></x-alert>
                        @endif
                        <div class="ltn__form-box contact-form-box-2 mb-50 box-shadow--- white-bg--">
                            <h1>Get in Touch</h1>
                            <form id="contact-form" action="{{route('contact.mail')}}" method="post">
                                @csrf
                                <input type="text" name="name" placeholder="Enter your name" required>
                                <input type="email" name="email" placeholder="Enter email address" required>
                                <input type="text" name="phone" placeholder="Enter phone number" required>
                                <textarea name="message" placeholder="Enter message" required></textarea>
                                <div class="btn-wrapper mt-0">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit" style="height: 40px;"> &nbsp; &nbsp; Send &nbsp; &nbsp; </button>
                                </div>
                                <p class="form-messege mb-0 mt-20"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="ltn__contact-address-area pl-70">
                            <div class="ltn__contact-address-item-4">
                                <h3>VIKRAM ROLLER FLOUR MILLS LTD.</h3>
                            
                                <p>{{$contactPage->address}}</p>
                        
                        
                            <p><a href="mailto: enquiry@vrfmills.com"> <strong>{{  $contactPage->email }}</strong ></a></p>
                                <h3>Telephone</h3>
                                <p>+{{ $contactPage->phone }}</p}>
                            </div>
                            <div class="ltn__social-media mt-15">
                                <ul>
                                    <li><a href="{{ $contactPage->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $contactPage->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $contactPage->instagram }}" title="Instagram" ><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $contactPage->facebook }}" title="FacebookLinkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{ $contactPage->youtube }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT MESSAGE AREA END -->
        @include('inc.user.feature')


@endsection
