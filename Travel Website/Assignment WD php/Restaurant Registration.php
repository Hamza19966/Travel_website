<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
html,
button,
input,
select,
textarea {
  color: #222;
}
html {
  font-size: 1em;
  line-height: 1.4;
}
/*
 * Remove text-shadow in selection highlight: h5bp.com/i
 * These selection rule sets have to be separate.
 * Customize the background color to match your design.
 */
::-moz-selection {
  background: #b3d4fc;
  text-shadow: none;
}
::selection {
  background: #b3d4fc;
  text-shadow: none;
}
/*
 * A better looking default horizontal rule
 */
hr {
  display: block;
  height: 1px;
  border: 0;
  border-top: 1px solid #ccc;
  margin: 1em 0;
  padding: 0;
}
/*
 * Remove the gap between images, videos, audio and canvas and the bottom of
 * their containers: h5bp.com/i/440
 */
audio,
canvas,
img,
video {
  vertical-align: middle;
}
/*
 * Remove default fieldset styles.
 */
fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}
/*
 * Allow only vertical resizing of textareas.
 */
textarea {
  resize: vertical;
}
/* ==========================================================================
   Browse Happy prompt
   ========================================================================== */
.browsehappy {
  margin: 0.2em 0;
  background: #ccc;
  color: #000;
  padding: 0.2em 0;
}
/* ==========================================================================
   Author's custom styles
   ========================================================================== */
