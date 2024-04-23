<div class="card-body pt-0 mt-0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <style>
        .social-container {
  display: flex;
  flex-flow: column;
  margin: 0 auto;
  padding: 30px;
  text-align: center;
  border-bottom: 1px solid #fff;
}
/* Responsive Css Coding Created By Shift Media Solutions| SMS */
.social-container:last-child {
  border-bottom: 0;
}

.social-container h2 {
  margin-bottom: 30px;
  font-size: 24px;
  font-weight: 700;
}

.social-container .copyright {
  margin-top: 15px;
}

.social-container .copyright a {
  text-decoration: none;
  color: #0059cc;
  transition: 0.25s;
  letter-spacing: 0;
}

.social-container .copyright a:hover {
  color: #004399;
  letter-spacing: 1px;
}

.gradient-style .social-icons {
  list-style: none;
  margin: 0;
  padding: 0;
}

.gradient-style .social-icons li {
  position: relative;
  display: inline-block;
  margin: 10px;
}

.gradient-style .social-icons a {
  display: inline-block;
  position: relative;
}

.gradient-style .social-icons a:before {
  content: " ";
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 100%;
  background: linear-gradient(45deg, #00b5f5, #002a8f);
  transition: all 0.25s ease-out;
}
/* Responsive Css Coding Created By Shift Media Solutions| SMS */
.gradient-style .social-icons a:hover:before {
  transform: scale(0);
  -ms-transform: scale(0);
  -webkit-transform: scale(0);
  transition: all 0.25s ease-in;
}

.gradient-style .social-icons a:hover i {
  color: #00b5f5;
  transform-origin: top left;
  transform: scale(2) translateX(-50%) translateY(-50%);
  -ms-transform: scale(2) translateX(-50%) translateY(-50%);
  -webkit-transform: scale(2) translateX(-50%) translateY(-50%);
  background: -webkit-linear-gradient(45deg, #00b5f5, #002a8f);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 0.25s ease-in;
}

.gradient-style .social-icons a i {
  color: #fff;
  font-size: 20px;
  line-height: normal;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;
  transform-origin: top left;
  transform: scale(1) translateX(-50%) translateY(-50%);
  -ms-transform: scale(1) translateX(-50%) translateY(-50%);
  -webkit-transform: scale(1) translateX(-50%) translateY(-50%);
  transition: all 0.25s ease-out;
}

.
.gradient-style .social-icons a.ic-x:before {
  background: linear-gradient(130deg, #ff0000, #a11013);

}

.gradient-style .social-icons a.ic-x:hover i {
  background: #000000;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.gradient-style .social-icons a.ic-tiktok:before {
  background: #fe2c55;
  background: linear-gradient(130deg, #fe2c55 0%, black 50%, #25f4ee 100%);
}

.gradient-style .social-icons a.ic-tiktok:hover i {
  background: -webkit-linear-gradient(
    130deg,
    #fe2c55 0%,
    black 50%,
    #25f4ee 100%
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.gradient-style .social-icons a.ic-youtube:before {
  background: linear-gradient(130deg, #ff0000, #a11013);
}

.gradient-style .social-icons a.ic-youtube:hover i {
  background: -webkit-linear-gradient(0deg, #ff0000, #a11013);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.gradient-style .social-icons a.ic-instagram:before {
  background: #feda75;
  background: linear-gradient(
    130deg,
    #feda75 0%,
    #fa7e1e 25%,
    #d62976 50%,
    #962fbf 75%,
    #4f5bd5 100%
  );
}
.gradient-style .social-icons a.ic-instagram:hover i {
  background: -webkit-linear-gradient(
    -90deg,
    #feda75 0%,
    #fa7e1e 25%,
    #d62976 50%,
    #962fbf 75%,
    #4f5bd5 100%
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.gradient-style .social-icons a.ic-pinterest-p:before {
  background: #bd081c;
  background: linear-gradient(130deg, #bd081c 0%, #4c4c4c 100%);
}

.gradient-style .social-icons a.ic-pinterest-p:hover i {
  background: -webkit-linear-gradient(130deg, #bd081c 0%, #4c4c4c 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.gradient-style .social-icons li span {
  position: absolute;
  z-index: -1;
  bottom: 50%;
  left: 50%;
  width: 80px;
  padding: 5px;
  color: #fff;
  font-size: 14px;
  border-radius: 5px;
  cursor: text;
  opacity: 0;
  visibility: hidden;
  background: #000;
  transform: translateX(-50%) scale(0.5);
  transition: all 0.35s, opacity 0.35s 0.1s;
}

.gradient-style .social-icons li span:after {
  content: "";
  position: absolute;
  top: calc(100% - 1px);
  left: 50%;
  border: 5px solid transparent;
  border-top-color: #000;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-50%);
  transition: all 0.35s, opacity 0.35s 0.1s;
}

.gradient-style .social-icons li a {
  position: relative;
}

.gradient-style .social-icons li a:hover span {
  opacity: 1;
  visibility: visible;
  bottom: calc(100% + 10px);
  transform: translateX(-50%) scale(1);
}
/* Responsive Css Coding Created By Shift Media Solutions| SMS */
.gradient-style .social-icons li a:hover span:after {
  opacity: 1;
  visibility: visible;
}

* {
  box-sizing: border-box;
}

/* body {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  width: 100%;
  font-family: sans-serif;
  background-image: linear-gradient(
      146deg,
      rgba(44, 35, 109, 0.5) 0%,
      rgba(44, 35, 109, 0.5) 14.286%,
      rgba(64, 54, 108, 0.5) 14.286%,
      rgba(64, 54, 108, 0.5) 28.572%,
      rgba(83, 72, 106, 0.5) 28.572%,
      rgba(83, 72, 106, 0.5) 42.858%,
      rgba(103, 91, 105, 0.5) 42.858%,
      rgba(103, 91, 105, 0.5) 57.144%,
      rgba(123, 110, 103, 0.5) 57.144%,
      rgba(123, 110, 103, 0.5) 71.43%,
      rgba(142, 128, 102, 0.5) 71.43%,
      rgba(142, 128, 102, 0.5) 85.716%,
      rgba(162, 147, 100, 0.5) 85.716%,
      rgba(162, 147, 100, 0.5) 100.002%
    ),
    linear-gradient(
      349deg,
      rgb(203, 4, 7) 0%,
      rgb(203, 4, 7) 14.286%,
      rgb(178, 9, 6) 14.286%,
      rgb(178, 9, 6) 28.572%,
      rgb(152, 13, 5) 28.572%,
      rgb(152, 13, 5) 42.858%,
      rgb(127, 18, 4) 42.858%,
      rgb(127, 18, 4) 57.144%,
      rgb(101, 22, 3) 57.144%,
      rgb(101, 22, 3) 71.43%,
      rgb(76, 27, 2) 71.43%,
      rgb(76, 27, 2) 85.716%,
      rgb(50, 31, 1) 85.716%,
      rgb(50, 31, 1) 100.002%
    );
} */

/* Header Shift Media Solutions| SMS */

.heading-shift {
  margin: 0;
  padding: 10px 0;
  color: #efe1d2;
  font-size: 20px;
  text-align: center;
  background: #ec0003;
  border-bottom: 3px solid #00fbff;
  opacity: 1;
  user-select: none;
}

.heading-shift .highlight {
  color: #c2ced2;
}

.container-shift {
  margin: 40px auto;
  padding: 20px;
  width: 90%;
  text-align: center;
  
}
.footer-shift {
  bottom: 0;
  padding: 10px;
  text-align: center;
  border-top: 3px solid #00fbff;
  background: #000099;
  opacity: 0.9;
  user-select: none;
}

.footer-shift p {
  color: #c2ced2;
  font-size: 16px;
  text-transform: uppercase;
}

.footer-shift a {
  color: #eec87c;
  text-decoration: none;
}

.footer-shift a:hover {
  color: #3cbcfc;
}

/* Media Queries Shift Media Solutions| SMS */

@media only screen and (max-width: 1080px) {
  .body {
    width: 100%;
    overflow: auto;
  }
}

    </style>
        </header>
        <div class="container-shift">
          <!-- Gradient Effect With Tooltips -->
          <div class="social-container gradient-style">
            
            <ul class="social-icons">
                @forelse ($footerIcons as $footerIcon)
                @php
   
               $iconClass = str_replace(['fab fa-', 'fa-solid fa-'], '', $footerIcon->icon_class);
               @endphp

              <li>

                
                <a href="{{ $footerIcon->url }}"
                    class="position-relative d-inline-block ic-{{ $iconClass }}"
                     target="_blank"><i class="{{ $footerIcon->icon_class }}"></i></a>
                    <i class="fa-solid fa-pen-to-square position-absolute text-white "
                    wire:click="edit({{ $footerIcon->id }})"
                    data-bs-toggle="modal" data-bs-target="#footerIconsEditModal" {!! show_toltip('Update Footer Icon') !!}
                         style="font-size: 1.5rem; top: 8px; margin: -14px;"></i>
                         </li>
              @empty
        {!! no_data() !!}
    @endforelse
            </ul>
            <div class="copyright">
                @foreach($footerTexts as $footerText)
                <p>{{ $footerText->text }} <a href="{{ $footerText->link_url }}"><b><strong>{{$footerText->link_text }}</strong></b></a></p>
                <button  wire:click="footerTextEdit({{ $footerText->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#footerTextEditModal" {!! show_toltip('Update Footer Text') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>  
                @endforeach
              </div>
          </div>
          </div>
</div>
