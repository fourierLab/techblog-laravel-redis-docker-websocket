<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Docker Laravel Websocket</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
      <div>
        <form action="{{ route('messages.store') }}" method="POST" >
          @csrf
          <input type="text" name="message" value="">
          <button type="submit">送信</button>
        </form>
      </div>
    </body>
    <script>
      window.addEventListener('load', (event) => {
        window.Echo.channel('message-event').listen('MessageEvent', (e) => {
          console.log(e)
        })
      });
    </script>
</html>
