<div id="rev_slider_149_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="snowaddon1"
	data-source="gallery" style="background-color:#2d3032;padding:0px;">
	<div id="rev_slider_149_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
		<ul> <!-- SLIDE  -->
			@foreach ($sliders as $slider)
				<li data-index="rs-{{ $loop->index + 1 }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
					data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000"
					data-thumb="{{ asset('storage/' . $slider->image) }}" data-rotate="0" data-fstransition="fade"
					data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="{{ $slider->title }}"
					data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
					data-param8="" data-param9="" data-param10="" data-description="{{ $slider->description }}">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('storage/' . $slider->image) }}" alt="" data-bgposition="center center"
						data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100"
						data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6"
						class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<div id="rrzm_{{ $loop->index + 1 }}" class="rev_row_zone rev_row_zone_middle" style="z-index: 6;">

						<!-- LAYER NR. 1 -->
						<div class="tp-caption" id="slide-{{ $loop->index + 1 }}-layer-14" data-x="['left','left','left','left']"
							data-hoffset="['100','100','100','100']" data-y="['middle','middle','middle','middle']"
							data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="row"
							data-columnbreak="2" data-basealign="slide" data-responsive_offset="on" data-responsive="off"
							data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
							data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
							data-paddingright="[100,50,50,50]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[100,50,50,50]"
							style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
							<!-- LAYER NR. 2 -->
							<div class="tp-caption" id="slide-{{ $loop->index + 1 }}-layer-15" data-x="['left','left','left','left']"
								data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']"
								data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
								data-type="column" data-responsive_offset="on" data-responsive="off"
								data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-columnwidth="100%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
								data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
								style="z-index: 7; width: 100%;">
								<!-- LAYER NR. 3 -->
								<div class="tp-caption tp-resizeme" id="slide-{{ $loop->index + 1 }}-layer-1"
									data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['top','top','top','top']" data-voffset="['0','0','230','110']"
									data-fontsize="['110','90','100','70']" data-lineheight="['100','90','100','70']"
									data-width="['none','none','697','399']" data-height="none"
									data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-basealign="slide"
									data-responsive_offset="on"
									data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":750,"frame":"0","from":"y:40px;sX:1.5;sY:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"frame":"999","to":"sX:1;sY:1;opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
									data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,20,30,30]"
									data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','center','center']"
									data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,40,40]" data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,40,40]"
									style="z-index: 8; white-space: nowrap; font-size: 110px; line-height: 100px; font-weight: 600;
                                color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;letter-spacing:-5px;">
									{{ $slider->title }} </div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption tp-resizeme" id="slide-{{ $loop->index + 1 }}-layer-2"
									data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
									data-y="['top','top','top','top']" data-voffset="['0','430','460','290']"
									data-fontsize="['30','30','40','25']" data-lineheight="['40','40','50','30']"
									data-width="['none','100%','100%','100%']" data-height="none" data-whitespace="normal" data-type="text"
									data-basealign="slide" data-responsive_offset="on"
									data-frames='[{"delay":"+890","split":"chars","splitdelay":0.03,"speed":300,"frame":"0","from":"sX:2;sY:2;opacity:0;fb:5px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:10px;","ease":"Power4.easeOut"}]'
									data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
									data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','center','center']"
									data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 9; white-space: normal; font-size: 30px; line-height: 40px; font-weight: 300;
                                color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;">
									{!! \Illuminate\Support\Str::words(strip_tags($slider->description), 10, '...') !!}</div>
							</div>
						</div>
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption tp-shape tp-shapewrapper" id="slide-{{ $loop->index + 1 }}-layer-16"
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
						data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
						data-height="full" data-whitespace="normal" data-type="shape" data-basealign="slide"
						data-responsive_offset="off" data-responsive="off"
						data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},
                                {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
						style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);"> </div>
				</li>
			@endforeach
		</ul>

		<div class="tp-bannertimer" style="height: 10px; background-color: rgba(255, 255, 255, 0.25);"></div>
	</div>
</div>
