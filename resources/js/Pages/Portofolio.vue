<script setup lang="ts">
import WebLayout from '@/Layouts/WebLayout.vue';
</script>

<template>
    <WebLayout title="Portofolio">
        <section class="home-section bg-dark-60 portfolio-page-header parallax-bg" id="home" data-background="assets/images/portfolio/portfolio_header_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">We are Titan</div><a class="section-scroll btn btn-border-w btn-round" href="#portfolio">Our Works</a>
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <ul class="filter font-alt" id="filters">
                  <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s">Photography</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
                </ul>
              </div>
            </div>
            <ul class="works-grid works-grid-masonry works-grid-3 works-hover-d" id="works-grid">
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio1.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Corporate Identity</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio2.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Bag MockUp</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="portfolio_single_featured_slider1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio3.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Disk Cover</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="portfolio_single_featured_slider2.htmll">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio4.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Business Card</h3>
                    <div class="work-descr">Photography</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio5.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Web Design</h3>
                    <div class="work-descr">Webdesign</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_video2.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio6.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">New Product</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item marketing webdesign"><a href="portfolio_single_featured_image1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio7.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">New Product</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item marketing"><a href="portfolio_single_featured_slider1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio9.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Bottle MockUp</h3>
                    <div class="work-descr">Marketing</div>
                  </div></a></li>
              <li class="work-item illustration photography"><a href="portfolio_single_featured_slider2.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio10.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Personal Identity</h3>
                    <div class="work-descr">Photography</div>
                  </div></a></li>
              <li class="work-item illustration marketing"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio11.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Business Card</h3>
                    <div class="work-descr">Webdesign</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image2.html">
                  <div class="work-image"><img src="assets/images/portfolio/masonry-portfolio8.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Paper Clip</h3>
                    <div class="work-descr">Illustration</div>
                  </div></a></li>
            </ul>
          </div>
        </section>
        <section class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 text-center">
                <h4 class="font-alt mb-20">Let's work together</h4><a class="btn btn-border-w" href="contact3.html">Contact Us</a>
              </div>
            </div>
          </div>
        </section>
        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/work-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        </div>
    </WebLayout>
</template>