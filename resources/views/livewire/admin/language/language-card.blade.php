<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header mt-6">
        <!--begin::Card title-->
        <div class="card-title">
        </div>
        <!--end::Card title-->
        {{-- @can('super staff create') --}}
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button type="button" class="btn btn-light-{{ primary_color() }}" data-bs-toggle="modal" data-bs-target="#addLanguageModal">
                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->{{ __('Add') }} {{ Str::singular($page_title) }}
            </button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
        {{-- @endcan --}}
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body scroll-x pt-0">
        <!--begin::Table-->
        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_Users_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                    <th class="min-w-2px">S#</th>
                    <th class="min-w-250px">{{ Str::singular($page_title) }}</th>
                    <th class="min-w-100px text-center">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
                @php
                $COUNT = 1;
                @endphp
                @forelse ($languages as $key=> $lang)
                @if ($lang != 'vendor')
                <tr>
                    <td class="text-{{ primary_color() }}">
                        <span class="text-{{ primary_color() }} font-weight-bolder fs-1 fst-italic fw-bold mb-1">
                            {{ $COUNT++ }}
                        </span>
                    </td>
                    <!--begin::Name=-->
                    <td class="">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-50 symbol-50px me-3 overflow-hidden">
                                <div class="symbol-label" style="background-image: url('{{ getLanguageFlag($lang) }}')">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="text-white font-weight-bolder fs-2 fw-bold mb-1">
                                    {{ Str::upper($lang) }}

                                </span>
                                <span class="text-muted font-weight-bold d-block">{{ getLanguageName($lang) }}
                                    @if ($lang == default_lang())
                                    <span class="ms-5 badge badge-{{ primary_color() }}">Default</span>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </td>
                    <!--end::Name=-->

                    <td class="text-center">
                        {{-- @can('super language edit') --}}
                        <button wire:click="addKeys('{{ $lang }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Add New Translations') !!}>
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <i class="fs-5 fa-solid fa-language"></i>
                            </span>
                        </button>
                        <button wire:click="manageLanguage('{{ $lang }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Translations') !!}>
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                        <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                        {{-- @endcan --}}
                        @if ($lang != 'en' && $lang != default_lang())
                        {{-- @can('super language delete') --}}
                        <!--begin::Update-->
                        <a wire:click.prevent="destroyLang('{{ $lang }}')" {!! confirm() !!} href="#" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular($page_title) }}">
                            <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
                        </a>
                        <!--end::Update-->
                        {{-- @endcan --}}
                        @endif
                    </td>
                    <!--end::Action=-->
                </tr>
                @endif
                @empty
                {!! no_data() !!}
                @endforelse
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->

</div>
