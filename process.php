<?php
if(isset($_POST['submit'])){
    $query = $_POST['message'];
    
    $postData = array('query' => array($query), 'lang' => 'en', 'sessionId' => asdfadsfa);
    $jsonData = json_encode($postData);
    $ch = curl_init('https://api.api.ai/v1/query?v=20170428');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization:12f8b58ecf9d4263803a949f8460d986'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
 
    echo $result;
    curl_close($ch);
 
}
?>