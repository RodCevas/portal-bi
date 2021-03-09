<!DOCTYPE html>
<html lang="ca">

<head>
  <title>{{ $center->meta_title }}</title>
  <meta name="description" content="{{ $center->meta_description }}">
  <meta name="keywords" content="{{ $center->meta_keywords }}">
  @include('includes/meta')
</head>

<body class="pacients">
  @include('includes/header') @include('includes/menu')
  <main class="pacients">
    @include('includes/submenuCenter')
    <div class="text wrapper" style="overflow: auto;">
      <div class="centre-blocs">
        <div id="centreBloc0">
          &nbsp;
        </div>
        <div id="centreBloc1" class="centre-bloc">
          <div class="centre-bloc-sup">
            <img src="{{asset('assets/img/hospital/poblacio.png')}}" alt="poblacio"  title="poblacio"/>
          </div>
          <div class="centre-bloc-inf">
            {{ trans('frontend.residents') }}
            <br/>
            <span>{{number_format($center->residents, 0, ',', '.')}} habitants</span>
          </div>
        </div>
        <!--modificado DANI 24/01/2019
		<div id="centreBloc2" class="centre-bloc">
          <div class="centre-bloc-sup">
            <img src="{{asset('assets/img/hospital/professionals.png')}}" alt="professionals" title="professionals"/>
          </div>
          <div class="centre-bloc-inf">
            <span>{{$center->professionals}}</span>
            <br/>{{ trans('frontend.professionals') }}
          </div>
        </div>
		-->
		<!--modificado DANI 24/01/2019-->
		 <div id="centreBloc0">
          &nbsp;
        </div>
		<!------------------------------>
        <div id="centreBloc3" class="centre-bloc">
          <div class="centre-bloc-sup">
            <img src="{{asset('assets/img/hospital/horaris.png')}}" alt="horaris" title="horaris"/>
          </div>
          <div class="centre-bloc-inf">
            {!! $center->schedule !!}
          </div>
        </div>
      </div>
	 
      <div class="centre-info">
        <div class="centre-mapa">
          <div class="centre-mapa-text">
            {!! $center->address !!}
          </div>
          <div class="centre-mapa-mapa">
            <a href="{{$center->link_map}}" target="blank">
              <img src="{{asset($center->map)}}" alt="{{$center->alt_map}}" title="{{$center->alt_map}}"/>
            </a>
          </div>
        </div>
		
        @isset($center->file)
        <div class="centre-guia">
          <div class="centre-guia-text">
            <a href="{{asset($center->file)}}" target="blank">{{ trans('frontend.user_guide') }}</a>
          </div>
          @isset($center->image_file)
          <div class="centre-guia-guia">
            <img src="{{asset($center->image_file)}}" alt="{{$center->alt_file}}" title="{{$center->alt_file}}"/>
          </div>
          @endisset
        </div>
        @endisset
      </div>
  </main>
  @include('includes/footer')
</body>

</html>
