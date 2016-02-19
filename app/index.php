<?php
require_once 'init.php';


// Read
  $rs = $db->query("SELECT * FROM T_work ");
  $works = $rs->fetchAll();



// echo $system[$current_lang.'_home_content'];

?>

<?php require_once 'header.php' ?>


    <div id="wrapper">

        <!-- The preloader we see before the whole site is loaded -->
        <div id="preloader" class="valign-wrapper">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only actually-black">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- A status spinner to indicate that some process is going on -->
        <div id="status">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue-only actually-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation bar -->
        <div class="navbar-fixed" id="nav">
            <nav>
                <div class="nav-wrapper">

                    <!-- Site name -->
                    <a href="/" class="brand-logo" style="font-size:25px;    "><img id="logo" src="favicon.png" >A p p t i s a n</a>

                    <!-- Mobile menu button -->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

                    <!-- Static menu -->
                    <ul class="right hide-on-med-and-down table-of-contents">
                      <?php include 'nav.php';?>

                    </ul>

                    <!-- Mobile menu, make sure it is equal to the statis menu -->
                    <ul class="side-nav" id="mobile-menu">
                          <?php include 'nav.php';?>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Triangles section -->
        <div id="triangles" class="scrollspy">
                 <canvas id="starfield" ></canvas>

            <div class="h1-wrapper valign-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <!-- Your company's slogan, feel free to add more tags here -->
                                <h1>Build apps the way an artisan does it.</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Action button -->
                    <a class="btn-floating btn-large waves-effect waves-dark green accent-2" id="explore">
                        <i class="mdi-navigation-arrow-forward indigo-text text-darken-4"></i>
                    </a>
                </div>






        </div>

        <!-- Services section -->
        <div class="section scrollspy" id="services">
            <div class="container">
                <div class="row">
                    <h2>We are Apptisan</h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
