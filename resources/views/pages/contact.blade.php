@extends('layouts.master')

@section('title') Contact us @endsection

@section('description')
Drop us a line and we will do our best to get back to you as soon as possible
@endsection

@section('styles')

@endsection

@section('content')
<div class="blocks-container">
	<!-- BLOCK "TYPE 7" -->
	<div class="block type-7 scroll-to-block" data-id="contact">
	   <div class="container">
	      <div class="row page-tagline">
	         <div class="col-md-6 col-md-offset-3">
	            <h2 class="title">get in touch</h2>
	            <div class="description">For more information, please feel free to leave us a message and we will get back to you as soon as we can. We really look forward to hearing from you.</div>
	         </div>
	      </div>
	      <div class="row">
	         <div class="col-md-3">
	            <div class="contact-thumbs">
	               <img src="/img/theme-4/icon7.png" alt="Contact Phone"/>
	               <article class="normall">
	                  <p>
	                     Tel:
	                     <br>
	                     <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
	                  </p>
	               </article>
	            </div>
	            <div class="contact-thumbs">
	               <img src="/img/theme-4/icon8.png" alt="Contact Email"/>
	               <article class="normall">
	                  <p>
	                     Email:
	                     <br>
	                     <a href="maito:info@funplexng.com" title="Funplex contact email">{{ setting('site.email') }}</a>
	                  </p>
	               </article>
	            </div>
	         </div>
	         <div class="col-md-7 col-md-offset-1">
	         	@if(session('success'))
	         	<div class="alert alert-success">
     				<p>{{ session('success') }}</p>
         		</div>
         		@endif
	            <form class="contact-form"  action="{{ route('pages.contact.send') }}" method="post">
	            	@csrf
	               <input class="required" type="text" placeholder="Your name" value="" name="name" />
	               <input class="required" type="text" placeholder="Your email" value="" name="email" />
	               <input type="text" placeholder="Subject" value="" name="subject" />
	               <textarea class="required" placeholder="Your message" name="message"></textarea>
	               <div class="submit-wraper">
	                  <div class="button">submit message<input type="submit" value="" /></div>
	               </div>
	            </form>
	         </div>
	         <div class="form-popup">
	            <div class="form-popup-close-layer"></div>
	            <div class="form-popup-content">
	               <div class="text">Thanks for your feedback!</div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
	<!-- BLOCK "MAP" -->
	<div>
	   <div id="map-canvas" data-lat="6.6130479" data-lng="3.3697542" data-zoom="17">
	   </div>
	   <div class="addresses-block">
	      <a data-lat="6.6130479" data-lng="3.3697542" data-string="Funplex Amusement Park"></a>
	   </div>
	</div>
</div>
@endsection

@section('scripts')

@endsection

