<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

@include('partials.header')

<div class="container-fluid">
    <div class="row">
        @include('partials.menu')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                @yield('content')
            </div>
        </main>
    </div>
</div>

@include('partials.footer')