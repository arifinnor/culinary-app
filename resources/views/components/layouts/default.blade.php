<!doctype html>
<html lang="en">

@include('components.layouts.partials.head')

<body>
    <div class="page">
        @include('components.layouts.partials.sidebar')

        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                {{ $title ?? "Dashboard"}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            @include('components.layouts.partials.footer')
        </div>
    </div>

    @include('components.layouts.partials.scripts')


</body>

</html>