<?php echo $lang['intro']   ; ?>                     </p>
                    </div>
                </div>

                <!-- Row with service icons -->
                <div class="row services">
                    <div class="col s12 l3">
                        <i class="fa fa-5x fa-desktop animated-color"></i>
                        <div class="divider"></div>
                        <h5><?php echo   $lang['webapp'];?></h5>
                        <p><?php echo   $lang['webapp_desc'];?></p>
                        <a href="#contact" class="btn waves-effect waves-dark white black-text">Learn more</a>
                    </div>
                    <div class="col s12 l3">
                        <i class="fa fa-5x fa-mobile animated-color"></i>
                        <div class="divider"></div>
                        <h5><?php echo   $lang['mobileapp'];?></h5>
                        <p><?php echo   $lang['mobileapp_desc'];?></p>
                        <a href="#contact" class="btn waves-effect waves-dark white black-text">Discover</a>
                    </div>
                    <div class="col s12 l3">
                        <i class="fa fa-5x fa-cloud animated-color"></i>
                        <div class="divider"></div>
                        <h5><?php echo   $lang['cloudhosting'];?></h5>
                        <p><?php echo   $lang['cloudhosting_desc'];?></p>
                        <a href="#contact" class="btn waves-effect waves-dark white black-text">Try it</a>
                    </div>
                    <div class="col s12 l3">
                        <i class="fa fa-5x fa-code animated-color"></i>
                        <div class="divider"></div>
                        <h5><?php echo   $lang['website'];?></h5>
                        <p><?php echo   $lang['website_desc'];?></p>
                        <a href="#contact" class="btn waves-effect waves-dark white black-text">Explore</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="divider"></div>
        </div>

        <!-- Works section -->
        <div class="section scrollspy"id="works" >
            <div class="container" >
                <div class="row">
                    <h2><?php echo   $lang['works'];?></h2>
                    <!-- Category filter buttons -->
                    <div class="filter-options" >

                        <a class="btn-flat waves-green-accent waves-effect active" id="all" data-group="all"><?php echo   $lang['everything'];?></a>
                        <a class="btn-flat waves-green-accent waves-effect" data-group="hybrid"><?php echo   $lang['hybrid_mobile'];?></a>
                        <a class="btn-flat waves-green-accent waves-effect" data-group="app"><?php echo   $lang['native_mobile'];?></a>
                        <a class="btn-flat waves-green-accent waves-effect" data-group="website"><?php echo   $lang['website'];?></a>
                        <a class="btn-flat waves-green-accent waves-effect" data-group="webapp"><?php echo   $lang['webapp'];?></a>
                    </div>
                </div>
            </div>
            <div class="wide-container">
                <!-- Shuffle grid -->
                <div id="shuffle-grid" class="row">

                    <?php foreach($works as $wk) {?>
                    <a href="list.php?id=<?php echo $wk['id']?>" class="col s12 m6 l2 picture-item ajax-link" data-groups='["<?php echo $wk['type']?>"]'>
                        <img src="upload/<?php echo $wk['image']?>" class="responsive-img" alt="Ice cream">
                        <h5><?php echo $wk['title']?></h5>
                    </a>
                    <?php }?>

                </div>
            </div>
        </div>

        <!-- Get started section -->


        <!--
        <div class="section scrollspy" id="about">
            <div class="container">
                <div class="row">
                    <h2>The studio</h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                            Meet the superheroes, the most dedicated team to ever walk the land of the web. We're always
                            available to suit your needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wide-container">
                <div class="row team">
                    <div class="col s12 m6">
                        <div class="description-ball"></div>
                        <div class="description center-align">
                            <div class="row h4-row">
                                <h4>Ann Perkins<br><small>Art director and founder</small></h4>
                            </div>
                            <div class="row">
                                <div class="col s12 l4">
                                    +1-800-56-89-11
                                </div>
                                <div class="col s12 l4">
                                    <a href="mailto:ann@wata.com">ann@wata.com</a>
                                </div>
                                <div class="col s12 l4 social">
                                    <a role="button"><i class="fa fa-facebook"></i></a>
                                    <a role="button"><i class="fa fa-behance"></i></a>
                                    <a role="button"><i class="fa fa-deviantart"></i></a>
                                    <a role="button"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="images/team/121H.jpg" class="responsive-img" alt="Ann Perkins">
                    </div>
                    <div class="col s12 m6">
                        <div class="description-ball"></div>
                        <div class="description center-align">
                            <div class="row h4-row">
                                <h4>Dick Cleverley<br><small>Senior developer</small></h4>
                            </div>
                            <div class="row">
                                <div class="col s12 l4">
                                    +1-800-74-88-32
                                </div>
                                <div class="col s12 l4">
                                    <a href="mailto:dick@wata.com">dick@wata.com</a>
                                </div>
                                <div class="col s12 l4 social">
                                    <a role="button"><i class="fa fa-vk"></i></a>
                                    <a role="button"><i class="fa fa-github"></i></a>
                                    <a role="button"><i class="fa fa-bitbucket"></i></a>
                                    <a role="button"><i class="fa fa-tumblr"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="images/team/166H.jpg" class="responsive-img" alt="Dick Cleverley">
                    </div>
                    <div class="col s12 m6">
                        <div class="description-ball"></div>
                        <div class="description center-align">
                            <div class="row h4-row">
                                <h4>Jonathan Edgar Doe<br><small>System administrator</small></h4>
                            </div>
                            <div class="row">
                                <div class="col s12 l4">
                                    +1-800-69-32-81
                                </div>
                                <div class="col s12 l4">
                                    <a href="mailto:john.edgar@wata.com">jonathan.edgar@wata.com</a>
                                </div>
                                <div class="col s12 l4 social">
                                    <a role="button"><i class="fa fa-facebook"></i></a>
                                    <a role="button"><i class="fa fa-github"></i></a>
                                    <a role="button"><i class="fa fa-bitbucket"></i></a>
                                    <a role="button"><i class="fa fa-stack-overflow"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="images/team/93H.jpg" class="responsive-img" alt="Jonathan Edgar Doe">
                    </div>
                    <div class="col s12 m6">
                        <div class="description-ball"></div>
                        <div class="description center-align">
                            <div class="row h4-row">
                                <h4>Eva Green<br><small>UI/UX designer</small></h4>
                            </div>
                            <div class="row">
                                <div class="col s12 l4">
                                    +1-800-78-53-02
                                </div>
                                <div class="col s12 l4">
                                    <a href="mailto:eva@wata.com">eva@wata.com</a>
                                </div>
                                <div class="col s12 l4 social">
                                    <a role="button"><i class="fa fa-facebook"></i></a>
                                    <a role="button"><i class="fa fa-behance"></i></a>
                                    <a role="button"><i class="fa fa-deviantart"></i></a>
                                    <a role="button"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="images/team/172H.jpg" class="responsive-img" alt="Eva Green">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="divider"></div>
        </div>
 About section -->

        <!-- Prices section -->
        <div class="section scrollspy" id="prices">
            <div class="container">
                <div class="row">
                    <h2><?php echo $lang['price']; ?></h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                          <?php echo $lang['price_desc']; ?>
                        </p>
                    </div>
                    <div class="col s12">
                        <!-- Currency switcher radio buttons -->
                        <p class="right-align currency-switcher">
                              <?php echo $lang['currentcy']; ?>:
                            <span class="currency-group">
                                <input name="currency" type="radio" id="hkd" checked>
                                <label for="hkd">HKD</label>
                            </span>
                          <!--   <span class="currency-group">
                                <input name="currency" type="radio" id="rmb">
                                <label for="rmb">CNY</label>
                            </span>-->
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="price-container z-depth-1" id="standard">
                            <div class="offer"><?php echo $lang['mobileapp']; ?></div>
                            <div class="divider"></div>
                            <div class="price"><span style="font-size:20px;"> From </span>$28,000</div>
                            <ul>
                                <li>Graphic Design</li>
                                <li>User Experience Design</li>
                                <li>Hybrid\Native App Development</li>
                                <li>Server-side Development </li>
                                <li>One-Year Hosting </li>
                                 <li>Admin Tutorial </li>
                                <li>Technical Support </li>

                            </ul>
                            <a href="#contact" class="waves-effect waves-dark white black-text btn">  <?php echo $lang['quote']; ?></a>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="price-container z-depth-1 best-offer" id="professional">
                            <div class="offer"><?php echo $lang['webapp']; ?></div>
                            <div class="divider"></div>
                            <div class="price"><span style="font-size:20px;"> From </span>$18,000</div>
                            <ul>
                                 <li>Graphic Design</li>
                                <li>User Experience Design</li>
                                <li>Web App Development </li>
                                <li>Server-side Development</li>
                                <li>One-Year Hosting </li>
                                 <li>Admin Tutorial </li>
                                <li>Technical Support</li>


                            </ul>

                            <a href="#contact" class="waves-effect waves-light green accent-2 indigo-text text-darken-4 btn"><?php echo $lang['quote']; ?></a>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="price-container z-depth-1" id="extended">
                            <div class="offer"><?php echo $lang['website']; ?></div>
                            <div class="divider"></div>
                          <div class="price"><span style="font-size:20px;"> From </span>$8,000</div>
                            <ul>
                               <li>Graphic Design</li>
                                <li>User Experience Design</li>
                                <li>Website Development</li>
                                <li>One-Year Hosting</li>
                                <li>Admin Tutorial</li>
                                <li>Technical Support</li>
                            </ul>
                            <a href="#contact" class="waves-effect waves-dark white black-text btn"><?php echo $lang['quote']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div class="section grey-section scrollspy" id="subscribe">
            <div class="container">
                <div class="row">
                    <h2>Subscribe</h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                            Our Team began as a small part-time side business mainly focusing on providing website development services, such as: Wordpress theme coding, e-commerce sites. It then fell into Hybrid app & Native app development in which we found our second passion in business. We have since grown in our abilities and knowledge, and strive to continue to build upon our talents and expand our reach..
                        </p>
                        <p>Our skilled team can help you create an online presence that properly represents your business. Fill out the form below giving us as much detail as possible and a representative will get back to you with more information.
                        </P>
                    </div>
                </div>
                <div class="row">
                    <div class="col s8 offset-s2">

                        <div id="mc_embed_signup">
                            <form action="//pimmey.us11.list-manage.com/subscribe/post?u=4131d254e34d85ebd3ba25ad3&amp;id=302b5221bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                                <div id="mc_embed_signup_scroll" class="input-field">
                                    <label for="mce-EMAIL">Your email</label>
                                    <input type="email" name="EMAIL" class="email" id="mce-EMAIL" required>

                                    <div class="cant-touch-this">
                                        <input type="text" name="b_4131d254e34d85ebd3ba25ad3_302b5221bd" tabindex="-1" value="">
                                    </div>
                                    <div class="clear center-align">
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="waves-effect waves-light btn-large green accent-2 indigo-text text-darken-4">
                                            <i class="fa fa-paper-plane left"></i>Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
