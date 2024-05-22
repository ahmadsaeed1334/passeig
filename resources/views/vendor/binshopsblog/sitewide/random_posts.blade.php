<h5>Random Posts</h5>
<x-slot name="page_title">
    {{ $page_title ?? 'User' }}
  </x-slot>
<ul class="nav">
    @foreach(\BinshopsBlog\Models\BinshopsPost::inRandomOrder()->limit(5)->get() as $post)
        <li class="nav-item">
            <a class='nav-link' href='{{$post->url()}}'>{{$post->title}}</a>
        </li>
    @endforeach
</ul>