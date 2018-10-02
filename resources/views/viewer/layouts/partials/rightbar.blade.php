<div class="col-md-12 col-lg-4 sidebar">
  <div class="sidebar-box search-form-wrap">
    <form action="#" class="search-form">
      <div class="form-group">
        <span class="icon fa fa-search"></span>
        <input type="text" class="form-control" id="s" placeholder="Nhập từ khóa và enter">
      </div>
    </form>
  </div>

  <div class="sidebar-box">
    <div class="bio text-center">
      <img src="/images/avatar.jpg" alt="Image Placeholder" class="img-fluid">
      <div class="bio-body">
        <h2>Tran Truong Quy</h2>
        <p>
          Website chia sẻ kinh nghiệm du lịch Đà Nẵng Giới thiệu tổng quan thành phố Đà Nẵng,
          các địa điểm du lịch nổi tiếng, chia sẻ kinh nghiệm du lịch phượt tự túc, địa điểm ăn uống ngon-rẻ,
          ẩm thực địa phương, văn hóa bản địa, các khu vui chơi đặc sắc …v…v…
        </p>
        <p class="social">
          <a href="https://www.facebook.com/QuyLovePhuong" class="p-2"><span class="fa fa-facebook"></span></a>
          <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
          <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
        </p>
      </div>
    </div>
  </div>

  <div class="sidebar-box">
    <h3 class="heading"><i class="fa fa-fire"></i> Địa Điểm Thú Vị</h3>
    <div class="post-entry-sidebar">
      <ul>
        @foreach($data['composerTravels']['data'] as $item)
        <li>
          <a href="">
            <img src="{{ env('APP_URL_API') . \Storage::url($item['avatar_post']) }}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>{{ $item['title'] }}</h4>
              <div class="post-meta">
                <span class="mr-2">{{ Carbon\Carbon::parse($item['created_at']['date'])->format('d/m/Y') }}</span>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>


  <div class="sidebar-box">
    <h3 class="heading"><i class="fa fa-fire"></i> Ẩm Thực Travel</h3>
    <div class="post-entry-sidebar">
      <ul>
        @foreach($data['composerFoods']['data'] as $item)
        <li>
          <a href="">
            <img src="{{ env('APP_URL_API') . \Storage::url($item['avatar_post']) }}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>{{ $item['title'] }}</h4>
              <div class="post-meta">
                <span class="mr-2">{{ Carbon\Carbon::parse($item['created_at']['date'])->format('d/m/Y') }}</span>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="sidebar-box">
    <h3 class="heading"><i class="fa fa-fire"></i> Sự kiện nổi bật</h3>
    <div class="post-entry-sidebar">
      <ul>
        @foreach($data['composerEvents']['data'] as $item)
        <li>
          <a href="">
            <img src="{{ env('APP_URL_API') . \Storage::url($item['avatar_post']) }}" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>{{ $item['title'] }}</h4>
              <div class="post-meta">
                <span class="mr-2">{{ Carbon\Carbon::parse($item['created_at']['date'])->format('d/m/Y') }}</span>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>


  <div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">
      @foreach($data['composerTags']['data'] as $item)
        <li><a href="#">{{ $item['tag'] }}</a></li>
      @endforeach
    </ul>
  </div>
</div>
