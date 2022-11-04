 <?php
    $users = file("user_data.txt");
    $userLine = array();
    $usernScore = array();
    $userName;
    $userScore;
    $leaderboardCount = 0;
    $lengthOfLeaderboard = 5;

    foreach ($users as $line) {
        $userLine[] = explode(",", $line);
        foreach ($userLine as $user) {
            $usernScore[$user[0]] = $user[2];
        }
    }
    arsort($usernScore, SORT_NATURAL);
    ?>

 <!DOCTYPE html>
 <html>

 <head>
     <title>Leaderboard</title>
     <link rel="stylesheet" href="./leaderboard.css" onload="this.width/=1.3;this.onload=null;" />
 </head>

 <body>
     <h1>WHO WANTS TO BE A MILLIONAIRE???</h1>
     <img class="img" src="logo.png"><br />



     <h1>Leaderboard!!!</h1>
     <section class="table-or">
         <p class="p1">Rank</p>
         <p class="p2">Participants</p>
         <p class="p3">Scores</p>
     </section>
     <section>
         <?php
            foreach ($usernScore as $key => $value) {
                $leaderboardCount++;
                echo "
                            <div class=row>
                                <p class=p1>$leaderboardCount</p>
                                <p class=p2>$key</p>
                                <p class=p3>$value</p>
                            </div>";
                if ($leaderboardCount == $lengthOfLeaderboard) {
                    break;
                }
            }
            ?>
     </section>

     </section>



     <div class="utButtons">
         <button onclick="document.location='home.php'">Try Again</button>
         <button onclick="document.location='logout.php'">Log Out</button>
     </div>

 </body>

 </html>