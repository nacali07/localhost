<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Make a Survey</title>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.header{
		padding-left: 5em;
		}
	.survey{

		text-align: center;
	}
	
	</style>
</head>
<body>
<table class='header'>
	<tr>
		<td class= 'header'><a href ="/sergeisurv/index.php/home">About</a></td>
		<td class= 'header'><a href ="/sergeisurv/make_survey/">Make a survey</a></td>
		<td class= 'header'><a href ="/sergeisurv/results/">View Results</a></td>
	</tr>
</table>
<div id="container">
	<h1>Make a Survey</h1>

	<div class="survey">
            <form action="<?=$PHP_SELF?>" method="post" name="form" class="survey">

			Survey Name:<input type="text" name="title"></br>
			Question 1:<input type="text" name="question"></br>
			<div id="as">Answer:<textarea name="ans1"></textarea></div></br>
			<input type="button" value="Add Answer" onclick="addanswer();"></br>
			<input type="button" value="Add Question" onclick="addquestion();"></br>
			<input type="submit" name="submit" value="Create!">
			<div id="cnt"><input type="hidden" name="count" value="1"></div>

	</form>

<script>  
var acnt = "1";
function addanswer(){
acnt++;
document.all.cnt.innerHTML = '<input type="hidden" name="count" value="' + acnt + '">';
var a = document.createElement('tr');
var e = document.createElement('td');
var f = document.createElement('td');
var b = document.createTextNode('Answer'+':');
e.appendChild(b);
var c = document.createElement('textarea');
var d = "ans"+acnt;
c.setAttribute('name',d);
f.appendChild(c);
a.appendChild(e);
a.appendChild(f);
document.getElementById('as').appendChild(a);
}
</script>
<script>  
var qcnt = "1";
function addquestion(){
qcnt++;
document.all.cnt.innerHTML = '<input type="hidden" name="count" value="' + qcnt + '">';
var a = document.createElement('tr');
var e = document.createElement('td');
var f = document.createElement('td');
var b = document.createTextNode('Question'+qcnt+':');
e.appendChild(b);
var c = document.createElement('input');
var d = "ans"+qcnt;
c.setAttribute('name',d);
f.appendChild(c);
a.appendChild(e);
a.appendChild(f);
document.getElementById('as').appendChild(a);
}
</script>
		
	</div>
</div>

</body>
</html>
