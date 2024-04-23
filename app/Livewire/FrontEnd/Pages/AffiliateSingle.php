<?php

namespace App\Livewire\FrontEnd\Pages;

use App\Models\Affiliate;
use App\Models\AffiliatePartner;
use App\Models\HowItWork;
use App\Models\Partner;
use App\Models\TopAffiliate;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class AffiliateSingle extends Component
{
    public function render()
    {
        $affiliates = Affiliate::all();
        $howItWorks = HowItWork::all();
        $affiliatePartners = AffiliatePartner::all();
        $topAffiliates = TopAffiliate::all();
        $partners = Partner::all();
        return view('livewire.front-end.pages.affiliate-single', ['affiliates' => $affiliates,
    'howItWorks'=> $howItWorks, 
    'affiliatePartners' =>$affiliatePartners
       , 'topAffiliates' => $topAffiliates
    , 'partners' => $partners]);
    }
}
