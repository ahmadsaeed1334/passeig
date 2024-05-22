<!-- Modal for Edit Giveaway Form -->
<div wire:ignore.self class="modal fade" id="entryGiveawayModal" tabindex="-1" aria-labelledby="entryGiveawayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="entryGiveawayModalLabel">Enter Giveaway ({{ $giveawayId }})</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- <p>Product details for giveaway ID {{ $giveawayId }} will be displayed here.</p> --}}
            <p>Giveaway Details:</p>
            <ul>
                @if($selectedGiveaway)
                {{-- <li><strong>File:</strong> {{ $giveawayFile }}</li> --}}
                <li><strong>Name:</strong> {{ $selectedGiveaway->name }}</li>
                <li><strong>Fee:</strong> {{ $selectedGiveaway->fee }}</li>
                <li><strong>Actual Price:</strong> {{ $selectedGiveaway->actual_price }}</li>
                @else

                <li>Giveaway not found.</li>
            
              @endif
            </ul>
            {{-- <div class="form-group">
                <label for="userSelection">Select your option:</label>
                <select wire:model="userSelection" id="userSelection" class="form-control">
                    <option value="">-- Select a user --</option>
                    @foreach($registeredUsers as $userId => $userName)
                        <option value="{{ $userId }}">{{ $userName }}</option>
                    @endforeach
                </select>
            </div>
            --}}
            <div class="form-group">
                <label for="userSelection">Select your option:</label>
                <select wire:model="userSelection" id="userSelection" class="form-control select2">
                    <option value="">-- Select a user --</option>
                    @foreach($registeredUsers as $userId => $userName)
                        <option value="{{ $userId }}">{{ $userName }}</option>
                    @endforeach
                </select>
            </div>
  
</div>
         
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="discardChanges">Close</button>
            <button type="button" class="btn btn-primary" wire:click="submitEntry">Submit Entry</button>
        </div>
            <!-- You can add footer content if needed -->
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "-- Search for a user --",
                allowClear: true // Optional: Add a clear button
            });
        });
    </script>
</div>