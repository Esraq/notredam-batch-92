<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration FormS</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('../assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('../assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{url('../assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='{{url('../http://fonts.googleapis.com/css?family=Open+Sans')}}' rel='stylesheet' type='text/css' />
</head>
<body>

<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-12">
        <!-- Form Elements -->
        <div class="panel panel-default">

            <div class="panel-heading">
                <center>  Membership Form For NotreDam College-92 Forum </center>
            </div>
            @if($errors)

                <ul>



                    @foreach($errors->all() as $error)

                        <li class="alert alert-danger">{{$error}}</li>

                    @endforeach



                </ul>

            @endif
            <div class="panel-body">
                <div class="row">


                    {!! Form::open(['url' => URL::to('site/'.$member->id), 'method'=>"put", 'id'=>'event', 'enctype'=>'multipart/form-data']) !!}







                    <div class="form-group">
                        <label>&nbspName:</label>
                        {!! Form::text('name', Input::old('name',isset($member->name)?$member->name:''),array('class' => 'form-control' , 'placeholder' => 'Enter name correctly' )) !!}
                    </div>


                    <div class="form-group">
                        <label>&nbspCollege Roll No:</label>
                        {!! Form::text('college_roll_no', Input::old('name',isset($member->college_roll_no)?$member->college_roll_no:''),array('class' => 'form-control' , 'placeholder' => 'Enter college roll number correctly' )) !!}
                    </div>
                    <div class="form-group">
                        <label>&nbspNational ID Card No:</label>
                        {!! Form::text('nid_card_no', Input::old('nid_card_no',isset($member->nid_card_no)?$member->nid_card_no:''),array('class' => 'form-control' , 'placeholder' => 'Enter nationl id card no' )) !!}
                    </div>
                    <div class="form-group">
                        <label>&nbspFather's Name:</label>

                        {!! Form::text('fathers_name', Input::old('fathers_name',isset($member->fathers_name)?$member->fathers_name:''),array('class' => 'form-control' , 'placeholder' => 'Enter Fathers Name' )) !!}
                    </div>
                    <div class="form-group">
                        <label>&nbspMother's Name:</label>
                        {!! Form::text('mothers_name', Input::old('mothers_name',isset($member->mothers_name)?$member->mothers_name:''),array('class' => 'form-control' , 'placeholder' => 'Enter Mothers Name' )) !!}

                    </div>
                    <div class="form-group">
                        <label>&nbspSpouse Name:</label>

                        {!! Form::text('spouse_name', Input::old('mothers_name',isset($member->spouse_name)?$member->spouse_name:''),array('class' => 'form-control' , 'placeholder' => 'Enter Spouse Name' )) !!}

                    </div>
                    <div class="form-group">
                        <label>&nbspNumber of Children:</label>

                        {!! Form::text('children_no', Input::old('children_no',isset($member->children_no)?$member->children_no:''),array('class' => 'form-control' , 'placeholder' => 'Enter number of children' )) !!}

                    </div>
                    <div class="form-group">
                        <label>&nbspPresent Address/Mailing Address:</label>
                        {!! Form::text('present_address', Input::old('present_address',isset($member->present_address)?$member->present_address:''),array('class' => 'form-control' , 'placeholder' => 'Enter Present Address' )) !!}

                    </div>

                    <div class="form-group">
                        <label>&nbspPermanent Address:</label>

                        {!! Form::text('permanent_address', Input::old('permanent_address',isset($member->permanent_address)?$member->parmanent_address:''),array('class' => 'form-control' , 'placeholder' => 'Enter Permanent Address' )) !!}

                    </div>


                    <div class="form-group">
                        <label>&nbspProfession:</label>

                        {!! Form::text('profession', Input::old('profession',isset($member->profession)?$member->profession:''),array('class' => 'form-control' , 'placeholder' => 'Enter Profession' )) !!}
                    </div>

                    <div class="form-group">
                        <label>&nbspDesignation:</label>
                        {!! Form::text('designation', Input::old('designation',isset($member->designation)?$member->designation:''),array('class' => 'form-control' , 'placeholder' => 'Enter Designation' )) !!}

                    </div>


                    <div class="form-group">
                        <label>&nbspPhone:</label>
                        {!! Form::text('phone', Input::old('phone',isset($member->phone)?$member->phone:''),array('class' => 'form-control' , 'placeholder' => 'Enter Phone' )) !!}

                    </div>
                    <div class="form-group">
                        <label>&nbspEmail:</label>
                        {!! Form::text('email', Input::old('email',isset($member->email)?$member->email:''),array('class' => 'form-control' , 'placeholder' => 'Enter email' )) !!}

                    </div>

                    <div class="form-group">
                        <label>&nbspBlood Group:</label>

                        {!! Form::text('blood_group', Input::old('email',isset($member->blood_group)?$member->blood_group:''),array('class' => 'form-control' , 'placeholder' => 'Enter blood group' )) !!}
                    </div>

                    <div class="form-group">
                        <label>&nbspMember Fee:</label>

                        {!! Form::text('member_fee', Input::old('member_fee',isset($member->member_fee)?$member->member_fee:''),array('class' => 'form-control' , 'placeholder' => 'Enter member fee' )) !!}

                    </div>








                    <div class="form-group">


                        &nbsp&nbsp <button type="submit" class="btn btn-primary">Register</button>

                    </div>
                    </form>



                    <br />


                    <!-- /. ROW  -->
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
