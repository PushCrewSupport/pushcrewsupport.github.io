<?php


try {
    $post_data = array(
        'From' => "08149265866",
        'To' => "09599770597",
        'CallerId' => "01130017679",
        'Url' => "http://my.exotel.in/exoml/start/<flow_id>",
        //'TimeLimit' => "5", //This is optional
        //'TimeOut' => "5", //This is also optional
        'CallType' => "trans"
    );

    $exotel_sid = "wingify"; // Your Exotel SID - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings
    $exotel_token = "922a42b9a518282f3c6ce3f2d980c966d9f2287f"; // Your exotel token - Get it here: http://my.exotel.in/Exotel/settings/site#exotel-settings

    $url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);

    curl_close($ch);
    } catch (Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
}

?>
