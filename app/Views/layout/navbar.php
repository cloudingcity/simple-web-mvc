<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills float-right">
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/' || uri() == '/tasks') echo 'active';?>" href="/tasks">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/completed') echo 'active';?>" href="/completed">Completed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/about') echo 'active';?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/link') echo 'active';?>" href="/link">Link</a>
            </li>
        </ul>
    </nav>
    <h3 class="text-muted">Simple Web MVC</h3>
</div>
