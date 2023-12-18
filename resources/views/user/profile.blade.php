<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FootFits</title>

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    @livewireStyles
</head>

<body style="margin-top: 100px;">

    <div class="p-4">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="py-4">
                    <livewire:profile.update-profile-information-form />
                </div>
                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 py-4 sm:mt-0">
                    <livewire:profile.update-password-form />
                </div>

                <x-section-border />
            @endif

      
        </div>
    </div>

    @livewireScripts
</body>

</html>