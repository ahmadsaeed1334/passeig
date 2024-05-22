<div>
    @include("binshopsblog::partials.index_loop")
    @if($categories)
    @include("binshopsblog::partials._category_partial", [
'category_tree' => $categories,
'name_chain' => $nameChain = "",
'routeWithoutLocale' => $routeWithoutLocale
])
@else
    <span>No Categories</span>
@endif
@if (config('binshopsblog.search.search_enabled') )
@include('binshopsblog::sitewide.search_form')
@endif
</div>
