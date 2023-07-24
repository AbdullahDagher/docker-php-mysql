<?php

require_once 'connection.php';

$keyword = $_POST['keyword'];

$stmt = $con->prepare('SELECT * FROM posts WHERE `title` LIKE ? or `body` LIKE ?');
$stmt->execute(array('%'.$keyword.'%', '%'.$keyword.'%'));

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $data = '<tr><td><input placeholder="Enter book name" id="book-name" type="text"></td><td><input placeholder="Enter author name" id="author-name" type="text"></td><td><button id="add" class="btn btn-success">Add</button></td></tr>';
$data = '';
foreach ($rows as $row){
    $data .= '<tr>';
    $data .= '<td>'. $row['title'] .'</td>';
    $data .= '<td>'. $row['body'] .'</td>';
    // $data .= '<td><button data-id="'. $row['id'] .'" style="margin-right: 5px;" class="btn btn-primary edit">Edit</button><button data-id="'. $row['id'] .'" class="btn btn-danger delete">Delete</button></td>';
    $data .= '</tr>';
}

echo $data;
