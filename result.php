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
<div>
    <a href="home.php" style="color: white;"> Back to Home Page</a>
</div>
<div class="card" style="color:white;">
    <?php

        $radioVal = $_POST['myradio'];
        $dropval= $_POST['choose'];
        echo "selected protocol: ". $radioVal. "<br />";
        echo "selected information : ". $dropval. "<br><br>";

       # shell_exec('./capture');
        if($radioVal == "udp")
        {
            if($dropval == "time")
            {
            $file = fopen("udp_time","r");
            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "smac")
        {
            $file = fopen("udp_smac","r");
            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "dmac")
        {
            $file = fopen("udp_dmac","r");

            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "length")
        {
            $file = fopen("udp_length","r");
            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "sip")
        {
            $file = fopen("udp_sip","r");
            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "sp")
        {
            $file = fopen("udp_sp","r");
            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }
            fclose($file);
        }
        else if($dropval == "dip")

        {
        $file = fopen("udp_dip","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dp")
        {
        $file = fopen("udp_dp","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        }
    else if($radioVal == "ip")
        {
        if($dropval == "time")
        {
        $file = fopen("ip4_time","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "smac")
        {
        $file = fopen("ip4_smac","r");
        while(! feof($file))

        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dmac")
        {
        $file = fopen("ip4_dmac","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "length")
        {
        $file = fopen("ip4_length","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "sip")
        {
        $file = fopen("ip4_sip","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "sp")
        {

        $file = fopen("ip4_sp","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dip")
        {
        $file = fopen("ip4_dip","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dp")
        {
        $file = fopen("ip4_dp","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        }
    else if($radioVal == "arp")
        {
        if($dropval == "time")
        {
        $file = fopen("arp_time","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";

        }
        fclose($file);
        }
        else if($dropval == "smac")
        {
        $file = fopen("arp_smac","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dmac")
        {
        $file = fopen("arp_dmac","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "length")
        {
        $file = fopen("arp_length","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "sip")
        {
        $file = fopen("arp_sip","r");
        while(! feof($file))

        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "sp")
        {
        echo("no port address for arp");
        }
        else if($dropval == "dip")
        {
        $file = fopen("arp_dip","r");
        while(! feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
        }
        else if($dropval == "dp")
        {
        echo("no port address for arp");
        }
        }
?>
</div>
</body>
</html>
