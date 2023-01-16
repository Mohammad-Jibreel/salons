@extends('clientPage.index')
@section('content')

<section id="portfolio" class="wow fadeInUp sec-padding">
    <div class="container">
      <div class="section-header">
        <h2>Our Portfolio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/1.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/1.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/2.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/2.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/3.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/3.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/4.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/4.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/5.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/5.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/6.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/6.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/7.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/7.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="portfolio-item wow fadeInUp">
            <a href="img/portfolio/8.jpg" class="portfolio-popup">
              <img src="{{asset('asset/img/portfolio/8.jpg')}}" alt="">
              <div class="portfolio-overlay">
                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
              </div>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

@endsection
