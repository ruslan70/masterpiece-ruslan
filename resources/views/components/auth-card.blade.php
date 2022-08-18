<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 body_color">
    <div>
        <img src="{{ asset('img/logo-name.png') }}" class="img-fluid rounded mx-auto d-block m-2"
        alt="Responsive image">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
