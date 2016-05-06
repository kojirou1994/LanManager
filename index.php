<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="title.css">
    <style type="text/css">
        a:link {    font-size: 16px;
            line-height: 2.75;
            font-weight: 400;
            letter-spacing: normal;
            opacity: 1;
            -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=$ieopacity)';
            filter: alpha(opacity=100);
            color: #fff;
            position: relative;
            z-index: 1;
            display: inline-block;
            padding: 0 10px;
            height: 44px;
            background: no-repeat;
            text-decoration: none;
            white-space: nowrap;
            -webkit-transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-tap-highlight-color: transparent;
            font-family: "Myriad Set Pro", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            outline-offset: -7px}
        a:visited {color: #00FF00}
        a:hover {color: #FF00FF}
        a:active {color: #0000FF}
        div {background: rgba(0, 0, 0, 0.8);}
    </style>
</head>
<body>
<div>
    <a href="http://<?php echo $_SERVER["SERVER_ADDR"];?>:7600" target="_blank">File Server</a><br>
    <a href="http://<?php echo $_SERVER["SERVER_ADDR"];?>:7601" target="_blank">Aria2 Manager</a>
</div>
</body>
</html>