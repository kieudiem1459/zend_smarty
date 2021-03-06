
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../../asset/user/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="../../asset/user/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="../../asset/user/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="../../asset/user/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../../asset/user/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../../asset/user/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    {if !empty($customer) }
        <input type="hidden" id="data-user-id" value="{$customer.customer_id}">
    {/if}
    <div id="header">
        {include file="header_user.tpl"}
    </div>

    {* <script type="text/javascript" src="../../asset/user/js/jquery.min.js"></script> *}
    <script type="text/javascript" charset="UTF-8" src="../../asset/jquery/jquery-3.5.1.min.js"></script>

    <div id="content">
        {$this->layout()->content}
    </div>

    <div id="footer">
        {include file="footer_user.tpl"}
    </div>

    <!-- jQuery Plugins -->

    <script type="text/javascript" src="../../asset/user/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../asset/user/js/slick.min.js"></script>
    <script type="text/javascript" src="../../asset/user/js/nouislider.min.js"></script>
    <script type="text/javascript" src="../../asset/user/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="../../asset/user/js/main.js"></script>
    <script type="text/javascript" src="../../asset/user/js/script.js"></script>

</body>

</html>