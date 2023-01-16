@extends('clientPage.index')

@section('content')

<section id="about" class="wow fadeInUp sec-padding">
    <div class="container">
      <div class="section-header">
        <h2>About Mirrors</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p>
      </div>
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="{{asset('asset/img/about-img.png')}}" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
          <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident</h3>
          <p>Consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat</p>
          <ul>
            <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam, incidunt fugiat culpa.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam, culpa esse aute nulla.</li>
            <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro esse aute nulla. malis nulla duis fugiat</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

@endsection
