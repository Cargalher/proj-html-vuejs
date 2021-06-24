
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avada Music</title>
    <link rel="stylesheet" href="./dist/css/app.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <!-- #site_header -->
        <header id="site_header ">
            <!-- navbar -->
            <div class="navbar container">
                <div class="logo">
                    <img :src="logo" alt="logo avada music">
                </div>
                <div class="dropdown">
                    <span>
                        <i class="fas fa-bars"  @click="isShowDrop = !isShowDrop"></i>
                    </span>
                    
                    <ul class="dropdown-menu" v-show="isShowDrop">
                        <li
                        v-for="(element, index) in menuElements">
                        <a> {{element.text}}</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /navbar -->
            <!-- header_main -->
            <div class="header_main">
                <h1>Untold Stories</h1>
                <p>There is an untold story behind every favorite song.</p>
                <div>
                    <button class="album_btn">Latest album</button>
                    <button class="dates_btn">Live dates</button>
                </div>
            </div>
            <!-- /header_main -->
        </header>
        <!-- /#site_header -->
        <!-- #site_main -->
        <main id="site_main">
            <!-- 1. section Music is Life -->
            <section class="music_is_life">
                <h2>Music is Life</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint unde accusamus soluta quam ratione, non totam similique alias porro autem, excepturi minima laudantium dolor</p>
            </section>
            <!-- /1. section Music is Life -->
            <!-- 2. section Latest Band News -->
            <section class="latest_news">
                <div class="latest_news_top">
                    <h2>Latest Band News</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint unde accusamus soluta quam ratione, non totam similique alias porro autem, excepturi minima laudantium dolor</p>
                </div>
                <div class="latest_news_bottom ">
                    <!-- left column_cards images -->
                    <div class="left_col">
                        <div class="techMusic card">
                            <img src="./dist/img/blog_music_techo-600x300.jpg" alt="">
                            <div class="middle">
                                <div class="text">Technology and music</div>
                            </div>
                            <div class="card_info">
                                <h4>Technology and music</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p>
                            </div>
                            
                        </div>
                        <div class="img_row card">
                            <div class="guitar card">
                                <img src="./dist/img/blog-post3-400x600.jpg" alt="">
                                <div class="middle">
                                    <div class="text">While my guitar gently weeps</div>
                                </div>
                                <div class="card_info">
                                    <h4>While my guitar gently weeps</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p>
                                </div>
                                
                            </div>
                            <div class="albums card">
                                <img src="./dist/img/blog-post4-400x600.jpg" alt="">
                                <div class="middle">
                                    <div class="text">It just sound better</div>
                                </div>
                                <div class="card_info">
                                   <h4>It just sound better</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="rock card">
                            <img src="./dist/img/blog_flavor_rock-600x300.jpg" alt="">
                            <div class="middle">
                                <div class="text">The flavor of rock</div>
                            </div>
                            <div class="card_info">
                                <h4>The flavor of rock</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /left column_cards images -->
                    <!-- right column_cards images -->
                    <div class="right_col">
                        <div class="bar card">
                            <img src="./dist/img/blog-post1-400x600.jpg" alt="">
                            <div class="middle">
                                <div class="text">Taking it back to the old school</div>
                            </div>
                            <div class="card_info">
                                <h4>Taking it back to the old school</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p> 
                            </div>
                            
                        </div>
                        <div class="guitar_player card">
                            <img src="./dist/img/blog-post2-400x600.jpg" alt="">
                            <div class="middle">
                                <div class="text">Sharing the stage with a legend</div>
                            </div>
                            <div class="card_info">
                                <h4>Sharing the stage with a legend</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad laborum nulla iusto esse.</p>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /right column_cards images -->
                </div>
                
            </section>
            <!-- /2. section Latest Band News -->
            <!-- 3. section view all latest news -->
            <section class="view_news">
                <a href="#">view all latest news</a>
            </section>
            <!-- /3. section view all latest news -->
            <!-- 4. section play_img background -->
            <section class="play_bg">
                <div class="container_quote">
                    <p class="quote">"I just listened to it and said to myself, "Man, I really love this <br> album." Still, today, it just sounds so fresh. It sounds full of ideas. <br> These guys knew what they were doing. yhey're good. And they're <br> inventive. I haven't heard anything this year that's as inventive. I <br> don't really expect to."</p>
                    <img src="./dist/img/band_interview_play_icon.png" alt="">
                </div>
                
                    
            </section>
            <!-- 4. section play_img background -->
            <!-- 5. section Live Dates -->
            <section id="live_dates" class="live_dates">
                <h2>Live Dates</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint unde accusamus soluta quam ratione, non totam similique alias porro autem, excepturi minima laudantium dolor</p>
                <div class="dates">
                    <p class="dates_container"
                    v-for="(element, index) in festivals">
                    <i class="fas fa-plus" @click="showAccordion = !showAccordion"></i>  {{element.date}}
                    </p> 
                    <div class="accordion" v-show="showAccordion">
                        <div class="map_container">
                            <img class="map_img" src="./dist/img/dominicanRepublic.PNG" alt="">
                            <a href="https://www.google.it/maps/place/Dominican+Republic/"><i class="fas fa-location-arrow"></i></a>
                            <img class="location_img" src="./dist/img/avada-music-logo-mobile-retina.png" alt="">
                        </div>
                        
                        <div class="info_accordion">
                            <span @click="showAccordion = !showAccordion"><i class="fas fa-times"></i></span>
                            <h5>Untold Stories</h5>
                            <p  class="dates_container"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor voluptate vel modi alias, voluptatibus corporis aliquam hic explicabo eius eum beatae iste dicta nemo id ipsum dolorem quos dolorum voluptates, quo suscipit molestiae? Possimus ratione impedit ex, quos velit rerum repellendus sed esse cum aut sint, labore enim veniam ipsam.</p>
                            <button>Book now</button>
                        </div>
                        
                    </div>
                    
                </div> 
                
            </section>
            <!--/5. section Live Dates -->
            <!--6. section view all live dates -->
            <section class="view_dates"> 
                <div class="view_live_dates">
                    <a href="#">view all live dates</a>
                </div>
            </section>
            <!--/6. section view all live dates -->
        </main>
        <!-- /#site_main -->
        <!-- #site_footer -->
        <footer id="site_footer">
            <!-- top footer -->
            <div class="footer_top">
                <!-- logo top part footer -->
                <div class="logo_footer">
                     <img src="./dist/img/avada-music-logo.png" alt="">
                </div>
               <!-- navbar footer(menu) -->
                <div class="footer_navbar" v-for="(element, index) in menuFooter">
                    <a href="#">{{element.menu}}</a>
                </div>
            </div>
            <!-- /top footer -->
            <!-- bottom footer -->
            <div class="footer_bottom">
                <!-- copyright container -->
                <div class="copy_container">
                    <i class="fas fa-copyright"></i>
                    <p v-for="(element, index) in copyrightEl">
                         {{ element.copy }} |
                    </p>
                </div>
                <!-- social network container -->
                <div class="social_container">
                    <span v-for= "icon in socialIcons">
                        <a :href="icon.url"><i class='fab' :class="icon.class"></i></a> 
                    </span>
                </div>
            </div>
            <!-- bottom footer -->
        </footer>
        <!-- /#site_footer -->  
    </div>
    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="./dist/js/app.js"></script>
</body>
</html>