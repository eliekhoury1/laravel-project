@if(session('id'))
     @if(session('role')=='Role1')
     
     <script>window.location = "{{route('signin.index')}}";</script>
     @elseif(session('role')=='Role2')
     
    
     @elseif(session('role')=='Role3')
     <script>window.location = "{{route('store.index')}}";</script>
     @endif
  @else 
  <script>window.location = "/signin/create";</script> 
@endif

		<!-- header section start -->
		<header class="header-section d-xl-block d-none">
			<div class="container-fluid">
				<div class="header-area">
					<div class="logo">
						<a href="index.html"><img src="{{asset('libraries/assets/images/logo/01.png')}}" alt="logo"></a>
					</div>
					<div class="main-menu">
						<ul>
                            <li>
                                <a href="{{route('Foods.index') }}">Display menu</a>
                            </li>
                            <li><a href="{{route('Foods.create') }}">ADD NEW FOODS</a></li>
							<li><a href="{{route('offers.create') }}">Add Offer</a></li>
							<li><a href="{{url('offers')}}">View Offer</a></li>					
                            
                        </ul>
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="city-lang">
								<img src="{{asset('libraries/assets/images/header/01.png')}}" alt="city-lang">
								
									<option >LEB</option>
							
							</div>




							<div class="author-account">
							@if(session('user')!='')
								
								<div class="author-icon">
									<img src="{{ asset('storage'.session('photo'))}}" alt="author">
								</div>

                                
								
								<div class="author-select">
								<select name="author-select" id="author-select" onchange="location = this.value;">
										<option value="signin">{{session('user')}}</option>
										<option value="{{route('signin.edit',['signin'=>session('id')])}}">UPDATE</option>
										<option value="{{('/logout')}}">Logout</option>
									</select>

									</div>
								@endif	

								@if(session('user')=='')
								    <div class="author-select">
									<div class="author-icon">
									<img src="{{asset('storage/images/unknown.jpg')}}" alt="author">
								    </div>
                                    
									<li><a href="{{route('signin.create')}}">Signin</a></li>
                                    </div>
								@endif
								


							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending -->