<div>
    <!-- Deposit Modal -->
    <div wire:ignore.self class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="account-form-area">
                        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                        <h3 class="title">Deposit Request</h3>
                        <p>{{ $description }}</p>
                        <p>Account Number: {{ $account_details['account_number'] }}</p>
                        <p>Account Name: {{ $account_details['account_name'] }}</p>
                        <p>Methods: {{ implode(', ', $account_details['methods']) }}</p>
                        <div class="account-form-wrapper">
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" wire:model="amount" id="amount" class="form-control" required>
                                    @error('amount') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" wire:model="file" id="file" class="form-control" required>
                                    @error('file') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea wire:model="comment" id="comment" class="form-control"></textarea>
                                    @error('comment') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            @if (session()->has('message'))
                                <div class="alert alert-success mt-4">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('closeModal', () => {
                var myModalEl = document.getElementById('depositModal')
                var modal = bootstrap.Modal.getInstance(myModalEl)
                modal.hide()
            });
        });
    </script>
</div>
