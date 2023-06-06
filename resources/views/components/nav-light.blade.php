

<nav id="navbar" class="navbar navbar-expand-lg bg-white p-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand titolino px-3" href="/">HYPERFOCUS</a> <!-- da schiacciare titolo!-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarSupportedContent">
        <div>
          <ul class="navbar-nav me-auto pb-2 ">
            <li class="nav-item px-3">
              <a id="link" class="nav-link colorino @if(Route::is('work')) colorino-selected @endif" aria-current="page" href="{{route('work')}}">WORK</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link colorino @if(Route::is('about')) colorino-selected @endif" href="{{route('about')}}">ABOUT</a>
            </li>
            <li class="nav-item px-3 ">
              <a class="nav-link colorino @if(Route::is('journal')) colorino-selected @endif" href="{{route('journal')}}">JOURNAL</a>
            </li>
            
            <li class="nav-item px-3">
              <a class="nav-link colorino @if(Route::is('contact')) colorino-selected @endif" href="{{route('contact')}}">CONTACT</a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </nav>