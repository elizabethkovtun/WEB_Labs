<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
  <form>
    <p class="title">IP Lookup</p>
    <input type="text" name="ip" id="ip" pattern="^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$" onkeydown="handleChange(event);">
    <input type="submit" value="IP Lookup" onclick="(event) => event.preventDefault();">
  </form>
  <div id="result"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="ip.js"></script>
</body>

</html>