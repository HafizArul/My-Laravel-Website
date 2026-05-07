<aside class="sidebar">
    <div class="sidebar-sect-1">
        <p class="sidebar-section-category">Menu</p>
        <a href="/" class="sidebar-item {{ request()->is('/') ? 'active-page' : '' }}">Home</a>
        <a href="/about" class="sidebar-item {{ request()->is('about') ? 'active-page' : '' }}">About</a>
        <a href="/blog" class="sidebar-item {{ request()->is('blog') ? 'active-page' : '' }}">My Blog</a>
        <a href="/contact" class="sidebar-item {{ request()->is('contact') ? 'active-page' : '' }}">Contact</a>
    </div>
</aside>
