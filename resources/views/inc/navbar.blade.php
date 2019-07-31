<nav class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">TodoList</a>
  <ul class="navbar-nav px-3">
    <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a class="nav-link" href="todo/create">Create</a></li>
  </ul>
</nav>