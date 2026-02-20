<?php
// main.php
// Static lessons array (puwede dynamic sa database later)
$lessons = [
    [
        'title' => 'Lesson 1: Introduction',
        'desc' => 'Overview of the topic, key concepts, and objectives.',
        'file' => 'lessons/GE115-PRELIM-MODULE.pdf'
    ],
    [
        'title' => 'Lesson 2: Deep Dive',
        'desc' => 'Detailed explanation with examples and references.',
        'file' => 'lessons/lesson2.pdf'
    ],
    [
        'title' => 'Lesson 3: Practice',
        'desc' => 'Exercises, quizzes, and practice questions.',
        'file' => 'lessons/lesson3.pdf'
    ],
    // Add more lessons here
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons - Minions Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lessons</h1>
        <div class="grid">
            <?php foreach($lessons as $lesson): ?>
                <div class="card">
                    <h3><?php echo $lesson['title']; ?></h3>
                    <p><?php echo $lesson['desc']; ?></p>
                    <div class="lesson-buttons">
                        <!-- Download PDF -->
                        <a href="<?php echo $lesson['file']; ?>" class="btn" download>Download</a>
                        <!-- View Lesson in PHP page -->
                        <a href="view_lesson.php?lesson=<?php echo urlencode($lesson['title']); ?>" class="btn">View Lesson</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top:30px;">
            <a href="profile.php" class="btn">VIEW PROFILES</a>
            <a href="index.php" class="btn" style="margin-left:10px;">BACK TO HOME</a>
        </div>
    </div>
</body>
</html>