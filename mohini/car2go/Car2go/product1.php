 <?php
    include_once('header.php');
?>
<style>
 
/* Css For Acto */

/************ TABLE OF CONTENTS ***************
1. Fonts
2. Reset
3. Global
4. Main Header/style-one/style-two/style-three/style-four/style-five/style-six/style-seven/style-eight/style-nine
5. Main Slider/style-one/style-two/style-three/style-four/style-five/style-six/style-seven/style-eight
6. Weare Section
7. Ourmission Section
9. Service Section
8. About Section
10. Factory Section
11. Project Section
12. Testimonial Section
14. Team Section
15. News Section
16. Main Footer
19. Ourmission Style Two
20. Service Style Two
21. About Style Two
22. Service Style Two
23. Team Style Two
24. Call To Action
25. Footer Style Two
26. About Style Three
27. Ourmission Style Three
28. Service Style Three
29. Wehelp Section
30. Project Style Three
31. Subscribe Section
32. Intro Section
33. Oilgas Section
34. Growth Section
35. Energy Section
36. Shop Section
37. Industries Section
38. Fact Counter
39. Textile Section
40. Product Section
41. Medical Equepment
42. Signup Section
43. Statistics Section
44. About Bannner
45. Service Page
46. Service Banner
47. Service Single
48. Shop Page
49. Shop Banner
50. Single Shop
51. Our History
52. Partner Page
53. Testimonial Page
54. Gallery Page
55. Comingsoon Page
56. Error Page
57. Case Studies
58. Case Single
59. Blog Grid Page
60. Blog Classic Page
61. Blog Single Page
62. Contact Page
63. Contact Section
64. Contact Form
65. Google Map


**********************************************/


/* use font link */

@import url('https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;display=swap');


/* use style sheet */

@import url(font-awesome-all.css);
@import url(flaticon.css);
@import url(owl.css);
@import url(bootstrap.css);
@import url(jquery.fancybox.min.css);
@import url(animate.css);
@import url(aos.css);
@import url(jquery-ui.css);
@import url(jquery.bootstrap-touchspin.css);



/*** 

====================================================================
  Reset
====================================================================

 ***/
* {
  margin:0px;
  padding:0px;
  border:none;
  outline:none;
}


/*** 

====================================================================
  Global Settings
====================================================================

 ***/


body {
  font-size:16px;
  color:#5d5d66;
  line-height:26px;
  font-weight:400;
  background:#ffffff;
  font-family: 'Ubuntu', sans-serif;
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center top;
  -webkit-font-smoothing: antialiased;
}

  @media (min-width:1200px) {
  .container {
    max-width: 1200px;
    padding: 0px 15px;
  }
}

.large-container{
  max-width: 1600px;
  padding: 0px 15px;
  margin: 0 auto;
}

.container-fluid{
  padding: 0px;
}

.auto-container{
  position:static;
  max-width:1200px;
  padding:0px 15px;
  margin:0 auto;
}

.small-container{
  max-width:680px;
  margin:0 auto;
}

.boxed_wrapper{
  position: relative;
  overflow-x: hidden;
  margin: 0 auto;
  width: 100%;
  min-width: 300px;
}


a{
  text-decoration:none;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

a:hover{
  text-decoration:none;
  outline:none;
  color: #f2be00;
}

input,button,select,textarea{
  font-family: 'Ubuntu', sans-serif;
  font-weight: 400;
  font-size: 15px;
}

ul,li{
  list-style:none;
  padding:0px;
  margin:0px; 
}

input{
  transition: all 500ms ease;
}

button:focus,
input:focus,
textarea:focus{
  outline: none;
  box-shadow: none;
  transition: all 500ms ease;
}

p{
  position: relative;
  color: #5d5d66;
  font-family: 'Ubuntu', sans-serif;
  margin-bottom: 0px;
  font-style: normal;
  transition: all 500ms ease;
}

h1,h2,h3,h4,h5,h6 {
  position:relative;
  font-family: 'Ubuntu', sans-serif;
  font-weight: 400;
  margin: 0px;
  transition: all 500ms ease;
}


.centred{
  text-align: center;
}

.pull-left{
  float: left;
}

.pull-right{
  float: right;
}

.gray-bg{
  background: #f2f1f0;
}

.black-bg{
  background: #3b3634;
}

figure{
  margin: 0px;
}

img {
  display: inline-block;
  max-width: 100%;
  height: auto;
  transition-delay: .1s;
  transition-timing-function: ease-in-out;
  transition-duration: .7s;
  transition-property: all;
}

@keyframes pulse {
    50% {
        box-shadow: 0 0 0 15px rgba(255, 255, 255, 0.15)
    }
}

@keyframes pulse-2 {
    50% {
        box-shadow: 0 0 0 15px rgba(255, 94, 133, 0.5),
        0 0 0 30px rgba(255, 94, 133, 0.3);
    }
}

@keyframes pulse-3 {
    50% {
        box-shadow: 0 0 0 15px rgba(121, 81, 248, 0.5),
        0 0 0 30px rgba(121, 81, 248, 0.3);
    }
}

/** button **/

.theme-btn-one {
  position: relative;
  display: inline-block;
  font-size: 20px;
  padding: 20px 40px;
  background: #9dc638;
  line-height: 26px;
  color: #ffffff;
  font-weight: 400;
  border-radius: 30px;
  text-transform: uppercase;
  transition: all 500ms ease;
  cursor: pointer;
  text-align: center;
  z-index: 1;
}

.theme-btn-one:hover{
  background: #e72636;
  color: #ffffff;
  transform: translateY(-3px);
}


.pagination{
  position: relative;
  display: block;
}

.pagination li{
  display: inline-block;
  margin: 0px 4px;
}

.pagination li a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  height: 50px;
  width: 50px;
  line-height: 46px;
  border: 1px solid #e9e9e9;
  border-radius: 50%;
  text-align: center;
  color: #5c5c66;
  background: transparent;
  transition: all 500ms ease;
}

.pagination li a:hover,
.pagination li a.active{
  color: #fc9a36;
  border-color: #fc9a36;
}

.sec-pad{
  padding: 154px 0px 120px 0px;
}

.preloader{
  position: fixed; 
  left:0px;
  top:0px;
  height:100%;
  width: 100%;
  z-index:999999;
  background-color:#ffffff;
  background-position:center center;
  background-repeat:no-repeat;
  background-image:url(../images/icons/preloader.gif);
}

.scroll-top {
  width: 50px;
  height: 50px;
  line-height: 50px;
  position: fixed;
  bottom: 105%;
  right: 50px;
  font-size: 16px;
  border-radius: 50%;
  z-index: 99;
  color: #ffffff;
  text-align: center;
  cursor: pointer;
  background: #fd571d;
  transition: 1s ease;
}
.scroll-top:hover{
  background: #192d66;
}
.scroll-top.open {
  bottom: 30px;
}
.scroll-top span{
  color: #fff;
}
.scroll-top:after {
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 1;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
  background: -webkit-radial-gradient(center ellipse, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
}


.sec-title{
  position: relative;
  display: block;
}

.sec-title h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 46px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 10px;
}

.sec-title p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #666666;
  font-weight: 400;
}

.bg-color-1{
  background: #192d66;
}

.bg-color-2{
  background: #ff443e;
}

.bg-color-3{
  background: #fd571d;
}

/*** 

====================================================================
                        Home-Page-One
====================================================================

***/


/** main-header **/

.main-header{
  position:relative;
  left:0px;
  top:0px;
  z-index:999;
  width:100%;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

.sticky-header{
  position:fixed;
  opacity:0;
  visibility:hidden;
  background: #192d66;
  left:0px;
  top:0px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  width:100%;
  z-index:0;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

.fixed-header .sticky-header{
  z-index:999;
  opacity:1;
  visibility:visible;
  -ms-animation-name: fadeInDown;
  -moz-animation-name: fadeInDown;
  -op-animation-name: fadeInDown;
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -ms-animation-duration: 500ms;
  -moz-animation-duration: 500ms;
  -op-animation-duration: 500ms;
  -webkit-animation-duration: 500ms;
  animation-duration: 500ms;
  -ms-animation-timing-function: linear;
  -moz-animation-timing-function: linear;
  -op-animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -ms-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -op-animation-iteration-count: 1;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
}

/** header-top **/

.main-header .header-top{
  position: relative;
  display: block;
  background: #fff;
  padding: 17px 0px 14px 0px;
}

.main-header .header-top .header-info{
  position: relative;
  margin-top: 2px;
}

.main-header .header-top .header-info li{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #585858;
  margin-right: 30px;
}

.main-header .header-top .header-info li:last-child{
  margin-right: 0px;
}

.main-header .header-top .header-info li a{
  color: #3d3d3d;
}

.main-header .header-top .header-info li a:hover{
  color: #192d66;
}

.main-header .header-top .header-info li i{
  position: relative;
  font-size: 20px;
  margin-right: 10px;
  font-weight: 600;
  top: 3px;
}

.main-header .header-top .header-nav li{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #585858;
  margin-right: 20px;
}

.main-header .header-top .header-nav li:last-child{
  margin-right: 0px;
  margin-left: 15px;
}

.main-header .header-top .header-nav li a{
  color: #585858;
}

.main-header .header-top .header-nav li a:hover{
  color: #192d66;
}

.main-header .header-upper{
  position: relative;
  display: block;
  background: #192d66;
  padding: 34px 0px 53px 0px;
}

.main-header .header-upper .inner-container .info-box{
  position: relative;
  display: inline-block;
  padding: 0px 0px 0px 50px;
}

.main-header .header-upper .inner-container .info-box .icon-box{
  position: absolute;
  left: 0px;
  top: 4px;
  font-size: 40px;
  color: #fff;
  line-height: 40px;
  transition: all 500ms ease;
}

.main-header .header-upper .inner-container .info-box:hover .icon-box {
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -ms-transform: scale(2);
  -o-transform: scale(2);
  transform: scale(2);
  left: 50%;
  opacity: .10;
}

.main-header .header-upper .inner-container .left-content .info-box{
  margin-right: 290px;
}

.main-header .header-upper .inner-container .info-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #fff;
  text-transform: uppercase;
  margin-bottom: 0px;
}

.main-header .header-upper .inner-container .info-box span{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 24px;
  color: #cdd0d9;
}

.main-header .header-upper .inner-container .info-box a{
  position: relative;
  display: inline-block;
  font-size: 15px;
  line-height: 24px;
  color: #cdd0d9;
}

.main-header .header-upper .inner-container .info-box a:hover{
  color: #fbef55;
}

.main-header .header-upper .inner-container .logo-box{
  position: relative;
  display: inline-block;
  top: -8px;
}

/** language **/

.language {
  position: relative;
  display: inline-block;
  top: -1px;
}

.language > a .icon{
  display: none;
}

.language .dropdown-toggle {
  position: relative;
  height: auto !important;
  font-size: 14px;
  text-transform: uppercase;
  padding: 3px 15px;
  width: 75px;
  border: 1px solid #e9e9e9;
  border-radius: 10px;
  display: inline-block;
  font-weight: 400;
  cursor: pointer;
}

.language .dropdown-toggle:before{
  position: absolute;
  content: "\f0dd";
  font-size: 14px;
  color: #b3afaf;
  font-family: 'Font Awesome 5 Free';
  font-weight: 700;
  top: 1px;
  right: 9px;
}

.language .dropdown-toggle:after{
  display: none;
}

.language .dropdown-menu {
  top: 100% !important;
  left: 0px !important;
  transform: none !important;
  width: 100px;
  min-width: 100px;
  border-radius: 10px;
  border: none;
  background-color: #192d66;
  padding: 0px;
}

.language .dropdown-menu > li {
  padding-right: 0px !important;
  margin: 0px !important;
  padding: 0;
  float: none;
  display: block !important;
  border-bottom: 1px solid rgba(255,255,255,0.5);
}

.language .dropdown-menu > li:last-child{
  border-bottom: none;
}

.language .dropdown-menu > li > a {
  padding: 6px 20px !important;
  line-height: 24px;
  font-size: 15px;
  width: auto;
  height: auto;
  display: block;
  color: #fff !important;
  text-align: left;
  border-radius: 0px;
  -webkit-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  transition: all 300ms ease;
}



/** main-menu **/


.main-menu{
  position: relative;
  float: left;
}

.main-menu .navbar-collapse{
  padding:0px;  
}

.main-menu .navigation > li{
  position:relative;
  float:left;
  margin: 0px 12px;
}

.main-menu .navigation > li:first-child{
  margin-left: 0px;
}

.main-menu .navigation > li > a{
  position:relative;
  display:block;
  font-size:16px;
  font-family: 'Ubuntu', sans-serif;
  color:#18152c;
  line-height:26px;
  font-weight:600;
  opacity:1;
  text-transform:uppercase;
  padding: 24px 0px;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

.main-menu .navigation > li.current > a,
.main-menu .navigation > li:hover > a{
  color: #192d66;
}

.main-menu .navigation{
  position: relative;
}

.main-menu .navigation > li > ul{
  position:absolute;
  left:0px;
  top: 100%;
  width:250px;
  z-index:100;
  display:none;
  visibility: hidden;
  opacity: 0;
  background:#ffffff;
  border-top: 3px solid #fd571c;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.10);
  transition: all 500ms ease;
}

.main-menu .navigation > li.dropdown:hover > ul{
  visibility:visible;
  opacity:1;
}

.main-menu .navigation > li > ul > li{
  position:relative;
  width:100%;
  padding: 7px 30px;
  border-bottom: 1px solid rgba(253, 87, 28, 0.3);
  transition: all 500ms ease;
}

.main-menu .navigation > li > ul > li:last-child{
  border-bottom:none; 
}

.main-menu .navigation > li > ul > li > a{
  position:relative;
  display:block;
  font-family: 'Ubuntu', sans-serif;
  padding:6px 0px;
  line-height:24px;
  font-size:15px;
  color:#18152c;
  font-weight: 500;
  text-align:left;
  text-transform:capitalize;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

.main-menu .navigation > li > ul > li:hover{
  background: #fd571c;
  border-bottom: 1px solid #fd571c;
}

.main-menu .navigation > li > ul > li:hover a{
  color: #fff;
}

.main-menu .navigation > li > ul > li:last-child:hover{
  border-bottom: none;
}

.main-menu .navbar-collapse > ul li.dropdown .dropdown-btn{
  position:absolute;
  right: 15px;
  top: 8px;
  font-size:18px;
  border: 1px solid #ffffff;
  color:#ffffff;
  width: 35px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  cursor:pointer;
  z-index:5;
  display: none;
}

.navbar-header {
  display: none;
}

/** sub-menu **/

.main-menu .navigation > li > ul > li > ul{
  position:absolute;
  left:100%;
  top:0%;
  width:230px;
  z-index:100;
  display:none;
  padding: 0px 0px;
  background-color: #ffffff;
  border-top: 3px solid #fd571c;
  -webkit-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
  -ms-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
  -o-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
  -moz-box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
  box-shadow:2px 2px 5px 1px rgba(0,0,0,0.05),-2px 0px 5px 1px rgba(0,0,0,0.05);
}

.main-menu .navigation li > ul > li.dropdown:hover > ul {
  visibility: visible;
  opacity: 1;
  top: 0;
}

.main-menu .navigation > li > ul > li > ul > li{
  position:relative;
  width:100%;
  margin:0px;
  border-bottom: 1px solid rgba(253, 87, 28, 0.3);
}

.main-menu .navigation > li > ul > li > ul > li:last-child{
  border-bottom:none; 
}

.main-menu .navigation > li > ul > li > ul > li > a{
  position:relative;
  display:block;
  padding:10px 25px !important;
  line-height:24px;
  font-weight:500;
  font-family: 'Ubuntu', sans-serif;
  font-size:15px;
  text-transform:capitalize;
  color: #18152c !important;
  transition:all 500ms ease;
  -moz-transition:all 500ms ease;
  -webkit-transition:all 500ms ease;
  -ms-transition:all 500ms ease;
  -o-transition:all 500ms ease;
}

.main-menu .navigation > li > ul > li > ul > li:hover > a{
  background:#fd571c;
  color: #fff !important;
}

.main-menu .navigation > li > ul > li.dropdown > a:after {
  position: absolute;
  content: "\f105";
  font-size: 16px;
  color: #18152c;
  top: 6px;
  right: -12px;
  font-family: 'Font Awesome 5 Free';
  font-weight: 600;
  cursor: pointer;
  transition: all 500ms ease;
}

.main-menu .navigation > li > ul > li.dropdown:hover > a:after{
  color: #fff;
}

/** header-bottom **/

.main-header .header-bottom{
  position: relative;
  display: block;
  background: transparent;
}

.main-header .header-bottom .outer-container{
  position: relative;
  width: 100%;
}

.main-header .header-bottom .outer-container .nav-outer{
  position: absolute;
  left: 0px;
  top: -36px;
  width: 100%;
  background: #fff;
}

.main-header .header-bottom .outer-container .nav-outer .menu-area .button-box{
  position: relative;
  float: left;
  margin-right: 35px;
}

.main-header .header-bottom .outer-container .nav-outer .menu-area .button-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  line-height: 26px;
  background: #fbef55;
  color: #192d66;
  text-align: center;
  padding: 24px 29px;
}

.main-header .header-bottom .outer-container .nav-outer .menu-area .button-box a:hover{
  background: #f3e426;
}

.main-header .header-bottom .outer-container .nav-outer .menu-area .button-box i{
  position: relative;
  font-size: 16px;
  font-weight: 700;
  margin-right: 10px;
  transition: all 500ms ease;
}

.main-header .header-bottom .outer-container .nav-outer .menu-area .button-box a:hover i{
  transform: rotate(360deg);
}

.main-header .header-bottom .info-box{
  position: relative;
  padding: 15px 15px 17px 15px;
}

.main-header .header-bottom .info-box .social-links,
.main-header .header-bottom .info-box .shop-cart,
.main-header .header-bottom .info-box .search-box{
  position: relative;
  float: left;
}

.main-header .header-bottom .info-box .social-links{
  margin-top: 12px;
}

.main-header .header-bottom .info-box .social-links li{
  position: relative;
  display: inline-block;
  margin: 0px 7px;
}

.main-header .header-bottom .info-box .social-links li a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #838383;
}

.main-header .header-bottom .info-box .social-links li a:hover{
  color: #192d66;
}

.main-header .header-bottom .info-box .shop-cart{
  margin: 0px 8px 0px 20px;
  padding-right: 20px;
}

.main-header .header-bottom .info-box .shop-cart a{
  position: relative;
  display: inline-block;
  font-size: 25px;
  font-weight: 500;
  color: #0f0e05;
  background: #fbef55;
  padding: 7.5px 12px;
  text-align: center;
  border-radius: 10px;
}

.main-header .header-bottom .info-box .shop-cart a:hover{
  background: #192d66;
  color: #fff;
}

.main-header .header-bottom .info-box .shop-cart:before{
  position: absolute;
  content: '';
  background: #e1e2e3;
  height: 100%;
  width: 1px;
  top: 0px;
  right: 0px;
}

.main-header .header-bottom .info-box .shop-cart span{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #192d66;
  width: 20px;
  height: 20px;
  font-weight: 400;
  line-height: 20px;
  text-align: center;
  background: #fff;
  border-radius: 50%;
  margin-left: 5px;
  top: -3px;
}

.main-header .header-bottom .info-box .search-box .header-flyout-searchbar i{
  position: relative;
  display: inline-block;
  font-size: 15px;
  font-weight: 700;
  color: #101112;
  padding: 10px;
  cursor: pointer;
  transition: all 500ms ease;
}

.main-header .header-bottom .info-box .search-box{
  margin-top: 6px;
}

.main-header .header-bottom .info-box .search-box .header-flyout-searchbar i:hover{
  color: #fd571c;
}


/** search-box **/

.wraper_flyout_search {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99999;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
}

.wraper_flyout_search > .table {
  display: table;
  table-layout: fixed;
  width: 100%;
  height: 100%;
  margin: 0;
}

.wraper_flyout_search > .table > .table-cell {
  position: relative;
  display: table-cell;
  width: 100%;
  height: 100%;
  vertical-align: middle;
  text-align: center;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-layer {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  transform: translateX(100%);
  -webkit-transform: translateX(100%);
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-layer:nth-child(1) {
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-layer:nth-child(2) {
  left: 0px;
  background-color: rgba(0, 0, 0, 0.4);
  transition: all 0.3s ease-in-out 0.3s;
  -webkit-transition: all 0.3s ease-in-out 0.3s;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-layer:nth-child(3) {
  left: 0px;
  background-color: rgba(0, 0, 0, 0.9);
  transition: all 0.9s ease-in-out 0.6s;
  -webkit-transition: all 0.9s ease-in-out 0.6s;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-close {
  position: absolute;
  top: 40px;
  right: 40px;
  width: 50px;
  z-index: 2;
  text-align: center;
  cursor: pointer;
  padding: 10px;
  transition: all 500ms ease;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-close > .flyout-search-close-line {
  width: 100%;
  height: 3px;
  float: left;
  margin-bottom: 5px;
  background-color: #fff;
  transition: all 500ms ease;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-close:hover > .flyout-search-close-line{
  background: #fd571d;
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-close > .flyout-search-close-line:nth-child(1) {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.wraper_flyout_search > .table > .table-cell > .flyout-search-close > .flyout-search-close-line:nth-child(2) {
  margin-top: -7px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.wraper_flyout_search > .table > .table-cell .flyout_search {
  position: relative;
  z-index: 1;
  float: right;
  width: 100%;
  max-width: 500px;
  padding: 100px 40px 100px 40px;
  text-align: right;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-title {
  margin-bottom: 30px;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-title > *:last-child {
  margin-bottom: 0 !important;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-title h4 {
  margin-bottom: 20px;
  text-transform: uppercase;
  font-weight: 300;
  font-size: 35px;
  color: #fff;
  line-height: 45px;
  letter-spacing: 50px;
  opacity: 0;
  transition: all 1s ease-in-out 0s;
  -webkit-transition: all 1s ease-in-out 0s;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-bar .form-row {
  position: relative;
  padding: 0;
  margin: 0;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-bar .form-row input[type=search] {
  width: 100%;
  height: 60px;
  padding: 0px 40px 0px 0px;
  background-color: initial;
  border: none;
  border-bottom: 3px #dedede solid;
  box-shadow: initial;
  font-size: 20px;
  color: #fff;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-bar .form-row button[type=submit] {
  position: absolute;
  top: 17px;
  right: 0;
  z-index: 1;
  width: 40px;
  height: auto;
  background-color: initial;
  border: none;
  cursor: pointer;
}

.wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-bar .form-row button[type=submit] i {
  font-size: 20px;
  color: #fff;
  line-height: 20px;
}

body.flyout-searchbar-active .wraper_flyout_search {
  opacity: 1;
  visibility: visible;
}

body.flyout-searchbar-active .wraper_flyout_search > .table > .table-cell > .flyout-search-layer {
  transform: translateX(0);
  -webkit-transform: translateX(0);
}

body.flyout-searchbar-active .wraper_flyout_search > .table > .table-cell .flyout_search > .flyout-search-title h4 {
  letter-spacing: 0;
  opacity: 1;
} 

#hamburger-menu {
  width: 100%;
}


/** stricky-header **/

.sticky-header .main-menu .navigation > li{
  margin: 0px;
}

.sticky-header .main-menu .navigation > li > a{
  padding: 15px 30px !important;
}

.sticky-header .main-menu .navigation > li > a{
  color: #fff;
}

.sticky-header .main-menu .navigation > li.current > a,
.sticky-header .main-menu .navigation > li:hover > a{
  background: #fbef55;
  color: #192d66 !important;
}

.sticky-header .logo-box{
  position: relative;
  float: left;
  padding: 10px 0px;
}

.sticky-header .menu-area{
  position: relative;
  float: right;
}

.sticky-header .main-menu .navigation > li > a:before{
  display: none;
}

/** main-slider **/

.main-slider{
  position:relative;
}

.main-slider .slide{
  position:relative;
  padding:230px 0px 220px 0px;
  background-size:cover;
  background-repeat:no-repeat;
  background-position:center center;
}

.main-slider .slide:before{
  position: absolute;
  content: '';
  background: rgba(7, 14, 32, 0.7);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.main-slider .content-box{
  position: relative;
  width: 100%;
}

.main-slider .content-box h5{
  position:relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #fbef55;
  font-weight: 700;
  letter-spacing: 5px;
  margin-bottom: 11px;
  text-transform: uppercase;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
}

.main-slider .active h5{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1000ms;
}

.main-slider .content-box h1{
  position:relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #ffffff;
  font-weight: 700;
  margin-bottom: 23px;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.main-slider .active h1{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1500ms;
}

.main-slider .content-box .text{
  position:relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #ffffff;
  font-weight: 400;
  margin-bottom: 16px;
  opacity:0;
  -webkit-transition: all 2000ms ease;
  -moz-transition: all 2000ms ease;
  -ms-transition: all 2000ms ease;
  -o-transition: all 2000ms ease;
  transition: all 2000ms ease;
  -webkit-transform: translateX(20px);
  -moz-transform: translateX(20px);
  -ms-transform: translateX(20px);
  -o-transform: translateX(20px);
  transform: translateX(20px);
}

.main-slider .active .text{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 2000ms;
}

.main-slider .content-box .button-box{
  position:relative;
  display: block;
  opacity:0;
  -webkit-transition: all 2500ms ease;
  -moz-transition: all 2500ms ease;
  -ms-transition: all 2500ms ease;
  -o-transition: all 2500ms ease;
  transition: all 2500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.main-slider .active .button-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 2500ms;
}

.main-slider .content-box .button-box .link-button,
.main-slider .content-box .button-box .video-button{
  position: relative;
  display: inline-block;
}

.main-slider .content-box .button-box .link-button{
  margin-right: 27px;
}

.main-slider .content-box .button-box .link-button a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #192d66;
  background: #fbef55;
  text-transform: uppercase;
  text-align: center;
  padding: 17px 40px;
}

.main-slider .content-box .button-box .video-button a{
  position: relative;
  display: inline-block;
  font-size: 14px;
  color: #fbef55;
  font-weight: 700;
  width: 82px;
  height: 82px;
  line-height: 78px;
  text-align: center;
  border: 3px solid #fff;
  border-radius: 50%;
}

.main-slider .content-box .button-box .video-button a:hover,
.main-slider .content-box .button-box .link-button a:hover{
  background: #fff;
}

.main-slider .image-box{
  position: relative;
  display: block;
  margin-top: 8px;
  margin-left: -20px;
}

.main-slider .image-box img{
  position: relative;
  display: inline-block;
  width: auto;
  animation-name: rotateme;
  animation-duration: 30s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 30s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 30s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 30s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 30s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

/* slide nav */


.main-slider .owl-dots{
  position: absolute;
  text-align: center;
  left: 50%;
  bottom: 52px;
  display: none;
}

.main-slider .owl-dots .owl-dot span{
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: none;
  background: rgba(255, 255, 255, 0.50);
  cursor: pointer;
  margin: 0px 3px;
  transition: all 500ms ease;
}

.main-slider .owl-dots .owl-dot.active span,
.main-slider .owl-dots .owl-dot:hover span{
  background: #ffffff;
  border: none;
}

.main-slider .owl-nav{
  position:absolute;
  left:0px;
  top:50%;
  z-index:1;
  width:100%;
  transform: translateY(-50%);
}

.main-slider .owl-theme .owl-controls .owl-nav [class*="owl-"]{
  position: absolute;
  color: rgba(255, 255, 255, 0.10);
}

.main-slider .owl-nav .owl-prev{
  position:absolute;
  left:30px;
  cursor: pointer;
  display: inline-block;
  color: #fff;
  font-size: 32px;
  background: #4c505c;
  width: 60px;
  height: 60px;
  line-height: 60px;
  margin: 0px;
  border-radius: 50%;
  text-align: center;
  cursor: pointer;
  transition: all 500ms ease;
}

.main-slider .owl-nav .owl-next{
  position:absolute;
  right:30px;
  cursor: pointer;
  display: inline-block;
  color: #fff;
  font-size: 32px;
  background: #4c505c;
  width: 60px;
  height: 60px;
  line-height: 60px;
  margin: 0px;
  cursor: pointer;
  border-radius: 50%;
  text-align: center;
  transition: all 500ms ease;
}

.main-slider .owl-nav .owl-prev:hover,
.main-slider .owl-nav .owl-next:hover{
  background-color:#fbef55;
  color: #192d66;
}


/** weare-section **/

.weare-section{
  position: relative;
  display: block;
  padding-bottom: 47px;
}

.weare-section h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  font-weight: 700;
  color: #192d66;
  margin-bottom: 6px;
}

.weare-section .content-box .title-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #454547;
}

.weare-section .content-box .title-box{
  position: relative;
  display: block;
  margin-bottom: 32px;
}

.weare-section .content-box .inner-box .single-item{
  position: relative;
  float: left;
  width: 40%;
  text-align: center;
}

.weare-section .content-box .inner-box .button-box{
  position: relative;
  float: left;
  width: 20%;
  margin-top: 52px;
}

.weare-section .content-box .inner-box .single-item .item{
  position: relative;
  max-width: 195px;
  width: 100%;
}

.weare-section .content-box .inner-box .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  color: #000;
  font-weight: 500;
  margin-bottom: 3px;
}

.weare-section .content-box .inner-box .single-item .icon-box:before{
  position: absolute;
  content: '';
  background: #fbef55;
  width: 30px;
  height: 30px;
  left: -10px;
  bottom: -5px;
  border-radius: 50%;
  z-index: -1;
}

.weare-section .content-box .inner-box .single-item .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 30px;
  color: #424f7a;
  padding-top: 3px;
  border-top: 1px solid #192d66;
}

.weare-section .content-box .inner-box .single-item h2{
  margin-bottom: 16px;
}

.weare-section .content-box .inner-box .button-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  background: #fbef55;
  color: #192d66;
  text-transform: uppercase;
  text-align: center;
  padding: 14.5px 20px;
}

.weare-section .content-box .inner-box .button-box a:hover{
  transform: translateY(-5px);
}

.weare-section .inner-content{
  position: relative;
  display: block;
  background: #fff;
  border: 40px solid #fbef55;
  text-align: center;
  margin-left: 40px;
  margin-top: -187px;
  z-index: 1;
}

.weare-section .inner-content .inner-box{
  position: relative;
  display: block;
  background: rgba(255, 255, 255, 0.95);
  padding: 30px 15px 55px 15px;
}

.weare-section .inner-content .inner-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/tools-1.png);
  width: 250px;
  height: 200px;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  background-repeat: no-repeat;
  z-index: -1;
}

.weare-section .inner-content .inner-box h2{
  line-height: 47px;
  margin-bottom: 16px;
}

.weare-section .inner-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #192d66;
  margin-bottom: 33px;
}

.weare-section .inner-content .inner-box .icon-box{
  position: relative;
  display: block;
  margin-bottom: 26px;
}

.weare-section .inner-content .inner-box .icon-box img{
  position: relative;
  display: inline-block;
  width: auto;
  animation-name: rotateme;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 60s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 60s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 60s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 60s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.weare-section .inner-content .inner-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #192d66;
  text-transform: uppercase;
  padding-bottom: 6px;
}

.weare-section .inner-content .inner-box .link-btn a:hover{
  color: #fbef55;
}

.weare-section .inner-content .inner-box .link-btn a:before{
  position: absolute;
  content: '';
  background: #192d66;
  width: 195px;
  height: 1px;
  left: -47px;
  bottom: 0px;
}

.weare-section .content-box{
  position: relative;
  display: block;
  padding: 110px 0px 0px;
}


/** ourmission-section **/

.ourmission-section{
  position: relative;
  display: block;
  padding: 60px 0px 0px;
}

.ourmission-section:before{
  position: absolute;
  content: '';
  background: url(../images/icons/bg-shap-1.png);
  width: 100%;
  height: 740px;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
}

.ourmission-section:after{
  position: absolute;
  content: '';
  background: url(../images/icons/factory-icon-1.png);
  width: 493px;
  height: 437px;
  right: 30px;
  bottom: 30px;
  background-repeat: no-repeat;
  animation-name: slideInRight;
  animation-duration: 2s;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  -webkit-animation-name: slideInRight;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: slideInRight;
  -moz-animation-duration: 2s;
  -moz-animation-iteration-count: 1;
  -moz-animation-timing-function: linear;
  -ms-animation-name: slideInRight;
  -ms-animation-duration: 2s;
  -ms-animation-iteration-count: 1;
  -ms-animation-timing-function: linear;
}

.ourmission-section .image{
  position: relative;
  display: block;
  margin-top: 28px;
}

.ourmission-section .image img{
  position: relative;
  max-width: none;
  float: right;
}

.ourmission-section .content-box .title-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  font-weight: 700;
  color: #192d66;
  margin-bottom: 6px;
}

.ourmission-section .content-box .title-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #666666;
}

.counter-block-one{
  position: relative;
  display: inline-block;
  width: 215px;
  height: 215px;
  background: #fbef55;
  text-align: center;
  border-radius: 50%;
  padding: 75px 30px 50px 30px;
  box-shadow: 0 15px 20px rgba(0, 0, 0, 0.05);
}

.counter-block-one .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 24px;
  color: #192d66;
}

.counter-block-one .count-outer span{
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  font-weight: 700;
  color: #192d66;
}

.counter-block-one .count-outer span.symble{
  font-size: 22px;
}

.ourmission-section .content-box .inner-box{
  position: relative;
  display: block;
  min-height: 290px;
  z-index: 1;
}

.ourmission-section .content-box .inner-box .counter-block-one:nth-child(2){
  position: absolute;
  left: 172px;
  top: 77px;
  background: #e3eaff;
  z-index: 1;
}

.ourmission-section .content-box .inner-box .counter-block-one:nth-child(2) span{
  color: #2d54c9;
}

.ourmission-section .content-box .inner-box .counter-block-one:last-child{
  background: #ffeaef;
  position: absolute;
  top: 0px;
  right: 0px;
}

.ourmission-section .content-box .inner-box .counter-block-one:last-child span{
  color: #fb4c76;
}

.ourmission-section .content-box .title-box{
  position: relative;
  display: block;
  margin-bottom: 28px;
}


/** service-section **/

.service-section{
  position: relative;
  display: block;
  padding: 93px 0px 100px 0px;
}

.service-section .sec-title{
  margin-bottom: 37px;
}

.service-block-one .inner-box{
  position: relative;
  display: block;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
}

.service-block-one .inner-box .image-box{
  position: absolute;
  left: 0px;
  top: 0px;
  background: #192d66;
  overflow: hidden;
}

.service-block-one .inner-box .image-box a{
  position: relative;
  display: inline-block;
  z-index: 1;
}

.service-block-one .inner-box .image-box img{
  width: 100%;
  opacity: 1;
  transition: all 500ms ease;
}

.service-block-one .inner-box:hover .image-box img{
  opacity: 0.5;
  transform: scale(1.05);
}

.service-block-one .inner-box .content-box{
  position: relative;
  padding: 28px 30px 30px 240px;
  min-height: 300px;
  margin-bottom: 30px;
}

.service-block-one .inner-box .content-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-1.png);
  width: 255px;
  height: 255px;
  top: 25px;
  right: 35px;
  background-repeat: no-repeat;
}

.service-block-one .inner-box .content-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 55px;
  line-height: 55px;
  color: #000;
  font-weight: 500;
  margin-bottom: 17px;
}

.service-block-one .inner-box .content-box .icon-box:before {
  position: absolute;
  content: '';
  background: #fbef55;
  width: 38px;
  height: 38px;
  left: -10px;
  bottom: -5px;
  border-radius: 50%;
  z-index: -1;
}

.service-block-one .inner-box .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #272727;
  margin-bottom: 11px;
}

.service-block-one .inner-box .content-box h3 a{
  color: #272727;
}

.service-block-one .inner-box .content-box h3 a:hover{
  color: #fbef55;
}

.service-block-one .inner-box .content-box .text{
  position: relative;
  display: block;
  color: #585858;
  margin-bottom: 11px;
}

.service-block-one .inner-box .content-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #000;
}

.service-block-one .inner-box .content-box .link-btn i{
  position: relative;
  font-size: 12px;
  margin-left: 10px;
  font-weight: 700;
  transition: all 500ms ease;
}

.service-block-one .inner-box .content-box .link-btn a:hover i{
  transform: rotate(360deg);
}

.service-section .service-block:nth-child(2) .service-block-one .inner-box .content-box,
.service-section .service-block:last-child .service-block-one .inner-box .content-box{
  position: relative;
  padding: 28px 240px 30px 30px;
  min-height: 300px;
  margin-bottom: 30px;
}

.service-section .service-block:nth-child(2) .service-block-one .inner-box .image-box,
.service-section .service-block:last-child .service-block-one .inner-box .image-box{
  right: 0px;
  left: inherit;
}

.service-section .service-block:nth-child(2) .service-block-one .inner-box .content-box:before,
.service-section .service-block:last-child .service-block-one .inner-box .content-box:before{
  left: 80px;
  right: inherit;
}


/** about-section **/

.about-section{
  position: relative;
  display: block;
  padding-top: 93px;
}

.about-section .inner-content{
  position: relative;
  display: block;
  margin-bottom: -110px;
  z-index: 1;
}

.about-section .content-box .top-content .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fbef55;
  margin-bottom: 6px;
}

.about-section .content-box .top-content h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 16px;
}

.about-section .content-box .top-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 28px;
  color: #fbef55;
  font-weight: 700;
  margin-bottom: 27px;
}

.about-section .content-box .top-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #cdd0d9;
}

.about-section .content-box .top-content{
  position: relative;
  display: block;
  margin-bottom: 57px;
}

.about-section .content-box .inner-box .single-item .icon-box{
  position: relative;
  display: block;
  font-size: 45px;
  line-height: 45px;
  color: #fbef55;
  margin-bottom: 15px;
}

.about-section .content-box .inner-box .single-item h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
  text-transform: uppercase;
}

.about-section .content-box .inner-box .single-item h5 a{
  color: #fff;
}

.about-section .content-box .inner-box .single-item h5 a:hover{
  color: #fbef55;
}

.about-section .content-box .inner-box .single-item .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #dfe0e6;
}

.about-section .content-box .inner-box{
  position: relative;
  display: block;
  margin-bottom: 70px;
}

.about-section .content-column .lower-content{
  position: relative;
  display: block;
  margin-right: -70px;
  background: #fbef55;
  text-align: center;
  padding: 29px 40px 66px 40px;
}

.about-section .content-column .lower-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 35px;
  font-weight: 700;
  color: #192d66;
  margin-bottom: 20px;
}

.about-section .content-column .lower-content a{
  position: absolute;
  left: 50%;
  bottom: -65px;
  transform: translateX(-50%);
  font-size: 50px;
  color: #fbef55;
  background: #192d66;
  width: 130px;
  height: 130px;
  line-height: 130px;
  text-align: center;
  border-radius: 50%;
  z-index: 1;
}

.about-section .content-column .lower-content a:hover{
  background: #fff;
  color: #192d66;
  box-shadow: 0 10px 19px rgba(0, 0, 0, 0.5);
}

.about-section .image-box{
  position: relative;
  display: block;
  margin-left: 40px;
  margin-top: 7px;
}

.about-section .image-box img{
  width: 100%;
}


/** factory-section **/

.factory-section{
  position: relative;
  display: block;
  padding: 200px 0px 70px 0px;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.factory-section:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.5);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.factory-section .content-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #363f5b;
  margin-bottom: 27px;
}

/* progress-box */

.single-progress-box{
  position: relative;
  margin-bottom: 30px;
}

.single-progress-box:last-child{
  margin-bottom: 0px;
}

.single-progress-box .progress {
  position: relative;
  background-color: #f6f9fb;
  height: 8px;
  border-radius: 5px;
  box-shadow: 0 7px 7px rgba(0, 0, 0, 0.3);
  overflow: visible;
}

.single-progress-box .progress-bar {
  position: absolute;
  top: 0px;
  left: 0px;
  background: #fbef55;
  height: 8px;
  box-shadow: none;
  border-radius: 5px;
  -webkit-transition: all 3s ease 0s;
  -moz-transition: all 3s ease 0s;
  -ms-transition: all 3s ease 0s;
  -o-transition: all 3s ease 0s;
  transition: all 3s ease 0s;
  width: 0;
  background-size: cover;
  background-repeat: no-repeat;
}

.single-progress-box .progress-bar .value-holder {
  position: absolute;
  bottom: 18px;
  right: 0px;
  color: #192d66;
  text-align: center;
  font-weight: 700;
  font-size: 16px;
  line-height: 26px;
}

.single-progress-box .progress-bar .value-holder:before {
  position: absolute;
  content: '';
  background: #fbef55;
  width: 20px;
  height: 20px;
  top: 30px;
  right: 0px;
  border: 3px solid #fff;
  border-radius: 50%;
}

.single-progress-box h6{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #192d66;
  margin-bottom: 10px;
}


/** project-section **/

.project-section{
  position: relative;
  display: block;
  background: #fff;
  padding: 94px 0px 130px 0px;
}

.project-section:before{
  position: absolute;
  content: '';
  background: url(../images/background/project-shap.jpg);
  width: 100%;
  height: 1085px;
  left: 0px;
  top: 230px;
  background-repeat: no-repeat;
  background-position: center;
}

.project-section .sec-title{
  margin-bottom: 148px;
}

.project-block-one .inner-box .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #3f4862;
  margin-bottom: 20px;
}

.project-block-one .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.project-block-one:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.05);
}

.project-block-one .inner-box .image-box a{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font-size: 40px;
  line-height: 40px;
  color: #fff;
  opacity: 0;
}

.project-block-one:hover .inner-box .image-box a{
  opacity: 1;
}

.project-block-one .inner-box{
  position: relative;
  overflow: hidden;
}

.project-block-one .inner-box .lower-content{
  position: relative;
  display: block;
  background: #fff;
  padding: 30px 40px 25px 40px;
}

.project-block-one .inner-box .lower-content:after{
  position: absolute;
  content: '';
  background: #fff;
  width: 12px;
  height: 12px;
  left: 50%;
  top: -3px;
  margin-left: -6px;
  transform: rotate(-45deg);
  transition: all 1500ms ease;
  z-index: -1;
}

.project-block-one:hover .inner-box .lower-content:after{
  background: #fbef55;
}

.project-block-one .inner-box .lower-content:before {
  position: absolute;
  content: '';
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  opacity: 0;
  -webkit-transform-origin: top;
  -ms-transform-origin: top;
  transform-origin: top;
  -webkit-transform: scale(.9) translateY(20px);
  -ms-transform: scale(.9) translateY(20px);
  transform: scale(.9) translateY(20px);
  background: #fbef55;
  transition: all 500ms ease;
}

.project-block-one:hover .inner-box .lower-content:before {
  opacity: 1;
  -webkit-transform: scale(1) translateY(0px);
  -ms-transform: scale(1) translateY(0px);
  transform: scale(1) translateY(0px);
  -webkit-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
}

.project-block-one .inner-box .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 12px;
}

.project-block-one .inner-box .lower-content h3 a{
  color: #192d66;
}

.project-block-one .inner-box .lower-content .count-number{
  position: absolute;
  top: 16px;
  right: 12px;
  font-size: 60px;
  color: #e1e3e8;
  line-height: 50px;
}

.project-block-one .inner-box .lower-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 25px;
  color: #616b8c;
  transition: all 500ms ease;
}


/** testimonial-section **/

.testimonial-section{
  position: relative;
  display: block;
}

.testimonial-section .inner-content{
  position: relative;
  padding-bottom: 40px;
  margin-bottom: -230px;
  z-index: 1;
}

.testimonial-section .inner-content:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-2.png);
  width: 100%;
  height: 562px;
  left: 0px;
  top: 110px;
  background-repeat: no-repeat;
  background-position: center;
}

.testimonial-section .sec-title h1{
  position: relative;
  display: inline-block;
  padding-top: 62px;
  margin-bottom: 103px;
}

.testimonial-section .sec-title h1:before{
  position: absolute;
  content: "\f10b";
  font-family: 'Flaticon';
  font-size: 70px;
  line-height: 70px;
  color: #fbef55;
  font-weight: 500;
  left: 50%;
  top: 0px;
  transform: translateX(-50%);
}

.testimonial-section .owl-dots {
  position: absolute;
  left: 50%;
  top: 0px;
  transform: translateX(-50%);
  height: 50px;
  width: 100px;
  z-index: 9999;
  counter-reset: slides-num;
}

.testimonial-section .owl-dots::after {
  position: absolute;
  left: 70%;
  content: counter(slides-num);
  display: inline-block;
  line-height: 30px;
  font-size: 20px;
  font-weight: 400;
  color: #192d66;
  top: 65%;
  transform: translate(-50%, -50%);
}

.testimonial-section .owl-dot {
  display: inline-block;
  counter-increment: slides-num;
}

.testimonial-section .owl-dot span,
.testimonial-section .owl-nav{
  display: none !important;
}

.testimonial-section .owl-dot.active::before {
  position: absolute;
  content: counter(slides-num)" /";
  line-height: 30px;
  font-size: 40px;
  color: #192d66;
  left: 40%;
  top: 50%;
  text-align: center;
  transform: translate(-50%, -50%);
}

.testimonial-section .testimonial-content{
  position: relative;
  display: block;
  max-width: 800px;
  padding: 0px 15px;
  width: 100%;
  margin: 0 auto;
}

.testimonial-section .testimonial-content .content-box{
  position: relative;
  display: block;
  margin-top: 72px;
}

.testimonial-section .testimonial-content .content-box .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #192d66;
  margin-bottom: 74px;
}

.testimonial-section .testimonial-content .content-box .text:before{
  position: absolute;
  content: '';
  background: #192d66;
  width: 1px;
  height: 50px;
  left: 50%;
  bottom: -60px;
  transform: translateX(-50%);
}

.testimonial-section .testimonial-content .content-box .author-info h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 22px;
  color: #192d66;
}

.testimonial-section .testimonial-content .content-box .author-info .designation{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 26px;
  color: #5f688a;
}

.testimonial-section .testimonial-content{
  position: relative;
  display: block;
  margin-bottom: 40px;
}

.testimonial-section .clients-outer .logo{
  position: relative;
  width: 25%;
  float: left;
  text-align: center;
}

.testimonial-section .clients-outer .logo img{
  position: relative;
  width: auto;
  transition: all 500ms ease;
}

.testimonial-section .clients-outer .logo:hover img{
  opacity: 0.5;
}


/** team-section **/

.team-section{
  position: relative;
  display: block;
  padding-top: 280px;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.team-section:before{
  position: absolute;
  content: '';
  background: rgba(25, 45, 102, 0.9);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.team-section .sec-title h1{
  color: #fff;
}

.team-section .sec-title p{
  color: #c4c7d3;
}

.team-section .sec-title{
  position: relative;
  display: block;
  margin-bottom: 36px;
}

.team-block-one .inner-box{
  position: relative;
  display: block;
  background: #fff;
  text-align: center;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}

.team-block-one .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.team-block-one .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.team-block-one:hover .inner-box .image-box img{
  opacity: 0.5;
  transform: scale(1.05);
}

.team-block-one .inner-box .lower-content{
  position: relative;
  display: block;
  padding: 28px 15px 24px 15px;
  overflow: hidden;
}

.team-block-one .inner-box .lower-content:before {
  position: absolute;
  content: '';
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  opacity: 0;
  -webkit-transform-origin: top;
  -ms-transform-origin: top;
  transform-origin: top;
  -webkit-transform: scale(.9) translateY(20px);
  -ms-transform: scale(.9) translateY(20px);
  transform: scale(.9) translateY(20px);
  background: #fbef55;
  transition: all 500ms ease;
}

.team-block-one:hover .inner-box .lower-content:before {
  opacity: 1;
  -webkit-transform: scale(1) translateY(0px);
  -ms-transform: scale(1) translateY(0px);
  transform: scale(1) translateY(0px);
  -webkit-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
}

.team-block-one .inner-box .lower-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  color: #192d66;
}

.team-block-one .inner-box .lower-content h4 a{
  color: #192d66;
}

.team-block-one .inner-box .lower-content .designation{
  position: relative;
  display: block;
  font-size: 16px;
  color: #616b8c;
}

.team-section .owl-dots{
  display: none;
}

.team-section .owl-nav{
  position: absolute;
  top: -75px;
  right: -5px;
}

.team-section .owl-nav .owl-prev,
.team-section .owl-nav .owl-next{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fbef55;
  width: 45px;
  height: 55px;
  line-height: 55px;
  margin: 0px 5px;
  text-align: center;
  border: 2px solid #fbef55;
  transition: all 500ms ease;
  cursor: pointer;
}

.team-section .owl-nav .owl-prev:hover,
.team-section .owl-nav .owl-next:hover{
  width: 90px;
  background: #fbef55;
  color: #192d66;
}


/** news-section **/

.news-section{
  position: relative;
  display: block;
  background: #fff;
  margin-top: -185px;
  padding: 235px 0px 90px 0px;
}

.news-section .top-box{
  position: relative;
  display: block;
  margin-bottom: 40px;
}

.news-section .top-box .sec-title{
  margin-bottom: 26px;
}

.news-section .top-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #192d66;
  border: 2px solid #f9f8f7;
  text-align: center;
  padding: 10px 38px;
}

.news-section .top-box .btn-box i{
  font-size: 13px;
  margin-left: 10px;
}

.news-section .top-box .btn-box a:hover{
  background: #fbef55;
  border-color: #fbef55;
  color: #ffffff;
}

.news-block-one .inner-box{
  position: relative;
  display: block;
  background: #ffffff;
}

.news-block-one .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.news-block-one .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.news-block-one:hover .inner-box .image-box img{
  opacity: 0.5;
  transform: scale(1.05);
}

.news-block-one .inner-box .lower-content{
  position: relative;
  display: block;
  padding: 25px 15px 25px 0px;
}

.news-block-one .inner-box .lower-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 7px;
}

.news-block-one .inner-box .lower-content h4 a{
  color: #192d66;
}

.news-block-one .inner-box .lower-content h4 a:hover{
  color: #fbef55;
}

.news-block-one .inner-box .lower-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #616b8c;
  line-height: 26px;
  margin-bottom: 17px;
}

.news-block-one .inner-box .lower-content .post-info li{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 23px;
  margin-bottom: 0px;
  color: #616b8c;
}

.news-section .post-inner .post{
  position: relative;
  display: block;
  padding: 0px 0px 0px 100px;
  margin-bottom: 30px;
  min-height: 100px;
}

.news-section .post-inner .post:last-child{
  margin-bottom: 0px;
}

.news-section .post-inner .post .post-thumb{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 80px;
  height: 100px;
  background: #192d66;
  overflow: hidden;
}

.news-section .post-inner .post .post-thumb img{
  width: 100%;
  transition: all 500ms ease;
}

.news-section .post-inner .post:hover .post-thumb img{
  opacity: 0.5;
}

.news-section .post-inner .post h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 22px;
  color: #192d66;
  margin-bottom: 9px;
}

.news-section .post-inner .post h5 a{
  color: #192d66;
}

.news-section .post-inner .post h5 a:hover{
  color: #fbef55;
}

.news-section .post-inner .post .text{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 14px;
  color: #616b8c;
  margin-bottom: 18px;
}

.news-section .post-inner .post .post-info{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 14px;
  color: #616b8c;
}

.news-section .signup-box{
  position: relative;
  display: block;
  text-align: center;
}

.news-section .signup-box .inner-box{
  position: relative;
  display: block;
  background: #f4f7ff;
  padding: 73px 15px 163px 15px;
  margin-bottom: -118px;
}

.news-section .signup-box .inner-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 22px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 23px;
  z-index: 1;
}

.news-section .signup-box .inner-box .icon-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/icon-1.png);
  width: 47px;
  height: 44px;
  left: -13px;
  top: -12px;
  background-repeat: no-repeat;
  z-index: -1;
}

.news-section .signup-box .inner-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 31px;
  font-weight: 700;
  color: #192d66;
  margin-bottom: 16px;
}

.news-section .signup-box .inner-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #192d66;
}

.news-section .signup-box .lower-box{
  position: relative;
  display: block;
  background: #192d66;
  padding: 38px 15px 45px 15px;
  max-width: 223px;
  margin: 0 auto;
}

.news-section .signup-box .lower-box .signup-btn{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #192d66;
  background: #fbef55;
  text-align: center;
  padding: 12px 47px;
  margin-bottom: 20px;
}

.news-section .signup-box .lower-box .signup-btn:hover{
  background: #fff;
}

.news-section .signup-box .lower-box .link-btn{
  position: relative;
  display: block;
  font-size: 14px;
  color: #fff;
  text-transform: uppercase;
}

.news-section .signup-box .lower-box .link-btn i{
  margin-left: 6px;
}

.news-section .signup-box .lower-box .link-btn:hover{
  color: #fbef55;
}


/** main-footer **/

.main-footer{
  position: relative;
  display: block;
}

.main-footer:before{
  position: absolute;
  content: '';
  background: url(../images/icons/footer-icon-1.png);
  width: 341px;
  height: 268px;
  right: -25px;
  bottom: 0px;
  background-repeat: no-repeat;
}

.main-footer:after{
  position: absolute;
  content: '';
  background: url(../images/icons/footer-icon-2.png);
  width: 332px;
  height: 235px;
  left: 0px;
  bottom: 0px;
  background-repeat: no-repeat;
}

.main-footer .footer-top{
  position: relative;
  display: block;
  padding: 122px 0px 65px 0px;
  border-bottom: 1px solid #e5e5e5;
  z-index: 1;
}

.main-footer .footer-top .bg-column{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 60px;
  background: linear-gradient(90deg, #fff 0%, #fbef55 50%, #fff 100%);
}

.main-footer .footer-top .logo-widget{
  position: relative;
  margin-top: 7px;
}

.main-footer .footer-top .logo-widget .footer-logo{
  position: relative;
  display: inline-block;
  margin-bottom: 12px;
}

.main-footer .footer-top .logo-widget .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #616b8c;
}

.main-footer .widget-title{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 30px;
  font-weight: 400;
  color: #192d66;
  margin-bottom: 19px;
}

.main-footer .footer-top .links-widget .widget-content ul li{
  position: relative;
  display: block;
  margin-bottom: 4px;
}

.main-footer .footer-top .links-widget .widget-content ul li:last-child{
  margin-bottom: 0px;
}

.main-footer .footer-top .links-widget .widget-content ul li a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #616b8c;
}

.main-footer .footer-top .links-widget .widget-content ul li a:hover{
  color: #fd571d;
}

.main-footer .footer-top .company-widget{
  margin-left: 60px;
}

.main-footer .footer-bottom{
  position: relative;
  display: block;
  padding: 38px 0px;
  z-index: 1;
}

.main-footer .footer-bottom .copyright{
  position: relative;
  font-size: 15px;
  color: #616b8c;
}

.main-footer .footer-bottom .footer-social li{
  position: relative;
  display: inline-block;
  margin-right: 20px;
}

.main-footer .footer-bottom .footer-social li:last-child{
  margin-right: 0px;
}

.main-footer .footer-bottom .footer-social li a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #192d66;
}

.main-footer .footer-bottom .footer-social li a:hover{
  color: #fbef55;
}



/*** 

====================================================================
                        Home-Page-Two
====================================================================

***/


/** header-style-two **/

.main-header.style-two{
  position: relative;
}

.main-header.style-two .header-top{
  background: #192d66;
}

.main-header.style-two .header-top .header-info li,
.main-header.style-two .header-top .header-info li a,
.main-header.style-two .header-top .header-nav li a{
  color: #dfe0e6;
}

.main-header.style-two .header-top .language .dropdown-toggle{
  border-color: #263c79;
}

.main-header.style-two .header-top .header-info li a:hover,
.main-header.style-two .header-top .header-nav li a:hover{
  color: #fd571c;
}

.main-header.style-two .header-bottom .outer-container .nav-outer{
  position: relative;
  top: 0px;
}

.main-header.style-two .header-bottom .logo-box{
  position: relative;
  float: left;
  margin: 0px 30px 0px 0px;
  padding: 36px 0px 26px 0px;
}

.main-header.style-two .header-bottom .info-box .btn-box{
  position: relative;
  float: left;
}

.main-header.style-two .header-bottom .info-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fd571c;
  padding: 19.5px 30px;
  text-align: center;
}

.main-header.style-two .header-bottom .info-box .btn-box i{
  font-size: 12px;
  margin-right: 8px;
  transition: all 500ms ease;
}

.main-header.style-two .header-bottom .info-box {
  padding: 26px 0px 25px 0px;
}

.main-header.style-two .header-bottom .info-box .btn-box:hover i{
  transform: rotate(360deg);
}

.main-header.style-two .header-bottom .info-box .shop-cart a{
  background: transparent;
  color: #0f0f0f;
}

.main-header.style-two .header-bottom .info-box .shop-cart a:hover{
  color: #fd571c;
}

.main-header.style-two .header-bottom .info-box .shop-cart span{
  background: #fd571c;
  color: #fff;
}

.main-header.style-two .header-bottom .info-box .search-box {
  margin-top: 15px;
  margin-right: 10px;
}

.main-header.style-two .header-bottom .info-box .shop-cart{
  margin: 10px 6px 0px 10px;
  padding-right: 2px;
}

.main-header.style-two .main-menu .navigation > li > a{
  padding: 45px 0px;
}


/** slider-style-two **/

.slider-style-two{
  position: relative;
}

.slider-style-two .slide {
  position: relative;
  padding-top: 205px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.slider-style-two .content-box{
  position: relative;
  display: block;
  max-width: 920px;
  width: 100%;
  background: #fff;
  padding: 50px 30px 79px 100px;
}

.slider-style-two .content-box .video-button{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #fd571c;
  text-transform: uppercase;
  padding: 28px 0px 26px 90px;
  margin-bottom: 10px;
}

.slider-style-two .content-box .video-button a{
  position: absolute;
  left: 0px;
  top: 0px;
  font-size: 14px;
  color: #fd571c;
  width: 80px;
  height: 80px;
  line-height: 80px;
  border: 3px solid #eaefff;
  border-radius: 50%;
  text-align: center;
}

.slider-style-two .content-box .video-button a:hover{
  border-color: #fd571c;
  background: #fd571c;
  color: #fff;
}

.slider-style-two .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 89px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 17px;
}

.slider-style-two .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #192d66;
  margin-bottom: 29px;
}

.slider-style-two .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fd571c;
  padding: 17px 40px;
  text-transform: uppercase;
  text-align: center;
}

.slider-style-two .content-box .btn-box a:hover{
  transform: translateY(-5px);
}

.slider-style-two .content-box .btn-box{
  position: relative;
  display: block;
  margin-bottom: 14px;
}

.slider-style-two .content-box .text{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 26px;
  color: #616b8c;
}

.slider-style-two .owl-dots{
  display: none;
}

.slider-style-two .owl-nav{
  position: relative;
  right: 0px;
  bottom: 0px;
  max-width: 1170px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-two .owl-nav .owl-prev,
.slider-style-two .owl-nav .owl-next{
  position: absolute;
  bottom: 0px;
  width: 84px;
  height: 76px;
  color: #fd571c;
  font-size: 20px;
  line-height: 80px;
  background: #fff;
  text-align: center;
  cursor: pointer;
  transition: all 500ms ease;
}

.slider-style-two .owl-nav .owl-prev:hover,
.slider-style-two .owl-nav .owl-next:hover{
  color: #192d66;
}

.slider-style-two .owl-nav .owl-prev{
  right: 84px;
}

.slider-style-two .owl-nav .owl-prev:before{
  position: absolute;
  content: '';
  background: #e5e6e9;
  width: 1px;
  height: 50px;
  top: 15px;
  right: 0px;
}

.slider-style-two .owl-nav .owl-next{
  right: 0px;
}


/** weare-style-two **/

.weare-section.style-two{
  position: relative;
  padding: 84px 0px 0px;
}

.weare-section.style-two .content-box .inner-box .single-item .icon-box:before{
  background: #ffa98b;
}

.weare-section.style-two .content-box .inner-box .button-box a{
  background: #fd571c;
  color: #fff;
}

.weare-section.style-two .content-box .inner-box .button-box a:hover{
  transform: translateY(-5px);
}

.weare-section.style-two .experience-box{
  position: relative;
  display: block;
  width: 100%;
  margin-left: 40px;
  margin-top: 8px;
  padding: 373px 20px 20px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.weare-section.style-two .experience-box .experience-content{
  position: relative;
  max-width: 270px;
  width: 100%;
  background: #fff;
  padding: 50px 30px 54px 40px;
}

.weare-section.style-two .experience-box .experience-content h1{
  position: relative;
  display: block;
  font-size: 80px;
  color: #fd571c;
  font-weight: 700;
  line-height: 30px;
}

.weare-section.style-two .experience-box .experience-content h1 span{
  font-size: 24px;
  font-weight: 400;
  color: #192d66;
}

.weare-section.style-two .experience-box .experience-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #192d66;
}

.weare-section.style-two .content-box{
  padding: 0px;
}


/** ourmission-style-two **/

.ourmission-style-two{
  position: relative;
  display: block;
  max-width: 1920px;
  width: 100%;
  margin: 0 auto;
}

.ourmission-style-two .image-column{
  position: absolute;
  left: 0px;
  top: -264px;
  width: 56%;
  height: 700px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.ourmission-style-two .content-box{
  position: relative;
}

.ourmission-style-two .content-box .title-text{
  position: absolute;
  width: 830px;
  right: -50px;
  bottom: -68px;
  z-index: 1;
}

.ourmission-style-two .content-box .title-text h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 70px;
  font-weight: 700;
  color: #fff;
}

.ourmission-style-two .content-box .inner-content{
  position: relative;
  display: block;
  float: right;
  max-width: 515px;
  width: 100%;
  background: #fd571c;
  padding: 20px;
}

.ourmission-style-two .content-box .inner-content:before{
  position: absolute;
  content: '';
  background: url(../images/icons/tools-3.png);
  width: 100%;
  height: 170px;
  background-repeat: no-repeat;
  right: -12px;
  bottom: 10px;
}

.ourmission-style-two .content-box .inner-content .content{
  position: relative;
  border: 1px dashed #fc916b;
  padding: 12px 40px 38px 35px;
}

.ourmission-style-two .content-box .inner-content .content h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 14px;
}

.ourmission-style-two .content-box .inner-content .content .text{
  position: relative;
  display: block;
  color: #fff;
  margin-bottom: 29px;
}

.ourmission-style-two .content-box .inner-content .content .lower-content{
  padding-left: 16px;
}

.ourmission-style-two .content-box .inner-content .content .lower-content .text{
  padding: 0px 0px 0px 45px;
  margin-bottom: 20px;
}

.ourmission-style-two .content-box .inner-content .content .lower-content .text:before{
  position: absolute;
  content: '';
  background: #fff;
  width: 33px;
  height: 2px;
  left: 0px;
  top: 12px;
}

.ourmission-style-two .content-box .inner-content .content .lower-content .text:after{
  position: absolute;
  content: '';
  background: #fff;
  width: 9px;
  height: 9px;
  left: 0px;
  top: 9px;
  border-radius: 50%;
}

.ourmission-style-two .content-box .inner-content .content .lower-content .text:last-child{
  margin-bottom: 0px;
}

.ourmission-style-two .inner-box{
  position: relative;
  display: block;
  padding: 62px 50px 23px 40px;
}

.ourmission-style-two .inner-box .single-item .icon-box{
  position: relative;
  display: block;
  margin-bottom: 12px;
}

.ourmission-style-two .inner-box .single-item h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #192d66;
  margin-bottom: 8px;
}

.ourmission-style-two .inner-box .single-item h5 a{
  color: #192d66;
}

.ourmission-style-two .inner-box .single-item h5 a:hover{
  color: #fd571c;
}

.ourmission-style-two .inner-box .single-item .text{
  position: relative;
  display: block;
  color: #616b8c;
}

.ourmission-style-two .inner-box .single-item{
  position: relative;
  display: block;
  padding-bottom: 16px;
  margin-bottom: 25px;
  border-bottom: 1px solid #ececec;
}

.ourmission-style-two .inner-box .single-item:last-child{
  border-bottom: none;
  margin-bottom: 0px;
}


/** service-style-two **/

.service-style-two{
  position: relative;
  display: block;
  padding: 72px 0px 85px 0px;
}

.service-style-two .sec-title{
  margin-bottom: 35px;
}

.service-block-two .inner-box{
  position: relative;
  display: block;
  background: #fff;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
  transition: all 500ms ease;
}

.service-block-two:hover .inner-box{
  transform: translateY(-10px);
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
}

.service-block-two .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.service-block-two .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.service-block-two:hover .inner-box .image-box img{
  opacity: 0.5;
  transform: scale(1.05);
}

.service-block-two .inner-box .lower-content{
  position: relative;
  display: block;
  overflow: hidden;
  padding: 41px 15px 42px 35px;
}

.service-block-two .inner-box .lower-content:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-3.png);
  width: 254px;
  height: 254px;
  right: 35px;
  top: 25px;
  background-repeat: no-repeat;
}

.service-block-two .inner-box .lower-content .icon-box{
  position: relative;
  display: inline-block;
  font-size: 55px;
  line-height: 55px;
  color: #272727;
  margin-bottom: 24px;
  z-index: 1;
}

.service-block-two .inner-box .lower-content .icon-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-1.png);
  width: 71px;
  height: 55px;
  left: -15px;
  top: 5px;
  background-repeat: no-repeat;
  z-index: -1;
  animation-name: rotateme;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 60s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 60s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 60s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 60s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.service-style-two .service-block:nth-child(2) .service-block-two .inner-box .lower-content .icon-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-2.png);
  width: 63px;
  height: 68px;
  left: -15px;
  top: 5px;
  background-repeat: no-repeat;
  z-index: -1;
  animation-name: rotateme;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 60s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 60s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 60s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 60s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.service-style-two .service-block:last-child .service-block-two .inner-box .lower-content .icon-box:before{
  background: url(../images/icons/shap-3.png);
  width: 76px;
  height: 44px;
}

.service-block-two .inner-box .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #272727;
  margin-bottom: 11px;
  z-index: 1;
}

.service-block-two .inner-box .lower-content h3 a{
  color: #272727;
}

.service-block-two .inner-box .lower-content h3 a:hover{
  color: #fd571c;
}

.service-block-two .inner-box .lower-content .text{
  position: relative;
  display: block;
  color: #585858;
  margin-bottom: 11px;
}

.service-block-two .inner-box .lower-content .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fd571c;
}

.service-block-two .inner-box .lower-content .link-btn a:hover{
  color: #192d66;
}

.service-block-two .inner-box .lower-content .link-btn a i{
  font-size: 12px;
  margin-left: 8px;
  transition: all 500ms ease;
}

.service-block-two .inner-box .lower-content .link-btn a:hover i{
  transform: rotate(360deg);
}


/** about-style-two **/

.about-style-two{
  position: relative;
  display: block;
}

.about-style-two .inner-content{
  position: relative;
  display: block;
  background: #0f1934;
  padding: 93px 0px 147px 0px;
}

.about-style-two .inner-content .anim-icon-1{
  position: absolute;
  left: -60px;
  bottom: -20px;
  background: url(../images/icons/cap-1.png);
  width: 198px;
  height: 84px;
  background-repeat: no-repeat;
  -webkit-animation: zoom-fade 5s infinite linear;
  animation: zoom-fade 5s infinite linear;
}

.about-style-two .inner-content:after{
  position: absolute;
  content: '';
  background: #0f1934;
  width: 80px;
  height: 100%;
  left: -80px;
  top: 0px;
  z-index: -1;
}

.about-style-two .inner-content:before{
  position: absolute;
  content: '';
  background: #0f1934;
  width: 50000%;
  height: 100%;
  left: 50%;
  top: 0px;
}

.about-style-two .content-box .top-content .top-text{
  position: relative;
  display: block;
  color: #fd571c;
  margin-bottom: 6px;
}

.about-style-two .content-box .top-content h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 10px;
}

.about-style-two .content-box .top-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  font-weight: 700;
  color: #fd571c;
  margin-bottom: 21px;
}

.about-style-two .content-box .top-content .text{
  position: relative;
  display: block;
  color: #cdcdd1;
}

.about-style-two .content-box .top-content{
  position: relative;
  display: block;
  margin-bottom: 57px;
}

.about-style-two .content-box .inner-box .single-item .icon-box {
  position: relative;
  display: block;
  font-size: 45px;
  line-height: 45px;
  color: #fff;
  margin-bottom: 15px;
}

.about-style-two .content-box .inner-box .single-item h5 {
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
  text-transform: uppercase;
}

.about-style-two .content-box .inner-box .single-item h5 a{
  color: #fff;
}

.about-style-two .content-box .inner-box .single-item h5 a:hover{
  color: #fd571c;
}

.about-style-two .content-box .inner-box .single-item .text {
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #dedfe1;
}

.about-style-two .image-box{
  position: relative;
  display: block;
  margin-left: 40px;
  margin-top: 7px;
}

.about-style-two .image-box .image{
  position: absolute;
  top: 0px;
  right: 0px;
  width: 100%;
}

.about-style-two .image-box .anim-icon-2{
  position: absolute;
  top: -45px;
  right: -20px;
  background: url(../images/icons/cap-2.png);
  width: 105px;
  height: 59px;
  background-repeat: no-repeat;
  z-index: 1;
}

.about-style-two .image-box .image img{
  width: 100%;
}


/** project-style-two **/

.project-style-two{
  position: relative;
  display: block;
  padding: 178px 0px 85px 0px;
}

.project-style-two:before{
  position: absolute;
  content: '';
  background: url(../images/background/project-shap-2.jpg);
  width: 100%;
  height: 806px;
  left: 0px;
  top: 320px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.project-style-two .sec-title{
  margin-bottom: 108px;
}

.project-block-two .inner-box{
  position: relative;
  display: block;
}

.project-block-two .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.project-block-two .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.project-block-two:hover .inner-box .image-box img{
  opacity: 0.2;
}

.project-block-two .inner-box .image-box a{
  position: absolute;
  left: 50%;
  top: 40%;
  transform: translate(-50%,-50%);
  font-size: 40px;
  line-height: 40px;
  color: #f8f8f8;
  opacity: 0;
}

.project-block-two:hover .inner-box .image-box a{
  opacity: 1;
}

.project-block-two .inner-box .lower-content{
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  background: #fd571c;
  padding: 30px 30px 26px 45px;
  transform: scale(0,0);
  transition: all 500ms ease;
}

.project-block-two:hover .inner-box .lower-content{
  transform: scale(1,1);
}

.project-block-two .inner-box .lower-content .count-number{
  position: absolute;
  top: 15px;
  right: 15px;
  font-size: 60px;
  line-height: 50px;
  color: #fe6a36;
}

.project-block-two .inner-box .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 11px;
}

.project-block-two .inner-box .lower-content h3 a{
  color: #fff;
}

.project-block-two .inner-box .lower-content .text{
  position: relative;
  display: block;
  color: #ffe4df;
}


/** testimonial-style-two **/

.testimonial-section.style-two{
  position: relative;
  padding: 83px 0px 0px;
  background: #fff;
}

.testimonial-section.style-two:before{
  position: absolute;
  content: '';
  background: #ecf3f8;
  width: 100%;
  height: 528px;
  left: 0px;
  top: 227px;
}

.testimonial-section.style-two .inner-content:before{
  display: none;
}

.testimonial-section.style-two .sec-title h1:before{
  color: #fd571c;
}

.testimonial-section.style-two .inner-content{
  margin: 0px;
}


/** team-style-two **/

.team-style-two{
  position: relative;
  display: block;
  padding-top: 63px;
  margin-bottom: -168px;
}

.team-block-two .inner-box{
  position: relative;
  display: block;
  text-align: center;
  background: #fff;
  overflow: hidden;
}

.team-block-two .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.team-block-two .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.team-block-two:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.05);
}

.team-block-two .inner-box .lower-content{
  position: relative;
  display: block;
  padding: 28px 15px 24px 15px;
  transition: all 500ms ease;
}

.team-block-two .inner-box .lower-content:before {
  position: absolute;
  content: '';
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  opacity: 0;
  -webkit-transform-origin: top;
  -ms-transform-origin: top;
  transform-origin: top;
  -webkit-transform: scale(.9) translateY(20px);
  -ms-transform: scale(.9) translateY(20px);
  transform: scale(.9) translateY(20px);
  background: #fd571c;
  transition: all 500ms ease;
}

.team-block-two:hover .inner-box .lower-content:before {
  opacity: 1;
  -webkit-transform: scale(1) translateY(0px);
  -ms-transform: scale(1) translateY(0px);
  transform: scale(1) translateY(0px);
  -webkit-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
}

.team-block-two .inner-box .lower-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #192d66;
  font-weight: 700;
  margin-bottom: 0px;
  transition: all 500ms ease;
}

.team-block-two .inner-box .lower-content h4 a{
  color: #192d66;
}

.team-block-two:hover .inner-box .lower-content h4,
.team-block-two:hover .inner-box .lower-content h4 a{
  color: #fff;
}

.team-block-two .inner-box .lower-content .designation{
  position: relative;
  display: block;
  color: #616b8c;
  transition: all 500ms ease;
}

.team-block-two:hover .inner-box .lower-content .designation{
  color: #ffe4df;
}

.team-style-two .sec-title{
  margin-bottom: 36px;
}

.team-style-two .owl-dots{
  display: none;
}

.team-style-two .owl-nav{
  position: absolute;
  top: -73px;
  right: -5px;
}

.team-style-two .owl-nav .owl-prev,
.team-style-two .owl-nav .owl-next{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fd571c;
  height: 53px;
  width: 53px;
  line-height: 53px;
  text-align: center;
  border: 2px solid #ffeee8;
  border-radius: 50%;
  margin: 0px 5px;
  transition: all 500ms ease;
  cursor: pointer;
}

.team-style-two .owl-nav .owl-prev:hover,
.team-style-two .owl-nav .owl-next:hover{
  background: #fd571c;
  border-color: #fd571c;
  color: #fff;
}


/** callto-action-section **/

.callto-action-section{
  position: relative;
  display: block;
  width: 100%;
  padding: 220px 0px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.callto-action-section:before{
  position: absolute;
  content: '';
  background: rgba(25, 45, 102, 0.9);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.callto-action-section .sec-title h1{
  color: #fff;
}

.callto-action-section .sec-title p{
  color: #dfe0e5;
}

.callto-action-section .sec-title{
  margin-bottom: 30px;
}

.callto-action-section .inner-content{
  position: relative;
  display: block;
  z-index: 1;
}

.callto-action-section .inner-content .content-column{
  position: absolute;
  width: 47%;
  height: 100%;
}

.callto-action-section .inner-content .content-column .content-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 50px 40px 70px 40px;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
}

.callto-action-section .inner-content .image-column{
  position: relative;
  float: right;
  width: 53%;
}

.callto-action-section .inner-content .image-column img{
  width: 100%;
}

.callto-action-section .inner-content .content-column .content-box .form-group{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.callto-action-section .inner-content .content-column .content-box .form-group:last-child{
  margin-bottom: 0px;
}

.callto-action-section .inner-content .content-column .content-box .form-group input[type='text'],
.callto-action-section .inner-content .content-column .content-box .form-group input[type='email'],
.callto-action-section .inner-content .content-column .content-box .form-group textarea{
  position: relative;
  width: 100%;
  height: 50px;
  border: 1px solid #e4e4e4;
  padding: 10px 15px;
  font-size: 16px;
  color: #707896;
  transition: all 500ms ease;
}

.callto-action-section .inner-content .content-column .content-box .form-group textarea{
  height: 185px;
  resize: none;
  margin-bottom: 3px;
}

.callto-action-section .inner-content .content-column .content-box .form-group input::-webkit-input-placeholder{
  color:#707896;
}

.callto-action-section .inner-content .content-column .content-box .form-group input:focus,
.callto-action-section .inner-content .content-column .content-box .form-group textarea:focus{
  border-color: #fd571c;
}

.callto-action-section .inner-content .content-column .content-box .message-btn button{
  position: relative;
  display: block;
  width: 100%;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  background: #fd571c;
  text-align: center;
  padding: 17px 30px;
  cursor: pointer;
  transition: all 500ms ease;
}

.callto-action-section .inner-content .content-column .content-box .message-btn button:hover{
  transform: translateY(-5px);
}


/** news-style-two **/

.news-section.style-two{
  position: relative;
  padding: 163px 0px 80px 0px;
  margin-top: 0px;
}

.news-section.style-two .inner-content{
  position: relative;
}

.news-section.style-two .inner-content:before{
  position: absolute;
  content: '';
  background: url(../images/background/news-column-bg.jpg);
  width: 100%;
  height: 470px;
  left: 0px;
  top: 50px;
  background-repeat: no-repeat;
}

.news-section.style-two .inner-content .inner-box{
  position: relative;
  display: block;
  max-width: 430px;
  width: 100%;
  margin: 0 auto;
  background: #fd571c;
  border: 40px solid #ffe5dc;
  text-align: center;
  padding: 29px 15px 57px 15px;
  margin-top: -50px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.news-section.style-two .inner-content .inner-box:before {
  position: absolute;
  content: '';
  background: url(../images/icons/tools-1.png);
  width: 250px;
  height: 200px;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  background-repeat: no-repeat;
  opacity: 0.05;
}

.news-section.style-two .inner-content .inner-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 16px;
}

.news-section.style-two .inner-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  color: #fff;
  line-height: 32px;
  margin-bottom: 32px;
}

.news-section.style-two .inner-content .inner-box .icon-box{
  position: relative;
  display: block;
  margin-bottom: 26px;
}

.news-section.style-two .inner-content .inner-box .icon-box img{
  position: relative;
  display: inline-block;
  width: auto;
  animation-name: rotateme;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 60s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 60s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 60s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 60s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.news-section.style-two .inner-content .inner-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #192d66;
  text-transform: uppercase;
  padding-bottom: 6px;
}

.news-section.style-two .inner-content .inner-box .link-btn a:before {
  position: absolute;
  content: '';
  background: #192d66;
  width: 195px;
  height: 1px;
  left: -47px;
  bottom: 0px;
}

.news-section.style-two .inner-content .inner-box .link-btn a:hover{
  color: #fff;
}

.news-section.style-two .sec-title{
  margin-bottom: 32px;
}

.news-section.style-two .post-inner .post h5 a:hover{
  color: #fd571c;
}


/** footer-style-two **/

.main-footer.style-two{
  position: relative;
  background: #f9fbff;
}

.main-footer.style-two .footer-top {
  padding: 65px 0px;
}

.main-footer.style-two:after{
  background: url(../images/icons/footer-icon-3.png);
  width: 657px;
  height: 354px;
  background-repeat: no-repeat;
}

.main-footer.style-two:before{
  background: url(../images/icons/footer-icon-4.png);
  width: 505px;
  height: 290px;
  background-repeat: no-repeat;
}

.main-footer.style-two .footer-bottom .footer-social li a:hover{
  color: #fd571c;
}



/*** 

====================================================================
                        Home-Page-Three
====================================================================

***/


/** header-style-three **/

.main-header.style-three{
  position: relative;
}

.main-header.style-three .header-bottom{
  background: #161212;
}

.main-header.style-three .header-bottom .outer-container .nav-outer{
  position: relative;
  top: 0px;
  background: #161212;
}

.main-header.style-three .header-bottom .logo-box{
  position: relative;
  float: left;
  margin: 0px 30px 0px 0px;
  padding: 36px 0px 26px 0px;
}

.main-header.style-three .header-bottom .info-box .btn-box{
  position: relative;
  float: left;
}

.main-header.style-three .header-bottom .info-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #ff443e;
  padding: 19.5px 30px;
  text-align: center;
}

.main-header.style-three .header-bottom .info-box .btn-box i{
  font-size: 12px;
  margin-right: 8px;
  transition: all 500ms ease;
}

.main-header.style-three .header-bottom .info-box .btn-box:hover i{
  transform: rotate(360deg);
}

.main-header.style-three .header-bottom .info-box {
  padding: 26px 0px 25px 0px;
}

.main-header.style-three .header-bottom .info-box .shop-cart a{
  background: transparent;
  color: #f1f1f1;
}

.main-header.style-three .header-bottom .info-box .shop-cart a:hover{
  color: #ff443e;
}

.main-header.style-three .header-bottom .info-box .shop-cart span{
  background: #ff443e;
  color: #fff;
}

.main-header.style-three .header-bottom .info-box .search-box {
  margin-top: 15px;
  margin-right: 10px;
}

.main-header.style-three .header-bottom .info-box .shop-cart{
  margin: 10px 6px 0px 10px;
  padding-right: 2px;
}

.main-header.style-three .main-menu .navigation > li > a{
  padding: 45px 0px;
  color: #fff;
}

.main-header.style-three .main-menu .navigation > li.current > a, 
.main-header.style-three .main-menu .navigation > li:hover > a,
.main-header.style-three .header-bottom .info-box .search-box .header-flyout-searchbar i:hover{
  color: #ff443e;
}

.main-header.style-three .header-bottom .info-box .search-box .header-flyout-searchbar i{
  color: #fff;
}


/** slider-style-three **/

.slider-style-three{
  position: relative;
}

.slider-style-three .slide{
  position: relative;
  padding: 137px 0px 177px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.slider-style-three .slide:before{
  position: absolute;
  content: '';
  background-image: -webkit-linear-gradient(90deg, #000 0%, rgba(255, 68, 62, 0.3) 50%, rgba(255, 255, 255, 0.1) 100%);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.slider-style-three .content-box{
  position: relative;
  display: block;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-three .content-box .top-text{
  position: relative;
  display: block;
  font-size: 18px;
  color: #ff443e;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 10px;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
}

.slider-style-three .active .content-box .top-text{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1000ms;
}

.slider-style-three .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  font-weight: 700;
  line-height: 88px;
  color: #161212;
  margin-bottom: 18px;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.slider-style-three .active .content-box h1{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1500ms;
}

.slider-style-three .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #161212;
  margin-bottom: 26px;
  opacity:0;
  -webkit-transition: all 2000ms ease;
  -moz-transition: all 2000ms ease;
  -ms-transition: all 2000ms ease;
  -o-transition: all 2000ms ease;
  transition: all 2000ms ease;
  -webkit-transform: translateX(20px);
  -moz-transform: translateX(20px);
  -ms-transform: translateX(20px);
  -o-transform: translateX(20px);
  transform: translateX(20px);
}

.slider-style-three .active .content-box h3{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 2000ms;
}

.slider-style-three .content-box .btn-box{
  position: relative;
  display: block;
  margin-bottom: 32px;
  opacity:0;
  -webkit-transition: all 2500ms ease;
  -moz-transition: all 2500ms ease;
  -ms-transition: all 2500ms ease;
  -o-transition: all 2500ms ease;
  transition: all 2500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.slider-style-three .active .content-box .btn-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 2500ms;
}

.slider-style-three .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #ff443e;
  padding: 19.5px 37px;
  border-radius: 10px;
  text-align: center;
  text-transform: uppercase;
}

.slider-style-three .content-box .btn-box a:hover{
  background: #fff;
  color: #ff443e;
}

.slider-style-three .content-box .video-button a {
  position: relative;
  display: inline-block;
  font-size: 14px;
  color: #ff443e;
  width: 80px;
  height: 80px;
  line-height: 80px;
  border: 3px solid #fff;
  border-radius: 50%;
  text-align: center;
}

.slider-style-three .content-box .video-button{
  position: relative;
  opacity:0;
  -webkit-transition: all 2500ms ease;
  -moz-transition: all 2500ms ease;
  -ms-transition: all 2500ms ease;
  -o-transition: all 2500ms ease;
  transition: all 2500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.slider-style-three .active .content-box .video-button{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 2500ms;
}

.slider-style-three .content-box .video-button a:hover{
  color: #fff;
  background: #ff443e;
  border-color: #ff443e;
}

.slider-style-three .owl-dots{
  display: none;
}

.slider-style-three .owl-nav{
  position: relative;
  right: 0px;
  bottom: 0px;
  max-width: 1170px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-three .owl-nav .owl-prev,
.slider-style-three .owl-nav .owl-next{
  position: absolute;
  bottom: 0px;
  width: 84px;
  height: 76px;
  color: #fd571c;
  font-size: 20px;
  line-height: 80px;
  background: #fff;
  text-align: center;
  cursor: pointer;
  transition: all 500ms ease;
}

.slider-style-three .owl-nav .owl-prev:hover,
.slider-style-three .owl-nav .owl-next:hover{
  color: #192d66;
}

.slider-style-three .owl-nav .owl-prev{
  right: 84px;
}

.slider-style-three .owl-nav .owl-next {
  right: 0px;
}

.slider-style-three .owl-nav .owl-prev:before{
  position: absolute;
  content: '';
  background: #e5e6e9;
  width: 1px;
  height: 50px;
  top: 15px;
  right: 0px;
}

.slider-style-two .owl-nav .owl-next{
  right: 0px;
}


/** about-style-three **/

.about-style-three{
  position: relative;
  display: block;
  padding: 93px 0px 95px 0px;
}

.about-style-three .content-box .top-content .top-text{
  position: relative;
  display: block;
  color: #ff443e;
  text-transform: uppercase;
  margin-bottom: 4px;
}

.about-style-three .content-box .top-content h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #161212;
  font-weight: 700;
  margin-bottom: 10px;
}

.about-style-three .content-box .top-content .text p{
  display: block;
  color: #454547;
  margin-bottom: 10px;
}

.about-style-three .content-box .top-content .text p:last-child{
  margin-bottom: 0px;
}

.about-style-three .content-box .top-content{
  position: relative;
  margin-bottom: 50px;
}

.about-style-three .content-box{
  position: relative;
  display: block;
  margin-right: 20px;
}

.about-style-three .content-box .lower-content .single-item{
  position: relative;
  display: block;
  padding: 0px 0px 0px 70px;
}

.about-style-three .content-box .lower-content .single-item .icon-box{
  position: absolute;
  left: 0px;
  top: -5px;
  font-size: 55px;
  line-height: 55px;
  font-weight: 500;
  color: #000;
  transition: all 500ms ease;
}

.about-style-three .content-box .lower-content .single-item:hover .icon-box{
  color: #ff443e;
}

.about-style-three .content-box .lower-content .single-item h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #161212;
  font-weight: 700;
  margin-bottom: 4px;
}

.about-style-three .content-box .lower-content .single-item .text{
  position: relative;
  display: block;
  font-size: 18px;
  color: #413e3e;
}


.about-style-three .inner-box{
  position: relative;
  display: block;
  width: 100%;
  padding: 180px 20px 20px 20px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  margin-top: 30px;
}

.about-style-three .inner-box .content-box{
  position: relative;
  max-width: 265px;
  width: 100%;
  background: #fff;
  padding: 49px 30px 55px 30px;
}

.about-style-three .inner-box .content-box h1{
  position: relative;
  display: block;
  font-size: 80px;
  font-weight: 700;
  color: #ff443e;
  line-height: 30px;
}

.about-style-three .inner-box .content-box h1 span{
  font-size: 24px;
  font-weight: 400;
  color: #161212;
}

.about-style-three .inner-box .content-box .text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #161212;
}


/** ourmission-style-three **/

.ourmission-style-three{
  position: relative;
  width: 100%;
  background-size: cover;
  padding: 145px 0px 0px;
  background-repeat: no-repeat;
  background-position: center;
}

.ourmission-style-three .inner-box{
  position: relative;
  display: block;
  background: #ff443e;
  padding: 30px 20px;
  margin-right: 55px;
  margin-bottom: -110px;
}

.ourmission-style-three .inner-box .inner-content{
  position: relative;
  display: block;
  padding: 44px 40px 52px 35px;
  border: 1px dashed #fc916b;
}

.ourmission-style-three .inner-box .inner-content:before{
  position: absolute;
  content: '';
  background: url(../images/icons/tools-2.png);
  width: 100%;
  height: 170px;
  left: 0px;
  bottom: -15px;
  background-repeat: no-repeat;
}

.ourmission-style-three .inner-box .inner-content h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 14px;
}

.ourmission-style-three .inner-box .inner-content .text{
  position: relative;
  display: block;
  color: #fff1f1;
  margin-bottom: 10px;
}

.ourmission-style-three .inner-box .inner-content .top-content{
  position: relative;
  display: block;
  margin-bottom: 29px;
}

.ourmission-style-three .inner-box .inner-content .top-content .text{
  margin: 0px;
}

.ourmission-style-three .inner-box .inner-content .middle-content .text{
  padding: 0px 0px 0px 45px;
  margin-bottom: 20px;
}

.ourmission-style-three .inner-box .inner-content .middle-content .text:before {
  position: absolute;
  content: '';
  background: #fff;
  width: 33px;
  height: 2px;
  left: 0px;
  top: 12px;
}

.ourmission-style-three .inner-box .inner-content .middle-content .text:after {
  position: absolute;
  content: '';
  background: #fff;
  width: 9px;
  height: 9px;
  left: 0px;
  top: 8px;
  border-radius: 50%;
}

.ourmission-style-three .inner-box .inner-content .middle-content .text:last-child,
.ourmission-style-three .inner-box .inner-content .lower-content .text{
  margin-bottom: 0px;
}

.ourmission-style-three .inner-box .inner-content .middle-content{
  position: relative;
  display: block;
  margin-bottom: 42px;
  padding-left: 15px;
}

.ourmission-style-three .content-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 35px;
  line-height: 35px;
  color: #fff;
  font-weight: 500;
  margin-bottom: 1px;
}

.ourmission-style-three .content-box h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 45px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 18px;
}

.ourmission-style-three .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #ff443e;
  padding: 17px 27px;
  text-align: center;
  text-transform: uppercase;
}

.ourmission-style-three .content-box .btn-box a:hover{
  transform: translateY(-5px);
}

.ourmission-style-three .content-box{
  position: relative;
  display: block;
  padding-top: 86px;
  padding-bottom: 180px;
}

.ourmission-style-three .content-box .title-text{
  position: absolute;
  left: -90px;
  bottom: -25px;
  font-size: 125px;
  line-height: 100px;
  font-weight: 700;
  color: #fff;
}


/** service-style-three **/

.service-style-three{
  position: relative;
  display: block;
  padding: 155px 0px 60px 0px;
}

.service-style-three .sec-title{
  margin-bottom: 35px;
}

.service-style-three .sec-title h1{
  color: #272727;
}

.service-style-three .sec-title .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #ff443e;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.service-block-three .inner-box{
  position: relative;
  display: block;
  background: #fff;
  overflow: hidden;
}

.service-block-three .inner-box .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #192d66;
}

.service-block-three .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.service-block-three:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.01);
}

.service-block-three .inner-box .lower-content{
  position: relative;
  display: block;
  background: #fff;
  padding: 23px 0px 20px 0px;
}

.service-block-three .inner-box .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #272727;
  margin-bottom: 11px;
}

.service-block-three .inner-box .lower-content h3 a{
  color: #272727;
}

.service-block-three .inner-box .lower-content h3 a:hover{
  color: #ff443e;
}

.service-block-three .inner-box .lower-content .text{
  position: relative;
  color: #737373;
  margin-bottom: 16px;
}

.service-block-three .inner-box .lower-content .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #272727;
  background: transparent;
  border: 1px solid #272727;
  text-align: center;
  padding: 3.5px 19px;
}

.service-block-three .inner-box .lower-content .btn-box a:hover{
  background: #ff443e;
  border-color: #ff443e;
  color: #fff;
}

.service-block-three .inner-box .lower-content .btn-box a i{
  font-size: 12px;
  margin-left: 8px;
}


/** wehelp-section **/

.wehelp-section{
  position: relative;
  display: block;
}

.wehelp-section .image-box{
  position: relative;
  display: block;
}

.wehelp-section .image-box img{
  max-width: none;
  float: right;
}

.wehelp-section .content-box{
  position: relative;
  display: block;
  margin: 33px 0px 0px -30px;
  background: #262425;
  padding: 93px 50px 93px 70px;
}

.wehelp-section .content-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-4.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-position: left center;
}

.wehelp-section .content-box:after{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-5.png);
  width: 233px;
  height: 233px;
  top: -70px;
  right: -130px;
  background-repeat: no-repeat;
  z-index: -1;
}

.wehelp-section .content-box .top-content .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #ff443e;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.wehelp-section .content-box .top-content .top-text:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-6.png);
  width: 79px;
  height: 72px;
  top: -90px;
  right: -45px;
  background-repeat: no-repeat;
}

.wehelp-section .content-box .top-content h1{
  position: relative;
  display: block;
  font-size: 40px;
  font-weight: 700;
  color: #fff;
  line-height: 48px;
  margin-bottom: 10px;
}

.wehelp-section .content-box .top-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  color: #ff443e;
  font-weight: 700;
  margin-bottom: 21px;
}

.wehelp-section .content-box .top-content .text{
  position: relative;
  display: block;
  color: #d0cfcf;
}

.wehelp-section .content-box .top-content{
  position: relative;
  display: block;
  margin-bottom: 53px;
}

.wehelp-section .content-box .lower-content .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 60px;
  line-height: 60px;
  color: #fff;
  margin-bottom: 18px;
  transition: all 500ms ease;
}

.wehelp-section .content-box .lower-content .single-item:hover .icon-box{
  color: #ff443e;
}

.wehelp-section .content-box .lower-content .single-item h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 8px;
}

.wehelp-section .content-box .lower-content .single-item h5 a{
  position: relative;
  display: inline-block;
  color: #fff;
}

.wehelp-section .content-box .lower-content .single-item h5 a:hover{
  color: #ff443e;
}

.wehelp-section .content-box .lower-content .single-item .text{
  position: relative;
  display: block;
  color: #e0e0e0;
}

.wehelp-section .content-box .btn-box{
  position: absolute;
  left: -50px;
  bottom: -21px;
}

.wehelp-section .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  color: #fff;
  font-weight: 700;
  background: #ff443e;
  padding: 27px 51px;
  text-align: center;
  z-index: 1;
}

.wehelp-section .content-box .btn-box a:hover{
  background: #fb1810;
}

.wehelp-section .content-box .btn-box a:before{
  position: absolute;
  content: '';
  background: rgba(255, 255, 255, 0.3);
  width: 170px;
  height: 1px;
  left: 15px;
  top: 15px;
}

.wehelp-section .content-box .btn-box a:after{
  position: absolute;
  content: '';
  background: rgba(255, 255, 255, 0.3);
  width: 170px;
  height: 1px;
  left: 15px;
  bottom: 17px;
}

.wehelp-section .content-box .anim-icon-1{
  position: absolute;
  top: 60px;
  right: 70px;
  background: url(../images/icons/cap-3.png);
  width: 75px;
  height: 43px;
  background-repeat: no-repeat;
}


/** project-style-three **/

.project-style-three{
  position: relative;
  display: block;
  padding: 93px 0px 15px 0px;;
}

.project-style-three .sec-title .top-text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #ff443e;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.project-style-three .sec-title h1{
  color: #272727;
}

.project-style-three .sec-title{
  margin-bottom: 35px;
}

.project-block-three .inner-box{
  position: relative;
  display: block;
  transform: scale(1);
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.project-style-three .owl-item:nth-child(odd) .project-block-three .inner-box{
  transform: scale(0.9);
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.project-block-three .inner-box .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #3f4862;
  margin-bottom: 20px;
}

.project-block-three .inner-box .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.project-block-three:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.05);
}

.project-block-three .inner-box .image-box a{
  position: absolute;
  left: 50%;
  top: 40%;
  transform: translate(-50%,-50%);
  font-size: 40px;
  line-height: 40px;
  color: #fff;
  opacity: 0;
}

.project-block-three:hover .inner-box .image-box a{
  opacity: 1;
}

.project-block-three .inner-box .content-box{
  position: absolute;
  left: 10px;
  bottom: 10px;
  background: #ff443e;
  max-width: 235px;
  width: 100%;
  padding: 20px 20px 20px 20px;
  transform: scale(0);
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.project-block-three:hover .inner-box .content-box{
  transform: scale(1);
}

.project-block-three .inner-box .content-box span{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 20px;
  color: #ffd3d2;
  margin-bottom: 6px;
}

.project-block-three .inner-box .content-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #fff;
  font-weight: 700;
}

.project-block-three .inner-box .content-box h5 a{
  position: relative;
  display: inline-block;
  color: #fff;
}

.project-block-three .inner-box .content-box h5 a:hover{
  color: #192d66;
}

.project-style-three .owl-dots{
  display: none;
}

.project-style-three .owl-nav .owl-prev,
.project-style-three .owl-nav .owl-next{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 50px;
  width: 50px;
  line-height: 50px;
  background: #fff;
  border: 1px solid #ffe6e5;
  text-align: center;
  font-size: 16px;
  color: #ff443e;
  border-radius: 50%;
  cursor: pointer;
  transition: all 500ms ease;
}

.project-style-three .owl-nav .owl-prev{
  left: -110px;
}

.project-style-three .owl-nav .owl-next{
  right: -110px;
}

.project-style-three .owl-nav .owl-prev:hover,
.project-style-three .owl-nav .owl-next:hover{
  background: #ff443e;
  border-color: #ff443e;
  color: #fff;
}

.project-style-three .carousel-content{
  position: relative;
  display: block;
}

.project-style-three .carousel-content:before{
  position: absolute;
  content: '';
  background: #e4e4e4;
  width: 1750px;
  height: 1px;
  left: -80px;
  top: 50%;
  transform: translateY(-50%);
}

.team-style-two.home-3{
  margin-bottom: 0px;
  padding-bottom: 80px;
}

.team-style-two.home-3 .owl-nav .owl-prev, 
.team-style-two.home-3 .owl-nav .owl-next{
  border-color: #ffedec;
  color: #ff443e;
}

.team-style-two.home-3 .owl-nav .owl-prev:hover, 
.team-style-two.home-3 .owl-nav .owl-next:hover{
  color: #fff;
  background: #ff443e;
  border-color: #ff443e;
}

.team-style-two.home-3 .image-column{
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  height: 430px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}

.team-style-two.home-3 .image-column:before{
  position: absolute;
  content: '';
  background: rgba(25, 45, 102, 0.9);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.team-style-two.home-3 .sec-title h1{
  color: #272727;
}


/** callto-action-style-two **/

.callto-action-style-two{
  position: relative;
  display: block;
  background: #fff;
  padding: 110px 0px 120px 0px;
}

.callto-action-style-two .sec-title{
  margin-bottom: 30px;
}

.callto-action-style-two .sec-title h1{
  color: #272727;
}

.callto-action-style-two .form-inner .form-group{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.callto-action-style-two .form-inner .form-group:last-child{
  margin-bottom: 0px;
}

.callto-action-style-two .form-inner .form-group input[type='text'],
.callto-action-style-two .form-inner .form-group input[type='email'],
.callto-action-style-two .form-inner .form-group textarea{
  position: relative;
  width: 100%;
  height: 50px;
  background: #fff7f7;
  border: 1px solid #fff2f2;
  font-size: 16px;
  color: #61688a;
  padding: 10px 15px;
  transition: all 500ms ease;
}

.callto-action-style-two .form-inner .form-group input::-webkit-input-placeholder,
.callto-action-style-two .form-inner .form-group textarea::-webkit-input-placeholder{
  color:#61688a;
}

.callto-action-style-two .form-inner .form-group textarea{
  height: 185px;
  resize: none;
  margin-bottom: 3px;
}

.callto-action-style-two .form-inner .form-group button{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #ff443e;
  padding: 12px 46px;
  text-align: center;
  cursor: pointer;
  transition: all 500ms ease;
  text-transform: uppercase;
}

.callto-action-style-two .form-inner .form-group button:hover{
  transform: translateY(-5px);
}

.callto-action-style-two .form-inner .form-group input:focus,
.callto-action-style-two .form-inner .form-group textarea:focus{
  border-color: #ff443e;
}

.callto-action-style-two .form-inner{
  position: relative;
  display: block;
  margin-right: 30px;
  border: 1px solid #f4f4f4;
  padding: 50px 40px;
}

.callto-action-style-two .info-box{
  position: relative;
  display: block;
  margin-left: 40px;
}

.callto-action-style-two .info-box .address-box,
.callto-action-style-two .info-box .contact-box{
  position: relative;
  max-width: 310px;
  width: 100%;
  background: #fff;
  padding: 27px 20px 34px 35px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.10);
  transition: all 500ms ease;
}

.callto-action-style-two .info-box .address-box:hover,
.callto-action-style-two .info-box .contact-box:hover{
  background: #ff443e;
}

.callto-action-style-two .info-box .address-box{
  margin-bottom: 30px;
}

.callto-action-style-two .info-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #272727;
  padding-bottom: 12px;
  margin-bottom: 12px;
  transition: all 500ms ease;
}

.callto-action-style-two .info-box h5:before{
  position: absolute;
  content: '';
  background: #ff443e;
  width: 55px;
  height: 2px;
  left: 0px;
  bottom: 0px;
  transition: all 500ms ease;
}

.callto-action-style-two .info-box .address-box:hover h5,
.callto-action-style-two .info-box .contact-box:hover h5{
  color: #fff;
}

.callto-action-style-two .info-box .address-box:hover h5:before,
.callto-action-style-two .info-box .contact-box:hover h5:before{
  background: #fff;
}

.callto-action-style-two .info-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #686868;
  transition: all 500ms ease;
}

.callto-action-style-two .info-box .contact-box .phone-list li{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #686868;
  margin: 0px;
  transition: all 500ms ease;
}

.callto-action-style-two .info-box .contact-box .phone-list li a{
  color: #686868;
}

.callto-action-style-two .info-box .contact-box .phone-list{
  position: relative;
  display: block;
  margin-bottom: 13px;
}

.callto-action-style-two .info-box .contact-box .mail-box a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  line-height: 28px;
  color: #272727;
  font-weight: 700;
}

.callto-action-style-two .info-box .contact-box .mail-box a:hover{
  color: #ff443e;
}

.callto-action-style-two .info-box .contact-box{
  padding: 28px 20px 45px 35px;
}

.callto-action-style-two .info-box .contact-box .text{
  margin-bottom: 16px;
}

.callto-action-style-two .info-box .address-box:hover .text,
.callto-action-style-two .info-box .contact-box:hover .text,
.callto-action-style-two .info-box .contact-box:hover .phone-list li,
.callto-action-style-two .info-box .contact-box:hover .phone-list li a{
  color: #ffd3d2;
}

.callto-action-style-two .info-box .contact-box:hover .mail-box a{
  color: #fff;
}

.callto-action-style-two .info-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/map.png);
  width: 596px;
  height: 392px;
  left: -60px;
  top: 50px;
  background-repeat: no-repeat;
  animation-name: slideInRight;
  animation-duration: 2s;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  -webkit-animation-name: slideInRight;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: slideInRight;
  -moz-animation-duration: 2s;
  -moz-animation-iteration-count: 1;
  -moz-animation-timing-function: linear;
  -ms-animation-name: slideInRight;
  -ms-animation-duration: 2s;
  -ms-animation-iteration-count: 1;
  -ms-animation-timing-function: linear;
}


/** subscribe-section **/

.subscribe-section{
  position: relative;
  display: block;
  padding: 55px 0px 60px 0px;
}

.subscribe-section .inner-box{
  position: relative;
  max-width: 1005px;
  width: 100%;
}

.subscribe-section .inner-box .icon-box{
  position: absolute;
  left: 0px;
  top: -16px;
  width: 164px;
  height: 186px;
}

.subscribe-section .inner-box .content-box{
  position: relative;
  display: block;
  padding: 0px 0px 0px 200px;
}

.subscribe-section .inner-box .content-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 5px;
}

.subscribe-section .inner-box .content-box .text{
  position: relative;
  display: block;
  line-height: 28px;
  color: #fff;
  margin-bottom: 33px;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group{
  position: relative;
  width: 100%;
  display: block;
  margin: 0px;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group input[type='email']{
  position: relative;
  width: calc(100% - 257px);
  height: 70px;
  padding: 10px 20px;
  border-bottom: 1px solid #ffbab8;
  font-size: 16px;
  color: #ffb2b0;
  background: transparent;
  transition: all 500ms ease;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group input:focus{
  border-color: #192d66;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group input::-webkit-input-placeholder{
  color:#ffb2b0;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group button{
  position: absolute;
  top: 0px;
  right: 0px;
  font-size: 16px;
  font-weight: 700;
  color: #ff443e;
  background: #fff;
  font-weight: 700;
  text-align: center;
  padding: 22px 30px;
  width: 250px;
  cursor: pointer;
  border-radius: 5px;
  transition: all 500ms ease;
}

.subscribe-section .inner-box .content-box .subscribe-form .form-group button:hover{
  color: #192d66;
}


/** footer-style-three **/

.main-footer.style-three{
  position: relative;
  background: #161212;
}

.main-footer.style-three .widget-title{
  color: #fff;
}

.main-footer.style-three .footer-top .company-widget{
  margin-left: 0px;
}

.main-footer.style-three .footer-top .links-widget .widget-content ul li a,
.main-footer.style-three .footer-top .logo-widget .text,
.main-footer.style-three .footer-bottom .copyright{
  color: #cdcdcd;
}

.main-footer.style-three .footer-top .links-widget .widget-content ul li a:hover,
.main-footer.style-three .footer-bottom .footer-social li a:hover{
  color: #ff443e;
}

.main-footer.style-three .footer-bottom .footer-social li a{
  color: #fff;
}

.main-footer.style-three .footer-top{
  border-bottom: 1px solid #251f1f;
}



/*** 

====================================================================
                        Home-Page-Four
====================================================================

***/


/** header-style-four **/

.main-header.style-four{
  position: relative;
}

.main-header.style-four .header-top{
  background: #0c0d24;
}

.main-header.style-four .header-bottom .outer-container .nav-outer{
  top: 40px;
  padding-left: 30px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
}

.main-header.style-four .header-bottom .outer-container .nav-outer:before{
  position: absolute;
  content: '';
  background: #fff;
  width: calc(100% - 26px);
  height: 100%;
  left: 13px;
  top: 15px;
  z-index: -1;
}

.main-header.style-four .header-top .header-info li a{
  color: #dededf;
  text-transform: uppercase;
}

.main-header.style-four .header-top .header-info li a:hover,
.main-header.style-four .header-top .header-nav li a:hover{
  color: #fe2a37;
}

.main-header.style-four .header-top .header-nav li,
.main-header.style-four .header-top .header-nav li a,
.main-header.style-four .header-top .header-nav .language a:hover{
  color: #dededf;
}

.main-header.style-four .header-top .header-nav li.phone i{
  position: relative;
  font-size: 20px;
  margin-right: 10px;
  font-weight: 600;
  color: #ced6dd;
  top: 3px;
}

.main-header.style-four .header-top .header-nav .language .dropdown-toggle{
  border-color: #313363;
}

.main-header.style-four .header-bottom .logo-box {
  position: relative;
  float: left;
  margin: 0px 60px 0px 0px;
  padding: 12px 0px 10px 0px;
}

.main-header.style-four .header-bottom .info-box .btn-box{
  float: left;
}

.main-header.style-four .header-bottom .info-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fe2a37;
  padding: 24px 31px;
  text-align: center;
}

.main-header.style-four .header-bottom .info-box .btn-box a i{
  font-size: 12px;
  margin-right: 8px;
  transition: all 500ms ease;
}

.main-header.style-four .header-bottom .info-box .btn-box a:hover i{
  transform: rotate(360deg);
}

.main-header.style-four .header-bottom .info-box{
  padding: 0px;
}

.main-header.style-four .header-bottom .info-box .shop-cart a{
  background: transparent;
  font-weight: 600;
}

.main-header.style-four .header-bottom .info-box .shop-cart span{
  background: #fe2a37;
  color: #fff;
  margin-left: -7px;
  top: -8px;
}

.main-header.style-four .header-bottom .info-box .shop-cart a:hover{
  color: #fe2a37;
}

.main-header.style-four .header-bottom .info-box .shop-cart{
  padding: 0px;
  margin: 15px 8px 0px 0px;
}

.main-header.style-four .header-bottom .info-box .search-box{
  margin-top: 21px;
  margin-right: 13px;
}

.main-header.style-four .header-bottom .info-box .shop-cart:before{
  display: none;
}

.main-header.style-four .header-bottom .info-box .shop-cart:after {
  position: absolute;
  content: '';
  background: #e1e2e3;
  height: 100%;
  width: 1px;
  top: 0px;
  left: -3px;
}


/** slider-style-four **/

.slider-style-four{
  position: relative;
}

.slider-style-four .slide {
  position: relative;
  padding: 325px 0px 290px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.slider-style-four .slide:before {
  position: absolute;
  content: '';
  background: rgba(62, 0, 0, 0.6);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.slider-style-four .content-box{
  position: relative;
  display: block;
  max-width: 860px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-four .content-box .top-text{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #fff;
  letter-spacing: 4px;
  text-transform: uppercase;
  margin-bottom: 11px;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
}

.slider-style-four .active .content-box .top-text{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1000ms;
}

.slider-style-four .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 23px;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.slider-style-four .active .content-box h1{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1500ms;
}

.slider-style-four .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
  margin-bottom: 29px;
  opacity:0;
  -webkit-transition: all 2000ms ease;
  -moz-transition: all 2000ms ease;
  -ms-transition: all 2000ms ease;
  -o-transition: all 2000ms ease;
  transition: all 2000ms ease;
  -webkit-transform: translateX(20px);
  -moz-transform: translateX(20px);
  -ms-transform: translateX(20px);
  -o-transform: translateX(20px);
  transform: translateX(20px);
}

.slider-style-four .active .content-box h3{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 2000ms;
}

.slider-style-four .content-box .btn-box .btn-one{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #16161b;
  background: #fff;
  text-transform: uppercase;
  padding: 17px 33px;
  border-radius: 10px;
  margin: 0px 8px;
}

.slider-style-four .content-box .btn-box .btn-two{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fe2a37;
  text-transform: uppercase;
  padding: 17px 46px;
  border-radius: 10px;
  margin: 0px 8px;
}

.slider-style-four .content-box .btn-box .btn-one:hover{
  background: #fe2a37;
  color: #fff;
}

.slider-style-four .content-box .btn-box .btn-two:hover{
  background: #fff;
  color: #16161b;
}

.slider-style-four .content-box .btn-box{
  position:relative;
  display: block;
  opacity:0;
  -webkit-transition: all 2500ms ease;
  -moz-transition: all 2500ms ease;
  -ms-transition: all 2500ms ease;
  -o-transition: all 2500ms ease;
  transition: all 2500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.slider-style-four .active .btn-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 2500ms;
}

.slider-style-four .owl-nav{
  display: none;
}

.slider-style-four .owl-dots{
  position: absolute;
  left: 40px;
  top: 50%;
  transform: translateY(-50%);
}

.slider-style-four .owl-theme .owl-dots .owl-dot{
  display: block;
}

.slider-style-four .owl-theme .owl-dots .owl-dot span{
  width: 5px;
  height: 22px;
  background: #fff;
  border: none;
  border-radius: 0px;
  cursor: pointer;
  margin: 10px 0px;
  transition: all 500ms ease;
}

.slider-style-four .owl-theme .owl-dots .owl-dot.active span,
.slider-style-four .owl-theme .owl-dots .owl-dot span:hover{
  background: #fe2a37;
  height: 52px;
}


/** intro-section **/

.intro-section{
  position: relative;
}

.intro-section .inner-container{
  position: relative;
  display: block;
  background: #fff;
  padding: 50px 115px;
  border-radius: 10px;
  margin-top: -125px;
  z-index: 1;
}

.intro-section .inner-container .single-item{
  position: relative;
  float: left;
  width: 25%;
}

.intro-section .inner-container .single-item .inner-box{
  position: relative;
  display: block;
  text-align: center;
  max-width: 212px;
  margin: 0 auto;
  border: 1px solid #cfcfcf;
  background: #fff;
  border-radius: 10px;
  padding: 42px 10px 36px 10px;
  transition: all 500ms ease;
}

.intro-section .inner-container .single-item .inner-box:hover{
  background: #fe2a37;
  border-color: #fe2a37;
}

.intro-section .inner-container .single-item .inner-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 60px;
  line-height: 60px;
  color: #000;
  margin-bottom: 6px;
  transition: all 500ms ease;
}

.intro-section .inner-container .single-item .inner-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #16161b;
  font-weight: 700;
}

.intro-section .inner-container .single-item .inner-box h5 a{
  position: relative;
  display: inline-block;
  color: #16161b;
}

.intro-section .inner-container .single-item .inner-box:hover .icon-box,
.intro-section .inner-container .single-item .inner-box:hover h5,
.intro-section .inner-container .single-item .inner-box:hover h5 a{
  color: #fff;
}


/** oilgas-section **/

.oilgas-section{
  position: relative;
  display: block;
  padding: 30px 0px 80px 0px;
}

.oilgas-section .content-box .top-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 45px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 6px;
}

.oilgas-section .content-box .top-box p{
  position: relative;
  font-size: 16px;
  line-height: 26px;
}

.oilgas-section .content-box .top-box{
  position: relative;
  display: block;
  margin-bottom: 40px;
  padding-right: 90px;
}

.oilgas-section .content-box .image-box{
  position: relative;
  display: inline-block;
  max-width: 500px;
}

.oilgas-section .content-box .image-box img{
  width: 100%;
}

.oilgas-section .content-box .inner-box{
  position: absolute;
  right: 85px;
  bottom: 145px;
  background: #fe2a37;
  padding: 46px 30px 47px 30px;
  max-width: 280px;
  width: 100%;
}

.oilgas-section .content-box .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
  font-weight: 400;
  margin-bottom: 21px;
}

.oilgas-section .content-box .inner-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fff;
  margin-bottom: 27px;
}

.oilgas-section .content-box .inner-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #192d66;
  background: #fff;
  text-align: center;
  text-transform: uppercase;
  padding: 9.5px 27.5px;
}

.oilgas-section .content-box .inner-box .btn-box a:hover{
  transform: translateY(-5px);
}

.oilgas-section .inner-column .inner-box .single-item{
  position: relative;
  max-width: 270px;
  width: 100%;
  background: #fff;
  text-align: center;
  padding: 22px 35px 20px 35px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.05);
  margin-bottom: 20px;
  transition: all 500ms ease;
}

.oilgas-section .inner-column .inner-box .single-item:hover{
  background: #fe2a37;
}

.oilgas-section .inner-column .inner-box .single-item:last-child{
  margin-bottom: 0px;
}

.oilgas-section .inner-column .inner-box .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 60px;
  line-height: 60px;
  color: #000;
  font-weight: 500;
  margin-bottom: 0px;
  z-index: 1;
  transition: all 500ms ease;
}

.oilgas-section .inner-column .inner-box .single-item .icon-box:before{
  position: absolute;
  content: '';
  background: #ffc4c8;
  width: 30px;
  height: 30px;
  left: 5px;
  bottom: 3px;
  border-radius: 50%;
  z-index: -1;
  -webkit-animation: zoom-fade-two 5s infinite linear;
  animation: zoom-fade-two 5s infinite linear;
}

.oilgas-section .inner-column .inner-box .single-item h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 40px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 18px;
  transition: all 500ms ease;
}

.oilgas-section .inner-column .inner-box .single-item .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #3c3c49;
  padding-top: 5px;
  border-top: 1px solid #192d66;
  transition: all 500ms ease;
}

.oilgas-section .inner-column .inner-box .single-item:hover .icon-box,
.oilgas-section .inner-column .inner-box .single-item:hover h2,
.oilgas-section .inner-column .inner-box .single-item:hover .text{
  color: #fff;
}

.oilgas-section .inner-column .inner-box .single-item:hover .text{
  border-color: rgba(255, 255, 255, 0.5);
}


/** weare-section-two **/

.weare-section-two{
  position: relative;
  display: block;
  padding: 47px 0px 100px 0px;
}

.weare-section-two .content-box .top-content .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fe2a37;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.weare-section-two .content-box .top-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  color: #fe2a37;
  font-weight: 700;
  margin-bottom: 21px;
}

.weare-section-two .content-box .top-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  padding-right: 45px;
}

.weare-section-two .content-box .top-content{
  position: relative;
  display: block;
  margin-bottom: 53px;
}

.weare-section-two .content-box .top-content .sec-title h1{
  color: #0c0d24;
  line-height: 48px;
}

.weare-section-two .content-box .lower-content .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  color: #fe2a37;
  font-weight: 500;
  margin-bottom: 18px;
}

.weare-section-two .content-box .lower-content .single-item h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  font-weight: 700;
  color: #0c0d24;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.weare-section-two .content-box .lower-content .single-item h5 a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.weare-section-two .content-box .lower-content .single-item h5 a:hover{
  color: #fe2a37;
}

.weare-section-two .content-box .lower-content .single-item .text{
  position: relative;
  display: block;
}

.weare-section-two .content-box .lower-content .single-item{
  position: relative;
  display: block;
  margin-bottom: 32px;
}

.weare-section-two .content-box .lower-content .single-column:last-child .single-item{
  margin-bottom: 0px;
}

.weare-section-two .inner-content{
  position: relative;
  display: block;
  margin-left: 40px;
}

.weare-section-two .inner-content .image-box img{
  width: 100%;
}

.weare-section-two .inner-content .inner-box{
  position: absolute;
  right: 0px;
  bottom: 0px;
  background: #fe2a37;
  min-width: 685px;
  padding: 32px 40px 29px 25px;
}

.weare-section-two .inner-content .inner-box .link-btn{
  position: absolute;
  left: -75px;
  top: 18px;
  background: transparent;
  height: 150px;
  width: 150px;
  line-height: 15px;
  border: 2px solid #feb5ba;
  border-radius: 50%;
  text-align: center;
  transition: all 500ms ease;
}

.weare-section-two .inner-content .inner-box .link-btn a{
  position: relative;
  display: inline-block;
  width: 130px;
  height: 130px;
  line-height: 130px;
  text-align: center;
  background: #fff;
  color: #fe2a37;
  font-size: 50px;
  margin: 8px;
  border-radius: 50%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.10);
  z-index: 1;
}

.weare-section-two .inner-content .inner-box .link-btn a:hover{
  transform: rotate(360deg);
}

.weare-section-two .inner-content .inner-box .text-content{
  position: relative;
  display: block;
  padding-left: 90px;
}

.weare-section-two .inner-content .inner-box .text-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 35px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 2px;
}

.weare-section-two .inner-content .inner-box .text-content .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #ffe0e1;
}

.weare-section-two .inner-content{
  position: relative;
  display: block;
  margin-top: 8px;
}


/** project-style-four **/

.project-style-four{
  position: relative;
  display: block;
  background: #fff7f7;
  padding: 93px 0px 70px 0px;
  z-index: 1;
}

.project-style-four:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-7.png);
  width: 470px;
  height: 475px;
  left: 0px;
  bottom: 270px;
  background-repeat: no-repeat;
}

.project-style-four:after{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-7.png);
  width: 470px;
  height: 475px;
  right: 0px;
  bottom: 270px;
  background-repeat: no-repeat;
  z-index: -1;
}

.project-style-four .top-content{
  position: relative;
  display: block;
  margin-bottom: 70px;
}

.project-style-four .top-content .title-box{
  position: relative;
  display: block;
  float: left;
  max-width: 500px;
  width: 100%;
}

.project-style-four .top-content .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fe2a37;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.project-style-four .top-content .title-box .sec-title h1{
  color: #0c0d24;
}

.project-style-four .top-content .title-box .text{
  position: relative;
  display: block;
  line-height: 28px;
}

.project-style-four .top-content .filters{
  position: relative;
  float: right;
}

.project-style-four .top-content .filters .filter-btns{
  position: relative;
  display: block;
  background: #fff;
  padding: 15px;
  margin-top: 80px;
}

.project-style-four .top-content .filters .filter-btns li{
  position: relative;
  float: left;
  font-size: 16px;
  color: #1d2060;
  text-transform: uppercase;
  padding: 2px 10px;
  text-align: center;
  background: transparent;
  cursor: pointer;
  transition: all 500ms ease;
}

.project-style-four .top-content .filters .filter-btns li.active,
.project-style-four .top-content .filters .filter-btns li:hover{
  background: #fe2a37;
  color: #fff;
}

.project-block-four{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.project-block-four .inner-box{
  position: relative;
  display: block;
  overflow: hidden;
}

.project-block-four .inner-box img{
  width: 100%;
  transform: scale(1.01);
  -webkit-transition-delay: .3s;
  transition-delay: .3s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-duration: .6s;
  transition-duration: .6s;
  -webkit-transition-property: all;
  transition-property: all;
}

.project-block-four:hover .inner-box img{
  transform: scale(1.2) rotate(0deg);
}

.project-block-four .inner-box .overlay-box{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  transition-delay: .1s;
  transition-timing-function: ease-in-out;
  transition-duration: .7s;
  transition-property: all;
  opacity: 0;
  z-index: 1;
}

.project-block-four:hover .overlay-box{
  opacity: 1;
}

.project-block-four .inner-box .overlay-box .box{
  display: table;
  height: 100%;
  width: 100%;
}

.project-block-four .inner-box .overlay-box .box .inner{
  display: table-cell;
  text-align: center;
  vertical-align: middle;
  padding: 0px 15px;
}

.project-block-four .inner-box .overlay-box .box .inner h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #1d2060;
  margin-bottom: 23px;
  transform: translateY(-50px);
  transition: all .4s ease-in-out .1s;
}

.project-block-four .inner-box .overlay-box .box .inner h3 a{
  color: #1d2060;
}

.project-block-four .inner-box .overlay-box .box .inner h3 a:hover{
  color: #fe2a37;
}

.project-block-four:hover .inner-box .overlay-box .box .inner h3{
  transform: translateY(0px);
}

.project-block-four .inner-box .overlay-box .box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  background: #fe2a37;
  padding: 7px 35px;
  text-align: center;
  border-radius: 10px;
  transform: translateY(50px);
  transition: all .4s ease-in-out .1s;
}

.project-block-four .inner-box .overlay-box .box .btn-box a:hover{
  background: #1d2060;
}

.project-block-four:hover .inner-box .overlay-box .box .btn-box a{
  transform: translateY(0px);
}


/** growth-section **/

.growth-section{
  position: relative;
  display: block;
  background: #0c0d24;
  padding: 90px 0px;
}

.growth-section:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-8.png);
  width: 190px;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
}

.growth-section .image-column{
  position: absolute;
  right: 0px;
  top: 0px;
  width: 40%;
  height: 100%;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.growth-section .content-box .sec-title h1{
  line-height: 48px;
  margin-bottom: 7px;
}

.growth-section .content-box .sec-title h1,
.growth-section .single-progress-box h6,
.single-progress-box .progress-bar .value-holder{
  color: #fff;
}

.growth-section .content-box .sec-title p{
  color: #efeff0;
  font-size: 16px;
  line-height: 26px;
}

.growth-section .content-box .sec-title{
  margin-bottom: 31px;
}

.growth-section .single-progress-box .progress-bar,
.growth-section .single-progress-box .progress-bar .value-holder:before{
  background: #fe2a37;
}

.growth-section .content-box{
  position: relative;
  display: block;
  margin-right: -30px;
}

.growth-section .inner-column .inner-content{
  position: relative;
  display: block;
  margin-left: 70px;
}

.growth-section .inner-column .inner-content .inner-box{
  position: relative;
  display: block;
  max-width: 500px;
  width: 100%;
  background: url(../images/icons/bg-shap.png);
  padding: 88px 80px 85px 100px;
  background-repeat: no-repeat;
}

.growth-section .inner-column .inner-content .inner-box h1{
  position: relative;
  display: block;
  font-size: 72px;
  line-height: 72px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 6px;
}

.growth-section .inner-column .inner-content .inner-box h1 span{
  font-size: 16px;
}

.growth-section .inner-column .inner-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
}


/** testimonial-style-three **/

.testimonial-style-three{
  position: relative;
  display: block;
  padding: 86px 0px 50px 0px;
}

.testimonial-style-three .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fe2a37;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.testimonial-style-three .title-box .sec-title h1{
  color: #0c0d24;
}

.testimonial-style-three .title-box{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.testimonial-style-three .testimonial-content .inner-box{
  position: relative;
  display: block;
  margin-top: 15px;
}

.testimonial-style-three .testimonial-content .inner-box .text{
  position: relative;
  display: block;
  background: #fff;
  font-size: 22px;
  line-height: 32px;
  color: #0c0d24;
  margin-bottom: 20px;
  padding: 59px 30px 62px 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  transition: all 500ms ease;
}

.testimonial-style-three .testimonial-content .inner-box .text:before{
  position: absolute;
  content: "\f10b";
  font-family: 'Flaticon';
  font-size: 35px;
  color: #fff;
  line-height: 35px;
  left: 30px;
  top: 20px;
}

.testimonial-style-three .testimonial-content:hover .inner-box .text{
  background: #fe2a37;
  color: #fff;
}

.testimonial-style-three .testimonial-content .inner-box .author-info .author-thumb{
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 9px;
}

.testimonial-style-three .testimonial-content .inner-box .author-info .author-thumb img{
  width: 100%;
  border-radius: 50%;
}

.testimonial-style-three .testimonial-content .inner-box .author-info h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #2f2f2f;
  font-weight: 700;
  margin-bottom: 0px;
}

.testimonial-style-three .testimonial-content .inner-box .author-info .designation{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 22px;
}

.testimonial-style-three .owl-dots{
  display: none;
}

.testimonial-style-three .owl-nav{
  position: relative;
  max-width: 194px;
  margin: 0 auto;
  width: 100%;
  top: -80px;
}

.testimonial-style-three .owl-nav:before{
  position: absolute;
  content: '';
  background: #e9e9e9;
  width: 100%;
  height: 1px;
  left: 0px;
  top: 26px;
}

.testimonial-style-three .owl-nav .owl-prev, 
.testimonial-style-three .owl-nav .owl-next {
  position: absolute;
  top: 0px;
  font-size: 22px;
  color: #e9e9e9;
  height: 50px;
  width: 50px;
  line-height: 50px;
  text-align: center;
  border: 2px solid #e9e9e9;
  background: #fff;
  border-radius: 50%;
  margin: 0px;
  transition: all 500ms ease;
  cursor: pointer;
}

.testimonial-style-three .owl-nav .owl-prev{
  left: 0px;
}

.testimonial-style-three .owl-nav .owl-next{
  right: 0px;
}

.testimonial-style-three .owl-nav .owl-prev:hover, 
.testimonial-style-three .owl-nav .owl-next:hover{
  background: #fe2a37;
  border-color: #fe2a37;
  color: #fff;
}


/** team-style-three **/

.team-style-three{
  position: relative;
  display: block;
  padding: 47px 0px 50px 0px;
}

.team-block-three .inner-box{
  position: relative;
  display: block;
  overflow: hidden;
}

.team-block-three .inner-box .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #fff;
}

.team-block-three .inner-box .image-box img{
  width: 100%;
  transform: scale(1.0);
  -webkit-transition-delay: .3s;
  transition-delay: .3s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-duration: .6s;
  transition-duration: .6s;
  -webkit-transition-property: all;
  transition-property: all;
}

.team-block-three:hover .inner-box .image-box img{
  opacity: 0.5;
  transform: scale(1.1);
}

.team-block-three .inner-box .content-box{
  position: absolute;
  left: 10px;
  bottom: 10px;
  max-width: 260px;
  width: 100%;
  background: #fe2a37;
  padding: 26px 30px;
  transform: scale(0,0);
  transition: all 500ms ease;
}

.team-block-three:hover .inner-box .content-box{
  transform: scale(1,1);
}

.team-block-three .inner-box .content-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  line-height: 28px;
}

.team-block-three .inner-box .content-box h4 a{
  color: #fff;
}

.team-block-three .inner-box .content-box .designation{
  position: relative;
  display: block;
  font-size: 16px;
  color: #ffe0e1;
}


/** news-style-three **/

.news-style-three{
  position: relative;
  display: block;
  padding: 52px 0px 170px 0px;
}

.news-style-three .title-box{
  position: relative;
  display: block;
  margin-right: 25px;
  margin-top: 50px;
}

.news-style-three .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fe2a37;
  text-transform: uppercase;
  margin-bottom: 9px;
}

.news-style-three .title-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  font-weight: 700;
  color: #0c0d24;
  line-height: 48px;
  margin-bottom: 13px;
}

.news-style-three .title-box .text{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 25px;
  margin-bottom: 13px;
}

.news-style-three .title-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  line-height: 26px;
  color: #0c0d24;
  font-style: italic;
  border-bottom: 1px solid #0c0d24;
}

.news-style-three .title-box .link-btn a:hover{
  color: #fe2a37;
  border-color: #fe2a37;
}

.news-block-two .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 50px 30px 40px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  transition: all 500ms ease;
}

.news-block-two:hover .inner-box{
  transform: translateY(-10px);
}

.news-block-two .inner-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 32px;
  font-weight: 700;
  color: #242425;
  margin-bottom: 0px;
}

.news-block-two .inner-box h4 a{
  position: relative;
  display: inline-block;
  color: #242425;
}

.news-block-two .inner-box h4 a:hover{
  color: #fe2a37;
}

.news-block-two .inner-box .post-info{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 24px;
  color: #70697c;
  margin-bottom: 18px;
}

.news-block-two .inner-box .text{
  position: relative;
  display: block;
  margin-bottom: 17px;
  color: #5c5c66;
}

.news-block-two .inner-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #0c0d24;
}

.news-block-two .inner-box .link-btn a i{
  position: relative;
  font-size: 20px;
  margin-left: 8px;
  top: 4px;
}

.news-block-two .inner-box .link-btn a:hover{
  color: #fe2a37;
}


/** subscribe-style-two **/

.subscribe-style-two{
  position: relative;
  display: block;
  background: #0c0d24;
}

.subscribe-style-two .left-content{
  position: relative;
  display: block;
  padding: 90px 0px 82px 0px;
}

.subscribe-style-two .left-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 20px;
}

.subscribe-style-two .left-content .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  border: 1px solid #fff;
  text-align: center;
  background: transparent;
  padding: 11px 28px;
}

.subscribe-style-two .left-content .btn-box a:hover{
  background: #fe2a37;
  border-color: #fe2a37;
}

.subscribe-style-two .right-content{
  position: relative;
  display: block;
  margin-left: -30px;
}

.subscribe-style-two .right-content .inner-box{
  position: absolute;
  left: 0px;
  top: -73px;
  right: 0px;
  width: 100%;
  background: #fe2a37;
  padding: 52px 80px 61px 60px;
}

.subscribe-style-two .right-content .inner-box .video-box{
  position: absolute;
  top: 65px;
  right: 80px;
}

.subscribe-style-two .right-content .inner-box .video-box a{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #fff;
  width: 90px;
  height: 90px;
  line-height: 90px;
  text-align: center;
  background: #ff5963;
  border-radius: 50%;
  z-index: 1;
  -webkit-animation: pulse 5s infinite;
  -o-animation: pulse 5s infinite;
  animation: pulse 5s infinite;
}

.subscribe-style-two .right-content .inner-box .phone{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 7px;
}

.subscribe-style-two .right-content .inner-box .phone:before{
  position: absolute;
  content: "\f100";
  font-family: 'Flaticon';
  font-size: 100px;
  line-height: 100px;
  left: -20px;
  top: -25px;
  color: rgba(255, 255, 255, 0.3);
}

.subscribe-style-two .right-content .inner-box .phone a{
  position: relative;
  display: inline-block;
  color: #fff;
}

.subscribe-style-two .right-content .inner-box .text{
  position: relative;
  display: block;
  color: #fff;
  margin-bottom: 31px;
}

.subscribe-style-two .right-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  font-weight: 700;
  color: #fff;
  line-height: 32px;
  margin-bottom: 23px;
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group{
  position: relative;
  display: block;
  margin: 0px;
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group input[type='email']{
  position: relative;
  width: 100%;
  height: 50px;
  font-size: 14px;
  color: #fff;
  padding: 10px 85px 10px 0px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  background: transparent;
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group input:focus{
  border-color: #192d66;
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group input::-webkit-input-placeholder{
  color: rgba(255, 255, 255, 0.9)
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group button{
  position: absolute;
  top: 10px;
  right: 0px;
  font-size: 16px;
  color: #fff;
  background: transparent;
  cursor: pointer;
  transition: all 500ms ease;
}

.subscribe-style-two .right-content .inner-box .subscribe-form .form-group button:hover{
  color: #192d66;
}


/** footer-style-four **/

.main-footer.style-four{
  position: relative;
  background: #fff;
}

.main-footer.style-four .widget-title{
  color: #0c0d24;
}

.main-footer.style-four:after{
  display: none;
}

.main-footer.style-four:before{
  position: absolute;
  content: '';
  background: url(../images/icons/footer-icon-5.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
  animation-name: footer-animate;
  animation-duration: 70s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: footer-animate;
  -webkit-animation-duration: 70s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: footer-animate;
  -moz-animation-duration: 70s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: footer-animate;
  -ms-animation-duration: 70s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: footer-animate;
  -o-animation-duration: 70s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.main-footer.style-four .footer-top .links-widget .widget-content ul li a:hover,
.main-footer.style-four .footer-bottom .footer-social li a:hover{
  color: #fe2a37;
}



/*** 

====================================================================
                        Home-Page-Five
====================================================================

***/


/** header-style-five **/

.main-header.style-five{
  position: relative;
}

.main-header.style-five .header-bottom .info-box .btn-box a,
.main-header.style-five .header-bottom .info-box .shop-cart span{
  background: #4ed63c;
}

.main-header.style-five .header-bottom .info-box .shop-cart a:hover{
  color: #4ed63c;
}

.main-header.style-five .header-bottom .info-box .search-box .header-flyout-searchbar i:hover{
  color: #4ed63c;
}


/** slider-style-five **/

.slider-style-five{
  position: relative;
}

.slider-style-five .slide {
  position: relative;
  padding: 355px 0px 235px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.slider-style-five .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 23px;
  opacity:0;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
}

.slider-style-five .active .content-box h1{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 500ms;
}

.slider-style-five .content-box .text{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
  margin-bottom: 29px;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.slider-style-five .active .content-box .text{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1000ms;
}

.slider-style-five .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  font-weight: 700;
  text-transform: uppercase;
  background: #4ed63c;
  text-align: center;
  border-radius: 30px;
  padding: 17px 40px;
}

.slider-style-five .content-box .btn-box a:hover{
  background: #fff;
  color: #4ed63c;
}

.slider-style-five .content-box .btn-box{
  position:relative;
  display: block;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.slider-style-five .active .content-box .btn-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1500ms;
}

.slider-style-five .content-box{
  position: relative;
}

.slider-style-five .content-box:before{
  position: absolute;
  content: '';
  border: 10px solid #fff;
  width: 355px;
  height: 490px;
  left: -50px;
  top: -75px;
}

.slider-style-five .owl-nav{
  display: none;
}

.slider-style-five .owl-dots {
  position: absolute;
  left: 40px;
  top: 50%;
  transform: translateY(-50%);
}

.slider-style-five .owl-theme .owl-dots .owl-dot {
  display: block;
}

.slider-style-five .owl-theme .owl-dots .owl-dot span{
  width: 5px;
  height: 22px;
  background: #fff;
  border: none;
  border-radius: 0px;
  cursor: pointer;
  margin: 10px 0px;
  transition: all 500ms ease;
}

.slider-style-five .owl-theme .owl-dots .owl-dot.active span,
.slider-style-five .owl-theme .owl-dots .owl-dot span:hover{
  background: #4ed63c;
  height: 52px;
}

.slider-style-five .turbo-image .image-1{
  position: absolute;
  left: 190px;
  bottom: 0px;
  z-index: 2;
}

.slider-style-five .turbo-image .image-2{
  position: absolute;
  left: 95px;
  bottom: 470px;
  z-index: 2;
}

.slider-style-five .turbo-image .image-2 img{
  position: relative;
  animation-name: rotateme;
  animation-duration: 30s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 30s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 30s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 30s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 30s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}


/** about-style-four **/

.about-style-four{
  position: relative;
  display: block;
  padding: 100px 0px 0px;
}

.about-style-four .top-content .content-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #4ed63c;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.about-style-four .top-content .content-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 12px;
}

.about-style-four .top-content .content-box .text p{
  position: relative;
  display: block;
  color: #77787f;
  margin-bottom: 10px;
}

.about-style-four .top-content .content-box .text p:last-child{
  margin-bottom: 0px;
}

.about-style-four .top-content .content-box{
  position: relative;
  display: block;
  margin-right: 15px;
}

.about-style-four .top-content .inner-box{
  position: relative;
  display: block;
  margin-top: 7px;
}

.about-style-four .top-content .inner-box .single-item{
  position: relative;
  display: block;
  margin-bottom: 23px;
}

.about-style-four .top-content .inner-box .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 60px;
  line-height: 60px;
  color: #000;
  margin-bottom: 7px;
  transition: all 500ms ease;
}

.about-style-four .top-content .inner-box .single-item:hover .icon-box{
  color: #4ed63c;
}

.about-style-four .top-content .inner-box .single-item h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #0c0d24;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.about-style-four .top-content .inner-box .single-item h5 a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.about-style-four .top-content .inner-box .single-item h5 a:hover{
  color: #4ed63c;
}

.about-style-four .top-content .inner-box .single-item .text{
  position: relative;
  display: block;
}

.about-style-four .lower-content .image-box{
  position: relative;
  display: block;
  margin-right: 40px;
}

.about-style-four .lower-content .image-box img{
  width: 100%;
}

.about-style-four .lower-content .inner-box{
  position: relative;
  display: block;
  margin-left: -110px;
}

.about-style-four .lower-content .inner-box .inner-content{
  position: absolute;
  left: 0px;
  top: 80px;
  right: 0px;
  background: #4ed63c;
  width: 100%;
  padding: 47px 50px 27px 115px;
}

.about-style-four .lower-content .inner-box .inner-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 35px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 12px;
}

.about-style-four .lower-content .inner-box .inner-content .text{
  position: relative;
  display: block;
  color: #e3f7e1;
}

.about-style-four .lower-content .inner-box .inner-content .content-one .text{
  margin-bottom: 13px;
}

.about-style-four .lower-content .inner-box .inner-content .content-one h5{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 26px;
  color: #e3f7e1;
  font-weight: 700;
  margin-bottom: 26px;
}

.about-style-four .lower-content .inner-box .inner-content .content-one .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #0c0d24;
  background: #fff;
  text-align: center;
  text-transform: uppercase;
  border-radius: 30px;
  padding: 12px 44px;
}

.about-style-four .lower-content .inner-box .inner-content .content-one .btn-box a:hover{
  transform: translateY(-5px);
}

.about-style-four .lower-content .inner-box .inner-content .content-one{
  position: relative;
  display: block;
  margin-bottom: 46px;
}

.about-style-four .lower-content .inner-box .inner-content .video-box{
  position: absolute;
  left: -50px;
  bottom: 40px;
}

.about-style-four .lower-content .inner-box .inner-content .video-box a {
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #4ed63c;
  width: 100px;
  height: 100px;
  line-height: 100px;
  text-align: center;
  background: #fff;
  border-radius: 50%;
  z-index: 1;
  -webkit-animation: pulse 5s infinite;
  -o-animation: pulse 5s infinite;
  animation: pulse 5s infinite;
}

.about-style-four .lower-content .inner-box .inner-content .content-two h2{
  margin-bottom: 2px;
}

.about-style-four .lower-content{
  position: relative;
  display: block;
  margin-top: -44px;
}


/** intro-style-two **/

.intro-style-two{
  position: relative;
  display: block;
  background: #fafbfd;
  padding: 100px 0px 50px 0px;
}

.intro-style-two:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-4.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
}

.intro-style-two .inner-box .single-item{
  position: relative;
  display: block;
  background: #fff;
  text-align: center;
  padding: 36px 30px 37px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  transition: all 500ms ease;
  margin-bottom: 30px;
}

.intro-style-two .inner-box .single-item:hover{
  background: #4ed63c;
}

.intro-style-two .inner-box .single-item .icon-box {
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  color: #000;
  font-weight: 500;
  margin-bottom: 1px;
  transition: all 500ms ease;
}

.intro-style-two .inner-box .single-item h2{
  position: relative;
  display: block;
  font-size: 36px;
  font-weight: 700;
  line-height: 45px;
  color: #0c0d24;
  margin-bottom: 16px;
  transition: all 500ms ease;
}

.intro-style-two .inner-box .single-column:last-child{
  padding-top: 90px;
}

.intro-style-two .inner-box .single-item .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #3c3c49;
  padding-top: 4px;
  border-top: 1px solid #192d66;
  transition: all 500ms ease;
}

.intro-style-two .inner-box .single-item:hover .icon-box,
.intro-style-two .inner-box .single-item:hover h2{
  color: #fff;
}

.intro-style-two .inner-box .single-item:hover .text{
  color: #e3f7e1;
  border-color: #e3f7e1;
}

.intro-style-two .content-box .partners-content .slide-item{
  position: relative;
  display: block;
  text-align: center;
  transition: all 500ms ease;
}

.intro-style-two .content-box .partners-content .slide-item img {
  display: block;
  max-width: 100%;
  width: auto;
  margin: 0 auto;
  opacity: 1;
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.intro-style-two .content-box .partners-content .slide-item:hover img{
  opacity: 0.5;
}

.intro-style-two .content-box .partners-content .owl-dots,
.intro-style-two .content-box .partners-content .owl-nav{
  display: none;
}

.intro-style-two .content-box{
  position: relative;
  display: block;
  margin-left: 40px;
}

.intro-style-two .content-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  font-weight: 700;
  line-height: 47px;
  color: #0c0d24;
  margin-bottom: 5px;
}

.intro-style-two .content-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #5c5c66;
  margin-bottom: 39px;
}

.intro-style-two .content-box .partners-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 31px;
  color: #0c0d24;
}

.intro-style-two .content-box .partners-content h3 a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  font-weight: 700;
  background: #4ed63c;
  text-align: center;
  line-height: 25px;
  padding: 0px 17px;
}

.intro-style-two .content-box .partners-content h3 a:hover{
  background: #192d66;
}

.intro-style-two .content-box .partners-content .partners-carousel{
  position: relative;
  display: block;
  margin: 13px 0px 36px 0px;
}

.intro-style-two .content-box{
  position: relative;
  display: block;
  margin-top: 10px;
}


/** project-style-five **/

.project-style-five{
  position: relative;
  display: block;
  padding: 63px 0px 0px;
  background: #19191d;
}

.project-tab .p-tab {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: auto;
  opacity: 0;
  visibility: hidden;
}

.project-tab .p-tab.active-tab {
  position: relative;
  visibility: visible;
  opacity: 1;
  z-index: 5;
}

.project-tab .p-tabs-content {
  position: relative;
  display: block;
}

.project-tab .p-tab.active-tab .project-block-five {
  -webkit-transform: scaleX(1);
  -ms-transform: scaleX(1);
  -o-transform: scaleX(1);
  -moz-transform: scaleX(1);
  transform: scaleX(1);
  -webkit-transition: all 700ms ease;
  -ms-transition: all 700ms ease;
  -o-transition: all 700ms ease;
  transition: all 700ms ease;
}

.project-tab .p-tab .project-block-five {
  position: relative;
  -webkit-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -o-transform: scaleX(0);
  -moz-transform: scaleX(0);
  transform: scaleX(0);
}

.project-style-five .top-content{
  position: relative;
  display: block;
  margin-bottom: 70px;
}

.project-style-five .top-content .title-box{
  position: relative;
  max-width: 500px;
  width: 100%;
  float: left;
}

.project-style-five .top-content .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #4ed63c;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.project-style-five .top-content .title-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 9px;
}

.project-style-five .top-content .title-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #dfdfdf
}

.project-style-five .top-content .tab-btn-box{
  position: relative;
  float: right;
}

.project-style-five .top-content .tab-btn-box .product-tab-btns{
  position: relative;
  display: block;
  margin-top: 95px;
}

.project-style-five .top-content .tab-btn-box .product-tab-btns li.active-btn, 
.project-style-five .top-content .tab-btn-box .product-tab-btns li:hover {
  background: #4ed63c;
}

.project-style-five .top-content .tab-btn-box .product-tab-btns li {
  position: relative;
  float: left;
  font-size: 16px;
  color: #fff;
  text-transform: uppercase;
  padding: 2px 10px;
  text-align: center;
  background: transparent;
  cursor: pointer;
  transition: all 500ms ease;
}

.project-block-five .inner-box{
  position: relative;
  display: block;
  text-align: center;
  overflow: hidden;
}

.project-block-five .inner-box .image-box{
  position: relative;
  display: block;
  background: #fff;
  overflow: hidden;
}

.project-block-five .inner-box img{
  width: 100%;
  transform: scale(1.0);
  -webkit-transition-delay: .3s;
  transition-delay: .3s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-duration: .6s;
  transition-duration: .6s;
  -webkit-transition-property: all;
  transition-property: all;
}

.project-block-five:hover .inner-box img{
  opacity: 0.5;
  transform: scale(1.2) rotate(0deg);
}

.project-style-five .owl-dots,
.project-style-five .owl-nav{
  display: none;
}

.project-block-five .inner-box .image-box:before{
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  right: 0px;
  box-shadow: inset 0px -140px 50px -40px rgba(0, 0, 0, 0.7);
  z-index: 1;
  transition: all 500ms ease;
}

.project-block-five .inner-box .content-box{
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  padding: 70px 60px 40px 60px;
  z-index: 1;
}

.project-block-five .inner-box .content-box h4{
  position: relative;
  display: inline-block;
  font-size: 20px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  transition: all 500ms ease;
}

.project-block-five .inner-box .content-box h4 a{
  position: relative;
  display: inline-block;
  color: #fff;
}

.project-block-five:hover .inner-box .content-box h4,
.project-block-five:hover .inner-box .content-box h4 a{
  color: #4ed63c;
}

.project-style-five .lower-content{
  position: relative;
  display: block;
  background: #4ed63c;
  padding: 40px 0px 44px 0px;
}

.project-style-five .lower-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
  max-width: 800px;
  width: 100%;
}

.project-style-five .lower-content .inner-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #0c0d24;
  text-transform: uppercase;
  text-align: center;
  background: #fff;
  border-radius: 30px;
  padding: 12px 40px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.project-style-five .lower-content .inner-box .btn-box a:hover{
  transform: translateY(-5px);
}

.project-style-five .lower-content .inner-box .btn-box{
  position: relative;
  margin-top: 10px;
}


/** energy-section **/

.energy-section{
  position: relative;
  display: block;
  padding: 120px 0px 50px 0px;
}

.energy-section .left-content{
  position: relative;
  display: block;
  margin-right: -35px;
  margin-top: 4px;
}

.energy-section .left-content .top-box .top-text{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  background: #4ed63c;
  padding: 2px 14px;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 6px;
  border-top-right-radius: 25px;
  border-bottom-right-radius: 25px;
}

.energy-section .left-content .top-box .sec-title h1{
  color: #0c0d24;
  line-height: 48px;
  margin-bottom: 7px;
}

.energy-section .left-content .top-box .text{
  position: relative;
  display: block;
  color: #3c3c49;
}

.energy-section .left-content .top-box{
  position: relative;
  display: block;
  margin-bottom: 28px;
}

.energy-section .left-content .inner-box{
  position: relative;
  display: inline-block;
  max-width: 425px;
  min-height: 425px;
  width: 100%;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
  padding: 100px 30px 60px 80px;
}

.energy-section .left-content .inner-box h1{
  position: relative;
  display: block;
  font-size: 72px;
  line-height: 70px;
  color: #0c0d24;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.energy-section .left-content .inner-box h1 span{
  font-size: 16px;
  font-weight: 400;
}

.energy-section .left-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}

.energy-section .left-content .inner-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-5.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  border-radius: 50%;
  animation-name: rotateme;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 60s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 60s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 60s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 60s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

.energy-section .right-content{
  position: relative;
  display: block;
  min-height: 640px;
}

.energy-section .right-content .image-box{
  position: relative;
  display: block;
  margin-left: 120px;
  background: #4ed63c;
  padding-bottom: 70px;
  margin-right: -377px;
}

.energy-section .right-content .image-box img{
  width: 100%;
}

.energy-section .right-content .inner-box{
  position: absolute;
  left: -130px;
  bottom: -37px;
  background: #fff;
  max-width: 550px;
  width: 100%;
  padding: 40px 30px 30px 30px;
}

.energy-section .right-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 35px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 13px;
}

.energy-section .right-content .inner-box .text p{
  position: relative;
  display: block;
  color: #3c3c49;
  margin-bottom: 7px;
}

.energy-section .right-content .inner-box .text p:last-child{
  margin-bottom: 0px;
}

.energy-section .right-content .inner-box .text{
  position: relative;
  display: block;
  margin-bottom: 8px;
}

.energy-section .right-content .inner-box a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  font-weight: 700;
  color: #4ed63c;
}

.energy-section .right-content .inner-box a:hover{
  color: #192d66;
}

.energy-section .right-content .inner-box a i{
  position: relative;
  top: 3px;
  margin-left: 8px;
}


/** testimonial-style-four **/

.testimonial-style-four{
  position: relative;
  display: block;
  padding: 45px 0px;
}

.testimonial-style-four .sec-title .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #4ed63c;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.testimonial-style-four .sec-title h1{
  color: #0c0d24;
}

.testimonial-style-four .sec-title{
  margin-bottom: 62px;
}

.testimonial-style-four .testimonial-content{
  position: relative;
  display: block;
  margin: 50px 0px 30px 0px;
}

.testimonial-style-four .testimonial-content .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 0px 30px 70px 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  transition: all 500ms ease;
}

.testimonial-style-four .testimonial-content .inner-box .author-info .author-thumb{
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 11px;
  margin-top: -50px;
}

.testimonial-style-four .testimonial-content .inner-box .author-info .author-thumb:before{
  position: absolute;
  left: -20px;
  bottom: 20px;
  content: "\f10b";
  font-family: 'Flaticon';
  font-size: 18px;
  color: #fff;
  background: #4ed63c;
  width: 35px;
  height: 35px;
  line-height: 42px;
  text-align: center;
  border-radius: 50%;
  z-index: 1;
}

.testimonial-style-four .testimonial-content .inner-box .author-info .author-thumb img{
  width: 100%;
  border-radius: 50%;
}

.testimonial-style-four .testimonial-content .inner-box .author-info h5{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 1px;
}

.testimonial-style-four .testimonial-content .inner-box .author-info{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.testimonial-style-four .testimonial-content .inner-box .author-info .designation{
  position: relative;
  display: block;
  font-size: 16px;
}

.testimonial-style-four .testimonial-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 22px;
  line-height: 32px;
  color: #0c0d24;
}

.testimonial-style-four .owl-nav{
  display: none;
}

.testimonial-style-four .owl-theme .owl-dots .owl-dot.active span{
  width: 16px;
  height: 16px;
  background: transparent;
  border: 4px solid #4ed63c;
  top: 3px;
}

.testimonial-style-four .owl-theme .owl-dots .owl-dot span{
  position: relative;
  background: #4ed63c;
  display: inline-block;
  margin: 0px 5px;
  transition: opacity 200ms ease 0s;
  border: none;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  cursor: pointer;
}


/** team-style-four **/

.team-style-four{
  position: relative;
  display: block;
  padding: 25px 0px 50px 0px;
}

.team-block-four .inner-box{
  position: relative;
  display: block;
  overflow: hidden;
}

.team-block-four .inner-box .image-box {
  position: relative;
  display: block;
  background: #4ed63c;
  clip-path: polygon(0% 7%, 100% 0%, 100% 100%, 0% 100%, 0% 0%);
}

.team-style-four .team-block:nth-child(2) .team-block-four .inner-box .image-box{
  clip-path: polygon(0% 0%, 100% 7%, 100% 100%, 0% 100%, 0% 0%);
}

.team-block-four .inner-box .image-box img{
  display: block;
  width: 100%;
  transition: all 500ms ease;
}

.team-block-four:hover .inner-box .image-box img{
  opacity: 0.5;
  transform: scale(1.1);
}

.team-block-four .inner-box .content-box{
  position: absolute;
  left: 10px;
  bottom: 10px;
  width: calc(100% - 20px);
  background: #4ed63c;
  text-align: center;
  padding: 25px 15px 25px 15px;
  clip-path: polygon(0% 0%, 100% 12%, 100% 100%, 0% 88%, 0% 0%);
  transform: scale(0,0);
  transition: all 500ms ease;
}

.team-block-four:hover .inner-box .content-box{
  transform: scale(1,1);
}

.team-block-four .inner-box .content-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 30px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 0px;
}

.team-block-four .inner-box .content-box h4 a{
  position: relative;
  display: inline-block;
  color: #fff;
}

.team-block-four .inner-box .content-box .designation{
  position: relative;
  display: block;
  font-size: 16px;
  color: #e3f7e1;
}

.news-style-three.home-5{
  position: relative;
  padding-bottom: 100px;
}

.news-style-three.home-5 .top-content .inner-content{
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  margin-top: 8px;
  background-size: cover;
  background-repeat: no-repeat;
  padding: 125px 30px 37px 30px;
  box-shadow: inset 0px -150px 50px -40px rgba(86, 86, 86, 0.7);
}

.news-style-three.home-5 .top-content .inner-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  line-height: 32px;
}

.news-style-three.home-5 .top-content .title-box{
  margin-top: 0px;
}

.news-style-three.home-5 .top-content .title-box .top-text{
  color: #4ed63c;
}

.news-style-three.home-5 .top-content{
  position: relative;
  display: block;
  margin-bottom: 38px;
}

.news-style-three.home-5 .news-block-two .inner-box h4 a:hover,
.news-style-three.home-5 .news-block-two .inner-box .link-btn a:hover,
.news-style-three.home-5 .title-box .link-btn a:hover{
  color: #4ed63c;
}

.news-style-three.home-5 .title-box .link-btn a:hover{
  border-color: #4ed63c;
}

.subscribe-style-two.home-5{
  background: #4ed63c;
}

.subscribe-style-two.home-5 .right-content{
  margin: 0px;
}

.subscribe-style-two.home-5 .right-content .inner-box{
  position: relative;
  top: 0px;
  background: transparent;
  padding: 62px 100px 37px 0px;
}

.subscribe-style-two.home-5 .right-content .inner-box .video-box a{
  background: #69e658;
}

.subscribe-style-two.home-5 .inner-column .inner-box{
  position: relative;
  display: block;
  padding: 64px 170px 30px 15px;
  z-index: 1;
}

.subscribe-style-two.home-5 .inner-column .inner-box:before{
  position: absolute;
  content: '';
  background: #4ed63c;
  width: 50000%;
  height: 100%;
  left: -45px;
  top: 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.subscribe-style-two.home-5 .inner-column .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 5px;
}

.subscribe-style-two.home-5 .inner-column .inner-box .text{
  position: relative;
  display: block;
  color: #fff;
  margin-bottom: 30px;
}

.subscribe-style-two.home-5 .inner-column .inner-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  color: #fff;
  line-height: 28px;
  margin-bottom: 14px;
}

.subscribe-style-two.home-5 .inner-column .inner-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  border: 2px solid #fff;
  padding: 9.5px 40px;
}

.subscribe-style-two.home-5 .inner-column .inner-box .btn-box a i{
  font-size: 20px;
  position: relative;
  top: 4px;
  margin-left: 20px;
}

.subscribe-style-two.home-5 .inner-column .inner-box .btn-box a:hover{
  background: #fff;
  color: #4ed63c;
}

.main-footer.style-four.home-5:before{
  background: url(../images/icons/footer-icon-6.png);
  background-position: center;
  background-repeat: no-repeat;
}

.main-footer.style-four.home-5 .footer-top{
  padding-top: 100px;
}

.main-footer.style-four.home-5 .footer-bottom .footer-social li a:hover {
  color: #4ed63c;
}

.main-footer.style-four.home-5 .footer-top .links-widget .widget-content ul li a:hover{
  color: #4ed63c;
}



/*** 

====================================================================
                        Home-Page-Six
====================================================================

***/

/** header-style-six **/

.main-header.style-six{
  position: relative;
}

.main-header.style-six .header-top{
  background: #fff;
}

.main-header.style-six .header-top .header-info li a,
.main-header.style-six .header-top .header-nav li, 
.main-header.style-six .header-top .header-nav li a, 
.main-header.style-six .header-top .header-nav .language a:hover,
.main-header.style-six .header-top .header-nav li.phone i{
  color: #5d5d66;
}

.main-header.style-six .header-top .header-info li a:hover,
.main-header.style-six .header-top .header-nav li a:hover{
  color: #fc9a36;
}

.main-header.style-six .header-top .header-nav .language .dropdown-toggle{
  border-color: #e7e7e7;
}

.main-header.style-six .header-upper{
  background: #fff;
  padding: 0px;
  box-shadow: 0px -10px 10px rgba(0, 0, 0, 0.05);
}

.main-header.style-six .header-upper .left-content{
  position: relative;
  padding: 32px 0px 22px 0px;
}

.main-header.style-six .header-upper .right-content{
  padding: 16px 0px 15px 0px;
}

.main-header.style-six .header-upper .inner-container{
  position: relative;
  display: block;
  border-bottom: 1px solid #e1e2e3;
}

.main-header.style-six .header-upper .info-box,
.main-header.style-six .header-upper .btn-box{
  position: relative;
  display: inline-block;
}

.main-header.style-six .header-upper .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fc9a36;
  text-align: center;
  padding: 24px 51px;
}

.main-header.style-six .header-upper .btn-box a:hover{
  background: #f78613;
}

.main-header.style-six .header-upper .info-box{
  position: relative;
  padding: 0px 30px 0px 55px;
  top: 15px;
}

.main-header.style-six .header-upper .info-box .icon-box{
  position: absolute;
  left: 0px;
  top: 2px;
  font-size: 45px;
  line-height: 45px;
  color: #000;
}

.main-header.style-six .header-upper .info-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 30px;
  color: #000;
  font-weight: 700;
}

.main-header.style-six .header-upper .info-box h3 a{
  color: #000;
  font-size: 24px;
}

.main-header.style-six .header-upper .info-box h3 a:hover{
  color: #fc9a36;
}

.main-header.style-six .header-upper .info-box .text{
  position: relative;
  display: block;
  font-size: 15px;
  line-height: 22px;
  color: #77787f;
}

.main-header.style-six .header-bottom .outer-container .nav-outer{
  position: relative;
  top: 0px;
  box-shadow: none;
  padding: 0px;
}

.main-header.style-six .header-bottom .outer-container .nav-outer:before{
  display: none;
}

.main-header.style-six .header-bottom .info-box .social-links li{
  margin: 0px 3px;
}

.main-header.style-six .header-bottom .info-box .social-links li a{
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid #ececec;
  border-radius: 50%;
  font-size: 15px;
  color: #0c0d24;
}

.main-header.style-six .header-bottom .info-box .social-links li a:hover{
  border-color: #fc9a36;
  color: #fc9a36;
}

.main-header.style-six .header-bottom .info-box .search-box{
  margin-left: 20px;
}

.main-header.style-six .header-bottom .info-box .shop-cart span{
  background: #fc9a36;
}

.main-header.style-six .header-bottom .info-box .shop-cart a:hover,
.main-header.style-six .header-bottom .info-box .search-box .header-flyout-searchbar i:hover{
  color: #fc9a36;
}

.main-header.style-six .main-menu .navigation > li > a{
  padding: 26px 0px;
}

.main-header.style-six .header-bottom .info-box .social-links{
  margin-top: 15px;
}

.main-header.style-six .header-bottom .info-box .shop-cart{
  margin-right: 0px;
}

.main-header.style-six .header-bottom .info-box .shop-cart a{
  padding-right: 0px;
}

.main-header.style-six .header-bottom{
  background: #fff;
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.05);
}


/** slider-style-six **/

.slider-style-six{
  position: relative;
}

.slider-style-six .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #fff;
  color: #0c0d24;
  border-radius: 0px;
  text-align: center;
  padding: 17px 45px;
  text-transform: uppercase;
}

.slider-style-six .content-box .btn-box a.btn-one{
  margin-right: 15px;
}

.slider-style-six .content-box .btn-box a.btn-two,
.slider-style-six .content-box .btn-box a.btn-one:hover{
  color: #fff;
  background: #fc9a36;
}

.slider-style-six .content-box .btn-box a.btn-two:hover{
  background: #fff;
  color: #0c0d24;
}

.slider-style-six .slide {
  padding: 230px 0px 210px 0px;
}

.slider-style-six .slide:before{
  position: absolute;
  content: '';
  background: rgba(255, 255, 255, 0.65);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.slider-style-six .owl-dots {
  position: absolute;
  left: 370px;
  top: 100%;
  transform: translateY(-50px);
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-six .owl-theme .owl-dots .owl-dot{
  display: inline-block;
}

.slider-style-six .owl-theme .owl-dots .owl-dot span{
  position: relative;
  width: 10px;
  height: 10px;
  background: #fc9a36;
  border-radius: 50%;
  margin: 0px 5px;
}

.slider-style-six .owl-theme .owl-dots .owl-dot.active span,
.slider-style-six .owl-theme .owl-dots .owl-dot span:hover{
  width: 17px;
  height: 17px;
  background: transparent;
  border: 3px solid #fc9a36;
  top: 3px;
}


/** service-style-four **/

.service-style-four{
  position: relative;
  display: block;
  padding: 95px 0px 100px 0px;
}

.service-style-four .title-box{
  position: relative;
  max-width: 750px;
  width: 100%;
  margin: 0 auto;
  margin-bottom: 62px;
}

.service-style-four .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #fc9a36;
  margin-bottom: 10px;
}

.service-style-four .title-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 23px;
}

.service-style-four .title-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
}

.service-block-four .inner-box{
  position: relative;
  display: block;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 48px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.service-block-four .inner-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 65px;
  line-height: 65px;
  color: #fc9a36;
  margin-bottom: 22px;
}

.service-block-four .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 9px;
}

.service-block-four .inner-box h3 a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.service-block-four .inner-box h3 a:hover{
  color: #fc9a36;
}

.service-block-four .inner-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  margin-bottom: 24px;
}

.service-block-four .inner-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #0c0d24;
  line-height: 26px;
  border: 1px solid #e9e9e9;
  padding: 6px 35px;
  text-align: center;
}

.service-block-four .inner-box .btn-box a:hover{
  color: #fff;
  background: #fc9a36;
  border-color: #fc9a36;
}

.service-block-four .inner-box .left-layer {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 50%;
  height: 100%;
  display: block;
}

.service-block-four .inner-box .right-layer {
  position: absolute;
  right: 0px;
  top: 0px;
  width: 50%;
  height: 100%;
  display: block;
}

.service-block-four .inner-box .left-layer:before {
  position: absolute;
  content: '';
  left: 0px;
  top: 0px;
  width: 50%;
  height: 0%;
  display: block;
  background-color: #f4f4f4;
  -webkit-transition: all 600ms ease;
  -ms-transition: all 600ms ease;
  -o-transition: all 600ms ease;
  -moz-transition: all 600ms ease;
  transition: all 600ms ease;
}

.service-block-four .inner-box .left-layer:after {
  position: absolute;
  content: '';
  right: 0px;
  bottom: 0px;
  width: 50%;
  height: 0%;
  display: block;
  background-color: #f4f4f4;
  -webkit-transition: all 600ms ease;
  -ms-transition: all 600ms ease;
  -o-transition: all 600ms ease;
  -moz-transition: all 600ms ease;
  transition: all 600ms ease;
}

.service-block-four .inner-box .right-layer:before {
  position: absolute;
  content: '';
  left: 0px;
  top: 0px;
  width: 50%;
  height: 0%;
  display: block;
  background-color: #f4f4f4;
  -webkit-transition: all 600ms ease;
  -ms-transition: all 600ms ease;
  -o-transition: all 600ms ease;
  -moz-transition: all 600ms ease;
  transition: all 600ms ease;
}

.service-block-four .inner-box .right-layer:after {
  position: absolute;
  content: '';
  right: 0px;
  bottom: 0px;
  width: 50%;
  height: 0%;
  display: block;
  background-color: #f4f4f4;
  -webkit-transition: all 600ms ease;
  -ms-transition: all 600ms ease;
  -o-transition: all 600ms ease;
  -moz-transition: all 600ms ease;
  transition: all 600ms ease;
}

.service-block-four:hover .inner-box .left-layer:before, 
.service-block-four:hover .inner-box .left-layer:after {
  height: 100%;
}

.service-block-four:hover .inner-box .right-layer:before, 
.service-block-four:hover .inner-box .right-layer:after {
  height: 100%;
}

.intro-style-two.home-6 .content-box .top-title{
  color: #fc9a36;
  margin-bottom: 0px;
}

.intro-style-two.home-6 .content-box .partners-content h3 a{
  background: #fc9a36;
}

.intro-style-two.home-6 .content-box .partners-content h3 a:hover{
  background: #192d66;
}

.intro-style-two.home-6 .content-box{
  margin: 0px 70px 0px 0px;
}

/** select-box **/

.select-box .ui-state-default {
  position: relative;
  display: block;
  background: #ffffff;
  border: 1px solid #e9e9e9 !important;
  border: none;
  border-radius: 10px;
  color: #666666;
  font-size: 16px;
  font-weight: 400;
  height: 55px;
  outline: medium none;
  width: 100%;
  cursor: pointer;
}

.select-box .ui-selectmenu-button span.ui-icon {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  display: block;
  width: 60px;
  height: 48px;
  text-indent: 0;
  margin: 0;
}

.select-box .ui-selectmenu-button span.ui-icon::before {
  color: #545565;
  content: "\f107";
  font-family: 'Font Awesome 5 Free';
  font-weight: 700;
  font-size: 17px;
  overflow: visible;
  position: absolute;
  right: 21px;
  top: 12px;
  transition: all 500ms ease;
}

.select-box .ui-selectmenu-button:hover span.ui-icon::before{
  color: #fd571c;
}

.select-box .ui-state-default {
  width: 100% !important;
}

.ui-selectmenu-open .ui-widget-content {
  border: none;
  background: #ffffff;
  color: #222222;
  border-radius: 10px;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.10);
}

.ui-selectmenu-open .ui-widget-content .ui-state-focus {
  border: none;
  background: #fd571c;
  font-weight: normal;
  color: #ffffff;
}

.ui-selectmenu-open .ui-menu .ui-menu-item {
  border-bottom: 1px solid #efebea;
  position: relative;
  margin: 0;
  padding: 15px 15px;
  cursor: pointer;
  text-align: center;
  font-size: 15px;
  font-weight: 400;
  text-transform: none;
  transition: all 500ms ease;
}

.ui-selectmenu-open .ui-menu .ui-menu-item:last-child{
  border-bottom: none;
}

.select-box .ui-selectmenu-button span.ui-selectmenu-text {
  display: block;
  line-height: 18px;
  overflow: hidden;
  padding: 19px 19px;
  height: 55px;
  text-align: left;
  margin-right: 0px;
}

.ui-selectmenu-menu .ui-menu{
  transform: scaleY(0);
  transform-origin: top center;
  transition: .4s ease;
  transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
}

.ui-selectmenu-open .ui-menu{
  transform: scaleY(1);
  top: 100%;
}

.ui-selectmenu-menu{
  transform: scaleY(0);
  transform-origin: top center;
  display: block;
}

.ui-selectmenu-open{
  transform: scaleY(1);
}

.intro-style-two.home-6 .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 56px 35px 87px 35px;
  margin-right: 70px;
  margin-top: 9px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.intro-style-two.home-6 .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 16px;
}

.intro-style-two.home-6 .inner-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  margin-bottom: 24px;
}

.intro-style-two.home-6 .inner-box .signup-form .form-group{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.intro-style-two.home-6 .inner-box .signup-form .form-group:last-child{
  margin-bottom: 0px;
}

.intro-style-two.home-6 .inner-box .signup-form .form-group input[type='email']{
  position: relative;
  width: 100%;
  height: 55px;
  border: 1px solid #e9e9e9;
  border-radius: 10px;
  color: #666666;
  font-size: 16px;
  padding: 10px 15px;
  transition: all 500ms ease;
}

.intro-style-two.home-6 .inner-box .signup-form .form-group input:focus{
  border-color: #fc9a36;
}

.intro-style-two.home-6 .inner-box .signup-form .message-btn button{
  position: relative;
  width: 100%;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fc9a36;
  text-align: center;
  padding: 14.5px 30px;
  border-radius: 10px;
  cursor: pointer;
  transition: all 500ms ease;
}

.intro-style-two.home-6 .inner-box .signup-form .message-btn button:hover{
  background: #f9850f;
}

.intro-style-two.home-6{
  padding: 60px 0px 70px 0px;
}


/** shop-section **/

.shop-section{
  position: relative;
  display: block;
  background: #fdfbf9;
  padding: 65px 0px 100px 0px;
}

.shop-section:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-6.png);
  width: 100%;
  height: 475px;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
}

.shop-section .title-box .top-text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #fc9a36;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.shop-section .title-box h1 {
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 9px;
}

.shop-section .title-box p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #5b5b63;
}

.shop-section .title-box{
  position: relative;
  display: block;
  margin-bottom: 35px;
}

.shop-block-one{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.shop-block-one .inner-box{
  position: relative;
  display: block;
}

.shop-block-one .inner-box .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #fff;
}

.shop-block-one .inner-box .image-box:before{
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  right: 0px;
  box-shadow: inset 0px -140px 50px -40px rgba(0, 0, 0, 0.7);
  z-index: 1;
  transition: all 500ms ease;
}

.shop-block-one .inner-box .image-box img {
  width: 100%;
  transform: scale(1.0);
  -webkit-transition-delay: .3s;
  transition-delay: .3s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-duration: .6s;
  transition-duration: .6s;
  -webkit-transition-property: all;
  transition-property: all;
}

.shop-block-one:hover .inner-box .image-box img {
  opacity: 0.5;
  transform: scale(1.1);
}

.shop-block-one .inner-box .content-box{
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  text-align: center;
  padding: 50px 15px;
  z-index: 2;
}

.shop-block-one .inner-box .content-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 24px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
}

.shop-block-one .inner-box .content-box h4 a{
  position: relative;
  display: inline-block;
  line-height: 24px;
  color: #fff;
}

.shop-block-one .inner-box .content-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 24px;
  color: #fff;
}

.shop-block-one .inner-box .content-box h4 a:hover{
  color: #fc9a36;
}


/** industries-section **/

.industries-section{
  position: relative;
  display: block;
  padding: 80px 0px 0px;
  margin-bottom: -130px;
  z-index: 1;
}

.industries-section .content-box .top-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #000;
  font-weight: 700;
  margin-bottom: 5px;
}

.industries-section .content-box .top-box .text p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  margin-bottom: 8px;
}

.industries-section .content-box .top-box .text p:last-child{
  margin-bottom: 0px;
}

.industries-section .content-box .top-box .text{
  position: relative;
  display: block;
  margin-bottom: 22px;
}

.industries-section .content-box .top-box .list-text li{
  position: relative;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #5d5d66;
  padding: 0px 0px 0px 20px;
}

.industries-section .content-box .top-box .list-text li:before{
  position: absolute;
  content: "\f0da";
  font-family: 'Font Awesome 5 Free';
  font-size: 16px;
  color: #3d3d50;
  font-weight: 700;
  left: 0px;
  top: 1px;
}

.industries-section .content-box .top-box{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.industries-section .content-box .lower-box{
  position: absolute;
  left: 0px;
  bottom: 3px;
  background: #fc9a36;
  padding: 31px 30px 45px 40px;
  min-width: 675px;
  width: 100%;
  z-index: 1;
}

.industries-section .content-box{
  position: relative;
  display: block;
  min-height: 580px;
}

.industries-section .image-box{
  position: relative;
  display: block;
  margin-top: 9px;
}

.industries-section .image-box img{
  width: 100%;
}

.industries-section .content-box .lower-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #fff;
  font-weight: 700;
}

.industries-section .content-box .lower-box a{
  position: absolute;
  right: 30px;
  bottom: 15px;
  font-size: 16px;
  color: #fff;
  font-weight: 700;
  border-bottom: 1px solid #fff;
}

.industries-section .content-box .lower-box a:hover{
  color: #192d66;
  border-color: #192d66;
}


/** fact-counter **/

.fact-counter{
  position: relative;
  display: block;
  background: #d7f0fd;
  padding-top: 210px;
}

.fact-counter .inner-container{
  position: relative;
  display: block;
  margin-bottom: -110px;
  z-index: 1;
}

.counter-block-two .inner-box{
  position: relative;
  display: block;
  background: #fff;
  text-align: center;
  padding: 40px 30px 30px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  z-index: 1;
  transition: all 500ms ease;
}

.counter-block-two .inner-box:hover{
  background: #fd571c;
}

.counter-block-two .inner-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 65px;
  line-height: 50px;
  color: #000;
  transition: all 500ms ease;
}

.counter-block-two .inner-box .count-outer span{
  position: relative;
  display: inline-block;
  font-size: 36px;
  line-height: 45px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 16px;
  transition: all 500ms ease;
}

.counter-block-two:hover .inner-box .icon-box,
.counter-block-two:hover .inner-box .count-outer span,
.counter-block-two:hover .inner-box .text{
  color: #fff;
}

.counter-block-two:hover .inner-box .text{
  border-color: rgba(255, 255, 255, 0.5);
}

.counter-block-two .inner-box .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #3c3c49;
  padding-top: 4px;
  border-top: 1px solid #192d66;
  transition: all 500ms ease;
}


/** testimonial-style-five **/

.testimonial-style-five{
  position: relative;
  background: #fff;
  padding: 183px 0px 50px 0px;
}

.testimonial-style-five .sec-title .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fc9a36;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.testimonial-style-five .sec-title h1{
  color: #0c0d24;
}

.testimonial-style-five .sec-title{
  margin-bottom: 53px;
}

.testimonial-style-five .testimonial-content{
  position: relative;
  margin: 50px 0px 30px 0px;
}

.testimonial-style-five .testimonial-content .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 0px 30px 40px 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.testimonial-style-five .testimonial-content .inner-box .author-info .author-thumb {
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 11px;
  margin-top: -50px;
}

.testimonial-style-five .testimonial-content .inner-box .author-info .author-thumb img{
  width: 100%;
  border-radius: 50%;
}

.testimonial-style-five .testimonial-content .inner-box .author-info .author-thumb:before {
  position: absolute;
  left: -20px;
  bottom: 20px;
  content: "\f10b";
  font-family: 'Flaticon';
  font-size: 18px;
  color: #fff;
  background: #fc9a36;
  width: 35px;
  height: 35px;
  line-height: 42px;
  text-align: center;
  border-radius: 50%;
  z-index: 1;
}

.testimonial-style-five .testimonial-content .inner-box .author-info h5{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 1px;
}

.testimonial-style-five .testimonial-content .inner-box .author-info .designation {
  position: relative;
  display: block;
  font-size: 16px;
}

.testimonial-style-five .testimonial-content .inner-box .text{
  position: relative;
  display: block;
  color: #0c0d24;
}

.testimonial-style-five .testimonial-content .inner-box .author-info{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.testimonial-style-five .owl-nav{
  display: none;
}

.testimonial-style-five .owl-theme .owl-dots .owl-dot span {
  position: relative;
  width: 10px;
  height: 10px;
  background: #fc9a36;
  border-radius: 50%;
  margin: 0px 5px;
  transition: all 500ms ease;
  cursor: pointer;
}

.testimonial-style-five .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-five .owl-theme .owl-dots .owl-dot span:hover {
  width: 17px;
  height: 17px;
  background: transparent;
  border: 3px solid #fc9a36;
  top: 3px;
}


/** news-style-four **/

.news-style-four{
  position: relative;
  display: block;
  padding: 12px 0px 100px 0px;
}

.news-style-four .sec-title .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fc9a36;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.news-style-four .sec-title h1{
  color: #0c0d24;
}

.news-style-four .sec-title{
  margin-bottom: 48px;
}

.news-block-three .inner-box{
  padding: 0px;
  overflow: hidden;
}

.news-block-three .inner-box:hover{
  transform: translateY(0px);
}

.news-block-three .inner-box .image-box{
  position: relative;
  display: block;
  background: #192d66;
  overflow: hidden;
}

.news-block-three .inner-box .image-box img{
  width: 100%;
  transition: all 1500ms ease;
}

.news-block-three:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.1);
}

.news-block-three .inner-box .lower-content{
  position: relative;
  display: block;
  padding: 33px 15px 37px 30px;
}


/** footer-style-five **/

.main-footer.style-five{
  position: relative;
  background-color: #fffaf5;
}

.main-footer.style-five:before,
.main-footer.style-five:after{
  display: none;
}

.main-footer.style-five .widget-section .footer-widget{
  position: relative;
  float: left;
  width: 20%;
}

.main-footer.style-five .widget-section .contact-widget .widget-content .text{
  position: relative;
  display: block;
  color: #44434e;
  margin-bottom: 20px;
}

.main-footer.style-five .widget-section .contact-widget .widget-content .info-list li{
  position: relative;
  display: block;
  color: #44434e;
}

.main-footer.style-five .widget-section .contact-widget .widget-content .info-list li a,
.main-footer.style-five .footer-top .links-widget .widget-content ul li a{
  color: #44434e;
}

.main-footer.style-five .widget-section .contact-widget .widget-content .info-list li a:hover,
.main-footer.style-five .footer-top .links-widget .widget-content ul li a:hover{
  color: #fc9a36;
}

.main-footer.style-five .widget-title{
  color: #0c0d24;
}

.main-footer.style-five .footer-top .company-widget{
  margin: 0px;
}

.main-footer.style-five .widget-section .social-widget .social-links li{
  position: relative;
  display: inline-block;
  margin-right: 20px;
}

.main-footer.style-five .widget-section .social-widget .social-links li:last-child{
  margin-right: 0px;
}

.main-footer.style-five .widget-section .social-widget .social-links li a{
  position: relative;
  display: inline-block;
  font-size: 17px;
  color: #0c0d24;
}

.main-footer.style-five .widget-section .social-widget .social-links li a:hover{
  color: #fc9a36;
}

.main-footer.style-five .widget-section .social-widget .widget-title{
  margin-bottom: 29px;
}

.main-footer.style-five .footer-bottom{
  padding: 24px 0px;
}

.main-footer.style-five .footer-bottom .copyright{
  margin-top: 13px;
}

.main-footer.style-five .footer-top{
  padding: 80px 0px 45px 0px;
}



/*** 

====================================================================
                        Home-Page-Seven
====================================================================

***/


/** header-style-seven **/

.main-header.style-seven{
  position: relative;
}

.main-header.style-seven .header-upper,
.main-header.style-seven .header-bottom{
  background: #fff;
}

.main-header.style-seven .header-upper{
  padding: 0px;
}

.main-header.style-seven .header-upper .inner-container{
  position: relative;
  padding: 33px 0px 15px 0px;
  border-bottom: 1px solid #e1e2e3;
}

.main-header.style-seven .header-upper .inner-container .logo-box{
  top: 0px;
}

.main-header.style-seven .header-bottom .outer-container .nav-outer{
  position: relative;
  top: 0px;
}

.main-header.style-seven .main-menu .navigation > li.current > a, 
.main-header.style-seven .main-menu .navigation > li:hover > a{
  color: #ff5e85;
}

.main-header.style-seven .header-upper .right-content .social-list{
  position: relative;
  display: inline-block;
  top: -10px;
  margin-right: 40px;
}

.main-header.style-seven .header-upper .right-content .social-list li{
  position: relative;
  display: inline-block;
  margin-right: 7px;
}

.main-header.style-seven .header-upper .right-content .social-list li:last-child{
  margin-right: 0px;
}

.main-header.style-seven .header-upper .right-content .social-list li a{
  position: relative;
  display: inline-block;
  font-size: 15px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  border: 1px solid #ededed;
  color: #0c0d24;
  text-align: center;
  border-radius: 50%;
}

.main-header.style-seven .header-upper .right-content .social-list li a:hover{
  color: #ff5e85;
  border-color: #ff5e85;
}

.main-header.style-seven .header-upper .right-content .info-box .icon-box{
  color: #000;
  transition: all 500ms ease;
}

.main-header.style-seven .header-upper .right-content .info-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 26px;
  font-weight: 700;
  color: #0c0d24;
}

.main-header.style-seven .header-upper .right-content .info-box h3 a{
  position: relative;
  display: inline-block;
  font-size: 24px;
  line-height: 26px;
  font-weight: 700;
  color: #0c0d24;
}

.main-header.style-seven .header-upper .right-content .info-box h3 a:hover{
  color: #ff5e85;
}

.main-header.style-seven .header-upper .right-content .info-box .text{
  position: relative;
  display: block;
  font-size: 15px;
  color: #77787f;
}

.main-header.style-seven .header-upper .right-content .info-box{
  margin-left: 15px;
}

.main-header.style-seven .header-upper .right-content .info-box:hover .icon-box {
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -ms-transform: scale(2);
  -o-transform: scale(2);
  transform: scale(2);
  left: 50%;
  opacity: .10;
}

.main-header.style-seven .header-bottom .info-box{
  padding: 0px;
}

.main-header.style-seven .header-bottom .info-box .btn-box{
  position: relative;
  float: left;
}

.main-header.style-seven .header-bottom .info-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #ff5e85;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 24px 42.5px;
}

.main-header.style-seven .header-bottom .info-box .btn-box a i{
  margin-left: 8px;
  font-size: 13px;
  transition: all 500ms ease;
}

.main-header.style-seven .header-bottom .info-box .btn-box a:hover i{
  transform: rotate(360deg);
}

.main-header.style-seven .header-bottom .info-box .shop-cart a {
  background: transparent;
  font-weight: 600;
}

.main-header.style-seven .header-bottom .info-box .shop-cart a:hover{
  color: #ff5e85;
}

.main-header.style-seven .header-bottom .info-box .shop-cart span {
  background: #ff5e85;
  color: #fff;
  margin-left: -7px;
  top: -8px;
}

.main-header.style-seven .header-bottom .info-box .shop-cart:before{
  display: none;
}

.main-header.style-seven .header-bottom .info-box .shop-cart:after {
  position: absolute;
  content: '';
  background: #e1e2e3;
  height: 100%;
  width: 1px;
  top: 0px;
  left: -3px;
}

.main-header.style-seven .header-bottom .info-box .shop-cart {
  margin: 19px 11px 0px 14px;
  padding-right: 0px;
}

.main-header.style-seven .header-bottom .info-box .search-box{
  margin-top: 25px;
}

/** sidebar **/

.main-header.style-seven .header-bottom .nav-box{
  position:relative;
  float: left;
  width:28px;
  color:#ffffff;
  font-size:28px;
  cursor:pointer;
  margin-right:45px;
  padding:24px 0px 23px;
  -webkit-transition:all 600ms ease;
  -moz-transition:all 600ms ease;
  -ms-transition:all 600ms ease;
  -o-transition:all 600ms ease;
  transition:all 600ms ease;
}

.main-header.style-seven .header-bottom .nav-box .nav-btn{
  position:relative;
}

.main-header.style-seven .header-bottom .nav-btn .icon{
  position:relative;
  height:2px;
  width:28px;
  float:right;
  display:inline-block;
  margin-bottom:7px;
  background-color:#ff5e85;
  -webkit-transition:all 300ms ease;
  -moz-transition:all 300ms ease;
  -ms-transition:all 300ms ease;
  -o-transition:all 300ms ease;
  transition:all 300ms ease;
}

.main-header.style-seven .header-bottom .nav-btn .icon:nth-child(2){
  width: 23px;
}

.main-header.style-seven .header-bottom .nav-btn:hover .icon:nth-child(2){
  width: 28px;
}

.xs-sidebar-group .xs-overlay{
  left:0%;
  top:0;
  position:fixed;
  height:100%;
  opacity:0;
  width:100%;
  visibility:hidden;
  -webkit-transition:all .4s ease-in .8s;
  -o-transition:all .4s ease-in .8s;
  transition:all .4s ease-in .8s;
  cursor:url(../images/icons/cross-out.png),
  pointer; 
  z-index: 999999;
}

.xs-sidebar-group.isActive .xs-overlay{
  opacity:.9;
  visibility:visible;
  -webkit-transition:all .8s ease-out 0s;
  -o-transition:all .8s ease-out 0s;
  transition:all .8s ease-out 0s;
  right:100%;
}

.xs-sidebar-group .widget-heading{
  position:absolute;
  top:0;
  right:0;
  padding:25px;
}

.xs-sidebar-widget{
  position:fixed;
  left:-100%;
  top:0;
  bottom:0;
  width:100%;
  max-width:360px;
  z-index:999999;
  overflow:hidden;
  overflow-y:auto;
  -webkit-overflow-scrolling:touch;
  background-color:#272727;
  -webkit-transition:all 0.5s cubic-bezier(0.9, 0.03, 0, 0.96) 0.6s;
  -o-transition:all 0.5s cubic-bezier(0.9, 0.03, 0, 0.96) 0.6s;
  transition:all 0.5s cubic-bezier(0.9, 0.03, 0, 0.96) 0.6s;
  visibility:hidden;
  opacity:0;
}

.xs-sidebar-group.isActive .xs-sidebar-widget{
  opacity:1;
  visibility:visible;
  left:0;
  -webkit-transition:all 0.7s cubic-bezier(0.9, 0.03, 0, 0.96) 0.4s;
  -o-transition:all 0.7s cubic-bezier(0.9, 0.03, 0, 0.96) 0.4s;
  transition:all 0.7s cubic-bezier(0.9, 0.03, 0, 0.96) 0.4s;
}

.sidebar-textwidget{
  padding:40px;
}

.close-side-widget{
  color:#1768dd;
  display:block;
}

.sidebar-widget-container{
  position:relative;
  top:150px;
  opacity:0;
  visibility:hidden;
  -webkit-transition:all .3s ease-in .3s;
  -o-transition:all .3s ease-in .3s;
  transition:all .3s ease-in .3s;
  -webkit-backface-visibility:hidden;
  backface-visibility:hidden;
}

.xs-sidebar-group.isActive .sidebar-widget-container{
  top:0px;
  opacity:1;
  visibility:visible;
  -webkit-transition:all 1s ease-out 1.2s;
  -o-transition:all 1s ease-out 1.2s;
  transition:all 1s ease-out 1.2s;
  -webkit-backface-visibility:hidden;
  backface-visibility:hidden;
}

.xs-overlay{
  position:absolute;
  top:0;
  left:0;
  height:100%;
  width:100%;
  opacity:.5;
  z-index:0;
}

.xs-bg-black{
  background-color:#000000;
}

.xs-menu-tools>li{
  display:inline-block;
  margin-right:15px;
}

.xs-menu-tools>li:last-child{
  margin-right:0;
}

.xs-menu-tools>li>a{
  color:#000000;
  text-decoration:none;
}

.sidebar-info-contents{
  position:relative;
}

.close-side-widget{
  position:relative;
  color:#ffffff;
  font-size:24px;
  -webkit-transition:all 0.5s ease;
  -moz-transition:all 0.5s ease;
  -ms-transition:all 0.5s ease;
  -o-transition:all 0.5s ease;
  transition:all 0.5s ease;
}

.close-side-widget:hover{
  color:#ff5e85;
}

.sidebar-info-contents .content-inner{
  position:relative;
}

.sidebar-info-contents .content-inner .logo {
  padding:0px 0px 40px;
}

.sidebar-info-contents .content-inner .logo img{
  display:inline-block;
  max-width:100%; 
}

.sidebar-info-contents .content-inner .content-box{
  position:relative;
}

.sidebar-info-contents .content-inner .content-box h4{
  position:relative;
  font-size:20px;
  color:#ffffff;
  font-weight:700;
  margin-bottom:20px;
}

.sidebar-info-contents .content-inner .content-box .text{
  position:relative;
  font-size:15px;
  color:rgba(255,255,255,0.80);
  margin-bottom:25px;
}

.sidebar-info-contents .content-inner .content-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #ff5e85;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 12px 45px;
  text-transform: uppercase;
}


.sidebar-info-contents .content-inner .content-box a:hover{
  background: #fff;
  color: #ff5e85;
}

.sidebar-info-contents .content-inner .contact-info{
  position:relative;
  margin-top:60px;
}

.sidebar-info-contents .content-inner .contact-info ul li{
  position:relative;
  display: block;
  font-size:15px;
  color:rgba(255,255,255,0.80);
  margin-bottom:3px;
}

.sidebar-info-contents .content-inner .contact-info ul li a{
  color:rgba(255,255,255,0.80);
}

.sidebar-info-contents .content-inner .contact-info ul li a:hover{
  color: #ff5e85;
}

.sidebar-info-contents .content-inner .contact-info h4{
  position:relative;
  font-size:20px;
  color:#ffffff;
  font-weight:700;
  margin-bottom:20px;
}

.sidebar-info-contents .content-inner .social-box{
  position:relative;
  margin-top:20px;
  margin-bottom:30px;
}

.sidebar-info-contents .content-inner .social-box li{
  position:relative;
  display:inline-block;
  margin-right:6px;
  transition: all 900ms ease;
  -moz-transition: all 900ms ease;
  -webkit-transition: all 900ms ease;
  -ms-transition: all 900ms ease;
  -o-transition: all 900ms ease;
}

.sidebar-info-contents .content-inner .social-box li a{
  position:relative;
  width:36px;
  height:36px;
  color:#222222;
  z-index:1;
  font-size:13px;
  line-height:36px;
  text-align:center;
  border-radius:50%;
  display:inline-block;
  background-color:#ffffff;
  -webkit-transition:all 300ms ease;
  -moz-transition:all 300ms ease;
  -ms-transition:all 300ms ease;
  -o-transition:all 300ms ease;
  transition:all 300ms ease;
}

.sidebar-info-contents .content-inner .social-box li a:hover{
  color:#ffffff;
  background-color:#ff5e85;
}



/** slider-style-seven **/

.slider-style-seven{
  position: relative;
}

.slider-style-seven .slide {
  position: relative;
  padding: 125px 0px 205px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.slider-style-seven .slide:before{
  position: absolute;
  content: '';
  background-image: -webkit-linear-gradient(0deg, rgba(255, 94, 133, 0.6) 50%, rgba(255, 255, 255, 0.6) 100%);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.slider-style-seven .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 34px;
  opacity:0;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  -webkit-transform: translateY(-20px);
  -moz-transform: translateY(-20px);
  -ms-transform: translateY(-20px);
  -o-transform: translateY(-20px);
  transform: translateY(-20px);
}

.slider-style-seven .active .content-box h1{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 500ms;
}

.slider-style-seven .content-box .text{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
  margin-bottom: 37px;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.slider-style-seven .active .content-box .text{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1000ms;
}

.slider-style-seven .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  font-weight: 700;
  text-transform: uppercase;
  border: 3px solid #fff;
  background: transparent;
  text-align: center;
  padding: 14px 46.5px;
}

.slider-style-seven .content-box .btn-box a:hover{
  background: #ff5e85;
  border-color: #ff5e85;
}

.slider-style-seven .content-box .btn-box{
  position:relative;
  display: block;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.slider-style-seven .active .content-box .btn-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1500ms;
}

.slider-style-seven .content-box{
  position: relative;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-seven .owl-nav,
.slider-style-seven .owl-dots{
  display: none;
}


/** intro-style-three **/

.intro-style-three{
  position: relative;
  display: block;
}

.intro-style-three .content-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #282828;
  font-weight: 700;
  margin-bottom: 8px;
}

.intro-style-three .content-box .text{
  position: relative;
  display: block;
  color: #686868;
  margin-bottom: 16px;
}

.intro-style-three .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #0c0d24;
  border: 1px solid #e9e9e9;
  text-align: center;
  padding: 13.5px 31px;
}

.intro-style-three .btn-box a:hover{
  color: #fff;
  background: #ff5e85;
  border-color: #ff5e85;
}

.intro-style-three .inner-box{
  position: relative;
  margin-top: -60px;
}

.intro-style-three .inner-box .single-item{
  position: relative;
  display: block;
  background: #fff;
  padding: 43px 35px 49px 35px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  text-align: center;
  border-radius: 10px;
}

.intro-style-three .inner-box .single-item:before {
  width: 100%;
  height: 5px;
  position: absolute;
  content: "";
  background: transparent;
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transition: .5s ease;
}

.intro-style-three .inner-box .single-item:hover:before {
  transform: scaleX(1);
  background: #ff5e85;
}

.intro-style-three .inner-box .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 70px;
  line-height: 70px;
  margin-bottom: 22px;
  color: transparent;
  background: -webkit-linear-gradient(0deg, #fc9636, #fd4471 50%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.intro-style-three .inner-box .single-item h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 10px;
}

.intro-style-three .inner-box .single-item h3 a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.intro-style-three .inner-box .single-item h3 a:hover{
  color: #ff5e85;
}

.intro-style-three .inner-box .single-item .text{
  position: relative;
  display: block;
  font-size: 16px;
  margin-bottom: 23px;
}

.intro-style-three .inner-box .single-item .btn-box a{
  padding: 6px 34.5px;
}

.intro-style-three .content-box{
  position: relative;
  background: #fff;
  padding: 52px 15px 30px 0px;
}

.intro-style-three .content-box:before{
  position: absolute;
  content: '';
  background: #fff;
  width: 130px;
  height: 100%;
  left: -130px;
  top: 0px;
}

.intro-style-three .content-box:after{
  position: absolute;
  content: '';
  background: #fff;
  width: 50px;
  height: 100%;
  right: -50px;
  top: 0px;
}

.intro-style-three .inner-container{
  position: relative;
  background: transparent;
  margin-top: -55px;
  z-index: 1;
}


/** fabrics-section **/

.fabrics-section{
  position: relative;
  display: block;
  padding: 70px 0px 0px;
}

.fabrics-section .single-item-carousel .owl-dots{
  display: none;
}

.fabrics-section .single-item-carousel .owl-nav{
  position: absolute;
  left: 0px;
  bottom: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #fff;
  padding: 32px 40px 12px 40px;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}

.fabrics-section .single-item-carousel .owl-nav .owl-prev,
.fabrics-section .single-item-carousel .owl-nav .owl-next{
  position: relative;
  display: inline-block;
  font-size: 30px;
  font-weight: 600;
  margin: 0px 10px;
  color: #d0d0d7;
  cursor: pointer;
  transition: all 500ms ease;
}

.fabrics-section .single-item-carousel .slide-item img{
  width: 100%;
}

.fabrics-section .single-item-carousel .owl-nav .owl-prev:hover,
.fabrics-section .single-item-carousel .owl-nav .owl-next:hover{
  color: #ff5e85;
}

.fabrics-section .content-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #ff5e85;
  font-weight: 700;
  margin-bottom: 10px;
}

.fabrics-section .content-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 11px;
}

.fabrics-section .content-box .text{
  position: relative;
  display: block;
  margin-bottom: 25px;
}

.fabrics-section .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #ff5e85;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 14.5px 39px;
  text-transform: capitalize;
  box-shadow: 0 15px 15px rgba(255, 94, 133, 0.2);
}

.fabrics-section .content-box .btn-box a:hover{
  transform: translateY(-5px);
}

.fabrics-section .content-box{
  position: relative;
  display: block;
  margin-left: 45px;
  padding: 85px 0px 82px 0px;
}


/** intro-style-four **/

.intro-style-four{
  position: relative;
}

.intro-style-four .top-content{
  position: relative;
  width: 100%;
  padding: 90px 0px 70px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.intro-style-four .top-content:before{
  position: absolute;
  content: '';
  background: rgba(255, 247, 249, 0.8);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.intro-style-four .top-content .content-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 6px;
}

.intro-style-four .top-content .content-box .text{
  position: relative;
  display: block;
  color: #58565f;
  margin-bottom: 20px;
}

.intro-style-four .top-content .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}

.intro-style-four .top-content .content-box{
  position: relative;
  display: block;
  margin-right: 110px;
}

.intro-style-four .top-content .inner-box {
  position: relative;
  display: block;
  background: #fff;
  padding: 56px 35px 87px 35px;
  margin-right: 70px;
  margin-top: 9px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.intro-style-four .top-content .inner-box h3 {
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 16px;
}

.intro-style-four .top-content .inner-box .text {
  position: relative;
  display: block;
  font-size: 16px;
  margin-bottom: 24px;
}

.intro-style-four .top-content .inner-box .signup-form .form-group {
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.intro-style-four .top-content .inner-box .signup-form .form-group:last-child {
  margin-bottom: 0px;
}

.intro-style-four .top-content .inner-box .signup-form .form-group input[type='email'] {
  position: relative;
  width: 100%;
  height: 55px;
  border: 1px solid #e9e9e9;
  border-radius: 10px;
  color: #666666;
  font-size: 16px;
  padding: 10px 15px;
  transition: all 500ms ease;
}

.intro-style-four .top-content .inner-box .signup-form .form-group input:focus{
  border-color: #ff5e85;
}

.intro-style-four .top-content .inner-box .signup-form .message-btn button{
  position: relative;
  width: 100%;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #ff5e85;
  text-align: center;
  padding: 14.5px 30px;
  border-radius: 10px;
  cursor: pointer;
  transition: all 500ms ease;
}

.intro-style-four .top-content .inner-box .signup-form .message-btn button:hover{
  transform: translateY(-5px);
}

.intro-style-four .lower-content{
  position: relative;
  min-height: 350px;
}

.intro-style-four .lower-content .bg-column{
  position: absolute;
  left: -15px;
  top: -240px;
  width: 50%;
  height: 590px;
  background-size: cover;
  background-repeat: no-repeat;
}

.intro-style-four .lower-content .inner-content{
  position: relative;
  width: 50%;
  float: right;
  background: #ff6a8d;
  padding: 37px 15px 40px 45px;
}

.intro-style-four .lower-content .inner-content:before{
  position: absolute;
  content: '';
  background: #ff6a8d;
  width: 50%;
  height: 100%;
  left: -45px;
  top: 0px;
}

.intro-style-four .lower-content .inner-content .inner-box{
  position: relative;
  max-width: 760px;
  padding: 0px 15px;
}

.intro-style-four .lower-content .inner-content .inner-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  line-height: 47px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 4px;
}

.intro-style-four .lower-content .inner-content .inner-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fee6eb;
  margin-bottom: 20px;
}

.intro-style-four .lower-content .inner-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 31px;
  color: #fff;
  background: #fe7b93;
  background: linear-gradient(90deg, #fe7b93 0%, #ff6a8d 100%);
  padding: 8px 10px 7px 25px;
}

.intro-style-four .lower-content .inner-content .inner-box .video-box{
  position: absolute;
  left: -140px;
  top: 50%;
  transform: translateY(-50%);
  width: 110px;
  height: 110px;
  line-height: 125px;
  background: transparent;
  border: 1px solid #fff;
  border-radius: 50%;
  text-align: center;
}

.intro-style-four .lower-content .inner-content .inner-box .video-box a{
  position: relative;
  display: inline-block;
  font-size: 40px;
  color: #fff;
  width: 75px;
  height: 75px;
  line-height: 75px;
  text-align: center;
  background: #ff5e85;
  border-radius: 50px;
  -webkit-animation: pulse-2 5s infinite;
  -o-animation: pulse-2 5s infinite;
  animation: pulse-2 5s infinite;
}

.shop-section.home-7{
  position: relative;
  padding-top: 90px;
  padding-bottom: 70px;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box{
  position: absolute;
  left: 0px;
  bottom: 15px;
  width: 100%;
  z-index: 2;
}

.shop-section.home-7 .shop-block-one .inner-box .content-box{
  opacity: 1;
  transition: all 300ms ease;
}

.shop-section.home-7 .shop-block-one:hover .inner-box .content-box{
  opacity: 0;
}

.shop-section.home-7 .shop-block-one:hover .inner-box .content-box:hover{
  opacity: 0;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box{
  position: relative;
  display: inline-block;
  background: rgba(255, 94, 133, 0.9);
  padding: 0px 45px 38px 45px;
  border-radius: 10px;
  transform: translateY(-100px);
  transition: all 500ms ease;
  opacity: 0;
}

.shop-section.home-7 .shop-block-one:hover .inner-box .overlay-box .box{
  transform: translateY(0px);
  opacity: 1;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box .view-btn{
  position: relative;
  margin-top: -22px;
  margin-bottom: 14px;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box .view-btn a{
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  background: #fff;
  color: #000;
  font-size: 20px;
  text-align: center;
  border-radius: 50%;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box h4{
  position: relative;
  display: inline-block;
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  line-height: 26px;
  text-transform: uppercase;
  margin-bottom: 0px;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box h4 a{
  color: #fff;
  line-height: 22px;
}

.shop-section.home-7 .shop-block-one .inner-box .overlay-box .box .text{
  position: relative;
  display: block;
  color: #fff;
  line-height: 20px;
}

.shop-section.home-7 .shop-block-one:hover .inner-box .image-box:before{
  opacity: 0;
}

.shop-section.home-7 .title-box .top-text{
  color: #ff5e85;
}

.shop-section.home-7 .load-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #ff5e85;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 14.5px 40px;
}

.shop-section.home-7 .load-btn a:hover{
  transform: translateY(-5px);
}

.shop-section.home-7 .load-btn{
  position: relative;
  margin-top: 10px;
}


/** testimonial-style-six **/

.testimonial-style-six{
  position: relative;
  padding: 65px 0px 75px 0px;
}

.testimonial-style-six .sec-title .top-text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #ff5e85;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.testimonial-style-six .sec-title h1{
  color: #0c0d24;
}

.testimonial-style-six .sec-title{
  margin-bottom: 52px;
}

.testimonial-style-six .testimonial-content{
  position: relative;
  max-width: 1200px;
  margin: 50px 100px 25px 100px;
}

.testimonial-style-six .testimonial-content .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 0px 65px 75px 65px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.testimonial-style-six .testimonial-content .inner-box .author-info {
  position: relative;
  display: block;
  margin-bottom: 23px;
}

.testimonial-style-six .testimonial-content .inner-box .author-info .author-thumb {
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 11px;
  margin-top: -50px;
}

.testimonial-style-six .testimonial-content .inner-box .author-info .author-thumb img {
  width: 100%;
  border-radius: 50%;
}

.testimonial-style-six .testimonial-content .inner-box .author-info .author-thumb:before {
  position: absolute;
  left: -20px;
  bottom: 20px;
  content: "\f10b";
  font-family: 'Flaticon';
  font-size: 18px;
  color: #fff;
  background: #ff5e85;
  width: 35px;
  height: 35px;
  line-height: 42px;
  text-align: center;
  border-radius: 50%;
  z-index: 1;
}

.testimonial-style-six .testimonial-content .inner-box .author-info h5 {
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 1px;
}

.testimonial-style-six .testimonial-content .inner-box .author-info .designation {
  position: relative;
  display: block;
  font-size: 16px;
}

.testimonial-style-six .testimonial-content .inner-box .text{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 25px;
}

.testimonial-style-six .owl-theme .owl-nav{
  display: none;
}

.testimonial-style-six .owl-theme .owl-dots .owl-dot span {
  position: relative;
  width: 10px;
  height: 10px;
  background: #ff5e85;
  border-radius: 50%;
  margin: 0px 5px;
  transition: all 500ms ease;
  cursor: pointer;
}

.testimonial-style-six .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-six .owl-theme .owl-dots .owl-dot span:hover {
  width: 17px;
  height: 17px;
  background: transparent;
  border: 4px solid #ff5e85;
  top: 3px;
}


/** textiles-section **/

.textiles-section{
  position: relative;
  padding: 85px 0px;
}

.textiles-section .bg-column{
  position: absolute;
  top: 0px;
  left: 0px;
  width: 53%;
  height: 100%;
  background-repeat: no-repeat;
  background-size: cover;
}

.textiles-section .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 85px 0px 85px 40px;
}

.textiles-section .inner-box:before{
  position: absolute;
  content: '';
  background: #fff;
  width: 90px;
  height: 100%;
  left: -60px;
  top: 0px;
}

.textiles-section .inner-box .top-text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #ff5e85;
  font-weight: 700;
  margin-bottom: 10px;
}

.textiles-section .inner-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 9px;
}

.textiles-section .inner-box .text{
  position: relative;
  display: block;
  margin-bottom: 25px;
}

.textiles-section .inner-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #ff5e85;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 14.5px 29px;
  text-transform: capitalize;
  box-shadow: 0 15px 15px rgba(255, 94, 133, 0.2);
}

.textiles-section .inner-box .btn-box a:hover{
  transform: translateY(-5px);
}


/** subscribe-style-three **/

.subscribe-style-three{
  position: relative;
  background: #ff5e85;
  padding: 43px 0px 50px 0px;
}

.subscribe-style-three .content-box{
  position: relative;
  display: block;
  max-width: 390px;
  width: 100%;
}

.subscribe-style-three h3{
  position: relative;
  display: block;
  font-size: 24px;
  font-weight: 700;
  line-height: 32px;
  color: #fff;
  margin-bottom: 5px;
}

.subscribe-style-three .content-box .text{
  position: relative;
  display: block;
  color: #fff;
  margin-bottom: 34px;
}

.subscribe-style-three .content-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  color: #fff;
  margin-bottom: 17px;
}

.subscribe-style-three .content-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  border: 2px solid #fff;
  padding: 8.5px 38px;
}

.subscribe-style-three .content-box a:hover{
  background: #fff;
  color: #ff5e85;
}

.subscribe-style-three .content-box a i{
  position: relative;
  font-size: 24px;
  top: 4px;
  margin-left: 20px;
}

.subscribe-style-three .form-inner{
  position: relative;
  display: block;
  max-width: 440px;
  width: 100%;
  padding: 80px 0px 50px 0px;
}

.subscribe-style-three .form-inner h3{
  margin-bottom: 22px;
}

.subscribe-style-three .form-inner .form-group{
  position: relative;
  display: block;
  margin: 0px;
}

.subscribe-style-three .form-inner .form-group input[type='email'] {
  position: relative;
  width: 100%;
  height: 50px;
  font-size: 14px;
  color: #ffd7df;
  padding: 10px 85px 10px 0px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  background: transparent;
  transition: all 500ms ease;
}

.subscribe-style-three .form-inner .form-group input:focus{
  border-color: #192d66;
}

.subscribe-style-three .form-inner .form-group input::-webkit-input-placeholder{
  color:#ffd7df;
}

.subscribe-style-three .form-inner .form-group button{
  position: absolute;
  top: 10px;
  right: 0px;
  font-size: 16px;
  color: #ffd7df;
  background: transparent;
  cursor: pointer;
  transition: all 500ms ease;
}

.subscribe-style-three .form-inner .form-group button:hover{
  color: #192d66;
}

.main-footer.home-7{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
}

.main-footer.home-7:before{
  position: absolute;
  display: block;
  content: '';
  background: rgba(255, 255, 255, 0.7);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.main-footer.home-7 .footer-top .links-widget .widget-content ul li a:hover,
.main-footer.home-7 .widget-section .social-widget .social-links li a:hover{
  color: #ff5e85;
}



/*** 

====================================================================
                        Home-Page-Eight
====================================================================

***/

/** header-style-eight **/

.main-header.style-eight{
  position: absolute;
  left: 0px;
  top: 0px;
  background: transparent;
}

.main-header.style-eight .header-upper,
.main-header.style-eight .header-bottom,
.main-header.style-eight .header-bottom .outer-container .nav-outer{
  background: transparent;
}

.main-header.style-eight .header-upper .right-content .social-list{
  margin-right: 0px;
  margin-left: 25px;
}

.main-header.style-eight .header-upper .right-content .social-list li a{
  background: #fff;
  border-color: #fff;
  color: #b8b5bf;
}

.main-header.style-eight .header-upper .right-content .social-list li a:hover{
  background: transparent;
  border-color: #7951f8;
  color: #7951f8;
}

.main-header.style-eight .header-upper .right-content .info-box h3 a:hover{
  color: #7951f8;
}

.main-header.style-eight .header-bottom .outer-container{
  border-bottom: 1px solid #e1e2e3;
}

.main-header.style-eight .header-bottom .nav-box{
  margin-right: 0px;
  padding: 25px 0px 22px;
}

.main-header.style-eight .header-bottom .nav-btn .icon{
  background: #7951f8;
  height: 1px;
  margin-bottom: 8px;
}

.main-header.style-eight .header-bottom .nav-btn .icon:last-child{
  width: 14px;
}

.main-header.style-eight .header-bottom .nav-btn:hover .icon:last-child{
  width: 28px;
}

.main-header.style-eight .header-bottom .info-box .shop-cart span{
  background: #7951f8;
}

.main-header.style-eight .header-bottom .info-box .shop-cart a:hover{
  color: #7951f8;
}

.main-header.style-eight .header-bottom .info-box .btn-box a{
  background: #7951f8;
}

.main-header.style-eight .header-bottom .info-box .btn-box a:hover{
  background: #ffffff;
  color: #7951f8;
}

.main-header.style-eight .main-menu .navigation > li.current > a, 
.main-header.style-eight .main-menu .navigation > li:hover > a{
  color: #7951f8;
}

.main-header.style-eight .header-bottom .info-box .shop-cart {
  margin-right: 4px;
  margin-left: 5px;
}

.main-header.style-eight .header-bottom .info-box .search-box{
  margin-left: 12px;
}


.slider-style-seven.home-8 .slide{
  padding: 275px 0px 155px 0px;
}

.slider-style-seven.home-8 .content-box{
  margin: 0px;
}

.slider-style-seven.home-8 .slide:before {
  position: absolute;
  content: '';
  background-image: -webkit-linear-gradient(90deg, rgba(122, 81, 249, 0.6) 50%, rgba(252, 241, 247, 0.6) 100%);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.slider-style-seven.home-8 .content-box h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #fff;
  font-weight: 700;
  letter-spacing: 5px;
  margin-bottom: 8px;
  text-transform: uppercase;
  -webkit-animation: zoom-fade 5s infinite linear;
  animation: zoom-fade 5s infinite linear;
}

.slider-style-seven.home-8 .content-box{
  max-width: 830px;
}

.slider-style-seven.home-8 .content-box .btn-box a:hover{
  background: #7951f8;
  border-color: #7951f8;
}

.slider-style-seven.home-8 .owl-dots {
  position: absolute;
  display: block;
  left: 370px;
  top: 100%;
  transform: translateY(-50px);
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
}

.slider-style-seven.home-8 .owl-theme .owl-dots .owl-dot span {
  position: relative;
  width: 10px;
  height: 10px;
  background: #fff;
  border-radius: 50%;
  margin: 0px 5px;
  cursor: pointer;
  transition: all 500ms ease;
}

.slider-style-seven.home-8 .owl-theme .owl-dots .owl-dot.active span{
  width: 17px;
  height: 17px;
  border: 3px solid #fff;
  border-radius: 50%;
  background: transparent;
  top: 3px;
}

.fabrics-section.home-8{
  position: relative;
  padding: 80px 0px;
}

.fabrics-section.home-8 .single-item-carousel .owl-nav .owl-prev:hover, 
.fabrics-section.home-8 .single-item-carousel .owl-nav .owl-next:hover{
  color: #7951f8;
}

.fabrics-section.home-8 .content-box{
  padding-top: 85px;
  margin-left: 30px;
  padding-bottom: 70px;
}

.fabrics-section.home-8 .content-box .top-text{
  color: #7951f8;
}

.fabrics-section.home-8 .content-box .bold-text{
  position: relative;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 20px;
}

.fabrics-section.home-8 .content-box .btn-box a{
  background: #7951f8;
  box-shadow: 0 15px 15px rgba(121, 81, 248, 0.2);
}

.fabrics-section.home-8 .content-box h1{
  margin-bottom: 6px;
}

.fabrics-section.home-8 .content-box .text{
  margin-bottom: 18px;
}


/** intro-style-five **/

.intro-style-five{
  position: relative;
  padding: 65px 0px 75px 0px;
  background: #f9f7ff;
}

.intro-style-five .title-box{
  position: relative;
  display: block;
  padding-bottom: 39px;
  max-width: 750px;
  width: 100%;
  margin: 0 auto;
}

.intro-style-five .title-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  font-weight: 700;
  color: #282828;
  line-height: 47px;
  margin-bottom: 11px;
}

.intro-style-five .title-box p{
  position: relative;
  display: block;
  color: #666568;
}

.intro-style-five .single-item{
  position: relative;
  display: block;
  background: transparent;
  padding: 43px 35px 49px 35px;
  text-align: center;
  border-radius: 10px;
  transition: all 500ms ease;
}

.intro-style-five .single-item:hover{
  background: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.intro-style-five .single-item:before {
  width: 100%;
  height: 5px;
  position: absolute;
  content: "";
  background: transparent;
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transition: .5s ease;
}

.intro-style-five .single-item:hover:before {
  transform: scaleX(1);
  background: #7951f8;
}

.intro-style-five .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 70px;
  line-height: 70px;
  margin-bottom: 22px;
  color: #000;
  transition: all 500ms ease;
}

.intro-style-five .single-item:hover .icon-box{
  background: -webkit-linear-gradient(0deg, #7951f8, #e1a2fe 50%);
  color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.intro-style-five .single-item h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 10px;
}

.intro-style-five .single-item h3 a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.intro-style-five .single-item h3 a:hover{
  color: #7951f8;
}

.intro-style-five .single-item .text{
  position: relative;
  display: block;
  font-size: 16px;
  margin-bottom: 23px;
}

.intro-style-five .single-item .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #0c0d24;
  background: #fff;
  border: 1px solid #e9e9e9;
  text-align: center;
  padding: 6px 35px;
}

.intro-style-five .single-item .btn-box a:hover{
  color: #fff;
  background: #7951f8;
  border-color: #7951f8;
}


/** intro-style-six **/

.intro-style-six{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  padding-top: 70px;
}

.intro-style-six:before{
  position: absolute;
  content: '';
  background: rgba(236, 230, 255, 0.7);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.intro-style-six .content-box .top-box h2{
  position: relative;
  display: block;
  font-size: 36px;
  font-weight: 700;
  line-height: 47px;
  color: #0c0d24;
  margin-bottom: 6px;
  padding-right: 50px;
}

.intro-style-six .content-box .top-box .text p{
  position: relative;
  display: block;
  font-size: 16px;
  color: #555362;
  margin-bottom: 9px;
}

.intro-style-six .content-box .top-box .text p:last-child{
  margin-bottom: 0px;
}

.intro-style-six .content-box .top-box .text{
  position: relative;
  display: block;
  padding-bottom: 21px;
}

.intro-style-six .content-box .top-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 31px;
  color: #0c0d24;
}

.intro-style-six .content-box{
  position: relative;
  display: block;
  min-height: 670px;
}

.intro-style-six .content-box .lower-box{
  position: absolute;
  left: 0px;
  bottom: -13px;
  background-image: -webkit-linear-gradient(0deg, #7a51f9 0%, #ffb3c0 100%);
  padding: 53px 30px 34px 40px;
  min-width: 675px;
  width: 100%;
  box-shadow: 0px 20px 20px rgba(0, 0, 0, 0.2);
  z-index: 2;
}

.intro-style-six .content-box .lower-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 14px;
}

.intro-style-six .content-box .lower-box p{
  position: relative;
  display: block;
  font-size: 16px;
  color: #e9e3fd;
  line-height: 26px;
  margin: 0px;
}

.intro-style-six .content-box .lower-box .inner-content{
  position: relative;
  max-width: 445px;
}

.intro-style-six .content-box .lower-box .video-box{
  position: absolute;
  right: -55px;
  top: 50%;
  transform: translateY(-50%);
  width: 110px;
  height: 110px;
  line-height: 125px;
  background: transparent;
  border: 1px solid #fff;
  border-radius: 50%;
  text-align: center;
}

.intro-style-six .content-box .lower-box .video-box a{
  position: relative;
  display: inline-block;
  font-size: 40px;
  color: #fff;
  width: 75px;
  height: 75px;
  line-height: 75px;
  text-align: center;
  background: #7951f8;
  border-radius: 50px;
  -webkit-animation: pulse-3 5s infinite;
  -o-animation: pulse-3 5s infinite;
  animation: pulse-3 5s infinite;
}

.intro-style-six .image-box{
  position: relative;
  margin-top: 9px;
  margin-left: 20px;
  z-index: 1;
}

.intro-style-six .image-box img{
  width: 100%;
}


/** product-section **/

.product-section{
  position: relative;
  background: #fff;
  padding: 145px 0px 90px 0px;
  margin-top: -65px;
}

.product-block-one .inner-box{
  position: relative;
  display: block;
  overflow: hidden;
  border-radius: 10px;
}

.product-block-one .inner-box .image-box {
  position: relative;
  display: block;
  overflow: hidden;
  background: #fff;
}

.product-block-one .inner-box .image-box img{
  width: 100%;
}

.product-block-one .inner-box .image-box:before{
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  right: 0px;
  box-shadow: inset 0px -140px 50px -40px rgba(121, 81, 248, 0.4);
  z-index: 1;
  transition: all 500ms ease;
}

.product-block-one:hover .inner-box .image-box:before{
  box-shadow: inset 0px -140px 50px -40px rgba(121, 81, 248, 0.7);
}

.product-block-one .inner-box .content-box{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
}

.product-block-one .inner-box .content-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #7951f8;
  background: #fff;
  text-align: center;
  padding: 7px 15px;
  width: 190px;
}

.product-block-one:hover .inner-box .content-box a{
  color: #fff;
  background: #7951f8;
}


/** medical-shop **/

.medical-shop{
  position: relative;
  padding: 55px 70px 50px 70px;
}

.medical-shop:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-7.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-size: cover;
}

.medical-shop .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #7951f8;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.medical-shop .title-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  font-weight: 700;
  color: #000;
  margin-bottom: 9px;
}

.medical-shop .title-box p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 28px;
  color: #5d5b63;
  margin: 0px;
}

.medical-shop .title-box{
  position: relative;
  display: block;
  margin-bottom: 35px;
}

.medical-shop .single-item .inner-box {
  position: relative;
  display: block;
}

.medical-shop .single-item .inner-box .image-box {
  position: relative;
  display: block;
  overflow: hidden;
  background: #fff;
}

.medical-shop .single-item .inner-box .image-box:before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  right: 0px;
  box-shadow: inset 0px -140px 50px -40px rgba(0, 0, 0, 0.7);
  z-index: 1;
  transition: all 500ms ease;
}

.medical-shop .single-item:hover .inner-box .image-box:before{
  opacity: 0;
}

.medical-shop .single-item .inner-box .image-box img{
  width: 100%;
}

.medical-shop .single-item .inner-box .content-box{
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  text-align: center;
  padding: 50px 15px;
  z-index: 2;
  opacity: 1;
  transition: all 300ms ease;
}

.medical-shop .single-item:hover .inner-box .content-box{
  opacity: 0;
}

.medical-shop .single-item .inner-box .content-box h4 {
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 24px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
}

.medical-shop .single-item .inner-box .content-box h4 a {
  position: relative;
  display: inline-block;
  line-height: 24px;
  color: #fff;
}

.medical-shop .single-item .inner-box .content-box .text {
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 24px;
  color: #fff;
  text-transform: uppercase;
}

.medical-shop .single-item .inner-box .overlay-box {
  position: absolute;
  left: 0px;
  bottom: 15px;
  width: 100%;
  z-index: 2;
  text-align: center;
}

.medical-shop .single-item .inner-box .overlay-box .box {
  position: relative;
  display: inline-block;
  background: rgba(121, 81, 248, 0.9);
  padding: 43px 45px 38px 45px;
  border-radius: 10px;
  transform: translateY(-100px);
  transition: all 500ms ease;
  opacity: 0;
}

.medical-shop .single-item .inner-box .overlay-box .box .view-btn {
  position: absolute;
  left: -26px;
  top: 50%;
  transform: translateY(-50%);
}

.medical-shop .single-item .inner-box .overlay-box .box .view-btn a {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  background: #fff;
  color: #000;
  font-size: 20px;
  text-align: center;
  border-radius: 50%;
}

.medical-shop .single-item .inner-box .overlay-box .box h4 {
  position: relative;
  display: inline-block;
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  line-height: 26px;
  text-transform: uppercase;
  margin-bottom: 0px;
}

.medical-shop .single-item .inner-box .overlay-box .box h4 a {
  color: #fff;
  line-height: 22px;
}

.medical-shop .single-item .inner-box .overlay-box .box .text {
  position: relative;
  display: block;
  color: #fff;
  line-height: 20px;
  text-transform: uppercase;
}

.medical-shop .single-item:hover .inner-box .overlay-box .box {
  transform: translateY(0px);
  opacity: 1;
}

.medical-shop .inner-content{
  position: relative;
  margin-bottom: 55px;
}

.medical-shop .lower-content{
  position: relative;
  display: block;
  max-width: 790px;
  width: 100%;
}

.medical-shop .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #000;
  margin-bottom: 20px;
}

.medical-shop .lower-content p{
  position: relative;
  display: block;
  color: #585655;
  margin-bottom: 28px;
}

.medical-shop .lower-content a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #7951f8;
  box-shadow: 0 15px 15px rgba(121, 81, 248, 0.2);
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 14.5px 56px;
  text-transform: capitalize;
}

.medical-shop .lower-content a:hover{
  transform: translateY(-5px);
}


/** testimonial-style-seven **/

.testimonial-style-seven{
  position: relative;
  padding: 55px 0px 60px 0px;
}

.testimonial-style-seven .sec-title .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #7951f8;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.testimonial-style-seven .sec-title h1{
  color: #0c0d24;
}

.testimonial-style-seven .sec-title{
  margin-bottom: 81px;
}

.testimonial-style-seven .testimonial-content .inner-box{
  position: relative;
  display: block;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
}

.testimonial-style-seven .testimonial-content .inner-box .text{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 25px;
  margin-bottom: 30px;
}

.testimonial-style-seven .testimonial-content .inner-box .author-thumb{
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
  margin-bottom: 9px;
}

.testimonial-style-seven .testimonial-content .inner-box .author-thumb img{
  width: 100%;
  border-radius: 50%;
}

.testimonial-style-seven .testimonial-content .inner-box .author-info h5{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #0c0d24;
  line-height: 24px;
}

.testimonial-style-seven .testimonial-content .inner-box .author-info .designation{
  position: relative;
  display: block;
  font-size: 16px;
}

.testimonial-style-seven .owl-nav{
  display: none;
}

.testimonial-style-seven .owl-theme .owl-dots .owl-dot span {
  position: relative;
  width: 10px;
  height: 10px;
  background: #baa4fc;
  border-radius: 50%;
  margin: 0px 5px;
  transition: all 500ms ease;
  cursor: pointer;
}

.testimonial-style-seven .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-seven .owl-theme .owl-dots .owl-dot span:hover {
  width: 17px;
  height: 17px;
  background: transparent;
  border: 4px solid #baa4fc;
  top: 3px;
}

.testimonial-style-seven .owl-theme .owl-dots{
  position: absolute;
  left: 50%;
  top: -45px;
  transform: translateX(-50%);
}


/** medical-equepment **/

.medical-equepment{
  position: relative;
}

.medical-equepment .inner-container{
  position: relative;
  width: 100%;
  padding: 70px 265px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.medical-equepment .inner-container .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 70px 30px 85px 100px;
}

.medical-equepment .inner-container .inner-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #7951f8;
  margin-bottom: 10px;
}

.medical-equepment .inner-container .inner-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  font-weight: 700;
  line-height: 48px;
  color: #0c0d24;
  margin-bottom: 10px;
}

.medical-equepment .inner-container .inner-box p{
  position: relative;
  display: block;
  margin-bottom: 15px;
}

.medical-equepment .inner-container .inner-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #7951f8;
  border: 1px solid #e9e9e9;
  text-align: center;
  padding: 13.5px 19px;
}

.medical-equepment .inner-container .inner-box a:hover{
  color: #fff;
  background: #7951f8;
  border-color: #7951f8;
}


/** signup-section **/

.signup-section{
  position: relative;
  padding-top: 165px;
}

.signup-section .inner-container{
  position: relative;
}

.signup-section .inner-container .inner-box{
  position: absolute;
  left: 0px;
  top: -50px;
  width: 100%;
  background: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  z-index: 1;
  padding: 25px 50px;
}

.signup-section .inner-container .inner-box h5{
  position: relative;
  font-size: 18px;
  display: block;
  line-height: 28px;
  color: #7951f8;
  font-weight: 700;
  margin-top: 12px;
}

.signup-section .inner-container .inner-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  background: #7951f8;
  color: #fff;
  border-radius: 0px;
  text-align: center;
  padding: 14.5px 56px;
  text-transform: capitalize;
  z-index: 1;
}

.signup-section .inner-container .inner-box a:hover{
  background: #5f30f3;
}

.main-footer.home-8{
  position: relative;
  padding-top: 40px;
  background-color: #181a26;
}

.main-footer.home-8 .widget-title{
  color: #fff;
}

.main-footer.home-8 .widget-section .contact-widget .widget-content .text,
.main-footer.home-8 .widget-section .contact-widget .widget-content .info-list li,
.main-footer.home-8 .widget-section .contact-widget .widget-content .info-list li a,
.main-footer.home-8 .footer-top .links-widget .widget-content ul li a,
.main-footer.home-8 .widget-section .social-widget .social-links li a,
.main-footer.home-8 .footer-bottom .copyright{
  color: #ececec;
}

.main-footer.home-8 .widget-section .contact-widget .widget-content .info-list li a:hover,
.main-footer.home-8 .footer-top .links-widget .widget-content ul li a:hover,
.main-footer.home-8 .widget-section .social-widget .social-links li a:hover{
  color: #7951f8;
}

.main-footer.home-8 .footer-top{
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}



/*** 

====================================================================
                        About-Page
====================================================================

***/


.main-header.style-nine{
  position: relative;
}

.main-header.style-nine .header-top .header-info li a:hover,
.main-header.style-nine .header-top .header-nav li.phone a:hover,
.main-header.style-nine .header-upper .info-box h3 a:hover,
.main-header.style-nine .header-bottom .info-box .search-box .header-flyout-searchbar i:hover,
.main-header.style-nine .header-bottom .info-box .shop-cart a:hover{
  color: #fd571d;
}

.main-header.style-nine .header-upper .btn-box a{
  background: #fd571d;
}

.main-header.style-nine .header-upper .btn-box a:hover{
  background: #f36533;
}

.main-header.style-nine .header-bottom .info-box .social-links li a:hover{
  border-color: #fd571d;
  color: #fd571d;
}

.main-header.style-nine .header-bottom .info-box .shop-cart span{
  background: #fd571d;
}


/** about-banner **/

.about-banner{
  position: relative;
  width: 100%;
  padding: 195px 0px 360px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.about-banner:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.65);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.about-banner .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 16px;
}

.about-banner .content-box .text{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}


/** about-style-five **/

.about-style-five{
  position: relative;
}

.about-style-five .inner-container{
  position: relative;
  background: #fff;
  padding: 74px 55px 30px 55px;
  margin: -175px -55px 0px -55px;
}

.about-style-five .title-box{
  position: relative;
  max-width: 950px;
  width: 100%;
}

.about-style-five .title-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fd571d;
  font-weight: 700;
  margin-bottom: 10px;
}

.about-style-five .title-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 23px;
}

.about-style-five .title-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
}

.about-style-five .title-box{
  position: relative;
  display: block;
  margin-bottom: 60px;
}

.about-style-five .upper-content .image-box img{
  width: 100%;
}

.about-style-five .upper-content .content-box{
  position: relative;
  display: block;
  background: #fff;
  margin: 95px 0px 0px -100px;
  padding: 48px 30px 43px 40px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.about-style-five .group-title{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 10px;
}

.about-style-five p{
  position: relative;
  display: block;
}

.about-style-five .icon-box{
  position: relative;
  display: inline-block;
  font-size: 65px;
  line-height: 65px;
  color: #fd571d;
  margin-bottom: 12px;
}

.about-style-five .lower-content .left-column .content-box{
  position: relative;
  display: block;
  background: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  padding: 48px 30px 69px 40px;
  border-radius: 10px;
  margin: -75px -30px 0px 30px;
}

.about-style-five .lower-content .right-column .content-box{
  position: relative;
  display: block;
  margin-left: 50px;
  margin-top: 50px;
}

.about-style-five .lower-content .right-column .content-box p{
  margin-bottom: 19px;
}

.about-style-five .lower-content .right-column .content-box p:last-child{
  margin-bottom: 0px;
}


/** counter-style-two **/

.counter-style-two{
  position: relative;
  padding: 45px 0px 50px 0px;
}

.counter-style-two .content-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fd571d;
  text-transform: uppercase;
  margin-bottom: 7px;
}

.counter-style-two .content-box h1 {
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 12px;
}

.counter-style-two .content-box .text p{
  position: relative;
  display: block;
  color: #77787f;
  margin-bottom: 10px;
}

.counter-style-two .content-box .text p:last-child{
  margin-bottom: 0px;
}

.counter-style-two .content-box{
  position: relative;
  display: block;
  margin-top: 5px;
  margin-right: 15px;
}

.counter-style-two .inner-box .bold-text{
  position: relative;
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #5d5d66;
  line-height: 28px;
  margin-bottom: 28px;
}

.counter-style-two .inner-box .counter-outer{
  position: relative;
  display: block;
  min-height: 290px;
  z-index: 1;
}

.counter-style-two .inner-box .counter-block-one{
  background: #ffd9cc;
}

.counter-style-two .inner-box .counter-block-one:nth-child(2) {
  position: absolute;
  left: 172px;
  top: 77px;
  background: #e3eaff;
  z-index: 1;
}

.counter-style-two .inner-box .counter-block-one:last-child {
  background: #ffeaef;
  position: absolute;
  top: 0px;
  right: 0px;
}

.counter-style-two .inner-box .counter-block-one:nth-child(2) .count-outer span{
  color: #2d54c9;
}

.counter-style-two .inner-box .counter-block-one:last-child .count-outer span{
  color: #fb4c76;
}


/** statistics-section **/

.statistics-section{
  position: relative;
  width: 100%;
  padding-top: 100px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.statistics-section .inner-box{
  position: relative;
  display: block;
  background: #fd571d;
  padding: 47px 70px 58px 120px;
  margin-bottom: -50px;
  z-index: 1;
}

.statistics-section .inner-box h2{
  position: relative;
  display: block;
  font-size: 30px;
  font-weight: 700;
  color: #fff;
  line-height: 35px;
  margin-bottom: 12px;
}

.statistics-section .inner-box .text{
  position: relative;
  display: block;
  color: #ffe4df;
}

.statistics-section .inner-box .top-box .text{
  margin-bottom: 11px;
}

.statistics-section .inner-box .top-box h4{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  line-height: 26px;
  color: #ffe4df;
  margin-bottom: 28px;
}

.statistics-section .inner-box .top-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #0c0d24;
  text-transform: uppercase;
  background: #fff;
  padding: 12px 44px;
  border-radius: 30px;
}

.statistics-section .inner-box .top-box a:hover{
  transform: translateY(-5px);
}

.statistics-section .inner-box .top-box{
  position: relative;
  display: block;
  margin-bottom: 46px;
}

.statistics-section .inner-box .video-box{
  position: absolute;
  left: -50px;
  bottom: 70px;
}

.statistics-section .inner-box .video-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fd571d;
  width: 100px;
  height: 100px;
  line-height: 100px;
  text-align: center;
  background: #fff;
  border-radius: 50px;
  -webkit-animation: pulse 5s infinite;
  -o-animation: pulse 5s infinite;
  animation: pulse 5s infinite;
}

.statistics-section .inner-box .lower-box h2{
  margin-bottom: 2px;
}


.team-style-two.about-page{
  padding: 120px 0px 0px 0px;
}

.team-style-two.about-page .four-item-carousel{
  margin-bottom: -250px;
}

.testimonial-style-five.about-page{
  padding: 320px 0px 55px 0px;
  background: #d7f0fd;
}

.testimonial-style-five.about-page .sec-title .top-text{
  color: #fd571d;
}

.testimonial-style-five.about-page .testimonial-content .inner-box .author-info .author-thumb:before{
  background: #fd571d;
}

.testimonial-style-five.about-page .owl-theme .owl-dots .owl-dot span{
  background: #fd571d;
}

.testimonial-style-five.about-page .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-five.about-page .owl-theme .owl-dots .owl-dot span:hover{
  background: transparent;
  border-color: #fd571d;
}

.subscribe-section.about-page .inner-box .content-box .subscribe-form .form-group button{
  color: #fd571d;
}

.subscribe-section.about-page .inner-box .content-box .subscribe-form .form-group button:hover{
  color: #192d66;
}

.main-footer.about-footer .footer-top .logo-widget .footer-logo:before{
  position: absolute;
  content: '';
  background: url(../images/icons/logo.png);
  width: 298px;
  height: 252px;
  right: -69px;
  top: -45px;
  background-repeat: no-repeat;
  z-index: -1;
}


/** about-banner-two **/

.about-banner-two{
  position: relative;
  width: 100%;
  padding-top: 220px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.about-banner-two .content-box{
  position: relative;
  background: #fff;
  display: block;
  padding: 80px 40px 55px 40px;
  margin-bottom: -0px;
}

.about-banner-two .content-box .top-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 17px;
}

.about-banner-two .content-box .top-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 30px;
  color: #0c0d24;
}

.about-banner-two .content-box .top-box{
  position: relative;
  display: block;
  max-width: 920px;
  width: 100%;
  border-bottom: 1px solid #e9e9ec;
  margin: 0 auto;
  margin-bottom: 38px;
  padding-bottom: 53px;
}

.about-banner-two .content-box .lower-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #fd571d;
  font-weight: 700;
  margin-bottom: 13px;
}

.about-banner-two .content-box .lower-box  h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 23px;
}

.about-banner-two .content-box .lower-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  color: #5d5d66;
  line-height: 32px;
}


/** about-style-six **/

.about-style-six{
  position: relative;
  padding-bottom: 60px;
}

.about-style-six .top-content{
  position: relative;
  display: block;
  padding-bottom: 140px;
}

.about-style-six .top-content .inner-box{
  position: relative;
}

.about-style-six .top-content .inner-box .image-box{
  position: relative;
  display: block;
  max-width: 878px;
  width: 100%;
  margin: 0 auto;
}

.about-style-six .top-content .inner-box .image-box img{
  width: 100%;
}

.about-style-six .top-content .inner-box .box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 10px;
}

.about-style-six .top-content .inner-box .box .text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
}

.about-style-six .top-content .inner-box .box{
  position: absolute;
  max-width: 650px;
  background: #fff;
  width: 100%;
  padding: 42px 30px 62px 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.about-style-six .top-content .inner-box .box.box-one{
  top: 55px;
  left: 0px;
}

.about-style-six .top-content .inner-box .box.box-two{
  right: 0px;
  bottom: 40px;
}

.about-style-six .lower-content{
  position: relative;
  background: #fff9f7;
  padding: 140px 0px 120px 0px;
}

.about-style-six .lower-content .bg-column{
  position: absolute;
  left: 0px;
  top: -65px;
  width: 50%;
  height: 670px;
  background-size: cover;
  background-repeat: no-repeat;
}

.about-style-six .lower-content .inner-box{
  position: relative;
  max-width: 305px;
  width: 100%;
  background: #fd571d;
  padding: 42px 30px 40px 40px;
  border-radius: 10px;
  margin-top: 35px;
}

.about-style-six .lower-content .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
  font-weight: 700;
}

.about-style-six .lower-content .content-box{
  position: relative;
  display: block;
  margin-left: 40px;
}

.about-style-six .lower-content .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 10px;
}

.about-style-six .lower-content .content-box .text p{
  position: relative;
  display: block;
  color: #5d5b63;
  margin-bottom: 9px;
}

.about-style-six .lower-content .content-box .text p:last-child{
  margin-bottom: 0px;
}

.about-style-six .lower-content .content-box .text{
  position: relative;
  display: block;
  padding-bottom: 28px;
}

.about-style-six .lower-content .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fd571c;
  padding: 12px 43px;
  text-align: center;
}

.about-style-six .lower-content .content-box .btn-box a:hover{
  transform: translateY(-5px);
}

.about-section.about-page-2{
  position: relative;
}

.about-section.about-page-2 .content-box .top-content .top-text,
.about-section.about-page-2 .content-box .top-content h2,
.about-section.about-page-2 .content-box .inner-box .single-item .icon-box,
.about-section.about-page-2 .content-box .inner-box .single-item h5 a:hover{
  color: #fd571d;
}

.about-section.about-page-2 .content-column .lower-content{
  background: #fd571d;
}

.about-section.about-page-2 .content-column .lower-content h2{
  color: #fff;
}

.about-section.about-page-2 .content-column .lower-content a{
  background: #fff;
  color: #fd571d;
}

.factory-section.about-page-2{
  position: relative;
}

.factory-section.about-page-2 .single-progress-box .progress-bar,
.factory-section.about-page-2 .single-progress-box .progress-bar .value-holder:before{
  background: #fd571d;
}

.factory-section.about-page-2 .single-progress-box .progress-bar .value-holder{
  color: #111e43;
}

.fact-counter.about-page-2{
  position: relative;
  background: #fff;
  padding: 90px 0px 0px;
}

.fact-counter.about-page-2 .inner-container{
  margin: 0px;
}

.team-style-two.about-page-2{
  position: relative;
  margin: 0px;
  padding: 110px 0px 90px 0px;
}

.team-style-two.about-page-2 .team-block-two .inner-box {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}

.testimonial-section.style-two.about-page-2 .sec-title h1,
.team-style-two.about-page-2 .sec-title h1{
  color: #0c0d24;
}



/*** 

====================================================================
                        Team-Page
====================================================================

***/

/** page-title **/

.page-title{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 170px 0px 155px 0px;
}

.page-title:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.3);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.page-title .content-box h1{
  position: relative;
  display: block;
  font-size: 60px;
  line-height: 65px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 17px;
}

.page-title .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}

.team-style-two.team-page{
  position: relative;
  padding: 80px 0px;
  margin: 0px;
}

.team-style-two.team-page .sec-title h1{
  color: #0c0d24;
}

.team-style-two.team-page .team-block-two .inner-box {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}

.callto-action-section.team-page{
  position: relative;
  padding: 60px 0px 0px;
}

.callto-action-section.team-page:before{
  background: rgba(255, 255, 255, 0.9);
}

.callto-action-section.team-page .sec-title h1{
  color: #0c0d24;
}

.callto-action-section.team-page .sec-title p{
  color: #585861;
}

.main-footer.style-two.team-page{
  padding-top: 135px;
}

.fact-counter.team-page-2{
  position: relative;
  background: #fff;
  padding: 100px 0px 80px 0px;
}

.fact-counter.team-page-2 .inner-container{
  margin: 0px;
}

.team-style-four.team-page-2{
  position: relative;
  padding-bottom: 60px;
}

.team-style-four.team-page-2 .team-block:nth-child(5) .team-block-four .inner-box .image-box {
  clip-path: polygon(0% 0%, 100% 7%, 100% 100%, 0% 100%, 0% 0%);
}

.team-style-four.team-page-2 .team-block-four{
  margin-bottom: 60px;
}

.team-style-four.team-page-2 .team-block-four .inner-box .image-box,
.team-style-four.team-page-2 .inner-box .content-box{
  background: #fd571d;
}



/*** 

====================================================================
                        Service-Page
====================================================================

***/

/** service-banner **/

.service-banner{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 125px 0px 150px 0px;
}

.service-banner:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.6);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.service-banner .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 16px;
}

.service-banner .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}

.counter-style-two.service-page{
  position: relative;
  padding-top: 0px;
  padding-bottom: 90px;
}

.counter-style-two.service-page .inner-container{
  position: relative;
  display: block;
  background: #fff;
  margin: -45px -60px 0px -60px;
  padding: 87px 60px 0px 60px;
}

.counter-style-two.service-page .content-box .text{
  padding-bottom: 26px;
}

.counter-style-two.service-page .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  line-height: 26px;
  color: #0c0d24;
  text-align: center;
  border: 2px solid #ededed;
  padding: 15px 48px;
}

.counter-style-two.service-page .content-box .btn-box a:hover{
  color: #fff;
  background: #fd571d;
  border-color: #fd571d;
}

.service-section.service-page{
  position: relative;
  padding: 0px 0px 70px 0px;
}

.main-footer.service-page{
  padding-top: 55px;
}

.service-style-two.service-page-2{
  position: relative;
  padding: 120px 0px 90px 0px;
}

.service-style-two.service-page-2 .service-block-two{
  margin-bottom: 30px;
}

.service-style-two.service-page-2 .service-block:nth-child(3) .service-block-two .inner-box .lower-content .icon-box:before{
  background: url(../images/icons/shap-3.png);
  width: 76px;
  height: 44px;
}

.service-style-two.service-page-2 .service-block:nth-child(5) .service-block-two .inner-box .lower-content .icon-box:before{
  background: url(../images/icons/shap-2.png);
  width: 63px;
  height: 68px;
}

.service-style-four.service-page-3{
  position: relative;
  padding: 0px;
  padding-bottom: 180px;
}

.service-style-four.service-page-3 .service-block-four{
  margin-bottom: 30px;
}

.service-style-four.service-page-3 .service-block:nth-child(2) .service-block-four .icon-box{
  color: #4ed63c;
}

.service-style-four.service-page-3 .service-block:nth-child(3) .service-block-four .icon-box{
  color: #ff698e;
}

.service-style-four.service-page-3 .service-block:nth-child(4) .service-block-four .icon-box{
  color: #fd571c;
}

.service-style-four.service-page-3 .service-block:nth-child(5) .service-block-four .icon-box{
  color: #ff443f;
}

.service-style-four.service-page-3 .service-block:last-child .service-block-four .icon-box{
  color: #ecdf2e;
}

.service-style-four.service-page-3 .inner-container{
  position: relative;
  display: block;
  background: #fff;
  margin: -45px -60px 0px -60px;
  padding: 64px 60px 0px 60px;
}

.service-style-four.service-page-3 .title-box .top-text{
  color: #fd571c;
}

.service-style-four.service-page-3 .service-block-four .inner-box h3 a:hover{
  color: #fd571d;
}

.service-style-four.service-page-3 .service-block-four .inner-box .btn-box a:hover,
.subscribe-style-two.service-page-3 .left-content .btn-box a:hover{
  background: #fd571c;
  border-color: #fd571c;
}

.subscribe-style-two.service-page-3{
  position: relative;
}

.subscribe-style-two.service-page-3 .right-content .inner-box{
  background: #fd571d;
}

.subscribe-style-two.service-page-3 .right-content .inner-box .video-box a{
  background: #ff875d;
}


/** service-single **/

.page-title-two{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.page-title-two:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.6);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.page-title-two .content-box{
  position: relative;
  padding: 220px 0px 205px 0px;
}

.page-title-two .content-box h1 {
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 16px;
}

.page-title-two .content-box .bread-crumb{
  position: absolute;
  display: inline-block;
  right: 0px;
  bottom: 0px;
  background: #fff;
  padding: 23px 25px;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}

.page-title-two .content-box .bread-crumb li{
  position: relative;
  display: inline-block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
  margin-right: 5px;
  padding-right: 15px;
}

.page-title-two .content-box .bread-crumb li a{
  color: #0c0d24;
}

.page-title-two .content-box .bread-crumb li a:hover{
  color: #fd571d;
}

.page-title-two .content-box .bread-crumb li:last-child{
  margin: 0px;
  padding: 0px;
}

.page-title-two .content-box .bread-crumb li:before{
  position: absolute;
  content: '';
  background: #0c0d24;
  width: 5px;
  height: 2px;
  right: 0px;
  top: 15px;
}

.page-title-two .content-box .bread-crumb li:last-child:before{
  display: none;
}

.solution-method.type-one{
  position: relative;
  padding: 100px 0px 70px 0px;
}

.solution-method.type-one .image-box{
  position: relative;
  display: block;
  margin-right: 50px;
}

.solution-method.type-one .image-box img{
  width: 100%;
}

.solution-method.type-one .content-box{
  position: relative;
  display: block;
  background: #fff;
  margin-left: -200px;
  padding: 40px 30px 42px 60px;
  border-top-left-radius: 10px;
  margin-top: 90px;
  z-index: 1;
}

.solution-method .content-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 47px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 9px;
}

.solution-method .content-box h1 span{
  font-size: 40px;
  font-weight: 400;
}

.solution-method .content-box .text p{
  position: relative;
  display: block;
  margin-bottom: 18px;
}

.solution-method .content-box .text p:last-child{
  margin-bottom: 0px;
}

.solution-method .content-box .text{
  padding-bottom: 21px;
}

.solution-method .content-box .list-item li{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #5d5d66;
  margin-bottom: 9px;
  padding-left: 30px;
}

.solution-method .content-box .list-item li:last-child{
  margin-bottom: 0px;
}

.solution-method .content-box .list-item li:before{
  position: absolute;
  content: "\f132";
  font-family: "Flaticon";
  font-size: 16px;
  color: #000;
  left: 0px;
  top: 0px;
  font-weight: 600;
}


/** solution-method/type-two **/

.solution-method.type-two{
  position: relative;
  padding-bottom: 170px;
}

.solution-method.type-two .image-box{
  position: relative;
  display: block;
  margin-left: 50px;
}

.solution-method.type-two .image-box img{
  width: 100%;
}

.solution-method.type-two .content-box{
  position: relative;
  display: block;
  background: #fff;
  margin-right: -200px;
  padding: 40px 60px 42px 15px;
  border-top-right-radius: 10px;
  margin-top: 90px;
  z-index: 1;
}

.solution-method.type-two .upper-box{
  margin-bottom: 70px;
}

.solution-method.type-two .lower-box .single-item .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 26px 30px 28px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  transition: all 500ms ease;
}

.solution-method.type-two .lower-box .single-item:hover .inner-box{
  background: #fd571d;
}

.solution-method.type-two .lower-box .single-item .inner-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 55px;
  line-height: 55px;
  color: #000;
  margin-bottom: 12px;
  transition: all 500ms ease;
}

.solution-method.type-two .lower-box .single-item:hover .inner-box .icon-box,
.solution-method.type-two .lower-box .single-item:hover .inner-box h4,
.solution-method.type-two .lower-box .single-item:hover .inner-box h4 a,
.solution-method.type-two .lower-box .single-item:hover .inner-box .text,
.solution-method.type-two .lower-box .single-item:hover .inner-box .link-btn a{
  color: #fff;
}

.solution-method.type-two .lower-box .single-item .inner-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  color: #242425;
  margin-bottom: 11px;
  transition: all 500ms ease;
}

.solution-method.type-two .lower-box .single-item .inner-box h4 a{
  position: relative;
  display: inline-block;
  color: #242425;
}

.solution-method.type-two .lower-box .single-item .inner-box .text{
  position: relative;
  color: #5c5c66;
  display: block;
  margin-bottom: 17px;
  transition: all 500ms ease;
}

.solution-method.type-two .lower-box .single-item .inner-box .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #0c0d24;
}

.solution-method.type-two .lower-box .single-item .inner-box .link-btn a i{
  position: relative;
  font-size: 20px;
  top: 4px;
  margin-left: 8px;
}


/** our-value **/

.our-value{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  padding-bottom: 55px;
}

.our-value .inner-container{
  position: relative;
  max-width: 920px;
  width: 100%;
  margin: 0 auto;
}

.our-value .inner-container .inner-box{
  position: relative;
  padding: 62px 50px 30px 50px;
  top: -80px;
}

.our-value .inner-container .inner-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/bg-shap-2.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-position: center;
  background-repeat: no-repeat;
}

.our-value .inner-container .inner-box .content-box .title-text{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 60px;
}

.our-value .inner-container .inner-box .content-box .single-item h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 55px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
}

.our-value .inner-container .inner-box .content-box .single-item .text{
  position: relative;
  display: block;
  color: #fff;
}

.our-value .inner-container .inner-box .content-box .single-item{
  position: relative;
  display: block;
  margin-bottom: 43px;
  padding: 0px 41px;
}

.our-value .inner-container .inner-box .content-box{
  position: relative;
}

.our-value .inner-container .inner-box .content-box:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.2);
  width: 1px;
  height: 360px;
  left: 50%;
  top: 70px;
  transform: translateX(-50%);
}

/** key-benefits **/

.key-benefits{
  position: relative;
  padding: 62px 0px 60px 0px;
}

.key-benefits .title-box{
  position: relative;
  max-width: 800px;
  width: 100%;
  margin-bottom: 33px;
}

.key-benefits .title-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 15px;
}

.key-benefits .title-box h1 span{
  font-size: 40px;
  font-weight: 400;
}

.key-benefits .title-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #5d5d66;
}

.key-benefits .image-box img{
  width: 100%;
}

.key-benefits .image-box.image-two{
  margin-left: -50px;
}

.key-benefits .content-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 32px 20px 44px 80px;
  margin-top: 30px;
  margin-right: -85px;
  z-index: 1;
}

.key-benefits .content-box .single-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 24px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 0px;
}

.key-benefits .content-box .single-box .text{
  position: relative;
  display: block;
  font-size: 16px;
  color: #0c0d24;
}

.key-benefits .content-box .single-box{
  position: relative;
  display: block;
  margin-bottom: 19px;
}

.key-benefits .content-box .single-box:last-child{
  margin-bottom: 0px;
}


/** single-service-2 **/

.page-title-two.single-service-2{
  position: relative;
}

.page-title-two.single-service-2:before{
  background: rgba(0,0,0,0.6);
}

.page-title-two.single-service-2 .content-box h1{
  color: #fff;
}

.single-service{
  position: relative;
  display: block;
  padding: 100px 0px 165px 0px;
}

.sidebar .categories-widget .widget-title{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 23px;
}

.sidebar .categories-widget{
  position: relative;
  display: block;
  background: #ecf3f9;
  padding: 32px 25px 40px 25px;
  margin-bottom: 30px;
}

.sidebar .categories-widget .categories-list{
  position: relative;
  display: block;
  background: #fff;
  padding: 10px 40px 10px 40px;
}

.sidebar .categories-widget .categories-list li a{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #0c0d24;
  padding: 13px 0px;
  border-bottom: 1px solid #dddddd;
}

.sidebar .categories-widget .categories-list li a:before{
  position: absolute;
  content: "\f061";
  font-size: 12px;
  color: #fff;
  font-weight: 700;
  font-family: 'Font Awesome 5 Free';
  left: 15px;
  top: 15px;
  opacity: 0;
  transition: all 500ms ease;
}

.sidebar .categories-widget .categories-list li a:hover:before{
  opacity: 1;
}

.sidebar .categories-widget .categories-list li:last-child a{
  border-bottom: none;
}

.sidebar .categories-widget .categories-list li a:hover{
  color: #fff;
  background: #fd571d;
  padding-left: 35px;
  border-color: #fd571d;
}

.sidebar .support-widget{
  position: relative;
  display: block;
  background: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.sidebar .support-widget .upper-box{
  position: relative;
  display: block;
  background: #fd571d;
  padding: 33px 40px 51px 70px;
}

.sidebar .support-widget .upper-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
}

.sidebar .support-widget .upper-box h3 a{
  color: #fff;
}

.sidebar .support-widget .upper-box .text{
  position: relative;
  display: block;
  color: #fff;
  margin-bottom: 9px;
}

.sidebar .support-widget .upper-box h3.phone{
  margin-bottom: 0px;
}

.sidebar .support-widget .lower-box{
  position: relative;
  display: block;
  padding: 32px 35px 51px 65px;
}

.sidebar .support-widget .lower-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #0c0d24;
  margin-bottom: 11px;
}

.sidebar .support-widget .lower-box .text{
  position: relative;
  display: block;
  color: #585858;
  margin-bottom: 30px;
}

.sidebar .support-widget .lower-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #fff;
  background: #fd571d;
  border-radius: 30px;
  padding: 12px 35px 12px 58px;
  z-index: 1;
}

.sidebar .support-widget .lower-box .btn-box a:hover{
  background: #192d66;
}

.sidebar .support-widget .lower-box .btn-box a i{
  position: absolute;
  left: 8px;
  top: 7px;
  font-size: 16px;
  width: 37px;
  height: 37px;
  line-height: 37px;
  text-align: center;
  color: #fd571d;
  background: #fff;
  border-radius: 50%;
}

.single-service .single-service-content .content-style-one{
  position: relative;
  display: block;
  margin-bottom: 105px;
}

.single-service .single-service-content .service-box .inner-box{
  position: relative;
}

.single-service .single-service-content .content-style-one .image-box{
  position: relative;
  display: block;
  margin-left: 130px;
}

.single-service .single-service-content .content-style-one .content-box{
  position: absolute;
  left: 0px;
  top: 50px;
  background: #fff;
  max-width: 640px;
  width: 100%;
  height: 100%;
  border-top-right-radius: 10px;
  padding: 40px 30px 30px 0px;
}

.single-service .single-service-content .content-style-one .image-box img{
  width: 100%;
}

.single-service .single-service-content h1 {
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 47px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 9px;
}

.single-service .single-service-content h1 span {
  font-size: 40px;
  font-weight: 400;
}

.single-service .single-service-content .service-box .inner-box .text {
  padding-bottom: 21px;
}

.single-service .single-service-content .service-box .inner-box .text p {
  position: relative;
  display: block;
  margin-bottom: 18px;
}

.single-service .single-service-content .service-box .inner-box .text p:last-child {
  margin-bottom: 0px;
}

.single-service .single-service-content .service-box .inner-box .list-item li {
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #5d5d66;
  margin-bottom: 9px;
  padding-left: 30px;
}

.single-service .single-service-content .service-box .inner-box .list-item li:before {
  position: absolute;
  content: "\f132";
  font-family: "Flaticon";
  font-size: 16px;
  color: #000;
  left: 0px;
  top: 0px;
  font-weight: 600;
}

.single-service .single-service-content .service-box .inner-box .list-item li:last-child {
  margin-bottom: 0px;
}

.single-service .single-service-content .content-style-two .image-box{
  position: relative;
  display: block;
  margin-right: 120px;
}

.single-service .single-service-content{
  position: relative;
  display: block;
  margin-left: 30px;
}

.single-service .single-service-content .content-style-two .image-box img{
  width: 100%;
}

.single-service .single-service-content .content-style-two .content-box{
  position: absolute;
  right: 0px;
  top: 45px;
  background: #fff;
  max-width: 640px;
  width: 100%;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  padding: 40px 0px 45px 55px;
}

.single-service .single-service-content .content-style-two{
  position: relative;
  margin-bottom: 60px;
}

.tabs-box .tab{
  position:relative;
  display:none;
  transform:scale(0.9,0.9) translateY(0px);
  transition: all 900ms ease;
  -moz-transition: all 900ms ease;
  -webkit-transition: all 900ms ease;
  -ms-transition: all 900ms ease;
  -o-transition: all 900ms ease;
}

.tabs-box .tab.active-tab{
  display:block;
  transform:scale(1) translateY(0px);
}

.single-service .single-service-content .content-style-three .tabs-box{
  position: relative;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box{
  position: absolute;
  left: 0px;
  top: 0px;
  max-width: 270px;
  width: 100%;
}

.single-service .single-service-content .content-style-three .tabs-box .tabs-content{
  position: relative;
  padding-left: 315px;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box li{
  position: relative;
  display: block;
  padding: 18px 10px 10px 20px;
  border-right: 4px solid #e7e7e7;
  z-index: 1;
  transition: all 500ms ease;
  cursor: pointer;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box li.active-btn{
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
  border-color: #fd571d;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box li .icon-box{
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  font-weight: 500;
  color: #000;
  margin-bottom: 9px;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box li h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #242425;
  font-weight: 700;
  margin-bottom: 8px;
}

.single-service .single-service-content .content-style-three .tabs-box .tab-btn-box li .text{
  position: relative;
  display: block;
  color: #5d5d66;
}

.single-service .single-service-content .content-style-three .tabs-content .text p{
  position: relative;
  margin-bottom: 20px;
}

.single-service .single-service-content .content-style-three .tabs-content .text p:last-child{
  margin-bottom: 0px;
}

.single-service .single-service-content .content-style-three .tabs-content .text{
  position: relative;
  padding-bottom: 18px;
  padding-top: 16px;
}

.single-service .single-service-content .content-style-three .tabs-content .image-box img{
  width: 100%;
}

.single-service .single-service-content .content-style-three{
  position: relative;
  display: block;
  margin-bottom: 60px;
}

.single-service .single-service-content .content-style-four .content-box .single-box {
  position: relative;
  display: block;
  margin-bottom: 19px;
}

.single-service .single-service-content .content-style-four .content-box .single-box:last-child{
  margin-bottom: 0px;
}

.single-service .single-service-content .content-style-four .content-box .single-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 24px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 0px;
}

.single-service .single-service-content .content-style-four .content-box .single-box .text {
  position: relative;
  display: block;
  font-size: 16px;
  color: #0c0d24;
}

.single-service .single-service-content .content-style-four .title-box{
  margin-bottom: 34px;
}

.single-service .single-service-content .content-style-four .title-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
}

.single-service .single-service-content .content-style-four .image-box{
  position: relative;
  max-width: 495px;
  width: 100%;
}

.single-service .single-service-content .content-style-four .image-box img{
  width: 100%;
}

.single-service .single-service-content .content-style-four .inner-box{
  position: relative;
}

.single-service .single-service-content .content-style-four .content-box{
  position: absolute;
  top: 30px;
  right: 0px;
  background: #fff;
  padding: 32px 30px 44px 30px;
  z-index: 1;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

.single-service .single-service-content .content-style-four h1{
  margin-bottom: 16px;
}


/*** 

====================================================================
                        Shop-Page
====================================================================

***/

/** shop-banner **/

.shop-banner{
  position: relative;
}

.shop-banner .slide {
  position: relative;
  padding: 180px 0px 100px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.shop-banner .slide:before{
  position: absolute;
  content: '';
  background: rgba(25, 25, 25, 0.75);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.shop-banner .content-box{
  position: relative;
  display: block;
  margin-right: -35px;
}

.shop-banner .content-box h1{
  position:relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #ffffff;
  font-weight: 700;
  margin-bottom: 14px;
  opacity:0;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  -webkit-transform: translateX(-20px);
  -moz-transform: translateX(-20px);
  -ms-transform: translateX(-20px);
  -o-transform: translateX(-20px);
  transform: translateX(-20px);
}

.shop-banner .active h1{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 500ms;
}

.shop-banner .content-box .text{
  position:relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #ffffff;
  font-weight: 400;
  margin-bottom: 25px;
  opacity:0;
  -webkit-transition: all 1000ms ease;
  -moz-transition: all 1000ms ease;
  -ms-transition: all 1000ms ease;
  -o-transition: all 1000ms ease;
  transition: all 1000ms ease;
  -webkit-transform: translateX(20px);
  -moz-transform: translateX(20px);
  -ms-transform: translateX(20px);
  -o-transform: translateX(20px);
  transform: translateX(20px);
}

.shop-banner .active .text{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1000ms;
}

.shop-banner .content-box .btn-box{
  position:relative;
  display: block;
  opacity:0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);
}

.shop-banner .active .btn-box{
  opacity: 1;
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
  transition-delay: 1500ms;
}

.shop-banner .content-box .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fd571c;
  padding: 14.5px 39px;
  text-align: center;
}

.shop-banner .content-box .btn-box a:hover{
  background: #fff;
  color: #fd571c;
}

.shop-banner .image-box .image{
  position: relative;
  display: block;
  margin-left: 70px;
}

.shop-banner .image-box .image img{
  max-width: none;
  float: left;
  opacity: 0;
  -webkit-transition: all 1500ms ease;
  -moz-transition: all 1500ms ease;
  -ms-transition: all 1500ms ease;
  -o-transition: all 1500ms ease;
  transition: all 1500ms ease;
  -webkit-transform: translateX(100px);
  -moz-transform: translateX(100px);
  -ms-transform: translateX(100px);
  -o-transform: translateX(100px);
  transform: translateX(100px);
}

.shop-banner .active .image-box .image img{
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  transition-delay: 1500ms;
}

.shop-banner .owl-nav{
  display: none;
}

.shop-banner .owl-dots {
  position: absolute;
  left: 370px;
  top: 100%;
  transform: translateY(-50px);
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
}

.shop-banner .owl-theme .owl-dots .owl-dot span{
  height: 8px;
  width: 8px;
  background: #fff;
  margin: 0px 5px;
  border: none;
  cursor: pointer;
  transition: all 500ms ease;
}

.shop-banner .owl-theme .owl-dots .owl-dot.active span,
.shop-banner .owl-theme .owl-dots .owl-dot span:hover{
  background: #fd571d;
}


/** shop-style-two **/

.shop-style-two{
  position: relative;
  padding: 90px 0px 60px 0px;
}

.latest-product .single-item{
  position: relative;
  display: block;
  background: #edf2ff;
  padding: 100px 20px 100px 30px;
  min-height: 296px;
}

.latest-product .single-column:last-child .single-item{
  background: #f8e8e8;
}

.latest-product .single-item .image-box{
  position: absolute;
  left: 30px;
  top: 50px;
  width: 296px;
  height: 205px;
}

.latest-product .single-item .image-box img{
  width: 100%;
}

.latest-product .single-item .content-box{
  position: relative;
  padding-left: 325px;
}

.latest-product .single-item .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  color: #0f0e0e;
  font-weight: 700;
  margin-bottom: 12px;
}

.latest-product .single-item .content-box h3 a{
  color: #0f0e0e;
}

.latest-product .single-item .content-box h3 a:hover,
.latest-product .single-item .content-box .link-btn a:hover{
  color: #fd571d;
}

.latest-product .single-item .content-box .link-btn a{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #0f0e0e;
}

.latest-product .single-item .content-box .link-btn a i{
  font-size: 14px;
  margin-left: 5px;
}

.shop-style-two .upper-box{
  position: relative;
  display: block;
  margin-bottom: 53px;
}

.shop-style-two .lower-box .title-text{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  font-weight: 700;
  color: #0f0e0e;
  margin-bottom: 25px;
}

.shop-block-two .inner-box{
  position: relative;
  display: block;
  margin-bottom: 15px;
  transition: all 500ms ease;
}

.shop-block-two:hover .inner-box{
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
}

.shop-block-two .inner-box .image-holder{
  position: relative;
  display: block;
  overflow: hidden;
  background: #f5f5f5;
}

.shop-block-two .inner-box .image-holder img{
  width: 100%;
  transition: all 900ms ease;
}

.shop-block-two:hover .inner-box .image-holder img{
  transform: scale(1.05);
  opacity: 0.5;
}

.shop-block-two .inner-box .image-holder .info-list{
  position: absolute;
  top: 15px;
  right: 20px;
}

.shop-block-two .inner-box .image-holder .info-list li{
  position: relative;
  display: inline-block;
  margin: 0px 3px;
}

.shop-block-two .inner-box .image-holder .info-list li a{
  position: relative;
  display: inline-block;
  font-size: 20px;
  color: #d8d8d8;
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  border: 1px solid #d9d5d5;
  border-radius: 50%;
}

.shop-block-two .inner-box .image-holder .info-list li a:hover{
  background: #fd571d;
  border-color: #fd571d;
  color: #fff;
}

.shop-block-two .inner-box .lower-content{
  position: relative;
  display: block;
  padding: 26px 15px 15px 15px;
}

.shop-block-two .inner-box .lower-content .price span{
  position: relative;
  display: inline-block;
  font-size: 20px;
  line-height: 26px;
  color: #fd571d;
  margin: 0px 5px;
}

.shop-block-two .inner-box .lower-content .price del{
  position: relative;
  display: inline-block;
  font-size: 20px;
  line-height: 26px;
  color: #313131;
  margin: 0px 5px;
}

.shop-block-two .inner-box .lower-content .price{
  position: relative;
  display: block;
  margin-bottom: 10px;
}

.shop-block-two .inner-box .lower-content .rating li{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #feb362;
}

.shop-block-two .inner-box .lower-content .rating{
  position: relative;
  display: block;
  margin-bottom: 4px;
}

.shop-block-two .inner-box .lower-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  color: #313131;
  margin-bottom: 11px;
}

.shop-block-two .inner-box .lower-content h4 a{
  position: relative;
  display: inline-block;
  color: #313131;
}

.shop-block-two .inner-box .lower-content h4 a:hover{
  color: #fd571d;
}

.shop-block-two .inner-box .lower-content .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fd571d;
  text-decoration: underline;
}

.shop-block-two .inner-box .lower-content .link-btn a:hover{
  color: #192d66;
}

.shop-block-two .inner-box .lower-content .link-btn{
  margin-bottom: 16px;
}

.shop-block-two .inner-box .lower-content .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  background: #313131;
  padding: 12px 42px;
  text-align: center;
}

.shop-block-two .inner-box .lower-content .btn-box a:hover{
  background: #fd571c;
}


/** shipping-service **/

.shipping-service{
  position: relative;
  background: #192d66;
  padding: 50px 0px;
}

.shipping-service .outer-container .single-item{
  position: relative;
  width: 33.333%;
  float: left;
}

.shipping-service .outer-container .single-item .inner-box{
  position: relative;
  text-align: center;
  width: 265px;
  height: 265px;
  background: #7599ff;
  border-radius: 50%;
  margin: 0 auto;
}

.shipping-service .outer-container .single-item:nth-child(2) .inner-box{
  background: #ffa15c;
}

.shipping-service .outer-container .single-item:last-child .inner-box{
  background: #59df85;
}

.shipping-service .outer-container .single-item .inner-box .box{
  display: table;
  width: 100%;
  height: 100%;
}

.shipping-service .outer-container .single-item .inner-box .box .inner {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

.shipping-service .outer-container .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 36px;
  line-height: 36px;
  color: #fff;
  margin-bottom: 9px;
}

.shipping-service .outer-container .single-item h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
}

.shipping-service .outer-container .single-item .text{
  position: relative;
  display: block;
  color: #fff;
}

.shop-style-two.shop-page-2{
  position: relative;
  padding-bottom: 90px;
}

.shop-style-two.shop-page-2 .upper-box{
  margin-bottom: 0px;
}

.shop-style-two.shop-page-2 .item-sorting{
  position: relative;
  display: block;
  margin-bottom: 50px;
}

.shop-style-two.shop-page-2 .item-sorting:before{
  position: absolute;
  content: '';
  background: #f0f0f0;
  width: 100%;
  height: 1px;
  left: 0px;
  top: 50%;
  transform: translateY(-50%);
}

.shop-style-two.shop-page-2 .item-sorting .result-column h6{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #313131;
  border: 1px solid #f0f0f0;
  background: #fff;
  padding: 10.5px 47px;
  text-align: center;
}

.shop-style-two.shop-page-2 .item-sorting .select-column{
  position: relative;
  min-width: 230px;
}

.shop-style-two.shop-page-2 .item-sorting .select-box .ui-state-default{
  height: 50px;
  border-color: #f0f0f0;
  border-radius: 0px;
  color: #313131;
}

.shop-style-two.shop-page-2 .item-sorting .select-box .ui-selectmenu-button span.ui-selectmenu-text{
  height: 50px;
  padding: 17px 19px;
}

.shop-style-two.shop-page-2 .item-sorting .select-box .ui-selectmenu-button span.ui-icon::before{
  color: #dbdbdb;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group{
  position: relative;
  display: block;
  margin-bottom: 26px;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group input[type='search']{
  position: relative;
  width: 100%;
  height: 55px;
  background: #fff;
  border: 8px solid #f5f5f5;
  font-size: 16px;
  color: #484848;
  padding: 10px 15px 10px 40px;
  transition: all 500ms ease;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group input::-webkit-input-placeholder{
  color: #484848;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group input:focus{
  border-color: #fd571d;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group input:focus + button,
.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group button:hover{
  color: #fd571d;
}

.shop-style-two.shop-page-2 .shop-sidebar .search-widget .form-group button{
  position: absolute;
  left: 25px;
  top: 16px;
  background: transparent;
  font-size: 14px;
  color: #313131;
  cursor: pointer;
  transition: all 500ms ease;
}

.shop-style-two.shop-page-2 .shop-sidebar .widget-title{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #313131;
  padding-bottom: 7px;
  margin-bottom: 30px;
}

.shop-style-two.shop-page-2 .shop-sidebar .widget-title:before{
  position: absolute;
  content: '';
  background: linear-gradient(90deg, #fd571d 0%, #fff 100%);
  width: 100%;
  height: 2px;
  left: 0px;
  bottom: 0px;
}

.shop-style-two.shop-page-2 .shop-sidebar .categories-widget .shop-categories li a{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #5e5e5e;
  padding: 8px 0px;
  border-bottom: 1px solid #e7e8e5;
}

.shop-style-two.shop-page-2 .shop-sidebar .categories-widget .shop-categories li a:hover {
  color: #fff;
  background: #fd571d;
  padding-left: 35px;
  border-color: #fd571d;
}

.shop-style-two.shop-page-2 .shop-sidebar .categories-widget .shop-categories li a:hover:before {
  opacity: 1;
}

.shop-style-two.shop-page-2 .shop-sidebar .categories-widget{
  margin-bottom: 30px;
}

.shop-style-two.shop-page-2 .shop-sidebar .categories-widget .shop-categories li a:before {
  position: absolute;
  content: "\f105";
  font-size: 15px;
  color: #fff;
  font-weight: 700;
  font-family: 'Font Awesome 5 Free';
  left: 15px;
  top: 10px;
  opacity: 0;
  transition: all 500ms ease;
}

.range-slider{
  position:relative;
}

.range-slider .title {
  position: relative;
}

.range-slider .title:before {
  position: absolute;
  content: '$';
  left: -11px;
  top: 11px;
  color: #808080;
  font-size: 16px;
}

.range-slider .input{
  float:right;
  color:#808080;
  max-width: 75px;
  font-size:16px;
  margin-top:11px;
  position: relative;
}

.range-slider .input input{
  background:none;
  color:#808080;
  font-size:16px;
  font-weight:400;
  text-align:left;
}

.range-slider .ui-widget.ui-widget-content{
  height:4px;
  border:none;
  margin-bottom:22px;
  background:#eef2f5; 
}

.range-slider .ui-slider .ui-slider-range{
  top:0px;
  height:4px;
  background:#fd571d; 
}

.range-slider .ui-state-default,
.range-slider .ui-widget-content .ui-state-default{
  top:-6px;
  width:14px;
  height:14px;
  background:#ffffff;
  border-radius:50%;
  cursor:pointer; 
  margin-left: 0px;
  box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.20);
  border: none;
}

.range-slider .filter-btn{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #ffffff;
  background: #fd571d;
  margin-right: 37px;
  padding: 9.5px 30px;
  transition: all 500ms ease;
}

.range-slider .filter-btn:hover{
  background: #192d66;
}

.shop-style-two.shop-page-2 .shop-sidebar .price-filters .widget-title{
  margin-bottom: 27px;
}

.shop-style-two.shop-page-2 .shop-sidebar .price-filters .widget-title:before{
  display: none;
}

.shop-style-two.shop-page-2 .shop-sidebar .price-filters{
  margin-bottom: 55px;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post{
  position: relative;
  display: block;
  padding: 20px 0px 0px 90px;
  min-height: 77px;
  margin-bottom: 20px;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post .post-thumb{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 77px;
  height: 77px;
  overflow: hidden;
  border-radius: 50%;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post .post-thumb img{
  width: 100%;
  border-radius: 50%;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post h5{
  position: relative;
  display: block;
  font-size: 18px;
  font-weight: 700;
  color: #313131;
  margin-bottom: 6px;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post h5 a{
  color: #313131;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post h5 a:hover{
  color: #fd571d;
}

.shop-style-two.shop-page-2 .shop-sidebar .post-widget .post .price{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #b8cf67;
}

.shop-style-two.shop-page-2 .product-block-area{
  position: relative;
  display: block;
  margin: 0px 5px;
  padding-left: 10px;
  padding-bottom: 60px;
}

.shop-style-two.shop-page-2 .product-block-area .shop-block{
  padding: 0px 10px;
}


/** single-shop **/

.single-shop{
  position: relative;
  padding: 90px 0px;
}

.page-title.shop-single{
  position: relative;
  padding: 120px 0px 140px 0px;
}

.page-title.shop-single:before{
  background: rgba(25, 25, 25, 0.75);
}

.page-title.shop-single .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  color: #fff;
  margin: 0px;
}

.single-shop .products-details .image-carousel{
  position: relative;
  display: block;
  background: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.05);
  margin-bottom: 25px;
}

.single-shop .products-details .image-carousel li{
  position: relative;
  display: block;
  background: #fff;
}

.single-shop .products-details .image-carousel li img,
.single-shop .products-details .thumbs-carousel li img{
  width: 100%;
}

.single-shop .products-details .thumbs-carousel{
  position: relative;
  display: block;
  text-align: center;
  padding: 0px 40px;
}

.single-shop .products-details .thumbs-carousel li{
  position: relative;
  max-width: 175px;
  width: 100%;
  cursor: pointer;
}

.single-shop .products-details .owl-nav{
  display: none;
}

.single-shop .products-details .carousel-content{
  position: relative;
  display: block;
  margin-right: 45px;
}

.single-shop .products-details .content-box .product-price{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  font-weight: 700;
  color: #0d0e23;
  margin-bottom: 12px;
}

.single-shop .products-details .content-box .price{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  color: #a4c226;
  margin-bottom: 12px;
  font-weight: 700;
}

.single-shop .products-details .content-box .customer-reviews{
  position: relative;
  display: block;
  margin-bottom: 5px;
}

.single-shop .products-details .content-box .customer-reviews .rating{
  position: relative;
  display: inline-block;
  margin-right: 25px;
}

.single-shop .products-details .content-box .rating li{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #ffb12a;
}

.single-shop .products-details .content-box .customer-reviews .reviews{
  position: relative;
  display: inline-block;
}

.single-shop .products-details .content-box .customer-reviews .reviews a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #4d403e;
}

.single-shop .products-details .content-box .other-info li{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #727272;
}

.single-shop .products-details .content-box .other-info li h6{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #4d403e;
}

.single-shop .products-details .content-box .other-info .categories-box{
  position: relative;
  display: inline-block;
  margin-right: 25px;
}

.single-shop .products-details .content-box .other-info .tags-box{
  position: relative;
  display: inline-block;
}

.single-shop .products-details .content-box .other-info{
  position: relative;
  display: block;
  margin-bottom: 17px;
}

.single-shop .products-details .content-box .product-info{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.single-shop .products-details .content-box .product-info li{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #727272;
}

.single-shop .products-details .content-box .product-info li h6{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #4d403e;
  font-weight: 700;
}

.single-shop .products-details .content-box .product-info .model{
  position: relative;
  display: inline-block;
  margin-right: 15px;
}

.single-shop .products-details .content-box .product-info .brand{
  position: relative;
  display: inline-block;
}

.single-shop .products-details .content-box .product-info .model li.model-no{
  border: 1px solid #f0f0f0;
  text-transform: uppercase;
  padding: 8.5px 15px;
}

.single-shop .item-quantity .input-group {
  position: relative;
  display: inline-block;
  border-collapse: separate;
  border: 1px solid #f0f0f0;
  max-width: 70px;
  width: 100%;
  height: 45px;
}

.single-shop .item-quantity input.quantity-spinner {
  line-height: 28px;
  width: 40px;
  padding: 7px 0px !important;
  box-shadow: none !important;
  border: none;
  text-align: center;
  font-size: 18px;
  color: #4d403e;
}

.single-shop .item-quantity input:focus{
  border: none;
  box-shadow: none;
}

.single-shop .bootstrap-touchspin .input-group-btn-vertical > .btn.bootstrap-touchspin-up {
  position: absolute;
  display: inline-block;
  background: transparent;
  padding: 0px 0px;
  left: -2px;
  top: -1px;
  margin: 0px;
}

.single-shop .bootstrap-touchspin .glyphicon-chevron-up:before {
  content: "\f106";
  font-size: 16px;
  font-style: normal;
  color: #c9c9c9;
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
}

.single-shop .bootstrap-touchspin .input-group-btn-vertical > .btn.bootstrap-touchspin-down {
  position: absolute;
  display: inline-block;
  background: transparent;
  padding: 0px 0px;
  left: -2px;
  top: 16px;
  margin: 0px;
}

.single-shop .bootstrap-touchspin .glyphicon-chevron-down:before {
  content: "\f107";
  font-size: 16px;
  font-style: normal;
  color: #c9c9c9;
  font-weight: 900;
  font-family: 'Font Awesome 5 Free';
}

.single-shop .products-details .content-box .addto-cart-box .item-quantity{
  position: relative;
  display: inline-block;
  width: 70px;
  margin-right: 25px;
}

.single-shop .products-details .bootstrap-touchspin .input-group-btn-vertical {
  position: absolute;
  width: 20px;
  height: 45px;
  top: 0px;
  right: 0px;
}

.single-shop .products-details .content-box .addto-cart-box .bye-btn{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  background: #fd571c;
  padding: 9.5px 46px;
  text-align: center;
  margin-right: 10px;
}

.single-shop .products-details .content-box .addto-cart-box .bye-btn:hover,
.single-shop .products-details .content-box .addto-cart-box .cart-btn:hover{
  background: #f54607;
  color: #fff;
}

.single-shop .products-details .content-box .addto-cart-box .cart-btn{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #645f5e;
  background: #fef9f8;
  padding: 9.5px 47px;
  text-align: center;
  transition: all 500ms ease;
  cursor: pointer;
}

.single-shop .products-details .content-box .addto-cart-box{
  position: relative;
  display: block;
  margin-bottom: 23px;
}

.single-shop .products-details .content-box .lower-content .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fd571d;
  text-decoration: underline;
}

.single-shop .products-details .content-box .lower-content .link-btn{
  position: relative;
  display: block;
  margin-bottom: 16px;
}

.single-shop .products-details .content-box .lower-content .link-btn a:hover{
  color: #192d66;
}

.single-shop .products-details .content-box .lower-content .text h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #0d0e23;
  font-weight: 700;
  margin-bottom: 10px;
}

.single-shop .products-details .content-box .lower-content .text p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  margin-bottom: 8px;
  padding-right: 25px;
}

.single-shop .products-details .content-box .lower-content .text p:last-child{
  margin-bottom: 0px;
}

.single-shop .products-details .content-box{
  position: relative;
  display: block;
  padding-top: 43px;
}

.single-shop .products-details{
  position: relative;
  display: block;
  margin-bottom: 100px;
}

.single-shop .product-info-tabs .tab-btns{
  position: relative;
  display: block;
  border-bottom: 2px solid #f1f1f1;
}

.single-shop .product-info-tabs .tab-btns li{
  position: relative;
  float: left;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #0d0e23;
  background: #faf3f0;
  text-transform: uppercase;
  padding: 14.5px 15px;
  width: 176px;
  text-align: center;
  transition: all 500ms ease;
  cursor: pointer;
  margin-right: 2px;
}

.single-shop .product-info-tabs .tab-btns li.active-btn,
.single-shop .product-info-tabs .tab-btns li:hover{
  color: #fff;
  background: #fd571d;
}

.single-shop .product-info-tabs .tab-btns li:last-child{
  margin-right: 0px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .top-content{
  position: relative;
  display: block;
  max-width: 1000px;
  width: 100%;
  padding-top: 34px;
  padding-bottom: 50px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .top-content p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 25px;
  color: #6e6b6b;
  margin: 0px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item{
  position: relative;
  display: block;
  padding: 0px 0px 0px 280px;
  margin-bottom: 34px;
  min-height: 200px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item:last-child{
  margin-bottom: 0px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item .image-box{
  position: absolute;
  left: 0px;
  top: 1px;
  width: 230px;
  height: 165px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item .image-box img{
  width: 100%;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0f0e0e;
  margin-bottom: 12px;
}

.single-shop .product-info-tabs .tabs-content .inner-box .lower-content .single-item ul li{
  position: relative;
  display: block;
  font-size: 16px;
  color: #6e6b6b;
  line-height: 26px;
  margin: 0px;
}

.single-shop .product-info-tabs{
  position: relative;
  display: block;
  margin-bottom: 25px;
}



/*** 

====================================================================
                        History-Page
====================================================================

***/

/** history-banner **/

.history-banner{
  position: relative;
  width: 100%;
  padding: 125px 0px 210px 0px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.history-banner:before{
  position: absolute;
  content: '';
  background: rgba(0,0,0,0.5);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.history-banner .content-box{
  position: relative;
  max-width: 780px;
  width: 100%;
  margin: 0 auto;
}

.history-banner .content-box .inner-box{
  position: relative;
  display: block;
  text-align: center;
  background: transparent;
  border: 6px solid #fff;
  padding: 92px 30px 73px 30px;
}

.history-banner .content-box .inner-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 16px;
}

.history-banner .content-box .inner-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
}


/** our-company **/

.our-company{
  position: relative;
}

.our-company .image-box{
  position: relative;
  display: block;
  margin-right: 45px;
  margin-top: -85px;
}

.our-company .image-box img{
  width: 100%;
}

.our-company .content-box .top-text{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #fd571d;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.our-company .content-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 15px;
}

.our-company .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
  margin-bottom: 18px;
}

.our-company .content-box .text{
  position: relative;
  display: block;
}

.our-company .content-box{
  position: relative;
  display: block;
  min-height: 600px;
  padding-top: 60px;
}

.our-company .content-box .lower-box{
  position: absolute;
  background: #fd571d;
  border-radius: 10px;
  padding: 40px 30px 28px 40px;
  min-width: 580px;
  right: 0px;
  bottom: 0px;
}

.our-company .content-box .lower-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  margin: 0px;
}

.fact-counter.history-page{
  position: relative;
  background: #fff;
  padding-top: 85px;
  padding-bottom: 85px;
}

.fact-counter.history-page .inner-container{
  margin: 0px;
}

/** history-section **/

.history-section{
  position: relative;
  padding: 100px 0px;
}

.history-section .bg-column{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 50%;
  height: 100%;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.history-section .inner-container{
  position: relative;
  display: block;
  background: #fff9f7;
  padding-top: 140px;
  padding-bottom: 120px;
}

.history-section .inner-container:before{
  position: absolute;
  content: '';
  background: #fff9f7;
  width: 5000%;
  height: 100%;
  left: -40px;
  top: 0px;
}

.history-section .inner-container h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 10px;
}

.history-section .inner-container .text p{
  position: relative;
  display: block;
  color: #5d5b63;
  margin-bottom: 9px;
}

.history-section .inner-container .text p:last-child{
  margin-bottom: 0px;
}

.history-section .inner-container .text{
  position: relative;
  display: block;
  color: #5d5b63;
}

.history-section .inner-container .mission-box a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
  background: #fd571c;
  padding: 12px 43px;
  text-align: center;
}

.history-section .inner-container .mission-box a:hover{
  transform: translateY(-5px);
}

.history-section .inner-container .mission-box .text{
  padding-bottom: 28px;
}

.history-section .inner-container .vision-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 56px 30px 58px 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1)
}

.callto-action-section.history-page{
  position: relative;
  padding-top: 60px;
}

.main-footer.history-page{
  position: relative;
  padding-top: 135px;
}


/** our-journey **/

.our-journey{
  position: relative;
  padding-top: 60px;
}

.our-journey .owl-dots,
.our-journey .content-box .years-box .owl-nav{
  display: none;
}

.our-journey .image-box img{
  position: relative;
  max-width: none;
  float: right;
}

.our-journey .content-box{
  position: relative;
  display: block;
  background: #fd571d;
  padding: 74px 50px 165px 30px;
  margin-top: 75px;
  z-index: 1;
  clip-path: polygon(0% 0%, 100% 0%, 100% 68%, 0% 230%, 0% 0%);
}

.our-journey .content-box .years-box{
  position: absolute;
  left: 30px;
  top: 50%;
  transform: translateY(-50%);
}

.our-journey .content-box .years-thumbs{
  position: relative;
  max-width: 100px;
  overflow: hidden;
}

.our-journey .content-box .years-thumbs .years{
  position:relative;
}

.our-journey .content-box .years-thumbs .years h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #fff;
  font-weight: 700;
}

.our-journey .content-box .journey-carousel{
  position: relative;
  padding-left: 135px;
}


.our-journey .owl-nav{
  position: absolute;
  top: 65%;
  transform: translateY(-50%);
}

.our-journey .owl-prev,
.our-journey .owl-next{
  position: absolute;
  display: inline-block;
  font-size: 12px;
  color: #fd571d;
  width: 35px;
  height: 35px;
  line-height: 35px;
  background: #fff;
  text-align: center;
  border-radius: 50%;
  cursor: pointer;
  transition: all 500ms ease;
}

.our-journey .owl-prev:hover,
.our-journey .owl-next:hover{
  background: #192d66;
  color: #fff;
}

.our-journey .owl-prev{
  left: -105px;
  top: -70px;
}

.our-journey .owl-next{
  left: -105px;
  top: 40px;
}

.our-journey .content-box .journey-carousel .text p{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  color: #ffe4df;
  margin-bottom: 19px;
}

.our-journey .content-box .journey-carousel .text p:last-child{
  margin-bottom: 0px;
}

.our-journey .sec-title h1{
  margin-bottom: 42px;
  color: #0c0d24;
}



/*** 

====================================================================
                        Partner-Page
====================================================================

***/


/** clients-style-one **/

.clients-style-one{
  position: relative;
  padding-top: 120px;
}

.clients-style-one .inner-container{
  position: relative;
  display: block;
  padding-bottom: 60px;
  border-bottom: 1px solid #dedede;
}

.clients-style-one .content-box h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 34px;
  padding-right: 40px;
}

.clients-style-one .content-box .single-box{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.clients-style-one .content-box .single-box:last-child{
  margin-bottom: 0px;
}

.clients-style-one .content-box .single-box h3{
  position: relative;
  display: block;
  font-size: 22px;
  line-height: 30px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 7px;
}

.clients-style-one .content-box{
  position: relative;
  display: block;
  margin-right: 40px;
}

.clients-style-one .inner-box .clients-logo{
  position: relative;
  display: block;
  text-align: center;
  border: 1px solid #f2f2f2;
  margin-bottom: 30px;
  transition: all 500ms ease;
}

.clients-style-one .inner-box .clients-logo a{
  position: relative;
  display: block;
}

.clients-style-one .inner-box .clients-logo:hover{
  border-color: #fd571d;
}

.clients-style-one .inner-box .clients-logo img{
  opacity: 1;
  transition: all 500ms ease;
}

.clients-style-one .inner-box .clients-logo:hover img{
  opacity: 0.5;
}

.clients-style-one .inner-box{
  position: relative;
  display: block;
  margin-top: 9px;
}


/** clients-style-two **/

.clients-style-two{
  position: relative;
}

.clients-style-two .sec-title{
  margin-bottom: 40px;
}

.clients-style-two .sec-title h1{
  color: #0c0d24;
  margin-bottom: 5px;
}

.clients-style-two .sec-title p{
  line-height: 26px;
}

.clients-style-two .inner-container{
  position: relative;
  display: block;
  padding: 58px 0px 60px 0px;
  border-bottom: 1px solid #dedede;
}

.clients-style-two .clients-logo {
  position: relative;
  display: block;
  text-align: center;
  background: #fff;
  margin-bottom: 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.05);
  transition: all 500ms ease;
}

.clients-style-two .clients-logo img{
  opacity: 1;
  transition: all 500ms ease;
}

.clients-style-two .clients-logo:hover img{
  opacity: 0.5;
  transform: scale(1.03);
}


/** clients-style-three **/

.clients-style-three{
  position: relative;
  padding: 70px 0px 110px 0px;
}

.clients-style-three .sec-title{
  margin-bottom: 45px;
}

.clients-style-three .sec-title h1{
  color: #0c0d24;
  margin-bottom: 5px;
}

.clients-style-three .sec-title p{
  line-height: 26px;
}

.clients-style-three .clients-logo{
  position: relative;
  display: block;
  text-align: center;
  border: 1px solid #f2f2f2;
  transition: all 500ms ease;
}

.clients-style-three .clients-logo a{
  position: relative;
  display: block;
}

.clients-style-three .clients-logo:hover{
  border-color: #fd571d;
}

.clients-style-three .clients-logo img{
  opacity: 1;
  transition: all 500ms ease;
}

.clients-style-three .clients-logo:hover img{
  opacity: 0.5;
}


/*** 

====================================================================
                        Testimonial-Page
====================================================================

***/

.testimonial-style-four.testimonial-page{
  position: relative;
  padding-top: 83px;
}

.testimonial-style-four.testimonial-page .sec-title .top-text{
  color: #fd571d;
}

.testimonial-style-four.testimonial-page .testimonial-content .inner-box .author-info .author-thumb:before,
.testimonial-style-four.testimonial-page .owl-theme .owl-dots .owl-dot span{
  background: #fd571d;
}

.testimonial-style-four.testimonial-page .owl-theme .owl-dots .owl-dot.active span{
  border-color: #fd571d;
  background: transparent;
}

.testimonial-style-three.testimonial-page{
  position: relative;
  padding-top: 50px;
  padding-bottom: 100px;
}

.testimonial-style-three.testimonial-page .title-box .top-text{
  color: #fd571d;
}

.testimonial-style-three.testimonial-page .testimonial-content:hover .inner-box .text{
  background: #fd571d;
}

.testimonial-style-three.testimonial-page .owl-nav .owl-prev:hover, 
.testimonial-style-three.testimonial-page .owl-nav .owl-next:hover{
  background: #fd571d;
  border-color: #fd571d;
}

.testimonial-section.testimonial-page{
  position: relative;
}

.testimonial-section.testimonial-page:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-8.png);
  width: 100%;
  height: 560px;
  left: 0px;
  bottom: 0px;
  background-repeat: no-repeat;
  background-position: bottom center;
  background-size: cover;
}

.testimonial-section.testimonial-page .sec-title h1:before{
  color: #fd571d;
}

.testimonial-section.testimonial-page .inner-content:before{
  display: none;
}

.testimonial-section.testimonial-page .inner-content{
  margin-bottom: 0px;
}

.testimonial-style-five.testimonial-page{
  position: relative;
  padding-top: 100px;
}

.testimonial-style-five.testimonial-page .sec-title .top-text{
  color: #fd571d;
}

.testimonial-style-five.testimonial-page .testimonial-content .inner-box .author-info .author-thumb:before{
  background: #fd571d;
}

.testimonial-style-five.testimonial-page .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-five.testimonial-page .owl-theme .owl-dots .owl-dot span:hover{
  border-color: #fd571d;
  background: transparent;
}

.testimonial-style-five.testimonial-page .owl-theme .owl-dots .owl-dot span{
  background: #fd571d;
}

.testimonial-style-six.testimonial-page{
  position: relative;
  padding-top: 25px;
}

.testimonial-style-six.testimonial-page .sec-title .top-text{
  color: #fd571d;
}

.testimonial-style-six.testimonial-page .testimonial-content .inner-box .author-info .author-thumb:before{
  background: #fd571d;
}

.testimonial-style-six.testimonial-page .owl-theme .owl-dots .owl-dot span{
  background: #fd571d;
}

.testimonial-style-six.testimonial-page .owl-theme .owl-dots .owl-dot.active span, 
.testimonial-style-six.testimonial-page .owl-theme .owl-dots .owl-dot span:hover{
  border-color: #fd571d;
  background: transparent;
}



/*** 

====================================================================
                        Gallery-Page
====================================================================

***/

/** gallery-banner **/

.gallery-banner{
  position: relative;
  padding: 80px 0px;
  border-bottom: 2px solid #ededed;
}

.gallery-banner .content-box h1{
  position: relative;
  display: block;
  font-size: 60px;
  line-height: 70px;
  font-weight: 700;
  color: #0c0d24;
  margin: 0px;
}

.image-gallery{
  position: relative;
  padding: 80px 0px;
}

.image-gallery .single-item{
  margin-bottom: 30px;
}

.image-gallery .single-item .image-box{
  position: relative;
  overflow: hidden;
  background: #192d66;
}

.image-gallery .single-item img{
  width: 100%;
  transition: all 5s ease;
}

.image-gallery .single-item:hover img{
  transform: scale(1.5);
  opacity: 0.2;
}



/*** 

====================================================================
                        Comingsoon-Page
====================================================================

***/


.coming-soon{
  position: relative;
  width: 100%;
  min-height: 1020px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding: 250px 0px 250px 0px;
}

.coming-soon:before{
  position: absolute;
  content: '';
  background: rgba(8, 6, 26, 0.75);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.coming-soon .content-box h1{
  position: relative;
  display: block;
  font-size: 60px;
  line-height: 72px;
  color: #fff;
  font-weight: 700;
  margin-bottom: 10px;
}

.coming-soon .content-box .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #dfdedf;
  margin-bottom: 40px;
}

.coming-soon .timer {
  position: relative;
  display: inline-block;
}

.coming-soon .cs-countdown{
  position: relative;
  text-align: center;
  margin-bottom: 30px;
}

.coming-soon .cs-countdown .count-col{
  position: relative;
  display: inline-block;
  text-align: center;
  height: 195px;
  width: 195px;
  background: #fff;
  border-radius: 50%;
  margin-right:25px;
}

.coming-soon .cs-countdown .count-col:before{
  position: absolute;
  content: '';
  background: url(../images/icons/shap-9.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-position: center;
  background-repeat: no-repeat;
  border-radius: 50%;
}

.coming-soon .cs-countdown .count-col:nth-child(2):before{
  background: url(../images/icons/shap-10.png);
}

.coming-soon .cs-countdown .count-col:nth-child(3):before{
  background: url(../images/icons/shap-11.png);
}

.coming-soon .cs-countdown .count-col:last-child:before{
  background: url(../images/icons/shap-12.png);
}

.coming-soon .cs-countdown .count-col:last-child{
  margin: 0;
}

.coming-soon .cs-countdown .count-col span{
  position: relative;
  display: block;
  font-size: 40px;
  color: #fd571d;
  line-height: 40px;
  padding-top: 85px;
  font-weight: 700;
  text-align: center;
  top: -24px;
}

.coming-soon .cs-countdown .count-col h6{
  position: absolute;
  left: 0;
  right: 0;
  top: 130px;
  margin: 0 auto;
  text-transform: capitalize;
  font-size: 20px;
  line-height: 26px;
  color: #302929;
  text-align: center;
}

.coming-soon .content-box .lower-text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #dfdedf;
}

.coming-soon .content-box .lower-text a{
  display: inline-block;
  color: #fd571d;
}

.coming-soon .content-box .lower-text a:hover{
  text-decoration: underline;
}

.coming-soon .content-box{
  position: relative;
}

.coming-soon .content-box .image-box{
  position: absolute;
  right: -150px;
  bottom: -200px;
}

.coming-soon .content-box .image-box img {
  position: relative;
  display: inline-block;
  width: auto;
  animation-name: rotateme;
  animation-duration: 30s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 30s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 30s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 30s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 30s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}


/** error-section **/

.error-section{
  position: relative;
  width: 100%;
  min-height: 1020px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding: 180px 0px 95px 0px;
}

.error-section:before{
  position: absolute;
  content: '';
  background: rgba(255, 255, 255, 0.75);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.error-section .content-box .error-title{
  position: relative;
  display: block;
  font-size: 185px;
  line-height: 150px;
  color: #0d0d25;
  font-weight: 700;
  margin-bottom: 15px;
}

.error-section .content-box h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 40px;
  color: #0d0d25;
  margin-bottom: 12px;
}

.error-section .content-box .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 26px;
  color: #555763;
  margin-bottom: 42px;
}

.error-section .content-box .btn-box a {
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #fff;
  background: #fd571d;
  border-radius: 30px;
  padding: 12px 35px 12px 58px;
  z-index: 1;
}

.error-section .content-box .btn-box a i {
  position: absolute;
  left: 8px;
  top: 7px;
  font-size: 16px;
  width: 37px;
  height: 37px;
  line-height: 37px;
  text-align: center;
  color: #fd571d;
  background: #fff;
  border-radius: 50%;
}

.error-section .content-box .btn-box a:hover{
  background: #192d66;
}

.error-section .content-box .btn-box{
  position: relative;
  display: block;
  margin-bottom: 42px;
}

.error-section .content-box .image-box img {
  position: relative;
  display: inline-block;
  width: auto;
  animation-name: rotateme;
  animation-duration: 30s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 30s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotateme;
  -moz-animation-duration: 30s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -ms-animation-name: rotateme;
  -ms-animation-duration: 30s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;
  -o-animation-name: rotateme;
  -o-animation-duration: 30s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}


/*** 

====================================================================
                        Case-Page
====================================================================

***/

.case-banner{
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 125px 0px 145px 0px;
}

.case-banner:before{
  position: absolute;
  content: '';
  background: rgba(255,255,255,0.25);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.case-banner .content-box h1{
  position: relative;
  display: block;
  font-size: 90px;
  line-height: 88px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 17px;
}

.case-banner .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
}

/** case-page-1 **/

.project-style-two.case-page-1{
  position: relative;
  padding: 0px;
}

.project-style-two.case-page-1:before{
  display: none;
}

.project-style-two.case-page-1 .top-content{
  position: relative;
}

.project-style-two.case-page-1 .top-content .title-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 64px 60px 35px 60px;
  margin: -45px -60px 0px -60px;
}

.project-style-two.case-page-1 .top-content .title-box .title-inner{
  position: relative;
  display: block;
  max-width: 670px;
  width: 100%;
  margin: 0 auto;
}

.project-style-two.case-page-1 .top-content .title-box .title-inner .top-text{
  position: relative;
  display: block;
  color: #fd571d;
  font-weight: 700;
  margin-bottom: 10px;
}

.project-style-two.case-page-1 .top-content .title-box .title-inner h1{
  position: relative;
  display: block;
  font-size: 40px;
  line-height: 48px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 23px;
}

.project-style-two.case-page-1 .top-content .title-box .title-inner h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
}

.project-style-two.case-page-1 .lower-content-box{
  position: relative;
  background: #fff;
  padding: 80px 0px;
}

.project-style-two.case-page-1 .lower-content-box:before{
  position: absolute;
  content: '';
  background: url(../images/icons/pattern-9.png);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  background-repeat: no-repeat;
  background-size: cover;
}

.project-style-two.case-page-1 .lower-content-box .project-block-two{
  margin-bottom: 30px;
}

/** case-title **/

.case-title{
  position: relative;
  padding: 0px;
}

.case-title .title-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 64px 60px 44px 60px;
  margin: -45px -60px 0px -60px;
}

.case-title .title-box .title-inner{
  position: relative;
  display: block;
  max-width: 670px;
  width: 100%;
  margin: 0 auto;
}

.case-title .title-box .title-inner .top-text{
  position: relative;
  display: block;
  color: #fd571d;
  font-weight: 700;
  margin-bottom: 15px;
}

.case-title .title-box .title-inner h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
}

.project-style-four.case-page-2{
  position: relative;
}

.project-style-four.case-page-2 .top-content .title-box .top-text,
.project-style-four.case-page-2 .inner-box .overlay-box .box .inner h3 a:hover{
  color: #fd571d;
}

.project-style-four.case-page-2 .top-content .filters .filter-btns li.active, 
.project-style-four.case-page-2 .top-content .filters .filter-btns li:hover{
  background: #fd571d;
}

.project-style-four.case-page-2 .inner-box .overlay-box .box .btn-box a{
  background: #fd571d;
}

.project-style-four.case-page-2 .inner-box .overlay-box .box .btn-box a:hover{
  background: #192d66;
}


/** case-page-3 **/

.project-section.case-page-3{
  position: relative;
  padding: 100px 0px 130px 0px;
}

.project-section.case-page-3:before{
  display: none;
}

.project-section.case-page-3 .project-block-one{
  margin-bottom: 30px;
}

.project-section.case-page-3 .project-block-one .inner-box .lower-content{
  background: #f4f4f4;
}

.project-section.case-page-3 .project-block-one .inner-box .lower-content:after{
  background: #f4f4f4;
}

.project-section.case-page-3 .project-block-one .inner-box .lower-content:before,
.project-section.case-page-3 .project-block-one:hover .inner-box .lower-content:after{
  background: #fd571d;
}

.project-section.case-page-3 .project-block-one:hover .inner-box .lower-content h3,
.project-section.case-page-3 .project-block-one:hover .inner-box .lower-content h3 a,
.project-section.case-page-3 .project-block-one:hover .inner-box .lower-content .text{
  color: #fff;
}

.subscribe-style-two.case-page-3{
  position: relative;
}

.subscribe-style-two.case-page-3 .right-content .inner-box{
  background: #fd571d;
}

.subscribe-style-two.case-page-3 .right-content .inner-box .video-box a{
  background: #ff875d;
}

.subscribe-style-two.case-page-3 .right-content .inner-box .phone:before{
  color: #ff535e;
}

.subscribe-style-two.case-page-3 .left-content .btn-box a:hover{
  background: #fd571d;
  border-color: #fd571d;
}


/** case-page-4 **/

.project-style-four.case-page-4{
  position: relative;
  background: #fff;
  padding: 80px 0px;
}

.project-style-four.case-page-4 .top-content{
  margin: 0px;
}

.project-style-four.case-page-4 .top-content .filters{
  float: none;
  position: absolute;
  left: -180px;
  top: 0px;
}

.project-style-four.case-page-4 .filters .filter-btns{
  margin: 0px;
  width: 150px;
  padding: 0px;
}

.project-style-four.case-page-4 .top-content .filters .filter-btns li{
  float: none;
  display: block;
  text-align: left;
  text-transform: capitalize;
  font-size: 18px;
  font-weight: 700;
  color: #3c3c49;
  padding-left: 0px;
}

.project-style-four.case-page-4 .top-content .filters .filter-btns li.active, 
.project-style-four.case-page-4 .top-content .filters .filter-btns li:hover{
  background: #fd571d;
  color: #fff;
  padding-left: 10px;
}

.main-footer.case-page-4 {
  padding-top: 55px;
}


/** case-single-1 **/

.page-title-two.case-single-1{
  position: relative;
}

.page-title-two.case-single-1:before{
  background: rgba(30, 30, 30, 0.25);
}

.page-title-two.case-single-1 .content-box h1{
  color: #fff;
}

.customer-challenge{
  position: relative;
  padding: 78px 0px 100px 0px;
}

.customer-challenge .title-box{
  position: relative;
  max-width: 770px;
  width: 100%;
  margin: 0 auto;
  padding-bottom: 70px;
}

.customer-challenge .title-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 60px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 9px;
}

.customer-challenge .title-box p{
  position: relative;
  font-size: 18px;
}

.customer-challenge .content-box h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  color: #0c0d24;
  margin-bottom: 22px;
}

.customer-challenge .content-box .list-item li{
  position: relative;
  display: block;
  padding-left: 30px;
  margin-bottom: 9px;
}

.customer-challenge .content-box .list-item li:before {
  position: absolute;
  content: "\f132";
  font-family: "Flaticon";
  font-size: 14px;
  color: #000;
  left: 0px;
  top: -1px;
  font-weight: 600;
}

.customer-challenge .image-box{
  position: relative;
  margin-left: 15px;
  margin-top: 3px;
}

.customer-challenge .image-box img{
  width: 100%;
}

.our-solution{
  position: relative;
  padding: 65px 0px;
}

.our-solution .bg-column{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 60%;
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.our-solution .inner-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 33px 30px 43px 60px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.our-solution .inner-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 60px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 3px;
}

.our-solution .inner-box .text{
  position: relative;
  display: block;
  padding-bottom: 21px;
}

.our-solution .inner-box .text p{
  position: relative;
  margin-bottom: 18px;
}

.our-solution .inner-box .text p:last-child{
  margin-bottom: 0px;
}

.our-solution .inner-box .list-item li{
  position: relative;
  display: block;
  padding-left: 30px;
  margin-bottom: 9px;
}

.our-solution .inner-box .list-item li:before {
  position: absolute;
  content: "\f132";
  font-family: "Flaticon";
  font-size: 14px;
  color: #000;
  left: 0px;
  top: -1px;
  font-weight: 600;
}

.project-benefits{
  position: relative;
  padding: 80px 0px 50px 0px;
}

.project-benefits .title-box{
  position: relative;
  max-width: 770px;
  width: 100%;
  margin: 0 auto;
  padding-bottom: 32px;
}

.project-benefits .title-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 60px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 9px;
}

.project-benefits .title-box p{
  position: relative;
  font-size: 18px;
}

.project-benefits .single-item{
  position: relative;
  display: block;
  background: #fff;
  padding: 35px 30px 38px 30px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
}

.project-benefits .single-item:before{
  position: absolute;
  content: '';
  background: #fd571d;
  width: 100%;
  height: 2px;
  left: 0px;
  bottom: 0px;
  transform: scale(0,0);
  transition: all 500ms ease;
}

.project-benefits .single-item:hover:before{
  transform: scale(1,1);
}

.project-benefits .single-item .icon-box{
  position: relative;
  display: inline-block;
  font-size: 50px;
  line-height: 50px;
  color: #000;
  margin-bottom: 10px;
}

.project-benefits .single-item h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #242425;
  font-weight: 700;
  margin-bottom: 11px;
}

.project-benefits .single-item h4 a{
  color: #242425;
}

.project-benefits .single-item h4 a:hover{
  color: #fd571d;
}

.project-benefits .single-item .text{
  position: relative;
  display: block;
}

.project-benefits .inner-content{
  position: relative;
  display: block;
  margin-bottom: 64px;
}

.project-benefits .lower-content .back-btn{
  position: relative;
  display: inline-block;
  margin-right: 200px;
}

.project-benefits .lower-content .back-btn a{
  position: relative;
  display: inline-block;
  padding: 28px 0px 26px 95px;
  font-size: 20px;
  font-weight: 700;
  color: #242425;
}

.project-benefits .lower-content .back-btn a:hover{
  color: #fd571d;
}

.project-benefits .lower-content .back-btn a i{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 80px;
  height: 80px;
  line-height: 80px;
  background: url(../images/resource/btn-bg.png);
  background-repeat: no-repeat;
  border-radius: 50%;
  font-size: 28px;
  color: #fff;
  font-weight: 700;
  text-align: center;
}

.project-benefits .lower-content .social-links{
  position: relative;
  display: inline-block;
}

.project-benefits .lower-content .social-links li{
  position: relative;
  display: inline-block;
  margin: 0px 3px;
}

.project-benefits .lower-content .social-links li a{
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #0c0d24;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid #ececec;
  border-radius: 50%;
}

.project-benefits .lower-content .social-links li a:hover{
  color: #fff;
  background: #fd571d;
  border-color: #fd571d;
}


/** some-project **/

.some-project{
  position: relative;
  padding-bottom: 100px;
}

.some-project .title-box h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 60px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 5px;
}

.some-project .title-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #5d5d66;
}

.some-project .title-box{
  position: relative;
  max-width: 790px;
  width: 100%;
  margin-bottom: 47px;
}

.some-project .single-item{
  position: relative;
}

.some-project .single-item .image-box{
  position: relative;
  display: block;
  overflow: hidden;
  background: #192d66;
}

.some-project .single-item .image-box img{
  width: 100%;
  transition: all 500ms ease;
}

.some-project .single-item:hover .image-box img{
  opacity: 0.2;
  transform: scale(1.1);
}

.some-project .single-item .image-box:before {
  position: absolute;
  content: '';
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  right: 0px;
  box-shadow: inset 0px -140px 50px -40px rgba(0, 0, 0, 0.7);
  z-index: 1;
  transition: all 500ms ease;
}

.some-project .single-item:hover .image-box:before{
  opacity: 0;
}

.some-project .single-item .content-box {
  position: absolute;
  left: 0px;
  bottom: 0px;
  width: 100%;
  text-align: center;
  padding: 40px 50px;
  z-index: 2;
}

.some-project .single-item .content-box h4 {
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 32px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
}

.some-project .single-item .content-box h4 a{
  color: #fff;
}


/** single-project **/

.single-project{
  position: relative;
  padding: 80px 0px 55px 0px;
}

.single-project img{
  width: 100%;
}

.single-project .top-image{
  position: relative;
}

.single-project .left-content{
  position: relative;
  display: block;
  padding-top: 48px;
  margin-right: 10px;
}

.single-project .left-content .content-style-one h1{
  position: relative;
  display: block;
  font-size: 50px;
  line-height: 60px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 10px;
}

.single-project .left-content .content-style-one .text{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 25px;
  margin-bottom: 35px;
}

.single-project .left-content .content-style-one h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 28px;
  color: #0c0d24;
  margin-bottom: 29px;
}

.single-project .left-content .content-style-one .list-item{
  position: relative;
  display: block;
  margin-bottom: 29px;
}

.single-project .left-content .content-style-one .list-item li{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  padding-left: 30px;
  margin-bottom: 9px;
}

.single-project .left-content .content-style-one .list-item li:last-child{
  margin-bottom: 0px;
}

.single-project .left-content .content-style-one .list-item li:before {
  position: absolute;
  content: "\f132";
  font-family: "Flaticon";
  font-size: 14px;
  color: #000;
  left: 0px;
  top: 1px;
  font-weight: 600;
}

.single-project .left-content .content-style-one .info-box li{
  position: relative;
  float: left;
  width: 50%;
  font-size: 16px;
  color: #0c0d24;
  margin-bottom: 18px;
}

.single-project .left-content .content-style-one .info-box li h6{
  position: relative;
  display: block;
  font-size: 16px;
  color: #0c0d24;
  font-weight: 700;
  line-height: 26px;
  margin-bottom: 6px;
}

.single-project .left-content .content-style-one .info-box{
  position: relative;
  display: block;
  padding-bottom: 39px;
}

.single-project .left-content .content-style-two h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 38px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 13px;
}

.single-project .left-content .content-style-two .text{
  position: relative;
  display: block;
  font-size: 18px;
  color: #0c0d24;
  margin-bottom: 20px;
}

.single-project .left-content .content-style-two .list-item li{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  margin-bottom: 9px;
  padding-left: 35px;
}

.single-project .left-content .content-style-two .list-item li:last-child{
  margin-bottom: 0px;
}

.single-project .left-content .content-style-two .list-item li i{
  position: absolute;
  left: 0px;
  top: 5px;
  font-size: 22px;
  color: #fd571d;
}

.single-project .left-content .content-style-two .list-item li:nth-child(2) i{
  font-size: 20px;
  color: #67ebf7;
}

.single-project .left-content .content-style-two .list-item li:last-child i{
  font-size: 25px;
  color: #d075fa;
}

.single-project .left-content .content-style-two .list-item{
  position: relative;
  display: block;
  margin-bottom: 31px;
}

.single-project .right-content{
  position: relative;
  display: block;
  margin-left: 10px;
  margin-top: -120px;
}

.single-project .right-content .image-one{
  position: relative;
  display: block;
  margin: 0px 30px 54px 10px;
}

.single-project .right-content h2 {
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 38px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 13px;
}

.single-project .right-content .text {
  position: relative;
  display: block;
  font-size: 18px;
  color: #0c0d24;
  margin-bottom: 23px;
}

.single-project .right-content .list-item li {
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 26px;
  padding-left: 25px;
  margin-bottom: 10px;
}

.single-project .right-content .list-item li:last-child{
  margin-bottom: 0px;
}

.single-project .right-content .list-item li:before{
  position: absolute;
  content: "\f101";
  font-family: 'Font Awesome 5 Free';
  font-size: 16px;
  color: #0c0d24;
  font-weight: 700;
  left: 0px;
  top: 1px;
}

.single-project .right-content .list-item{
  position: relative;
  display: block;
  margin-bottom: 16px;
}

.single-project .inner-content .lower-content .back-btn {
  position: relative;
  display: inline-block;
  margin-right: 200px;
}

.single-project .inner-content .lower-content .back-btn a {
  position: relative;
  display: inline-block;
  padding: 28px 0px 26px 95px;
  font-size: 20px;
  font-weight: 700;
  color: #242425;
}

.single-project .inner-content .lower-content .back-btn a:hover{
  color: #fd571d;
}

.single-project .inner-content .lower-content .back-btn a i {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 80px;
  height: 80px;
  line-height: 80px;
  background: url(../images/resource/btn-bg.png);
  background-repeat: no-repeat;
  border-radius: 50%;
  font-size: 28px;
  color: #fff;
  font-weight: 700;
  text-align: center;
}

.single-project .inner-content .lower-content .social-links {
  position: relative;
  display: inline-block;
}

.single-project .inner-content .lower-content .social-links li {
  position: relative;
  display: inline-block;
  margin: 0px 3px;
}

.single-project .inner-content .lower-content .social-links li a {
  position: relative;
  display: inline-block;
  font-size: 15px;
  color: #0c0d24;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid #ececec;
  border-radius: 50%;
}

.single-project .inner-content .lower-content .social-links li a:hover {
  color: #fff;
  background: #fd571d;
  border-color: #fd571d;
}

.single-project .inner-content .lower-content{
  position: relative;
  display: block;
  padding-top: 50px;
}



/*** 

====================================================================
                        Blog-Page
====================================================================

***/

.page-title.blog-page{
  position: relative;
  padding: 75px 0px 70px 0px;
}

.page-title.blog-page:before{
  background: rgba(255,255,255,0.5);
}

/** blog-grid **/

.blog-grid{
  position: relative;
  padding: 80px 0px 80px 0px;
}

.blog-grid .news-block-three{
  margin-bottom: 30px;
}

.blog-grid .news-block-two .inner-box h4 a:hover{
  color: #fc9a36;
  text-decoration: underline;
}

.blog-grid .news-block-two .inner-box .link-btn a:hover{
  color: #fc9a36;
}

.blog-grid .pagination-wrapper{
  position: relative;
  display: block;
  padding-top: 10px;
}


/** blog-classic **/

.blog-classic{
  position: relative;
  padding: 80px 0px;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content{
  position: relative;
  display: block;
  padding: 32px 40px 50px 60px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  margin-bottom: 50px;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  color: #000;
  margin-bottom: 11px;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content .text{
  position: relative;
  display: block;
  color: #585858;
  margin-bottom: 30px;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content .btn-box a {
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  font-weight: 700;
  color: #fff;
  background: #fc9a36;
  border-radius: 30px;
  padding: 12px 35px 12px 58px;
  z-index: 1;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content .btn-box a:hover{
  background: #192d66;
}

.sidebar-page-container .blog-sidebar .contact-widget .widget-content .btn-box a i {
  position: absolute;
  left: 8px;
  top: 7px;
  font-size: 16px;
  width: 37px;
  height: 37px;
  line-height: 37px;
  text-align: center;
  color: #fc9a36;
  background: #fff;
  border-radius: 50%;
}

.sidebar-page-container .blog-sidebar .search-widget{
  margin-bottom: 50px;
}

.sidebar-page-container .blog-sidebar .search-widget .form-group{
  position: relative;
  display: block;
  margin-bottom: 0px;
}

.sidebar-page-container .blog-sidebar .search-widget .form-group input[type='search']{
  position: relative;
  width: 100%;
  height: 50px;
  border: 1px solid #eaeaea;
  border-radius: 30px;
  padding: 10px 135px 10px 20px;
  font-size: 16px;
  color: #b8b8b8;
  transition: all 500ms ease;
}

.sidebar-page-container .blog-sidebar .search-widget .form-group input:focus{
  border-color: #fc9a36;
}

.sidebar-page-container .blog-sidebar .search-widget .form-group input::-webkit-input-placeholder{
  color:#b8b8b8;
}

.sidebar-page-container .blog-sidebar .search-widget .form-group button{
  position: absolute;
  top: 0px;
  right: 0px;
  width: 120px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 16px;
  color: #fff;
  background: #fc9a36;
  border-radius: 30px;
  cursor: pointer;
  transition: all 500ms ease;
}

.sidebar-page-container .blog-sidebar .widget-title {
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 24px;
}

.sidebar-page-container .blog-sidebar .post-widget .post{
  position: relative;
  display: block;
  padding: 10px 0px 0px 110px;
  min-height: 113px;
  margin-bottom: 27px;
}

.blog-sidebar .categories-widget .categories-list li a:hover {
  background: #fc9a36;
  border-color: #fc9a36;
}

.sidebar-page-container .blog-sidebar .post-widget .post:last-child{
  margin-bottom: 0px;
}

.sidebar-page-container .blog-sidebar .post-widget{
  position: relative;
  display: block;
  margin-bottom: 33px;
}

.sidebar-page-container .blog-sidebar .post-widget .post .post-thumb{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 99px;
  height: 99px;
  background: #fff;
  border-radius: 50%;
}

.sidebar-page-container .blog-sidebar .post-widget .post .post-thumb img{
  width: 100%;
  border-radius: 50%;
  transition: all 500ms ease;
}

.sidebar-page-container .blog-sidebar .post-widget .post:hover .post-thumb img{
  opacity: 0.5;
}

.sidebar-page-container .blog-sidebar .post-widget .post .post-thumb span{
  position: absolute;
  left: 37px;
  top: -11px;
  width: 27px;
  height: 27px;
  background: #fc9a36;
  font-size: 18px;
  color: #fff;
  text-align: center;
  border-radius: 50%;
}

.sidebar-page-container .blog-sidebar .post-widget .post h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 22px;
  color: #0c0d24;
  margin-bottom: 5px;
}

.sidebar-page-container .blog-sidebar .post-widget .post h5 a{
  color: #0c0d24;
}

.sidebar-page-container .blog-sidebar .post-widget .post h5 a:hover{
  color: #fc9a36;
}

.sidebar-page-container .blog-sidebar .post-widget .post .text{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 22px;
  margin-bottom: 10px;
  color: #616b8c;
}

.sidebar-page-container .blog-sidebar .post-widget .post .post-info{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 22px;
  color: #616b8c;
}

.sidebar-page-container .blog-sidebar .categories-widget{
  margin-bottom: 45px;
}

.sidebar-page-container .blog-sidebar .tags-widget{
  position: relative;
  display: block;
  background: #ecf3f9;
  padding: 32px 15px 40px 65px;
}

.sidebar-page-container .blog-sidebar .tags-widget .widget-content ul li{
  position: relative;
  float: left;
  margin-bottom: 10px;
  margin-right: 10px;
}

.sidebar-page-container .blog-sidebar .tags-widget .widget-content ul li a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #5d5d66;
  background: #fff;
  border-radius: 30px;
  text-align: center;
  padding: 9.5px 15px;
}

.sidebar-page-container .blog-sidebar .tags-widget .widget-content ul li a:hover{
  background: #fc9a36;
  color: #fff;
}

.sidebar-page-container .blog-sidebar .tags-widget .widget-title{
  margin-bottom: 16px;
}

.blog-classic .blog-classic-content{
  position: relative;
  display: block;
  margin-left: 30px;
}

.news-block-four .inner-box{
  position: relative;
  display: block;
}

.news-block-four .inner-box .image-box{
  position: relative;
  background: #192d66;
  overflow: hidden;
}

.news-block-four .inner-box .image-box img{
  width: 100%;
  transition: all 1500ms ease;
}

.news-block-four:hover .inner-box .image-box img{
  opacity: 0.2;
  transform: scale(1.1);
}

.news-block-four{
  position: relative;
  display: block;
  margin-bottom: 20px;
}

.news-block-four .inner-box .lower-content{
  position: relative;
  display: block;
  padding-top: 35px;
  padding-bottom: 8px;
}

.news-block-four .inner-box .lower-content .categori-box{
  position: absolute;
  left: 0px;
  top: -18px;
  font-size: 15px;
  color: #fff;
  height: 35px;
  width: 100px;
  text-align: center;
  line-height: 35px;
  background: #4fd63c;
}

.news-block-four .inner-box .lower-content .post-date{
  position: relative;
  display: block;
  font-size: 14px;
  color: #818181;
  margin-bottom: 9px;
}

.news-block-four .inner-box .lower-content .post-date i{
  margin-right: 6px;
}

.news-block-four .inner-box .lower-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 36px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 7px;
}

.news-block-four .inner-box .lower-content h2 a{
  color: #0c0d24;
}

.news-block-four .inner-box .lower-content h2 a:hover{
  color: #fc9a36;
  text-decoration: underline;
}

.news-block-four .inner-box .lower-content .text{
  position: relative;
  display: block;
  margin-bottom: 10px;
}

.news-block-four .inner-box .lower-content .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #181818;
  line-height: 18px;
  border-bottom: 1px solid #181818;
}

.news-block-four .inner-box .lower-content .link-btn a:hover{
  color: #fd571d;
  border-color: #fd571d;
}

.news-block-four.links-block .image-box .site-links{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font-size: 22px;
  color: #fff;
}

.news-block-four.links-block:hover .image-box img{
  opacity: 1;
  transform: scale(1);
}

.news-block-four.links-block .image-box .site-links:hover{
  color: #fc9a36;
}

.news-block-four.video-block .image-box .video-box{
  position: absolute;
  left: 15px;
  bottom: 40px;
  font-size: 60px;
  line-height: 60px;
  color: #fff;
}

.news-block-four.video-block .image-box .video-box:hover{
  color: #fd571d;
}

.news-block-four.audio-block:hover .image-box img{
  opacity: 1;
  transform: scale(1);
}

.blog-classic .pagination-wrapper{
  position: relative;
  display: block;
  padding-top: 20px;
}


/** blog-single **/

.blog-single{
  position: relative;
  padding: 80px 0px;
}

.blog-single .blog-single-content{
  position: relative;
  margin-left: 30px;
}

.blog-single .blog-single-content .news-block-four:hover .image-box img{
  transform: scale(1);
  opacity: 1;
}

.blog-single .blog-single-content .news-block-four .lower-content h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 30px;
  color: #5d5d66;
  margin-bottom: 8px;
}

.blog-single .blog-single-content .news-block-four .inner-box .lower-content .post-date{
  margin-bottom: 21px;
}

.blog-single .blog-single-content .news-block-four .inner-box .lower-content h2{
  margin-bottom: 16px;
}

.blog-single .blog-single-content .news-block-four{
  margin-bottom: 3px;
}

.blog-single .blog-single-content .group-title{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 36px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 13px;
}

.blog-single .blog-single-content .content-style-one .text p{
  position: relative;
  display: block;
  margin-bottom: 8px;
}

.blog-single .blog-single-content .content-style-one .text p:last-child{
  margin-bottom: 0px;
}

.blog-single .blog-single-content .content-style-one .text{
  position: relative;
  display: block;
  padding-bottom: 26px;
}

.blog-single .blog-single-content .content-style-one .image-box{
  position: relative;
  margin-bottom: 25px;
}

.blog-single .blog-single-content .content-style-one .image-box img{
  width: 100%;
}

.blog-single .blog-single-content .content-style-two .text{
  position: relative;
  display: block;
  padding-bottom: 27px;
}

.blog-single .blog-single-content .content-style-two .image-box .image{
  position: relative;
  float: left;
}

.blog-single .blog-single-content .content-style-two .image-box .image.image-1{
  margin-right: 6px;
}

.blog-single .blog-single-content .content-style-two .image-box img{
  width: 100%;
}

.blog-single .blog-single-content .content-style-two .image-box{
  position: relative;
  margin-bottom: 25px;
}

.blog-single .blog-single-content .content-style-two h3{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #5d5d66;
  margin-bottom: 35px;
}

.blog-single .blog-single-content .content-style-two .text blockquote{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #0c0d24;
  font-style: italic;
  margin-bottom: 30px;
  padding: 0px 60px;
  text-align: center;
}

.blog-single .blog-single-content .content-style-two .text p{
  position: relative;
  display: block;
}

.blog-single .blog-single-content .content-style-three{
  position: relative;
  display: block;
  padding: 0px 0px 0px 210px;
}

.blog-single .blog-single-content .content-style-three .image-box{
  position: absolute;
  left: 0px;
  top: 7px;
  width: 185px;
  height: 220px;
}

.blog-single .blog-single-content .content-style-three .image-box img{
  width: 100%;
}

.blog-single .blog-single-content .content-style-three h5{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 28px;
  color: #0c0d24;
  margin-bottom: 15px;
}

.blog-single .blog-single-content .content-style-three .text{
  position: relative;
  display: block;
}

.blog-single .blog-single-content .post-share-option{
  position: relative;
  display: block;
  padding: 57px 0px 55px 0px;
}

.blog-single .blog-single-content .post-share-option .tags a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #565964;
  background: #ecf3f9;
  border-radius: 30px;
  text-align: center;
  padding: 9.5px 15px;
}

.blog-single .blog-single-content .post-share-option .tags a:hover{
  background: #fd571d;
  color: #fff;
}

.blog-single .blog-single-content .post-share-option .social-links li{
  position: relative;
  display: inline-block;
  margin-left: 6px;
}

.blog-single .blog-single-content .post-share-option .social-links li:first-child{
  margin-left: 0px;
}

.blog-single .blog-single-content .post-share-option .social-links li a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  height: 45px;
  width: 45px;
  line-height: 45px;
  color: #fff;
  text-align: center;
  background: #3b5999;
  border-radius: 50%;
}

.blog-single .blog-single-content .post-share-option .social-links li a:hover{
  background: #fc9a36 !important;
}

.blog-single .blog-single-content .post-share-option .social-links li:nth-child(2) a{
  background: #0077b5;
}

.blog-single .blog-single-content .post-share-option .social-links li:nth-child(3) a{
  background: #e4405f;
}

.blog-single .blog-single-content .post-share-option .social-links li:nth-child(4) a{
  background: #55acee;
}

.blog-single .blog-single-content .post-share-option .social-links li:last-child a{
  background: #bd081c;
}

.blog-single .blog-single-content .author-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 46px 35px 32px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.blog-single .blog-single-content .author-box .author-image{
  position: absolute;
  left: 40px;
  top: 45px;
  width: 92px;
  height: 92px;
  border-radius: 50%;
}

.blog-single .blog-single-content .author-box .author-image img{
  width: 100%;
  border-radius: 50%;
}

.blog-single .blog-single-content .author-box .author-content{
  position: relative;
  padding-left: 140px;
}

.blog-single .blog-single-content .author-box .author-content h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 24px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 0px;
}

.blog-single .blog-single-content .author-box .author-content .post-date{
  position: relative;
  display: block;
  color: #77787f;
  margin-bottom: 9px;
}

.blog-single .blog-single-content .author-box .author-content .text{
  position: relative;
  display: block;
  color: #77787f;
  margin-bottom: 16px;
}

.blog-single .blog-single-content .author-box .author-content .other-links .social-links{
  position: relative;
  display: inline-block;
  margin-right: 10px;
}

.blog-single .blog-single-content .author-box .author-content .other-links .social-links li{
  position: relative;
  display: inline-block;
  margin-right: 7px;
}

.blog-single .blog-single-content .author-box .author-content .other-links .social-links li:last-child{
  margin-right: 0px;
}

.blog-single .blog-single-content .author-box .author-content .other-links .social-links li a{
  position: relative;
  display: inline-block;
  font-size: 18px;
  color: #b0b1c4;
  width: 45px;
  height: 45px;
  line-height: 45px;
  border: 1px solid #e3e3e3;
  border-radius: 50%;
  text-align: center;
}

.blog-single .blog-single-content .author-box .author-content .other-links .social-links li a:hover{
  border-color: #fc9a36;
  color: #fc9a36;
}

.blog-single .blog-single-content .author-box .author-content .other-links .link-btn{
  position: relative;
  display: inline-block;
}

.blog-single .blog-single-content .author-box .author-content .other-links .link-btn a{
  position: relative;
  display: inline-block;
  font-size: 16px;
  color: #fc9a36;
  line-height: 14px;
  border-bottom: 1px solid #fc9a36;
  top: -4px;
  z-index: 1;
}

.blog-single .blog-single-content .author-box .author-content .other-links .link-btn a:hover{
  color: #192d66;
  border-color: #192d66;
}

.blog-single .blog-single-content .nav-btn{
  position: relative;
  display: block;
  padding: 48px 0px;
}

.blog-single .blog-single-content .nav-btn a{
  position: relative;
  display: inline-block;
  font-size: 20px;
  line-height: 28px;
  color: #0c0d24;
}

.blog-single .blog-single-content .nav-btn a:hover{
  color: #fc9a36;
}

.blog-single .blog-single-content .nav-btn a i{
  position: relative;
  display: block;
  font-size: 30px;
  font-weight: 600;
  margin-top: 5px;
}

.blog-single .blog-single-content .nav-btn .next-btn a i{
  text-align: right;
}

.blog-single .blog-single-content .comments-area .comment{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.blog-single .blog-single-content .comments-area .comment:last-child{
  margin-bottom: 0px;
  margin-left: 35px;
}

.blog-single .blog-single-content .comments-area .comment.replay-comment{
  margin-left: 60px;
  background: #fff;
  padding: 25px 30px 25px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.blog-single .blog-single-content .comments-area .comment.replay-comment .author-thumb{
  left: 25px;
  top: 30px;
}

.blog-single .blog-single-content .comments-area .comment .author-thumb{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 92px;
  height: 92px;
  border-radius: 50%;
}

.blog-single .blog-single-content .comments-area .comment .author-thumb img{
  width: 100%;
  border-radius: 50%;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner{
  position: relative;
  padding-left: 110px;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .comment-info .name{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 26px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 2px;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .comment-info .date{
  position: relative;
  display: block;
  font-size: 16px;
  color: #838389;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .comment-info{
  position: relative;
  display: block;
  margin-bottom: 9px;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .text{
  position: relative;
  display: block;
  color: #928895;
  margin-bottom: 16px;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .replay-btn a{
  position: relative;
  display: inline-block;
  font-size: 14px;
  line-height: 24px;
  color: #b0b1c4;
  border: 1px solid #e2e2e2;
  text-align: center;
  text-transform: capitalize;
  padding: 2px 20px;
}

.blog-single .blog-single-content .comments-area .comment .comment-inner .replay-btn a:hover{
  color: #fff;
  background: #fc9a36;
  border-color: #fc9a36;
}

.blog-single .blog-single-content .comments-area{
  position: relative;
  display: block;
  padding-bottom: 60px;
}

.blog-single .blog-single-content .comments-area .group-title{
  margin-bottom: 31px;
}

.blog-single .blog-single-content .comments-form-area .form-group{
  position: relative;
  display: block;
  margin-bottom: 30px;
}

.blog-single .blog-single-content .comments-form-area .form-group:last-child{
  margin-bottom: 0px;
}

.blog-single .blog-single-content .comments-form-area .form-group input[type='text'],
.blog-single .blog-single-content .comments-form-area .form-group input[type='email'],
.blog-single .blog-single-content .comments-form-area .form-group textarea{
  position: relative;
  display: block;
  width: 100%;
  height: 60px;
  border: 1px solid #282828;
  padding: 10px 15px;
  font-size: 16px;
  color: #77787f;
  transition: all 500ms ease;
}

.blog-single .blog-single-content .comments-form-area .form-group textarea{
  height: 215px;
  resize: none;
}

.blog-single .blog-single-content .comments-form-area .form-group input:focus,
.blog-single .blog-single-content .comments-form-area .form-group textarea:focus{
  border-color: #fc9a36;
}

.blog-single .blog-single-content .comments-form-area .form-group button{
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  background: #fc9a36;
  text-align: center;
  border-radius: 30px;
  padding: 12px 42px;
  cursor: pointer;
  transition: all 500ms ease;
}

.blog-single .blog-single-content .comments-form-area .form-group button:hover{
  background: #192d66;
}

.blog-single .blog-single-content .comments-form-area .text{
  position: relative;
  display: block;
  margin-bottom: 27px;
}


/*** 

====================================================================
                        Contact-Page
====================================================================

***/


.contact-banner {
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 170px 0px 155px 0px;
}

.contact-banner:before {
  position: absolute;
  content: '';
  background: rgba(14,22,42,0.35);
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
}

.contact-banner .content-box {
  position: relative;
  max-width: 560px;
  width: 100%;
  margin: 0 auto;
}

.contact-banner .content-box h1 {
  position: relative;
  display: block;
  font-size: 60px;
  line-height: 65px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 17px;
}

.contact-banner .content-box h3 {
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 32px;
  color: #fff;
}

.contact-info-section{
  position: relative;
}

.contact-info-section .single-info-box{
  position: relative;
  display: block;
  background: #fff;
  padding: 50px 30px 24px 30px;
  max-width: 270px;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.contact-info-section .single-info-box .icon-box{
  position: relative;
  display: inline-block;
  font-size: 55px;
  line-height: 55px;
  color: #000;
  margin-bottom: 6px;
  transition: all 500ms ease;
}

.contact-info-section .single-info-box:hover .icon-box{
  color: #fd571c;
}

.contact-info-section .single-info-box h3{
  position: relative;
  display: block;
  font-size: 22px;
  line-height: 30px;
  color: #0c0d24;
  padding-bottom: 15px;
  border-bottom: 1px solid #192d66;
  margin-bottom: 14px;
}

.contact-info-section .single-info-box .text{
  position: relative;
  display: block;
  color: #3c3c49;
}

.contact-info-section .single-info-box .text a{
  color: #3c3c49;
}

.contact-info-section .single-info-box .text a:hover{
  color: #fd571d;
}

.contact-section{
  padding: 85px 0px 90px 0px;
}

.contact-section .contact-form-area .form-group{
  margin-bottom: 30px;
}

.contact-section .contact-form-area .form-group:last-child{
  margin-bottom: 0px;
}

.contact-section .contact-form-area .form-group input[type='text'],
.contact-section .contact-form-area .form-group input[type='email'],
.contact-section .contact-form-area .form-group textarea{
  position: relative;
  display: block;
  width: 100%;
  height: 55px;
  border: 1px solid #dfdfdf;
  font-size: 16px;
  color: #0c0d24;
  padding: 10px 15px;
  transition: all 500ms ease;
}

.contact-section .contact-form-area .form-group input::-webkit-input-placeholder,
.contact-section .contact-form-area .form-group textarea::-webkit-input-placeholder{
  color:#0c0d24;
}

.contact-section .contact-form-area .form-group textarea{
  height: 220px;
  resize: none;
}

.contact-section .contact-form-area .form-group input:focus,
.contact-section .contact-form-area .form-group textarea:focus{
  border-color: #fd571d;
}

.contact-section .contact-form-area .form-group button {
  position: relative;
  display: inline-block;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
  background: #fd571d;
  text-align: center;
  border-radius: 30px;
  padding: 12px 40px;
  cursor: pointer;
  transition: all 500ms ease;
}

.contact-section .contact-form-area .form-group button:hover{
  transform: translateY(-5px);
}

.contact-section .contact-form-area h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 38px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 26px;
}

.google-map-area{
  position: relative;
  margin-top: 64px;
}

.google-map-area #contact-google-map{
  position: relative;
  width: 100%;
  height: 585px;
}

.contact-banner-two{
  position: relative;
  background: #e5f1fd;
  padding: 75px 0px 90px 0px;
}

.contact-banner-two .content-box h1{
  position: relative;
  display: block;
  font-size: 60px;
  line-height: 65px;
  font-weight: 700;
  color: #0c0d24;
}

.contact-info-section.contact-page-2{
  position: relative;
  padding: 65px 0px;
}

.google-map-section .google-map-area{
  margin: 0px;
}

.google-map-section .google-map-area #contact-google-map{
  height: 540px;
}

.contact-section .agent-content h2{
  position: relative;
  display: block;
  font-size: 30px;
  line-height: 38px;
  color: #0c0d24;
  font-weight: 700;
  margin-bottom: 29px;
}

.contact-section .agent-content .single-agent-box{
  position: relative;
  max-width: 470px;
  width: 100%;
  padding: 34px 30px 23px 30px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  margin-bottom: 40px;
}

.contact-section .agent-content .single-agent-box:last-child{
  margin-bottom: 40px;
}

.contact-section .agent-content .single-agent-box .content-box{
  position: relative;
  padding-left: 110px;
  padding-top: 17px;
}

.contact-section .agent-content .single-agent-box .content-box .agent-image{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 85px;
  height: 85px;
  border-radius: 50%;
}

.contact-section .agent-content .single-agent-box .content-box .agent-image img{
  width: 100%;
  border-radius: 50%;
}

.contact-section .agent-content .single-agent-box .content-box h4{
  position: relative;
  display: block;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  color: #0c0d24;
  margin-bottom: 2px;
}

.contact-section .agent-content .single-agent-box .content-box span{
  position: relative;
  display: block;
  line-height: 24px;
  color: #fd571d;
  margin-bottom: 10px;
}

.contact-section .agent-content .single-agent-box .content-box .text{
  position: relative;
  margin-bottom: 8px;
  color: #0c0d24;
}

.contact-section .agent-content .single-agent-box .content-box .phone{
  position: relative;
  display: block;
  font-size: 16px;
  color: #0c0d24;
}

.contact-section .agent-content .single-agent-box .content-box .phone a{
  position: relative;
  display: inline-block;
  color: #0c0d24;
}

.contact-section .agent-content .single-agent-box .content-box .phone a:hover{
  color: #fd571d;
}

.main-header.style-nine.blog-page .header-upper .btn-box a{
  background: #fc9a36;
}

.main-header.style-nine.blog-page .header-upper .btn-box a:hover{
  background: #f78613;
}

.main-header.style-nine.blog-page .header-top .header-info li a:hover,
.main-header.style-nine.blog-page .header-top .header-nav li.phone a:hover,
.main-header.style-nine.blog-page .header-upper .inner-container .info-box a:hover,
.main-header.style-nine.blog-page .header-bottom .info-box .search-box .header-flyout-searchbar i:hover,
.main-header.style-nine.blog-page .header-bottom .info-box .shop-cart a:hover{
  color: #f78613;
}

.main-header.style-nine.blog-page .header-bottom .info-box .social-links li a:hover{
  border-color: #f78613;
  color: #f78613;
}

.main-header.style-nine.blog-page .header-bottom .info-box .shop-cart span{
  background: #f78613;
}

.main-footer.blog-page .footer-top .links-widget .widget-content ul li a:hover,
.main-footer.blog-page .footer-bottom .footer-social li a:hover{
  color: #f78613;
}

.contact-info-section.contact-page-1{
  padding: 100px 0px 50px 0px;
}
</style>

    <!-- single-shop -->
    <section class="single-shop">
        <div class="container">
            <div class="products-details">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="carousel-outer" data-wow-delay="0ms">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a src="../Admin/upload/car/<?php echo $fetch->Car_img?>" class="lightbox-image" data-fancybox="gallery"><img src="../Admin/upload/car/<?php echo $fetch->Car_img?>" style=" width:600px;height:450px" alt=""></a></li>
                                    </ul>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h3 class="product-price"><?php echo $fetch->Title;?><br /></h3>
                            <div class="price">&#x20B9;<?php echo $fetch->Rent;?></div>
                            
                            <div class="other-info">
                                <div class="categories-box">
                                    <ul>
                                        <li><h6>Car type:</h6>&nbsp;</li>
                                        <li><?php echo $fetch->Car_type;?></li>
                                    </ul>
                                </div>
                                <div class="tags-box">
                                    <ul>
                                        <li><h6>Passenger Capacity:</h6>&nbsp;</li>
                                        <li><?php echo $fetch->Passenger_cap;?></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <ul class="model">
                                    <li><h6>Car Model:</h6>&nbsp;</li>
                                    <li class="model-no"><?php echo $fetch->Car_model;?></li>
                                </ul>
                                <ul class="brand">
                                    <li><h6>Car Brand:</h6>&nbsp;</li>
                                    <li><?php echo $fetch->Car_brand;?></li>
                                </ul>
                            </div>
                            <div class="addto-cart-box clearfix">
                               
                                <a  type="submit" class="btn btn-primary" href="checkout?btn_Caradv_id=<?php echo $fetch->Caradv_id;?>">Book Now</a>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <div class="product-tab tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">DESCRIPTION</li>
                        
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab clearfix" id="tab-1">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p><?php echo $fetch->Description;?></p>
                                </div>
                              
                            </div>
                        </div>
                
                       

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- single-shop end -->

 <?php
    include_once('footer.php');
?>
    