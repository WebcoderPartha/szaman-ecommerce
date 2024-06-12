
<li class="dashboard_permission">
    <a href="{{ route('backend.dashboard') }}" title="Dashboard" data-filter-tags="blank page">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.blankpage">Dashboard </span>
    </a>
</li>

<li class="dashboard_permission">
    <a href="{{ route('backend.category.index') }}" title="Category" data-filter-tags="blank page">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.blankpage">Category </span>
    </a>
</li>
<li class="dashboard_permission">
    <a href="{{ route('backend.subcategory.index') }}" title="Brand" data-filter-tags="blank page">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.blankpage">Subcategory </span>
    </a>
</li>

<li class="dashboard_permission">
    <a href="{{ route('backend.brand.index') }}" title="Brand" data-filter-tags="blank page">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.blankpage">Brand </span>
    </a>
</li>
<li class="dashboard_permission">
    <a href="{{ route('backend.attribute.index') }}" title="Brand" data-filter-tags="blank page">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.blankpage">Attribute </span>
    </a>
</li>

<li class="employee_permission">
    <a title="Product"  data-filter-tags="application intel" class=" waves-effect waves-themed" aria-expanded="false">
        <i class="fal fa-info-circle"></i>
        <span class="nav-link-text" data-i18n="nav.application_intel">Product</span>
    </a>
    <ul style="display: none;" >
        <li>
            <a href="{{ route('backend.product.create') }}" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard" class=" waves-effect waves-themed">
                <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Add Product</span>
            </a>
        </li>
        <li>
            <a href="{{ route('backend.product.index') }}" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard" class=" waves-effect waves-themed">
                <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Product List</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="{{ route('backend.admin.logout') }}" title="Logout" id="logoutButton">
        <i class="fal fa-sign-out"></i>
        <span class="nav-link-text">Logout</span>
    </a>
</li>
<!-- Example of open and active states -->


