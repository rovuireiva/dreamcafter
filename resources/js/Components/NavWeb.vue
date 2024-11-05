<script setup lang="ts">
import ApplicationLogo from './ApplicationLogo.vue';
</script>

<template>
        <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/"><ApplicationLogo/></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Kategori</a>
                <ul class="dropdown-menu">
                  <li><a href="index_mp_fullscreen_video_background.html">Default</a></li>
                  <li><a href="index_mp_fullscreen_video_background.html">Default</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Static Image Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_static.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_static.html">Classic</a></li>
                    </ul>
                  </li>
                  <li><a href="index_mp_fullscreen_video_background.html">Default</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Flexslider Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_flexslider.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_flexslider.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                          <li><a href="portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                          <li><a href="portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                          <li><a href="portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                          <li><a href="portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio_hover_black.html">Black</a></li>
                      <li><a href="portfolio_hover_gradient.html">Gradient</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_image1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_image2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_slider1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_slider2.html">Style 2</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio_single_featured_video1.html">Style 1</a></li>
                          <li><a href="portfolio_single_featured_video2.html">Style 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Portofolio</a>
              </li>
              <li><a href="#">Blog</a>
              </li>
              <li><a href="#">Tentang Kami</a>
              </li>
              <!--li.dropdown.navbar-cart-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
              <!--        span.icon-basket-->
              <!--        |-->
              <!--        span.cart-item-number 2-->
              <!--    ul.dropdown-menu.cart-list(role='menu')-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Short striped sweater-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .navbar-cart-item.clearfix-->
              <!--                .navbar-cart-img-->
              <!--                    a(href='#')-->
              <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
              <!--                .navbar-cart-title-->
              <!--                    a(href='#') Colored jewel rings-->
              <!--                    |-->
              <!--                    span.cart-amount 2 &times; $119.00-->
              <!--                    br-->
              <!--                    |-->
              <!--                    strong.cart-amount $238.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                .cart-sub-totle-->
              <!--                    strong Total: $476.00-->
              <!--        li-->
              <!--            .clearfix-->
              <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
              <!--li.dropdown-->
              <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
              <!--    ul.dropdown-menu(role='menu')-->
              <!--        li-->
              <!--            .dropdown-search-->
              <!--                form(role='form')-->
              <!--                    input.form-control(type='text', placeholder='Search...')-->
              <!--                    |-->
              <!--                    button.search-btn(type='submit')-->
              <!--                        i.fa.fa-search-->
            </ul>
          </div>
        </div>
      </nav>
</template>