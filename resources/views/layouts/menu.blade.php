 <!-- MENU BAR -->
 <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              Kelompok 7
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a href={{ url('/') }} class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/news') }} class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/about') }} class="nav-link">Abouts</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('product') }} class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('program') }} class="nav-link">Program</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/contact') }} class="nav-link contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>