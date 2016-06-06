<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<style>
.textbox {
	border:2px solid #456879;
	border-radius:10px;
	height: 22px;
	width: 230px;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<div style="background-color:black; color:white; padding:20px;">
<h4> <center> PHP - Linux Shell Terminal Web Application - GH0ST-S0FTWARE <center> </h4>
</div>
<form method="get" action="php/komut.php">
    <table align="center">
        <tr>
            <td>Komut : </td>
            <td><input type="text" name="komut"class="textbox" /></td>
            <td colspan="2"><input type="submit" value="Çalıştır" class="button1" /></td>
        </tr>
    </table>
</form>
<body>
<SCRIPT LANGUAGE="Javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
var EnableRightClick = 0;
if(isNS)
document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
if(EnableRightClick==1){ return true; }
else {return false; }
}
function mousehandler(e){
if(EnableRightClick==1){ return true; }
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
function keyhandler(e) {
var myevent = (isNS) ? e : window.event;
if (myevent.keyCode==96)
EnableRightClick = 1;
return;
}
document.oncontextmenu = mischandler;
document.onkeypress = keyhandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<script language="JavaScript">
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
</script>
<script>
window.document.body.oncontextmenu = cncl;
window.document.body.onselectstart = cncl;
window.document.body.ondragstart = cncl;
function cncl(){ if(window.event && window.event.returnValue) window.event.returnValue = false; return false; }
</script>
<script LANGUAGE="JavaScript">
function disableselect(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
 
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</script>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"></body>
<script type="text/javascript">
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}
function reEnable(){
return true
}
if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=reEnable
}
</script>
<body onkeydown="return false"> 
</body>
</html>
