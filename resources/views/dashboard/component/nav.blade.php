<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <li class="toggle">
                    <span class="fa fa-bars"></span>
                </li>

            </ul>
        </div>
    </div>
</nav>
<nav id="main-nav">
    <ul>
        <li>
            <a href="{{route('admin.index')}}">
                {{__("Home")}}
            </a>
        </li>
        <li>
            <a>
                {{__("Users")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.user.create')}}">
                        {{__("New user")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.user.index')}}">
                        {{__("User list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a>
                {{__("Product")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.product.create')}}">
                        {{__("New product")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.product.index')}}">
                        {{__("Product list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a>
                {{__("Invoices")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.invoice.create')}}">
                        {{__("New invoice")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.invoice.index')}}">
                        {{__("Invoice list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a>
                {{__("Posts")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.post.create')}}">
                        {{__("New post")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.post.index')}}">
                        {{__("Post list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a>
                {{__("Categories")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.category.create')}}">
                        {{__("New category")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.category.index')}}">
                        {{__("Category list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a>
                {{__("Customer")}}
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.customer.create')}}">
                        {{__("New customer")}}
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.customer.index')}}">
                        {{__("Customer list")}}
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
