<html>
  <head>
    <title>Feedback Loop</title>
    <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
    <div id="app">
      <feedback-dashboard></feedback-dashboard>
    </div>
    <script src="/js/app.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
  </body>
</html>
