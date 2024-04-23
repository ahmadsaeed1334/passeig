<!-- Modal for Edit Giveaway Form -->
<div wire:ignore.self class="modal fade" id="viewUserEntry" tabindex="-1" aria-labelledby="viewUserEntryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewUserEntryLabel">View User Entries</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- @if(count($registeredUsers) > 0) --}}
            @if($registeredUserss && count($registeredUserss) > 0)
    <table>
      <thead>
        <tr>
          <th>User Name</th>
          <th>Entry Count</th>
        </tr>
      </thead>
      <tbody>
        @foreach($registeredUserss as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->entry_count }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No entries found for this giveaway.</p>
  @endif
</div>  
         </div>
        
            <!-- You can add footer content if needed -->
        </div>
    </div>

</div>