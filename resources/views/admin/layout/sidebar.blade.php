<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.dashboard.index') }}" >
                    <i class="la la-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.products.index') }}" >
                    <i class="las la-shopping-cart"></i>
                    <span class="nav-text">Products</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.orders.index') }}" >
                    <i class="la la-money-bill"></i>
                    <span class="nav-text">Orders</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.categories.index') }}" >
                    <i class="las la-list-alt"></i>
                    <span class="nav-text">Categories</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}" >
                    <i class="la la-users"></i>
                    <span class="nav-text">Admins</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.branches.index') }}" >
                    <i class="las la-map-marked"></i>
                    <span class="nav-text">Branches</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.settings.index') }}" >
                    <i class="la la-cog"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Nasty Vape Store</strong> © {{date('Y') }} All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Nasty Team</p>
        </div>
    </div>
</div>
