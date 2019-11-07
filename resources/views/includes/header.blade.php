<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}">Kull Jet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse top">
            <ul class="navbar-nav">
                <li class="nav-item {{ setActiveLink('home') }}">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ setActiveLink('about') }}">
                    <a href="{{ route('about')  }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item {{ setActiveLink('charters') }}">
                    <a href="{{ route('charters')  }}" class="nav-link">Private Jet Charters</a>
                </li>
                <li class="nav-item {{ setActiveLink('contacts') }}">
                    <a href="{{ route('contacts')  }}" class="nav-link">Contacts</a>
                </li>
            </ul>
            <ul class="navbar-nav social ml-auto">
                <li class="nav-item phone">
                    <a href="tel:+380504696939" class="btn btn-info btn-raised btn-round" data-toggle="dropdown">
                        <i class="material-icons pr-1">phone</i>
                        +38 050 469 69 39
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
