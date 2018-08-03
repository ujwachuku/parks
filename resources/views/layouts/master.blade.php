<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="/css/devices.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />
    <link rel="alternate" href="http://funplexng.com" hreflang="en" />
    <link rel="shortcut icon" href="/img/favicon.png" />
    @yield('styles')
    <meta name="description" content="@yield('description')"/>

    <title>@yield('title') | Funplex Amusement Park</title>

</head>

<body data-theme="theme-4">

    @include('partials.header')    
    
    <div id="content-wrapper">
    @yield('content')
    </div>

    @include('partials.footer')


    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/idangerous.swiper.min.js"></script>
    <script src="/js/global.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="/js/map.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>

    <!-- <script>

        $(function(){

            $(window).load(function(){

                var $container = $('.sorting-container').isotope({

                    itemSelector: '.sorting-item',

                    masonry: {

                        columnWidth: '.grid-sizer'

                    },

                    getSortData: {

                        category_one: '[data-category_one]',

                        category_two: '[data-category_two]',

                        category_three: '[data-category_three]',

                        category_four: '[data-category_four]',

                        category_five: '[data-category_five]',

                    }

                });



                $('.sorting-menu a').click(function() {

                    if($(this).hasClass('active')) return false;

                    $(this).parent().find('.active').removeClass('active');

                    $(this).addClass('active');

                    var sortValue = $(this).attr('data-sort-value');

                    $('.sorting-item.disabled').removeClass('disabled');

                    $('.sorting-item[data-'+sortValue+'!="1"]').addClass('disabled');

                    $container.isotope({ sortBy: sortValue });

                    if(sortValue=='original-order') $('.sorting-item.disabled').removeClass('disabled');

                });

            });

        });

    </script> -->
<!-- <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-80023213-1', 'auto');
      ga('send', 'pageview');
</script> -->
    <script src="/js/subscription.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5772a25e1fa3a8f9"></script> -->
    @yield('scripts')
</body>

</html>

