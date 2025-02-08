@extends('layouts.homelayout')
@section(section: 'titleContent')
Symptoms
@endsection
@section('homeContent')


<div class="hero-v1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mr-auto text-center text-lg-left">
        <span class="d-block subheading">Covid Symptoms</span>
        <h1 class="heading mb-3">Symptoms</h1>
        <p class="mb-5">COVID-19 symptoms can range from mild to severe, including fever, cough, and difficulty
          breathing. If you experience any signs, seek medical advice and take precautions immediately!</p>
        <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p>
      </div>
      <div class="col-lg-6">
        <figure class="illustration-2">
          <img src="{{ asset('frontend/images/symptoms.png')}}" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</div>



<div class="site-section bg-primary-light">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
        <p>Recognizing the symptoms of COVID-19 early can help in timely treatment<br /> and prevention!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="symptom d-flex">
          <div class="img">
            <img src="{{ asset('frontend/images/symptom_high-fever.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <h3>High Fever</h3>
            <p>A persistent fever above 100°F could be a key symptom of COVID-19. Monitor your temperature regularly.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="symptom d-flex">
          <div class="img">
            <img src="{{ asset('frontend/images/symptom_cough.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <h3>Cough</h3>
            <p>Frequent or dry cough may indicate a COVID infection. Consult a healthcare provider if it persists.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="symptom d-flex">
          <div class="img">
            <img src="{{ asset('frontend/images/symptom_sore-troath.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <h3>Sore Throat</h3>
            <p>A scratchy or painful throat could be an early warning sign of COVID-19. Stay hydrated and monitor your
              symptoms.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="symptom d-flex">
          <div class="img">
            <img src="{{ asset('frontend/images/symptom_headache.png')}}" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <h3>Headache</h3>
            <p>Severe headaches and fatigue are common symptoms of COVID-19. Rest and consult your doctor if it worsens.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-lg-10">
        <div class="note row">

          <div class="col-lg-8 mb-4 mb-lg-0"><strong>If you experience symptoms of COVID-19,</strong> isolate yourself
            and call your doctor for professional guidance immediately.</div>
          <div class="col-lg-4 text-lg-right">
            <a href="#" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
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
        <img src="{{ asset('frontend/images/protect.png')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>



@endsection