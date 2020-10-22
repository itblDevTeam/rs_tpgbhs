<?PHP
ob_start();
if (isset($_POST['submit'])) {
    print "dfbsdjkbfkjhsdhfkjsdhfjkhsdfjkhdjkfhsdjkfhdjk";

    set_time_limit(300);
    include 'Connection.php';
    $p_STD_NAME = $_POST['p_STD_NAME'];
    $p_SCHOOL_NAME = $_POST['p_SCHOOL_NAME'];
    $p_SSC_PASS_YEAR = $_POST['p_SSC_PASS_YEAR'];
    $p_COLLAGE_NAME = $_POST['p_COLLAGE_NAME'];
    $p_HSC_PASS_YEAR = $_POST['p_HSC_PASS_YEAR'];
    $p_PRESENT_PROFESSION = $_POST['p_PRESENT_PROFESSION'];
    $p_WORK_PLACE_NAME = $_POST['p_WORK_PLACE_NAME'];
    $p_WORK_PLACE_ADDRESS = $_POST['p_WORK_PLACE_ADDRESS'];
    $p_SPOUSE_NAME = $_POST['p_SPOUSE_NAME'];
    $p_BABY_NAME = $_POST['p_BABY_NAME'];
    $p_EMAIL = $_POST['p_EMAIL'];
    $p_PHONE = $_POST['p_PHONE'];
    $p_BLOOD_GROUP = $_POST['p_BLOOD_GROUP'];
    $p_EMERGENCY_PHONE = $_POST['p_EMERGENCY_PHONE'];
    $p_SCHOOL_DIS = $_POST['p_SCHOOL_DIS'];
    $p_SPOUSE_JOB = $_POST['p_SPOUSE_JOB'];
    $p_SPOUSE_BLOOD = $_POST['p_SPOUSE_BLOOD'];
    $p_BABY_NAME2 = $_POST['p_BABY_NAME2'];
    $p_BABY_NAME3 = $_POST['p_BABY_NAME3'];
    $p_BABY_NAME4 = $_POST['p_BABY_NAME4'];
    $p_BABY_NAME5 = $_POST['p_BABY_NAME5'];
    $p_BABY_AGE1 = $_POST['p_BABY_AGE1'];
    $p_BABY_AGE2 = $_POST['p_BABY_AGE2'];
    $p_BABY_AGE3 = $_POST['p_BABY_AGE3'];
    $p_BABY_AGE4 = $_POST['p_BABY_AGE4'];
    $p_BABY_AGE5 = $_POST['p_BABY_AGE5'];
    $p_TOTAL_BABY = $_POST['p_BABY_TOTAL'];
    $p_NICK_NAME = $_POST['p_NICK_NAME'];
    $p_INVITATION_NAME = "";
    $p_REMARK1 = "";
    $p_PHOTO = $_POST['p_PHOTO'];

    $returnval = 0;
    $stid = oci_parse($conn, "begin APPS_INSERT_DATA.APPS_SET_STUDENT_DTL(:o_status,:p_STD_NAME,:p_SCHOOL_NAME,:p_SSC_PASS_YEAR,:p_COLLAGE_NAME
,:p_HSC_PASS_YEAR,:p_PRESENT_PROFESSION,:p_WORK_PLACE_NAME,:p_WORK_PLACE_ADDRESS,:p_SPOUSE_NAME,:p_BABY_NAME,:p_EMAIL,:p_PHONE,:p_BLOOD_GROUP,:p_EMERGENCY_PHONE,:p_SCHOOL_DIS,:p_SPOUSE_JOB,:p_SPOUSE_BLOOD,:p_BABY_NAME2,:p_BABY_NAME3,:p_BABY_NAME4,:p_BABY_NAME5,:p_BABY_AGE1,:p_BABY_AGE2,:p_BABY_AGE3,:p_BABY_AGE4,:p_BABY_AGE5,:p_TOTAL_BABY,:p_NICK_NAME,:p_INVITATION_NAME,:p_REMARK1,:p_PHOTO); end;");


    oci_bind_by_name($stid, ":o_status", $returnval, -1, SQLT_INT);
    oci_bind_by_name($stid, ":p_STD_NAME", $p_STD_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SCHOOL_NAME", $p_SCHOOL_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SSC_PASS_YEAR", $p_SSC_PASS_YEAR, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_COLLAGE_NAME", $p_COLLAGE_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_HSC_PASS_YEAR", $p_HSC_PASS_YEAR, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_PRESENT_PROFESSION", $p_PRESENT_PROFESSION, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_WORK_PLACE_NAME", $p_WORK_PLACE_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_WORK_PLACE_ADDRESS", $p_WORK_PLACE_ADDRESS, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SPOUSE_NAME", $p_SPOUSE_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_NAME", $p_BABY_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_EMAIL", $p_EMAIL, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_PHONE", $p_PHONE, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BLOOD_GROUP", $p_BLOOD_GROUP, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_EMERGENCY_PHONE", $p_EMERGENCY_PHONE, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SCHOOL_DIS", $p_SCHOOL_DIS, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SPOUSE_JOB", $p_SPOUSE_JOB, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_SPOUSE_BLOOD", $p_SPOUSE_BLOOD, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_NAME2", $p_BABY_NAME2, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_NAME3", $p_BABY_NAME3, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_NAME4", $p_BABY_NAME4, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_NAME5", $p_BABY_NAME5, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_AGE1", $p_BABY_AGE1, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_AGE2", $p_BABY_AGE2, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_AGE3", $p_BABY_AGE3, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_AGE4", $p_BABY_AGE4, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_BABY_AGE5", $p_BABY_AGE5, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_TOTAL_BABY", $p_TOTAL_BABY, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_NICK_NAME", $p_NICK_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_INVITATION_NAME", $p_INVITATION_NAME, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_REMARK1", $p_REMARK1, -1, SQLT_CHR);
    oci_bind_by_name($stid, ":p_PHOTO", $p_PHOTO, -1, SQLT_CHR);

    oci_execute($stid);

    print $returnval;

    oci_free_statement($stid);
    oci_close($conn);
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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

        /* .contact-form .input-text {
            display: block;
            width: 100%;
            height: 3.6rem;
            border-width: 0 0 2px 0;
            border-color: #5543ca;
            font-size: 1.8em;
            line-height: 2.6em;
            font-weight: 400;
        } */

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

            <form action="" method="post">

                <div class="contact-form row">

                    <!-- std_name starts  -->
                    <div class="form-field col-lg-6">
                        <div class="form-group">
                            
                            <input id="name" class="form-control" type="text" name="p_STD_NAME" placeholder="Full Name" required />
                            
                        </div>
                    </div>
                    <!-- std_name ends  -->


                    <!-- profile pic starts  -->
                    <div class="form-group form-field" style="margin-top: 2rem;">

                        <div class="input-group">

                            <div class="custom-file">

                                <input type="file" class='col-lg-8' name="p_PHOTO" id='image' onchange="readURL(this);">
                                <!-- <label for="image"></label> -->
                                <img id='blah' class='mt-3 col-lg-4 mb-4 ' src="" alt="">

                                <!-- <input type="file" style="display: inline-block;" class="custom-file-input col-lg-8" id="image" aria-describedby="inputGroupFileAddon01" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                                <label class="custom-file-label" for="image">Choose file</label>
                                
                                <img id="blah" class="m-4 col-lg-4" src="" alt="" /> -->
                            </div>

                        </div>

                    </div>
                    <!-- profile pic ends  -->



                    <!-- nick name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control " type="text" name="p_NICK_NAME" placeholder="Nick Name" required />
                    </div>
                    <!-- nick name ends  -->


                    <!-- school name starts  -->
                    <div class="form-field col-lg-6 mb-2">
                        <input id="name" class="form-control" type="text" name="p_SCHOOL_NAME" placeholder="School Name" required />
                    </div>
                    <!-- school name ends  -->


                    <!-- school district starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_SCHOOL_DIS" placeholder="School District Name" required />
                    </div>
                    <!-- school district ends  -->


                    <!-- ssc pass starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_SSC_PASS_YEAR" placeholder="SSC Pass Year" required />
                    </div>
                    <!-- ssc pass ends  -->


                    <!-- college name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_COLLAGE_NAME" placeholder="College Name" required />
                    </div>
                    <!-- college name ends  -->


                    <!-- hsc pass starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_HSC_PASS_YEAR" placeholder="HSC Pass Year" required />
                    </div>
                    <!-- hsc pass ends  -->


                    <!-- present profession starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_PRESENT_PROFESSION" placeholder="Present Profession" required />
                    </div>
                    <!-- present profession ends  -->


                    <!-- org name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_WORK_PLACE_NAME" placeholder="Organization Name" required />
                    </div>
                    <!-- org name ends  -->


                    <!-- working address starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_WORK_PLACE_ADDRESS" placeholder="Working Address" required />
                    </div>
                    <!-- working address ends  -->


                    <!-- spouse name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_SPOUSE_NAME" placeholder="Spouse Name" required />
                    </div>
                    <!-- spouse name ends  -->


                    <!-- spouse job starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_SPOUSE_JOB" placeholder="Spourse Working Place" required />
                    </div>
                    <!-- spouse job ends  -->


                    <!-- spouse blood group starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_SPOUSE_BLOOD" placeholder="Spouse Blood Group" required />
                    </div>
                    <!-- spouse blood group ends  -->

                    <!-- baby select starts  -->
                    <div class="form-field col-lg-6">
                        <div class="form-group">
                            <!-- <label for="baby_info">
                                <p class="text"> <b style="color:grey">No. Of Baby</b> </p>
                            </label> -->
                            <select class="form-control mb-4" id="baby_info" onchange="getSelectValue();" name="p_BABY_TOTAL">
                                <option>No. Of Baby</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <div class="baby1 form-inline" id='baby1' style="display: none;">
                                <input type="text" name="p_BABY_NAME" id="name1" class="form-control mr-2 mb-2" placeholder="First Baby Name" />
                                <input type="text" name="p_BABY_AGE1" id="age1" class="form-control mr-2 mb-2" placeholder="First Baby Age" />
                            </div>
                            <div class="baby2 form-inline" id='baby2' style="display: none;">
                                <input type="text" name="p_BABY_NAME2" id="name2" class="form-control mr-2 mb-2" placeholder="Second Baby Name" />
                                <input type="text" name="p_BABY_AGE2" id="age2" class="form-control mr-2 mb-2" placeholder="Second Baby Age" />
                            </div>
                            <div class="baby3 form-inline" id='baby3' style="display: none;">
                                <input type="text" name="p_BABY_NAME3" id="name3" class="form-control mr-2 mb-2" placeholder="Third Baby Name" />
                                <input type="text" name="p_BABY_AGE3" id="age3" class="form-control mr-2 mb-2" placeholder="Third Baby Age" />
                            </div>
                            <div class="baby4 form-inline" id='baby4' style="display: none;">
                                <input type="text" name="p_BABY_NAME4" id="name4" class="form-control mr-2 mb-2" placeholder="Fourth Baby Name" />
                                <input type="text" name="p_BABY_AGE4" id="age4" class="form-control mr-2 mb-2" placeholder="Fourth Baby Age" />
                            </div>
                            <div class="baby5 form-inline" id='baby5' style="display: none;">
                                <input type="text" name="p_BABY_NAME5" id="name5" class="form-control mr-2 mb-2" placeholder="Fifth Baby Name" />
                                <input type="text" name="p_BABY_AGE5" id="age5" class="form-control mr-2 mb-2" placeholder="Fifth Baby Age" />
                            </div>

                        </div>

                    </div>
                    <!-- baby select ends ends  -->


                    <!-- email starts  -->
                    <div class="form-field col-lg-6">
                        <input id="email" class="form-control" type="email" name="p_EMAIL" placeholder="Email Address" required />
                    </div>
                    <!-- email ends  -->

                    <!-- phone starts  -->
                    <div class="form-field col-lg-6">
                        <input type="tel" name="p_PHONE" placeholder="Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="form-control" maxlength="12" title="Eleven digits code" required />
                    </div>
                    <!-- phone ends  -->


                    <!-- blood group starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="form-control" type="text" name="p_BLOOD_GROUP" placeholder="Blood Group" required />
                    </div>
                    <!-- blood group ends  -->


                    <!-- emergency phone starts  -->
                    <div class="form-field col-lg-6">
                        <!-- <input id="name" class="input-text" type="text" name="" placeholder="Emergency Phone Number" required/> -->
                        <input type="tel" name="p_EMERGENCY_PHONE" placeholder="Emergency Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="form-control" maxlength="12" title="Eleven digits code" required />
                    </div>
                    <!-- emergency phone ends  -->




                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="submit" name="submit">
                    </div>
                </div>
            </form>


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
                        .width(80)
                        .height(80);
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