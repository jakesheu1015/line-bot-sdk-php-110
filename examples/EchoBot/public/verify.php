<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

define("LINE_MESSAGING_API_CHANNEL_SECRET", '7aa392003688ea507ca578de50fe0e71');
define("LINE_MESSAGING_API_CHANNEL_TOKEN", 'N1NMUjSfEo3dbMUoCXdiW/G2+9NiS4dLxAfeRNVuC2TcKRUVAr3ArljrObxxaYwyPugxMx+LJm/ABPvok9Ao8P7vkvdQ34tPuvmMz7Mmt5uKXlakjDh0sZBBJcFOFV77swVk8z9K5akfewheD8yUiQdB04t89/1O/w1cDnyilFU=');

$access_token = LINE_MESSAGING_API_CHANNEL_TOKEN;

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
