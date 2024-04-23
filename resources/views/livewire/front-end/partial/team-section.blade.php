<section class="pb-120">
  @foreach($teams as $team)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="section-header text-center">
            <span class="section-sub-title"> {{$team->subtitle}}</span>
            <h2 class="section-title style--two">{{$team->title}}</h2>
            <p>{{$team->description}}</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30 justify-content-center">
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="team-card">
            <div class="team-card__thumb">
              <img src="{{ asset('storage/'. $team->team_image_1)}}" alt="image">
              <div class="obj"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
            </div>
            <div class="team-card__content">
              <h3 class="name">{{$team->team_name_1}}</h3>
              <span class="designation">{{$team->team_designation_1}}</span>
            </div>
          </div><!-- team-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="team-card">
            <div class="team-card__thumb">
              <img src="{{ asset('storage/'. $team->team_image_2)}}" alt="image">
              <div class="obj"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
            </div>
            <div class="team-card__content">
              <h3 class="name">{{$team->team_name_2}}</h3>
              <span class="designation">{{$team->team_designation_2}}</span>
            </div>
          </div><!-- team-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="team-card">
            <div class="team-card__thumb">
              <img src="{{ asset('storage/'. $team->team_image_3)}}" alt="image">
              <div class="obj"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
            </div>
            <div class="team-card__content">
              <h3 class="name">{{$team->team_name_3}}</h3>
              <span class="designation">{{$team->team_designation_3}}</span>
            </div>
          </div><!-- team-card end -->
        </div>
      </div>
    </div>

    @endforeach
  </section>