Subscribe section -->
        <!--
        <div class="section scrollspy" id="blog">
            <div class="container">
                <div class="row">
                    <h2>Latest blog posts</h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                            Want to get a little more personal? Read our stories, meet the team and get a preview of the future
                            products. All this and more in our blog.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wide-container">
                <div class="row masonry">
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/building.jpg" alt="Building">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">New office <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    After reaching 25 team members, we had to move to a bigger office and we've chosen
                                    this beautiful historic building in the middle of downtown area.
                                </p>
                                <p><a href="ajax/blog-posts/new-office.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l8">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/bottles.jpg" alt="Bottles">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Drink milk <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Throughout the world, there are more than six billion consumers of milk and milk products.
                                    Over 750 million people live within dairy farming households.
                                </p>
                                <p><a href="ajax/blog-posts/drink-milk.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/yoga.jpg" alt="Yoga">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Promoting yoga <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Various yogic groups had become prominent in Punjab in the 15th and 16th century,
                                    when Sikhism was in its nascent stage. The Guru Granth Sahib states:
                                </p>
                                <blockquote>
                                    O Yogi, Nanak tells nothing but the truth. You must discipline your mind.
                                    The devotee must meditate on the Word Divine. It is His grace which brings about the union.
                                    He understands, he also sees. Good deeds help one merge into Divination.
                                </blockquote>
                                <p><a href="ajax/blog-posts/promoting-yoga.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/coffee.jpg" alt="Coffee">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Coffee is your friend <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Coffee berries and their seeds undergo several processes before they become the familiar
                                    roasted coffee. Berries have been traditionally selectively picked by hand;
                                    a labor-intensive method, it involves the selection of only the berries at the peak of ripeness.
                                </p>
                                <p><a href="ajax/blog-posts/coffee.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/a4-paper-mockup.jpg" alt="A4 paper mockup">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">A4 paper mockup <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Our latest freebie release includes beautiful A4 paper mockup. You can use it to show
                                    off your stationary design efforts and other print stuff.
                                </p>
                                <p><a href="ajax/blog-posts/a4-paper-mockup.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/drone.jpg" alt="Drone">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Droning around <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Just taking our brand new custom-made drone for a spin. We're planning on using it to
                                    create awesome aerial footage and take wonderful photos from above.
                                </p>
                                <p><a href="ajax/blog-posts/droning-around.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="divider"></div>
        </div>
