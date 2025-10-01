<!DOCTYPE html>
<html lang="fa">
<head>
    @include('layouts.client.links')
    <title>@yield('title') | دیجی استور</title>
</head>

<body>

    <livewire:client.header.header/>
             {{$slot}}
    <livewire:client.footer.footer/>

    @include('layouts.client.scripts')

</body>

</html>
