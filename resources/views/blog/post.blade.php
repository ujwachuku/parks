@extends('layouts.master')

@section('title')
{{ $post->title }}
@endsection

@section('description')
{{ $post->excerpt }}
@endsection

@section('styles')

@endsection

@section('content')
<div class="blocks-container">
<div class="container blog-container">
<div class="new-block">
   <div class="row">
      <div class="col-md-8 blog-content-column">
         <div class="blog-post detail-post">
            <div class="data">
               <div class="text">
                  <h1 class="title">{{ $post->title }}</h1>
                  <div class="author-entry">
                     <div class="author-text">
                        <span aria-hidden="true" class="glyphicon glyphicon-calendar"></span> {{ $post->created_at->diffForHumans() }}
                     </div>
                     <div class="clear"></div>
                  </div>
                  <div class="blog-detail-article">
                     <p>{!! $post->body !!}</p>                     
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         @if(count($otherPosts) > 0)
         <div class="related-posts">
            <h2 class="h2 titel-left">related posts</h2>
            <div class="swiper-container horizontal-pagination" data-autoplay="1" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2">
               <div class="swiper-wrapper">
                  @foreach($otherPosts as $otherPost)
                  <div class="swiper-slide">
                     <div class="related-entry content">
                        <img src="{{ Voyager::image($otherPost->thumbnail('cropped')) }}" alt="{{ $otherPost->title }}" />
                        <a class="title" href="/news/{{ $otherPost->slug }}">{{ $otherPost->title }}</a>
                        <div class="author-entry">
                           <a href="blog-detail.html" class="author-thumbnail"><img alt="" src="img/author.jpg" class="img-circle"></a>                           
                           <div class="clear"></div>
                        </div>
                        <div class="description">{!! $otherPost->excerpt !!}</div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="pagination"></div>
            </div>
         </div>
         @endif
         <div class="clear"></div>
      </div>
      <div class="col-md-4 blog-content-column">
         <div class="widget-entry">
            <h3 class="widget-title">Categories</h3>
            <div class="categories-wrapper">
               @foreach($categories as $category)
               <a href="#" class="entry"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>{{ $category->name }}</a>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')

@endsection

