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
    <header class="global-nav no-js pbm pbn-mu mbn-mu">
        <h1 class="accessible">City of Philadelphia</h1>
        <!-- Beta opt-out -->
        <div data-swiftype-index='false' class="alert alert-persistent">
            <div class="row">
                <div class="small-24 columns">
                    <p class="hide-for-small-only">
                        We're piloting a new, user-friendly website design. To view the existing City website, visit <a class="go-back external" aria-label="back to phila.gov" href="http://www.phila.gov/pages/default.aspx?opt-out">phila.gov</a>.
                    </p>
                    <p class="show-for-small-only">
                        Back to <a class="go-back external" aria-label="back to phila.gov" href="http://www.phila.gov/pages/default.aspx?opt-out">phila.gov</a>.
                    </p>
                </div>
            </div>
        </div>
        <!-- Utility Navigation -->
        <div class="row columns bg-ben-franklin-blue expanded utility-nav" data-swiftype-index="false">
            <div class="row">
                <div class="medium-24 columns float-right">
                    <ul class="medium-horizontal menu show-for-medium float-right">
                        <li><a href="/departments/mayor/">Office of the Mayor</a></li>
                        <li><a href="/departments/">City government directory</a></li>
                        <li>
                            <div id="google_translate_element" class="no-js"><span class="show-for-sr">Google Translate</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--sticky/desktop nav -->
        <div id="global-sticky-nav" class="row">
            <div class="small-24 columns">
                <div class="row primary-menu" data-sticky-container data-swiftype-index="false">
                    <div class="columns phila-sticky phn" data-margin-top="0" data-sticky data-sticky-on="medium">
                        <div class="row sticky-header-width">
                            <div class="small-16 medium-6 columns valign small-push-4 medium-push-0">
                                <div class="valign-cell">
                                    <a href="https://beta.phila.gov" class="logo" tabindex="1" aria-label="City of Philadelphia">
                                      <img src="https://beta.phila.gov/wp-content/themes/phila.gov-theme/img/city-of-philadelphia-logo.svg" data-fallback="//cityofphiladelphia.github.io/patterns/images/city-of-philadelphia.png" alt="City of Philadelphia">
                                    </a>
                                </div>
                            </div>
                            <a href="#page" aria-hidden="false" class="accessible">Skip to main content</a>
                            <div class="medium-17 columns show-for-medium desktop-nav">
                                <div class="top-bar-right valign-mu">
                                    <nav data-swiftype-index="false" class="valign-mu">
                                        <ul class="horizontal menu pan valign-mu">
                                            <li class="services-menu-link" data-toggle="services-mega-menu">
                                                <a href="" class="no-link valign-cell" onclick="alert('removed onclick');">Services</a>
                                            </li>
                                            <li>
                                                <a href="/programs/" class="valign-cell">Programs &amp; initiatives</a>
                                            </li>
                                            <li>
                                                <a href="/the-latest/" class="valign-cell"> News &amp; events</a>
                                            </li>
                                            <li>
                                                <a href="/documents/" class="valign-cell"> Publications &amp; forms</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="small-5 medium-1 columns valign phn-m">
                                <div class="valign-cell">
                                    <button class="site-search" type="button" data-toggle="search-dropdown">
                                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                                        <span class="show-for-small-only">Search</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- close row -->
                        <!--Begin mobile nav -->
                        <div class="top-bar">
                            <div class="title-bar small-5 columns" data-responsive-toggle="mobile-nav" data-swiftype-index="false" data-hide-for="medium">
                                <button class="menu-icon" type="button" data-toggle>
                                    <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
                                    <span class="title-bar-title">Menu</span>
                                </button>
                            </div>
                            <div class="primary-menu medium-15 medium-push-2 small-24 columns valign-mu" id="mobile-nav">
                                <div class="top-bar-right valign-mu show-for-small-only">
                                    <nav data-swiftype-index="false" class="valign-mu">
                                        <ul id="mobile-nav-drilldown" class="vertical menu pan valign-mu">
                                            <li><a href="/"><i class="fa fa-home fa-lg"></i> Home</a></li>
                                            <li class="is-drilldown-submenu-parent" tabindex="0">
                                                <a href="#services" class="valign-cell"><i class="fa fa-list show-for-small-only"></i>Services</a>
                                                <ul class="menu vertical menu-top-offset" tabindex="0">
                                                    <li tabindex="0"><a href="/services/">Service directory</a></li>
                                                    <li class="page_item page-item-12819 page_item_has_children"><a href="https://beta.phila.gov/services/birth-marriage-life-events/"><span>Birth, marriage &#038; life events</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-35721"><a href="https://beta.phila.gov/services/birth-marriage-life-events/adopt-a-child/"><span>Adopt a child</span></a></li>
                                                            <li class="page_item page-item-35599 page_item_has_children"><a href="https://beta.phila.gov/services/birth-marriage-life-events/become-a-foster-parent/"><span>Become a foster parent</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-33930"><a href="https://beta.phila.gov/services/birth-marriage-life-events/become-a-foster-parent/ask-the-commissioners-action-response-office-caro/"><span>Ask the DHS Commissioner&#8217;s Action Response Office (CARO)</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12930"><a href="https://beta.phila.gov/services/birth-marriage-life-events/get-a-birth-certificate/"><span>Get a birth certificate</span></a></li>
                                                            <li class="page_item page-item-12935"><a href="https://beta.phila.gov/services/birth-marriage-life-events/get-a-copy-of-a-divorce-decree/"><span>Get a copy of a divorce decree</span></a></li>
                                                            <li class="page_item page-item-12932"><a href="https://beta.phila.gov/services/birth-marriage-life-events/get-a-death-certificate/"><span>Get a death certificate</span></a></li>
                                                            <li class="page_item page-item-12926"><a href="https://beta.phila.gov/services/birth-marriage-life-events/get-a-marriage-license/"><span>Get a marriage license</span></a></li>
                                                            <li class="page_item page-item-37169"><a href="https://beta.phila.gov/services/birth-marriage-life-events/request-medical-examiner-records/"><span>Request Medical Examiner records</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12821 page_item_has_children"><a href="https://beta.phila.gov/services/business-self-employment/"><span>Business &#038; self-employment</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13784 page_item_has_children"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/"><span>Business taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-13797"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/amusement-tax/"><span>Amusement Tax</span></a></li>
                                                                    <li class="page_item page-item-13799"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/business-income-receipts-tax-birt/"><span>Business Income &#038; Receipts Tax (BIRT)</span></a></li>
                                                                    <li class="page_item page-item-13801"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/hotel-tax/"><span>Hotel Tax</span></a></li>
                                                                    <li class="page_item page-item-13803"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/liquor-tax/"><span>Liquor Tax</span></a></li>
                                                                    <li class="page_item page-item-13805"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/mechanical-amusement-tax/"><span>Mechanical Amusement Tax</span></a></li>
                                                                    <li class="page_item page-item-13809"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/net-profits-tax/"><span>Net Profits Tax</span></a></li>
                                                                    <li class="page_item page-item-13811"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/outdoor-advertising-tax/"><span>Outdoor Advertising Tax</span></a></li>
                                                                    <li class="page_item page-item-13813"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/parking-tax/"><span>Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-13816"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/philadelphia-beverage-tax/"><span>Philadelphia Beverage Tax</span></a></li>
                                                                    <li class="page_item page-item-13820"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/sales-use-hotel-occupancy-tax/"><span>Sales, Use, &#038; Hotel Occupancy Tax</span></a></li>
                                                                    <li class="page_item page-item-13831"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/tobacco-and-tobacco-related-products-tax/"><span>Tobacco and Tobacco-Related Products Tax</span></a></li>
                                                                    <li class="page_item page-item-13833"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/use-occupancy-tax/"><span>Use &#038; Occupancy Tax</span></a></li>
                                                                    <li class="page_item page-item-13835"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/valet-parking-tax/"><span>Valet Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-13837"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/vehicle-rental-tax/"><span>Vehicle Rental Tax</span></a></li>
                                                                    <li class="page_item page-item-13840"><a href="https://beta.phila.gov/services/business-self-employment/business-taxes/wage-tax-employers/"><span>Wage Tax (employers)</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13095"><a href="https://beta.phila.gov/services/business-self-employment/find-out-what-license-you-need-for-your-business/"><span>Find out what license you need for your business</span></a></li>
                                                            <li class="page_item page-item-28213"><a href="https://beta.phila.gov/services/business-self-employment/get-a-tax-account/"><span>Get a tax account</span></a></li>
                                                            <li class="page_item page-item-13132"><a href="https://beta.phila.gov/services/business-self-employment/paid-sick-leave/"><span>Paid sick leave</span></a></li>
                                                            <li class="page_item page-item-15191"><a href="https://beta.phila.gov/services/business-self-employment/register-a-business/"><span>Register a business</span></a></li>
                                                            <li class="page_item page-item-18424"><a href="https://beta.phila.gov/services/business-self-employment/report-graffiti/"><span>Report graffiti</span></a></li>
                                                            <li class="page_item page-item-23725"><a href="https://beta.phila.gov/services/business-self-employment/report-wage-theft/"><span>Report wage theft</span></a></li>
                                                            <li class="page_item page-item-19489"><a href="https://beta.phila.gov/services/business-self-employment/vendor-payments-status/"><span>Vendor payments status</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12823 page_item_has_children"><a href="https://beta.phila.gov/services/cars-parking-transportation/"><span>Cars, parking &#038; transportation</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-45416"><a href="https://beta.phila.gov/services/cars-parking-transportation/apply-for-a-disabled-parking-permit/"><span>Apply for a disabled parking permit</span></a></li>
                                                            <li class="page_item page-item-44199"><a href="https://beta.phila.gov/services/cars-parking-transportation/apply-for-a-residential-parking-permit/"><span>Apply for a residential parking permit</span></a></li>
                                                            <li class="page_item page-item-12984"><a href="https://beta.phila.gov/services/cars-parking-transportation/bike-share-program/"><span>Bike share program</span></a></li>
                                                            <li class="page_item page-item-12979"><a href="https://beta.phila.gov/services/cars-parking-transportation/dispute-a-parking-ticket/"><span>Dispute a parking ticket</span></a></li>
                                                            <li class="page_item page-item-24080"><a href="https://beta.phila.gov/services/cars-parking-transportation/dispute-a-red-light-camera-ticket/"><span>Dispute a red light camera ticket</span></a></li>
                                                            <li class="page_item page-item-44238"><a href="https://beta.phila.gov/services/cars-parking-transportation/get-a-hauling-permit/"><span>Get a  hauling permit</span></a></li>
                                                            <li class="page_item page-item-12956"><a href="https://beta.phila.gov/services/cars-parking-transportation/get-your-car-back-when-it-has-been-towed/"><span>Get your car back when it has been towed</span></a></li>
                                                            <li class="page_item page-item-12960"><a href="https://beta.phila.gov/services/cars-parking-transportation/pay-a-parking-ticket/"><span>Pay a parking ticket</span></a></li>
                                                            <li class="page_item page-item-12966"><a href="https://beta.phila.gov/services/cars-parking-transportation/pay-a-red-light-ticket/"><span>Pay a red light ticket</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12825 page_item_has_children"><a href="https://beta.phila.gov/services/crime-law-justice/"><span>Crime, law &#038; justice</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13010"><a href="https://beta.phila.gov/services/crime-law-justice/become-a-police-officer/"><span>Become a police officer</span></a></li>
                                                            <li class="page_item page-item-13492"><a href="https://beta.phila.gov/services/crime-law-justice/discrimination/"><span>Discrimination</span></a></li>
                                                            <li class="page_item page-item-45273"><a href="https://beta.phila.gov/services/crime-law-justice/find-a-police-station/"><span>Find a police station</span></a></li>
                                                            <li class="page_item page-item-12555"><a href="https://beta.phila.gov/services/crime-law-justice/find-an-inmate/"><span>Find an inmate</span></a></li>
                                                            <li class="page_item page-item-12990"><a href="https://beta.phila.gov/services/crime-law-justice/get-a-police-report/"><span>Get a police report</span></a></li>
                                                            <li class="page_item page-item-13481"><a href="https://beta.phila.gov/services/crime-law-justice/get-a-restraining-order/"><span>Get a restraining order</span></a></li>
                                                            <li class="page_item page-item-33768"><a href="https://beta.phila.gov/services/crime-law-justice/get-help-with-domestic-violence/"><span>Get help with domestic violence</span></a></li>
                                                            <li class="page_item page-item-12994"><a href="https://beta.phila.gov/services/crime-law-justice/get-notified-when-an-inmate-is-released/"><span>Get notified when an inmate is released</span></a></li>
                                                            <li class="page_item page-item-13001"><a href="https://beta.phila.gov/services/crime-law-justice/report-a-noise-violation/"><span>Report a noise violation</span></a></li>
                                                            <li class="page_item page-item-13105"><a href="https://beta.phila.gov/services/crime-law-justice/report-child-abuse-or-neglect/"><span>Report child abuse or neglect</span></a></li>
                                                            <li class="page_item page-item-13140"><a href="https://beta.phila.gov/services/crime-law-justice/report-elder-abuse/"><span>Report elder abuse</span></a></li>
                                                            <li class="page_item page-item-20088"><a href="https://beta.phila.gov/services/crime-law-justice/report-for-jury-duty/"><span>Report for jury duty</span></a></li>
                                                            <li class="page_item page-item-18416"><a href="https://beta.phila.gov/services/crime-law-justice/report-graffiti/"><span>Report graffiti</span></a></li>
                                                            <li class="page_item page-item-45271"><a href="https://beta.phila.gov/services/crime-law-justice/report-wrongdoing/"><span>Report wrongdoing</span></a></li>
                                                            <li class="page_item page-item-45980"><a href="https://beta.phila.gov/services/crime-law-justice/search-civil-case-dockets/"><span>Search civil case dockets</span></a></li>
                                                            <li class="page_item page-item-13006"><a href="https://beta.phila.gov/services/crime-law-justice/submit-a-tip-to-the-police/"><span>Submit a tip to the police</span></a></li>
                                                            <li class="page_item page-item-25570"><a href="https://beta.phila.gov/services/crime-law-justice/visit-a-person-in-jail-or-prison/"><span>Visit a person in jail or prison</span></a></li>
                                                            <li class="page_item page-item-14334"><a href="https://beta.phila.gov/services/crime-law-justice/where-to-vote/"><span>Voting</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12827 page_item_has_children"><a href="https://beta.phila.gov/services/culture-recreation/"><span>Culture &#038; recreation</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-29462"><a href="https://beta.phila.gov/services/culture-recreation/apply-for-a-philadelphia-activities-fund-grant/"><span>Apply for a Philadelphia Activities Fund grant</span></a></li>
                                                            <li class="page_item page-item-29761"><a href="https://beta.phila.gov/services/culture-recreation/enroll-in-a-youth-parks-recreation-program/"><span>Enroll in a youth Parks &#038; Recreation program</span></a></li>
                                                            <li class="page_item page-item-13122"><a href="https://beta.phila.gov/services/culture-recreation/events-in-philadelphia-parks/"><span>Events in Philadelphia parks</span></a></li>
                                                            <li class="page_item page-item-13054"><a href="https://beta.phila.gov/services/culture-recreation/find-a-playground-or-recreation-center/"><span>Find a playground or recreation center</span></a></li>
                                                            <li class="page_item page-item-13452"><a href="https://beta.phila.gov/services/culture-recreation/find-a-swimming-pool/"><span>Find a swimming pool</span></a></li>
                                                            <li class="page_item page-item-13166"><a href="https://beta.phila.gov/services/culture-recreation/find-an-activity/"><span>Find Philadelphia Parks &#038; Recreation activities</span></a></li>
                                                            <li class="page_item page-item-14099"><a href="https://beta.phila.gov/services/culture-recreation/get-a-library-card/"><span>Get a library card</span></a></li>
                                                            <li class="page_item page-item-29451"><a href="https://beta.phila.gov/services/culture-recreation/make-an-appointment-at-the-philadelphia-parks-rec-historic-archive/"><span>Make an appointment at the Philadelphia Parks &#038; Rec Historic Archive</span></a></li>
                                                            <li class="page_item page-item-29470"><a href="https://beta.phila.gov/services/culture-recreation/register-for-summer-camp/"><span>Register for summer camp</span></a></li>
                                                            <li class="page_item page-item-29819"><a href="https://beta.phila.gov/services/culture-recreation/rent-a-parks-recreation-venue/"><span>Rent a Parks &#038; Recreation venue</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12833 page_item_has_children"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/"><span>Diversity, inclusion &#038; immigration</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13149"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/accessibility-compliance/"><span>Accessibility compliance</span></a></li>
                                                            <li class="page_item page-item-13142"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/become-a-us-citizen/"><span>Become a U.S. citizen</span></a></li>
                                                            <li class="page_item page-item-13151"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/discrimination/"><span>Discrimination</span></a></li>
                                                            <li class="page_item page-item-13145"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/learn-english/"><span>Learn English</span></a></li>
                                                            <li class="page_item page-item-13494"><a href="https://beta.phila.gov/services/diversity-inclusion-immigration/lgbt-community-services/"><span>LGBT community services</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12829 page_item_has_children"><a href="https://beta.phila.gov/services/education-learning/"><span>Education &#038; learning</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13162"><a href="https://beta.phila.gov/services/education-learning/become-a-substitute-teacher/"><span>Become a substitute teacher</span></a></li>
                                                            <li class="page_item page-item-13164"><a href="https://beta.phila.gov/services/education-learning/charter-schools/"><span>Charter schools</span></a></li>
                                                            <li class="page_item page-item-13157"><a href="https://beta.phila.gov/services/education-learning/early-childhood-education/"><span>Early childhood education</span></a></li>
                                                            <li class="page_item page-item-13022"><a href="https://beta.phila.gov/services/education-learning/find-affordable-childcare/"><span>Find affordable childcare</span></a></li>
                                                            <li class="page_item page-item-13155"><a href="https://beta.phila.gov/services/education-learning/find-your-designated-neighborhood-school/"><span>Find your designated neighborhood school</span></a></li>
                                                            <li class="page_item page-item-13536"><a href="https://beta.phila.gov/services/education-learning/get-a-library-card/"><span>Get a library card</span></a></li>
                                                            <li class="page_item page-item-13147"><a href="https://beta.phila.gov/services/education-learning/learn-english/"><span>Learn English</span></a></li>
                                                            <li class="page_item page-item-13153"><a href="https://beta.phila.gov/services/education-learning/take-a-free-class/"><span>Take a free class</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12835 page_item_has_children"><a href="https://beta.phila.gov/services/mental-physical-health/"><span>Mental &#038; physical health</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13050"><a href="https://beta.phila.gov/services/mental-physical-health/air-quality/"><span>Air quality</span></a></li>
                                                            <li class="page_item page-item-12423"><a href="https://beta.phila.gov/services/mental-physical-health/city-health-centers/"><span>City health centers</span></a></li>
                                                            <li class="page_item page-item-13046"><a href="https://beta.phila.gov/services/mental-physical-health/code-blue/"><span>Code Blue</span></a></li>
                                                            <li class="page_item page-item-13044"><a href="https://beta.phila.gov/services/mental-physical-health/cooling-centers/"><span>Cooling centers</span></a></li>
                                                            <li class="page_item page-item-37156"><a href="https://beta.phila.gov/services/mental-physical-health/get-bereavement-support/"><span>Get bereavement support</span></a></li>
                                                            <li class="page_item page-item-32060 page_item_has_children"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/"><span>Get vaccinated</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-45078"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/get-the-vaccines-your-child-needs-to-start-school/"><span>Get the vaccines your child needs to start school</span></a></li>
                                                                    <li class="page_item page-item-30857"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/get-vaccinated-if-you-dont-have-health-insurance/"><span>Get vaccinated (if you don&#8217;t have health insurance)</span></a></li>
                                                                    <li class="page_item page-item-30843"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/get-vaccinated-if-you-have-health-insurance/"><span>Get vaccinated (if you have health insurance)</span></a></li>
                                                                    <li class="page_item page-item-30839"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/get-your-annual-flu-shot/"><span>Get your annual flu shot</span></a></li>
                                                                    <li class="page_item page-item-32015"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/vaccinate-your-child/"><span>Vaccinate your child</span></a></li>
                                                                    <li class="page_item page-item-31777"><a href="https://beta.phila.gov/services/mental-physical-health/get-vaccinated/get-travel-vaccinations/"><span>Get travel vaccinations</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13059"><a href="https://beta.phila.gov/services/mental-physical-health/lead-exposure/"><span>Lead exposure</span></a></li>
                                                            <li class="page_item page-item-30933"><a href="https://beta.phila.gov/services/mental-physical-health/learn-how-to-get-and-use-naloxone-narcan/"><span>Learn how to get and use naloxone (Narcan®)</span></a></li>
                                                            <li class="page_item page-item-13004"><a href="https://beta.phila.gov/services/mental-physical-health/report-a-noise-violation/"><span>Report a noise violation</span></a></li>
                                                            <li class="page_item page-item-13103"><a href="https://beta.phila.gov/services/mental-physical-health/report-child-abuse-or-neglect/"><span>Report child abuse or neglect</span></a></li>
                                                            <li class="page_item page-item-27427"><a href="https://beta.phila.gov/services/mental-physical-health/reunify-my-family/"><span>Reunify my family</span></a></li>
                                                            <li class="page_item page-item-13042"><a href="https://beta.phila.gov/services/mental-physical-health/services-for-the-homeless/"><span>Services for people experiencing homelessness</span></a></li>
                                                            <li class="page_item page-item-12545 page_item_has_children"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/"><span>Zika virus</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12553"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/overview/"><span>Overview</span></a></li>
                                                                    <li class="page_item page-item-12549"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/prevention/"><span>Prevention</span></a></li>
                                                                    <li class="page_item page-item-12548"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/pregnancy-risks/"><span>Pregnancy risks</span></a></li>
                                                                    <li class="page_item page-item-12547"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/travel-precautions/"><span>Travel precautions</span></a></li>
                                                                    <li class="page_item page-item-12546"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/diagnosis-treatment/"><span>Diagnosis &#038; treatment</span></a></li>
                                                                    <li class="page_item page-item-12550"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/mosquito-control/"><span>What you can do</span></a></li>
                                                                    <li class="page_item page-item-12551"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/what-the-city-is-doing/"><span>What the City is doing</span></a></li>
                                                                    <li class="page_item page-item-12552"><a href="https://beta.phila.gov/services/mental-physical-health/zika-virus/common-concerns/"><span>Common concerns</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12839 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/"><span>Payments, assistance &#038; taxes</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13037"><a href="https://beta.phila.gov/services/payments-assistance-taxes/appeal-a-property-assessment/"><span>Appeal a property assessment</span></a></li>
                                                            <li class="page_item page-item-36651"><a href="https://beta.phila.gov/services/payments-assistance-taxes/appeal-a-water-department-decision/"><span>Appeal a water department decision</span></a></li>
                                                            <li class="page_item page-item-11695 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/"><span>Business taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-11727"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/amusement-tax/"><span>Amusement Tax</span></a></li>
                                                                    <li class="page_item page-item-11729"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/business-income-receipts-tax-birt/"><span>Business Income &#038; Receipts Tax (BIRT)</span></a></li>
                                                                    <li class="page_item page-item-11733"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/hotel-tax/"><span>Hotel Tax</span></a></li>
                                                                    <li class="page_item page-item-11735"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/liquor-tax/"><span>Liquor Tax</span></a></li>
                                                                    <li class="page_item page-item-11737"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/mechanical-amusement-tax/"><span>Mechanical Amusement Tax</span></a></li>
                                                                    <li class="page_item page-item-11739"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/net-profits-tax/"><span>Net Profits Tax</span></a></li>
                                                                    <li class="page_item page-item-11741"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/outdoor-advertising-tax/"><span>Outdoor Advertising Tax</span></a></li>
                                                                    <li class="page_item page-item-11743"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/parking-tax/"><span>Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-11747"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/philadelphia-beverage-tax/"><span>Philadelphia Beverage Tax</span></a></li>
                                                                    <li class="page_item page-item-11745"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/sales-use-hotel-occupancy-tax/"><span>Sales, Use, &#038; Hotel Occupancy Tax</span></a></li>
                                                                    <li class="page_item page-item-11749"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/tobacco-and-tobacco-related-products-tax/"><span>Tobacco and Tobacco-Related Products Tax</span></a></li>
                                                                    <li class="page_item page-item-11751"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/use-occupancy-tax/"><span>Use &#038; Occupancy Tax</span></a></li>
                                                                    <li class="page_item page-item-11753"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/valet-parking-tax/"><span>Valet Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-11755"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/vehicle-rental-tax/"><span>Vehicle Rental Tax</span></a></li>
                                                                    <li class="page_item page-item-11757"><a href="https://beta.phila.gov/services/payments-assistance-taxes/business-taxes/wage-tax-employers/"><span>Wage Tax (employers)</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13671 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/"><span>Debt collection</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-13673"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/pay-delinquent-tax-balances/"><span>Pay delinquent tax balances</span></a></li>
                                                                    <li class="page_item page-item-34698"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/pay-for-work-done-by-the-city-on-your-property/"><span>Pay for work done by the City on your property</span></a></li>
                                                                    <li class="page_item page-item-47276"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/resolve-business-and-income-wage-tax-liens-judgments/"><span>Resolve business and income/wage tax liens &#038; judgments</span></a></li>
                                                                    <li class="page_item page-item-43757"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/resolve-water-liens-judgments/"><span>Resolve water liens &#038; judgments</span></a></li>
                                                                    <li class="page_item page-item-13677"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/real-estate-tax-receivership/"><span>Real Estate Tax sequestration</span></a></li>
                                                                    <li class="page_item page-item-13680"><a href="https://beta.phila.gov/services/payments-assistance-taxes/debt-collection/debt-collection-agencies/"><span>Debt collection agencies</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12920 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/"><span>File and/or make payments</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-33750"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/amusement-tax/"><span>Amusement Tax</span></a></li>
                                                                    <li class="page_item page-item-33761"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/beverage-tax/"><span>Beverage Tax</span></a></li>
                                                                    <li class="page_item page-item-17482"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-business-income-receipts-tax/"><span>Business Income &#038; Receipts Tax (BIRT)</span></a></li>
                                                                    <li class="page_item page-item-33791"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/earnings-tax-employees/"><span>Earnings Tax (employees)</span></a></li>
                                                                    <li class="page_item page-item-17484"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-hotel-tax/"><span>Hotel Tax</span></a></li>
                                                                    <li class="page_item page-item-33796"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/liquor-tax/"><span>Liquor Tax</span></a></li>
                                                                    <li class="page_item page-item-17486"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-net-profits-tax/"><span>Net Profits Tax</span></a></li>
                                                                    <li class="page_item page-item-33801"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/outdoor-advertising-tax/"><span>Outdoor Advertising Tax</span></a></li>
                                                                    <li class="page_item page-item-33805"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/parking-tax/"><span>Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-17495"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-real-estate-tax/"><span>Real Estate Taxes</span></a></li>
                                                                    <li class="page_item page-item-17497"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-school-income-tax/"><span>School Income Tax (SIT)</span></a></li>
                                                                    <li class="page_item page-item-22864"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-tobacco-tax/"><span>Tobacco Tax</span></a></li>
                                                                    <li class="page_item page-item-22868"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-your-use-occupancy-tax/"><span>Use &#038; Occupancy Tax</span></a></li>
                                                                    <li class="page_item page-item-33811"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/valet-parking-tax/"><span>Valet Parking Tax</span></a></li>
                                                                    <li class="page_item page-item-33814"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/vehicle-rental-tax/"><span>Vehicle Rental Tax</span></a></li>
                                                                    <li class="page_item page-item-33129"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/file-and-pay-your-wage-tax-employers/"><span>Wage Tax (employers)</span></a></li>
                                                                    <li class="page_item page-item-12899"><a href="https://beta.phila.gov/services/payments-assistance-taxes/make-a-payment/pay-a-water-bill/"><span>Water bill</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-28206"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-a-tax-account/"><span>Get a tax account</span></a></li>
                                                            <li class="page_item page-item-29960 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/"><span>Get Real Estate Tax relief</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-30001"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/active-duty-tax-credit/"><span>Active Duty Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-29995"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/real-estate-tax-deferral-program/"><span>Enroll in the Real Estate Tax deferral program</span></a></li>
                                                                    <li class="page_item page-item-29985"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/get-the-homestead-exemption/"><span>Get the Homestead Exemption</span></a></li>
                                                                    <li class="page_item page-item-29998"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/low-income-senior-citizen-real-estate-tax-freeze/"><span>Low-income senior citizen Real Estate Tax freeze</span></a></li>
                                                                    <li class="page_item page-item-29992"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/real-estate-tax-installment-plan/"><span>Set up a Real Estate Tax installment plan</span></a></li>
                                                                    <li class="page_item page-item-29989"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-real-estate-tax-relief/owner-occupied-real-estate-tax-payment-agreement/"><span>Set up an Owner-occupied Real Estate Tax payment agreement (OOPA)</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-15357"><a href="https://beta.phila.gov/services/payments-assistance-taxes/get-tax-clearance/"><span>Get tax clearance</span></a></li>
                                                            <li class="page_item page-item-12649 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-taxes/"><span>Income taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12652"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-taxes/earnings-tax-employees/"><span>Earnings Tax (employees)</span></a></li>
                                                                    <li class="page_item page-item-12655"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-taxes/school-income-tax/"><span>School Income Tax</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12203 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/"><span>Income-based assistance programs</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-25223"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/owner-occupied-real-estate-tax-payment-agreement/"><span>Owner-occupied Real Estate Tax payment agreement</span></a></li>
                                                                    <li class="page_item page-item-24423"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/water-bill-customer-assistance/"><span>Water bill customer assistance</span></a></li>
                                                                    <li class="page_item page-item-12210"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/income-based-water-bill-assistance/"><span>Income-based water bill payment agreements</span></a></li>
                                                                    <li class="page_item page-item-12212"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/longtime-owner-occupants-program/"><span>Longtime Owner Occupants Program</span></a></li>
                                                                    <li class="page_item page-item-12214"><a href="https://beta.phila.gov/services/payments-assistance-taxes/income-based-assistance-programs/real-estate-tax-deferral-program/"><span>Real Estate Tax deferral program</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13687 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/"><span>Paying City taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-18790"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/e-filing-city-taxes/"><span>E-Filing City taxes</span></a></li>
                                                                    <li class="page_item page-item-13717"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/electronic-funds-transfer-eft/"><span>Electronic funds transfer (EFT)</span></a></li>
                                                                    <li class="page_item page-item-13713"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/how-to-file-and-pay-city-taxes/"><span>How to file and pay City taxes</span></a></li>
                                                                    <li class="page_item page-item-13715"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/interest-penalties-and-fees/"><span>Interest, penalties, and fees</span></a></li>
                                                                    <li class="page_item page-item-15396"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/pay-delinquent-tax-balances/"><span>Pay delinquent tax balances</span></a></li>
                                                                    <li class="page_item page-item-13724"><a href="https://beta.phila.gov/services/payments-assistance-taxes/paying-city-taxes/returns-on-a-disk-road/"><span>Returns on a Disk (ROAD)</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12184 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/"><span>Payment plans</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12193"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/owner-occupied-real-estate-tax-payment-agreement/"><span>Set up an Owner-occupied Real Estate Tax Payment Agreement (OOPA)</span></a></li>
                                                                    <li class="page_item page-item-12191"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/real-estate-tax-payment-agreement-for-property-you-own-but-dont-live-in/"><span>Set up a Real Estate Tax payment plan for property you don’t live in</span></a></li>
                                                                    <li class="page_item page-item-12195"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/real-estate-tax-installment-plan/"><span>Set up Real Estate Tax installment plan</span></a></li>
                                                                    <li class="page_item page-item-30228"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/set-up-a-payment-agreement-for-your-taxes/"><span>Set up a payment agreement for your business or income taxes</span></a></li>
                                                                    <li class="page_item page-item-12199"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/water-bill-payment-plans/"><span>Set up a Water bill payment plan</span></a></li>
                                                                    <li class="page_item page-item-12201"><a href="https://beta.phila.gov/services/payments-assistance-taxes/payment-plans/voluntary-disclosure-of-non-payment/"><span>Voluntary disclosure of non-payment</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-36679"><a href="https://beta.phila.gov/services/payments-assistance-taxes/petition-for-a-tax-appeal/"><span>Petition for a tax appeal</span></a></li>
                                                            <li class="page_item page-item-13033"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-tax-abatements/"><span>Property tax abatements</span></a></li>
                                                            <li class="page_item page-item-13572"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-tax-exemptions/"><span>Property tax exemptions</span></a></li>
                                                            <li class="page_item page-item-13682 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-taxes/"><span>Property taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-15019"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-taxes/look-up-your-property-tax-balance/"><span>Look up your property tax balance</span></a></li>
                                                                    <li class="page_item page-item-13685"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-taxes/real-estate-tax/"><span>Real Estate Tax</span></a></li>
                                                                    <li class="page_item page-item-13705"><a href="https://beta.phila.gov/services/payments-assistance-taxes/property-taxes/realty-transfer-tax/"><span>Realty Transfer Tax</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-15207 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/refunds/"><span>Refunds</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-15217"><a href="https://beta.phila.gov/services/payments-assistance-taxes/refunds/general-refund-information/"><span>General refund information</span></a></li>
                                                                    <li class="page_item page-item-15215"><a href="https://beta.phila.gov/services/payments-assistance-taxes/refunds/real-estate-tax-refunds/"><span>Real Estate Tax refunds</span></a></li>
                                                                    <li class="page_item page-item-15226"><a href="https://beta.phila.gov/services/payments-assistance-taxes/refunds/refunds-for-taxes-paid-to-local-jurisdictions/"><span>Refunds for taxes paid to local jurisdictions</span></a></li>
                                                                    <li class="page_item page-item-15209"><a href="https://beta.phila.gov/services/payments-assistance-taxes/refunds/wage-tax-refunds/"><span>Wage Tax refunds</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13683 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/"><span>Regulations &#038; rulings</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-15246"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/technical-private-letter-rulings/"><span>Technical (private letter) rulings</span></a></li>
                                                                    <li class="page_item page-item-15089"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/general-city-tax-regulations/"><span>General City tax regulations</span></a></li>
                                                                    <li class="page_item page-item-13676"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/business-tax-regulations/"><span>Business tax regulations</span></a></li>
                                                                    <li class="page_item page-item-13670 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/income-tax-regulations/"><span>Income tax regulations</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-20047"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/income-tax-regulations/school-income-tax-regulations/"><span>School Income Tax Regulations</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="page_item page-item-13667"><a href="https://beta.phila.gov/services/payments-assistance-taxes/regulations-rulings/property-tax-regulations/"><span>Property tax regulations</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12659 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/senior-citizen-discounts/"><span>Senior citizen discounts</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12662"><a href="https://beta.phila.gov/services/payments-assistance-taxes/senior-citizen-discounts/senior-citizen-water-bill-discount/"><span>Senior citizen water bill discount</span></a></li>
                                                                    <li class="page_item page-item-12657"><a href="https://beta.phila.gov/services/payments-assistance-taxes/senior-citizen-discounts/low-income-senior-citizen-real-estate-tax-freeze/"><span>Low-income senior citizen Real Estate Tax freeze</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12631 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/"><span>Tax credits</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-14806"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/active-duty-tax-credit/"><span>Active Duty Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-12633"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/community-development-corporation-cdc-tax-credit/"><span>Community Development Corporation (CDC) Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-14850"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/distressed-business-tax-credit/"><span>Distressed Business Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-15392"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/earned-income-tax-credit-eitc-resources/"><span>Earned Income Tax Credit (EITC) resources</span></a></li>
                                                                    <li class="page_item page-item-12635"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/green-roof-tax-credit/"><span>Green Roof Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-25220"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/healthy-beverages-tax-credit/"><span>Healthy Beverages Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-12637"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/job-creation-tax-credit/"><span>Job Creation Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-15803"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/jump-start-philly/"><span>Jump Start Philly</span></a></li>
                                                                    <li class="page_item page-item-12639"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/keystone-opportunity-zone-tax-credit/"><span>Keystone Opportunity Zone Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-12641"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/life-partner-transgender-care-health-benefits-tax-credits/"><span>Life Partner &#038; Transgender Care Health Benefits Tax Credits</span></a></li>
                                                                    <li class="page_item page-item-12643"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/philadelphia-re-entry-program-prep-tax-credit/"><span>Philadelphia Re-Entry Program (PREP) Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-12645"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/sustainable-business-tax-credit/"><span>Sustainable Business Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-30812"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/sustainable-jump-start-tax-credit/"><span>Sustainable Jump Start Tax Credit</span></a></li>
                                                                    <li class="page_item page-item-12647"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-credits/veterans-employment-tax-credit/"><span>Veterans Employment Tax Credit</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13847 page_item_has_children"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/"><span>Tax forms &#038; instructions</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-31594"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2018-tax-forms/"><span>2018 Tax forms</span></a></li>
                                                                    <li class="page_item page-item-17212"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2017-tax-forms/"><span>2017 Tax forms</span></a></li>
                                                                    <li class="page_item page-item-13852"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2016-tax-forms/"><span>2016 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13855"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2015-tax-forms/"><span>2015 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13863"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2014-tax-forms/"><span>2014 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13860"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2013-tax-forms/"><span>2013 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13866"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2012-tax-forms/"><span>2012 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13869"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2011-tax-forms/"><span>2011 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13872"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2010-tax-forms/"><span>2010 Tax Forms</span></a></li>
                                                                    <li class="page_item page-item-13875"><a href="https://beta.phila.gov/services/payments-assistance-taxes/tax-forms-instructions/2009-tax-forms/"><span>2009 Tax Forms</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-19487"><a href="https://beta.phila.gov/services/payments-assistance-taxes/vendor-payment-status/"><span>Track vendor payment</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12841 page_item_has_children"><a href="https://beta.phila.gov/services/permits-violations-licenses/"><span>Permits, violations &#038; licenses</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-24017"><a href="https://beta.phila.gov/services/permits-violations-licenses/appeal-a-denied-residential-parking-spot-for-people-with-disabilities/"><span>Appeal a denied residential parking spot for people with disabilities</span></a></li>
                                                            <li class="page_item page-item-29873"><a href="https://beta.phila.gov/services/permits-violations-licenses/apply-for-a-media-permit/"><span>Apply for a media permit</span></a></li>
                                                            <li class="page_item page-item-29935"><a href="https://beta.phila.gov/services/permits-violations-licenses/apply-for-a-wedding-photo-permit/"><span>Apply for a wedding photo permit</span></a></li>
                                                            <li class="page_item page-item-23992"><a href="https://beta.phila.gov/services/permits-violations-licenses/dispute-a-code-violation-notice/"><span>Dispute a code violation notice</span></a></li>
                                                            <li class="page_item page-item-12982"><a href="https://beta.phila.gov/services/permits-violations-licenses/dispute-a-parking-ticket/"><span>Dispute a parking ticket</span></a></li>
                                                            <li class="page_item page-item-24014"><a href="https://beta.phila.gov/services/permits-violations-licenses/dispute-an-excess-false-alarm-fine/"><span>Dispute an excess false alarm fine</span></a></li>
                                                            <li class="page_item page-item-13097"><a href="https://beta.phila.gov/services/permits-violations-licenses/find-out-what-license-you-need-for-your-business/"><span>Find out what license you need for your business</span></a></li>
                                                            <li class="page_item page-item-13087"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-building-permit/"><span>Get a building permit</span></a></li>
                                                            <li class="page_item page-item-24175"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-business-or-trade-license/"><span>Get a business or trade license</span></a></li>
                                                            <li class="page_item page-item-13091"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-certificate-of-occupancy/"><span>Get a Certificate of Occupancy</span></a></li>
                                                            <li class="page_item page-item-13063"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-gun-license/"><span>Get a gun license</span></a></li>
                                                            <li class="page_item page-item-13077"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-license-for-your-dog/"><span>Get a license for your dog</span></a></li>
                                                            <li class="page_item page-item-12928"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-marriage-license/"><span>Get a marriage license</span></a></li>
                                                            <li class="page_item page-item-30398 page_item_has_children"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-permit-to-use-a-philadelphia-parks-recreation-space/"><span>Get a permit to use a Philadelphia Parks &#038; Recreation space</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-29853"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-permit-to-use-a-philadelphia-parks-recreation-space/get-a-friends-community-groups-event-permit/"><span>Get a Friends and community group event permit</span></a></li>
                                                                    <li class="page_item page-item-29865"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-permit-to-use-a-philadelphia-parks-recreation-space/get-a-permit-for-a-large-event-or-festival/"><span>Get a permit for a large event or festival</span></a></li>
                                                                    <li class="page_item page-item-29833"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-permit-to-use-a-philadelphia-parks-recreation-space/get-a-picnic-permit/"><span>Get a picnic permit</span></a></li>
                                                                    <li class="page_item page-item-29850"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-permit-to-use-a-philadelphia-parks-recreation-space/reserve-a-parks-recreation-facility/"><span>Reserve a Parks &#038; Recreation facility or field</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-45412"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-special-event-permit/"><span>Get a special event permit</span></a></li>
                                                            <li class="page_item page-item-37134"><a href="https://beta.phila.gov/services/permits-violations-licenses/get-a-trail-permit/"><span>Get a trail permit</span></a></li>
                                                            <li class="page_item page-item-23990"><a href="https://beta.phila.gov/services/permits-violations-licenses/pay-a-code-violation-notice/"><span>Pay a code violation notice</span></a></li>
                                                            <li class="page_item page-item-12963"><a href="https://beta.phila.gov/services/permits-violations-licenses/pay-a-parking-ticket/"><span>Pay a parking ticket</span></a></li>
                                                            <li class="page_item page-item-12968"><a href="https://beta.phila.gov/services/permits-violations-licenses/pay-a-red-light-ticket/"><span>Pay a red light ticket</span></a></li>
                                                            <li class="page_item page-item-23987"><a href="https://beta.phila.gov/services/permits-violations-licenses/pay-an-excess-false-alarm-fine/"><span>Pay an excess false alarm fine</span></a></li>
                                                            <li class="page_item page-item-13073"><a href="https://beta.phila.gov/services/permits-violations-licenses/plan-a-block-party/"><span>Plan a block party</span></a></li>
                                                            <li class="page_item page-item-23927"><a href="https://beta.phila.gov/services/permits-violations-licenses/register-a-burglar-alarm-pay-the-annual-fee/"><span>Register a burglar alarm / Pay the annual fee</span></a></li>
                                                            <li class="page_item page-item-13083"><a href="https://beta.phila.gov/services/permits-violations-licenses/rent-your-property/"><span>Rent your property</span></a></li>
                                                            <li class="page_item page-item-13065"><a href="https://beta.phila.gov/services/permits-violations-licenses/report-a-building-code-violation/"><span>Report a dangerous building or code violation</span></a></li>
                                                            <li class="page_item page-item-24195"><a href="https://beta.phila.gov/services/permits-violations-licenses/search-for-property-history-and-business-license-information/"><span>Search for property history and business license information</span></a></li>
                                                            <li class="page_item page-item-13523"><a href="https://beta.phila.gov/services/permits-violations-licenses/city-building-codes/"><span>City building codes</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12831 page_item_has_children"><a href="https://beta.phila.gov/services/property-lots-housing/"><span>Property, lots &#038; housing</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13035"><a href="https://beta.phila.gov/services/property-lots-housing/appeal-a-property-assessment/"><span>Appeal a property assessment</span></a></li>
                                                            <li class="page_item page-item-13101"><a href="https://beta.phila.gov/services/property-lots-housing/contact-animal-control/"><span>Contact animal control</span></a></li>
                                                            <li class="page_item page-item-45988"><a href="https://beta.phila.gov/services/property-lots-housing/find-a-licensed-contractor/"><span>Find a licensed contractor</span></a></li>
                                                            <li class="page_item page-item-13696"><a href="https://beta.phila.gov/services/property-lots-housing/find-property-information/"><span>Find property information</span></a></li>
                                                            <li class="page_item page-item-13089"><a href="https://beta.phila.gov/services/property-lots-housing/get-a-building-permit/"><span>Get a building permit</span></a></li>
                                                            <li class="page_item page-item-13093"><a href="https://beta.phila.gov/services/property-lots-housing/get-a-certificate-of-occupancy/"><span>Get a Certificate of Occupancy</span></a></li>
                                                            <li class="page_item page-item-30014"><a href="https://beta.phila.gov/services/property-lots-housing/get-real-estate-tax-relief/"><span>Get Real Estate Tax relief</span></a></li>
                                                            <li class="page_item page-item-18519"><a href="https://beta.phila.gov/services/property-lots-housing/get-the-homestead-exemption/"><span>Get the Homestead Exemption</span></a></li>
                                                            <li class="page_item page-item-13030"><a href="https://beta.phila.gov/services/property-lots-housing/property-tax-abatements/"><span>Property tax abatements</span></a></li>
                                                            <li class="page_item page-item-12541"><a href="https://beta.phila.gov/services/property-lots-housing/property-tax-exemptions/"><span>Property tax exemptions</span></a></li>
                                                            <li class="page_item page-item-15154 page_item_has_children"><a href="https://beta.phila.gov/services/property-lots-housing/property-taxes/"><span>Property taxes</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-15017"><a href="https://beta.phila.gov/services/property-lots-housing/property-taxes/look-up-your-property-tax-balance/"><span>Look up your property tax balance</span></a></li>
                                                                    <li class="page_item page-item-15158"><a href="https://beta.phila.gov/services/property-lots-housing/property-taxes/real-estate-tax/"><span>Real Estate Tax</span></a></li>
                                                                    <li class="page_item page-item-15156"><a href="https://beta.phila.gov/services/property-lots-housing/property-taxes/realty-transfer-tax/"><span>Realty Transfer Tax</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13085"><a href="https://beta.phila.gov/services/property-lots-housing/rent-your-property/"><span>Rent your property</span></a></li>
                                                            <li class="page_item page-item-13067"><a href="https://beta.phila.gov/services/property-lots-housing/report-a-building-code-violation/"><span>Report a dangerous building or code violation</span></a></li>
                                                            <li class="page_item page-item-18429"><a href="https://beta.phila.gov/services/property-lots-housing/report-a-vacant-building/"><span>Report a vacant or dangerous building</span></a></li>
                                                            <li class="page_item page-item-18422"><a href="https://beta.phila.gov/services/property-lots-housing/report-graffiti/"><span>Report graffiti</span></a></li>
                                                            <li class="page_item page-item-13527"><a href="https://beta.phila.gov/services/property-lots-housing/save-your-property-from-foreclosure/"><span>Save your property from foreclosure</span></a></li>
                                                            <li class="page_item page-item-13039"><a href="https://beta.phila.gov/services/property-lots-housing/services-for-the-homeless/"><span>Services for people experiencing homelessness</span></a></li>
                                                            <li class="page_item page-item-12542 page_item_has_children"><a href="https://beta.phila.gov/services/property-lots-housing/sheriff-lien-sales/"><span>Sheriff &#038; lien sales</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12556"><a href="https://beta.phila.gov/services/property-lots-housing/sheriff-lien-sales/force-a-sheriff-sale/"><span>Force a sheriff sale</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12847 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/"><span>Safety &#038; emergency preparedness</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-28833"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/ask-about-an-ems-bill/"><span>Ask about an EMS bill</span></a></li>
                                                            <li class="page_item page-item-13048"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/code-blue/"><span>Code Blue</span></a></li>
                                                            <li class="page_item page-item-13099"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/contact-animal-control/"><span>Contact animal control</span></a></li>
                                                            <li class="page_item page-item-34892"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/find-a-fire-station/"><span>Find a fire station</span></a></li>
                                                            <li class="page_item page-item-28831"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/get-a-smoke-alarm-installed/"><span>Get a smoke alarm installed</span></a></li>
                                                            <li class="page_item page-item-30724"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/keep-pets-safe/"><span>Keep pets safe</span></a></li>
                                                            <li class="page_item page-item-13061"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/lead-exposure/"><span>Lead exposure</span></a></li>
                                                            <li class="page_item page-item-28872"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/report-a-possible-fire-code-violation/"><span>Report a possible fire code violation</span></a></li>
                                                            <li class="page_item page-item-12504 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/"><span>Prepare for an emergency</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-24810"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/attend-a-workshop/"><span>Attend a workshop</span></a></li>
                                                                    <li class="page_item page-item-12508"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/make-an-emergency-plan/"><span>Make an emergency plan</span></a></li>
                                                                    <li class="page_item page-item-12509"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/plan-for-everyone/"><span>Plan for everyone</span></a></li>
                                                                    <li class="page_item page-item-12540"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/make-a-shelter-in-place-kit/"><span>Make a shelter-in-place kit</span></a></li>
                                                                    <li class="page_item page-item-12510"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/make-a-go-bag/"><span>Make a go bag</span></a></li>
                                                                    <li class="page_item page-item-12511"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/keep-documents-safe/"><span>Keep documents safe</span></a></li>
                                                                    <li class="page_item page-item-12512"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/know-whether-to-stay-or-go/"><span>Know whether to stay or go</span></a></li>
                                                                    <li class="page_item page-item-12513"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/prepare-for-an-emergency/stay-informed/"><span>Stay informed</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12538 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/"><span>Natural hazards</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12514"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/drought/"><span>Drought</span></a></li>
                                                                    <li class="page_item page-item-12515"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/earthquake/"><span>Earthquake</span></a></li>
                                                                    <li class="page_item page-item-12516 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/excessive-heat/"><span>Hot weather</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-25226"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/excessive-heat/code-red/"><span>Code Red</span></a></li>
                                                                            <li class="page_item page-item-25234"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/excessive-heat/heat-related-illness/"><span>Heat-related illness</span></a></li>
                                                                            <li class="page_item page-item-25231"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/excessive-heat/stay-cool/"><span>Stay cool</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="page_item page-item-12517"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/flood/"><span>Flood</span></a></li>
                                                                    <li class="page_item page-item-12518"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/hurricane-tropical-storm/"><span>Hurricane or tropical storm</span></a></li>
                                                                    <li class="page_item page-item-12519"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/thunderstorm/"><span>Thunderstorm</span></a></li>
                                                                    <li class="page_item page-item-12520"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/tornado/"><span>Tornado and wind storms</span></a></li>
                                                                    <li class="page_item page-item-12521"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/natural-hazards/winter-weather/"><span>Winter weather</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13510"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/get-a-restraining-order/"><span>Get a restraining order</span></a></li>
                                                            <li class="page_item page-item-12539 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/"><span>Human-caused hazards</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12522"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/active-shooter/"><span>Active shooter</span></a></li>
                                                                    <li class="page_item page-item-12523"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/carbon-monoxide-poisoning/"><span>Carbon monoxide poisoning</span></a></li>
                                                                    <li class="page_item page-item-12533"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/explosion/"><span>Explosion</span></a></li>
                                                                    <li class="page_item page-item-12534"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/fire/"><span>Fire</span></a></li>
                                                                    <li class="page_item page-item-12524"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/hazardous-materials/"><span>Hazardous materials</span></a></li>
                                                                    <li class="page_item page-item-12535"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/infectious-disease/"><span>Infectious disease</span></a></li>
                                                                    <li class="page_item page-item-12536"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/nuclear-radiation-incident/"><span>Nuclear or radiation incident</span></a></li>
                                                                    <li class="page_item page-item-12537"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/terrorism/"><span>Terrorism</span></a></li>
                                                                    <li class="page_item page-item-12525"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/human-caused-hazards/utility-interruption/"><span>Utility interruption</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12505 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/evacuations/"><span>Evacuations</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12526"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/evacuations/evacuation-routes/"><span>Evacuation routes</span></a></li>
                                                                    <li class="page_item page-item-12527"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/evacuations/center-city-high-rise-office-building-rallying-points/"><span>Center City high-rise office building rallying points</span></a></li>
                                                                    <li class="page_item page-item-12528"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/evacuations/university-city-high-rise-office-building-rallying-points/"><span>University City high-rise office building rallying points</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12506 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/after-an-emergency/"><span>After an emergency</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12529"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/after-an-emergency/disaster-recovery-funding/"><span>Disaster recovery funding</span></a></li>
                                                                    <li class="page_item page-item-12530"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/after-an-emergency/access-to-restricted-areas/"><span>Access to restricted areas</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12507 page_item_has_children"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/how-you-can-help/"><span>How you can help</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-12531"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/how-you-can-help/emergency-donations/"><span>Emergency donations</span></a></li>
                                                                    <li class="page_item page-item-12532"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/how-you-can-help/volunteering/"><span>Volunteering</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-12997"><a href="https://beta.phila.gov/services/safety-emergency-preparedness/get-notified-when-an-inmate-is-released/"><span>Get notified when an inmate is released</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12849 page_item_has_children"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/"><span>Streets, sidewalks &#038; alleys</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-12986"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/bike-share-program/"><span>Bike share program</span></a></li>
                                                            <li class="page_item page-item-12958"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/get-your-car-back-when-it-has-been-towed/"><span>Get your car back when it has been towed</span></a></li>
                                                            <li class="page_item page-item-13075"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/plan-a-block-party/"><span>Plan a block party</span></a></li>
                                                            <li class="page_item page-item-13107"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/report-a-pothole-or-street-light-outage/"><span>Report a pothole or street light outage</span></a></li>
                                                            <li class="page_item page-item-18384"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/report-graffiti/"><span>Report graffiti</span></a></li>
                                                            <li class="page_item page-item-13111"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/street-closures/"><span>Street closures</span></a></li>
                                                            <li class="page_item page-item-13508"><a href="https://beta.phila.gov/services/streets-sidewalks-alleys/trash-recycling-pickup-schedules/"><span>Trash &#038; recycling pickup schedules</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12845 page_item_has_children"><a href="https://beta.phila.gov/services/trash-recycling-city-upkeep/"><span>Trash, recycling &#038; city upkeep</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13520"><a href="https://beta.phila.gov/services/trash-recycling-city-upkeep/dispose-of-christmas-trees-leaves-or-pumpkins/"><span>Dispose of Christmas trees, leaves, or pumpkins</span></a></li>
                                                            <li class="page_item page-item-13506"><a href="https://beta.phila.gov/services/trash-recycling-city-upkeep/find-a-trash-or-recycling-center/"><span>Find a trash or recycling center</span></a></li>
                                                            <li class="page_item page-item-13540"><a href="https://beta.phila.gov/services/trash-recycling-city-upkeep/report-a-pothole-or-street-light-outage/"><span>Report a pothole or street light outage</span></a></li>
                                                            <li class="page_item page-item-13501"><a href="https://beta.phila.gov/services/trash-recycling-city-upkeep/trash-recycling-pickup-schedules/"><span>Trash &#038; recycling pickup schedules</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12843 page_item_has_children"><a href="https://beta.phila.gov/services/trees-parks-the-environment/"><span>Trees, parks &#038; the environment</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-13052"><a href="https://beta.phila.gov/services/trees-parks-the-environment/air-quality/"><span>Air quality</span></a></li>
                                                            <li class="page_item page-item-28276"><a href="https://beta.phila.gov/services/trees-parks-the-environment/dispose-of-organic-materials/"><span>Dispose of organic materials</span></a></li>
                                                            <li class="page_item page-item-13120"><a href="https://beta.phila.gov/services/trees-parks-the-environment/events-in-philadelphia-parks/"><span>Events in Philadelphia parks</span></a></li>
                                                            <li class="page_item page-item-13057"><a href="https://beta.phila.gov/services/trees-parks-the-environment/find-a-playground-or-recreation-center/"><span>Find a playground or recreation center</span></a></li>
                                                            <li class="page_item page-item-29467"><a href="https://beta.phila.gov/services/trees-parks-the-environment/get-a-trail-permit/"><span>Get a trail permit</span></a></li>
                                                            <li class="page_item page-item-27947"><a href="https://beta.phila.gov/services/trees-parks-the-environment/get-organic-materials/"><span>Get organic materials</span></a></li>
                                                            <li class="page_item page-item-30615"><a href="https://beta.phila.gov/services/trees-parks-the-environment/request-a-dog-run/"><span>Request a dog run</span></a></li>
                                                            <li class="page_item page-item-29829"><a href="https://beta.phila.gov/services/trees-parks-the-environment/request-an-animal-free-zone/"><span>Request an animal-free zone</span></a></li>
                                                            <li class="page_item page-item-34361 page_item_has_children"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/"><span>Tree related services</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-29472"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/get-a-street-tree/"><span>Get a street tree</span></a></li>
                                                                    <li class="page_item page-item-29672"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/get-a-yard-tree/"><span>Get a yard tree</span></a></li>
                                                                    <li class="page_item page-item-18432"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/report-a-dead-tree/"><span>Report a dead tree</span></a></li>
                                                                    <li class="page_item page-item-34560"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/storms-and-downed-trees/"><span>Report a downed tree</span></a></li>
                                                                    <li class="page_item page-item-29800"><a href="https://beta.phila.gov/services/trees-parks-the-environment/tree-related-services/request-street-tree-maintenance/"><span>Request street tree maintenance</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12851 page_item_has_children"><a href="https://beta.phila.gov/services/water-gas-utilities/"><span>Water, gas &#038; utilities</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-17567"><a href="https://beta.phila.gov/services/water-gas-utilities/dispute-a-water-bill/"><span>Dispute a water bill</span></a></li>
                                                            <li class="page_item page-item-25462"><a href="https://beta.phila.gov/services/water-gas-utilities/income-based-water-bill-payment-agreements/"><span>Income-based water bill payment agreements</span></a></li>
                                                            <li class="page_item page-item-18434"><a href="https://beta.phila.gov/services/water-gas-utilities/rain-check-system/"><span>Rain Check program</span></a></li>
                                                            <li class="page_item page-item-17343"><a href="https://beta.phila.gov/services/water-gas-utilities/senior-citizen-water-bill-discount/"><span>Senior citizen water bill discount</span></a></li>
                                                            <li class="page_item page-item-12917 page_item_has_children"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/"><span>Water &#038; sewer services</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-11939 page_item_has_children"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/become-a-water-customer/"><span>Become a water customer</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-11941"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/become-a-water-customer/property-owners/"><span>Property owners</span></a></li>
                                                                            <li class="page_item page-item-11943"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/become-a-water-customer/tenants/"><span>Tenants</span></a></li>
                                                                            <li class="page_item page-item-11945"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/become-a-water-customer/occupants/"><span>Occupants</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="page_item page-item-11957 page_item_has_children"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-pipe-meter-maintenance/"><span>Water pipe &#038; meter maintenance</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-11959"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-pipe-meter-maintenance/customer-responsibilities/"><span>Customer responsibilities</span></a></li>
                                                                            <li class="page_item page-item-11961"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-pipe-meter-maintenance/water-meters/"><span>Water meters</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="page_item page-item-11947 page_item_has_children"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-shutoffs/"><span>Water shutoffs</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-11949"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-shutoffs/reasons-for-water-shutoff/"><span>Reasons for water shutoff</span></a></li>
                                                                            <li class="page_item page-item-11951"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-shutoffs/prevent-water-shutoffs/"><span>Prevent water shutoffs</span></a></li>
                                                                            <li class="page_item page-item-11953"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-shutoffs/restore-water-service/"><span>Restore water service</span></a></li>
                                                                            <li class="page_item page-item-11955"><a href="https://beta.phila.gov/services/water-gas-utilities/water-sewer-services/water-shutoffs/stop-water-service/"><span>Stop water service</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-24372"><a href="https://beta.phila.gov/services/water-gas-utilities/water-bill-customer-assistance/"><span>Water bill customer assistance</span></a></li>
                                                            <li class="page_item page-item-12554"><a href="https://beta.phila.gov/services/water-gas-utilities/pay-a-water-bill/"><span>Pay a water bill</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12854 page_item_has_children"><a href="https://beta.phila.gov/services/working-jobs/"><span>Working &#038; jobs</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-46805"><a href="https://beta.phila.gov/services/working-jobs/file-a-sexual-harassment-complaint/"><span>File a sexual harassment complaint</span></a></li>
                                                            <li class="page_item page-item-47379 page_item_has_children"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/"><span>Find a job or internship</span></a>
                                                                <ul class='children'>
                                                                    <li class="page_item page-item-13134"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/apply-for-a-job-with-the-city-of-philadelphia/"><span>Apply for a job with the City of Philadelphia</span></a></li>
                                                                    <li class="page_item page-item-38530"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/apply-for-an-internship-at-the-medical-examiners-office/"><span>Apply for an internship at the Medical Examiner&#8217;s Office</span></a></li>
                                                                    <li class="page_item page-item-32753"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/become-a-lifeguard/"><span>Become a lifeguard</span></a></li>
                                                                    <li class="page_item page-item-13013"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/become-a-police-officer/"><span>Become a police officer</span></a></li>
                                                                    <li class="page_item page-item-13160"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/become-a-substitute-teacher/"><span>Become a substitute teacher</span></a></li>
                                                                    <li class="page_item page-item-28824 page_item_has_children"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/join-the-fire-department/"><span>Join the Fire Department</span></a>
                                                                        <ul class='children'>
                                                                            <li class="page_item page-item-28780"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/join-the-fire-department/become-a-fire-explorer/"><span>Become a Fire Explorer</span></a></li>
                                                                            <li class="page_item page-item-13504"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/join-the-fire-department/become-a-firefighter/"><span>Become a firefighter</span></a></li>
                                                                            <li class="page_item page-item-28822"><a href="https://beta.phila.gov/services/working-jobs/find-a-job-or-internship/join-the-fire-department/become-a-paramedic/"><span>Become a paramedic</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="page_item page-item-13130"><a href="https://beta.phila.gov/services/working-jobs/paid-sick-leave/"><span>Paid sick leave</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="page_item page-item-12856 page_item_has_children"><a href="https://beta.phila.gov/services/zoning-planning-development/"><span>Zoning, planning &#038; development</span></a>
                                                        <ul class='children'>
                                                            <li class="page_item page-item-14083"><a href="https://beta.phila.gov/services/zoning-planning-development/city-building-codes/"><span>City building codes</span></a></li>
                                                            <li class="page_item page-item-13138"><a href="https://beta.phila.gov/services/zoning-planning-development/map-of-philadelphia/"><span>Interactive Map of Philadelphia</span></a></li>
                                                            <li class="page_item page-item-13136"><a href="https://beta.phila.gov/services/zoning-planning-development/look-up-zoning-information/"><span>Look up zoning information</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li tabindex="0">
                                                <a href="/programs/" class="valign-cell"><i class="fa fa-info-circle"></i> Programs &amp; initiatives</a>
                                            </li>
                                            <li tabindex="0">
                                                <a href="/news/" class="valign-cell"><i class="fa fa-microphone"></i> News &amp; events</a>
                                            </li>
                                            <li tabindex="0">
                                                <a href="/documents/" class="valign-cell"><i class="fa fa-file-text"></i> Publications &amp; forms</a>
                                            </li>
                                            <li class="bg-sidewalk" tabindex="0">
                                                <a href="/mayor/"><i class="fa fa-university"></i> Mayor's Office</a>
                                            </li>
                                            <li class="bg-sidewalk" tabindex="0"><a href="/departments/"><i class="fa fa-sitemap"></i> City government directory</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--End mobile nav -->
                    </div>
                    <!-- close columns -->
                </div>
            </div>
        </div>
    </header>
    <div id="page">
        <div id="content">
            <div class="site-main home">
                <main>
                    <div class="hero-content">
                        <img class="show-for-small-only" src="https://beta.phila.gov/wp-content/themes/phila.gov-theme/img/beta-homepage-mobile.jpg" alt="">
                        <div class="hero-wrap">
                            <div class="photo-credit small-text">
                            </div>
                            <div class="mask" style=""></div>
                            <div class="row expanded ptl pbs pvxl-mu">
                                <div class="medium-14 small-centered columns beta-message">
                                    <span class="h1 break-after">Beta.phila.gov</span> <span class="h2 sub-title">is a work-in-progress.</span>
                                    <p class="mvm">We’re looking for your input so we can design a website that better meets your needs. Send us your ideas through the site’s <span class="nowrap"><i class="fa fa-lightbulb-o fa-lg" aria-hidden="true"></i> feedback links.</span></p>
                                </div>
                            </div>
                            <!-- End beta.phila.gov message -->
                            <div class="row common-requests">
                                <div class="small-24 medium-15 large-13 small-centered columns overlap">
                                    <div class="row collapse call-to-action bg-white pvs pls equal-height">
                                        <div class="small-12 medium-6 columns">
                                            <a href="/trashday" class="mrs mbs equal">
                                                <div class="phs pvm cta-block clearfix">
                                                    <div class="valign">
                                                        <div class="valign-cell">
                                                            <i class="fa fa-trash fa-4x" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="h6">Find<span class="break-before-mu"> trash day</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="small-12 medium-6 columns">
                                            <a href="https://secure.phila.gov/PaymentCenter/AccountLookup/" class="mrs mbs equal">
                                                <div class="phs pvm cta-block clearfix">
                                                    <div class="valign ">
                                                        <div class="valign-cell">
                                                            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="h6">Pay<span class="break-before-mu"> a bill</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="small-12 medium-6 columns">
                                            <a href="http://www.phila.gov/personnel/JobOpps.html" class="mrs mbs equal">
                                                <div class="phs pvm cta-block clearfix">
                                                    <div class="valign ">
                                                        <div class="valign-cell">
                                                            <i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="h6">Explore<span class="break-before-mu"> City jobs</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="small-12 medium-6 columns">
                                            <a href="http://property.phila.gov/" class="mrs mbs equal">
                                                <div class="phs pvm cta-block clearfix">
                                                    <div class="valign ">
                                                        <div class="valign-cell">
                                                            <i class="fa fa-home fa-4x" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="h6">Search for a<span class="break-before-mu"> property</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Common Requests -->
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    <div class="row">
                        <div class="columns">
                            <h2>Service updates</h2>
                        </div>
                    </div>
                    <div class="mbxl">
                        <div class="row ">
                            <div class="columns">
                                <table class="service-update">
                                    <tbody>
                                        <tr class="service-update--normal ">
                                            <th class="phl-mu">
                                                <i class="fa  fa-2x fa-fw fa-institution " aria-hidden="true"></i>
                                                <span class="icon-label">city</span>
                                            </th>
                                            <td class="pam">
                                                <span>
                 City buildings are open for regular business hours.                                </span>
                                            </td>
                                        </tr>
                                        <!-- row -->
                                        <tr class="service-update--normal ">
                                            <th class="phl-mu">
                                                <i class="fa  fa-2x fa-fw fa-subway " aria-hidden="true"></i>
                                                <span class="icon-label">transit</span>
                                            </th>
                                            <td class="pam">
                                                <span>
                 Trains, buses, and trolleys are running on a regular schedule.                                    <a href="http://septa.org" class="external">Visit SEPTA.org for information.</a>
                                </span>
                                            </td>
                                        </tr>
                                        <!-- row -->
                                        <tr class="service-update--normal ">
                                            <th class="phl-mu">
                                                <i class="fa  fa-2x fa-fw fa-trash " aria-hidden="true"></i>
                                                <span class="icon-label">trash</span>
                                            </th>
                                            <td class="pam">
                                                <span>
                 Trash and recycling is being picked up on a normal schedule.                                </span>
                                            </td>
                                        </tr>
                                        <!-- row -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <section class="the-latest mvm">
                        <div class="row">
                            <div class="columns">
                                <h2>The latest news + events</h2>
                            </div>
                        </div>
                        <div class="featured-grid">
                            <div class="grid-container">
                                <div class="grid-x grid-margin-x">
                                    <div class="cell medium-16 feature-main align-self-stretch">
                                        <article id="post-48285" class="full-height post-48285 post type-post status-publish format-standard has-post-thumbnail hentry category-mayor">
                                            <a href="https://beta.phila.gov/2018-07-30-building-stronger-neighborhoods-with-the-philly-bev-tax/" class="card card--featured flex-container flex-dir-row full-height">
                                                <div class="grid-x flex-dir-column">
                                                    <div class="flex-child-shrink">
                                                        <img width="700" height="400" src="https://beta.phila.gov/media/20180730124431/31294686430_674248f5a1_h-1-700x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Children of various ages smiling and playing in a brand new playground in a Philly neighborhood." /> </div>
                                                    <div class="card--content pam flex-child-auto">
                                                        <div class="cell align-self-top post-label post-label--featured">
                                                            <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> <span>Featured</span>
                                                            <header class="cell mvm">
                                                                <h1>Building stronger neighborhoods with the Philly Bev Tax</h1>
                                                            </header>
                                                        </div>
                                                        <div class="cell align-self-bottom">
                                                            <div class="post-meta">
                                                                <span class="date-published"><time datetime="2018-07-30">July 30, 2018</time></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="cell medium-8 feature-more flex-container flex-dir-column">
                                        <article id="post-46386" class="flex-child-auto  post-46386 post type-post status-publish format-standard has-post-thumbnail hentry category-mayor">
                                            <a href=https://beta.phila.gov/2018-07-10-june-2018-in-pictures/ class="card card--featured  pam">
                                                <div class="grid-x flex-dir-column card--content">
                                                    <div class="cell align-self-top post-label post-label--featured">
                                                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> <span>Featured</span>
                                                        <header class="mvm">
                                                            <h1>June 2018 in pictures</h1>
                                                        </header>
                                                    </div>
                                                    <div class="cell align-self-bottom">
                                                        <div class="post-meta">
                                                            <span class="date-published"><time datetime="2018-07-10">July 10, 2018</time></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        <article id="post-45865" class="flex-child-auto  post-45865 post type-post status-publish format-standard hentry category-health category-mayor">
                                            <a href=https://beta.phila.gov/2018-07-01-health-commissioner-issues-first-heat-health-emergency-of-2018/ class="card card--featured  pam">
                                                <div class="grid-x flex-dir-column card--content">
                                                    <div class="cell align-self-top post-label post-label--featured">
                                                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> <span>Featured</span>
                                                        <header class="mvm">
                                                            <h1>Health Commissioner Issues First Heat Health Emergency of 2018</h1>
                                                        </header>
                                                    </div>
                                                    <div class="cell align-self-bottom">
                                                        <div class="post-meta">
                                                            <span class="date-published"><time datetime="2018-07-01">July 1, 2018</time></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        <article id="post-45543" class="flex-child-auto  post-45543 post type-post status-publish format-standard has-post-thumbnail hentry category-mayor">
                                            <a href=https://beta.phila.gov/2018-06-28-summer-safety-tips-on-fireworks-grills-hydrants-pets-more-in-philly/ class="card card--featured card--last pam">
                                                <div class="grid-x flex-dir-column card--content">
                                                    <div class="cell align-self-top post-label post-label--featured">
                                                        <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> <span>Featured</span>
                                                        <header class="mvm">
                                                            <h1>Summer safety tips on fireworks, grills, hydrants, pets &#038; more in Philly</h1>
                                                        </header>
                                                    </div>
                                                    <div class="cell align-self-bottom">
                                                        <div class="post-meta">
                                                            <span class="date-published"><time datetime="2018-06-28">June 28, 2018</time></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </article>
                                        <a class="button float-right content-type-featured  " href="/the-latest/archives/?template=featured" aria-label="See all featured "> See all featured <i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mvxl">
                            <div class="columns panel">
                                <div class="row equal-height">
                                    <div class="small-24 medium-16 columns valign equal">
                                        <div class="valign-cell">
                                            <h3 class="mbn">More from the City of Philadelphia</h3>
                                            <p class="mts">Get the latest announcements, posts, press releases, and events.</p>
                                        </div>
                                    </div>
                                    <div class="small-24 medium-8 columns valign equal center">
                                        <a href="/the-latest" class="button full mts">Go to The latest</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="common-resources mvl">
                        <div class="grid-container grid-x">
                            <h2>Common resources</h2>
                        </div>
                        <div class="grid-x bg-ghost-gray pvl">
                            <div class="grid-container">
                                <div class="grid-x grid-margin-x">
                                    <div class="cell medium-12">
                                        <div class="card hover-fade">
                                            <a href="https://beta.phila.gov/parks-rec-finder" class="hover-fade">
                                              <img src="https://beta.phila.gov/media/20180103101712/PPR-ThingsToDo-FinderImage.jpg" alt="">
                                              <div class="card-description phl pvm">
                                              <h3>Parks & Recreation Finder</h3>
                                              <p>Use our app to search for activities, parks, rec centers, and more.</p>
                                            </div>
                                          </a>
                                        </div>
                                    </div>
                                    <div class="cell medium-12 grid-x">
                                        <div class="card card-fixed-height cell shrink align-self-top full hover-fade">
                                            <a href="http://www.phila.gov/contracts/pages/default.aspx" class="hover-fade">
                                                <div class="grid-x">
                                                    <div class="cell shrink align-self-middle pas">
                                                        <i class="fa fa-copy fa-4x fa-fw"></i>
                                                    </div>
                                                    <div class="cell auto align-self-middle pvm">
                                                        <div class="card-description phl">
                                                            <h3>Contracts</h3>
                                                            <p>Find, bid on, get alerts for contract opportunities with the City.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card card-fixed-height cell shrink align-self-middle full hover-fade">
                                            <a href="https://beta.phila.gov/departments/department-of-licenses-and-inspections/">
                                                <div class="grid-x">
                                                    <div class="cell shrink align-self-middle pas">
                                                        <i class="fa fa-file-text fa-4x  fa-fw"></i>
                                                    </div>
                                                    <div class="cell auto align-self-middle pvm">
                                                        <div class="card-description phl">
                                                            <h3>Licenses, inspections & permits </h3>
                                                            <p>Get a license, schedule an inspection, apply for a building permit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card card-fixed-height cell shrink align-self-bottom full hover-fade">
                                            <a href="https://visitphilly.com">
                                                <div class="grid-x">
                                                    <div class="cell shrink align-self-middle pas">
                                                        <i class="fa fa-users fa-4x fa-fw"></i>
                                                    </div>
                                                    <div class="cell auto align-self-middle pvm">
                                                        <div class="card-description phl">
                                                            <h3 class="external">Visit Philadelphia</h3>
                                                            <p>Visitphilly.com is the official visitor site for Greater Philadelphia.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Common Resources -->
                    <div class="row ptm pbxl expanded phila-redesign">
                        <div class="columns">
                            <section>
                                <div class="row">
                                    <div class="columns">
                                        <h2 class="contrast">Redesigning phila.gov</h2>
                                    </div>
                                </div>
                                <div class="row equal-height">
                                    <div class="medium-10 columns bdr-right-mu equal about">
                                        <section>
                                            <h3>About the redesign</h3>
                                            <p>We understand that the City of Philadelphia’s current website, phila.gov, isn’t easy to use. So we’re in the process of creating a new site from the ground up—with simple, mobile-friendly designs, more intuitive organization, and clearer content.</p>
                                            <p>Throughout the redesign process, we’ve been collaborating with people like you to inform the direction and usability of the site. Please continue to send us your thoughts:</p>
                                            <ul class="list-style-none mln pln pvm">
                                                <li class="mbm"><i class="fa fa-arrow-right fa-lg prs" aria-hidden="true"></i> Use the site’s <i class="fa fa-lightbulb-o fa-lg" aria-hidden="true"></i> feedback links to alert us to content errors and design feedback.</li>
                                                <li class="mbm"><i class="fa fa-arrow-right fa-lg prs" aria-hidden="true"></i> <a href="/sign-up-to-be-a-phila-gov-tester">Sign up to be a beta.phila.gov tester</a>. We’ll contact you for specific feedback on features as we design them.</li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="show-for-medium medium-14 pll plm columns equal process">
                                        <section>
                                            <h3>Where are we in the redesign process?</h3>
                                            <p>For the past couple of years, we’ve been working closely with content creators, City colleagues, and the public to rewrite service information and to design features that better meet your needs.</p>
                                            <div class="row collapse">
                                                <div class="medium-8 columns center small-centered ben-franklin-blue marker">
                                                    <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="row collapse process-bar">
                                                <div class="medium-8 columns">
                                                    <section>
                                                        <header class="bg-medium-gray">
                                                            <div class="valign process-label left-arrow-indent left-arrow-white">
                                                                <div class="valign-cell">
                                                                    <h4 class="mbn h5 white">Alpha</h4>
                                                                </div>
                                                            </div>
                                                        </header>
                                                        <div class="description">
                                                            <span class="phs small-text">Alpha.phila.gov went live in December 2014. The alpha prototype was revised throughout 2015.</span>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="medium-8 columns small-text">
                                                    <section>
                                                        <header class="bg-ben-franklin-blue">
                                                            <div class="valign process-label bg-ben-franklin-blue left-arrow-indent left-arrow-medium-gray">
                                                                <div class="valign-cell">
                                                                    <h4 class="mbn h5 white">Beta</h4>
                                                                </div>
                                                            </div>
                                                        </header>
                                                        <div class="description current">
                                                            <span class="phs small-text">Versions of beta.phila.gov will roll out in 2016 and 2017.</span>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="medium-8 columns end">
                                                    <section>
                                                        <header>
                                                            <div class="valign process-label bg-medium-gray left-arrow-indent left-arrow-ben-franklin-blue right-arrow">
                                                                <div class="valign-cell">
                                                                    <h4 class="mbn h5 white">Launch</h4>
                                                                </div>
                                                            </div>
                                                        </header>
                                                        <div class="description">
                                                            <span class="phs small-text">Beta.phila.gov will become the City’s new website in 2018. With your help, we’ll continue to improve it after that.</span>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- End Redesigning Phila.gov -->
                </main>
                <!-- #main -->
            </div>
            <!-- .site-main .home -->
        </div>
        <!-- #content -->
    </div>
    <!-- #page -->
    <a href="#page" id="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i><br>Top</a>
    <div class="search-pane global-nav">
        <div class="dropdown-pane site-search-dropdown" data-dropdown data-v-offset="0" data-hover-pane="true" data-trap-focus="true" data-close-on-click="true" data-auto-focus="true" id="search-dropdown">
            <div class="row columns expanded bg-ghost-gray">
                <div class="row arrow">
                    <div class="medium-12 columns small-centered">
                        <div class="paxl">
                            <form role="search" method="get" class="search" id="search-form" action="https://beta.phila.gov/search">
                                <label for="search-field"><span class="screen-reader-text">Search for:</span></label>
                                <input type="text" class="search-field swiftype" placeholder="Search" value="" name="s" title="Search for:" id="search-field" />
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services-list" class="global-nav show-for-medium">
        <div class="dropdown-pane mega-menu-dropdown" data-dropdown data-v-offset="0" data-hover-pane="true" data-trap-focus="true" data-hover="true" data-close-on-click="true" id="services-mega-menu">
            <div class="inner-wrapper">
                <div id="phila-menu-wrap" class="row expanded mbxs" data-equalizer data-equalize-by-row="true" data-services-menu>
                </div>
                <div class="row expanded collapse bg-ghost-gray mega-menu-footer">
                    <div class="medium-8 float-right white bg-dark-ben-franklin left-arrow-indent">
                        <div class="valign">
                            <a href="/services/" class="phl valign-cell service-directory">Service directory</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service lvl 1 -->
    </div>
    <!-- end global nav-->
    <footer data-swiftype-index='false' class="site-footer">
        <div class="row">
            <ul class="tabs " data-responsive-accordion-tabs="tabs medium-accordion large-tabs" id="example-tabs2">
                <li class="tabs-title is-active "><a href="#panel11" aria-selected="true">Voters</a></li>
                <li class="tabs-title "><a href="#panel12">Candidates</a></li>
                <li class="tabs-title "><a href="#panel13">Election Board</a></li>
            </ul>
            <div class="tabs-content " data-tabs-content="example-tabs2">
                <div class="tabs-panel philly311 is-active" id="panel11">
                    <div class="row pvn pvl-mu equal-height">
                        <div class="small-24 medium-8 columns sidewalk bdr-right-mu clearfix">
                            <section>
                                <h3 class="h4 dark-gray">Registration</h3>
                                <a href="http://iframe.publicstuff.com/#?client_id=242" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-bullhorn valign-cell"></i>
                                        <div class="button-label valign-cell">Register to vote</div>
                                    </div>
                                </a>
                                <a href="http://www.phila.gov/311/findananswer/Pages/default.aspx" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-question valign-cell"></i>
                                        <div class="button-label valign-cell">Update voter registration</div>
                                    </div>
                                </a>
                            </section>
                        </div>
                        <div class="medium-16 columns trending-requests phl pvm pvn-mu">
                            <section>
                                <h3 class="h4 dark-gray">Trending requests</h3>
                                <ul class="columns-2-mu">
                                    <li>
                                        <a href="https://beta.phila.gov/services/property-lots-housing/get-the-homestead-exemption/">Find a polling place</a>
                                    </li>
                                    <li>
                                        <a href="http://www.phila.gov/prisons/Facilities/Pages/default.aspx">Find my elected officials</a>
                                    </li>
                                    <li>
                                        <a href="https://prodpci.etimspayments.com/pbw/include/philadelphia_parking/input.jsp">View my political districts</a>
                                    </li>
                                    <li>
                                        <a href="https://secure.phila.gov/WRB/WaterBill/Account/GetAccount.aspx">View my sample ballot</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tabs-panel philly311" id="panel12">
                    <div class="row pvn pvl-mu equal-height">
                        <div class="small-24 medium-8 columns sidewalk bdr-right-mu clearfix">
                            <section>
                                <h3 class="h4 dark-gray">Registration2</h3>
                                <a href="http://iframe.publicstuff.com/#?client_id=242" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-bullhorn valign-cell"></i>
                                        <div class="button-label valign-cell">Register to vote</div>
                                    </div>
                                </a>
                                <a href="http://www.phila.gov/311/findananswer/Pages/default.aspx" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-question valign-cell"></i>
                                        <div class="button-label valign-cell">Update voter registration</div>
                                    </div>
                                </a>
                            </section>
                        </div>
                        <div class="medium-16 columns trending-requests phl pvm pvn-mu">
                            <section>
                                <h3 class="h4 dark-gray">Trending requests</h3>
                                <ul class="columns-2-mu">
                                    <li>
                                        <a href="https://beta.phila.gov/services/property-lots-housing/get-the-homestead-exemption/">Find a polling place</a>
                                    </li>
                                    <li>
                                        <a href="http://www.phila.gov/prisons/Facilities/Pages/default.aspx">Find my elected officials</a>
                                    </li>
                                    <li>
                                        <a href="https://prodpci.etimspayments.com/pbw/include/philadelphia_parking/input.jsp">View my political districts</a>
                                    </li>
                                    <li>
                                        <a href="https://secure.phila.gov/WRB/WaterBill/Account/GetAccount.aspx">View my sample ballot</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tabs-panel philly311" id="panel13">
                    <div class="row pvn pvl-mu equal-height">
                        <div class="small-24 medium-8 columns sidewalk bdr-right-mu clearfix">
                            <section>
                                <h3 class="h4 dark-gray">Registration3</h3>
                                <a href="http://iframe.publicstuff.com/#?client_id=242" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-bullhorn valign-cell"></i>
                                        <div class="button-label valign-cell">Register to vote</div>
                                    </div>
                                </a>
                                <a href="http://www.phila.gov/311/findananswer/Pages/default.aspx" class="button icon full-width ">
                                    <div class="valign">
                                        <i class="fa fa-question valign-cell"></i>
                                        <div class="button-label valign-cell">Update voter registration</div>
                                    </div>
                                </a>
                            </section>
                        </div>
                        <div class="medium-16 columns trending-requests phl pvm pvn-mu">
                            <section>
                                <h3 class="h4 dark-gray">Trending requests</h3>
                                <ul class="columns-2-mu">
                                    <li>
                                        <a href="https://beta.phila.gov/services/property-lots-housing/get-the-homestead-exemption/">Find a polling place</a>
                                    </li>
                                    <li>
                                        <a href="http://www.phila.gov/prisons/Facilities/Pages/default.aspx">Find my elected officials</a>
                                    </li>
                                    <li>
                                        <a href="https://prodpci.etimspayments.com/pbw/include/philadelphia_parking/input.jsp">View my political districts</a>
                                    </li>
                                    <li>
                                        <a href="https://secure.phila.gov/WRB/WaterBill/Account/GetAccount.aspx">View my sample ballot</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fat">
            <div class="row pvs ptl-mu phm equal-height">
                <section class="medium-8 columns phm pvm pvn-mu">
                    <h2 class="mtn mbm">Site links</h2>
                    <nav class="take-action">
                        <ul>
                            <li class="pvxs"><a href="/">Home</a></li>
                            <li class="pvxs"><a href="/contact-us">Contact Us</a></li>
                            <li class="pvxs"><a href="/voterapp">Polling Places</a></li>
                            <li class="pvxs"><a href="/ballotbox-app">Election Results</a></li>
                            <li class="pvxs"><a href="/elected-officials">Elected Officials</a></li>
                        </ul>
                    </nav>
                </section>
                <section class="medium-8 columns phm pll-mu pvm pvn-mu">
                    <h2 class="mtn mbm">Our Department</h2>
                    <nav class="take-action">
                        <ul>
                            <li class="pvxs"><a href="/stuff/we/do/">Programs & initiatives </a></li>
                            <li class="pvxs"><a href="/stuff/weve/done/">Departmental Reports</a></li>
                        </ul>
                    </nav>
                </section>
                <section class="medium-8 columns phm pll-mu pvm pvn-mu">
                    <h2 class="mtn mbm">The City Commissioners</h2>
                    <nav class="city-social">
                        <ul class="inline-list">
                            <li class="pbm">
                                <a href="https://www.facebook.com/CommissionerDeeley" class="prl" data-analytics="social">
                                  <i class="fa fa-facebook fa-2x" title="Lisa's Facebook" aria-hidden="true"></i>
                                  <span class="show-for-sr">Lisa's Facebook</span>
                                </a>
                            </li>
                            <li class="pbm">
                                <a href="https://www.facebook.com/CommishSchmidt" class="prl" data-analytics="social">
                                  <i class="fa fa-facebook fa-2x" title="Al's Facebook" aria-hidden="true"></i>
                                <span class="show-for-sr">Al's Facebook</span>
                              </a>
                            </li>
                            <li class="pbm">
                                <a href="https://twitter.com/commish_schmidt" class="prl" data-analytics="social">
                                <i class="fa fa-twitter fa-2x" title="Al's Twitter" aria-hidden="true"></i>
                                <span class="show-for-sr">Al's Twitter</span>
                              </a>
                            </li>
                        </ul>
                    </nav>
                    <nav>
                        <ul>
                            <li class="pvxs"><a href="/bios/lisa/">Lisa Deeley</a></li>
                            <li class="pvxs"><a href="/bios/al/">Al Schmidt</a></li>
                            <li class="pvxs"><a href="/bios/anthony/">Anthony Clark</a></li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <div class="bg-black">
            <div class="row classic">
                <nav class="columns center">
                    <ul class="inline-list">
                        <li><a href="/terms-of-use/">Terms of use</a></li>
                        <li><a href="http://www.phila.gov/privacy/pdfs/FinalCityOpenRecords.pdf" target="_blank">Right to know (pdf)</a></li>
                        <li><a href="/privacypolicy/">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <div id="services-list" class="global-nav show-for-medium" data-swiftype-index="false">
        <div id="services-mega-menu" class="dropdown-pane mega-menu-dropdown" data-dropdown data-v-offset="0" data-hover-pane="true" data-trap-focus="true" data-hover="true" data-close-on-click="true">
            <div class="inner-wrapper">
                <div id="phila-menu-wrap" class="row expanded mbxs" data-equalizer data-equalize-by-row="true" data-services-menu>
                </div>
                <div class="row expanded collapse bg-ghost-gray mega-menu-footer">
                    <div class="medium-8 float-right white bg-dark-ben-franklin left-arrow-indent">
                        <div class="valign">
                            <a href="http://beta.phila.gov/services/" class="phl valign-cell service-directory">Service directory</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-pane global-nav">
        <div class="dropdown-pane site-search-dropdown" data-dropdown data-v-offset="0" data-hover-pane="true" data-trap-focus="true" data-close-on-click="true" data-auto-focus="true" id="search-dropdown">
            <div class="row columns expanded bg-ghost-gray">
                <div class="row arrow">
                    <div class="medium-16 columns small-centered">
                        <div class="paxl">
                            <form role="search" method="get" id="search-form" action="https://beta.phila.gov/search/">
                                <label for="search-field" class="show-for-sr">Search form</label>
                                <div class="search">
                                    <input type="text" class="search-field" placeholder="Search" value="" name="stq" title="Search" id="search-field">
                                    <input type="submit" class="search-submit" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/phila-standards.js"></script>
    <script>
    <script>
    $(document).foundation();
    </script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
    <script>
</body>

</html>