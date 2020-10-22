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
            <form action="" method="post">

                <div class="contact-form row">

                    <!-- std_name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="STD_NAME" placeholder="Full Name" required />
                    </div>
                    <!-- std_name ends  -->
                    
                    
                    <!-- profile pic starts  -->
                    <div class="form-group form-field" style="margin-top: 2rem;">
                        
                        <div class="input-group">

                            <div class="custom-file">
                                   
                                <input type="file" class='col-lg-8' id='image' onchange="readURL(this);">
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
                        <input id="name" class="input-text " type="text" name="NICK_NAME" placeholder="Nick Name" required />
                    </div>
                    <!-- nick name ends  -->


                    <!-- school name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SCHOOL_NAME" placeholder="School Name" required />
                    </div>
                    <!-- school name ends  -->


                    <!-- school district starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SCHOOL_DIS" placeholder="School District Name" required />
                    </div>
                    <!-- school district ends  -->


                    <!-- ssc pass starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SSC_PASS_YEAR" placeholder="SSC Pass Year" required />
                    </div>
                    <!-- ssc pass ends  -->


                    <!-- college name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="COLLAGE_NAME" placeholder="College Name" required />
                    </div>
                    <!-- college name ends  -->


                    <!-- hsc pass starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="HSC_PASS_YEAR" placeholder="HSC Pass Year" required />
                    </div>
                    <!-- hsc pass ends  -->


                    <!-- present profession starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="PRESENT_PROFESSION" placeholder="Present Profession" required />
                    </div>
                    <!-- present profession ends  -->


                    <!-- org name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="WORK_PLACE_NAME" placeholder="Organization Name" required />
                    </div>
                    <!-- org name ends  -->


                    <!-- working address starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="WORK_PLACE_ADDRESS" placeholder="Working Address" required />
                    </div>
                    <!-- working address ends  -->


                    <!-- spouse name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SPOUSE_NAME" placeholder="Spouse Name" required />
                    </div>
                    <!-- spouse name ends  -->


                    <!-- spouse job starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SPOUSE_JOB" placeholder="Spourse Working Place" required />
                    </div>
                    <!-- spouse job ends  -->


                    <!-- spouse blood group starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="SPOUSE_BLOOD" placeholder="Spouse Blood Group" required />
                    </div>
                    <!-- spouse blood group ends  -->

                    <!-- baby select starts  -->
                    <div class="form-field col-lg-6">
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
                                <input type="text" name="BABY_NAME" id="name1" class="form-control" placeholder="First Baby Name" />
                                <input type="text" name="BABY_AGE1" id="age1" class="form-control" placeholder="First Baby Age" />
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

                    </div>
                    <!-- baby select ends ends  -->


                    <!-- email starts  -->
                    <div class="form-field col-lg-6">
                        <input id="email" class="input-text" type="email" name="EMAIL" placeholder="Email Address" required />    
                    </div>
                    <!-- email ends  -->

                    <!-- phone starts  -->
                    <div class="form-field col-lg-6">
                        <input type="tel" name="PHONE" placeholder="Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="input-text" maxlength="12" title="Eleven digits code" required />
                    </div>
                    <!-- phone ends  -->


                    <!-- blood group starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="BLOOD_GROUP" placeholder="Blood Group" required />
                    </div>
                    <!-- blood group ends  -->
                    

                    <!-- emergency phone starts  -->
                    <div class="form-field col-lg-6">
                        <!-- <input id="name" class="input-text" type="text" name="" placeholder="Emergency Phone Number" required/> -->
                        <input type="tel" name="EMERGENCY_PHONE" placeholder="Emergency Mobile Number(01XXXXXXXXX)" pattern="[0-9]{11}" class="input-text" maxlength="12" title="Eleven digits code" required />
                    </div>
                    <!-- emergency phone ends  -->


                    <!-- invitator name starts  -->
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text" type="text" name="INVITATION_NAME" placeholder="Invitor Friend Name" required />         
                    </div>
                    <!-- invitator name ends  -->



                    <div class="form-field col-lg-12">
                        <input id="name" class="input-text" type="text" name="REMARK1" placeholder="Advice For Group Development" required />

                    </div>

                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="submit" name="">
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