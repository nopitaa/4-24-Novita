<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="/">Novita</a>
=======
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="/">Novita </a>
>>>>>>> e722aa0 (Porofolio Laravel)
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : ''}}"aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link {{ ($title === 'Gallery') ? 'active' : ''}}" href="/gallery">Gallery</a>
=======
            <a class="nav-link {{ ($title === 'Gallery') ? 'active' : ''}}" href="/gallery">My Projects</a>
>>>>>>> e722aa0 (Porofolio Laravel)
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === 'Contacts') ? 'active' : ''}}" href="{{ route ('contact.create')}}">Contacts Us</a>
        </li>
        </ul>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
    </ul>

    </div>
    </div>
</nav>