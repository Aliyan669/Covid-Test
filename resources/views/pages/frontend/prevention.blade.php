@extends('layouts.homelayout')
@section(section: 'titleContent')
Prevention
@endsection
@section('homeContent')

<div class="hero-v1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mr-auto text-center text-lg-left">
        <span class="d-block subheading">Covid Prevention</span>
        <h1 class="heading mb-3">Prevention</h1>
        <p class="mb-5">Preventing COVID-19 starts with simple steps: wear a mask, maintain social distance, wash hands
          frequently, and get vaccinated to protect yourself and others!</p>
        <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p>
      </div>
      <div class="col-lg-6">
        <figure class="illustration-2">
          <img src="{{ asset('frontend/images/protect.png')}}" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</div>


<div class="site-section bg-primary-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">

        <div class="row"></div>
        <div class="row">
          <div class="col-6 col-lg-6 mt-lg-5">
            <div class="media-v1 bg-1">
              <div class="icon-wrap">
                <span class="flaticon-stay-at-home"></span>
              </div>
              <div class="body">
                <h3>Stay at home</h3>
                <p>Stay home as much as possible to reduce the risk of infection and protect yourself and others.</p>
              </div>
            </div>

            <div class="media-v1 bg-1">
              <div class="icon-wrap">
                <span class="flaticon-patient"></span>
              </div>
              <div class="body">
                <h3>Wear facemask</h3>
                <p>Wear a mask properly, covering your nose and mouth, to protect yourself and those around you.</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-6">
            <div class="media-v1 bg-1">
              <div class="icon-wrap">
                <span class="flaticon-social-distancing"></span>
              </div>
              <div class="body">
                <h3>Keep social distancing</h3>
                <p>Maintain at least 6 feet of distance from others to prevent the spread of the virus.</p>
              </div>
            </div>

            <div class="media-v1 bg-1">
              <div class="icon-wrap">
                <span class="flaticon-hand-washing"></span>
              </div>
              <div class="body">
                <h3>Wash your hands</h3>
                <p>Wash your hands frequently with soap and water for at least 20 seconds to stay safe from germs.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-5 ml-auto">
        <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
        <p>Preventing the spread of coronavirus starts with wearing a mask properly, covering your nose and mouth at all
          times in public. Maintain at least 6 feet of distance from others, especially in crowded areas. Wash your
          hands frequently with soap for at least 20 seconds or use a hand sanitizer with 60% alcohol. Avoid touching
          your face, particularly your eyes, nose, and mouth.</p>
        <p class="mb-4"> Stay home if you feel unwell, and get vaccinated to build immunity and protect your community.
        </p>

        <ul class="list-check list-unstyled mb-5">
          <li>Stay Safe, Wear a Mask</li>
          <li>Distance Keeps You Protected</li>
          <li>Clean Hands, Healthy Life</li>
        </ul>

        <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
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



<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-7 text-center mx-auto">
        <h2 class="section-heading">More Preventions</h2>
        <p>Sanitize surfaces, avoid crowded places, and maintain a healthy lifestyle to<br /> stay protected.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="media-v1 bg-1">
          <div class="icon-wrap">
            <span class="flaticon-stay-at-home"></span>
          </div>
          <div class="body">
            <h3>Stay at home</h3>
            <p>Stay home as much as possible to reduce the risk of infection and protect yourself and others.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media-v1 bg-1">
          <div class="icon-wrap">
            <span class="flaticon-patient"></span>
          </div>
          <div class="body">
            <h3>Wear facemask</h3>
            <p>Wear a mask properly, covering your nose and mouth, to protect yourself and those around you.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media-v1 bg-1">
          <div class="icon-wrap">
            <span class="flaticon-social-distancing"></span>
          </div>
          <div class="body">
            <h3>Keep social distancing</h3>
            <p>Maintain at least 6 feet of distance from others to prevent the spread of the virus.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media-v1 bg-1">
          <div class="icon-wrap">
            <span class="flaticon-hand-washing"></span>
          </div>
          <div class="body">
            <h3>Wash your hands</h3>
            <p>Wash your hands frequently with soap and water for at least 20 seconds to stay safe from germs.</p>
          </div>
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
        <p>Protect yourself by wearing a mask, maintaining social distance, washing your hands, and avoiding crowded
          places.</p>
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
        <img src="{{ asset('frontend/images/protect.png')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>




@endsection