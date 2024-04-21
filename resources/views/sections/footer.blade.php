<footer class="footer-wrapper">
  <img src="@asset('images/footer-bg.svg')" alt="Footer background" class="footer-bg" width="1296px" height="auto">
  <div class="footer-content-wrapper">
    <div class="footer-content">
      <div class="footer-lt">
        {!! wp_get_attachment_image($footer_logo, 'custom_logo', false, ['loading' => 'lazy']) !!}
        <p class="footer-text">{!! $footer_text !!}</p>
      </div>
      <div class="footer-menu">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
      </div>
    </div>
  </div>

</footer>
