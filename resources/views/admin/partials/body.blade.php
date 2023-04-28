<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
@include('admin.partials.body.header_mobile')

<div class="d-flex flex-column flex-root">

    <div class="d-flex flex-row flex-column-fluid page">

        @include('admin.partials.body.sidebar_menu')

        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

            @include('admin.partials.body.body_sub_header')

            <div class="d-flex flex-column-fluid">

               @yield('content')

            </div>

        </div>

    </div>

</div>
