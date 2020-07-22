@extends('layouts.master')
@push('css')
<title>FG Expense - Home</title>
<link rel="stylesheet" href="{{ asset('css/index.css')}}">

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/modal/style.css">
<!-- Flickity CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<!-- Flickity JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


@endpush
@section('banner')
<!-- banner -->
<!-- banner -->
<div class=" background">
  <div class="banner">
    {{-- <img src="{{asset('images/flag.jpg')}}" alt=""> --}}
    <div class="carets" id="caret">
      <img src="{{asset('images/angle-left.svg')}}" alt="" class="arrow-left">
      <img src="{{asset('images/angle-right.svg')}}" alt="" class="arrow-right">
    </div>
    <div class="target">
      <div class="summary col-md-7 col-sm-9">
          <h4 class="slightly-bold"> In 2019,<br> the government spent </h4>
          <h4 class="bolding"> $4.45 trillion.</h4>
          <div class="para">
            <p>ExpenseNG tracks federal spending to ensure taxpayers can see how their money is being used in communities across Nigeria. 
              Learn more on how this money was spent with tools to help you navigate spending from top to bottom.</p>
          </div>
      </div>
      <div class="gallery p-3"  data-flickity='{ "freeScroll": true }'>
        <div class="card1 carousel-cell card">
            {{-- <p class="tag">New</p> --}}
          <div class="project">
            <p class="slightly-bold">Contruction of Lagos-Ibadan Express road </p>
            <p>  Ministry of Power, Works and Housing</p>
              <div class="d-flex justify-content-between mt-2 align-items-center">
                  <p>Cost of Project: </p>
                  <p id="cost">&#8358;20bn</p>
              </div>
          </div>
        </div>
        <div class="card2 card carousel-cell">
          <div class="project">
            <p class="slightly-bold">Contruction of Lagos-Ibadan Express road </p>
            <p>  Ministry of Power, Works and Housing</p>
            <div class="d-flex justify-content-between mt-2">
                <p>Cost of Project: </p>
                <p id="cost">&#8358;20bn</p>
            </div>
          </div>
        </div>
        <div class="card3 carousel-cell card">
            {{-- <p class="tag">New</p> --}}
          <div class="project">
            <p class="slightly-bold">Contruction of Lagos-Ibadan Express road </p>
            <p>  Ministry of Power, Works and Housing</p>
              <div class="d-flex justify-content-between mt-2 align-items-center">
                  <p>Cost of Project: </p>
                  <p id="cost">&#8358;20bn</p>
              </div>
          </div>
        </div>
      </div>
    </div>

    
    <button class="btn scroll-down" >
      <a href="#expenses"></a>
    </button>
  </div>
</div>
<div class="scroll-down">
  <a href="#compu">
  <img src="{{asset('img\min_comment_img\mdi_arrow-right-drop-circle.png')}}" alt="arrow">
  </a>
</div>
@endsection
@section('content')
<section id="main" class="">
   <!-- Expenses section -->
   <div id="expenses">
    <p class="label">Latest Government Expenses</p>
    <div class="p-3  p-lg-5">
         <div class="expenses">
             <govt-expense></govt-expense>
             <a href="{{route('expense.reports')}}" class="mt-4 mb-5">View Expenditure Report</a>
         </div>
    </div>
   </div>

