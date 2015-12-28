<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if(!empty($title)) echo $title; else echo 'Profi satelitná a anténna technika | Elektronik Doktor'; // default title ?></title>
    <meta name="description" content="<?php if(!empty($desc)) echo $desc; ?>">
    <meta name="author" content="Milan Vodicka">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="3T1PZXtOlqWZDIl7Tc3X4VAaTP8V5zh5dq9ZC5P5p3Y" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/logo/favicon.png">
    <!-- <script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script> -->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="span12 logowrapper">
                    <h1 class="logo"><a href="<?php echo site_url(); ?>">ELEKTRONIK DOKTOR, spol. s r. o.</a></h1>
                </div>
	    </div>
	    <div class="row">
                <div class="span12">
                    <ul class="nav nav-pills main-nav">
			<li <?php if($page == 'montaz-satelitov') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('montaz-satelitov'); ?>">
                                <i class="<?php if($page == 'montaz-satelitov'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Montáž satelitov
                            </a>
                        </li>
			<li <?php if($page == 'ozvucenie-domu') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('ozvucenie-domu'); ?>">
                                <i class="<?php if($page == 'ozvucenie-domu'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Ozvučenie domu
                            </a>
                        </li>
                        <li <?php if($page == 'alarmy-jablotron') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('alarmy-jablotron'); ?>">
                                <i class="<?php if($page == 'alarmy-jablotron'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Alarmy Jablotron
                            </a>
                        </li>
			<li <?php if($page == 'digital-signage') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('digital-signage'); ?>">
                                <i class="<?php if($page == 'digital-signage'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Digital Signage 
                            </a>
                        </li>
			<li <?php if($page == 'spolocna-televizna-antena') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('spolocna-televizna-antena'); ?>">
                                <i class="<?php if($page == 'spolocna-televizna-antena'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Spoločná televízna anténa
                            </a>
                        </li>
			<?php if(false): ?>
			<li <?php if($page == 'hotelove-tv-systemy') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('hotelove-tv-systemy'); ?>">
                                <i class="<?php if($page == 'hotelove-tv-systemy'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                              	Hotelové TV systémy
                            </a>
                        </li>
			<?php endif; ?>
                        <li <?php if($page == 'kontakt') echo 'class="active"'; ?> >
                            <a href="<?php echo site_url('kontakt'); ?>">
                                <i class="<?php if($page == 'kontakt'){ echo 'icon-ok'; } else { echo 'icon-share-alt'; } ?>"></i>
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- /container -->
    </header>
    <?php if(!empty($featured)) $this->layout->widget('featured', array()); ?>
    <a name="main"><!-- --></a>
    <section>
    <div class="main" <?php if(empty($featured)) echo 'style="border-top:none;" '; ?>>
        <?php if(!empty($main)) echo $main; ?>
    </div><!-- /main -->
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <p>&copy; ELEKTRONIK DOKTOR, spol. s r.o.</p>
                </div>
            </div>
        </div>
    </footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script src="<?php echo base_url(); ?>js/libs/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>js/plugins.js"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-30687185-1'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
