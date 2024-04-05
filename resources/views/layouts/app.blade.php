<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AI</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css">
</head>
<body lang="en">
  @yield('content')

  <script>
    let alert = document.querySelector('.alert');
    if (alert) {
      setTimeout(() => {
        alert.style.display = 'none';
      }, 5000);
    }
  </script>
</body>
</html>