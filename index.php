<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editor PHP Offline</title>
  <link rel="stylesheet" type="text/css" href="./codemirror/lib/codemirror.css">
  <link rel="stylesheet" type="text/css" href="./codemirror/theme/ambiance.css">
  <script src="./lib/jQuery/jQuery.js"></script>
  <script src="./codemirror/lib/codemirror.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- <script src="editor-action.js"></script> -->
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

<body>

  <div class="content-code">
    <div class="row">
      <div class="alert alert-primary alert-dismissible fade in" role="alert">
        <p>
          <strong>Powered by</strong> Jesús Matiz.
        </p>
        <p>
          <i class="glyphicon glyphicon-envelope"></i> <a href="mailto:jesus.matiz.prog@gmail.com">jesus.matiz.prog@gmail.com</a>
        </p>
        <p>
          &copy; Copyright <?= date('Y') ?>
        </p>
      </div>
      <div class="col-md-6 content-textarea">
        <div class="form-group">
          <label class="color-text">Code</label>
          <textarea class="codemirror-textarea code-textarea" id="ed_code"></textarea> 
          <small id="error" style="color: rgba(255,0,0,75%);"></small>         
        </div>
      </div>
      <div class="col-md-6">
        <label class="color-text">Result</label>
        <div class="form-group content-result">
          <textarea class="result-textarea" id="result"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 app-row text-center execute-button">
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