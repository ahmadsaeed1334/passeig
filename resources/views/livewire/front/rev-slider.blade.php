<div id="rev_slider_149_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="snowaddon1" data-source="gallery" style="background-color:#2d3032;padding:0px;">
    <div id="rev_slider_149_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
        <ul>
            @foreach($sliders as $slider)
            <li data-index="rs-{{ $loop->index + 1 }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000" data-thumb="{{ asset('storage/' . $slider->image) }}" data-rotate="0" data-saveperformance="off" data-title="{{ $slider->title }}" data-description="{{ $slider->description }}">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6" class="rev-slidebg" data-no-retina>

                <!-- LAYERS -->
                <div class="tp-caption tp-resizeme" id="slide-{{ $loop->index + 1 }}-layer-1" data-x="center" data-hoffset="0" data-y="middle" data-voffset="-50" data-fontsize="['110','90','100','70']" data-lineheight="['100','90','100','70']" data-width="['auto','auto','auto','auto']" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":750,"frame":"0","from":"y:40px;sX:1.5;sY:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},
                {"delay":"wait","speed":1000,"frame":"999","to":"sX:1;sY:1;opacity:0;fb:10px;","ease":"Power4.easeOut"}]' style="z-index: 8; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;letter-spacing:-5px; text-align: center;">
                    {{ $slider->title }}
                </div>

                <div class="tp-caption tp-resizeme" id="slide-{{ $loop->index + 1 }}-layer-2" data-x="center" data-hoffset="0" data-y="middle" data-voffset="30" data-fontsize="['30','30','40','25']" data-lineheight="['40','40','50','30']" data-width="['auto','100%','100%','100%']" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":"+890","split":"chars","splitdelay":0.03,"speed":300,"frame":"0","from":"sX:2;sY:2;opacity:0;fb:5px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},
                {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"}]' style="z-index: 9; white-space: nowrap; font-size: 30px; line-height: 40px; font-weight: 300; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins; text-align: center;">
                    {{-- {{ $slider->description }} --}}
                    {!! \Illuminate\Support\Str::words(strip_tags($slider->description), 10, '...') !!}
                </div>
            </li>
            @endforeach
        </ul>

        <div class="tp-bannertimer" style="height: 10px; background-color: rgba(255, 255, 255, 0.25);"></div>
    </div>
</div>
