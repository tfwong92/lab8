<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Survey for UPM Academics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Optional theme -->

    <!-- jquery is required by bootstrap -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/magicsuggest.css" rel="stylesheet">
    <script src="js/magicsuggest.js"></script>
    <script src="js/data.js"></script>
</head>
<body>
    <div class="container">
            @yield('content')
    </div>

    <script>
        var f = $('#forarea').magicSuggest({
            value: [],
            data: 'for.html',
            placeholder: 'Select...',
            allowFreeEntries: false,
            selectionPosition: 'bottom',
            selectionStacked: true,
            valueField: 'id',
            displayField: 'name'
        });
        $(f).on('selectionchange', function(e,m){
            $('[data-toggle="tooltip"]').tooltip('hide');
        });
        //f.setData(fdata);
    </script>
    <script>
        var s = $('#seo').magicSuggest({
            data: '/seo.html',
            placeholder: 'Select...',
            allowFreeEntries: false,
            selectionPosition: 'bottom',
            selectionStacked: true,
            value: [],
        });
        $(s).on('selectionchange', function(e,m){
            $('[data-toggle="tooltip"]').tooltip('hide');
        });
        //s.setData(sdata);
    </script>
    <script>
        $(document).ready(function () {
            tipped = $('[data-toggle="tooltip"]').tooltip();

        });
    </script>
    <style>
        .required:after {
            content: '*';
            color: red;
            padding-left: 5px;
        }
        .tooltip.in {
            opacity: .8;
            filter: alpha(opacity=80);
        }
    </style>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>