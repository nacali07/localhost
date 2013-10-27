<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SergeiSurv</title>

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
	</style>
</head>
<body>
<table class='header'>
	<tr>
		<td class= 'header'><a href ="/sergeisurv/">About</a></td>
		<td class= 'header'><a href ="/sergeisurv/make_survey/">Make a survey</a></td>
		<td class= 'header'><a href ="/sergeisurv/results/">View Results</a></td>
		<td class= "header"><a href ="/sergeisurv/login/">Login/Sign Up</a></td>
	</tr>
</table>
<div id="container">
	<h1>Welcome to the Survey Application</h1>

	<div id="body">
		<p>This is a Web app that can be used to construct a survey, invite people to complete it, and then compile the results.</p>

		<p>After logging in, a Survey administrator can:
		<ul>
			<li>Add a new subscriber</li>
			<li>Manage subscriber lists- groups of users</li>
			<li>Create HTML-format survey item, usually a multiple choice question or a short answer question</li>
			<li>Send a survey invitation via email to all the members of a given subscriber list</li>
		</ul>
		</p>

		<p>After clicking on a link in an email invitation, a survey participant can complete the survey.</p>

		<p>A survey administrator will be able to see the results of the survey once it has ended (and, perhaps, even while it is in progress)</p>
	</div>
</div>

</body>
</html>