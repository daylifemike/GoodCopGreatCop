<?php
/**
 * Mobile (mostly iOS but a little Android) metadata.
 */
  $theme_url = get_template_directory_uri();
  $site_name = get_bloginfo('name');
?>

<!-- Run in full-screen mode. -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="mobile-web-app-capable" content="yes"/>

<!-- Style the status bar black with white text. -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

<!-- Customize home screen title. -->
<meta name="apple-mobile-web-app-title" content="Good Cop"/>
<meta name="mobile-web-app-title" content="Good Cop"/>

<!-- Disable phone number detection. -->
<!-- meta name="format-detection" content="telephone=no"/ -->

<!-- Set viewport. -->
<meta name="viewport" content="initial-scale=1, width=device-width"/>


<!-- Icons -->
<!-- Android -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/192x192.png"
      sizes="192x192"
      rel="icon"/>
<link href="<?php echo $theme_url; ?>/images/mobile/icon/128x128.png"
      sizes="128x128"
      rel="icon"/>

<!-- iOS 7 iPad (retina) -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-152x152.png"
      sizes="152x152"
      rel="apple-touch-icon"/>

<!-- iOS 6 iPad (retina) -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-144x144.png"
      sizes="144x144"
      rel="apple-touch-icon"/>

<!-- iOS 7 iPhone (retina) -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-120x120.png"
      sizes="120x120"
      rel="apple-touch-icon"/>

<!-- iOS 6 iPhone (retina) -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-114x114.png"
      sizes="114x114"
      rel="apple-touch-icon"/>

<!-- iOS 7 iPad -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-76x76.png"
      sizes="76x76"
      rel="apple-touch-icon"/>

<!-- iOS 6 iPad -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-72x72.png"
      sizes="72x72"
      rel="apple-touch-icon"/>

<!-- iOS 6 iPhone -->
<link href="<?php echo $theme_url; ?>/images/mobile/icon/apple-touch-icon-57x57.png"
      sizes="57x57"
      rel="apple-touch-icon"/>

<!-- Startup images -->
<!-- iOS 6 & 7 iPad (retina, portrait) -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-1536x2008.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 & 7 iPad (retina, landscape) -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-1496x2048.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 iPad (portrait) -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-768x1004.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 iPad (landscape) -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-748x1024.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 & 7 iPhone 5 -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-640x1096.png"
      media="(device-width: 320px) and (device-height: 568px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 & 7 iPhone (retina) -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-640x920.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image"/>

<!-- iOS 6 iPhone -->
<link href="<?php echo $theme_url; ?>/images/mobile/splash/apple-touch-startup-image-320x460.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image"/>

<!-- Prevent text size adjustment on orientation change. -->
<style>/* html { -webkit-text-size-adjust: 100%; } */</style>