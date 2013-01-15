<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gangsta Ass CSS3 Wrapping Drop Shadows</title>
	<style type="text/css" media="screen">
		body {
			font-family: Helvetica Neue, Arial, Helvetica, Geneva, sans-serif;
			font-size: 13px;
			background: #3a6682;
		}

		div#shadows {
			width: 50%; margin: 20em auto; position: relative;
		}  

		article {
			background: #ccc;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			padding: 1.5em; color: rgba(0,0,0, .8);
			text-shadow: 0 1px 0 #fff;
			line-height: 1.5;
			text-align: center;
			display: block;
		}

		article:before, article:after {
			-webkit-box-shadow: 0 15px 10px rgba(0,0,0, .7);
			-moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
			box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
			position: absolute;
			bottom: 15px;
			z-index: -1;
			width: 50%;
			height: 20%;
			content: "";
			background: rgba(0, 0, 0, 0.7);
		}

	 article:after {
			-webkit-transform: rotate(3deg);
			-moz-transform: rotate(3deg);
			-o-transform: rotate(3deg);
			right: 10px;
			left: auto;
		}

		article:before {
			-webkit-transform: rotate(-3deg);
			-moz-transform: rotate(-3deg);
			-o-transform: rotate(-3deg);
      right: auto;
			left: 10px;
		}
	</style>
</head>
<body>
	<div id="shadows"><!--START ID shadows-->
		<article>
			 <h1>CSS3 Wrapping Drop Shadows</h1>
			<p>With <del>out any</del> minimal extra bullshit markup(You need the first child to be a container element like a header, hgroup or a div). Oh and they stretch G. Webkit only for now, although I'm sure Firefox could do this trick as well.</p>
		</article>
	</div><!--END ID shadows-->
</body>
</html>