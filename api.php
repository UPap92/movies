<?php
require_once("connect.php");

if ($_SERVER['PATH_INFO'] == '/movies') {
    if (isset($_GET['title'])) {
        $movies = get_movies($_GET['title']);
    } else {
        $movies = get_movies(NULL);
    }

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'Movies retrieved successfully',
        'payload' => $movies
    ]);
} elseif ($_SERVER['PATH_INFO'] == '/generi') {
    if (isset($_GET['nome'])) {
        $generi = get_generi($_GET['nome']);
    } else {
        $generi = get_generi(NULL);
    }

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'Generi retrieved successfully',
        'payload' => $generi
    ]);
} elseif ($_SERVER['PATH_INFO'] == '/attori') {
    if (isset($_GET['cognome'])) {
        $attori = get_attori($_GET['cognome']);
    } else {
        $attori = get_attori(NULL);
    }

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'Attori retrieved successfully',
        'payload' => $attori
    ]);
} elseif ($_SERVER['PATH_INFO'] == '/registi') {
    if (isset($_GET['cognome'])) {
        $registi = get_registi($_GET['cognome']);
    } else {
        $registi = get_registi(NULL);
    }

    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'Registi retrieved successfully',
        'payload' => $registi
    ]);
} else {
    http_response_code(404);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 404,
        'message' => 'Endpoint not found'
    ]);
}
exit;
?>