<?php 


function search(){
    include "database.php";


    if (isset($_POST['search'])){

        $adults = $_POST['adults'];
        $
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $sql_string = "SELECT * FROM rooms WHERE adults LIKE '$' ";
        $roomData = mysqli_query($conn, $sql_string) or die ("could not search!");
        
        $record = mysqli_fetch_array($roomData);



    }
    else {
        echo "No result for your search! Please try again.";
    }


}


?>



<html>
<head>
<title>Hotel Booker Rooms</title>
</head>
<body>

<h1>Gevonden kamers:</h1> 

<?php search(); ?>


</body>
</html>