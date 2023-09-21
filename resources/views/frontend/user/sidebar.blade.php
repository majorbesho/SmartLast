

<li class="{{\Request::is('user/personalInformation')? 'active' : ''}}"><a href="{{route('personalInformation')}}" class="dash-a"> My Tickets</a></li>

<li class="{{\Request::is('user/dashboard')? 'active' : ''}}"><a href="{{route('dashboard')}}" class="dash-a"> Personal Information</a></li>
{{-- <li class="{{\Request::is('user/graph')? 'active' : ''}}"><a href="{{route('graph')}}" class="dash-a">My BIO</a></li> --}}

<li class="{{\Request::is('user/transaction')? 'active' : ''}}" ><a href="{{route('transaction')}}" class="dash-a">Transactions</a></li>
<li class="{{\Request::is('user/userreferral')? 'active' : ''}}" ><a href="{{route('userreferral')}}" class="dash-a">Referral Program</a></li>
{{-- <li class="{{\Request::is('user/userreferral')? 'active' : ''}}" ><a href="{{route('userreferral')}}" class="dash-a">Favorite Lotteries</a></li> --}}
{{-- <li class="{{\Request::is('user/new_userreferral')? 'active' : ''}}" ><a href="{{route('new.userreferral')}}" class="dash-a">new Referral Program</a></li> --}}

{{-- <li class="{{\Request::is('user/contact')? 'active' : ''}}" ><a href="{{route('contact')}}" class="dash-a">Help Center</a></li> --}}
<li class="{{\Request::is('user/logout')? 'active' : ''}}" ><a href="{{route('user.logout')}}" class="dash-a">Log Out</a></li>
