<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<!-- google Maps API　を使うための記述 -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAhZHHmFPEKFhx8ze-Yss4pAiUADa5pGDM&sensor=false"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<title>このあとどうする？</title>
<script>
    var map;
    var mk;
    var lat = 35.6896342;    // 緯度の初期位置
    var lng = 139.69210069999997;    // 経度の初期位置

    $(function(){
        var mapOption = {
            center              : new google.maps.LatLng(lat,lng),
            disableDefaultUI    : true,
            zoom                : 15,
        //  maxZoom             : 20,
        //  minZoom             : 15
        };

        //マップ表示
        map = new google.maps.Map($("#mapView")[0],mapOption);

        //マーカー表示
        mk = new google.maps.Marker({
            position : new google.maps.LatLng(lat,lng),
            map      : map,
            //icon     : "img/"
        });
    });

</script>
</head>
<body>
<?php
    include 'head.php';
?>
<div id="wrap">
    <div id ="mapView">
    </div><!--mapView-->
</div><!--wrap-->
<?php
    include 'foot.php';
?>
</body>