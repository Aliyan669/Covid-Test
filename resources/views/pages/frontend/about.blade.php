@extends('layouts.homelayout')
@section(section: 'titleContent')
About
@endsection
@section('homeContent')


<div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">About</span>
            <h1 class="heading mb-3">About Us</h1>
            <p class="mb-5">We are committed to providing a safe and easy COVID-19 vaccination solution. Our goal is to ensure better health and protection for everyone!</p>
            <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p>
          </div>

          <div class="col-lg-6">
            <figure class="illustration">
              <img src="{{ asset('frontend/images/illustration.png' )}}" alt="Image" class="img-fluid">
            </figure>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <figure class="img-play-vid">
              <img src="{{ asset('frontend/images/hero_1.jpg' )}}" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="text">Watch the Video</span>
                <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                  <span class="icon-play"></span>
                </a>
              </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
            <p>Coronavirus (COVID-19) is a highly contagious virus that affects the respiratory system and spreads through airborne droplets!</p>
            <ul class="list-check list-unstyled mb-5">
              <li>Respiratory Disease</li>
              <li>Viral Infection</li>
              <li>Safety Measures</li>
            </ul>
            <p><a href="#" class="btn btn-primary">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Team</h2>
            <p>Meet our dedicated team working tirelessly to fight COVID-19 and ensure your safety.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="team">
              <img src="{{ asset('frontend/images/person_1.jpg' )}}" alt="Image" class="img-fluid">
              <h3>Hina Amir</h3>
              <p>Passionate health expert dedicated to raising awareness about COVID-19. With extensive experience, they ensure accurate information reaches the public. Their goal is to help people stay safe and informed.</p>
              <p>
                <span class="d-block mb-2"><strong>Connect on social</strong></span>
                <a href="#" class="p-2 icon-facebook"></a>
                <a href="#" class="p-2 icon-twitter"></a>
                <a href="#" class="p-2 icon-linkedin"></a>
                <a href="#" class="p-2 icon-instagram"></a>
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team">
              <img src="{{ asset('frontend/images/person_2.jpg' )}}" alt="Image" class="img-fluid">
              <h3>Aiman Malik</h3>
              <p>Plays a key role in educating communities about COVID-19 prevention and safety. They work tirelessly to provide up-to-date resources and guidance. Their commitment helps in reducing the spread of the virus.</p>
              <p>
                <span class="d-block mb-2"><strong>Connect on social</strong></span>
                <a href="#" class="p-2 icon-facebook"></a>
                <a href="#" class="p-2 icon-twitter"></a>
                <a href="#" class="p-2 icon-linkedin"></a>
                <a href="#" class="p-2 icon-instagram"></a>
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team">
              <img src="{{ asset('frontend/images/person_3.jpg' )}}" alt="Image" class="img-fluid">
              <h3>Shohaib Kahn</h3>
              <p>Specializes in public health and works to support those affected by COVID-19. They focus on promoting safety measures, treatment options, and vaccination awareness. Their efforts contribute to a healthier community.</p>
              <p>
                <span class="d-block mb-2"><strong>Connect on social</strong></span>
                <a href="#" class="p-2 icon-facebook"></a>
                <a href="#" class="p-2 icon-twitter"></a>
                <a href="#" class="p-2 icon-linkedin"></a>
                <a href="#" class="p-2 icon-instagram"></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Coronavirus Statistics</h2>
            <p>Keep track of global and local COVID-19 data for awareness.</p>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">14,112,077</strong>
              <span class="label">Active Cases</span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">595,685</strong>
              <span class="label">Deaths</span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">8,397,665</strong>
              <span class="label">Recovered Cases</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p>Protect yourself by wearing a mask, maintaining social distance, washing your hands, and avoiding crowded places.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>You should do</h3>
                <ul class="list-unstyled check">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="col-lg-6 dont ">
                <h3>You should avoid</h3>
                <ul class="list-unstyled cross">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('frontend/images/protect.png' )}}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

@endsection