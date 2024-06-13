@props(["jsSlot"=>null,"cssSlot"=>null])


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>eics admin panal</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset("admin/css/plugin.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("admin/style.css") }}" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("img/favicon/favicon.svg") }}" />

      @if ($cssSlot)
      {!! $cssSlot !!}
      @endif

  </head>

  <body class="layout-dark side-menu">

    {{  $slot }}

    <x-admin.loader/>


    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="{{ asset("admin/js/plugins.min.js") }}"></script>
    <script src="{{ asset("admin/js/script.min.js") }}"></script>
      @if ($jsSlot)
      {!! $jsSlot !!}
      @endif
  </body>
</html>