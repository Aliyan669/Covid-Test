@extends('layouts.homelayout')
@section(section: 'titleContent')
Home
@endsection

@section('homeContent')

<!-- /// Hero Section Start -->
<div class="hero-v1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mr-auto text-center text-lg-left">
        <span class="d-block subheading">Covid-19 Awareness</span>
        <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
        <p class="mb-5">Vaccination is the best way to protect yourself from COVID-19. <br /> Get your shot today and
          safeguard your loved ones!</p>
        <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p>
      </div>
      <div class="col-lg-6">
        <figure class="illustration">
          <img src="{{ asset('frontend/images/illustration.png')}}" alt="Image" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</div>
<!-- /// Hero Section Start -->



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
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <figure class="img-play-vid">
          <img src="{{ asset('frontend/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
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
        <p>Coronavirus (COVID-19) is a highly contagious virus that affects the respiratory system and spreads through
          airborne droplets!</p>
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



<div class="container pb-5">
  <div class="row">
    <div class="col-lg-3">
      <div class="feature-v1 d-flex align-items-center">
        <div class="icon-wrap mr-3">
          <span class="flaticon-protection"></span>
        </div>
        <div>
          <h3>Protection</h3>
          <span class="d-block">Stay safe and secure.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="feature-v1 d-flex align-items-center">
        <div class="icon-wrap mr-3">
          <span class="flaticon-patient"></span>
        </div>
        <div>
          <h3>Prevention</h3>
          <span class="d-block">Stop the spread early.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="feature-v1 d-flex align-items-center">
        <div class="icon-wrap mr-3">
          <span class="flaticon-hand-sanitizer"></span>
        </div>
        <div>
          <h3>Treatments</h3>
          <span class="d-block">Care for faster recovery.</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="feature-v1 d-flex align-items-center">
        <div class="icon-wrap mr-3">
          <span class="flaticon-virus"></span>
        </div>
        <div>
          <h3>Symptoms</h3>
          <span class="d-block">Recognize signs quickly.</span>
        </div>
      </div>
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
        <h2 class="mb-4 section-heading">News &amp; Articles</h2>
        <p>Stay updated with the latest news and articles on COVID-19, including prevention tips and expert insights.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="post-entry">
          <a href="#" class="thumb">
            <span class="date">24 Jul, 2020</span>
            <img src="{{ asset('frontend/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
          </a>
          <div class="post-meta text-center">
            <a href="">
              <span class="icon-user"></span>
              <span>Admin</span>
            </a>
            <a href="#">
              <span class="icon-comment"></span>
              <span>3 Comments</span>
            </a>
          </div>
          <h3><a href="#">How Coronavirus Very Contigous</a></h3>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="post-entry">
          <a href="#" class="thumb">
            <span class="date">28 Jul, 2020</span>
            <img src="{{ asset('frontend/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
          </a>
          <div class="post-meta text-center">
            <a href="">
              <span class="icon-user"></span>
              <span>Admin</span>
            </a>
            <a href="#">
              <span class="icon-comment"></span>
              <span>3 Comments</span>
            </a>
          </div>
          <h3><a href="#">How Coronavirus Very Contigous</a></h3>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="post-entry">
          <a href="#" class="thumb">
            <span class="date">30 Jul, 2020</span>
            <img src="{{ asset('frontend/images/hero_1.jpg')}}" alt="Image" class="img-fluid">
          </a>
          <div class="post-meta text-center">
            <a href="">
              <span class="icon-user"></span>
              <span>Admin</span>
            </a>
            <a href="#">
              <span class="icon-comment"></span>
              <span>3 Comments</span>
            </a>
          </div>
          <h3><a href="#">How Coronavirus Very Contigous</a></h3>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection