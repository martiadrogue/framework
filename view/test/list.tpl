<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/normalize.min.css" />
    <title>{$data.title} - Framework MVC</title>
    <style type="text/css">
        .important { color: #336699; }
    </style>
</head>
<body>
  <div id="content">
    <h1>{$data.title}</h1>
    <p class="important">
      Hello {$data.message}, with Smarty!
    </p>
  </div>
  <div id="footer">
      <p>&copy; Copyright 2015 by <a href="mailto://marti.adrogue@gmail.com">martí adrogué</a>.</p>
  </div>
</body>
</html>
