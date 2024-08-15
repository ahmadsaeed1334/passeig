<!-- WELCOME SECTION START -->
<div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat"
	style="background-image:url(../images/background/bg-1.png);">
	<div class="container">
		<div class="section-head text-center">
			<h2><span class="site-text-primary">{{ $healthTitle?->title }}</span></h2>
			<div class="wt-separator-outer">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left site-bg-primary"></span>
					<span class="separator-right site-bg-primary"></span>
				</div>
			</div>
			<p>{{ $healthTitle?->description }}</p>
		</div>
		<div class="section-content circle-block-outer" data-bs-toggle="tab-hover">
			<div class="row nav nav-tab">
				<!-- Left Side -->
				<div class="col-lg-4 col-md-12 m-b30">
					@foreach ($healths->slice(0, 3) as $key => $health)
						<div class="nav-item">
							<a class="nav-link @if ($key == 0) active @endif wt-icon-box-wraper right p-a10 m-b20"
								href="#tab{{ $key + 1 }}" data-bs-toggle="tab">
								<div class="icon-md site-text-primary radius">
									<span class="icon-cell site-text-primary"><img src="{{ asset('storage/' . $health->icon) }}"
											alt=""></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte text-uppercase">{{ $health->title }}</h4>
									<p>{{ $health->description }}</p>
								</div>
							</a>
						</div>
					@endforeach
				</div>

				<!-- Center Image -->
				<div class="col-lg-4 col-md-12 m-b30">
					<div class="circle-content-pic tab-content">
						@foreach ($healths as $key => $health)
							<div id="tab{{ $key + 1 }}" class="tab-pane @if ($key == 0) in active @endif">
								<div class="wt-box">
									<div class="wt-media site-text-primary m-b20">
										<img src="{{ asset('storage/' . $health->image) }}" class="radius-bx" alt="">
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>



				<!-- Right Side -->
				<div class="col-lg-4 col-md-12 m-b30">
					@foreach ($healths->slice(3, 3) as $key => $health)
						<div class="nav-item">
							<a class="nav-link wt-icon-box-wraper left p-a10 m-b20" href="#tab{{ $key + 1 }}" data-bs-toggle="tab">
								<div class="icon-md site-text-primary radius">
									<span class="icon-cell site-text-primary"><img src="{{ asset('storage/' . $health->icon) }}"
											alt=""></span>
								</div>
								<div class="icon-content">
									<h4 class="wt-tilte text-uppercase">{{ $health->title }}</h4>
									<p>{{ $health->description }}</p>
								</div>
							</a>
						</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>
<!-- WELCOME SECTION END -->
