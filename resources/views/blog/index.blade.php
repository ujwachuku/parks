@extends('layouts.master')

@section('title')
Get the latest updates on Funplex Amusement park
@endsection

@section('description')
Get the latest updates on promos and activities at FUnplex Amusement Park
@endsection

@section('styles')

@endsection

@section('content')
<div class="blocks-container">
<div class="container blog-container">
<div class="new-block">
   <div class="row page-tagline">
      <div class="col-md-6 col-md-offset-3">
         <h2 class="title">{{ !empty($category) ? $category->name : '' }} news</h2>
      </div>
   </div>
   <div class="row">
   	@if(count($posts) > 0)   	
      <div class="col-md-8 blog-content-column">
      	@foreach($posts as $post)
         <div class="blog-post">
            <a href="/news/{{ $post->slug }}" class="thumbnail-entry"><img src="{{ Voyager::image($post->thumbnail('cropped')) }}" alt="{{ $post->title }}"></a>
            <div class="data">
               <div class="date"><span>{{ $post->created_at->day }}</span> {{ $post->created_at->format('M') }} <br/> {{ $post->created_at->year }}</div>
               <div class="text">
                  <a class="title" href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                  <div class="description">{{ $post->excerpt }}</div>
                  <a href="/news/{{ $post->slug }}" class="button size-2"><span>read more</span></a>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         @endforeach
                 
         <div class="pull-right">
            {{ $posts->links() }}            
            <div class="clear"></div>
            <div class="clear"></div>
         </div>
      </div>     
      <div class="col-md-4 blog-content-column">
         <div class="widget-entry">
            <h3 class="widget-title">Categories</h3>
            <div class="categories-wrapper">
            	@foreach($categories as $category)
               <a href="{{ route('blog.posts.category', $category->slug) }}" class="entry"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>{{ $category->name }}</a>
               @endforeach            
            </div>
         </div>
      </div>
   </div>
</div>
@else

@endif
@endsection

@section('scripts')

@endsection

