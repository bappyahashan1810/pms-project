


<style>
	.active{
		color:#f10e0e !important;
	}
</style>
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						
						<li><a href="#"><i class="fa fa-envelope-o"></i> pms@email.com</a></li>
						
					</ul>
					<ul class="header-links pull-right">
					@if(auth()->check())
					    <li><a class="{{Request::is('/')? 'active' :''}}" href="{{route('welcome')}}"><i class="fa fa-cart-plus"></i>Shop</a></li>
						<li><a class="{{Request::is('customer/myaccount*')? 'active' :''}}" href="{{route('myaccount')}}"><i class="fa fa-user-o"></i> My Account</a></li>
						<li><a class="{{Request::is('customer/my-orders*')? 'active' :''}}" href="{{route('myorders')}}"><i class="fa fa-shopping-basket"></i> My Orders</a></li>
						<li><a class="{{Request::is('customer/cart*')? 'active' :''}}" href="{{route('cart.view')}}"><i class="fa fa-shopping-cart"></i> My Cart ({{session()->has('cart')?count(session()->get('cart')):0}})</a></li>
						<li><a href="" onclick="javascript:event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-lock"></i>Logout</a></li>
						<form id="logout-form" action="{{route('logout')}}" method="post">@csrf</form>
					@else 
						<li><a href="{{route('login')}}"><i class="fa fa-key"></i> Login</a></li>
						<li><a href="{{route('register')}}"><i class="fa fa-user"></i>Register</a></li>
					@endif
						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{route('search')}}" method="post">
									@csrf
									<select class="input-select" name="category_id">
										@foreach(generics() as $generic)
											<option value="{{$generic->id}}">{{$generic->name}}</option>
										@endforeach
									</select>
									<input class="input" placeholder="Search here" name="search">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		