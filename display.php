<html>

<body>
	<form method="post" action="" class="">
	<input type="radio" name="packet" value="TCP" onclick="change">TCP<br></br>
	<input type="radio" name="packet" value="UDP" onclick="change">UDP<br></br>
	<input type="radio" name="packet" value="ARP" onclick="change">ARP<br>
	<br>
	<select name="dropdown">
	<option value="timestamp">Timestamp</option>
        <option value="sourcemac">Source MAC</option>
        <option value="destinationmac">Destination MAC</option>
	<option value="sourceport">Source Port</option>
	<option value="destinationport">Destination Port</option>
	<option value="sourceip">Source IP</option>
	<option value="destinationip">Destination IP</option>
        <option value="length">Length</option>
	<option value="all">All</option>
	</select><br>
<button class="" type="submit" name="submit">Submit</button>
	</form>
<?php
if(isset($_POST["submit"]))
{
	$type=$_POST["packet"];
	$field=$_POST["dropdown"];

	if($type=="ARP")
	{
	echo"ARP <br />";
	if($field=="timestamp")
	{
		$time=fopen("/var/www/html/arptimestamp.txt","r");
		while(!feof($time))
		{
			echo fgets($time)."<br />";
		}
		fclose($time);
	}
	if($field=="sourcemac")
	{
		 $smac=fopen("arpsourcemac.txt","r");
                while(!feof($smac))
                {
                        echo fgets($smac)."<br>";
                }
                fclose($smac);
	}
	if($field=="destinationmac")
	{
		 $dmac=fopen("arpdestinationmac.txt","r");
                while(!feof($dmac))
                {
                        echo fgets($dmac)."<br>";
                }
                fclose($dmac);
	}
	if($field=="length")
	{
		 $length=fopen("arplenght.txt","r");
                while(!feof($length))
                {
                        echo fgets($length)."<br>";
                }
                fclose($length);
	}
	if($field=="sourceport")
	{
	
                        echo"not available <br />" ;
        
	}
	if($field=="destinationport")
	{
		     echo"not available <br />";
               
	}
	if($field=="sourceip")
	{
		$sip=fopen("arpsourceip.txt","r");
                while(!feof($sip))
                {
                        echo fgets($sip)."<br>";
                }
                fclose($sip);
	}
	if($field=="destinationip")
	{
		 $dip=fopen("arpdestinationip.txt","r");
                while(!feof($dip))
                {
                        echo fgets($dip)."<br>";
                }
                fclose($dip);
	}
	if($field=="all")
	{
		$all=fopen("arpall.txt","r");
		while(!feof($all))
		{
			echo fgets($all)."<br>";
		}
		fclose($all);
	}
	


	}





if($type=="UDP")
	{
	echo"UDP <br />";
	if($field=="timestamp")
	{
		$time=fopen("udptimestamp.txt","r");
		while(!feof($time))
		{
			echo fgets($time)."<br>";
		}
		fclose($time);
	}
	if($field=="sourcemac")
	{
		 $smac=fopen("udpsourcemac.txt","r");
                while(!feof($smac))
                {
                        echo fgets($smac)."<br>";
                }
                fclose($smac);
	}
	if($field=="destinationmac")
	{
		 $dmac=fopen("udpdestinationmac.txt","r");
                while(!feof($dmac))
                {
                        echo fgets($dmac)."<br>";
                }
                fclose($dmac);
	}
	if($field=="length")
	{
		 $length=fopen("udplenght.txt","r");
                while(!feof($length))
                {
                        echo fgets($length)."<br>";
                }
                fclose($length);
	}
	if($field=="sourceport")
	{
		 $sport=fopen("udpsourceport.txt","r");
                while(!feof($sport))
                {
                        echo fgets($sport)."<br>";
                }
                fclose($sport);
	}
	if($field=="destinationport")
	{
		 $dport=fopen("udpdestinationport.txt","r");
                while(!feof($dport))
                {
                        echo fgets($dport)."<br>";
                }
                fclose($dport);
	}
	if($field=="sourceip")
	{
		$sip=fopen("udpsourceip.txt","r");
                while(!feof($sip))
                {
                        echo fgets($sip)."<br>";
                }
                fclose($sip);
	}
	if($field=="destinationip")
	{
		 $dip=fopen("udpdestinationip.txt","r");
                while(!feof($dip))
                {
                        echo fgets($dip)."<br>";
                }
                fclose($dip);
	}
	if($field=="all")
	{
		$all=fopen("udpall.txt","r");
		while(!feof($all))
		{
			echo fgets($all)."<br>";
		}
		fclose($all);
	}
	


	}


if($type=="TCP")
	{
	echo"TCP <br />";
	if($field=="timestamp")
	{
		$time=fopen("tcptimestamp.txt","r");
		while(!feof($time))
		{
			echo fgets($time)."<br>";
		}
		fclose($time);
	}
	if($field=="sourcemac")
	{
		 $smac=fopen("tcpsourcemac.txt","r");
                while(!feof($smac))
                {
                        echo fgets($smac)."<br>";
                }
                fclose($smac);
	}
	if($field=="destinationmac")
	{
		 $dmac=fopen("tcpdestinationmac.txt","r");
                while(!feof($dmac))
                {
                        echo fgets($dmac)."<br>";
                }
                fclose($dmac);
	}
	if($field=="length")
	{
		 $length=fopen("tcplenght.txt","r");
                while(!feof($length))
                {
                        echo fgets($length)."<br>";
                }
                fclose($length);
	}
	if($field=="sourceport")
	{
		 $sport=fopen("tcpsourceport.txt","r");
                while(!feof($sport))
                {
                        echo fgets($sport)."<br>";
                }
                fclose($sport);
	}
	if($field=="destinationport")
	{
		 $dport=fopen("tcpdestinationport.txt","r");
                while(!feof($dport))
                {
                        echo fgets($dport)."<br>";
                }
                fclose($dport);
	}
	if($field=="sourceip")
	{
		$sip=fopen("tcpsourceip.txt","r");
                while(!feof($sip))
                {
                        echo fgets($sip)."<br>";
                }
                fclose($sip);
	}
	if($field=="destinationip")
	{
		 $dip=fopen("tcpdestinationip.txt","r");
                while(!feof($dip))
                {
                        echo fgets($dip)."<br>";
                }
                fclose($dip);
	}
	if($field=="all")
	{
		$all=fopen("tcpall.txt","r");
		while(!feof($all))
		{
			echo fgets($all)."<br>";
		}
		fclose($all);
	}
	


	}


}

?>

</body>
</html>
