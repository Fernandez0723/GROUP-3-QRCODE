<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - Minions Learning Portal</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Optional: center video like the float image */
    .welcome-video {
      width: 200px;
      max-width: 80%;
      border-radius: 15px;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="center">
    <!-- Video instead of image -->
    <video class="welcome-video" autoplay loop muted playsinline>
      <source src="images/videoplayback (3).mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    
    <h1>Welcome to the Learning Portal!</h1>
    <p>Scan the QR to enter lessons and view profiles.</p>
    
    <a href="main.php" class="btn">ENTER CLASSROOM</a>
    <a href="profile.php" class="btn" style="margin-top:15px;">VIEW PROFILES</a>
  </div>
</body>
</html>