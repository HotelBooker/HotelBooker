<?php 
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL); 


function search(){
    include "database.php";


    if (isset($_POST['search'])){

        $adults = $_POST['adults'];
        $children = $_POST['children'];
        //$beds = $_POST['beds']

       // $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $sql_string = "SELECT * FROM rooms WHERE adults LIKE '%$adults%' AND children LIKE '%$children%' ";
        $result = mysqli_query($conn, $sql_string);
        $count = mysqli_num_rows($result);
        
        if ($count == 0){
            echo "There was no search results!";
        }
        else {
            while ($record = mysqli_fetch_array($result)) {
                echo "<div class='room'>";
                echo "<div class='images'><img src='../img/kingroom.jpg' alt='kingroom' height='275px'></div>";
                echo "<div class='text'>";
                echo "<h1>" . $record['room_type'] . "</h1>";
                echo "<div class='rooms'><h2> Rooms: 1</div><div class='max'><h2>Adults: " . $record['adults'] . "</h2></div><div class='max'><h2>Children: " . $record['children'] . "</h2></div><br><br>";
                echo "<div class='description'>" . $record['description'] . "</div>";
                echo "<div style='margin-top: 160px'><div style='margin-top:0px' class='myButton'><a href='#' class='myButtonStyle'>BOOK NOW</a></div>";
                echo "<div class='price'> $" . $record['price'] . "/NIGHT</div></div>";
                echo "</div> </div>";
            }
        }
    }
    else {
        echo "No result for your search! Please try again.";
    }
}

?>



<html>
<head>
<title>Hotel Booker Rooms</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/stylesearch.css">
</head>
<body>


<?php 
search(); 


?>


</body>
</html>