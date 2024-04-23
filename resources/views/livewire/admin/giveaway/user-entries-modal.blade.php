<div wire:model="showUserEntriesModal">

    <div wire:ignore.self class="modal fade" id="userEntriesModal" tabindex="-1" aria-labelledby="userEntriesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userEntriesModalLabel">User Entries</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display grouped user entries -->
                    @foreach($groupedEntries as $userProduct => $entries)
                        <p>{{ $userProduct }}: {{ count($entries) }} entries</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
