<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function speak(){
	
var msg = new SpeechSynthesisUtterance('You have entered wrong username or password');
window.speechSynthesis.speak(msg);

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<a href="#" onclick="speak()">Speak</a>
<body>
</body>
</html>