<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You - Anugrah Homes</title>

  <!-- Google Ads Conversion Tracking -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11098365219"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-11098365219');
    gtag('event', 'conversion', {'send_to': 'AW-11098365219/jonnCNTJ45QYEKO6jqwp'});
  </script>

  <style>
    body {
      font-family: 'Arial', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
      color: #333;
    }
    .thank-container {
      padding-top: 12%;
    }
    h1 {
      color: #2c3e50;
      font-size: 2.2rem;
    }
    p, #timer {
      font-size: 1.1rem;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="thank-container">
    <h1>Thank You!<br>For Your Interest.</h1>
    <p>Your submission has been received.</p>
    <span id="timer"></span>
  </div>

  <script>
    let count = 5;
    const redirect = "https://www.anugrahhomes.com";
    const timer = document.getElementById("timer");

    function countDown() {
      if (count > 0) {
        timer.innerHTML = "This page will redirect in " + count + " seconds.";
        count--;
        setTimeout(countDown, 1000);
      } else {
        window.location.href = redirect;
      }
    }

    countDown();
  </script>
</body>
</html>
