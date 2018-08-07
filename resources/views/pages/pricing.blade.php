@extends('layouts.master')

@section('title')
Ride and package prices
@endsection

@section('description')
The prices for our rides and packages are affordable and flexible. You can either pay as you use or buy a pre-configured package.
@endsection

@section('styles')
<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
@endsection

@section('content')
<div class="blocks-container">
	<!-- BLOCK "TYPE 18" -->
    <div class="new-block type-18 scroll-to-block" data-id="plan-your-visit">
        <div class="container">
        	@if(count($packages) > 0)
            <div class="row page-tagline">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="title">plan your visit</h2>
                    <div class="description">Funplex Amusement Park hosts numerous outdoor and indoor activities all year round. As you plan to begin your adventure at Funplex, we enjoin you to take a look at our flexible funplex payment packages.</div>
                </div>
            </div>
            <div class="row tabs-switch-container">
                <div class="tabs-switch-wrapper col-md-12">
                	@foreach($packages as $package)
                    <div class="tabs-switch">
                    	<div class="cell-view">{{ $package->package_name }}</div>
                    </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
                <div class="col-md-12">
                	@foreach($packages as $package)
                    <div class="row tabs-entry">
                        <div class="new-block type-8">
                            <div class="container">
                                <div class="row">                                    
                                    <div class="content-entry col-sm-offset-2 col-sm-8">
                                        <article class="normall">
                                            <h3 class="tabs-title">{{ $package->package_name }}</h3>
                                            
                                            <p>{!! $package->package_description !!}</p>
                                        </article>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach              
                </div>
            </div>
			@else
			<div class="row">
				<div class="alert alert-warning">
					<p>There are no standard packages at this time.</p>
				</div>
			</div>
			@endif
        </div>
    </div>	    
</div>
@endsection

@section('scripts')

@endsection

