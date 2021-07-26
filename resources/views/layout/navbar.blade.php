<nav class="navbar navbar-expand-md bg-dark navbar-dark">
   <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}">Laravel CURD operation</a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Select / Show Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/insert') }}">Insert Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/delete') }}">Delete Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/update') }}">Update Data</a>
        </li>
      </ul>
    </div>
</div>
  </nav>