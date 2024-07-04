<div class="col-xl-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">DropBox Backups</span>
                <span class="text-muted font-weight-bold font-size-sm mt-3">backups are in DropBox
                    Storage
                </span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0 pb-3">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_roles_view_table">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th style="min-width: 10px pe-2"></th>
                            <th style="min-width: 250px" class="pl-7">
                                <span class="text-dark-75">Name</span>
                            </th>
                            <th style="min-width: 110px"></th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($dropBoxFiles as $file)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-rounded symbol-50px me-3 overflow-hidden">
                                        <span>
                                            <div class="symbol-label">
                                                <img src="{{ name_avatar(\File::name($file)) }}" alt="{{ $file }}"
                                                    class="w-100 h-100" />
                                            </div>
                                        </span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <span wire:click.prevent="downloadDropBox('{{ $file }}')"
                                            class="text-hover-{{ primary_color() }} pointer text-gray-800">{{ \File::basename($file) }}</span>
                                        <span class="text-muted">
                                            @php
                                            $date = \Storage::disk('dropbox')->lastModified($file);
                                            // dd(custom_date_format(date(DATE_RFC2822, $date)));
                                            @endphp
                                            {{ custom_date_format(date(DATE_RFC2822, $date)) . ' : ' . number_format(\Storage::disk('dropbox')->size($file) / 1048576, 2) . 'MB' }}
                                        </span>
                                        <span class="text-muted">
                                            {{ diff_for_humans_long(date(DATE_RFC2822, $date)) }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            @if (auth()->user()->user_type == -1)
                            <td class="pr-0 text-right">
                                <a wire:click.prevent="downloadDropBox('{{ $file }}')" href="javacript:;"
                                    class="btn btn-icon btn-light btn-hover-{{ primary_color() }} btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-primary">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\Cloud-download('{{ $file }}').svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M5.74714567,13.0425758 C4.09410362,11.9740356 3,10.1147886 3,8 C3,4.6862915 5.6862915,2 9,2 C11.7957591,2 14.1449096,3.91215918 14.8109738,6.5 L17.25,6.5 C19.3210678,6.5 21,8.17893219 21,10.25 C21,12.3210678 19.3210678,14 17.25,14 L8.25,14 C7.28817895,14 6.41093178,13.6378962 5.74714567,13.0425758 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M11.1288761,15.7336977 L11.1288761,17.6901712 L9.12120481,17.6901712 C8.84506244,17.6901712 8.62120481,17.9140288 8.62120481,18.1901712 L8.62120481,19.2134699 C8.62120481,19.4896123 8.84506244,19.7134699 9.12120481,19.7134699 L11.1288761,19.7134699 L11.1288761,21.6699434 C11.1288761,21.9460858 11.3527337,22.1699434 11.6288761,22.1699434 C11.7471877,22.1699434 11.8616664,22.1279896 11.951961,22.0515402 L15.4576222,19.0834174 C15.6683723,18.9049825 15.6945689,18.5894857 15.5161341,18.3787356 C15.4982803,18.3576485 15.4787093,18.3380775 15.4576222,18.3202237 L11.951961,15.3521009 C11.7412109,15.173666 11.4257142,15.1998627 11.2472793,15.4106128 C11.1708299,15.5009075 11.1288761,15.6153861 11.1288761,15.7336977 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(11.959697, 18.661508) rotate(-270.000000) translate(-11.959697, -18.661508) " />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                                <a wire:click.prevent="deleteDropBox('{{ $file }}')" href="javacript:;"
                                    class="btn btn-icon btn-light btn-hover-{{ primary_color() }} btn-sm">
                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        {{-- @if ($dropBoxFiles->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">No files found</td>
                        </tr>
                        @endif --}}
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
