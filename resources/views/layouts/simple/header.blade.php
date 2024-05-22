<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>

        <!-- Simple demo-->
        <div class="header-logo-wrapper col-auto p-0">
            @if ($data->role == 1)
                @if ($data->user_status == 1 || $data->user_status == 4)
                    <button type="submit" class="btn btn-pill btn-air btn-outline-primary"
                        onclick="window.location.href='{{ route('add-relations') }}'"><i
                            class="icofont icofont-ui-add"></i>&nbsp;&nbsp;Add Relation</button>
                @elseif($data->user_status == 2)
                    <button type="submit" class="btn btn-pill btn-air btn-outline-primary" accesskey="o" onclick="modalCall()"><i
                            class="icofont icofont-ui-add"></i>&nbsp;&nbsp;Add New Relation</button>
                @endif
            @elseif($data->role == 2)
                <button type="submit" class="btn btn-pill btn-air btn-outline-primary" 
                    onclick="window.location.href='{{ route('find-relation') }}'"><i
                        class="icofont icofont-search-alt-1"></i></i>&nbsp;&nbsp;Find Relation</button>
            @endif
           
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>

        {{-- <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div class="notification-slider">
        <div class="d-flex h-100"> <img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light">Out new
              update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
        </div>
        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1"
            href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
        </div>
      </div>
    </div> --}}
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">

                {{-- <li class="language-nav">
          <div class="translate_wrapper">
            <div class="current_lang">
              <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN </span></div>
            </div>
            <div class="more_lang">
              <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                  class="lang-txt">English<span> (US)</span></span></div>
              <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                  class="lang-txt">Deutsch</span></div>
              <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                  class="lang-txt">Español</span></div>
              <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                  class="lang-txt">Français</span></div>
              <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                  class="lang-txt">Português<span> (BR)</span></span></div>
              <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span>
              </div>
              <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية
                  <span> (ae)</span></span></div>
            </div>
          </div>
        </li>
        <li> <span class="header-search">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
            </svg></span></li>
        <li class="onhover-dropdown">
          <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#star') }}"></use>
          </svg>
          <div class="onhover-show-div bookmark-flip">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="front">
                  <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                  <ul class="bookmark-dropdown">
                    <li>
                      <div class="row">
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                          </div>
                        </div>
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                          </div>
                        </div>
                        <div class="col-4 text-center">
                          <div class="bookmark-content">
                            <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New
                        Bookmark</a></li>
                  </ul>
                </div>
                <div class="back">
                  <ul>
                    <li>
                      <div class="bookmark-dropdown flip-back-content">
                        <input type="text" placeholder="search...">
                      </div>
                    </li>
                    <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="mode">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
            </svg>
          </div>
        </li>
        <li class="cart-nav onhover-dropdown">
          <div class="cart-box">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
            </svg><span class="badge rounded-pill badge-success">2</span>
          </div>
          <div class="cart-dropdown onhover-show-div">
            <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
            <ul>
              <li>
                <div class="media"><img class="img-fluid b-r-5 me-3 img-60"
                    src="{{ asset('assets/images/other-images/cart-img.jpg') }}" alt="">
                  <div class="media-body"><span>Furniture Chair for Home</span>
                    <div class="qty-box">
                      <div class="input-group"><span class="input-group-prepend">
                          <button class="btn quantity-left-minus" type="button" data-type="minus"
                            data-field="">-</button></span>
                        <input class="form-control input-number" type="text" name="quantity" value="1"><span
                          class="input-group-prepend">
                          <button class="btn quantity-right-plus" type="button" data-type="plus"
                            data-field="">+</button></span>
                      </div>
                    </div>
                    <h6 class="font-primary">$500</h6>
                  </div>
                  <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                </div>
              </li>
              <li>
                <div class="media"><img class="img-fluid b-r-5 me-3 img-60"
                    src="{{ asset('assets/images/other-images/cart-img.jpg') }}" alt="">
                  <div class="media-body"><span>Furniture Chair for Home</span>
                    <div class="qty-box">
                      <div class="input-group"><span class="input-group-prepend">
                          <button class="btn quantity-left-minus" type="button" data-type="minus"
                            data-field="">-</button></span>
                        <input class="form-control input-number" type="text" name="quantity" value="1"><span
                          class="input-group-prepend">
                          <button class="btn quantity-right-plus" type="button" data-type="plus"
                            data-field="">+</button></span>
                      </div>
                    </div>
                    <h6 class="font-primary">$500.00</h6>
                  </div>
                  <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                </div>
              </li>
              <li class="total">
                <h6 class="mb-0">Order Total : <span class="f-right">$1000.00</span></h6>
              </li>
              <li class="text-center"><a class="d-block mb-3 view-cart f-w-700" href="{{ route('cart')}}">Go to your
                  cart</a><a class="btn btn-primary view-checkout" href="{{ route('checkout')}}">Checkout</a></li>
            </ul>
          </div>
        </li>
        <li class="onhover-dropdown">
          <div class="notification-box">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
            </svg><span class="badge rounded-pill badge-secondary">4 </span>
          </div>
          <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Notitications</h6>
            <ul>
              <li class="b-l-primary border-4">
                <p>Delivery processing <span class="font-danger">10 min.</span></p>
              </li>
              <li class="b-l-success border-4">
                <p>Order Complete<span class="font-success">1 hr</span></p>
              </li>
              <li class="b-l-secondary border-4">
                <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
              </li>
              <li class="b-l-warning border-4">
                <p>Delivery Complete<span class="font-warning">6 hr</span></p>
              </li>
              <li><a class="f-w-700" href="#">Check all</a></li>
            </ul>
          </div>
        </li> --}}

                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media"><img class="b-r-10"
                            src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
                        <div class="media-body"><span>
                                @php
                                    use App\Models\User;
                                    if (session()->has('admin')) {
                                        $data = User::find(session()->get('admin')['id']);
                                        if ($data->fname == '' && $data->lname == '') {
                                            echo 'New Admin';
                                        } else {
                                            echo $data->fname . ' ';
                                            echo $data->lname;
                                            // echo $data->id;
                                        }
                                    } elseif (session()->has('user')) {
                                        $data = User::find(session()->get('user')['id']);
                                        if ($data->fname == '' && $data->lname == '') {
                                            echo 'New User';
                                        } else {
                                            echo $data->fname . ' ';
                                            echo $data->lname;
                                        }
                                    } else {
                                        echo 'Guest';
                                    }
                                @endphp

                            </span>
                            <p class="mb-0 font-roboto">
                                @if (session()->has('admin'))
                                    {{ 'ADMIN' }}
                                @elseif (session()->has('user'))
                                    {{ 'User ' }}
                                @else
                                    {{ 'Guest' }}
                                @endif
                                <i class="middle fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                        <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                        <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                        <li><a href="{{ route('logout') }}"><i data-feather="log-in" accesskey="l"> </i><span>Log OUT</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">                        
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      {{-- <div class="ProfileCard-realName">{{name}}</div> --}}
      </div>
      </div>
    </script>
        <script class="empty-template" type="text/x-handlebars-template">
      <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
    </script>
    </div>
