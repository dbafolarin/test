
        <div id="header">
            <div id="bodyimg">
                <div id="pagebox">
                    <div class="container">
                        <div id="top" class="row">
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <a href="<?php echo $this->url(array("controller" => "index", "action" => "index"), null, true); ?>"
                               title="Go to Homepage">
                               <img src="<?php echo $this->baseUrl(); ?>/images/newbanner_2.gif" class="img-responsive" alt="Logo - follionlogo" />
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                Email Address: <b>info@follioninvestment.com</b><br />
                                Website: <b>www.follioninvestment.com</b><br />
                                Telephone: <b>+234 1 7938742 or +234 1 2906633</b><br />
                                Mobile: <b>+234 8026990942 or +234 8033347944</b> <br />
                                Skype: <b>follioninvestmentlimited</b></b>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4">
                              RC. 476377. TIN:01253395-0001<br />
                                Register Offices Address: <br />
                                <b>3 Ilori Street, Ire-Akari Estate,<br />
                                    Isolo, Lagos-State, Nigeria. <br />
                                    West Africa.</b>  
                            </div>
                       
                        </div>
                    </div>

                    <?php echo $this->placeholder('menu'); ?>

                    <div class="cleaner"></div>

                    <div id="conbox">
                        <div id="skip" class="none"><a name="skip"></a></div>
                        <div id="con">
                            <?php echo $this->layout()->content; ?>
                            <div class="cleaner"></div>
                        </div>
                    </div>
                    <div class="cleaner"></div>

                    <?php echo $this->placeholder('footer'); ?>
                    <div class="cleaner"></div>

                </div>
            </div>
            
            
            
            
            
            
            
            
             <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->url(array("controller" => "index", "action" => "index"), null, true); ?>">
             <img src="<?php echo $this->baseUrl(); ?>/images/newbanner_2.gif" class="img-responsive" alt="Logo - follionlogo" />
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
                <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
                <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
                <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
                <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog-home-1.html">Blog Home 1</a></li>
                <li><a href="blog-home-2.html">Blog Home 2</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="sidebar.html">Sidebar Page</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>