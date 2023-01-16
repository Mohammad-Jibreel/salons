@extends('clientPage.index')

@section('content')

<section id="services" class="sec-padding">
    <div class="container">
      <div class="section-header">
        <h2>Our Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>

      <div class="row">
           <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/1.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">HAIR</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/2.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">SKIN</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/3.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">HANDS &amp; FEET</h5>
                </div>
              </div>
            </div>
      </div>
              <div class="row">
           <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/4.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">ESSENTIALS</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/5.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">INOVATIONS</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
             <div class="card wow fadeInLeft" style="width: 18rem;">
                 <img src="{{asset('asset/img/services/6.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">BRIDAL</h5>
                </div>
              </div>
            </div>
      </div>
      <div class="row">


        <div class="col-lg-4">
          <div class="box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-map"></i></div>
            <h4 class="title"><a href="">ESSENTIALS</a></h4>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="title"><a href="">INOVATIONS</a></h4>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="fa fa-map"></i></div>
            <h4 class="title"><a href="">BRIDAL</a></h4>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
