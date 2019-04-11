
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-591">
    <div class="container">
        <!--Navbar-->
        <div class="content">
            <!--Collections-->
            <div class="colections">
                <a href="#">COLLECTIONS</a>
            </div>
            <!--Nav-->
            <div class="navselect">
                <ul>
                    <li>
                        <div class="title">
                            <a href="#">HOME <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="context">
                            <p>Home 1</p>
                            <p>Home 2</p>
                            <p>Home 3</p>
                            <p>Home 4</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <a href="#">PRODUCTS <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="context cproduct">
                            <div class="item">
                                <!--Image-->
                                <div class="imageproduct">
                                    <img src="<?php echo $url_path ?>/images/blog1_1024x1024.jpg" alt="null">
                                </div>
                                <!--Title-->
                                <div class="titleproduct">
                                    <h4>The secret of success lies ...</h4>
                                </div>
                                <!--Context-->
                                <div class="contextproduct">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis cumque esse fugiat illum inventore, labore maxime</p>
                                </div>
                            </div>
                            <div class="item">
                                <!--Image-->
                                <div class="imageproduct">
                                    <img src="<?php echo $url_path ?>/images/blog1_1024x1024.jpg" alt="null">
                                </div>
                                <!--Title-->
                                <div class="titleproduct">
                                    <h4>The secret of success lies ...</h4>
                                </div>
                                <!--Context-->
                                <div class="contextproduct">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis cumque esse fugiat illum inventore, labore maxime</p>
                                </div>
                            </div>
                            <div class="item">
                                <!--Image-->
                                <div class="imageproduct">
                                    <img src="<?php echo $url_path ?>/images/blog1_1024x1024.jpg" alt="null">
                                </div>
                                <!--Title-->
                                <div class="titleproduct">
                                    <h4>The secret of success lies ...</h4>
                                </div>
                                <!--Context-->
                                <div class="contextproduct">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis cumque esse fugiat illum inventore, labore maxime</p>
                                </div>
                            </div>
                            <div class="item">
                                <!--Image-->
                                <div class="imageproduct">
                                    <img src="<?php echo $url_path ?>/images/blog1_1024x1024.jpg" alt="null">
                                </div>
                                <!--Title-->
                                <div class="titleproduct">
                                    <h4>The secret of success lies ...</h4>
                                </div>
                                <!--Context-->
                                <div class="contextproduct">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis cumque esse fugiat illum inventore, labore maxime</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <a href="#">BLOG <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="context">
                            <p>BLOG 1</p>
                            <p>BLOG 2</p>
                            <p>BLOG 3</p>
                            <p>BLOG 4</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <a href="#">SALE <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="context">
                            <p>SALE 1</p>
                            <p>SALE 2</p>
                            <p>SALE 3</p>
                            <p>SALE 4</p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <a href="#">ABOUT US</a>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <a href="#">CONTACT US</a>
                        </div>

                    </li>

                </ul>
            </div>
            <!--Cart-->
            <div class="cartitem">
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 0 item(s)</a>
            </div>
        </div>
    </div>
</div>