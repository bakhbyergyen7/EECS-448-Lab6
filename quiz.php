<!DOCTYPE html>
<html>
<head>
    <title>PHP Quiz</title>
</head>

<body>
    <div id="page-wrap">
        <h1>Results</h1>

        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "C") {$totalCorrect++; }
            if ($answer2 == "A") {$totalCorrect++; }
            if ($answer3 == "C") {$totalCorrect++; }
            if ($answer4 == "A") {$totalCorrect++; }
            if ($answer5 == "A") {$totalCorrect++; }
        $percent = ($totalCorrect/5)*100;
        echo "<div id='results'>$percent / 100 % correct! </div>";
        
        ?>

    </div>
</body>

</html>