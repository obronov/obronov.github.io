
<?

require_once('functions.php'); 
require_once('lib/PHPMailer-master/src/PHPMailer.php'); 
require_once('lib/PHPMailer-master/src/SMTP.php'); 
require_once('lib/PHPMailer-master/src/Exception.php'); 
require_once('lib/PHPMailer-master/src/OAuth.php'); 
require_once('lib/PHPMailer-master/src/POP3.php'); 



	$site['db_hostname'] = 'localhost';
	$site['database'] = 'interoptika';
	$site['db_username'] = 'root';
	$site['db_password'] = '';
	$site['debug'] = true;

$db_connect = mysqli_connect($site['db_hostname'], $site['db_username'], $site['db_password'], $site['database']);

if (!$db_connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = 'SELECT * FROM gift_сertificate';
$result_query = mysqli_query($db_connect, $query);

$arr_query = mysqli_fetch_assoc($result_query);

//pre($arr_query);
//pre($_SERVER);
//pre($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if(!empty($_POST))
{
	
	$username = $_POST['username'];
	$userphone = $_POST['userphone'];
	$useremail = $_POST['useremail'];
	$pp = $_POST['privacyPolicy'];
	date_default_timezone_set('Asia/Bangkok');
	$date_add = date("Y.m.d"); 
	$time_add = date("G:i:s"); 
	
	$add_info = "INSERT INTO gift_сertificate (name, phone,email,pp,date_add,time_add) VALUES ('$username','$userphone','$useremail','$pp','$date_add','$time_add' )";
	if (mysqli_query($db_connect, $add_info)) {
     /* echo "Запись успешно добавлена";*/
	} else {
	      echo "Ошибка: " . $add_info . "<br>" . mysqli_error($db_connect);
	}
	mysqli_close($db_connect);
	
	/*Отправка на почту*/
	$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();

    $mail->SMTPDebug = 1;

    $mail->Host = 'ssl://smtp.mail.ru';

    $mail->SMTPAuth = true;
    $mail->Username = 'mr.obronov@mail.ru'; // логин от вашей почты
    $mail->Password = 'vogue888'; // пароль от почтового ящика
    $mail->SMTPSecure = 'SSL';
    $mail->Port = '465';

    $mail->CharSet = 'UTF-8';
    $mail->From = 'noreply@interoptika.ru';  // адрес почты, с которой идет отправка
    $mail->FromName = '{$username}'; // имя отправителя
    $mail->addAddress('mr.obronov@mail.ru', 'Alexey');

    $mail->isHTML(true);

    $mail->Subject = "Письмо с сайта";
    $mail->Body = "Имя: {$username}<br>Телефон: {$userphone}<br> Email: {$useremail}<br>";
    $mail->AltBody = "Имя: {$_POST['name']}\r\n Email: {$_POST['email']}\r\n";

    //$mail->SMTPDebug = 1;

    if ($mail->send()) {
        $answer = '1';
    } else {
        $answer = '0';
        echo 'Письмо не может быть отправлено. ';
        echo 'Ошибка: ' . $mail->ErrorInfo;
    }
    die($answer);

}






?>