<div id="kt_server" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="server" data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_server_toggle" data-kt-drawer-close="#kt_server_close">
	@php
		$server = [
		    'IP address' => $_SERVER['SERVER_ADDR'],
		    'Server name' => $_SERVER['SERVER_NAME'],
		    'Server software' => $_SERVER['SERVER_SOFTWARE'],
		    'Server protocol' => $_SERVER['SERVER_PROTOCOL'],
		    'Server port' => $_SERVER['SERVER_PORT'],
		    'Request method' => $_SERVER['REQUEST_METHOD'],
		    'Request time' => custom_date_format(parse_date($_SERVER['REQUEST_TIME'])),
		    'Request URI' => $_SERVER['REQUEST_URI'],
		    'HTTP host' => $_SERVER['HTTP_HOST'],
		    'HTTP referer' => $_SERVER['HTTP_REFERER'] ?? '',
		    'HTTPS' => $_SERVER['HTTPS'] ?? 'False',
		    // 'PHP version' => phpversion(),
		    'Document root' => $_SERVER['DOCUMENT_ROOT'],
		    // 'User agent' => $_SERVER['HTTP_USER_AGENT'],
		];
		
		// $composerLock = json_decode(file_get_contents(base_path('composer.lock')), true);
		// $packages = collect($composerLock['packages'])->pluck('name', 'version');
		
	@endphp
	<!--begin::Card-->
	<div class="card rounded-0 w-100 shadow-none">
		<!--begin::Header-->
		<div class="card-header pt-5">
			<!--begin::Title-->
			<h3 class="card-title text-white-800">Software/Server Information</h3>
			<!--end::Title-->
		</div>
		<!--end::Header-->
		<!--begin::Header-->
		<div class="card-header pt-5">
			<!--begin::Title-->
			<h3 class="card-title text-white-800">Server Information</h3>
			<!--end::Title-->
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-5">
			@foreach ($server as $key => $value)
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Section-->
					<!-- phpinfo(); -->
					<div class="fw-semibold fs-6 me-2 text-white-700">{{ $key }}: </div>
					<!--end::Section-->
					<!--begin::Statistics-->
					<div class="d-flex align-items-senter">
						<!--begin::Number-->
						<span class="fw-bolder fs-6 text-white-900">{{ $value }}</span>
						<!--end::Number-->
					</div>
					<!--end::Statistics-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-3"></div>
				<!--end::Separator-->
			@endforeach
		</div>
		<!--end::Body-->
		<!--begin::Header-->
		<div class="card-header pt-5">
			<!--begin::Title-->
			<h3 class="card-title text-white-800">Software Information </h3>
			<!--end::Title-->
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-5">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Section-->
				<!-- phpinfo(); -->
				<div class="fw-semibold fs-6 me-2 text-white-700">PHP Version: </div>
				<!--end::Section-->
				<!--begin::Statistics-->
				<div class="d-flex align-items-senter">
					<!--begin::Number-->
					<span class="fw-bolder fs-6 text-white-900">v{{ phpversion() }}</span>
					<!--end::Number-->
				</div>
				<!--end::Statistics-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-3"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Section-->
				<!-- phpinfo(); -->
				<div class="fw-semibold fs-6 me-2 text-white-700">Laravel Framwork: </div>
				<!--end::Section-->
				<!--begin::Statistics-->
				<div class="d-flex align-items-senter">
					<!--begin::Number-->
					{{-- app()->version(); --}}
					<span class="fw-bolder fs-6 text-white-900">{{ app()->version() }}</span>
					<!--end::Number-->
				</div>
				<!--end::Statistics-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-3"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Section-->
				<!-- phpinfo(); -->
				<div class="fw-semibold fs-6 me-2 text-white-700">Laravel Livewire: </div>
				<!--end::Section-->
				<!--begin::Statistics-->
				<div class="d-flex align-items-senter">
					<!--begin::Number-->
					<span
						class="fw-bolder fs-6 text-white-900">{{ \Composer\InstalledVersions::getPrettyVersion('livewire/livewire') }}</span>
					<!--end::Number-->
				</div>
				<!--end::Statistics-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>
