@extends('layout.master')


@section('content')
<br>
<br>
      <footer>
         <div id="site_content">
          <ul id="images">
           
            <li><a href="{{ url('/Sciences') }}" title=""><img src="photo/scince.jpg" width="600" height="300" alt="photo_one"></a></li>

            <li><a href="{{ url('/English') }}" title=""><img src="photo/english.jpg" width="600" height="300" alt="seascape_two"></a></li>

            <li><a href="{{ url('/Social_Studies') }}" title=""><img src="photo/social_studies.jpg" width="600" height="300" alt="seascape_three"></a></li>

            <li><a href="{{ url('/Mathematics') }}" title=""><img src="photo/math.jpg" width="600" height="300" alt="seascape_four"></a></li>

            <li><a href="{{ url('/Arabic') }}" title=""><img src="photo/arabic.jpg" width="600" height="300" alt="seascape_five"></a></li>

            <li><a href="{{ url('/Islamic') }}" title=""><img src="photo/islamic.jpg" width="600" height="300" alt="seascape_seascape"></a></li>

            <li><a href="{{ url('/Quraan') }}" title=""><img src="photo/quraan.jpg" width="600" height="300" alt="photo_one" ></a></li>

          </ul> 
         </div>
      </footer>
      
@endsection