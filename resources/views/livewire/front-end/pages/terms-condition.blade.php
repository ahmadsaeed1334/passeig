<div>
    <x-slot name="page_title">
          {{ $page_title ?? 'Terms & Condition' }}
      </x-slot>
      <style>
        
  button {
    margin: 5px;
    padding: 5px 10px;
    cursor: pointer;
  }
  @media (min-width: 992px) {
    .contact-wrapper {
        padding: 50px 30px 0 30px;
    }
}
</style>
      </style>
     <!-- inner-hero-section start -->
     <div class="inner-hero-section style--six">
      <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="page-list">
              <li><a href="/">Home</a></li>
              <li><a href="#0">Pages</a></li>
              <li class="active">Term & Condition</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- inner-hero-section end -->
  
    <!-- contact section start -->
    <section class="mt-minus-270 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="section-header text-center">
              <h2 class="section-title">Terms & Condition</h2>
              <p>We’d love to talk about how we can work together.Send us a message
                below and we’ll respond as soon as possible.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="contact-wrapper">
              <div class="row">
                <div class="col-md-12 ">
                    
                  {!! $termsConditionContent !!}
                    
                </div>
                
              </div>
            </div>
          </div>
        </div>
       
    </section>
    <!-- contact section end -->
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
      
  {{-- <script>
    tinymce.init({
      selector: '#mytextarea',
      setup: function (editor) {
        editor.on('change', function (e) {
          @this.set('mycontent', editor.getContent());
        });
      }
    });
  </script> --}}
  </div>
  