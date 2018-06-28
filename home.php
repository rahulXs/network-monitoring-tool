<!DOCTYPE html>
<html>
  <head>
    <title>NMT</title>
    <style>
    .card{
        padding: 10px;
        width: 220px;
        height: 200px;
        margin: 50px;

    }
    </style>
</head>
<body style="background-color:#232830">
<center><h2 style="color:white;">Network Monitoring Tool</h2></center>
<div><center>
<form class="card" method="post" action="result.php" style="background-color:#2C323C; color: white;">
    SELECT PROTOCOL
    <br>
    <input type="radio" name ="myradio" value="udp"> UDP<br>
    <input type="radio" name ="myradio" value="ip"> IP <br>
    <input type="radio" name ="myradio" value="arp"> ARP<br><br>
    TYPE OF INFORMATION

    <select name ="choose">
        <option value="time">time stamp</option>
        <option value="smac">source mac address</option>
        <option value="dmac">destination mac address</option>
        <option value="length">length</option>
        <option value="sip">source ip address</option>
        <option value="sp">Source port address</option>
        <option value="dip">destination ip address</option>
        <option value="dp">destination port address</option>
    </select><br><br>
<button type="submit">Submit</button>
</form></center>
</div>
</body>
</html>
