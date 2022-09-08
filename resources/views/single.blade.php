 @foreach($country as $countryName)
   
       @if($loop->last)
  <p>{{$countryName}}</p>

       @endif

        @endforeach