<?php
// view_lesson.php

// Lessons content array (longer content for testing)
$lesson_contents = [
    'Lesson 1: Introduction' => '
        <h2>Lesson 1: Introduction</h2>
        <p>Welcome to Lesson 1. In this lesson, we will cover the basics and fundamental concepts that will guide you throughout the subject.</p>
        
        <h3>Key Concepts:</h3>
        <ul>
            <li><strong>Concept 1:</strong> Introduction to the topic and why it matters in real life.</li>
            <li><strong>Concept 2:</strong> Core principles and their applications.</li>
            <li><strong>Concept 3:</strong> Understanding key objectives and expected outcomes.</li>
        </ul>
        
        <h3>Overview:</h3>
        <p>Understanding the foundation of this subject is crucial. Here, we will explore definitions, history, and the context that led to the development of these concepts. By the end of this lesson, you should be able to:</p>
        <ol>
            <li>Explain the importance of the topic.</li>
            <li>Identify the key concepts.</li>
            <li>Apply the principles to simple examples.</li>
        </ol>

        <h3>Additional Notes:</h3>
        <p>Remember to take notes as you read, and always try to relate the concepts to real-life situations. Practice is key!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio.</p>
    ',

    'Lesson 2: Deep Dive' => '
        <h2>Lesson 2: Deep Dive</h2>
        <p>Welcome to Lesson 2. In this lesson, we will explore the topic more deeply and examine detailed examples, case studies, and applications.</p>
        
        <h3>Detailed Examples:</h3>
        <ul>
            <li><strong>Example A:</strong> Step-by-step process for applying the core concepts.</li>
            <li><strong>Example B:</strong> Common pitfalls and how to avoid them.</li>
            <li><strong>Example C:</strong> Real-world scenarios where these concepts are applied.</li>
        </ul>

        <h3>Exercises:</h3>
        <p>Try to complete the exercises below to test your understanding:</p>
        <ol>
            <li>Exercise 1: Apply concept A to a hypothetical situation.</li>
            <li>Exercise 2: Compare and contrast principles B and C.</li>
            <li>Exercise 3: Solve a case study based on the example provided.</li>
        </ol>

        <h3>Additional Notes:</h3>
        <p>Remember that understanding comes from practice and reflection. Keep experimenting with different scenarios to strengthen your skills.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
    ',

    'Lesson 3: Practice' => '
        <h2>Lesson 3: Practice</h2>
        <p>This lesson focuses on exercises, practice problems, and quizzes to reinforce your understanding.</p>
        
        <h3>Practice Questions:</h3>
        <ul>
            <li>Question 1: Solve problem X using the methods learned in Lesson 1.</li>
            <li>Question 2: Analyze scenario Y and identify the correct approach.</li>
            <li>Question 3: Reflect on case study Z and summarize your findings.</li>
        </ul>

        <h3>Guidelines:</h3>
        <p>While practicing, make sure you:</p>
        <ul>
            <li>Follow the step-by-step instructions carefully.</li>
            <li>Check your answers with reference solutions.</li>
            <li>Take notes on mistakes and how to correct them.</li>
        </ul>

        <h3>Extra Exercises:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
        <p>Additional practice can include:</p>
        <ul>
            <li>Scenario-based problems</li>
            <li>Mini quizzes</li>
            <li>Group exercises (if applicable)</li>
        </ul>
    ',
];
  
// Kunin ang lesson mula sa GET parameter
if(isset($_GET['lesson'])) {
    $lesson_title = $_GET['lesson'];
    if(isset($lesson_contents[$lesson_title])) {
        $content = $lesson_contents[$lesson_title];
    } else {
        $content = '<p>Lesson not found.</p>';
    }
} else {
    $content = '<p>No lesson selected.</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lesson_title ?? 'View Lesson'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <a href="main.php" class="btn">Back to Lessons</a>
            <div class="lesson-content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</body>
</html>