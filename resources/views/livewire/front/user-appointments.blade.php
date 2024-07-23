<div class="content-profile">
    <div class="content-inner content-inner-panding">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="d-flex justify-content-between">
            <h1 class="primary m-2">Appointments</h1>
            {{-- <div class="notification">
                <i class="bi bi-bell"></i>
                <span class="badge">3</span>
            </div> --}}
        </div>

        <div class="appointments-container mt-5">
            <div class="date-filter">
                <span>Today - {{ \Carbon\Carbon::today()->format('d F, Y') }}</span>
                {{-- <select class="text-primary" wire:model="filter">
                    <option value="upcoming">Upcoming</option>
                    <option value="past">Past</option>
                </select> --}}
            </div>
            <table class="appointments-table table mt-5">
                <thead>
                    <tr>
                        <th>Service Category</th>
                        <th>Subcategory</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td class="category" data-label="Service Category">
                            <img src="{{ asset('storage/' . $appointment->service->serviceCategory->icon_image) }}" alt="" class="img-radius image-spacing">
                            {{ $appointment->service->serviceCategory->name }}
                        </td>
                        <td data-label="Subcategory">
                            {{ $appointment->service->serviceCategory->parent ? $appointment->service->serviceCategory->parent->name : '-' }}
                        </td>
                        <td data-label="Date">{{ \Carbon\Carbon::parse($appointment->date)->format('d F, Y') }}</td>
                        <td data-label="Time">{{ \Carbon\Carbon::parse($appointment->time)->format('g:i a') }}</td>
                        <td data-label="Price">${{ number_format($appointment->service->amount, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
