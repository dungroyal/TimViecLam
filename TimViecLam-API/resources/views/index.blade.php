<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Text</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans">
      <div id="app">
          <div>
            <div v-show="message"></div>
         </div>
        </div>
        <router-view></router-view>
   </div>
    <script src="{{ asset('js/app.js') }}" async defer></script>
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'You loaded this page on ' + new Date().toLocaleString()
        }
      })
    </script>
    </body>
</html>