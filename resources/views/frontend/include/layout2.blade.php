<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style2.css') }}">
</head>

<body>
    @include('frontend.include.header2')

    <div class="container my-5">
        @yield('content')
    </div>

    @include('frontend.include.footer2')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the success alert exists
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                // Set a timeout to remove the alert after 2 seconds
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>

    <script src="{{ asset('assets/frontend/js/custom2.js') }}"></script>


</body>

</html>
