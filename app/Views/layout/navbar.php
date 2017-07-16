<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills float-right">
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/' || uri() == '/task') echo 'active';?>" href="/task">Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/about') echo 'active';?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (uri() == '/link') echo 'active';?>" href="/link">Link</a>
            </li>
        </ul>
    </nav>
    <h3 class="text-muted">Demo</h3>
</div>
