@extends('layouts.homelayout')
@section(section: 'titleContent')
Blogs
@endsection
@section('homeContent')


<div class="hero-v1">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 text-center mx-auto">
        <span class="d-block subheading">Updates</span>
        <h1 class="heading mb-3">Blog Posts</h1>
        <p class="mb-5">Discover informative blog posts with the latest updates, prevention tips, and expert advice on
          COVID-19.</p>
      </div>

    </div>
  </div>
</div>


<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-4 section-heading">Latest News &amp; Articles</h2>
        <p>Stay updated with the latest news and articles on COVID-19, including prevention tips and expert insights.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
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
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
        <div class="post-entry">
          <a href="#" class="thumb">
            <span class="date">30 Jul, 2020</span>
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
      <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
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

    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="custom-pagination">
          <a href="#">1</a>
          <a href="#" class="active">2</a>
          <a href="#">3</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection