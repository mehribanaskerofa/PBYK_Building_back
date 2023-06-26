<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
<li class="nav-item nav-item-submenu">
    <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
        <li class="nav-item">
            <a href="{{route('admin.benefit.index')}}" class="nav-link">
                <span>Benefit </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.finish.index')}}" class="nav-link">
                <span> Finish</span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.gallery.index')}}" class="nav-link">
                <span>Gallery </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.grand.index')}}" class="nav-link">
                <span>Grand </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.infrastructure.index')}}" class="nav-link">
                <span>Infrastructure </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.menu.index')}}" class="nav-link">
                <span>Menu </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.page.index')}}" class="nav-link">
                <span>Page </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.rare.index')}}" class="nav-link">
                <span>Rare format </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.team.index')}}" class="nav-link">
                <span>Team </span></a>
        </li>
        <li class="nav-item ">
            <a href="{{route('admin.static.index')}}" class="nav-link">
                <span>Static </span></a>
        </li>

    </ul>
</li>

<li class="nav-item nav-item-submenu">
    <a href="#" class="nav-link"><i class="icon-cabinet"></i> <span>Projects</span></a>

    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
        <li class="nav-item">
            <a href="{{route('admin.company.index')}}" class="nav-link">
                <span>Company </span></a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.project.index')}}" class="nav-link">
                <span>Buildings </span></a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.block.index')}}" class="nav-link">
                <span>Block </span></a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.house.index',$projectId=0)}}" class="nav-link">
                <span>Houses </span></a>
        </li>
    </ul>
</li>
<li class="nav-item ">
    <a href="{{route('admin.contact.index')}}" class="nav-link"><i class="icon-phone-hang-up"></i> <span>Contact</span></a>
</li>
<li class="nav-item ">
    <a href="{{route('clear-cache')}}" class="nav-link"><i class="icon-clear-formatting"></i> <span>Clear cache</span></a>
</li>
