<nav style="background:#222; padding:10px;">
    <a href="{{ route('admin.dashboard') }}" style="color:white; margin-right:10px;">
        Dashboard
    </a>

    <a href="{{ route('admin.categories.index') }}" style="color:white; margin-right:10px;">
        Categories
    </a>

    <a href="{{ route('admin.banners.index') }}" style="color:white; margin-right:10px;">
        Banners
    </a>

    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button style="background:red;color:white;">Logout</button>
    </form>
</nav>
