<html>
<body>
<table width="800" border="0" align="center" cellpadding="7">
<tr>
<td colspan="2">About Me<hr/></td>
</tr>
<td align="right" valign="top">Name:</td>
<td>Kieffer M. Ganza</br>
</tr>
<tr>
<td align="right">Address:</td>
<td>Davao City</td>
</tr>
<div id="googleMap" style="width:100%;height:200px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(7.126369,125.656211),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA15jVqDYhW4gab4YXpltWhqmktXIghsto&callback=myMap"></script>
</table>
</body>