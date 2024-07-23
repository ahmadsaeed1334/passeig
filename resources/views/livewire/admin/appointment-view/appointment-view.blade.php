<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <x-slot name="page_title">
        {{ $page_title ?? 'Appointment' }}
    </x-slot>
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Appointment' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Appointment'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $appointments->total() }}
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative me-5 my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6 text-{{ primary_color() }}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input wire:model.live="search" type="text" data-kt-Users-table-filter="search" class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic" placeholder="Search {{ Str::singular($page_title ?? ' Services') }} by user name or service name" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>End Time</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->user->name }}</td>
                                    <td>{{ $appointment->service->service_name }}</td>
                                    {{-- <td>{{ $appointment->date }}</td> --}}
                                    <td>{{ \Carbon\Carbon::parse($appointment->date )->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->end_time)->format('h:i A') }}</td>
                                    <td>${{ $appointment->service->amount }}</td>
                                    <td>
                                        @if ($appointment->status == 'pending')
                                        <span wire:click.prevent="changeStatus('{{ $appointment->id }}', 'completed')" class="d-flex position-relative pointer" {!! show_toltip('Change Status') !!}>
                                            <span class="d-inline-block fs-2 fw-bold text-white mb-2">Pending</span>
                                            <span class="d-inline-block position-absolute h-8px end-0 start-0 bg-warning translate bottom-0 rounded"></span>
                                        </span>
                                        @elseif ($appointment->status == 'completed')
                                        <span wire:click.prevent="changeStatus('{{ $appointment->id }}', 'cancelled')" class="d-flex position-relative pointer" {!! show_toltip('Change Status') !!}>
                                            <span class="d-inline-block fs-2 fw-bold text-white mb-2">Completed</span>
                                            <span class="d-inline-block position-absolute h-8px end-0 start-0 bg-success translate bottom-0 rounded"></span>
                                        </span>
                                        @else
                                        <span wire:click.prevent="changeStatus('{{ $appointment->id }}', 'pending')" class="d-flex position-relative pointer" {!! show_toltip('Change Status') !!}>
                                            <span class="d-inline-block fs-2 fw-bold text-white mb-2">Cancelled</span>
                                            <span class="d-inline-block position-absolute h-8px end-0 start-0 bg-danger translate bottom-0 rounded"></span>
                                        </span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $appointments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
