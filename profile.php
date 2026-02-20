<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiles - Minions Portal</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Extra styles specific for profile page */
    .profile-card {
      text-align: center;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      background: #fff;
      margin: 15px;
    }

    .profile-card img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .members-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }

    .member-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 50%;
      border: 2px solid #1E88E5;
      transition: transform 0.3s ease;
    }

    .member-img:hover {
      transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
      .profile-card img {
        width: 120px;
        height: 120px;
      }
      .member-img {
        width: 60px;
        height: 60px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Profiles</h1>

    <!-- Teacher Profile -->
    <div class="profile-card">
      <img src="images/teacher.png" alt="Teacher">
      <h3>ANGEL MAY B. TANO</h3>
      <p>COURSE INSTRUCTOR</p>
    </div>

    <!-- Leader Profile -->
    <div class="profile-card">
      <img src="images/leader.png" alt="Leader">
      <h3>JASMIN IGNACIO</h3>
      <p>Leader</p>
    </div>

    <!-- Members Section -->
    <h2 style="text-align:center; margin-top:40px;">MEMBERS</h2>
    <div class="members-grid">
      <?php
        // Array ng member images
        $members = [
          'images/member1.png',
          'images/member2.png',
          'images/member3.png',
          'images/member4.png',
          'images/member5.png',
          'images/member6.png',
          'images/member7.png',
          'images/member8.png',
          'images/member9.png',
          'images/member10.png'
        ];

        foreach($members as $m) {
          echo '<img src="'.$m.'" alt="Member" class="member-img">';
        }
      ?>
    </div>

    <!-- Back Buttons -->
    <div style="text-align:center; margin-top:30px;">
      <a href="main.php" class="btn">BACK TO LESSONS</a>
      <a href="index.php" class="btn" style="margin-left:10px;">BACK TO HOME</a>
    </div>
  </div>
</body>
</html>