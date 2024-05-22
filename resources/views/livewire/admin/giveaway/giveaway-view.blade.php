<div class="card-body scroll-x pt-0">
    @forelse ($contestTops as $contestTop)

    <div class="row">
        {{-- @include('livewire.admin.partial.view-style') --}}
        <div class="col-md-10 d-flex justify-content-between align-items-center mt-10">
            <div>
                <h3><b>Subtitle:</b></h3> {{ $contestTop->subtitle }}
            </div>
            <div>
                <h3><b>Title:</b></h3> {{ $contestTop->title }}
            </div>
            <div>
                <h3><b>Description:</b></h3>
                {{ Str::limit($contestTop->description, 49) }}
                @if (strlen($contestTop->description) > 49)
                {{-- Show additional content or take other actions here --}}
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-10 col-md-2 ">
            <button wire:click="editContestTops({{ $contestTop->id }})" class="btn btn-icon  btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#contestTopEditModal" {!! show_toltip('Update Contest Top') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
        </div>
    </div>
    @empty
    <div>Handle case when no Contest are found </div>
    @endforelse
    <!--begin::Table-->
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_Users_table">
        <!--begin::Table head-->
        <thead>
            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                <th class="min-w-10px">S#</th>
                <th class="min-w-10px">File</th>
                <th class="min-w-10px">Short Description</th>
                <th class="min-w-10px">Description</th>
                <th class="min-w-10px">Categories</th>
                <th class="min-w-10px">Start Date</th>
                <th class="min-w-10px">Due Date</th>
                <th class="min-w-10px">Actual Price</th>
                <th class="min-w-10px">Status</th>
                <th class="min-w-100px text-end">Actions</th>
            </tr>
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-semibold">
            {{-- @if ($giveaways) --}}
            @forelse ($giveaways as $giveaway)
            <tr>
                <td class="fw-bolder">
                    {{$loop->index + 1 }}
                </td>
                <td class="">
                    @php
                    // Get the file extension
                    $extension = strtolower(pathinfo($giveaway->file_path, PATHINFO_EXTENSION));
                    @endphp
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50 overlay symbol-50px me-3">
                            @if(in_array($extension, ['jpeg', 'png', 'jpg', 'gif']))
                            <!-- Display Image as Avatar -->
                            <img src="{{ asset('storage/' . $giveaway->file_path) }}" alt="Giveaway Image" style="width: 50px; height: 50px; border-radius: 50%;">
                            @elseif(in_array($extension, ['mp4', 'mov', 'ogg', 'qt']))
                            <!-- Display Video Thumbnail or Icon -->
                            <img src="path/to/default-video-icon.png" alt="Giveaway Video" style="width: 50px; height: 50px; border-radius: 50%;">
                            @else
                            <!-- Display a default icon for unknown file types -->
                            <img src="path/to/default-file-icon.png" alt="Unsupported File" style="width: 50px; height: 50px; border-radius: 50%;">
                            @endif
                        </div>
                        <div class="d-flex flex-column">
                            <span data-bs-toggle="modal" data-bs-target="#userProfileModel" class="text-dark font-weight-bolder text-hover-{{ primary_color() }} fs-2 fw-bold pointer mb-1" {!! show_toltip('View Details') !!}>
                                {{ Str::title($giveaway->name ) }}
                            </span>
                            <span class="text-muted font-weight-bold d-block"> {{ $giveaway->fee }}</span>
                        </div>
                    </div>
                </td>



                <td class=" fw-bolder">
                    {{ substr($giveaway->short_description, 0, 20) }}{{ strlen($giveaway->short_description) > 20 ? '...' : '' }}
                </td>
                <td class=" fw-bolder">
                    {{ substr($giveaway->long_description, 0, 20) }}{{ strlen($giveaway->long_description) > 20 ? '...' : '' }}
                </td>
                <td class=" fw-bolder">
                    @foreach ($giveaway->categories as $category)
                    {{ $category->name }}
                    @endforeach
                </td>
                <td class=" fw-bolder">
                    {{ custom_date_format( $giveaway->start_date) }}
                </td>
                <td class=" fw-bolder">
                    {{custom_date_format( $giveaway->due_date) }}
                </td>
                <td class=" fw-bolder">
                    {{ $giveaway->actual_price }}
                </td>
                {{-- <td class=" fw-bolder">
                    {{ $giveaway->start_date }}
                </td> --}}
                <td class=" fw-bolder">
                    <span class="d-flex position-relative pointer">
                        @php
                        $statusClass = ($giveaway->status === 'active') ? 'bg-success' : 'bg-danger';
                        @endphp
                        <span class="d-inline-block fs-2 fw-bold text-dark mb-2">
                            {{ ucfirst($giveaway->status) }}
                        </span>
                        <span>

                            <!-- Status Line -->
                            <span class="d-inline-block position-absolute h-8px end-0 start-0 translate bottom-0 rounded {{ $statusClass }}"></span>
                        </span>
                    </span>
                </td>
                <!--begin::Action=-->
                <td class="text-center">
                    @can('super staff edit')
                    <button wire:click="edit('{{ $giveaway->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#editGiveawayModal" {!! show_toltip('Update Giveaway') !!}>
                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                    </button>
                    <button wire:click="entryGiveaway('{{ $giveaway->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#entryGiveawayModal" {!! show_toltip('Entries Giveaway') !!}>
                        <span class="svg-icon svg-icon-md svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                    <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    @endcan

                    <br>

                    <button wire:click="viewUserEntrys('{{ $giveaway->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mt-2" data-bs-toggle="modal" data-bs-target="#viewUserEntry" data-bs-placement="top" title="View User Entries {{ Str::singular($page_title ?? 'Giveaway') }}">
                        <span class="svg-icon svg-icon-md svg-icon-danger">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Map/Direction2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14,13.381038 L14,3.47213595
                                     L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 
                                     C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 
                                     14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 
                                     23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 
                                     22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 
                                     4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" fill="currentColor" fill-rule="nonzero"
                                     transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>


                    <!--end::Update-->
                    <!--bedin::Delete-->
                    @can('super staff delete')
                    <a wire:click.prevent="destroyGiveaway('{{ $giveaway->id }}')" {!! confirm() !!} href="#" class=" btn btn-sm btn-icon btn-active-light-danger w-30px h-30px me-2 mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular($page_title ?? 'Giveaway') }}">
                        <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>

                    </a>
                    @endcan
                    <!--end::Delete-->

                </td>
                <!--end::Action=-->
            </tr>

            {{-- @endforeach --}}
            {{-- @endif --}}
            @empty
            {!! no_data() !!}
            @endforelse
            {{-- {{ $giveaways->links('livewire.pagination-link') }} --}}
          

        </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
    {{ $giveaways->links() }}
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('giveawayEntered', function() {
                $('#entryGiveawayModal').modal('hide'); // Close the modal
            });
        });
    </script>

    {{-- {{ $giveaways->links() }} --}}
</div>