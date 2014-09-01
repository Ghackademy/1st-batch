<?php
$text = date('Y-m-d h:i:s')." :\n";
if (isset($_POST['message_id']) && isset($_POST['transcription']))
{
//put $_POST['message_id'], $_POST['transcription'] to your database or

   foreach($_POST as $key => $value)
{
$text = $text . "$key => $value \n"; 
}
$file = fopen('post.txt', "a+");
fwrite($file, $text);
fclose($file);
exit();
}
?>