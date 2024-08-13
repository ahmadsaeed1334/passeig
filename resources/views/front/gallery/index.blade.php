@extends('layouts.app')

@section('content')
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		@include('livewire.admin.partial.preloader')
		<div class="d-flex flex-column flex-column-fluid">
			<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
				<div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
					<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
						<h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
							{{ $page_title ?? 'Gallery Management' }}
						</h1>
						<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
							<div class="breadcrumb-item text-muted">
								{{ __('total') }} {{ 'Images' }}
							</div>
							<div class="breadcrumb-item">
								<span class="bullet w-5px h-2px bg-gray-400"></span>
							</div>
							<div class="breadcrumb-item text-{{ primary_color() }}">
								{{-- {{ $totalImages }} --}}
							</div>
						</ul>
					</div>
				</div>
			</div>
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
					<div class="card">
						<div class="card-header mt-6">
							<div class="card-title">
								<h3 class="card-title">Gallery Management</h3>
							</div>
							<div class="card-toolbar">
								<!-- Add Category Button -->
								<button type="button" class="btn btn-light-success me-3" data-bs-toggle="modal"
									data-bs-target="#modalCreateCategory">
									<span class="svg-icon svg-icon-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
											<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
												transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
											<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
										</svg>
									</span>
									Add New Category
								</button>

								<!-- Add Image Button -->
								<button type="button" class="btn btn-light-{{ primary_color() }}" data-bs-toggle="modal"
									data-bs-target="#modalCreateEdit">
									<span class="svg-icon svg-icon-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
											<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
												transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
											<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
										</svg>
									</span>
									Add New Image
								</button>
							</div>
						</div>
						<div class="card-body" id="gallery-container">
							<div class="row">
								@foreach ($categories as $category)
									<div class="row mb-5 border">
										<div class="col-12 d-flex align-center mb-5 border">
											<h4 class="mt-3">{{ $category->name }}</h4>
											<div class="ms-10">
												<button type="button"
													class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm edit-category mr-3"
													data-id="{{ $category->id }}">
													<i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
												</button>
												<button type="button"
													class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm delete-category mr-3"
													data-id="{{ $category->id }}">
													<i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
												</button>
											</div>

										</div>
										<style>
											.card-img-top {
												transition: all 0.5s ease;
												/* Smooth transition */
												height: 200px;
												/* Initial fixed height */
												object-fit: cover;
												/* Cover the container, possibly cropping the image */
												object-position: center;
												/* Center the image */
												width: 100%;
												/* Ensure the image takes the full width of the card */
												overflow: hidden;
											}

											.card-img-top:hover {
												height: auto;
												/* Show the full image on hover */
												object-fit: contain;
												/* Adjust the image to contain within the height */
												object-position: top;
												/* Align image to the top */
											}
										</style>
										@foreach ($category->images as $image)
											<div class="col-md-3 mb-5" id="image-card-{{ $image->id }}">
												<div class="card">
													<img src="{{ $image->getFirstMediaUrl('gallery') }}" class="card-img-top" alt="{{ $image->title }}">
													<div class="card-body">
														<h5 class="card-title">{{ $image->title }}</h5>
														<button type="button" class="btn btn-primary btn-sm edit" data-id="{{ $image->id }}">Edit</button>
														<button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $image->id }}">Delete</button>
													</div>
												</div>

											</div>
										@endforeach
									</div>
								@endforeach
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Create/Edit Image Modal -->
	<div class="modal fade" id="modalCreateEdit" tabindex="-1" role="dialog" aria-labelledby="modalCreateEditLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCreateEditLabel">Add/Edit Image</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="galleryForm">
					@csrf
					<div class="modal-body">
						<input type="hidden" name="id" id="id">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" name="title" id="title" required>
						</div>
						<div class="form-group">
							<label for="category_id">Category</label>
							<select class="form-control" name="category_id" id="category_id" required>
								@foreach (App\Models\Category::all() as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="image">Image</label>
							<input type="file" class="form-control" name="image" id="image" accept="image/*">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Create Category Modal -->
	<div class="modal fade" id="modalCreateCategory" tabindex="-1" role="dialog"
		aria-labelledby="modalCreateCategoryLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCreateCategoryLabel">Add New Category</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="categoryForm">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label for="category_name">Category Name</label>
							<input type="text" class="form-control" name="name" id="category_name" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script>
		$(document).ready(function() {
			function reloadGallery() {
				$.ajax({
					url: "{{ route('gallery.index') }}",
					type: 'GET',
					success: function(data) {
						// Replace the gallery content with the updated content
						$('#gallery-container').html($(data).find('#gallery-container').html());
					},
					error: function(xhr) {
						toastr.error('Failed to reload gallery.');
					}
				});
			}

			// Handle Image Form Submission (Create/Update)
			$('#galleryForm').submit(function(e) {
				e.preventDefault();
				var formData = new FormData(this);
				var id = $('#id').val();
				var url = id ? "{{ route('gallery.update', '') }}/" + id : "{{ route('gallery.store') }}";

				$.ajax({
					type: 'POST',
					url: url,
					data: formData,
					contentType: false,
					processData: false,
					success: function(data) {
						$('#modalCreateEdit').modal('hide');
						$('#galleryForm')[0].reset();
						reloadGallery(); // Reload the gallery after the form submission
						toastr.success(data.success);
					},
					error: function(xhr) {
						toastr.error(xhr.responseText);
					}
				});
			});

			// Handle Delete Image Button Click
			$('body').on('click', '.delete', function() {
				var id = $(this).data('id');
				if (confirm("Are you sure you want to delete this image?")) {
					$.ajax({
						type: "DELETE",
						url: "{{ route('gallery.delete', '') }}/" + id,
						data: {
							_token: '{{ csrf_token() }}'
						},
						success: function(data) {
							reloadGallery(); // Reload the gallery after the image is deleted
							toastr.success(data.success);
						},
						error: function(xhr) {
							toastr.error(xhr.responseText);
						}
					});
				}
			});

			// Handle Edit Image Button Click
			$('body').on('click', '.edit', function() {
				var id = $(this).data('id');
				$.get("{{ route('gallery.edit', '') }}/" + id, function(data) {
					$('#modalCreateEditLabel').html("Edit Image");
					$('#id').val(data.id);
					$('#title').val(data.title);
					$('#category_id').val(data.category_id);
					$('#modalCreateEdit').modal('show');
				});
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			function reloadGallery() {
				$.ajax({
					url: "{{ route('gallery.index') }}",
					type: 'GET',
					success: function(data) {
						// Replace the gallery content with the updated content
						$('#gallery-container').html($(data).find('#gallery-container').html());
					},
					error: function(xhr) {
						toastr.error('Failed to reload gallery.');
					}
				});
			}

			// Handle Category Form Submission (Create/Update)
			$('#categoryForm').submit(function(e) {
				e.preventDefault();
				var formData = $(this).serialize();
				var id = $('#category_id').val();
				var url = id ? "{{ route('gallery.category.update', '') }}/" + id :
					"{{ route('gallery.category.store') }}";

				$.ajax({
					type: 'POST',
					url: url,
					data: formData,
					success: function(data) {
						$('#modalCreateCategory').modal('hide');
						$('#categoryForm')[0].reset();
						$('#category_id').val(
							''
						); // Clear the category ID to ensure a new category is added next time
						reloadGallery(); // Reload the gallery after the category form submission
						toastr.success(data.success);
					},
					error: function(xhr) {
						toastr.error(xhr.responseText);
					}
				});
			});

			// Handle Edit Category Button Click
			$('body').on('click', '.edit-category', function() {
				var id = $(this).data('id');
				$.get("{{ route('gallery.category.edit', '') }}/" + id, function(data) {
					$('#modalCreateCategoryLabel').html("Edit Category");
					$('#category_id').val(data.id);
					$('#category_name').val(data.name);
					$('#modalCreateCategory').modal('show');
				});
			});

			// Handle Delete Category Button Click
			$('body').on('click', '.delete-category', function() {
				var id = $(this).data('id');
				if (confirm(
						"Are you sure you want to delete this category? This will also delete all related images."
					)) {
					$.ajax({
						type: "DELETE",
						url: "{{ route('gallery.category.delete', '') }}/" + id,
						data: {
							_token: '{{ csrf_token() }}'
						},
						success: function(data) {
							reloadGallery(); // Reload the gallery after the category is deleted
							toastr.success(data.success);
						},
						error: function(xhr) {
							toastr.error(xhr.responseText);
						}
					});
				}
			});
		});
	</script>
@endpush