/* Style Form*/
div.ul-select-wrap {
  min-height: 34px;
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-family: 'Roboto', sans-serif;
  padding-top: 3px;
  padding-bottom: 3px;
  height: auto;
}
div.ul-select-wrap:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
div.ul-select-wrap::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
div.ul-select-wrap:-ms-input-placeholder {
  color: #999999;
}
div.ul-select-wrap::-webkit-input-placeholder {
  color: #999999;
}
div.ul-select-wrap[disabled],
div.ul-select-wrap[readonly],
fieldset[disabled] div.ul-select-wrap {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}
textareadiv.ul-select-wrap {
  height: auto;
}
div.ul-select-wrap .tag {
  display: inline-block;
  margin: 0 2px;
  padding: 3px 24px 3px 5px;
  font-size: 13px;
  cursor: pointer;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background: #F1F1F1;
  position: relative;
  margin-bottom: 3px;
  margin-top: 3px;
}
div.ul-select-wrap .tag:after {
  content: '';
  width: 8px;
  height: 8px;
  background: url('data:image/gif;base64,R0lGODlhCAAIALMAAAAAAP///56lrZifp6GpsaCosJ+nr52lrJujqpqiqZmhqJigp////wAAAAAAAAAAACH5BAEAAAwALAAAAAAIAAgAAAQhkA1GpVyKLswSQolXHcJxVIxgFEWVHAVBtMtLzSeCGkwEADs=') right 50% no-repeat;
  margin-right: 7px;
  margin-top: 8px;
  position: absolute;
  top: 0px;
  right: 0px;
}
div.ul-select-wrap.tag-block .tag {
  display: block;
}
div.ul-dropdown-wrap {
  min-height: 34px;
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-family: 'Roboto', sans-serif;
  height: auto;
  display: inline-block;
  position: relative;
  padding-right: 30px;
  cursor: pointer;
  text-align: left;
}
div.ul-dropdown-wrap:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
div.ul-dropdown-wrap::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
div.ul-dropdown-wrap:-ms-input-placeholder {
  color: #999999;
}
div.ul-dropdown-wrap::-webkit-input-placeholder {
  color: #999999;
}
div.ul-dropdown-wrap[disabled],
div.ul-dropdown-wrap[readonly],
fieldset[disabled] div.ul-dropdown-wrap {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}
textareadiv.ul-dropdown-wrap {
  height: auto;
}
div.ul-dropdown-wrap:after {
  content: '';
  position: absolute;
  right: 10px;
  top: 14px;
  width: 0;
  height: 0;
  display: inline-block;
  vertical-align: middle;
  border-color: white;
  border-width: 5px;
  border-style: solid;
  border-color: #CBCAC8;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-style: none;
}
div.ul-dropdown-wrap:after.up {
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-style: none;
}
div.ul-dropdown-wrap:after.down {
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-style: none;
}
div.ul-dropdown-wrap:after.right {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-right-style: none;
}
div.ul-dropdown-wrap:after.left {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-left-style: none;
}
div.ul-dropdown-wrap .tag {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  display: block;
  cursor: pointer;
  border-right: 1px solid #cccccc;
  padding-right: 5px;
}
ul.ul-select {
  list-style: none;
  padding: 0;
  margin: 0;
  background: white;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border: 1px solid #cccccc;
}
ul.ul-select li {
  display: block;
  cursor: pointer;
  padding: 5px 10px;
  margin: 1px 0;
}
ul.ul-select li:hover {
  background: #f1f1f1;
}
ul.ul-select li.select {
  background: #f1f1f1;
}
ul.ul-select li.selected {
  font-weight: bold;
}
div.ul-dropdown-wrap.time-picker {
  margin-top: 10px;
  width: 48%;
  margin-left: 4%;
  font-size: 12px;
  min-height: 30px;
}
/* DateTimePicker plugin */
.datetimepicker {
  background: white;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  overflow: hidden;
  padding: 10px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
  min-width: 200px;
}
.datetimepicker .paging {
  text-align: center;
  padding: 5px;
  font-size: 12px;
  position: relative;
}
.datetimepicker .paging span {
  position: absolute;
  top: 0px;
  display: inline-block;
  height: 100%;
  line-height: 24px;
  width: 20px;
  cursor: pointer;
}
.datetimepicker .paging span i {
  line-height: inherit;
}
.datetimepicker .paging span.prev {
  left: 0px;
}
.datetimepicker .paging span.next {
  right: 0px;
}
.datetimepicker table {
  font-weight: normal;
  font-size: 14px;
  color: #333333;
  border-collapse: collapse;
  width: 100%;
}
.datetimepicker table td {
  text-align: center;
  border: 1px solid #eee;
  padding: 3px;
}
.datetimepicker table td.near-month {
  color: #ccc;
}
.datetimepicker table td.cur-date.cur-month {
  background: #D9EDF7;
}
.datetimepicker table thead {
  font-weight: bold;
}
.datetimepicker table thead td {
  border: none;
  border-bottom: 2px solid #eee;
  min-width: 40px;
}
.datetimepicker table tbody td:hover {
  background: #eee;
  cursor: pointer;
}
.datetimepicker table tbody td.unvailable {
  color: #eee;
  background: #F5F5F5;
}
.datetimepicker table tbody td.unvailable:hover {
  background: #F5F5F5;
  cursor: not-allowed;
}
.datetimepicker select {
  width: 48%;
  margin-top: 10px;
  margin-left: 4%;
  border: 1px solid #ccc;
}
.datetimepicker select:first-child {
  margin-left: 0;
}
.datetimepicker .timezone {
  margin-top: 10px;
  color: #666;
  font-size: 11px;
  text-align: center;
}
input[readonly].datetime-picker {
  cursor: pointer;
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  background: #333333 url(file:///C|/Users/FAHAD%20TAHIR/Desktop/img/bg.jpg) no-repeat center bottom fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}
.booking-form {
  margin: 50px auto;
  background: white;
  padding: 30px 0;
  position: relative;
  -webkit-box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.125);
  box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.125);
}
.booking-form #form-loading {
  text-align: center;
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  z-index: 1000;
  background: #555555;
}
.booking-form #form-loading i {
  font-size: 100px;
}
.booking-form #form-message {
  text-align: center;
  color: #555555;
}
.booking-form .h1 {
  font-size: 30px;
  color: #3EC038;
  padding: 15px 15px 35px 15px;
  text-transform: uppercase;
  text-align: center;
}
.booking-form .logo {
  height: auto;
  max-width: 100%;
}
.booking-form .group {
  *zoom: 1;
  -webkit-transition: all ease .2s;
  transition: all ease .2s;
  border-left: 4px solid #fff;
  padding: 10px 0;
}
.booking-form .group:before,
.booking-form .group:after {
  content: " ";
  display: table;
}
.booking-form .group:after {
  clear: both;
}
.booking-form .group > label {
  padding-left: 15px;
  padding-top: 5px;
  color: #555555;
  font-size: 16px;
  display: block;
}
.booking-form .group > label.empty {
  display: block;
  height: 1px;
  padding: 0;
  margin: 0;
}
.booking-form .group > div {
  padding: 0 15px;
}
.booking-form .group > div.addon-right {
  position: relative;
  padding-right: 50px;
}
.booking-form .group > div.addon-right > i {
  position: absolute;
  right: 25px;
  top: 9px;
  z-index: 999;
  color: #555555;
}
.booking-form .group > div .error-message {
  font-size: 12px;
  color: red;
  margin-top: 5px;
}
.booking-form .group.active {
  background: #F6F6F6;
  border-left-color: #40C2FF;
  -webkit-box-shadow: inset 0px 0px 3px rgba(0, 0, 0, 0.03);
  box-shadow: inset 0px 0px 3px rgba(0, 0, 0, 0.03);
}
.booking-form input[type=submit] {
  border: none;
  background: #65CA60;
  color: white;
  font-family: 'Roboto', sans-serif;
  padding: 5px 20px;
  text-transform: uppercase;
  font-weight: 500;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: background ease-in-out .15s;
  transition: background ease-in-out .15s;
}
.booking-form input[type=submit]:hover {
  background: #5AC253;
}
.booking-form {
  width: 320px;
}
@media (min-width: 550px) {
  .booking-form {
    width: 520px;
  }
  .booking-form .group > label {
    float: left;
    width: 180px;
  }
  .booking-form .group > div {
    margin-left: 180px;
    padding-left: 0;
  }
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;

  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-family: 'Roboto', sans-serif;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999999;
}
.form-control::-webkit-input-placeholder {
  color: #999999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eeeeee;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
/* ==========================================================================
   Helper classes
   ========================================================================== */
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.one-line {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.arrow-up {
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-style: none;
}
.arrow-down {
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-style: none;
}
.arrow-right {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-right-style: none;
}
.arrow-left {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-left-style: none;
}
.arrow {
  width: 0;
  height: 0;
  display: inline-block;
  vertical-align: middle;
  border-color: white;
  border-width: 5px;
  border-style: solid;
}
.arrow.up {
  border-left-color: transparent;
  border-right-color: transparent;
  border-top-style: none;
}
.arrow.down {
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-style: none;
}
.arrow.right {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-right-style: none;
}
.arrow.left {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-left-style: none;
}
/*
 * Image replacement
 */
.ir {
  background-color: transparent;
  border: 0;
  overflow: hidden;
  /* IE 6/7 fallback */
  *text-indent: -9999px;
}
.ir:before {
  content: "";
  display: block;
  width: 0;
  height: 150%;
}
/*
 * Hide from both screenreaders and browsers: h5bp.com/u
 */
.hidden {
  display: none !important;
  visibility: hidden;
}
/*
 * Hide only visually, but have it available for screenreaders: h5bp.com/v
 */
.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
/*
 * Extends the .visuallyhidden class to allow the element to be focusable
 * when navigated to via the keyboard: h5bp.com/p
 */
.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}
/*
 * Hide visually and from screenreaders, but maintain layout
 */
.invisible {
  visibility: hidden;
}
/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */
.clearfix:before,
.clearfix:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}
.clearfix:after {
  clear: both;
}
/*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.clearfix {
  *zoom: 1;
}
/* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   These examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */
@media only screen and (min-width: 35em) {
  /* Style adjustments for viewports that meet the condition */
}
@media print, (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi) {
  /* Style adjustments for high resolution devices */
}
/* ==========================================================================
   Print styles.
   Inlined to avoid required HTTP connection: h5bp.com/r
   ========================================================================== */
