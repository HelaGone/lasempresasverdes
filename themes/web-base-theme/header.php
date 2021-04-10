<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEMEPATH . "images/assets/apple-icon-57x57.png"; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEMEPATH . "images/assets/apple-icon-60x60.png"; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEMEPATH . "images/assets/apple-icon-72x72.png"; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEMEPATH . "images/assets/apple-icon-76x76.png"; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEMEPATH . "images/assets/apple-icon-114x114.png"; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEMEPATH . "images/assets/apple-icon-120x120.png"; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEMEPATH . "images/assets/apple-icon-144x144.png"; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEMEPATH . "images/assets/apple-icon-152x152.png"; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEMEPATH . "images/assets/apple-icon-180x180.png"; ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEMEPATH . "images/assets/android-icon-192x192.png"; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEMEPATH . "images/assets/favicon-32x32.png"; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEMEPATH . "images/assets/favicon-96x96.png"; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEMEPATH . "images/assets/favicon-16x16.png"; ?>">
    <link rel="manifest" href="<?php echo  site_url(); ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo THEMEPATH . "images/assets/ms-icon-144x144.png" ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="preload" crossorigin as="style">

    <!-- Slick -->
    <!-- <link rel="preconnect" href="//cdn.jsdelivr.net/"> -->
    <!-- <link rel="preload" crossorigin type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script rel="preload" crossorigin type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

    <!-- TITLE TAG IS MANAGED BY WORDPRESS -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="main_header">
      <div class="inner_wrapper flex">
        <svg class="lev_logo_vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 870 354">
          <g>
          	<path fill="#ffffff" d="M268.59,112.66c3.61,0,7.13-0.42,10.54-1.24c3.41-0.83,5.94-1.65,7.6-2.48l-2.17-15.82c-1.76,0.73-3.23,1.19-4.42,1.4
          		c-1.19,0.21-2.4,0.31-3.64,0.31c-2.07,0-3.56-0.83-4.5-2.48c-0.93-1.65-1.39-4.29-1.39-7.91V1.97h-20.16v93.02
          		c0,6.31,1.55,10.83,4.65,13.57C258.2,111.3,262.7,112.66,268.59,112.66z"/>
          	<path fill="#ffffff" d="M296.64,105.45c2.07,2.02,4.55,3.57,7.44,4.66c2.9,1.09,6.15,1.63,9.77,1.63c5.79,0,10.52-1.17,14.19-3.49
          		c3.67-2.33,6.54-5.09,8.6-8.3h0.78l3.26,10.7h16.43c-1.24-3.72-2.01-7.68-2.33-11.86c-0.31-4.19-0.44-8.5-0.38-12.95
          		c0.05-4.44,0.23-8.96,0.54-13.56c0.31-4.6,0.47-9.17,0.47-13.72c0-4.13-0.44-7.85-1.32-11.16c-0.88-3.31-2.38-6.15-4.5-8.53
          		s-4.99-4.21-8.6-5.51c-3.62-1.29-8.11-1.94-13.49-1.94c-6.2,0-12.14,0.54-17.83,1.63c-5.68,1.09-10.6,2.56-14.73,4.42l4.81,15.04
          		c2.89-1.34,6.59-2.43,11.08-3.26c4.5-0.82,8.76-1.24,12.79-1.24c5.37,0,8.83,1.27,10.38,3.8c1.55,2.54,1.96,6.69,1.24,12.48
          		c-6.82-0.31-13-0.08-18.53,0.7c-5.53,0.78-10.28,2.17-14.26,4.18c-3.98,2.02-7.03,4.66-9.15,7.91s-3.18,7.26-3.18,12.02
          		c0,3.41,0.57,6.49,1.71,9.22C292.98,101.06,294.58,103.44,296.64,105.45z M312.92,80.88c1.34-1.34,3.15-2.38,5.43-3.1
          		c2.27-0.72,4.88-1.19,7.83-1.39c2.95-0.2,6.02-0.15,9.22,0.16v10.07c-1.14,2.07-2.89,4.01-5.27,5.82
          		c-2.38,1.81-5.58,2.71-9.61,2.71c-3,0-5.35-0.8-7.05-2.4c-1.7-1.6-2.56-3.85-2.56-6.74C310.9,83.93,311.58,82.23,312.92,80.88z"/>
          	<path fill="#ffffff" d="M401.68,94.84c-1.81,1.14-4.21,1.7-7.21,1.7c-4.13,0-8.16-0.64-12.09-1.94c-3.93-1.29-7.08-2.61-9.46-3.96l-5.58,15.04
          		c3,1.86,6.9,3.49,11.71,4.88c4.81,1.39,9.95,2.09,15.42,2.09c10.02,0,17.54-2.25,22.56-6.74c5.02-4.5,7.52-10.67,7.52-18.53
          		c0-4.55-0.88-8.26-2.64-11.16s-3.93-5.25-6.51-7.06c-2.59-1.8-5.43-3.27-8.53-4.42c-3.1-1.14-5.94-2.2-8.52-3.18
          		c-2.59-0.98-4.76-2.04-6.52-3.18c-1.75-1.14-2.63-2.63-2.63-4.49c0-4.66,3-6.98,8.99-6.98c3.72,0,7.39,0.52,11.01,1.55
          		c3.61,1.03,6.61,2.01,8.99,2.95l4.5-14.58c-2.69-1.55-6.41-2.95-11.16-4.18c-4.76-1.24-10.08-1.86-15.97-1.86
          		c-8.58,0-15.14,2.01-19.69,6.04s-6.82,9.87-6.82,17.52c0,4.66,0.88,8.45,2.64,11.4c1.75,2.95,3.92,5.37,6.51,7.29
          		c2.58,1.91,5.43,3.41,8.52,4.5c3.1,1.09,5.94,2.14,8.53,3.17c2.58,1.03,4.75,2.17,6.51,3.41c1.76,1.24,2.64,2.9,2.64,4.96
          		C404.4,91.79,403.49,93.7,401.68,94.84z"/>
          	<polygon fill="#ffffff" points="293.85,313.56 291.68,325.81 290.91,325.81 288.27,313.87 273.85,273.25 250.44,273.25 284.09,351.55
          		296.33,351.55 328.74,273.25 307.03,273.25 	"/>
          	<path fill="#ffffff" d="M389.21,277.75c-2.9-2.38-6.2-4.08-9.92-5.12c-3.72-1.03-7.54-1.55-11.48-1.55c-11.78,0-20.93,3.41-27.44,10.23
          		c-6.51,6.82-9.77,17.05-9.77,30.7c0,12.71,2.9,22.71,8.68,30c5.79,7.29,14.94,10.93,27.44,10.93c5.99,0,11.65-0.85,16.98-2.55
          		c5.32-1.71,9.54-3.8,12.64-6.28l-6.67-13.18c-1.75,1.34-4.32,2.66-7.67,3.96c-3.36,1.29-7.16,1.94-11.39,1.94
          		c-6.83,0-11.76-1.65-14.81-4.96c-3.05-3.31-4.73-8.22-5.04-14.73h46.51c0.51-2.69,0.9-5.27,1.16-7.75
          		c0.26-2.48,0.38-4.81,0.38-6.98c0-5.99-0.88-11.01-2.63-15.04C394.42,283.33,392.09,280.13,389.21,277.75z M380.06,304.57h-28.84
          		c0.51-5.27,2.04-9.48,4.57-12.64c2.53-3.15,6.43-4.73,11.7-4.73c4.55,0,7.88,1.5,10,4.5C379.62,294.7,380.47,298.99,380.06,304.57z
          		"/>
          	<path fill="#ffffff" d="M438.82,274.65c-3,2.07-5.37,5.02-7.13,8.84h-0.62l-2.33-10.23h-15.66v77.52h20.16V300.7c0.83-3,2.45-5.45,4.88-7.36
          		c2.43-1.91,5.45-2.87,9.07-2.87c2.58,0,5.48,0.57,8.68,1.7l2.64-18.91c-3.41-1.14-6.47-1.7-9.15-1.7
          		C445.33,271.55,441.81,272.59,438.82,274.65z"/>
          	<path fill="#ffffff" d="M533.39,323.49v-81.24h-20.16v31.47c-2.07-0.83-4.14-1.42-6.2-1.79c-2.07-0.36-4.71-0.54-7.91-0.54
          		c-11.58,0-20.36,3.67-26.36,11.01c-5.99,7.34-8.99,17.63-8.99,30.85c0,13.64,2.69,23.67,8.06,30.07
          		c5.37,6.41,12.92,9.61,22.63,9.61c5.27,0,9.85-1.11,13.72-3.33s6.84-5.14,8.91-8.76h0.62l2.79,10.08h14.41
          		c-0.83-5.27-1.29-10.08-1.39-14.42S533.39,327.83,533.39,323.49z M513.24,324.72c-0.93,3.62-2.54,6.38-4.81,8.3
          		c-2.28,1.91-5.37,2.87-9.3,2.87c-5.07,0-8.76-2.02-11.08-6.05c-2.32-4.03-3.49-9.35-3.49-15.97c0-9.3,1.42-15.87,4.26-19.69
          		c2.84-3.82,7.1-5.74,12.79-5.74c2.79,0,5.06,0.29,6.82,0.86c1.75,0.57,3.36,1.42,4.81,2.55V324.72z"/>
          	<path fill="#ffffff" d="M605.95,277.75c-2.9-2.38-6.2-4.08-9.92-5.12s-7.54-1.55-11.48-1.55c-11.78,0-20.93,3.41-27.44,10.23
          		c-6.51,6.82-9.77,17.05-9.77,30.7c0,12.71,2.9,22.71,8.68,30c5.79,7.29,14.94,10.93,27.44,10.93c5.99,0,11.65-0.85,16.98-2.55
          		c5.32-1.71,9.54-3.8,12.64-6.28l-6.67-13.18c-1.75,1.34-4.32,2.66-7.67,3.96c-3.36,1.29-7.16,1.94-11.39,1.94
          		c-6.83,0-11.76-1.65-14.81-4.96c-3.05-3.31-4.73-8.22-5.04-14.73h46.51c0.51-2.69,0.9-5.27,1.16-7.75
          		c0.26-2.48,0.38-4.81,0.38-6.98c0-5.99-0.88-11.01-2.63-15.04C611.16,283.33,608.84,280.13,605.95,277.75z M596.8,304.57h-28.84
          		c0.51-5.27,2.04-9.48,4.57-12.64c2.53-3.15,6.43-4.73,11.7-4.73c4.55,0,7.88,1.5,10,4.5C596.36,294.7,597.21,298.99,596.8,304.57z"
          		/>
          	<path fill="#ffffff" d="M672.92,309.45c-2.59-1.8-5.43-3.27-8.53-4.42c-3.1-1.14-5.94-2.2-8.52-3.18c-2.59-0.98-4.76-2.04-6.52-3.18
          		c-1.75-1.14-2.63-2.63-2.63-4.49c0-4.66,3-6.98,8.99-6.98c3.72,0,7.39,0.52,11.01,1.55c3.61,1.03,6.61,2.01,8.99,2.95l4.5-14.58
          		c-2.69-1.55-6.41-2.95-11.16-4.18c-4.76-1.24-10.08-1.86-15.97-1.86c-8.58,0-15.14,2.01-19.69,6.04s-6.82,9.87-6.82,17.52
          		c0,4.66,0.88,8.45,2.64,11.4c1.75,2.95,3.92,5.37,6.51,7.29c2.58,1.91,5.43,3.41,8.52,4.5c3.1,1.09,5.94,2.14,8.53,3.17
          		c2.58,1.03,4.75,2.17,6.51,3.41c1.76,1.24,2.64,2.9,2.64,4.96c0,2.69-0.91,4.6-2.71,5.73c-1.81,1.14-4.21,1.7-7.21,1.7
          		c-4.13,0-8.16-0.64-12.09-1.94c-3.93-1.29-7.08-2.61-9.46-3.96l-5.58,15.04c3,1.86,6.9,3.49,11.71,4.88s9.95,2.09,15.42,2.09
          		c10.02,0,17.54-2.25,22.56-6.74c5.02-4.5,7.52-10.67,7.52-18.53c0-4.55-0.88-8.26-2.64-11.16
          		C677.67,313.62,675.5,311.26,672.92,309.45z"/>
          	<path fill="#ffffff" d="M286.57,225.17c5.99,0,11.65-0.85,16.98-2.55c5.32-1.71,9.54-3.8,12.64-6.28l-6.67-13.18c-1.75,1.34-4.32,2.66-7.67,3.96
          		c-3.36,1.29-7.16,1.94-11.39,1.94c-6.83,0-11.76-1.65-14.81-4.96c-3.05-3.31-4.73-8.22-5.04-14.73h46.51
          		c0.51-2.69,0.9-5.27,1.16-7.75c0.26-2.48,0.38-4.81,0.38-6.98c0-5.99-0.88-11.01-2.63-15.04c-1.76-4.03-4.09-7.23-6.98-9.61
          		c-2.9-2.38-6.2-4.08-9.92-5.12c-3.72-1.03-7.54-1.55-11.48-1.55c-11.78,0-20.93,3.41-27.44,10.23s-9.77,17.05-9.77,30.7
          		c0,12.71,2.9,22.71,8.68,30C264.92,221.53,274.06,225.17,286.57,225.17z M275.64,164.16c2.53-3.15,6.43-4.73,11.7-4.73
          		c4.55,0,7.88,1.5,10,4.5s2.97,7.29,2.56,12.86h-28.84C271.58,171.53,273.1,167.31,275.64,164.16z"/>
          	<path fill="#ffffff" d="M419.05,165.71c1.29,3.05,1.94,7.63,1.94,13.72V223h20.16v-46.51c0-6.51-0.47-11.89-1.39-16.12
          		c-0.93-4.23-2.35-7.62-4.26-10.15c-1.92-2.54-4.4-4.32-7.44-5.35s-6.74-1.55-11.08-1.55c-5.27,0-9.77,1.19-13.49,3.56
          		c-3.72,2.38-6.77,5.58-9.15,9.61c-1.76-4.76-4.21-8.14-7.36-10.16c-3.15-2.01-7.21-3.02-12.18-3.02c-5.78,0-10.52,1.24-14.18,3.72
          		c-3.67,2.48-6.69,5.37-9.07,8.68h-0.62l-2.33-10.23h-15.66V223h20.16v-51.63c1.14-3,2.79-5.45,4.96-7.36
          		c2.17-1.91,5.02-2.87,8.53-2.87c4.23,0,7.03,1.5,8.37,4.5c1.34,3,2.01,8.06,2.01,15.19V223h20.16v-50.85
          		c1.03-3.41,2.61-6.09,4.73-8.06c2.11-1.96,4.98-2.95,8.6-2.95C414.89,161.14,417.76,162.66,419.05,165.71z"/>
          	<path fill="#ffffff" d="M477.88,222.22c2.06,1.03,4.13,1.79,6.2,2.25c2.06,0.47,4.7,0.7,7.9,0.7c5.68,0,10.72-0.98,15.12-2.95
          		s8.11-4.81,11.17-8.53c3.05-3.72,5.35-8.24,6.9-13.56c1.55-5.32,2.33-11.29,2.33-17.9c0-13.65-2.43-23.54-7.29-29.69
          		c-4.86-6.14-12.14-9.22-21.86-9.22c-5.27,0-9.75,0.93-13.41,2.79c-3.67,1.86-6.85,4.76-9.54,8.69h-0.62l-2.32-9.31h-14.73V254
          		h20.16V222.22z M477.88,172.15c1.24-3.92,2.97-6.87,5.19-8.84c2.22-1.96,5.29-2.95,9.22-2.95c5.07,0,8.74,1.86,11.01,5.58
          		s3.41,8.99,3.41,15.82c0,9.41-1.45,16.15-4.34,20.23c-2.9,4.08-7.24,6.13-13.03,6.13c-2.79,0-5.03-0.33-6.74-1.01
          		c-1.7-0.67-3.28-1.58-4.73-2.71V172.15z"/>
          	<path fill="#ffffff" d="M561.6,172.92c0.83-3,2.45-5.45,4.88-7.36c2.43-1.91,5.45-2.87,9.07-2.87c2.58,0,5.48,0.57,8.68,1.7l2.64-18.91
          		c-3.41-1.14-6.47-1.7-9.15-1.7c-4.03,0-7.55,1.03-10.55,3.1c-3,2.07-5.37,5.02-7.13,8.84h-0.62l-2.33-10.23h-15.66V223h20.16
          		V172.92z"/>
          	<path fill="#ffffff" d="M628.27,225.17c5.99,0,11.65-0.85,16.98-2.55c5.32-1.71,9.54-3.8,12.64-6.28l-6.67-13.18c-1.75,1.34-4.32,2.66-7.67,3.96
          		c-3.36,1.29-7.16,1.94-11.39,1.94c-6.83,0-11.76-1.65-14.81-4.96c-3.05-3.31-4.73-8.22-5.04-14.73h46.51
          		c0.51-2.69,0.9-5.27,1.16-7.75c0.26-2.48,0.38-4.81,0.38-6.98c0-5.99-0.88-11.01-2.63-15.04c-1.76-4.03-4.09-7.23-6.98-9.61
          		c-2.9-2.38-6.2-4.08-9.92-5.12s-7.54-1.55-11.48-1.55c-11.78,0-20.93,3.41-27.44,10.23c-6.51,6.82-9.77,17.05-9.77,30.7
          		c0,12.71,2.9,22.71,8.68,30C606.62,221.53,615.77,225.17,628.27,225.17z M617.35,164.16c2.53-3.15,6.43-4.73,11.7-4.73
          		c4.55,0,7.88,1.5,10,4.5c2.12,3,2.97,7.29,2.56,12.86h-28.84C613.28,171.53,614.81,167.31,617.35,164.16z"/>
          	<path fill="#ffffff" d="M717.73,181.68c-2.59-1.8-5.43-3.27-8.53-4.42c-3.1-1.14-5.94-2.2-8.52-3.18c-2.59-0.98-4.76-2.04-6.52-3.18
          		c-1.75-1.14-2.63-2.63-2.63-4.49c0-4.66,3-6.98,8.99-6.98c3.72,0,7.39,0.52,11.01,1.55c3.61,1.03,6.61,2.01,8.99,2.95l4.5-14.58
          		c-2.69-1.55-6.41-2.95-11.16-4.18c-4.76-1.24-10.08-1.86-15.97-1.86c-8.58,0-15.14,2.01-19.69,6.04
          		c-4.55,4.03-6.82,9.87-6.82,17.52c0,4.66,0.88,8.45,2.64,11.4c1.75,2.95,3.92,5.37,6.51,7.29c2.58,1.91,5.43,3.41,8.52,4.5
          		c3.1,1.09,5.94,2.14,8.53,3.17c2.58,1.03,4.75,2.17,6.51,3.41c1.76,1.24,2.64,2.9,2.64,4.96c0,2.69-0.91,4.6-2.71,5.73
          		c-1.81,1.14-4.21,1.7-7.21,1.7c-4.13,0-8.16-0.64-12.09-1.94c-3.93-1.29-7.08-2.61-9.46-3.96l-5.58,15.04
          		c3,1.86,6.9,3.49,11.71,4.88s9.95,2.09,15.42,2.09c10.02,0,17.54-2.25,22.56-6.74c5.02-4.5,7.52-10.67,7.52-18.53
          		c0-4.55-0.88-8.26-2.64-11.16S720.31,183.49,717.73,181.68z"/>
          	<path fill="#ffffff" d="M799.04,198.34c0.05-4.44,0.23-8.96,0.54-13.56c0.31-4.6,0.47-9.17,0.47-13.72c0-4.13-0.44-7.85-1.32-11.16
          		c-0.88-3.31-2.38-6.15-4.5-8.53c-2.12-2.38-4.99-4.21-8.6-5.51c-3.62-1.29-8.11-1.94-13.49-1.94c-6.2,0-12.14,0.54-17.83,1.63
          		c-5.68,1.09-10.6,2.56-14.73,4.42l4.81,15.04c2.89-1.34,6.59-2.43,11.08-3.26c4.5-0.82,8.76-1.24,12.79-1.24
          		c5.37,0,8.83,1.27,10.38,3.8c1.55,2.54,1.96,6.69,1.24,12.48c-6.82-0.31-13-0.08-18.53,0.7c-5.53,0.78-10.28,2.17-14.26,4.18
          		c-3.98,2.02-7.03,4.66-9.15,7.91c-2.12,3.26-3.18,7.26-3.18,12.02c0,3.41,0.57,6.49,1.71,9.22c1.14,2.74,2.74,5.12,4.8,7.13
          		c2.07,2.02,4.55,3.57,7.44,4.66c2.9,1.09,6.15,1.63,9.77,1.63c5.79,0,10.52-1.17,14.19-3.49c3.67-2.33,6.54-5.09,8.6-8.3h0.78
          		l3.26,10.7h16.43c-1.24-3.72-2.01-7.68-2.33-11.86C799.12,207.11,798.99,202.79,799.04,198.34z M780.05,199.12
          		c-1.14,2.07-2.89,4.01-5.27,5.82c-2.38,1.81-5.58,2.71-9.61,2.71c-3,0-5.35-0.8-7.05-2.4s-2.56-3.85-2.56-6.74
          		c0-2.07,0.68-3.77,2.02-5.12s3.15-2.38,5.43-3.1c2.27-0.72,4.88-1.19,7.83-1.39c2.95-0.2,6.02-0.15,9.22,0.16V199.12z"/>
          	<path fill="#ffffff" d="M866.56,188.74c-1.76-2.9-3.93-5.25-6.51-7.06c-2.59-1.8-5.43-3.27-8.53-4.42c-3.1-1.14-5.94-2.2-8.52-3.18
          		c-2.59-0.98-4.76-2.04-6.52-3.18c-1.75-1.14-2.63-2.63-2.63-4.49c0-4.66,3-6.98,8.99-6.98c3.72,0,7.39,0.52,11.01,1.55
          		c3.61,1.03,6.61,2.01,8.99,2.95l4.5-14.58c-2.69-1.55-6.41-2.95-11.16-4.18c-4.76-1.24-10.08-1.86-15.97-1.86
          		c-8.58,0-15.14,2.01-19.69,6.04s-6.82,9.87-6.82,17.52c0,4.66,0.88,8.45,2.64,11.4c1.75,2.95,3.92,5.37,6.51,7.29
          		c2.58,1.91,5.43,3.41,8.52,4.5c3.1,1.09,5.94,2.14,8.53,3.17c2.58,1.03,4.75,2.17,6.51,3.41c1.76,1.24,2.64,2.9,2.64,4.96
          		c0,2.69-0.91,4.6-2.71,5.73c-1.81,1.14-4.21,1.7-7.21,1.7c-4.13,0-8.16-0.64-12.09-1.94c-3.93-1.29-7.08-2.61-9.46-3.96
          		l-5.58,15.04c3,1.86,6.9,3.49,11.71,4.88s9.95,2.09,15.42,2.09c10.02,0,17.54-2.25,22.56-6.74c5.02-4.5,7.52-10.67,7.52-18.53
          		C869.19,195.35,868.32,191.63,866.56,188.74z"/>
          	<path fill="#5b7640" d="M174.09,190.65c0-2.24-1.81-4.05-4.05-4.05c-2.24,0-4.05,1.81-4.05,4.05v11.27l-13.03-13.93
          		c0.03-0.19,0.06-0.38,0.06-0.58v-24.32c0-2.24-1.81-4.05-4.05-4.05c-2.24,0-4.05,1.82-4.05,4.05v16.29l-25.41-27.17
          		c-1.53-1.63-4.09-1.72-5.73-0.19c-1.63,1.53-1.72,4.09-0.19,5.73l23.95,25.6H121.4c-2.24,0-4.05,1.81-4.05,4.05
          		c0,2.24,1.81,4.05,4.05,4.05h23.71l18.2,19.46h-20.83c-2.24,0-4.05,1.81-4.05,4.05c0,2.24,1.81,4.05,4.05,4.05h27.56
          		c0.27,0,0.52-0.03,0.77-0.08l5.82,6.22l0.13-0.09c0.86,0.73,1.61,1.57,2.43,2.35v-11.4l-5.09-5.44V190.65z"/>
          	<path fill="#e8a745" d="M102.93,233.65c-2.64-2.47-5.28-5.18-7.92-8.14c-4.01-4.5-7.29-9.59-9.69-15.12
          		c-6.24-14.36-15.4-44.34-3.34-78.91c33.62-10.26,61.91-2.97,78.31,3.88c6.06,2.53,11.51,6.22,16.26,10.65V0.51
          		c-8.69,0-17.39,0-26.08,0.01c-2.61,0-2.58,0.01-2.73,2.66c-0.67,11.63-1.36,23.26-2,34.89c-0.07,1.34-0.48,1.97-1.92,2.32
          		c-14.17,3.44-27.5,8.93-39.91,16.6c-1.19,0.74-1.83,0.52-2.78-0.33c-9.3-8.32-18.64-16.6-27.99-24.91
          		c-13.82,13.82-27.51,27.5-41.29,41.28c8.64,9.74,17.33,19.54,26.03,29.34c-0.41,0.71-0.72,1.27-1.05,1.81
          		c-7.37,12.13-12.81,25.07-16.13,38.87c-0.49,2.05-1.4,2.57-3.35,2.67c-11.57,0.59-23.13,1.31-34.69,1.99
          		c-0.62,0.04-1.24,0.14-1.84,0.21c0,19.52,0,38.85,0,58.19c1.47,0.12,2.74,0.24,4.02,0.32c11.05,0.66,22.1,1.34,33.15,1.94
          		c1.5,0.08,2.2,0.53,2.57,2.1c3.37,14.19,9,27.47,16.61,39.91c0.56,0.91,0.61,1.48-0.15,2.32c-5.17,5.74-10.28,11.52-15.41,17.3
          		c-3.28,3.69-6.55,7.39-9.73,10.99c13.82,13.82,27.51,27.5,41.26,41.25c0.3-0.25,0.7-0.57,1.08-0.9c9-7.99,18.01-15.96,26.97-23.99
          		c0.97-0.87,1.6-0.99,2.77-0.27c12.36,7.61,25.63,13.09,39.74,16.53c1.45,0.35,1.99,0.89,2.07,2.38c0.52,9.96,1.11,19.92,1.7,29.88
          		c0.15,2.49,0.33,4.97,0.5,7.5c0.47,0.06,0.77,0.14,1.08,0.14c9.18,0,18.35,0.01,27.53,0.02V242.91c-1.3-1.4-2.72-2.67-4.16-3.93
          		C152.49,252.4,124.62,253.99,102.93,233.65z"/>
          </g>
        </svg>
        <div class="wp_menu_main">
          <?php /*TODO: Acá va el menú de wordpress */?>
        </div>
        <svg class="icn_search" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        <svg class="icn_hamburger" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
      </div>
    </header>