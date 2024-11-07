<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import jQuery from 'jquery';
import { onMounted } from 'vue';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';


defineProps({
    title: String,
});


const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

</script>

<template>
          <Head :title="title" />
         <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a href="/"><ApplicationLogo/></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="../Pages/Produk.vue">Produk</a></li>
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
        <slot />  

      <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      <div>
      <a href="https://wa.me/+628871601213?text=saya%20berminat%20bekerjasama%20dengan%20anda" class="whatsapp-icon" target="_blank">
        <img src="../Vendor/src/assets/images/wa.svg">
      </a>
     </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</template>




<style scoped>

@import url(/public/assets/lib/bootstrap/dist/css/bootstrap.min.css);
@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
@import url(https://fonts.googleapis.com/css?family=Volkhov:400i);
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
@import url(/public/assets/lib/animate.css/animate.css);
@import url(/public/assets/lib/components-font-awesome/css/font-awesome.min.css);
@import url(/public/assets/lib/et-line-font/et-line-font.css);
@import url(/public/assets/lib/flexslider/flexslider.css);
@import url(/public/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css);
@import url(/public/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css);
@import url(/public/assets/lib/magnific-popup/dist/magnific-popup.css);
@import url(/public/assets/lib/simple-text-rotator/simpletextrotator.css);
@import url(/public/assets/css/style.css);

/* Floating WhatsApp */
.whatsapp-icon {
  position: fixed;
  bottom: 45px; /* Jarak dari bawah */
  right: 5px; /* Jarak dari kanan */
  z-index: 999; /* Supaya tetap di atas elemen lain */
  display: flex;
  justify-content: center;
  align-items: center;
  width: 60px; /* Ukuran ikon */
  height: 60px; /* Ukuran ikon */
  transition: transform 0.3s, box-shadow 0.3s; /* Transisi untuk hover */
}

.whatsapp-icon img {
  width: 70%; /* Sesuaikan ukuran gambar */
  height: auto; /* Menjaga rasio aspek */
}

/* Efek hover */
.whatsapp-icon:hover {
  transform: scale(1.1); /* Membesar saat di-hover */
}

</style>