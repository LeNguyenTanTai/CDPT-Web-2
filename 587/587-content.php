<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-587">
    <div class="content">
        <div class="title">
            <h2 class="lms_heading_title">Testimonials</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="image">
            <div class="context">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="lms_testimonial_quote">"</p>
                            <p class="lms_testimonials_txt">Suspendisse posuere consectetur sodales. Etiam faucibus rhoncus nunc et pretium. Praesent tortor massa,
                                malesuada sed ornare in, dignissim adipiscing felis. Donec eget hendrerit magna,</p>
                            <figure><img src="<?php echo $url_path ?>/images/testimonial1.png" alt=""/></figure>
                            <h4>john doe</h4>
                        </div>
                        <div class="swiper-slide">
                            <p class="lms_testimonial_quote">"</p>
                            <p class="lms_testimonials_txt">Suspendisse posuere consectetur sodales. Etiam faucibus rhoncus nunc et pretium. Praesent tortor massa,
                                malesuada sed ornare in, dignissim adipiscing felis. Donec eget hendrerit magna,</p>
                            <figure><img src="<?php echo $url_path ?>/images/testimonial1.png" alt=""/></figure>
                            <h4>Olivia Liam</h4>
                        </div>
                        <div class="swiper-slide">
                            <p class="lms_testimonial_quote">"</p>
                            <p class="lms_testimonials_txt">Duis tortor lacus, dictum nec augue a, euismod sagittis eros. Aliquam id ligula malesuada, egestas est ultricies, ugue mauris feugiat dolor, sit amet viverra orci Duis vel urna dapibus</p>
                            <figure><img src="<?php echo $url_path ?>/images/testimonial1.png" alt=""/></figure>
                            <h4>William Dam (LMS Director)</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
