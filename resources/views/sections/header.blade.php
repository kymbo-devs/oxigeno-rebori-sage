<custom-header>
  <header class="main-header">
    <a class="logo" href="{{ home_url('/') }}">
      {!! wp_get_attachment_image($logo, 'custom_logo', false, ['loading' => 'lazy']) !!}
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <button class="menu-drawer mobile no-desktop">
        @svg('css-menu-motion')
      </button>
      <nav class="nav-primary desktop-block no-mobile" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
      <div class="nav-second">
        <div class="close-drawer">
          @svg('css-close')
        </div>
        <nav class="nav-mobile mobile no-desktop" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          <a class="drawer-logo" href="{{ home_url('/') }}">
            {!! wp_get_attachment_image($logo, 'custom_logo', false, ['loading' => 'lazy']) !!}
          </a>
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      </div>
    @endif
  </header>
</custom-header>
