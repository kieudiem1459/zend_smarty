<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin page</title>

    <link rel="stylesheet" type="text/css" href="../../asset/admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../asset/admin/dataTable/jquery.dataTables.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../asset/admin/css/layout.css" />
</head>

<body>
    <!-- Custom scripts for all pages-->

    <script type="text/javascript" charset="UTF-8" src="../../asset/admin/jquery/jquery-3.5.1.min.js"></script>

    {* {if $this->admin != '' } *}
        <div id="header">
            {include file="header_admin.tpl"}
        </div>

        <div id="includetpl">
            <div class="wrapper">

                {include file="menu_admin.tpl"}

                <div id="content"  style="width: 100%;">
                    <div class="container-fluid" style="margin-bottom: 40px;">
                        <div class="d-flex justify-content-start mt-3">
                            <div>
                                <button type="button" id="sidebarCollapse" class="btn btn-info my-1">
                                    <i class="fas fa-align-left"></i>
                                    <span>
                                        <- </span>
                                </button>
                            </div>

                            <div  style="width: 100%;">
                                {($this->layout()->content)}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            {include file="footer_admin.tpl"}
        </div>
    {* {else}
                {($this->layout()->content)}


    {/if} *}


    <script type="text/javascript" charset="UTF-8" src="../../asset/admin/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" charset="UTF-8" src="../../asset/admin/dataTable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="../../asset/admin/js/index.js"></script>
</body>

</html>