<footer class="footer-wrapper">
  <img src="@asset('images/footer-bg.svg')" alt="Footer background" class="footer-bg desktop no-mobile" width="1296px" height="auto">
  <img src="@asset('images/responsive-footer-bg.svg')" alt="Footer background" class="footer-bg mobile no-desktop" width="399px" height="auto">
  <div class="footer-content-wrapper">
    <div class="footer-content">
      <div class="footer-lt">
        {!! wp_get_attachment_image($footer_logo, 'footer-logo', false, ['loading' => 'lazy']) !!}
        <div class="footer-menu mobile no-desktop">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
        </div>
        <p class="footer-text">{!! $footer_text !!}</p>
      </div>
      <div class="footer-menu desktop no-mobile">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
      </div>
    </div>
  </div>

</footer>
