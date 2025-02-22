@include('inc.carousel')
@extends('layouts.app')
@section('content')
@section('title', 'Home')

<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').modal('show');
  });
</script>

{{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}


{{-- NEWS --}}
<div class="container-fluid">
  <div class="row ">
    <div data-aos="fade-left" class='col-md-12'>

      <div class="card mb-3 shadow">
        <h3 class="text-white border-primary card-title p-2 pl-3 mb-0" style="background:#0072e9;">My City, My Government</h3>

        <div class="card-body text-primary" >
          <div class="row" id="news_headlines">
          </div>
          <a href="#" id = "seeNews" class="text-right font-weight-bold font-italic p-2 text-primary align-baseline align-text-bottom" data-toggle="modal" data-target="#">See All News>></a>
        </div>
      </div>
    </div>
  </div>



    {{-- 1st row --}}
    <div class="row">
      <div class="col-lg-3">
        <div data-aos="fade-right" class="card mb-3 shadow">
          <h3 class="text-white card-title border-primary text-center py-2 mb-0">Jobs</h3>
          <div class="card-body text-primary">
            <a
              href="http://csc.gov.ph/career/"
              class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
              Career in Government Service
            </a>
            <a
              href="https://www.philjobnet.gov.ph/"
              class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
              Phil Job Net
            </a>
          </div>
        </div>

        <div data-aos="fade-right" class="card mb-3 shadow">
            <h3 class="text-white card-title p-2 text-center mb-0">
              Bids and Awards
            </h3>
            <div class="card-body text-primary">
              <a
                href="https://www.philgeps.gov.ph/GEPSNONPILOT/Tender/SplashOpenOpportunitiesUI.aspx?menuIndex=3&ClickFrom=OpenOpp&type=agency&fbclid=IwAR1rSQrAf0DDTweHIjYTNkT-PWWtHCoCbbN1EfSZcF4b77pZWcIOgOBarS0"
                class="btn btn-outline-info btn-block text-dark" aria-disabled="true" target="_blank">
                PhilGePS LINK
              </a>
            </div>
          </div>
          <div>
            <img class="align-middle" src="{{URL::asset('image/banner.png')}}" style="height:73px">
          </div>
      </div>
      {{-- SERVICES START--}}
      <div  class="col-lg-6">
        <div data-aos="fade-left" class="card mb-3 shadow">
          <h3 class="text-white card-title p-2 text-center mb-0">Sevices</h3>
          <div class="card-body text-primary">
          
            <div id = "gov_services">

            </div>
          </div>
        </div>
      </div>

{{-- SERVICES END--}}

      <div data-aos="fade-left" class="col-lg-3 pb-1 ">
        <div class="card shadow ">

          <h3 class="text-white card-title p-2 text-center mb-0">Hotlines</h3>
          <div class="card-body text-primary col-md-12" >
            <dl class="row text-dark pb-0 mb-0">
              <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo Government</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 pb-2">Landline 3000-065</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo CDRRMO</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 mb-0">Landline 8000-405</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/phone.png')}}" style="width:12px"></dt>
                <dd class="col-10 mb-0">Smart 09089078124</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/phone.png')}}" style="width:12px"></dt>
                <dd class="col-10 pb-2">Globe 09955619456</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/control.png')}}" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">BARANGAY CONTROL</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 pb-2">5623-086</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/redcross.png')}}" style="width:16px"></dt>
              <dd class="col-10 font-weight-bold mb-0">RED CROSS SPC Chapter</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 pb-2">5624-025</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/spc-logo.png')}}" style="width:16px"></dt>
                <dd class="col-10 font-weight-bold mb-0">San Pablo Welfare & Development Office</dd>&nbsp;
                  <dt class="col-1 justify-content-center align-items-center"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                  <dd class="col-10 pb-2">Landline (049)3000-065</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/bumbero1.png')}}" style="width:20px"></dt>
              <dd class="col-10 font-weight-bold mb-0">Bureau of Fire Protection</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 pb-2">5627-654</dd>&nbsp;
              <dt class="col-1 justify-content-center align-items-center mb-0"><img src="{{URL::asset('image/police.png')}}" style="width:23px"></dt>
              <dd class="col-10 font-weight-bold mb-0">San Pablo City Police</dd>&nbsp;
                <dt class="col-1 justify-content-center align-items-right mb-0"><img src="{{URL::asset('image/telephone.png')}}" style="width:16px"></dt>
                <dd class="col-10 mb-0">5626-474/5210-610</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>

    {{-- 1st row end --}}

    {{-- 2nd row --}}
    <div class="row">
      <div data-aos="fade-right" class="col-lg-4">
        <div class="card mb-3 shadow" style="height: 23rem;">
          <h3 class="text-white card-title p-2 text-center mb-0 align-text-bottom">
          Events and Announcements
          </h3>
          <div class="card-body d-flex justify-content-center">

            <div id = "latestEventAndAnnouncement">
                
            </div>
          
          </div>
          <a href="#" id ="seeEvents" class="text-right font-weight-bold font-italic p-2 text-primary align-baseline align-text-bottom" data-toggle="modal" data-target="">See All Events>></a>
        </div>
        <div class="card mb-3 shadow">
          <h3 class="text-white card-title p-2 text-center mb-0 align-text-bottom">
          Engineering and Building Form
          </h3>
          <div class="card-body text-primary" id = "engr-bldg-form"> 
             
          </div>
          
        </div>

      </div>

      

      <div data-aos="fade-left" class="col-lg-4">
        <div class="card shadow mb-3">
          <h3 class="text-white card-title p-2 text-center mb-0">
          Disclosure
          </h3>
          <div class="card-body text-primary">
            <a style="font-size:12px;"
            href="{{URL::asset('docs/4th-qtr-SPP.xls')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true" >
            4th-qtr-SPP
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/20-Uitlization-2018-4th-Quarter.xls')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            20-Utilization-2018-4th-Quarter
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/APP-2019.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            APP-2019
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/BID-RESULTS 2018 4th Quarter.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            BID-RESULTS 2018 4th Quarter
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/CDRRMF-12.31.18.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            CDRRMF-12.31.18
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/Manpower Complement (DILG).xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Manpower Complement (DILG)
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/PDAF UTILIZATION.xls')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            PDAF UTILIZATION
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/SCF-4THQ.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            SCF-4THQ
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/SEF-Utilization-2018.xls')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            SEF-Utilization-2018
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/Statement of Debt Services 03.24.14.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Statement of Debt Services 03.24.14
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/Unliquidated-2018.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Unliquidated-2018
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/SCF.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Statement of  Cash Flows - General Fund
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/SFP.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Condensed Statement of Financial Performance - GF
            </a>
            <a style="font-size:12px;"
            href="{{URL::asset('docs/SFPBS.xlsx')}}" target="_blank"
            class="btn btn-outline-info btn-block btn-sm text-dark" aria-disabled="true">
            Condensed Statement of Financial Position - GF
            </a>
          </div>
        </div>
      </div>
      <div data-aos="fade-left" class="col-lg-4">
        <div class="card shadow mb-1">
          <h4 class="text-white card-title p-2 text-center mb-0">
            Featured Links
          </h4>
          <div class="card-body">
            <dl class="text-center">
            <dd>
            <a class="btn-link" href="https://www.facebook.com/cio.sanpablo" target="_blank">CIO San Pablo FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/tourismsanpablo" target="_blank">Tourism Office San Pablo FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/sanpablo.lgu.1" target="_blank">San Pablo LGU FB Page</a>
            </dd>
            <dd>
            <a class="btn-link" href="https://www.facebook.com/profile.php?id=100004675068302&fref=pb&hc_location=friends_tab" target="_blank">CDRRMO San Pablo FB Page</a>
            </dd>
            </dl>
          </div>

        </div>
        <div data-aos="fade-left" class="card shadow card-body ">
          <img class="align-middle" src="{{URL::asset('image/flag.gif')}}">
          
          <div id = "phil_holiday"></div>

        </div>
      </div>
    </div>
    {{-- 2nd row end --}}

    {{-- 3rd row --}}
    <div data-aos="fade-right" data-aos-duration="1000" data-aos-duration="2000" class="row mt-4">
      <div class="col-lg-12 mb-4">
        <div class="card shadow mb-1">
          <h3 class="text-white card-title p-2 text-center mb-0">Videos</h3>
          <div class="card-body text-primary">
            <div class="container">
              <div class="row">
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe height="250px" width="100%" src="https://www.youtube.com/embed/Xja8v82gweA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe class="pb-3" width="100%" height="250px" src="https://www.youtube.com/embed/4M7GjCzUb40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe class="pb-3" width="100%" height="250px" src="https://www.youtube.com/embed/HCj17hZM4vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                  <iframe width="100%" height="250px" src="https://www.youtube.com/embed/QCd-faJ5OGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-aos="fade-left" class="card shadow mb-4">
      <h2 class="text-white card-title border-primary text-center mt-0" >Visitor's Counter:</h2>
      <h3 class="card-body text-center py-2" style="background-color:#48C9B0;border-radius:0px; color:white;">{{ $count }}</h3>
    </div>
    {{-- 3rd row end --}}

  </div>

  <script src="/js/modal.js"></script>
  <script src="/js/modal-brgy.js"></script>
  <script>
  AOS.init();
  </script>
@extends('inc.modals')
@endsection
