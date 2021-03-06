@extends('viewer.layouts.master')
@section('master.viewer.title', 'chi tiết')
@section('master.viewer.body', 'viewer-posts-show')
@section('master.viewer.content')
<div class="col-md-12 col-lg-8 main-content" id="show-post-id" uri_category="{{ $post['data']['attributes']['uri_category'] }}">
  <h1 class="mb-4">{{ $post['data']['attributes']['title'] }}</h1>
  <div class="post-meta">
    <span class="category">{{ $post['data']['attributes']['type_category'] }}</span>
    <span class="mr-2">{{ \Carbon\Carbon::parse($post['data']['attributes']['created_at'])->format('d/m/Y') }} </span>
    <span class="ml-2"><span class="fa fa-eye"></span> {{ $post['data']['attributes']['count_view'] }}</span>
  </div>
  <div class="post-content-body">
    {!! $post['data']['attributes']['content'] !!}
  </div>
  <div class="pt-5">
    Tags:
    @forelse($post['data']['attributes']['tag'] as $tag)
    <a href="{{ route('viewer.tags.index', $tag['uri_tag']) }}">#{{$tag['tag']}} </a>
    @empty
    <p>Không có tag</p>
    @endforelse
  </div>
</div>
@endsection
@section('master.viewer.relationship')
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-3 ">Related Post</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme post-detail-slider">
          @foreach($relationPost['data'] as $item)
          <a href="{{ route('viewer.posts.show', ['uri_category' => $item['attributes']['uri_category'], 'uri_post' => $item['attributes']['uri_post']]) }}" class="a-block d-flex align-items-center" style="background-image: url('{{ $item['attributes']['avatar_post'] }}'); ">
            <div class="text">
              <div class="post-meta">
                <span class="category">{{ $item['attributes']['type_category'] }}</span>
                <span class="ml-2"><span class="fa fa-eye"></span> {{ $item['attributes']['count_view'] }}</span>
              </div>
              <h5 class="show-title">{{ $item['attributes']['title'] }}</h5>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