Blog section -->
        <!-- Contact form section -->


        <div class="section scrollspy"id="contact">
            <div class="container" >
                <div class="row">
                    <h2><?php echo   $lang['contact'];?></h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                            <?php echo   $lang['contact_desc'];?>
                        </p>
                        <p class="right-align">
                         <!--   <i class="fa fa-info-circle"></i> Last name is not required.-->
                        </p>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12 m12 l8 offset-l2" action="form.php" id="contact-form" novalidate>
                        <!-- This field helps us avoid spam bots, don't remove it -->
                        <div class="cant-touch-this">

                            <input type="text" name="hammertime" tabindex="-1" value="">
                        </div>
                        <!-- End of anti-spam field -->
                        <div class="row">
                            <div class="input-field col s4 m4">

                                <input id="name" name="name" type="text" class="required">
                                <label for="name">Name</label>
                            </div>
                           <div class="input-field col s4 m4">
                                <input id="email" name="email" type="email" class="required">
                                <label for="email">Email</label>
                            </div>


                             <div class="input-field col s4 m4">

                                <input id="tel" name="tel" type="text" class="required">
                                <label for="tel">Tel</label>
                            </div>





                            <div class="input-field col s12">
                                <textarea id="message" name="message" class="materialize-textarea required"></textarea>
                                <label for="message">Message</label>
                            </div>

                        <div class="center-align">
                            <button type="submit" name="send" class="btn-large disabled">
                                <?php echo   $lang['send'];?>
                            </button>
                        </div>




                    </form>
                </div>
            </div>
            <div class="wide-container">
                <div class="row">
                    <div class="col s12">
                        <!-- Google map container -->

                    </div>
                </div>
            </div>
            <div class="container contact-details">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h5><?php echo   $lang['payment'];?></h5>
                        <div class="divider"></div>
                        <p>
                             <i class="fa fa-cc-paypal"></i>  Paypal<br>
                            <i class="fa fa-credit-card"></i> <?php echo   $lang['creditcard'];?></a>
                        </p>
                    </div>

                    <div class="col s12 m6 l6">
                        <h5><?php echo   $lang['reachus'];?></h5>
                        <div class="divider"></div>
                        <p>
                             <i class="fa fa-phone"></i>  6827 9835<br>
                               <i class="fa fa-whatsapp"></i> 6827 9835<br>
                            <i class="fa fa-envelope"></i> <a href="mailto:hi@apptisan.xyz">hi@apptisan.xyz</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer section -->
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    © 2016 Apptisan Team . All rights reserved.<a href="ajax/pages/privacy-policy.html" class="ajax-link"> </a>

                    <!-- Social
                    <span class="social right">
                        <a href="#!"><i class="fa fa-facebook"></i></a>
                        <a href="#!"><i class="fa fa-vk"></i></a>
                        <a href="#!"><i class="fa fa-google-plus"></i></a>
                        <a href="#!"><i class="fa fa-github"></i></a>
                        <a href="#!"><i class="fa fa-deviantart"></i></a>
                    </span>
 icons -->
                </div>
            </div>
        </footer>

    </div>
 </div>

    <!-- Ajax box container, waiting for its turn -->
    <div id="ajax-box" class="translate"></div>


<?php require_once 'footer.php' ?>
