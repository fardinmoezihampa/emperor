<!doctype html>
<html lang="en">
<head>
    @include('layouts.admin.links')
    <title>@yield('title') | پنل مدیریت</title>
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ont-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="لاراول لرن" class="letters-loading" style="color:#ff2d20;">
                        لاراول لرن
                     </span>
            </div>
        </div>

        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ecaps-page-wrapper">
    <!-- Sidebar -->
    <livewire:admin.layout.sidebar/>
    <div class="ecaps-page-content">
        <!-- Header -->
        <livewire:admin.layout.header/>
        <!-- Content -->
        <div class="main-content">
            @include('livewire.admin.layout.head')
            {{$slot}}
        </div>
    </div>
</div>

@include('layouts.admin.scripts')

</body>
</html>
