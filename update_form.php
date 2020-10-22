<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        .header {
            max-width: 80rem;
            /* height: 50rem; */
            margin: 5rem auto;
            position: relative;
            box-shadow: 0 10px 30px 0px rgba(0, 0, 0, 0.1);
        }

        .header .title {
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.3em;
            font-size: 3em;
            line-height: 48px;
            padding-bottom: 2rem;
            color: #5543ca;
            background: linear-gradient(to right, #f4524d 0%, #5543ca 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact-form .form-field {
            position: relative;
            margin: 1.5rem 0;
        }

        .contact-form .input-text {
            display: block;
            width: 100%;
            height: 3.6rem;
            border-width: 0 0 2px 0;
            border-color: #5543ca;
            font-size: 1.8em;
            line-height: 2.6em;
            font-weight: 400;
        }

        /* .contact-form .input-text:focus + .label,
  .contact-form .input-text.not-empty + .label{
      transform: translateY(-2.5rem);
  } */

        .contact-form .input-text:focus {
            outline: none;
        }

        .contact-form .label {
            position: absolute;
            left: 2rem;
            bottom: 1.1rem;
            font-size: 1.4em;
            line-height: 2.6rem;
            font-weight: 400;
            color: #5543ca;
            cursor: text;
            transition: 0.2s ease-in-out;
        }


        .contact-form .submit-btn {
            display: inline-block;
            background-image: linear-gradient(125deg, #a72879, #064497);
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-size: 1.4em;
            padding: 0.8rem 1.6rem;
            border: none;
            width: 20rem;
            cursor: pointer;
        }


        .text {
            font-size: 1.4rem;
        }

        select {
            font-size: 5rem;
        }
    </style>

</head>

<body>
    <section class="header">
        <h1 class="title">TPGBHS</h1>

        <div class="container">
            <?php
            include 'Connection.php';
            // error_reporting(0);
            set_time_limit(1000);

            if (isset($_GET['id'])) {
                $TP_STD_ID = $_GET['id'];
            }
            // echo $TP_STD_ID;

            // execute query starts
            $curs = oci_new_cursor($conn);

            $stid = oci_parse($conn, "begin APPS_SELECTED_DATA.APPS_GET_ALL_STUDENT_DTLS(:cur_data,:TP_STD_ID); end;");


            oci_bind_by_name($stid, ":cur_data", $curs, -1, OCI_B_CURSOR);
            oci_bind_by_name($stid, ":TP_STD_ID", $TP_STD_ID, -1, SQLT_INT);
            //  oci_bind_by_name($stid, ":edtKeyword", $TP_EDIT_KEY_WORD, -1, SQLT_CHR);

            oci_execute($stid);
            oci_execute($curs);
            // execute query ends

            // store fetch data in variable array starts 
            while (($row = oci_fetch_array($curs, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                $output[] = $row;
            }
            // store fetch data in variable array ends

            // echo $output[0]['COLLAGE_NAME'];

            for ($i = 0; $i < count($output); $i++) { ?>

                <form action="" method="post">

                    <div class="contact-form row">

                        <!-- std_name starts  -->
                        <div class="form-field col-lg-6">
														<label for="name"><b><h3>Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="STD_NAME" value="<?php echo $output[$i]['STD_NAME'] ?>" placeholder="Full Name" autocomplete="off" required />
                        </div>
                        <!-- std_name ends  -->


                        <!-- profile pic starts  -->
                        <div class="form-group form-field" style="margin-top: 2rem;">

                            <div class="input-group">

                                <div class="custom-file">

                                    <input type="file" class='col-lg-8' name="PHOTO" id='image' onchange="readURL(this);">
                                    <!-- <label for="image"></label> -->
                                    <img id='blah' class='mt-4 col-lg-4 ' src="" alt="">

                                    <!-- <input type="file" style="display: inline-block;" class="custom-file-input col-lg-8" id="image" aria-describedby="inputGroupFileAddon01" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                <label class="custom-file-label" for="image">Choose file</label>
                
                <img id="blah" class="m-4 col-lg-4" src="" alt="" /> -->
                                </div>

                            </div>

                        </div>
                        <!-- profile pic ends  -->



                        <!-- nick name starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Nick Name :</h3></b></label>
                            <input id="name" class="input-text " type="text" name="NICK_NAME" value="<?php echo $output[$i]['NICK_NAME'] ?>" placeholder="Nick Name" autocomplete="off" required />
                        </div>
                        <!-- nick name ends  -->


                        <!-- school name starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>School Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SCHOOL_NAME" value="<?php echo $output[$i]['SCHOOL_NAME'] ?>" placeholder="School Name" autocomplete="off" required />
                        </div>
                        <!-- school name ends  -->


                        <!-- school district starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>School District Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SCHOOL_DIS" value="<?php echo $output[$i]['SCHOOL_DIS'] ?>" placeholder="School District Name" autocomplete="off" required />
                        </div>
                        <!-- school district ends  -->


                        <!-- ssc pass starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>SSC Pass Year :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SSC_PASS_YEAR" value="<?php echo $output[$i]['SSC_PASS_YEAR'] ?>" placeholder="SSC Pass Year" autocomplete="off" required />
                        </div>
                        <!-- ssc pass ends  -->


                        <!-- college name starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>College Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="COLLAGE_NAME" value="<?php echo $output[$i]['COLLAGE_NAME'] ?>" placeholder="College Name" autocomplete="off" required />
                        </div>
                        <!-- college name ends  -->


                        <!-- hsc pass starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>HSC Pass Year :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="HSC_PASS_YEAR" value="<?php echo $output[$i]['HSC_PASS_YEAR'] ?>" placeholder="HSC Pass Year" autocomplete="off" required />
                        </div>
                        <!-- hsc pass ends  -->


                        <!-- present profession starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Present Profession :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="PRESENT_PROFESSION" value="<?php echo $output[$i]['PRESENT_PROFESSION'] ?>" placeholder="Present Profession" autocomplete="off" required />
                        </div>
                        <!-- present profession ends  -->


                        <!-- org name starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Work Place Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="WORK_PLACE_NAME" value="<?php echo $output[$i]['WORK_PLACE_NAME'] ?>" placeholder="Organization Name" autocomplete="off" required />
                        </div>
                        <!-- org name ends  -->


                        <!-- working address starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Work Place Address :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="WORK_PLACE_ADDRESS" value="<?php echo $output[$i]['WORK_PLACE_ADDRESS'] ?>" placeholder="Working Address" autocomplete="off" required />
                        </div>
												<!-- working address ends  -->
												
												<!-- blood group starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Blood Group :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="BLOOD_GROUP" value="<?php echo $output[$i]['BLOOD_GROUP'] ?>" placeholder="Blood Group" autocomplete="off" required />
                        </div>
                        <!-- blood group ends  -->


                        <!-- spouse name starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Spourse Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SPOUSE_NAME" value="<?php echo $output[$i]['SPOUSE_NAME'] ?>" placeholder="Spouse Name" autocomplete="off" required />
                        </div>
                        <!-- spouse name ends  -->


                        <!-- spouse job starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Spourse Job :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SPOUSE_JOB" value="<?php echo $output[$i]['SPOUSE_JOB'] ?>" placeholder="Spourse Working Place" autocomplete="off" required />
                        </div>
                        <!-- spouse job ends  -->


                        <!-- spouse blood group starts  -->
                        <div class="form-field col-lg-6">
												<label for="name"><b><h3>Spourse Blood :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="SPOUSE_BLOOD" value="<?php echo $output[$i]['SPOUSE_BLOOD'] ?>" placeholder="Spouse Blood Group" autocomplete="off" required />
                        </div>
                        <!-- spouse blood group ends  -->

												<!-- baby select starts  -->
												
												<div class="form-field col-lg-6">
												<label for="TOTAL_BABY"><b><h3>Total Baby :</h3></b></label>
                            <input id="TOTAL_BABY" class="input-text" type="text" name="TOTAL_BABY" value="<?php echo $output[$i]['TOTAL_BABY'] ?>" placeholder="TOTAL BABY" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_NAME"><b><h3>Baby1 Name :</h3></b></label>
                            <input id="BABY_NAME" class="input-text" type="text" name="BABY_NAME" value="<?php echo $output[$i]['BABY_NAME'] ?>" placeholder="BABY1 NAME" autocomplete="off" required />

												</div>
												<div class="form-field col-lg-6">
												<label for="BABY_AGE1"><b><h3>Baby1 Age :</h3></b></label>
                            <input id="BABY_AGE1" class="input-text" type="text" name="BABY_AGE1" value="<?php echo $output[$i]['BABY_AGE1'] ?>" placeholder="BABY1 AGE" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_NAME2"><b><h3>Baby Name 2 :</h3></b></label>
                            <input id="BABY_NAME2" class="input-text" type="text" name="BABY_NAME2" value="<?php echo $output[$i]['BABY_NAME2'] ?>" placeholder="BABY NAME1" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_AGE2"><b><h3>Baby2 Age :</h3></b></label>
                            <input id="BABY_AGE2" class="input-text" type="text" name="BABY_AGE2" value="<?php echo $output[$i]['BABY_AGE2'] ?>" placeholder="BABY2 AGE" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_NAME3"><b><h3>Baby Name 3 :</h3></b></label>
                            <input id="BABY_NAME3" class="input-text" type="text" name="BABY_NAME3" value="<?php echo $output[$i]['BABY_NAME3'] ?>" placeholder="BABY NAME2" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_AGE3"><b><h3>Baby3 Age :</h3></b></label>
                            <input id="BABY_AGE3" class="input-text" type="text" name="BABY_AGE3" value="<?php echo $output[$i]['BABY_AGE3'] ?>" placeholder="BABY3 AGE" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_NAME4"><b><h3>Baby Name 4 :</h3></b></label>
                            <input id="BABY_NAME4" class="input-text" type="text" name="BABY_NAME4" value="<?php echo $output[$i]['BABY_NAME4'] ?>" placeholder="BABY NAME3" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_AGE4"><b><h3>Baby4 Age :</h3></b></label>
                            <input id="BABY_AGE4" class="input-text" type="text" name="BABY_AGE4" value="<?php echo $output[$i]['BABY_AGE4'] ?>" placeholder="BABY4 AGE" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_NAME5"><b><h3>Baby Name 5 :</h3></b></label>
                            <input id="BABY_NAME5" class="input-text" type="text" name="BABY_NAME5" value="<?php echo $output[$i]['BABY_NAME5'] ?>" placeholder="BABY NAME4" autocomplete="off" required />

												</div>

												<div class="form-field col-lg-6">
												<label for="BABY_AGE5"><b><h3>Baby5 Age :</h3></b></label>
                            <input id="BABY_AGE5" class="input-text" type="text" name="BABY_AGE5" value="<?php echo $output[$i]['BABY_AGE5'] ?>" placeholder="BABY5 AGE" autocomplete="off" required />

												</div>





												
												
												
												<!-- <div class="form-field col-lg-6">
                            <div class="form-group">
                                <label for="baby_info">
                                    <p class="text"> <b style="color:grey">No. Of Baby</b> </p>
                                </label>
                                <select class="form-control mb-4" id="baby_info" onchange="getSelectValue();" name="TOTAL_BABY">
                                    <option>Select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <div class="baby1 form-inline" id='baby1' style="display: none;">
                                    <input type="text" name="BABY_NAME" id="name1" class="form-control" value="<?php echo $output[$i]['BABY_NAME'] ?>" placeholder="First Baby Name" />
                                    <input type="text" name="BABY_AGE1" id="age1" class="form-control" value="<?php echo $output[$i]['BABY_AGE1'] ?>" placeholder="First Baby Age" />
                                </div>
                                <div class="baby2 form-inline" id='baby2' style="display: none;">
                                    <input type="text" name="BABY_NAME2" id="name2" class="form-control" placeholder="Second Baby Name" />
                                    <input type="text" name="BABY_AGE2" id="age2" class="form-control" placeholder="Second Baby Age" />
                                </div>
                                <div class="baby3 form-inline" id='baby3' style="display: none;">
                                    <input type="text" name="BABY_NAME3" id="name3" class="form-control" placeholder="Third Baby Name" />
                                    <input type="text" name="BABY_AGE3" id="age3" class="form-control" placeholder="Third Baby Age" />
                                </div>
                                <div class="baby4 form-inline" id='baby4' style="display: none;">
                                    <input type="text" name="BABY_NAME4" id="name4" class="form-control" placeholder="Fourth Baby Name" />
                                    <input type="text" name="BABY_AGE4" id="age4" class="form-control" placeholder="Fourth Baby Age" />
                                </div>
                                <div class="baby5 form-inline" id='baby5' style="display: none;">
                                    <input type="text" name="BABY_NAME5" id="name5" class="form-control" placeholder="Fifth Baby Name" />
                                    <input type="text" name="BABY_AGE5" id="age5" class="form-control" placeholder="Fifth Baby Age" />
                                </div>

                            </div>

												</div> -->
												
												<!-- <div class="form-field col-lg-6">
												<label for="email"><b><h3>Email :</h3></b></label>
                            <input id="email" class="input-text" type="text" name="EMAIL" value="<?php echo $output[$i]['TOTAL_BABY'] ?>" placeholder="Email Address" autocomplete="off" required />
                        </div> -->

                        <!-- baby select ends ends  -->


                        <!-- email starts  -->
                        <div class="form-field col-lg-6">
												<label for="email"><b><h3>Email :</h3></b></label>
                            <input id="email" class="input-text" type="email" name="EMAIL" value="<?php echo $output[$i]['EMAIL'] ?>" placeholder="Email Address" autocomplete="off" required />
                        </div>
                        <!-- email ends  -->

                        <!-- phone starts  -->
                        <div class="form-field col-lg-6">
												<label for="tel"><b><h3>Mobile No. :</h3></b></label>
                            <input type="tel" id="tel" name="PHONE" value="<?php echo $output[$i]['PHONE'] ?>" placeholder="Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="input-text" maxlength="11" title="Eleven digits code" autocomplete="off" required />
                        </div>
                        <!-- phone ends  -->


                        


                        <!-- emergency phone starts  -->
                        <div class="form-field col-lg-6">
														<!-- <input id="name" class="input-text" type="text" name="" placeholder="Emergency Phone Number" required/> -->
														<label for="tel"><b><h3>Emargency Mobile No. :</h3></b></label>
                            <input type="tel" id="tel" name="EMERGENCY_PHONE" value="<?php echo $output[$i]['EMERGENCY_PHONE'] ?>" placeholder="Emergency Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="input-text" maxlength="11" title="Eleven digits code" autocomplete="off" required />
                        </div>
                        <!-- emergency phone ends  -->


                        <!-- invitator name starts  -->
                        <div class="form-field col-lg-6" style="display: none;">
												<label for="name"><b><h3>Invitation Name :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="INVITATION_NAME" value="<?php echo $output[$i]['INVITATION_NAME'] ?>" placeholder="Invitor Friend Name" autocomplete="off" required />
                        </div>
                        <!-- invitator name ends  -->



                        <div class="form-field col-lg-6" style="display: none;">
												<label for="name"><b><h3>Remark :</h3></b></label>
                            <input id="name" class="input-text" type="text" name="REMARK1" value="<?php echo $output[$i]['REMARK1'] ?>" placeholder="Advice For Group Development" autocomplete="off" required />

												</div>
												 
												<div class="form-field col-lg-6" style="display: none;">
												<label for="STATUS"><b><h3>STATUS :</h3></b></label>
                            <input id="STATUS" class="input-text" type="text" name="STATUS" value="<?php echo $output[$i]['STATUS'] ?>" placeholder="Advice For Group Development" autocomplete="off" required />

												</div>


                        <div class="form-field col-lg-12">
                            <input class="submit-btn" type="submit" value="submit" name="submit">
                        </div>
                    </div>
                </form>


                <!-- end for loop php  -->
						<?php } 
							if(isset($_POST['submit'])){

								// grab value from submit data from url starts
								//$TP_STD_ID = $_POST['STD_ID'];
								$TP_STD_NAME = $_POST['STD_NAME'];
								$TP_SCHOOL_NAME = $_POST['SCHOOL_NAME'];
								$TP_SSC_PASS_YEAR = $_POST['SSC_PASS_YEAR'];
								$TP_COLLAGE_NAME = $_POST['COLLAGE_NAME'];
								$TP_HSC_PASS_YEAR = $_POST['HSC_PASS_YEAR'];
								$TP_PRESENT_PROFESSION = $_POST['PRESENT_PROFESSION'];
								$TP_WORK_PLACE_NAME = $_POST['WORK_PLACE_NAME'];
								$TP_WORK_PLACE_ADDRESS = $_POST['WORK_PLACE_ADDRESS'];
								$TP_SPOUSE_NAME = $_POST['SPOUSE_NAME'];
								$TP_BABY_NAME = $_POST['BABY_NAME'];
								$TP_EMAIL = $_POST['EMAIL'];
								$TP_PHONE = $_POST['PHONE'];
								$TP_BLOOD_GROUP = $_POST['BLOOD_GROUP'];
								$TP_EMERGENCY_PHONE = $_POST['EMERGENCY_PHONE'];
								$TP_SCHOOL_DIS = $_POST['SCHOOL_DIS'];
								$TP_SPOUSE_JOB = $_POST['SPOUSE_JOB'];
								$TP_SPOUSE_BLOOD = $_POST['SPOUSE_BLOOD'];
								$TP_BABY_NAME2 = $_POST['BABY_NAME2'];
								$TP_BABY_NAME3 = $_POST['BABY_NAME3'];
								$TP_BABY_NAME4 = $_POST['BABY_NAME4'];
								$TP_BABY_NAME5 = $_POST['BABY_NAME5'];
								$TP_BABY_AGE1 = $_POST['BABY_AGE1'];
								$TP_BABY_AGE2 = $_POST['BABY_AGE2'];
								$TP_BABY_AGE3 = $_POST['BABY_AGE3'];
								$TP_BABY_AGE4 = $_POST['BABY_AGE4'];
								$TP_BABY_AGE5 = $_POST['BABY_AGE5'];
								$TP_TOTAL_BABY = $_POST['TOTAL_BABY'];
								$TP_NICK_NAME = $_POST['NICK_NAME'];
								$TP_INVITATION_NAME = $_POST['INVITATION_NAME'];
								$TP_REMARK1 = $_POST['REMARK1'];
								$TP_PHOTO = $_POST['PHOTO'];
								$TP_STATUS = $_POST['STATUS'];
								
								
								
								// grab value from submit data from url ends


								// execute query starts
								$returnval=0;

								$stid = oci_parse($conn, "begin APPS_UPDATE_DATA.APPS_UPDATE_STUDENT_DTL(:o_status,:TP_STD_ID,:TP_STD_NAME,:TP_SCHOOL_NAME,:TP_SSC_PASS_YEAR,:TP_COLLAGE_NAME,:TP_HSC_PASS_YEAR,:TP_PRESENT_PROFESSION,:TP_WORK_PLACE_NAME,:TP_WORK_PLACE_ADDRESS,:TP_SPOUSE_NAME,:TP_BABY_NAME,:TP_EMAIL,:TP_PHONE,:TP_BLOOD_GROUP,:TP_EMERGENCY_PHONE,:TP_SCHOOL_DIS,:TP_SPOUSE_JOB,:TP_SPOUSE_BLOOD,:TP_BABY_NAME2,:TP_BABY_NAME3,:TP_BABY_NAME4,:TP_BABY_NAME5,:TP_BABY_AGE1,:TP_BABY_AGE2,:TP_BABY_AGE3,:TP_BABY_AGE4,:TP_BABY_AGE5,:TP_TOTAL_BABY,:TP_NICK_NAME,:TP_INVITATION_NAME,:TP_REMARK1,:TP_PHOTO,:TP_STATUS); end;");


								oci_bind_by_name($stid, ":o_status", $returnval, -1, SQLT_INT);
								oci_bind_by_name($stid, ":TP_STD_ID", $TP_STD_ID, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_STD_NAME", $TP_STD_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SCHOOL_NAME", $TP_SCHOOL_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SSC_PASS_YEAR", $TP_SSC_PASS_YEAR, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_COLLAGE_NAME", $TP_COLLAGE_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_HSC_PASS_YEAR", $TP_HSC_PASS_YEAR, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_PRESENT_PROFESSION", $TP_PRESENT_PROFESSION, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_WORK_PLACE_NAME", $TP_WORK_PLACE_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_WORK_PLACE_ADDRESS", $TP_WORK_PLACE_ADDRESS, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SPOUSE_NAME", $TP_SPOUSE_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_NAME", $TP_BABY_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_EMAIL", $TP_EMAIL, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_PHONE", $TP_PHONE, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BLOOD_GROUP", $TP_BLOOD_GROUP, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_EMERGENCY_PHONE", $TP_EMERGENCY_PHONE, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SCHOOL_DIS", $TP_SCHOOL_DIS, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SPOUSE_JOB", $TP_SPOUSE_JOB, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_SPOUSE_BLOOD", $TP_SPOUSE_BLOOD, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_NAME2", $TP_BABY_NAME2, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_NAME3", $TP_BABY_NAME3, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_NAME4", $TP_BABY_NAME4, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_NAME5", $TP_BABY_NAME5, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_AGE1", $TP_BABY_AGE1, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_AGE2", $TP_BABY_AGE2, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_AGE3", $TP_BABY_AGE3, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_AGE4", $TP_BABY_AGE4, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_BABY_AGE5", $TP_BABY_AGE5, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_TOTAL_BABY", $TP_TOTAL_BABY, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_NICK_NAME", $TP_NICK_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_INVITATION_NAME", $TP_INVITATION_NAME, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_REMARK1", $TP_REMARK1, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_PHOTO", $TP_PHOTO, -1, SQLT_CHR);
								oci_bind_by_name($stid, ":TP_STATUS", $TP_STATUS, -1, SQLT_CHR);
								
								

								oci_execute($stid);
								// execute query ends
								// print $returnval;

								if($returnval){
									echo '<script language="javascript">';
									echo 'alert("Data Updated Successfully")';
									echo '</script>';
								}

								oci_free_statement($stid);
								oci_close($conn);

							}
						
						?>



            

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script>
        function getSelectValue() {
            var selectedValue = document.getElementById("baby_info").value;
            var baby1 = document.getElementById('baby1');
            var baby2 = document.getElementById('baby2');
            var baby3 = document.getElementById('baby3');
            var baby4 = document.getElementById('baby4');
            var baby5 = document.getElementById('baby5');
            // alert(selectedValue);
            console.log(selectedValue);

            if (selectedValue == '1') {
                baby1.style.display = 'block';
                baby2.style.display = 'none';
                baby3.style.display = 'none';
                baby4.style.display = 'none';
                baby5.style.display = 'none';

            } else if (selectedValue == '2') {
                baby1.style.display = 'block';
                baby2.style.display = 'block';
                baby3.style.display = 'none';
                baby4.style.display = 'none';
                baby5.style.display = 'none';
            } else if (selectedValue == '3') {
                baby1.style.display = 'block';
                baby2.style.display = 'block';
                baby3.style.display = 'block';
                baby4.style.display = 'none';
                baby5.style.display = 'none';
            } else if (selectedValue == '4') {
                baby1.style.display = 'block';
                baby2.style.display = 'block';
                baby3.style.display = 'block';
                baby4.style.display = 'block';
                baby5.style.display = 'none';
            } else if (selectedValue == '5') {
                baby1.style.display = 'block';
                baby2.style.display = 'block';
                baby3.style.display = 'block';
                baby4.style.display = 'block';
                baby5.style.display = 'block';
            }




            // document.getElementById('tbl').style.display = 'block';
        }
        // console.log(num.selectedValue);
    </script>

</body>

</html>