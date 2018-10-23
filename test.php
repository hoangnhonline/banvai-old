<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/jquery.js" type="text/javascript"></script>
    <link href="css/fshare.css" rel="stylesheet" type="text/css" />
    
    <script src="js/fshare.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
               //alert("a");     
            $('#floating-bar').fshare({ theme: 'default', upperLimitElementId: 'upper', lowerLimitElementId: 'lower' });
        });
    </script>
     
    <style type="text/css">
    #wrapper{width:900px;height:1800px;border:solid 1px black;margin:auto;}
    #header,#footer{width:100%;background-color:yellow;height:100px;}
    #footer{height:600px;}
    #content{width:100%;height:1000px;}
	.fshare-compact #fshare-collapsed
{
	width: 80px!important;
	height: 50px;
	color: white;
	background-color: #555;
	text-align: center;
	line-height: 50px;
	cursor:pointer;
	position:relative;
}
    </style>
</head>
<body>
<div id="floating-bar"></div>
<div id="wrapper">    

<div id="content">
<div id="upper">scroll will start from here</div>
contents go here
</div>
<div id="footer">
<div id="lower">scroll will end here</div>
This is a sample footer</div>
</div>    
</body>
</html>