<?php
$pixel = $_POST['pixel'];

if (!empty($_POST['phone'])) {
    send_the_order ($_POST);
}

function send_the_order ($post){
    $params=array(
        'phone' => $post['phone'],
        'firstname' => $post['name'],
        'country' => $post['country'], 
        'goal_id' => 83,
        'sub_id1' => $post['sub1'],
        'sub_id2' => $post['sub2'],
        'aff_click_id' => $post['subid'],
    );

    $url = 'https://tracking.affscalecpa.com/api/v2/affiliate/leads?api-key=adsbdb45dhnjcbd4567ghjdd';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $return= curl_exec($ch);
    curl_close($ch);

    $array=json_decode($return, true);

    //print_r($return);
    //print_r($params);
    
    header('Location: success.php?pixel='. $pixel);
}
?>