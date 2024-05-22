<div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
            <th class="min-w-10px">#SO</th>
            <th class="min-w-10px">User:</th>
            <th class="min-w-10px">Personal Wallet Balance: </th>
            <th class="min-w-10px">Business Wallet Balance: </th>
            {{-- <th class="min-w-10px">Deduct Amount</th> --}}
        </tr>
      </thead>
      <tbody>
        @forelse($users as $user)
                <tr>
                    <td class="text-{{ primary_color() }} fst-italic">
                        {{$loop->index + 1 }}
                    </td>
                    <td class="text-{{ primary_color() }} fst-italic">
                        {{ $user->name }}
                    </td>
                    <td class="text-{{ primary_color() }} fst-italic">
                        ${{ $userBalances[$user->id]['wallet_2'] }}
                    </td>
                    <td class="text-{{ primary_color() }} fst-italic">
                        ${{ $userBalances[$user->id]['wallet_1'] }}                    
                    </td>
                    
                </tr>
                
          @empty
          {!! no_data() !!}
          @endforelse
        
             
      </tbody>
    </table>
    </div>