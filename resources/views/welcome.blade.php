@extends('layouts.app')
@section('content')
<div class="page-header section-dark" style="background-image: url('./img/moon.jpg')">
  <div class="filter"></div>
  <div class="content-center">
    <div class="container">
      <div class="title-brand">
        <h3 class="presentation-title">Basura Espacial</h3>
        <div class="fog-low">
          <img src="./assets/img/fog-low.png" alt="">
        </div>
        <div class="fog-low right">
          <img src="./assets/img/fog-low.png" alt="">
        </div>
      </div>
      <h2 class="presentation-subtitle text-center">¿Sabemos cuánta basura rodea nuestro planeta?</h2>
    </div>
  </div>
  <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
  <h6 class="category category-absolute">Designed and coded by
    <a href="https://www.creative-tim.com" target="_blank">
      <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo">
    </a>
  </h6>
</div>

<div class="py-4" >
  <div class="col-10 mx-auto">
    <div class=" mt-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
          <form id="regForm">
            
            <div class="all-steps" id="all-steps"> 
              <span class="step">
                <i class="fas fa-satellite-dish"></i>
              </span> 
              <span class="step">
                <i class="fa fa-map-marker"></i>
              </span> 
              <span class="step">
                <i class="fa fa-shopping-bag"></i>
              </span>
               <span class="step">
                 <i class="fa fa-car"></i>
                </span> 
              <span class="step">
                <i class="fa fa-spotify"></i>
              </span> 
              <span class="step">
                <i class="fa fa-mobile-phone"></i>
              </span> 
            </div>
            <div class="tab">
              <h6>What's your name?</h6>
              <p> <input placeholder="Name..." oninput="this.className = ''" name="fname"></p>
            </div>
            <div class="tab">
              <h6>What's your city?</h6>
              <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
            </div>
            <div class="tab">
              <h6>What's your Favourite Shopping site?</h6>
              <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
            </div>
            <div class="tab">
              <h6>What's your Favourite car?</h6>
              <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
            </div>
            <div class="tab">
              <h6>What's your Favourite Song?</h6>
              <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
            </div>
            <div class="tab">
              <h6>What's your Favourite Mobile brand?</h6>
              <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
            </div>
            <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
              <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
            </div>
            <div style="overflow:auto;" id="nextprevious">
              <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!---SCRIPT -->
<script>
  var currentTab = 0;
  document.addEventListener("DOMContentLoaded", function(event) {
    showTab(currentTab);
  });

  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    } else {
      document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    }
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {

      document.getElementById("nextprevious").style.display = "none";
      document.getElementById("all-steps").style.display = "none";
      document.getElementById("register").style.display = "none";
      document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
  }

  function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
      if (y[i].value == "") {
        y[i].className += " invalid";
        valid = false;
      }
    }
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
  }

  function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
  }
</script>


@endsection