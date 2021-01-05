<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor PHP Offline</title>
    <link rel="stylesheet" type="text/css" href="./codemirror/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="./codemirror/theme/ambiance.css">
    <script src="./lib/jQuery/jQuery.js"></script>
    <script src="./codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./editor-action.js"></script>
    <script src="./codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="./codemirror/mode/xml/xml.js"></script>
    <script src="./codemirror/mode/javascript/javascript.js"></script>
    <script src="./codemirror/mode/css/css.js"></script>
    <script src="./codemirror/mode/clike/clike.js"></script>
    <script src='./codemirror/mode/php/php.js'></script>
    <script src='./codemirror/addon/selection/active-line.js'></script>
    <script src='./codemirror/addon/edit/matchbrackets.js'></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./lib/bootstrap-3.3.7/css/bootstrap.min.css">

</head>
<body style="background-color: #0E1112">

    <div class="container" style="margin-bottom: 20px; margin-top: 10px;">
        <div class="row">
            <div class="alert alert-primary alert-dismissible fade in" style="color: #00c4ff;" role="alert">
                <strong>Created by</strong> Jesús Matiz.<br/>
                <i class="glyphicon glyphicon-envelope"></i> <a href="mailto:jesusmatiz35@gmail.com">jesusmatiz35@gmail.com</a> <br/>
                &copy; Copyright <?= date('Y') ?>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: #00c4ff;">Code</label>
                    <textarea class="codemirror-textarea" id="ed_code"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                    <label style="color: #00c4ff;">Result</label>
                <div class="form-group" style="height: 300px; background-color: #202020; color: #D0966D;">
                    <div id="result" style="padding: 10px;"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 app-row text-center" style="margin: 3px;">
                <button class="btn btn-default btn-action" id="run"><i class="glyphicon glyphicon-console"></i> Run</button>
                <button class="btn btn-default btn-action" id="refresh"><i class="glyphicon glyphicon-refresh"></i> Clear</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="./lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="./lib/js/editor-code.js"></script>
</body>
</html>