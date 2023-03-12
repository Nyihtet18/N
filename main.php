

sorry:
    
  error_reporting(0); 
    
    $vdnok = random_str(1, '1234');
$name='wet_on_wet';

/*
$idd=readline("Enter Profile ID -> ");
*/
start:
$counting=1;
$counting1=1;
$counting2=1;
$oun=1;/*
$vlimit=readline("Enter Vd Upload Limit -> ");*/
/*while(1){*/
    
$txt=file_get_contents("family.txt","r");
$refresh=explode("[0]",explode("[1]",$txt)[1])[0];
$useragent=explode("[B]",explode("[A]",$txt)[1])[0];
$model=explode("[D]",explode("[C]",$txt)[1])[0];
$modelid=explode("[F]",explode("[E]",$txt)[1])[0];
if($modelid==""){
    echo "Empty modelid\n";
    exit;
}
$rnd1 = random_str(6, '0123456789');
$rnd2 = random_str(6, '0123456789');
if(empty($refresh)){
    goto start;
}

$refresh_header=array(
    'Content-Type:application/json','X-Android-Package:io.celebe.th','X-Android-Cert:A248506845AFFBB22EFA06817ED72D0A85C9C9D0','X-Client-Version:Android/Fallback/X21000008/FirebaseCore-Android',"User-Agent:$useragent",'Host:securetoken.googleapis.com'
    );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://securetoken.googleapis.com/v1/token?key=AIzaSyB9Bs3mibiSfPpP23sESgl_Tt2_4mjSSoA");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $refresh_header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "{\"grantType\":\"refresh_token\",\"refreshToken\":\"$refresh\"}";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$token=jsondecode($account)["access_token"];
$uid=jsondecode($account)["user_id"];
$project=jsondecode($account)["project_id"];
  
$header=array("Host: api-th.celebe.io","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: 0","Coordinate: lat:-9999;lng:-9999","X-Access-Token: $token","Content-Type: application/json; charset=UTF-8");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/auth/v1/users");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = '{"nickname":"USER_CREATE_FIREBASE_ONLY"}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
echo "$account\n";
$poid=explode('}',explode('body":',$account)[1])[0];

$header=array("Host: api-th.celebe.io","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: $poid","Coordinate: lat:-9999;lng:-9999","X-Access-Token: $token");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/auth/v1/users/login");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/auth/v1/profiles");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
echo$account."\n";
$ppid=explode(',',explode('"id":',$account)[1])[0];

echo"Your Profile ID LIST \n";
echo"$ppid\n";


    $header9=array("Host: api-th.celebe.io","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: $ppid","Coordinate: lat:-9999;lng:-9999","X-Access-Token: $token","Content-Type: application/json; charset=UTF-8");

    

    
$vd= array (
  "Host: celebe-upload-th-release-bucket.s3.ap-southeast-1.amazonaws.com","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: $ppid","X-Access-Token: $token","Content-Type: video/mp4"
    );
    
$pn=array (
  "Host: celebe-upload-th-release-bucket.s3.ap-southeast-1.amazonaws.com","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: $ppid","X-Access-Token: $token","Content-Type:image/png"
    );   
 
$mp3=array(
    'platform:android','version:5.1.10','region:TH','Content-Type:audio/mpeg','Host:celebe-upload-live-bucket.s3.ap-northeast-2.amazonaws.com','User-Agent:okhttp/4.9.0'
    );$vvlimt=1;
    $star=1;
   
   
   $header98=array("Host: api-th.celebe.io","Platform: android","Region: TH","Version: 2.1.0","Device: $model","Device-Id: $modelid","User-Agent: celebe","Profile-Id: $ppid","Coordinate: lat:-9999;lng:-9999","X-Access-Token: $token");
   /*
   
   $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/search?searchKeyword=$name");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header98);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
$pid=explode(',',explode('id":',$account)[1])[0];

echo$pid."\n";

*/

d:
$cui=1;
$vdu=1;


$go=1;/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds/profile/$pid/type/VIDEO?pageNo=$vdnok");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header98);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$vcdaccount= curl_exec($ch);
$ex=explode ('errorMessage":null},"body":[',$vcdaccount)[1];
$ex= explode (']}',$ex)[0];
if($ex==""){
    goto sorry;
}
   
   
  */ 
   
   
  $vdnok=++$vdnok; 
   
   
    
  /*
    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds/recent?pageNo=1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header98);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$vcdaccount = curl_exec($ch);



//while(1){
$vdvd=fopen("mr.mp4","w");
$imim=fopen("vd.png","w");
$vurl=explode('/',explode('"videoUrl":"https://cdn.celebe.io/private/feed/',$vcdaccount)[$star++])[0];

if(empty($vurl)){
    $vdnok=1;
    goto d;
}*/
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn.celebe.io/private/feed/$vurl/vod.m3u8");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
echo "$account\n Cloud";
$vhb=explode('.m3u8',explode('vod_',$account)[1])[0];
$v3i=1;

