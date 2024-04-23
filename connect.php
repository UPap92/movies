<?php
// 1. Database Connection Credentials
$servername = "mysql8"; // Replace with your server name
$username = "root";  // Replace with your database username 
$password = "my_perfect_password";  // Replace with your database password
$database = "movies"; // Replace with the name of your database
$port = 3306; // Replace with the port your database server is listening

function get_movies($title){
    
    global $servername, $username, $password, $database, $port;

    // 1. Fetch results into an associative array
    $movies = array();
    // 2. Create connection
    // $conn = new mysqli($servername, $username, $password, $database, $port);
    $conn = mysqli_connect($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $query = "select * from movie;";
    
    
    if(isset($title)){
        $query = 'select * from movie where title like "%' . $title . '%" ';
    }

    // 3. Execute the query
    $result = $conn->query($query);

    // 4. Add an item to the $movies array
    while($row = $result->fetch_assoc()){
        $movies[] = $row; // Add an item to the array
    }
    /*
    echo "<pre>";
    print_r( $movies);
    echo "</pre>";
    */
    // Close the connection
    $conn->close();

    return $movies;
}

function get_actors(){

}

function get_directors(){

}

function get_genres(){
    
}

?>
