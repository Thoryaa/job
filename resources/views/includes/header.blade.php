 <div class="navbar navbar-expand-md  navbar-light text-black bg-nav fw-bold">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <p>J<span style="color:#f4931e">O</span>B</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item px-3"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item px-3"><a href="{{ route('job') }}" class="nav-link"> Jobs</a></li>
                    <li class="nav-item px-3"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                    <li class="nav-item px-3"><a href="{{ route('comp') }}" class="nav-link">Companies</a></li>
                    <li class="nav-item px-3"><a href="{{ route('acount') }}" class="nav-link">Acounts</a></li>
                    <a href="{{ route('sign') }}" class="btn" style="border: 1px solid #f4931e;">Sign up</a>
                    <a href="{{ route('log') }}" class="btn " style=" background:#f4931e;border: 1px solid #f4931e;">Log
                        in</a>

                    <li class="nav-item px-3"><a href="" class="nav-link">عربي</a></li>
                </ul>
            </div>
        </div>
    </div>