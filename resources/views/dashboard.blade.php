<a href="{{route('auth.logout')}}">Logout</a>
@if(auth()->user()->role_id == 1)
<p>Restaurant</p>
@endif
@if(auth()->user()->role_id == 2)
<p>Hotel</p>
@endif