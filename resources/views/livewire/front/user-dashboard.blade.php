<div class="content-profile">
<x-slot name="page_title">
        {{ $page_title ?? 'Dashboard' }}
    </x-slot>
    <div class="content-inner">
        <span class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi bi-list custom-icon"></i></span>
        </span>
        <div class="dashboard-container">
            <div class="appointments-section">
                <!-- Dashboard Header -->
                <div class="appointments-header">
                    <h1 class="mt-5">Dashboard</h1>
                    {{-- <div class="d-flex justify-content-end mt-5">
                        <div class="notification d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                            <i class="bi bi-bell"></i>
                            <span class="badge">3</span>
                        </div>
                    </div> --}}
                </div>
                <!-- Today's Appointments -->
                <p class="p">Today . {{ \Carbon\Carbon::today()->format('d F, Y') }}</p>
                <div class="appointments-content mt-5">
                    <div class="content-line d-flex justify-content-between">
                        <h5>Today's Appointments</h5>
                        <a href="{{route('user-appointments')}}" class="see-all">See All</a>
                    </div>
                    @foreach($todayAppointments as $appointment)
                    <div class="appointment-item mt-4">
                        <div class="appointment-details">
                            <img src="{{ asset('storage/' . $appointment->service->serviceCategory->icon_image) }}" alt="" class="img-radius" width="40px">
                            <div class="appointment-info">
                                <p>{{ $appointment->service->serviceCategory->name }}</p>
                                <p>{{ \Carbon\Carbon::parse($appointment->time)->format('g:i a') }} {{ $appointment->service->name }}</p>
                            </div>
                        </div>
                        <div class="appointment-price">${{ number_format($appointment->service->amount, 2) }}</div>
                    </div>
                    @endforeach
                </div>
                <!-- Upcoming Appointments -->
                <div class="content-line d-flex justify-content-between mt-3">
                    <h5 class="">Upcoming Appointments</h5>
                    <a href="{{route('user-appointments')}}" class="see-all">See All</a>
                </div>
                <div class="appointments-content upcoming">
                    @foreach($upcomingAppointments as $appointment)
                    <div class="appointment-item">
                        <div class="appointment-details">
                            <img src="{{ asset('storage/' . $appointment->service->serviceCategory->icon_image) }}" alt="" class="img-radius" width="40px">
                            <div class="appointment-info">
                                <p>{{ $appointment->service->serviceCategory->name }}</p>
                                <p>{{ \Carbon\Carbon::parse($appointment->time)->format('g:i a') }} {{ $appointment->service->name }}</p>
                            </div>
                        </div>
                        <div class="appointment-price">${{ number_format($appointment->service->amount, 2) }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Past Appointments Section -->
            <div class="past-appointments-section">
                {{-- <div class="d-flex justify-content-end mt-5">
                    <div class="notification d-none d-lg-block d-xl-block d-xxl-block d-md-none">
                        <i class="bi bi-bell"></i>
                        <span class="badge">3</span>
                    </div>
                </div> --}}
                <div class="mt-4">
                    <h5 class="text-center">Your Past Appointments</h5>
                    <div class="notification-icon"></div>
                    @foreach($pastAppointments as $appointment)
                    <div class="appointment-item content-line">
                        <div class="appointment-details">
                            <div class="appointment-info">
                                <img src="{{ asset('storage/' . $appointment->service->serviceCategory->icon_image) }}" alt="" class="img-radius" width="40px">
                                <h6 class="mt-2">{{ $appointment->service->serviceCategory->name }}</h6>
                                <p>{{ \Carbon\Carbon::parse($appointment->date)->format('d F, Y') }} {{ \Carbon\Carbon::parse($appointment->time)->format('g:i a') }}</p>
                            </div>
                        </div>
                        <div class="appointment-price">${{ number_format($appointment->service->amount, 2) }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
