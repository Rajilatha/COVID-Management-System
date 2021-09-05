<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>corona</title>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        
            * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 32%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}
.columnb {
  float: left;
  width: 600px;
  margin:0px 200px 0px 350px;

  padding: 20px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
            ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:white;
}

li {
  float: left;
}

li a {
  display: block;
  color: 

#008ae6;
  text-align: center;
  font-size:20px;
  padding: 14px 40px;
  text-decoration: none;
}

li a:hover {
  background-color:#ccebff;
}
.mySlides {display:none;}



@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #008ae6;
   color: white;
   text-align: center;
}
        </style>
    </head>
    <body>
    <div  style="background-image:url({{url('/images/headern.jpg')}}); height:100px; width:1024; left-padding:0px;">
    <a href="{{ route('login') }}" ><img src="{{url('/images/login.png')}}" style="float: right; padding-top: 20px;">  </a>
    </div>
    <div class="col-12" style="border-bottom: 2px solid #008ae6;">
<ul>
  <li><a class="active" href="/">Home</a></li>
  <li><a href="{{ route('post.getdistricts') }}">District Corona Details</a></li>
  <li><a href="{{route('post.getnonuser')}}">PCR Testing Appoinment</a></li>
  <li><a href="/vaccine">Vaccination  Appoinment</a></li>
  <li><a href="{{ route('notices2.index') }}">Special Notice</a></li>
</ul>
</div>
    
    
  <div class="w3-content w3-section" style="max-width:1000px; padding-top:0px;">
  <img class="mySlides" src="{{url('/video/v5.jpg')}}" style="width:100%; height:300px;">
  <img class="mySlides" src="{{url('/video/v4.png')}}" style="width:100%; height:300px;">
  <img class="mySlides" src="{{url('/video/v1.jpg')}}" style="width:100%; height:300px;">
  <img class="mySlides" src="{{url('/video/v2.png')}}" style="width:100%; height:300px;">
  <img class="mySlides" src="{{url('/video/v3.jpg')}}" style="width:100%; height:300px;">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

  </div>
</div>

<div class="row">
  <div class="column">
      
      <ul style="background-image:url({{url('/images/d2.png')}}); height: 400px; list-style-type:circle; background-color: 	 #ffe6f2;">
      <h1 style="color:#0080ff;">Why Should you get Vaccinated?</h1>
          <li >It reduce your risk of getting COVID-19.</li>
          <li>Gradely minimizes the risk of transmission within the community.</li>
          <li>Prevents the country's health care system from overwhelmed.</li>
          <li>Product vulnerable groups who who aren't able to receive the vaccine.</li>
          
      </ul>
</div>
<div class="column">
      
      <ul style="background-image:url({{url('/images/d4.png')}}); height: 400px; list-style-type:circle; background-color: #ccddff;">
      <h1  style="color:#0080ff;"> How does the COVID-19 vaccine work?</h1>
      <li >Our cells will produce a harmless protein that is unique to the virus.</li>
      <li >Our bodies produces antibodies to protected us from virus.</li>
      <ul>
</div>
<div class="column">
      
      <ul style="background-image:url({{url('/images/d5.png')}}); height: 400px; background-color:#ffcccc; ">
      <h1  style="color:#0080ff;">What are the side effects of the COVID-19 vaccine?</h1>
      <li >Pain, redness, swelling at the injection side</li><br>
      <li>fever, chills</li><br>
      <li>Tiredness</li><br>
      <li>Headache, muscle pain, joint pain</li>
      <li  style="color:green;">Side effects are normal and can be managed with paracetamol or rest.</li>
</ul>
</div>
</div>
<div class="row">
  <div class="columnb">
<ul  style="background-image:url({{url('/images/d6.png')}}); height: 200px; background-color: #ccffff; padding:10px; ">
<h1  style="color:#0080ff;"> Is the vaccine safe ?</h1>
<li><div style="color:red; font-size:30px;">YES!</div> It hass been assessed by HSA to have met safety and efficacy standards.</li>
</ul>
</div>
</div>
<br>
<br>

<div class="footer">
  <p>2021 copy rights- All rights reserved</p>
</div>

    </body>
</html>