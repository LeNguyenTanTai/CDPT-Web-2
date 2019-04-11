<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-578">
    <div class="container">
        <div class="row">    
            <div class="product-view">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="detail_left">
                        <div class="product-img-box">
                            <div class="image">
                                <img src="<?php echo $url_path ?>/images/2_12.jpg" alt="">
                            </div>

                            <div class="carousel slide" id="myCarousel"> 
                                <div class="product-carousel">
                                    <div class="slider-wrapper-outer">
                                        <div class="slider-wrapper">
                                            <div class="carousel-inner">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                                <div class="item">
                                                                    <div class="product-block">
                                                                        <div class="product-block-inner">
                                                                            <div class="product-image-block">
                                                                                <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                    <figure>
                                                                                        <img src="<?php echo $url_path ?>/images/2_12.jpg" width="100" height="105" alt="" class="click">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                                <div class="item">
                                                                    <div class="product-block">
                                                                        <div class="product-block-inner">
                                                                            <div class="product-image-block">
                                                                                <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                    <figure>
                                                                                        <img src="<?php echo $url_path ?>/images/21_1_2.jpg" alt="" class="click">
                                                                                    </figure>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End div class product-block-->
                                                                    </div>
                                                                    <!-- End div class product-block-inner -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                                <div class="item">
                                                                    <div class="product-block">
                                                                        <div class="product-block-inner">

                                                                            <div class="product-image-block">

                                                                                <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                    <figure><img src="<?php echo $url_path ?>/images/6_1_14.jpg" class="click" alt=""></figure>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <!-- End div class product-block-->
                                                                    </div>
                                                                    <!-- End div class product-block-inner -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                                <div class="item">
                                                                    <div class="product-block">
                                                                        <div class="product-block-inner">

                                                                            <div class="product-image-block">

                                                                                <div title="Arcu vitae imperdiet simply  Nemo" class="product-image">
                                                                                    <figure><img src="<?php echo $url_path ?>/images/7_3_7.jpg" class="click" alt=""></figure>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <!-- End div class product-block-->
                                                                    </div>
                                                                    <!-- End div class product-block-inner -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                                                         
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="detail_right">
                        <div class="product-name">
                            <h1> ARCU VITAE IMPERDIET SIMPLY NEMO </h1>
                        </div>   
                        <p class="no-rating">
                            <a  href="#newproducts5">Be the first to review this product</a>
                        </p>
                        <div class="sku">
                            <span>SKU: </span>
                            mag100215_3_1
                        </div>
                        <div class="short-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                            eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                            Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.
                        </div>
                        <div class="availability in-stock">
                            Availability: 
                            <span>In stock</span>
                        </div>
                        <div class="price-box">
                            <span id="Totalcost" class="price"> $488.00 </span>
                        </div>
                        <div class="product-options"> 
                            <p class="required"><em>*</em> Required Fields</p>
                            <label class="required"><em>*</em>color</label>

                            <div class="color-price">
                                <input type="radio" name="channelcost" value="10.00" onClick="test(this);" /> <label>black  <span> <em>+</em>$10.00</span></label> <br />
                                <input type="radio" name="channelcost" value="30.00" onClick="test(this);" /> <label>brown  <span> <em>+</em>$30.00</span></label> <br />
                                <input type="radio" name="channelcost" value="50.00" onClick="test(this);" /> <label>gray  <span> <em>+</em>$50.00</span></label> <br />    
                            </div>
                            <label class="required"><em>*</em>size</label>
                            <br>
                            <input type="checkbox" name="channelcost" value="10.00" onClick="test(this);" /> <label>black  <span> <em>+</em>$10.00</span></label> <br />
                            <input type="checkbox" name="channelcost" value="30.00" onClick="test(this);" /> <label>brown  <span> <em>+</em>$30.00</span></label> <br />
                            <input type="checkbox" name="channelcost" value="50.00" onClick="test(this);" /> <label>gray  <span> <em>+</em>$50.00</span></label> <br />    
                        </div>                        
                        <div class="product-options-bottom"> 
                            <div class="add-to-cart">
                                <label for="qty">Qty:</label>
                            </div>
                            <div class="input-content">
                                <div class="box-qty">
                                    <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                    <div class="qty-arrows">
                                        <input type="button" value=" " class="qty-increase" onclick="var qty_el = document.getElementById('qty');
                                                        var qty = qty_el.value;
                                                        if (!isNaN(qty))
                                                            qty_el.value++;
                                                        return false;">
                                        <input type="button" value=" " class="qty-decrease" onclick="var qty_el = document.getElementById('qty');
                                                        var qty = qty_el.value;
                                                        if (!isNaN(qty))
                                                            qty_el.value--;
                                                        return false;">
                                    </div>
                                </div>
                            </div>
                            <button type="button" title="Add to Cart" id="product-addtocart-button" class="button btn-cart" onclick="productAddToCartForm.submit(this)"><span>Add to Cart</span></button>
                        </div>
                        <div class="email-addto-box"> 
                            <p class="email-friend"><a href="#">Email to a Friend</a></p>
                            <ul class="add-to-links">
                                <li><a href="#" onclick="productAddToCartForm.submitLight(this, this.href);
                                                return false;" class="link-wishlist">Add to Wishlist</a></li>
                                <li><span class="separator">|</span> <a href="#" class="link-compare">Add to Compare</a></li>
                            </ul>
                        </div>
                        <div class="tabberlive">
                            <ul class="tabbernav_product nav-pills  ">
                                <li class="active"><a   data-toggle="tab" title="tab_product" href="#newproducts"  data-text="Latest">DELIVERY</a></li>
                                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts2"  data-text="Best Seller">SHIPPING</a></li>
                                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts3"  data-text="Special">SIZEGUIDE</a></li>

                            </ul>
                            <div class="tabs-live">
                                <div class="tab-content" >
                                    <div id="newproducts" class="tab-pane fade in active ">                                    
                                        <p>LOVE are renowned for their cute as a button skater Floral Woven Skater Dress is no exception! Flower power and Japanese print influences are big news.</p>                                   
                                    </div>
                                    <div id="newproducts2" class="tab-pane fade  ">                                 
                                        <p><span> <strong>About Me :</strong> </span> LOVE are renowned for their cute as a button skater Floral Woven Skater Dress is no exception! Flower power and Japanese print influences are big news. <br> <br> <span> <strong>Composition :</strong> 100% POLYESTER </span> <br> <span> <strong>Example Shown :</strong> SIZE XS, Hem to Hem 84cm OR 33 ' </span></p>                                  
                                    </div>
                                    <div id="newproducts3" class="tab-pane fade  ">                                   
                                        <table class="data-table">
                                            <thead>
                                                <tr><th>Size</th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Men</td>
                                                    <td>7-10</td>
                                                    <td>10-13</td>
                                                    <td>13-15</td>
                                                    <td>15-17</td>
                                                </tr>
                                                <tr>
                                                    <td>Women</td>
                                                    <td>7-9</td>
                                                    <td>10-12</td>
                                                    <td>13-14</td>
                                                    <td>15-16</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="product-collateral"> 
            <ul class="tabbernav_product2 nav-pills  ">
                <li class="active"><a   data-toggle="tab" title="tab_product" href="#home"  data-text="Latest"><span>Product Description</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts5"  data-text="Best Seller"><span>Product's Review</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts6"  data-text="Special"><span>Product Tags</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>CMS tab</span></a></li>
            </ul>
            <div class="tabs">
                <div class="tab-content" >
                    <div id="home" class="tab-pane fade in active ">                                    
                        <p><strong>Sample Lorem Ipsum Text</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                            eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                            Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, 
                            aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. 
                            Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, 
                            sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                    </div>
                    <div id="newproducts5" class="tab-pane fade  ">                                 
                        <div class="review">
                            <h2>Write Your Own Review</h2>
                            <form action="#" method="post" id="review-form">
                                <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                <fieldset class="">
                                    <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                    <h4>How do you rate this product? <em class="required">*</em></h4>
                                    <table class="data-table" id="product-review-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><span>1 star</span></th>
                                                <th><span>2 stars</span></th>
                                                <th><span>3 stars</span></th>
                                                <th><span>4 stars</span></th>
                                                <th><span>5 stars</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio"></td>
                                                <td><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio"></td>
                                                <td><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio"></td>
                                                <td><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio"></td>
                                                <td><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio"></td>
                                            </tr>
                                            <tr>
                                                <td>Value</td>
                                                <td><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio"></td>
                                                <td><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio"></td>
                                                <td><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio"></td>
                                                <td><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio"></td>
                                                <td><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio"></td>
                                            </tr>
                                            <tr>
                                                <td>Quality</td>
                                                <td><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio"></td>
                                                <td><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio"></td>
                                                <td><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio"></td>
                                                <td><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio"></td>
                                                <td><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="form-list">
                                        <li>
                                            <label for="nickname_field" class="required">Nickname<em>*</em></label>
                                            <div class="input-box">
                                                <input type="text" name="nickname" id="nickname_field" class="input-text" value="">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="summary_field" class="required">Summary of Your Review<em>*</em></label>
                                            <div class="input-box">
                                                <input type="text" name="title" id="summary_field" class="input-text" value="">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="review_field" class="required">Review<em>*</em></label>
                                            <div class="input-box">
                                                <textarea name="detail" id="review_field" cols="5" rows="3"></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <div class="buttons-set">
                                    <button type="submit" title="Submit Review" class="button"><span>Submit Review</span></button>
                                </div>
                            </form>
                        </div>                                                                  
                    </div>
                    <div id="newproducts6" class="tab-pane fade  ">
                        <div class="form-add">
                            <label for="productTagName">Add Your Tags:</label>
                            <div class="input-box">
                                <input type="text" class="input-text" name="productTagName" id="productTagName">
                            </div>
                            <button type="button" title="Add Tags" class="button" onclick="submitTagForm()"><span>Add Tags</span></button>
                        </div>        
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                    <div id="newproducts7" class="tab-pane fade  ">                                   
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $url_path ?>/js/12.js"></script>



