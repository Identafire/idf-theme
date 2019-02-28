<header class="banner">
  <div class="d-flex flex-row justify-content-between">
   @if (!get_field('options_logo', 'option'))
   <div class="logo">
    <a class="brand" href="{{ home_url('/') }}"><span class="sr-only">{{ get_bloginfo('name', 'display') }}</span>
    </a>
    </div>
   @else
    <div class="logo">
     <a class="brand" href="{{ home_url('/') }}"><img src="{{$logo_image['url']}}" alt="{{$logo_image['alt']}}"></a>
     </div>
   @endif
   <nav class="quick-nav d-flex flex-md-column">
      @if (has_nav_menu('quick_navigation'))
      {!! wp_nav_menu(['theme_location' => 'quick_navigation', 'menu_class' => 'quicknav d-flex flex-row justify-content-center nav-fill']) !!}
    @endif
   </nav>
      <button class="navbar-toggler collapsed " type="button" data-toggle="collapse" data-target="#primary-navigation" aria-controls="primary-navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
  <div class="main-nav-container">
  <nav class="nav-primary">
     <div id="primary-navigation" class="show">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      </div>
      @endif
    </nav>
    </div>
</header>
