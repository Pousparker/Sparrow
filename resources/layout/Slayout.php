<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="../lib/css/uikit.css" />
    <link rel="stylesheet" href="../lib/css/meCss/localCss.css">
    <link rel="stylesheet" href="../../lib/css/uikit.css" />
    <link rel="stylesheet" href="../../lib/css/meCss/localCss.css">
    <!-- UIkit JS -->
    <script src="../lib/js/uikit.min.js"></script>
    <script src="../lib/js/uikit-icons.min.js"></script>
    <script src="../../lib/js/uikit.min.js"></script>
    <script src="../../lib/js/uikit-icons.min.js"></script>

    <title>Document</title>
</head>
<body>
<nav class="uk-navbar-container" uk-navbar style="background-color:#FFFFFF;">
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="../home/index">Home</a></li>
            <li>
                  <a href="../home/out">Exit</a>
            </li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class='uk-border-circle' width='40' height='40' src='../img/vector/man.svg'>
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom uk-margin-right">pouira</h3>
                    </div>
            </li>
        </ul>
    </div>
</nav>
</div>
<div class="uk-text-center" uk-grid>
    <div class="uk-width-1-6@m">

        <div>
            <div class="uk-card uk-card-default uk-card-hover uk-card-body  uk-position-center-left uk-margin-medium-left" style="border-radius: 10px;">
                <ul class="uk-iconnav uk-iconnav-vertical">
                    <li class="uk-margin-down"><a href="../student/comment" uk-icon="icon: comment"></a></li>
                    <li class="uk-margin-top"><a href="../student/image" uk-icon="icon: image"></a></li>
<!--                    <li class="uk-margin-top"><a href="../teacher/get" uk-icon="icon: upload"></a></li>-->
                    <li class="uk-margin-top"><a href="../student/setting" uk-icon="icon: user"></a></li>
                </ul>

            </div>
        </div>


    </div>
    <div class="uk-width-5-6@m">

        <div class=" uk-margin-right uk-margin-top">

            {content}
        </div>
    </div>

</div>
</body>
</html>
