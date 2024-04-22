import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  
  class Header extends HTMLElement {
    constructor() {
      super();
      let menuDrawer = this.querySelector('.nav-mobile');
      let hamburger  = this.querySelector('.menu-drawer');
      let closeBtn =  this.querySelector('.close-drawer')

      hamburger.addEventListener('click', () => {
        menuDrawer.classList.add('open');
      });
      closeBtn.addEventListener('click', () => {
        menuDrawer.classList.remove('open');
      });
    }
  }

  customElements.define('custom-header', Header);
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
