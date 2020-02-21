<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset('dashboard_asset/assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">

                    <a class="image" href="profile.html"><img src="{{ asset('dashboard_asset/assets/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Orders</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Total Order</a></li>
                    <li><a href="chat.html">New Order</a></li>
                    <li><a href="events.html">Pending</a></li>
                    <li><a href="contact.html">Follow Up</a></li>
                    <li><a href="contact.html">Confirmed</a></li>
                    <li><a href="contact.html">Canceled</a></li>
                    <li><a href="contact.html">Cash On Delivery</a></li>
                    <li><a href="contact.html">Advance Payment</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Products</span></a>
                <ul class="ml-menu">
                    <li><a href="#">All Products</a></li> {{-- {{ route('product_list') }} --}}
                <li><a href="{{ route('add_product') }}">Add Products</a></li>
                </ul>
            </li>

            <li><a href="my-profile.html"><i class="zmdi zmdi-account"></i><span>Report</span></a></li>

            <li><a href="my-profile.html"><i class="zmdi zmdi-account"></i><span>Track Order</span></a></li>

        </ul>
    </div>
</aside>
