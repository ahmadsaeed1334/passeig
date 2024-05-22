<div wire:ignore.self class="modal fade" id="assignAddModal" tabindex="-1" aria-labelledby="assignAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignAddModalLabel">Assign Coins To User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="walletAssignUser" >
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="wallet" class="form-label required mt-2">Wallet</label>
                        <select wire:model="walletType" class="form-control">
                            <option value="">-- Select Wallet --</option>
                            <option value="business">Business</option>
                            <option value="personal">Personal</option>
                        </select>
                        @error('walletType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="user" class="form-label required mt-2">User</label>
                        <select wire:model="assignedUserId" class="form-control">
                            <option value="">-- Select User --</option>
                            @foreach($userss as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('assignedUserId') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="amount" class="form-label required mt-2">Amount</label>
                        <input wire:model="amount" type="number" class="form-control" id="amount">
                        @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="notes" class="form-label required mt-2">Note</label>
                        <input wire:model="notes" type="text" class="form-control" id="notes">
                        @error('notes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                    <button class="btn btn-primary" wire:click= "walletAssignUser">Submit</button>
                </div>
            </form>
       
    </div>
</div>
</div>
<div wire:ignore.self class="modal fade" id="deductAddModal" tabindex="-1" aria-labelledby="deductAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deductAddModalLabel">Deduct Amount To User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="walletDeductUser" >
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="wallet" class="form-label required mt-2">User</label>
                            <select wire:model="selectedUserId" id="selectedUserId" class="form-control">
                                <option value="">--Select a user--</option>
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        @error('walletType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="walletType" class="form-label required mt-2">Wallet Type</label>
                        <select wire:model="walletType" class="form-control">
                            <option value="">-- Select Wallet Type --</option>
                            <option value="business">Business Wallet</option>
                            <option value="personal">Personal Wallet</option>
                        </select>
                        @error('walletType') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="amount" class="form-label required mt-2">Amount</label>
                        <input wire:model="amount" type="number" class="form-control" id="amount">
                        @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="notes" class="form-label required mt-2">Note</label>
                        <input wire:model="notes" type="text" class="form-control" id="notes">
                        @error('notes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                    <button class="btn btn-primary" wire:click="walletDeductUser">Submit</button>
                </div>
            </form>
       
    </div>
</div>
</div>