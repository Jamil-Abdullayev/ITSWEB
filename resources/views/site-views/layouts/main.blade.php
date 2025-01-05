<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ITsWeb Agency</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"/>
    <link rel="shortcut icon" href="{{asset('app-assets/images/logo/itsweb-logo.png')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/icons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('site-assets/assets/css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css"/>


</head>
<body>

@include('site-views.includes.header')
@yield('content')
@include('site-views.includes.footer')

<script src="{{asset('site-assets/assets/js/jquery-3.7.0.js')}}"></script>
<script src="{{asset('site-assets/assets/js/jquery-migrate-3.4.1.js')}}"></script>
<script src="{{asset('site-assets/assets/js/slick.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/scrollreveal.js')}}"></script>
<script src="{{asset('site-assets/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/countUp.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/phosphor-icons.js')}}"></script>
<script src="{{asset('site-assets/assets/js/main.min.js')}}"></script>
<script src="{{asset('site-assets/assets/js/custom.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.flag-icon').on('click', function() {
            var language = $(this).data('language');
            $.ajax({
                url: '/change-language', // Замените на ваш маршрут в Laravel
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Добавление CSRF токена для безопасности
                    language: language
                },
                success: function(response) {
                    // Перезагрузка страницы после успешного обновления сессии
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error: ' + error);
                }
            });
        });
    });
</script>
</body>
</html>
