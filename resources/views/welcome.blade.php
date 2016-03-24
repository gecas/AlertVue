<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

   
    </head>
    <body>
        <div class="container">
            @if(session()->has('status'))
               <alert important type="success" timeout="1000">{{ session('status') }}</alert>
            @endif
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>
