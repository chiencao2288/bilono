<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{!! $title !!}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" type="text/css">

    <script src="{{ asset('assets/js/axios.js') }}"></script>
    <script src="{{ asset('assets/js/vue.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script type="text/javascript">
        var url = '{{ url("/") }}';

        @if (session()->has('flash_notification'))
            let flash_notification = @json(session()->get('flash_notification'))
        @else
            let flash_notification = false;
        @endif

        {{ session()->forget('flash_notification') }}
    </script>

    @stack('link_stylesheet')
    @stack('link_javascript')

    {!! $stylesheet !!}
    {!! $javascript !!}
</head>
