<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="">
          <span>
            Ürün İnceleme ve Değerlendirme Sistemi
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Ana Sayfa <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="user_option">

                @if (Route::has('login'))
                    @auth

                        <a href="{{url('favorilerim')}}">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            [{{$count}}]
                        </a>

                        <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Çıkış">
                        </form>
                    @else

                <a href="{{url('/login')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                Giriş!
              </span>
                </a>

                <a href="{{url('/register')}}">
                    <i class="fa fa-vcard" aria-hidden="true"></i>
                    <span>
                Kayıt Ol!
              </span>
                </a>

                    @endauth

                @endif

            </div>
        </div>
    </nav>
</header>