while(1){
    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn.celebe.io/private/feed/$vurl/vod_$vhb.m3u8");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
$vhd=explode('.ts',explode('vod_',$account)[$v3i++])[0];
if(empty($vhd)){
    break;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn.celebe.io/private/feed/$vurl/vod_$vhd.ts");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
fwrite($vdvd,$account);
}
*/

system("ffmpeg -i mr.mp4 -vn -acodec mp3 -ar 22050 -ab 96k -ac 1 mr.mp3 -y");

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn.celebe.io/private/feed/$vurl/thumbnail.png");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$account = curl_exec($ch);
fwrite($imim,$account);
*/
k:
$vk=readline("Enter Number Vd- ");

$png=file_get_contents("$vk.png",'r');
$vvvid=file_get_contents("$vk.mp4",'r');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header9);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data="{\"type\":\"VIDEO\",\"sound\":{\"id\":0,\"type\":\"USER\"},\"content\":\"#celeamotion #challenge #alightmotionedit #amine \",\"viewType\":\"ALL\",\"isAllowReply\":true,\"isAllowDuet\":true,\"isAllowSave\":false,\"isAllowRelay\":true,\"videoRunningTime\":\"$vk\",\"thumbnailWidth\":890,\"thumbnailHeight\":1583,\"hashtagNameList\":[\"celeamotion\",\"challenge\",\"alightmotionedit\",\"amine\"]}";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$ppp=explode('"',explode('thumbnailUploadUrl":"',$account)[1])[0];
$vvv=explode('"',explode('FeedUploadUrl":"',$account)[1])[0];
/*
$mmm=explode('"',explode('soundUploadUrl":"',$account)[1])[0];
*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$ppp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $pn);
$data = "$png";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$vvv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $vd);
$data = "$vvvid";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$mmm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $mp3);
$data = "$mus";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);*/
/*

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header99);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = '{"content":" ","hashtagNameList":[],"isAllowDuet":true,"isAllowRelay":true,"isAllowReply":true,"isAllowSave":false,"photoUploadCount":0,"sound":{"id":"0","type":"USER"},"thumbnailHeight":1280,"thumbnailWidth":720,"type":"VIDEO","videoRunningTime":"60","viewType":"ALL"}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$ppp=explode('"',explode('thumbnailUploadUrl":"',$account)[1])[0];
$vvv=explode('"',explode('videoFeedUploadUrl":"',$account)[1])[0];
$mmm=explode('"',explode('soundUploadUrl":"',$account)[1])[0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$ppp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $pn);
$data = "$png";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$vvv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $vd);
$data = "$vvvid";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$mmm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $mp3);
$data = "$mus";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = '{"content":" ","hashtagNameList":[],"isAllowDuet":true,"isAllowRelay":true,"isAllowReply":true,"isAllowSave":false,"photoUploadCount":0,"sound":{"id":"0","type":"USER"},"thumbnailHeight":1280,"thumbnailWidth":720,"type":"VIDEO","videoRunningTime":"60","viewType":"ALL"}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$ppp=explode('"',explode('thumbnailUploadUrl":"',$account)[1])[0];
$vvv=explode('"',explode('videoFeedUploadUrl":"',$account)[1])[0];
$mmm=explode('"',explode('soundUploadUrl":"',$account)[1])[0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$ppp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $pn);
$data = "$png";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$vvv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $vd);
$data = "$vvvid";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$mmm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $mp3);
$data = "$mus";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header9999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = '{"content":" ","hashtagNameList":[],"isAllowDuet":true,"isAllowRelay":true,"isAllowReply":true,"isAllowSave":false,"photoUploadCount":0,"sound":{"id":"0","type":"USER"},"thumbnailHeight":1280,"thumbnailWidth":720,"type":"VIDEO","videoRunningTime":"60","viewType":"ALL"}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$ppp=explode('"',explode('thumbnailUploadUrl":"',$account)[1])[0];
$vvv=explode('"',explode('videoFeedUploadUrl":"',$account)[1])[0];
$mmm=explode('"',explode('soundUploadUrl":"',$account)[1])[0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$ppp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $pn);
$data = "$png";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$vvv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $vd);
$data = "$vvvid";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$mmm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $mp3);
$data = "$mus";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-th.celebe.io/resource/v1/feeds");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header99999);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = '{"content":" ","hashtagNameList":[],"isAllowDuet":true,"isAllowRelay":true,"isAllowReply":true,"isAllowSave":false,"photoUploadCount":0,"sound":{"id":"0","type":"USER"},"thumbnailHeight":1280,"thumbnailWidth":720,"type":"VIDEO","videoRunningTime":"60","viewType":"ALL"}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$account = curl_exec($ch);
$ppp=explode('"',explode('thumbnailUploadUrl":"',$account)[1])[0];
$vvv=explode('"',explode('videoFeedUploadUrl":"',$account)[1])[0];
$mmm=explode('"',explode('soundUploadUrl":"',$account)[1])[0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$ppp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $pn);
$data = "$png";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$vvv");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $vd);
$data = "$vvvid";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$mmm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_HTTPHEADER, $mp3);
$data = "$mus";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
*/
echo"[".$vvlimit++."]\tSuccess VD UPLOAD 5Profile 1Acc\n";
system ("rm $vk.png");
system ("rm $vk.mp4");
goto k;
//}

//}

function jsondecode($data, $isarray = true){
return json_decode($data,$isarray);
}
function random_str(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
