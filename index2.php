<?php
/* =====================================================================
  Philadelphia Standards Template: Based on City of Philadelphia Standards Docs
  Author:   Matthew Murphy
  Version:  0.1
  Created:  August 2018
  Copyright:  City of Philadelphia - (C) 2018 - All rights reserved
  Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
  /* ===================================================================== */

defined('_JEXEC') or die;

// Load template framework
include_once JPATH_THEMES . '/' . $this->template . '/framework.php';

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/phila-standards.css');
    
if ($customCSS != -1) {
   //$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/' . $customCSS);
}
   
if (!$unsetCoreScripts == 0) {
    unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/system/js/core.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
    unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon.png">
    <jdoc:include type="head" />
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="twitter:card" content="summary">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Phillyvotes | City Commissioners">
    <meta property="og:image" content="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/oh_gee.png">
</head>

<body lang="en">
<?php if ($analytics != "UA-XXXXX-X") : ?>
    <script>
<!-- Google Tag Manager [phila.gov] -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $analytics; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $analytics; ?>');</script>
<!-- End Google Tag Manager -->
    </script>
<?php endif; ?>

    <div id="page">
        <div id="content">

<?php if ($this->countModules('nav')) : ?>                   
            <jdoc:include type="modules" name="nav" />
<?php endif; ?>
<?php if ($this->countModules('top')) : ?>
            <div style="position:static;"><br/></div>
            <div class="hero-content" id="topA">
                <section class="myrow">
                    <jdoc:include type="modules" name="top" style="joomberui" />
                </section>
            </div>
<?php endif; ?>
<?php if ($this->countModules('above')) : ?>
            <div class="above-row">
                <div class="wrapper">
                    <section class="row">
                        <!--aboverow-->
                        <jdoc:include type="modules" name="above" style="joomberui" />
                    </section>
                </div>
            </div>
<?php endif; ?>
            <div class="row">
                <!--mainrow-->
<?php if ($this->countModules('left')) : ?>
                <section class="<?php echo $leftWidth ?> columns sidebar">
                    <!--left-row-->
                    <jdoc:include type="modules" name="left" style="joomberui" />
                </section>
<?php endif; ?>
                <div class="<?php echo $mainwidth ?> columns">
                    <!--mainrow-->
<?php if ($this->countModules('above-content')) : ?>
                    <div class="above-content">
                        <!--above-content-->
                        <jdoc:include type="modules" name="above-content" style="joomberui" />
                    </div>
<?php endif; ?>
<?php if ($this->countModules('breadcrumbs')) : ?>
                    <div class="breadcrumbs-row">
                        <div class="wrapper">
                            <jdoc:include type="modules" name="breadcrumbs" style="none" />
                        </div>
                    </div>
<?php endif; ?>
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
<?php if ($this->countModules('below-content')) : ?>
                    <section class="below-content">
                        <!--below-content-->
                        <jdoc:include type="modules" name="below-content" style="joomberui" />
                    </section>
<?php endif; ?>
                </div>
<?php if ($this->countModules('right')) : ?>
                <section class="<?php echo $rightWidth ?> columns sidebar">
                    <!--right-row-->
                    <jdoc:include type="modules" name="right" style="joomberui" />
                </section>
<?php endif; ?>
            </div>
<?php if ($this->countModules('below')) : ?>
            <div class="below-row">
                <div class="wrapper">
                    <section class="row">
                        <!--belowrow-->
                        <jdoc:include type="modules" name="below" style="joomberui" />
                    </section>
                </div>
            </div>
<?php endif; ?>
<?php if ($this->countModules('bottom')) : ?>
            <div class="bottom-row">
                <div class="wrapper">
                    <section class="row">
                        <!--bottomrow-->
                        <jdoc:include type="modules" name="bottom" style="joomberui" />
                    </section>
                </div>
            </div>
<?php endif; ?>
        </div>
    </div>
    <footer data-swiftype-index='false' class="site-footer">
        <div class="fat">
<?php if ($this->countModules('footer')) : ?>
            <div class="row pvs ptl-mu phm equal-height">
                <jdoc:include type="modules" name="footer" style="joomberui" />
            </div>
<?php endif; ?>
            <div class="row classic">
                <nav class="columns center">
                    <ul class="inline-list">
                        <li class="medium-gray">
                            <a href="#">&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>
                        </li>
                        <li class="medium-gray">|</li>
                        <li class="medium-gray"><a href="http://www.phila.gov/privacy/pdfs/FinalCityOpenRecords.pdf" target="_blank">Right to know (pdf)</a></li>
                        <li class="medium-gray">|</li>
                        <li class="medium-gray"><a href="/terms-of-use/">Terms of use</a></li>
                        <li class="medium-gray">|</li>
                        <li class="medium-gray"><a href="/privacypolicy/">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bg-black">
        </div>
    </footer>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/phila-standards.js"></script>
    <script>
    $(document).foundation();
    </script>
    <!--<script src="scripts.js"></script>-->
</body>

</html>