<script setup lang="ts">
import WebLayout from '@/Layouts/WebLayout.vue';
</script>

<template>
    <WebLayout title="Produk">
      <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider1.png&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1">This is Titan</div>
                  <div class="font-alt mb-30 titan-title-size-4"> Summer 2017</div>
                  <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                </div>
              </div>
            </li>
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider3.png&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1"> This is Titan</div>
                  <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="module-small">
          <div class="container">
            <form class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Default Sorting</option>
                  <option>Popular</option>
                  <option>Latest</option>
                  <option>Average Price</option>
                  <option>High Price</option>
                  <option>Low Price</option>
                </select>
              </div>
              <div class="col-sm-2 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class="col-sm-3 mb-sm-20">
                <select class="form-control">
                  <option selected="selected">All</option>
                  <option>Coats</option>
                  <option>Jackets</option>
                  <option>Dresses</option>
                  <option>Jumpsuits</option>
                  <option>Tops</option>
                  <option>Trousers</option>
                </select>
              </div>
              <div class="col-sm-3">
                <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
              </div>
            </form>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-7.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-8.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-9.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-10.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> 
    </WebLayout>
</template>