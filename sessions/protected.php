<?php
    session_start();
    include 'init.php';
    if(!isset($_SESSION['user'])){
        header('Location:sessions.php');
        exit;
    }
?>

<html>
    <head>
        <title>Protected</title>
    </head>
    <body>
        <h2>The Rise of Marnus Labuschagne</h2>
        <p style="width: 60%;"> 
        It is right reward for a man boasting six centuries and 12 fifties across his first 20 Tests, garnering him an average of 62.14. Among batters to have played at least 20 Test innings, only the incomparable Don Bradman (99.94) averaged more.

Here, we chart his rise to the top of the Test batting rankings.

A first taste
Labuschagne first taste of Test action actually came in 2014.

As a 20-year-old, Labuschagne was brought on as a substitute fielder at the Gabba during the Border-Gavaskar series Down Under. It was here that he snared a contender for catch of the summer, diving forward at short leg to catch Varun Aaron millimetres off the ground off the bowling of Nathan Lyon.

It would take close to four years for the eccentric star to get his first taste being an actual Test cricketer, with his debut coming in Dubai in October 2018 in a match most remembered for Usman Khawaja’s brilliant final innings 141 to force a draw.

Labuschagne, for his part, had a forgettable match with the bat, falling for a second-ball duck in the first innings and out for 13 in the second. He did however pick up a wicket in each of Pakistan’s innings, as well as running out Babar Azam. He gave a better account of himself in the second Test, making scores of 25 and 43.

Average: 20.25

Ranking: 110

He made 38 in his lone innings of the rain-affected match and was retained for Australia’s next two Tests for the summer, making scores of 81 and 6.

Average: 26.25

Ranking: 95

The 27-year-old started his campaign with a dashing 74 at the Gabba, following it up with a first-innings ton at Adelaide Oval and a second-innings 51 to secure Player of the Match honours.

It was the first century of Labuschagne Ashes career and sixth in Tests overall.

One suspects there are many more to come.

Average: 62.14

Ranking: 1


</p>
        <a href="logout.php">Log Out Page</a>
    </body>
</html>