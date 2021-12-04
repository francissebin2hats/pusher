<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('5c67a5f4a803f57f87c6', {
        cluster: 'ap2'
      });
  
      var channel = pusher.subscribe('channel-name');
      channel.bind('user-notification', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
</head>
<body>
    <h1>Pusher Test</h1>
    <p>
      Try publishing an event to channel <code>my-channel</code>
      with event name <code>my-event</code>.
    </p>
</body>
</html>