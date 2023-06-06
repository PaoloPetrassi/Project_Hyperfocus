

<nav id="navbar" class="navbar navbar-expand-lg bg-custom p-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand titolino  text-white px-3" href="/">HYPERFOCUS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarSupportedContent">
        <div>
          <ul class="navbar-nav me-auto pb-2 ">
            <li class="nav-item px-3">
              <a class="nav-link colorino2 @if(Route::is('work')) colorino-selected2 @endif" aria-current="page" href="{{route('work')}}">WORK</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link colorino2 @if(Route::is('about')) colorino-selected2 @endif" href="{{route('about')}}">ABOUT</a>
            </li>
            <li class="nav-item px-3 ">
              <a class="nav-link colorino2  @if(Route::is('journal')) colorino-selected2 @endif" href="{{route('journal')}}">JOURNAL</a>
            </li>
            
            <li class="nav-item px-3">
              <a class="nav-link colorino2  @if(Route::is('contact')) colorino-selected2 @endif" href="{{route('contact')}}">CONTACT</a>
              
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </nav>