<!-- Ministry section -->
   <div>
    <p class="label mb-5 specific">Ministry Expenditures</p>
    <div class="ministry container mt-4">
        <div class="ministry-top">
          <div class="ministry-heading">
            <select class="ministry-head">
              <option value="agric">Ministry of Agriculture</option>
              <option value="grei">Ministry of Agriculture</option>
              <option>Ministry of Agriculture</option>
              <option>Ministry of Agriculture</option>
              <option>Ketchup</option>
              <option>Barbecue</option>
            </select>
           </div>
           <a href="{{ route('ministries') }}" class="profile">View all profiles</a>
         </div>
        <div class="ministry-stat">
              <div class="stat-a p-4">
                <div class="graph-cont">
                <div id="chart"></div>
                 </div>
                <div>
                  <p class="exp-card1">Total amount spent</p>
                  <p class="exp-card2">&#8358;123,446,332</p>
                  <p class="exp-card3">2020</p>
                </div>
              </div>
              <div class="stat-b">
                <div class="d-flex p-2 justify-content-between">
                  <div class="graph-cont">
                  <div id="chart1"></div>
                   </div>
                <div class="ml-5 w-50">
                  <p class="exp-card1">Total amount spent on projects</p>
                  <p class="exp-card2">&#8358;123,446,332</p>
                  <p class="exp-card3">2020</p>
                </div>
                </div>
                <div class="d-flex p-2 justify-content-between">
                  <div class="graph-cont">
                  <div id="chart2"></div>
                   </div>
                <div class="ml-5 w-50">
                  <p class="exp-card1">Total amount spent on salary payments</p>
                  <p class="exp-card2">&#8358;123,446,332</p>
                  <p class="exp-card3">2020</p>
                </div>
                </div>
                <div class="d-flex p-2 justify-content-between">
                  <div class="graph-cont">
                  <div id="chart3"></div>
                   </div>
                <div class="ml-5 w-50">
                  <p class="exp-card1">Total amount spent on others</p>
                  <p class="exp-card2">&#8358;123,446,332</p>
                  <p class="exp-card3">2020</p>
                </div>
                </div>
              </div>
        </div>
    </div>
   </div>
   <!-- Explore section -->
   <div class="explore">
     <div class="container">
      <p>A big-picture view of the daily spending <br> of the federal government</p>
      <p>Use our explorer to view how government spends our money daily</p>
      <button>Explore</button>
     </div>
   </div>
   <!-- Company section -->
   <p class="label mt-5 mb-5 " id="compu">Companies that received money</p>
   <div class="companies container d-flex justify-content-between">
    <div class="comp-card comp-card-1">
        <div class="awarded">
          <div class="graph-cont">
          <div id="chart4"></div>
           </div>
          <div class="ml-1 mr-2">
             <p class="exp-card1">Total amount Awarded</p>
             <p class="exp-card2">&#8358;123,446,332</p>
             <p class="exp-card3">2019</p>
          </div>
      </div>
      <div class="ml-3">
       <div class="d-flex align-items-center mb-3">
         <img src="{{asset('/images/berger.jpg')}}" alt="">
         <p class="mt-3">Julius Berger</p>
       </div>
       <div class="profile">
         <p>Total number of contracts awarded</p>
         <p>37</p>
         <p>2019</p>
       </div>
       <div class="profile my-3">
         <p>Name of CEO</p>
         <p>Dr. Lars Ritchter</p>
         <p>2020</p>
       </div>
       <div class="profile">
         <p>Company twitter handle</p>
         <p id="handle">@juliusBerger0</p>
         <p>2019</p>
       </div>
    </div>
     </div>
        <div class="comp-card">
         <div class="awarded">
           <div class="graph-cont">
           <div id="chart5"></div>
            </div>
           <div class="ml-1 mr-2">
              <p class="exp-card1">Total amount Awarded</p>
              <p class="exp-card2">&#8358;123,446,332</p>
              <p class="exp-card3">2019</p>
           </div>
       </div>
       <div class="ml-3">
        <div class="d-flex align-items-center mb-3">
          <img src="{{asset('/images/berger.jpg')}}" alt="">
          <p class="mt-3">Julius Berger</p>
        </div>
        <div class="profile">
          <p>Total number of contracts awarded</p>
          <p>37</p>
          <p>2019</p>
        </div>
        <div class="profile my-3">
          <p>Name of CEO</p>
          <p>Dr. Lars Ritchter</p>
          <p>2020</p>
        </div>
        <div class="profile">
          <p>Company twitter handle</p>
          <p id="handle">@juliusBerger0</p>
          <p>2019</p>
        </div>
     </div>
      </div>
      <div class="comp-card">
       <div class="awarded">
         <div class="graph-cont">
         <div id="chart6"></div>
          </div>
         <div class="ml-1 mr-2">
            <p class="exp-card1">Total amount Awarded</p>
            <p class="exp-card2">&#8358;123,446,332</p>
            <p class="exp-card3">2019</p>
         </div>
     </div>
     <div class="ml-3">
        <div class="d-flex align-items-center mb-3">
          <img src="{{asset('/images/berger.jpg')}}" alt="">
          <p class="mt-3">Julius Berger</p>
        </div>
        <div class="profile">
          <p>Total number of contracts awarded</p>
          <p>37</p>
          <p>2019</p>
        </div>
        <div class="profile my-3">
          <p>Name of CEO</p>
          <p>Dr. Lars Ritchter</p>
          <p>2020</p>
        </div>
        <div class="profile">
          <p>Company twitter handle</p>
          <p id="handle">@juliusBerger0</p>
          <p>2019</p>
        </div>
     </div>
      </div>
      <div class="vll m-md-auto mx-sm-auto mt-sm-4">
        <a href="{{ route('contractors') }}" class="profile">View all Contracts</a>
       </div>
 </div>
 
</div>
   <!-- conversation section -->
   <div class="convo-background">
<div class="convo container d-flex  justify-content-between mb-3">
            <div class="tweet col-md-5 col-lg-5 d-flex align-items-center justify-content-start">
               <div class="twt-handle">
                 {{-- <img src="{{asset('/images/twitter.png')}}" alt=""> --}}
                <a href="#">@expenseNG</a>
               </div>
            </div>
           <div class="query col-md-7 col-xl-5 col-sm-12">
                <p>Join the conversation</p>
                <p>We want to know how we can serve you better.
                Drop by our community page to ask questions,
                propose new features, sign up for testing, and join the conversation about federal spending data.</p>
                <p>Want to receive update in your inbox?</p>
                <button id="open" class="toggle">Register</button>
          </div>
   </div>
  </div>
</section>

@endsection
@section('js')
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('/js/subscription.js')}}"></script>
@endsection