</div>
{{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
  data-bs-target="#exampleModal">Simple</button> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Relation</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form mehtod="get" action="{{ route('add-modal-relation') }}">
                    @csrf
                    <label for="">Enter Full Name</label>
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="hidden" class="form-control" id="us_fn1" placeholder="First Name"
                            name="us_id" value="{{ $data->id }}" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <input type="text" class="form-control" id="us_fn1" placeholder="First Name"
                            name="modal_fname" value="" aria-label="Username" aria-describedby="basic-addon1">
                        <input type="text" class="form-control" id="us_ln1" placeholder="Last Name"
                            name="modal_lname" value="" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label class="form-check-label" for="inlineRadio1">Mobile Number &nbsp;&nbsp;&nbsp;</label>
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                        <input type="number" class="form-control" id="num" placeholder="Mobile Number"
                            name="num" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="">Select Relation</label>
                    <select class="form-control digits" id="exampleFormControlSelect9" name="modal_relation">
                        <option value="" hidden>Select Relation</option>
                        <option value="0">Father</option>
                        <option value="1">Mother</option>
                        <option value="2">Brother</option>
                        <option value="3">Sister</option>
                        <option value="4">Husband</option>
                        <option value="5">Wife</option>
                        <option value="6">Son</option>
                        <option value="7">Daughter</option>
                    </select>
                    <br>
                    <div class="row g-2">
                        {{-- <div class="col-md-6">
              <label class="d-block" for="edo-ani">Gender</label>
              <input class="radio_animated" id="edo-ani" type="radio" value="1" name="gender" checked>Male
              &nbsp;&nbsp;&nbsp;
              <input class="radio_animated" id="edo-ani" type="radio" value="2" name="gender">Female
            </div> --}}
                        <div class="col-md-6">
                            <label class="d-block" for="edo-ani">Maritial Status</label>
                            <input class="radio_animated" id="edo-ani" type="radio" value="1"
                                name="mar_status" checked>Un-married
                            &nbsp;&nbsp;&nbsp;
                            <input class="radio_animated" id="edo-ani" type="radio" value="2"
                                name="mar_status">Married
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" type="submit" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" accesskey="s">Add Relation</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
  function modalCall() {
      $('#exampleModal').modal('show');
  }
</script>