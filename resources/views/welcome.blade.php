<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration FormS</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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


                        {!! Form::open(['url' => URL::to('/'),'id'=>'event', 'enctype'=>'multipart/form-data']) !!}



                        <div class="form-group">
                                <label>Upload Passport Phot </label>
                                &nbsp{!! Form::file('filename', Input::old('filename'),array('class' => 'form-control' , 'placeholder' => 'Enter file' )) !!}

                            </div>




                    <div class="form-group">
                        <label>&nbspName:</label>
                        {!! Form::text('name', Input::old('name'),array('class' => 'form-control' , 'placeholder' => 'Enter full name' )) !!}
                    </div>


                            <div class="form-group">
                                <label>&nbspCollege Roll No:</label>
                                {!! Form::text('college_roll_no', Input::old('college_roll_no'),array('class' => 'form-control' , 'placeholder' => 'Enter college roll no' )) !!}
                            </div>
                            <div class="form-group">
                                <label>&nbspNational ID Card No:</label>
                                {!! Form::text('nid_card_no', Input::old('nid_card_no'),array('class' => 'form-control' , 'placeholder' => 'Enter national id card no' )) !!}
                            </div>
                            <div class="form-group">
                                <label>&nbspFather's Name:</label>
                                {!! Form::text('fathers_name', Input::old('fathers_name'),array('class' => 'form-control' , 'placeholder' => 'Enter Fathers Name' )) !!}

                            </div>
                        <div class="form-group">
                            <label>&nbspMother's Name:</label>
                            {!! Form::text('mothers_name', Input::old('mothers_name'),array('class' => 'form-control' , 'placeholder' => 'Enter Mothers Name' )) !!}

                        </div>
                        <div class="form-group">
                            <label>&nbspSpouse Name:</label>
                            {!! Form::text('spouse_name', Input::old('spouse_name'),array('class' => 'form-control' , 'placeholder' => 'Enter Spouse Name' )) !!}

                        </div>
                        <div class="form-group">
                            <label>&nbspNumber of Children:</label>
                            {!! Form::text('children_no', Input::old('children_no'),array('class' => 'form-control' , 'placeholder' => 'Enter total number of children' )) !!}

                        </div>
                        <div class="form-group">
                            <label>&nbspPresent Address/Mailing Address:</label>
                            {!! Form::text('present_address', Input::old('present_address'),array('class' => 'form-control' , 'placeholder' => 'Enter Present Address' )) !!}

                        </div>

                <div class="form-group">
                    <label>&nbspPermanent Address:</label>
                    {!! Form::text('permanent_address', Input::old('permanent_address'),array('class' => 'form-control' , 'placeholder' => 'Enter Parmanent Address' )) !!}

                </div>


                <div class="form-group">
                    <label>&nbspProfession:</label>
                    {!! Form::text('profession', Input::old('profession'),array('class' => 'form-control' , 'placeholder' => 'Enter Profession' )) !!}

                </div>

                <div class="form-group">
                    <label>&nbspDesignation:</label>
                    {!! Form::text('designation', Input::old('profession'),array('class' => 'form-control' , 'placeholder' => 'Enter current designation' )) !!}

                </div>


                <div class="form-group">
                    <label>&nbspPhone:</label>
                    {!! Form::text('phone', Input::old('phone'),array('class' => 'form-control' , 'placeholder' => 'Enter phone number' )) !!}

                </div>
                <div class="form-group">
                    <label>&nbspEmail:</label>
                    {!! Form::email('email', Input::old('email'),array('class' => 'form-control' , 'placeholder' => 'Enter email' )) !!}

                </div>

                <div class="form-group">
                    <label>&nbspBlood Group:</label>
                    {!! Form::text('blood_group', Input::old('blood_group'),array('class' => 'form-control' , 'placeholder' => 'Enter blood group' )) !!}

                </div>

                <div class="form-group">
                    <label>&nbspMember Fee:</label>
                    {!! Form::text('member_fee', Input::old('member_fee'),array('class' => 'form-control' , 'placeholder' => 'Enter Member Fee' )) !!}

                </div>






                <div class="form-group">
                    <label>&nbspDate:</label>
                    {!! Form::date('registration_date', Input::old('registration_date'),array('class' => 'form-control' , 'placeholder' => 'Enter todays registration date' )) !!}

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