@media print {
  * {
    background: transparent !important;
    color: #000 !important;
    /* Black prints faster: h5bp.com/s */
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  /*
     * Don't show links for images, or javascript/internal links
     */
  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
    /* h5bp.com/t */
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  @page {
    margin: 0.5cm;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
}

.logo img{
	float: left;
	width: 100px;
	height: auto;
}
.main{
	max-width: 1200px;
	ma

</style>



<body>
<form id="booking-form" class="booking-form" name="form1" method="post" action="">
           <div class="main">
          <div class="logo">
           <img src="Logo clear.png">
          </div>
            <div class="h1">Restaurant Reservation </div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
            <div id="form-content">
                <div class="group">
                    <label for="date-from">Dine-In</label>
                    <div class="addon-right">
                        <input id="Start" name="Start" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                
                <div class="group">
                    <label for="room-type">Restaurant type</label>
                    <div>
                        <select id="restaurant-type" name="restaurant-type" class="form-control">
                            <option value="Malay Cuisine">Malay Cuisine</option>
                            <option value="Chinese Cuisine">Chinese Cuisine</option>
                            <option value="Indian Cuisine">Indian Cuisine</option>
                             <option value="Western Cuisine">Western Cuisine</option>
                              <option value="Thai Cuisine">Thai Cuisine</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="room-type">Restaurant Name</label>
                    <div>
                        <select id="restaurant-type" name="restaurant-type" class="form-control">
                            <option value="1. The Gulai House">1. The Gulai House</option>
                            <option value="2. The Planter's">2. The Planter's</option>
                             <option value="3. The Cliff Langkawi">3. The Cliff Langkawi</option>
                              <option value="4. The Pailion">4. The Pailion</option>
                        </select>
                    </div>
                </div>
                
                <div class="group">
                    <label for="Requirements">Requirements</label>
                    <div>
                        <select id="Requirements" name="Requirements" class="form-control">
                            <option value="No Preference">No Preference</option>
                            <option value="Vegetarian">Vegetarian</option>
                            <option value="Vegan">Vegan</option>
                        </select>
                    </div>
                </div>

             
                
                
                <div class="group">
                    <label for="adults">Adults</label>
                    <div>
                        <select id="adults" name="adults" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="children">Children</label>
                    <div>
                        <select id="children" name="children" class="form-control">
                            <option value="-">-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div class="group">
                    <label for="phone">Phone</label>
                    <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Phone"></div>
                </div>
                <div class="group">
                    <label for="special-requirements">Special requirements</label>
                    <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Special requirements"></textarea></div>
                </div>
                <div class="group submit">
                  <label class="empty"></label>
                    <div><input name="submit" type="submit" value="Submit" formaction="Restaurant Return.php"/></div>
 
            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
</form>

</body>
</html>
