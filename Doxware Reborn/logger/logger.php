<?php
//https://developer.mapquest.com/user/login/sign-up GET A MAPQUEST API
//AND REPLACE API with your API KEY
//You get up to 15000 queries per month!
//Replace [API_KEY] with your mapquest API KEY
$string=$_POST['latitude'].",".$_POST['longitude'];
$data=file_get_contents(@"http://www.mapquestapi.com/geocoding/v1/reverse?key=[MAPQUEST_DEVELOPERS_API_KEY]&location=$string&outFormat=csv");
file_put_contents("location.csv", $data);
?>