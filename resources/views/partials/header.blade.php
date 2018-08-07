<!-- HEADER -->
<header class="act default-act bottom-fixed bottom-fixed-control-class">
   <a href="/" id="logo">
      <img src="/img/theme-1/logo.png" alt="{{ config('app.name') }}"/>
      <img class="act" src="/img/funplex-logo-sm.png" alt="{{ config('app.name') }}"/>
   </a>
   <div class="mob-icon">
      <span></span>
   </div>
   <nav>
      <ul>
         <li>
            <a href="/" class="{{ Route::currentRouteName() == 'home.index' ? 'act' : '' }}">Home</a>
         </li>
         <li class="submeny">
            <a href="#" class="submeny-top {{ Route::currentRouteName() == 'pages.pricing' || Route::currentRouteName() == 'pages.pricing.groups' ? 'act' : '' }}">pricing</a>
            <ul>
               <li><a href="/pricing">Standard Packages</a></li>
               <li><a href="/pricing/groups">Group Packages</a></li>
            </ul>
         </li>
         <!-- <li><a href="#" class="scroll-to-link">gallery</a></li> -->
         <li><a href="/news" class="{{ Route::currentRouteName() == 'blog.index' || Route::currentRouteName() == 'blog.post' || Route::currentRouteName() == 'blog.posts.category' ? 'act' : '' }}">news</a></li>
         <li><a href="/contact" class="{{ Route::currentRouteName() == 'pages.contact' ? 'act' : '' }}">contact</a></li>
      </ul>
   </nav>
</header>