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
                <a href="{{ route('admin.users.index') }}" >
                    <i class="la la-users"></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.pages.index') }}" >
                    <i class="la la-sticky-note"></i>
                    <span class="nav-text">Pages</span>
                </a>
            </li>


<!--            <li>
                <a href="{{ route('admin.transactions.index') }}" >
                    <i class="la la-exchange-alt"></i>
                    <span class="nav-text">Transactions</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.reviews.index') }}" >
                    <i class="la la-recycle"></i>
                    <span class="nav-text">Points</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.tickets.index') }}" >
                    <i class="las la-envelope"></i>
                    <span class="nav-text">Tickets</span>
                </a>
            </li>


            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="la la-stopwatch"></i>
                    <span class="nav-text">Pending Actions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.pending.users') }}">Registrations</a></li>
                    <li><a href="{{ route('admin.pending.tickets') }}">Open Tickets</a></li>
                </ul>
            </li>-->

            <li>
                <a href="{{ route('admin.settings.index') }}" >
                    <i class="la la-cog"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>

        </ul>

        <div class="copyright">
            <p><strong>Jumppeak Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Jumppeak Team</p>
        </div>
    </div>
</div>
