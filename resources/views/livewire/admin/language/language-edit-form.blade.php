<div class="card">
	<div class="card-body">
		<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x fs-5 fw-bold border-transparent">
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a wire:click.prevent="$set('tab','labels')"
					class="nav-link text-active-{{ primary_color() }} ms-0 me-10 {{ $tab == 'labels' ? 'active' : '' }} py-5"
					href="#labels">
					{{ __('Labels') }}</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a wire:click.prevent="$set('tab','messages')"
					class="nav-link text-active-{{ primary_color() }} {{ $tab == 'messages' ? 'active' : '' }} ms-0 me-10 py-5"
					href="#messages">
					{{ __('Messages') }}</a>
			</li>
			<li class="mt-2 text-end">
				<button type="submit" class="btn btn-sm btn-light-{{ primary_color() }} ms-10 font-weight-bold py-5">Save
					changes</button>
			</li>
			<!--end::Nav item-->
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade {{ $tab == 'labels' ? 'active show' : '' }}" id="labels" role="tabpanel"
				aria-labelledby="labels-tab">
				<div id="kt_account_settings_profile_details" class="show collapse">
					<div class="card">
						<div class="card-body row">
							@foreach ($arrLabel as $label => $value)
								<div class="col-md-4 mb-5">
									<div class="form-group">
										<label class="form-label" for="example3cols1Input">
											{{ $label }} <i wire:click.prevent="deleteTrans('{{ $currantLang }}','{{ $label }}')"
												class="fa-solid fa-trash pointer ms-2 text-danger" {!! show_toltip('Delete') !!}></i>
										</label>
										<input type="text" class="form-control form-control-solid" name="label[{{ $label }}]"
											value="{{ $value }}">
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade {{ $tab == 'messages' ? 'active show' : '' }}" id="messages" role="tabpanel"
				aria-labelledby="messages-tab">
				<div class="card">
					<div class="card-body row">
						@foreach ($arrMessage as $fileName => $fileValue)
							<div class="col-lg-12 mt-5">
								<h3>{{ ucfirst($fileName) }}</h3>
							</div>
							@foreach ($fileValue as $label => $value)
								@if (is_array($value))
									@foreach ($value as $label2 => $value2)
										@if (is_array($value2))
											@foreach ($value2 as $label3 => $value3)
												@if (is_array($value3))
													@foreach ($value3 as $label4 => $value4)
														@if (is_array($value4))
															@foreach ($value4 as $label5 => $value5)
																<div class="col-md-4 mb-5">
																	<div class="form-group">
																		<label
																			class="form-label">{{ $fileName }}.{{ $label }}.{{ $label2 }}.{{ $label3 }}.{{ $label4 }}.{{ $label5 }}</label>
																		<input type="text" class="form-control form-control-solid"
																			name="message[{{ $fileName }}][{{ $label }}][{{ $label2 }}][{{ $label3 }}][{{ $label4 }}][{{ $label5 }}]"
																			value="{{ $value5 }}">
																	</div>
																</div>
															@endforeach
														@else
															<div class="col-lg-4 mb-5">
																<div class="form-group">
																	<label
																		class="form-label">{{ $fileName }}.{{ $label }}.{{ $label2 }}.{{ $label3 }}.{{ $label4 }}</label>
																	<input type="text" class="form-control form-control-solid"
																		name="message[{{ $fileName }}][{{ $label }}][{{ $label2 }}][{{ $label3 }}][{{ $label4 }}]"
																		value="{{ $value4 }}">
																</div>
															</div>
														@endif
													@endforeach
												@else
													<div class="col-lg-4 mb-5">
														<div class="form-group">
															<label
																class="form-label">{{ $fileName }}.{{ $label }}.{{ $label2 }}.{{ $label3 }}</label>
															<input type="text" class="form-control form-control-solid"
																name="message[{{ $fileName }}][{{ $label }}][{{ $label2 }}][{{ $label3 }}]"
																value="{{ $value3 }}">
														</div>
													</div>
												@endif
											@endforeach
										@else
											<div class="col-lg-4 mb-5">
												<div class="form-group">
													<label class="form-label">{{ $fileName }}.{{ $label }}.{{ $label2 }}</label>
													<input type="text" class="form-control form-control-solid"
														name="message[{{ $fileName }}][{{ $label }}][{{ $label2 }}]"
														value="{{ $value2 }}">
												</div>
											</div>
										@endif
									@endforeach
								@else
									<div class="col-lg-4 mb-5">
										<div class="form-group">
											<label class="form-label">{{ $fileName }}.{{ $label }}</label>
											<input type="text" class="form-control form-control-solid"
												name="message[{{ $fileName }}][{{ $label }}]" value="{{ $value }}">
										</div>
									</div>
								@endif
							@endforeach
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
