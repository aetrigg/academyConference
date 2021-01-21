<?php
include("n423connect.php");

$query = "SELECT id, name, description, picture from speakerList";
$result = mysqli_query($link, $query);

$speakers = Array();
while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    $speakers[] = Array(
        "id" => $row["id"],
        "name" => $row["name"],
        "description" => $row["description"],
        "picture" => $row["picture"] 
    );
}

//echo json_encode($speakers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Academy Chicago | Alpha Sigma Alpha</title>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="https://use.typekit.net/xun2ien.css">
</head>
<body>
    <!-- NAV BEGINS -->
    <nav>
        <div class="logo-text">
          <img src="img/alpha-sigma-alpha-logo-white.png"/>  
          <p>THE ACADEMY CHICAGO</p>
        </div>

        <div class="links">
            <a href="index.html">HOME</a>
            <a href="speakersListJSON.html">SPEAKER LIST (JSON)</a>
            <a href="speakersListPHP.php">SPEAKER LIST (PHP)</a>
        </div>
    </nav>
    <!-- NAV ENDS -->

    <!-- HOME PAGE CONTENT BEGINS -->
    <div id="phpContent">
        <div id="phpText">
                <h1>THE ACADEMY CHICAGO</h1>
                <h2>speakers list</h2>
        </div>

        <?php
            foreach($speakers as $speaker){
                echo '
                    <div id="phpList">
                        <div class="individualSpeaker">
                            <div class="individualSpeakerImg">
                                <img src="img/'.$speaker["picture"].'">
                            </div>
                            <div class="individualSpeakerText">
                                <p class="name"><b>'.$speaker["name"].'</b></p>
                                <p>'.$speaker["description"].'</p>
                            </div>
                        </div>
                    </div>
                ';
            };
        ?>
    </div>
    
    <!-- HOME PAGE CONTENT ENDS -->

    <!--POTENTIAL FOOTER??????-->
</body>
</html>