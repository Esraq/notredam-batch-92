<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Dashboard</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                </li>


                @foreach($menus as $menu)
                    <li>
                        <a href="{{$menu['url']}}">&nbsp&nbsp{{$menu['menu_name']}}</a>
                    </li>


                @endforeach()





            </ul>
            </li>

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">


                        @foreach($members as $member)
                        <fieldset>
                            <legend><center>Details of {{$member->name}}</center></legend>



                           <img src="../images/{{$member->filename}}" alt="img" height="225" width="245">


                            <hr>
                            <center><legend>Id:{{$member->id}}</legend>></center>

                            <center><legend>College Roll Number: {{$member->college_roll_no}} </legend>></center>
                            <center><legend>National Id Card: {{$member->nid_card_no}} </legend>></center>
                            <center><legend>Fathers Name: {{$member->father_name}} </legend>></center>
                            <center><legend>Mothers Name: {{$member->mother_name}} </legend>></center>
                            <center><legend>Spouse Name: {{$member->spouse_name}} </legend>></center>
                            <center><legend>Number of Children: {{$member->children_no}} </legend>></center>
                            <center><legend>Present Address: {{$member->present_address}} </legend>></center>
                            <center><legend>Permanenet Address {{$member->permanent_address}} </legend>></center>
                            <center><legend>Profession: {{$member->profession}} </legend>></center>
                            <center><legend>Designation: {{$member->designation}} </legend>></center>
                            <center><legend>phone: {{$member->phone}} </legend>></center>
                            <center><legend>email: {{$member->email}} </legend>></center>
                            <center><legend>Blood Group: {{$member->blood_group}} </legend>></center>
                            <center><legend>Member Fee: {{$member->member_fee}} </legend>></center>
                            <center><legend>Registration Date: {{$member->registration_date}} </legend>></center>



                        </fieldset>


                        <!-- Modal content -->


                    @endforeach
                </div>
            </div>

            <!-- /. ROW  -->
            <br><br>

        <?php echo $members->links() ?>

            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
