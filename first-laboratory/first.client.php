<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Лабораторна робота №1</title>

    <style>
      .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 750px;
        height: 500px;
        background: #fff;
        border-radius: 6px;
        padding: 20px;
        box-sizing: border-box;
      }
      .recipient {
        width: 100%;
        padding-bottom: 5px;
        border-bottom: 1px solid #c2c2c2;
      }
      .labelEmail {
        text-align: center;
      }
      .gmail {
        width: 90%;
        height: 20px;
        border: none;
        font-size: 16px;
      }
      .message {
        width: 100%;
        height: 350px;
        margin: 10px 0;
        border: none;
        resize: none;
      }
      .send-btn {
        width: 200px;
        height: 40px;
        cursor: pointer;
      }
    </style>
</head>
<body>
    <?php
      echo "<div class='wrapper'>
        <form action='first.server.php' method='post'>
          <div class='recipient'>
            <label for='email' class='labelEmail'>Recipient:</label>
            <input class='gmail' id='email' name='email' type='email' required />
          </div>
          <textarea class='message' id='message' name='message' required></textarea>
          <button class='send-btn' type='submit'>Send message</button>
        </form>
      </div>";
    ?>
</body>
</html>