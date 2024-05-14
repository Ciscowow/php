<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: "Oswald", sans-serif;
            background-color: #323949; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container1 {
            position: relative;
            width: 100%;
            max-width: 1000px;
            min-height: 1100px;
            margin: 50px;
            display: grid;
            grid-template-columns: 1fr 2fr;
        }
        .container1 .left {
            position: relative;
            background-color: #242530;
            padding: 10px;
            display: flex;
            place-content: center;
        }
        .container1 .right {
            position: relative;
            background-color: #4c5265;
            padding: 10px;
        }
        img {
            margin-top: 25px;
            margin-left: 10px;
            width: 250px;
            height: 250px;
            border-radius: 60%;
        }

        .contactinfo {
            color: white;
            font-size: 20px;
        }
        .contactinfo ul {
            padding: 0px;
            margin-top: 20px;
            line-height: 40px;
            align-items: center;
            list-style-type: none;
        }
        .contactinfo h3 {
            margin-top: 20px;
            margin-left: 40px;
            font-size: 30px;
        }
        .skills {
            color: white;
            font-size: 20px;
        }

        .skills ul {
            padding: 0px;
            margin-top: 20px;
            line-height: 40px;
            align-items: center;
            list-style-type: none;
        }
        .skills h4 {
            margin-top: 20px;
            margin-left: 70px;
            font-size: 30px;
        }
        .hobbies {
            color: white;
            font-size: 20px;
        }

        .hobbies ul {
            padding: 0px;
            margin-top: 20px;
            margin-left: 30px;
            line-height: 40px;
            list-style: square;
            align-items: center;
            
        }

        li::marker {
            color: #474973;
        }

        .hobbies h5 {
            margin-top: 5px;
            margin-left: 57px;
            font-size: 30px;
        }

        .hobbies .test {
            margin-top: 4px;
            margin-left: 2px;
        }

        .icon {
            color: #474973;
            margin-right: 2px;
        }

        .test {
            margin-left: 10px;
            vertical-align: middle;
        }

        .title {
            background-color: #323949;
            border: 2px solid white;
            border-radius: 20px;
            padding: 10px;
            width: fit-content; 
            margin: auto;
        }

        .name {
            color: white;
            border-bottom: 2px #474973;
        }

        .name h1 {
            font-size: 65px;
            margin-left: 10px;
        }
        .name h2 {
            color: white;
            margin-top: -40px;
            margin-left: 10px;
            background-color: #242530; 
            width: 350px;
            padding: 4px;
            text-align: center;
            border-radius: 20px;
            font-size: 40px;
        }

        .education {
            font-size: 20px;
            color: white;
        }
        .education h1 {
            font-size: 35px;
            margin-top: 70px;
            border-bottom: 2px solid white;
            border-spacing: 1px;
            padding: 2px;
        }
        .school {
            margin-left: 40px;
        }

        .level {
            font-size: 25px;
            font-weight: bold;
            list-style: none;
        }
        .year { 
            display: inline-block;
            margin-top: -4px;
            border-radius: 50px;
            background-color: #323949;
            text-align: center;
            color: white;
            font-size: 15px;
            font-weight: normal;
            padding: 0 10px;
        }
        .school-year {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            line-height: 40px;
            align-items: center;
        }

        .exp {
            margin-top: -60px;
            font-size: 20px;
            color: white;
            
        }
        .exp h1 {
            font-size: 35px;
            margin-top: 70px;
            border-bottom: 2px solid white;
            border-spacing: 1px;
            padding: 2px;
        }
        .position {
            font-size: 25px;
            font-weight: bold;
        }

        .workplace {
            margin-left: 40px;
            
        }
        
        .year { 
            display: inline-block;
            margin-top: -4px;
            border-radius: 50px;
            background-color: #323949;
            text-align: center;
            color: white;
            font-size: 15px;
            font-weight: normal;
            padding: 0 10px;
        }
        .exp-year {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            line-height: 40px;
            align-items: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
    //left
    $phone = "09457524443";
    $email = "darrenjakeambong@gmail.com";
    $linkedin = "https://www.linkedin.com/in/dja";
    $address = "San Juan City, Metro Manila";
    $skill1 = "PYTHON";
    $skill2 = "JAVA";
    $skill3 = "C";
    $skill4 = "HTML";
    $hobby1 = "Reading";
    $hobby2 = "Writing";
    $hobby3 = "Cooking";
    $hobby4 = "Surfing";

    //right
    $name = "DARREN JAKE AMBONG";
    $profession = "SOFTWARE ENGINEER";
    $educ1 = "San Juan Elementary School";
    $educ1_year = "(2010 - 2016)";
    $educ2 = "San Juan City Science High School";
    $educ2_year = "(2016 - 2020)";
    $educ3 = "Polytechnic University of the Philippines";
    $educ3_year = "(2020 - 2022)";
    $educ4 = "FEU Institute of Technology";
    $educ4_year = "(2022 - 2026)";
    $work1 = "Globe Telecom";
    $exp_year1 = "2026 - 2029";
    $work2 = "Accenture";
    $exp_year2 = "2029 - 2031";
    $work3 = "Ericsson";
    $exp_year3 = "2031 - 2034";
    $work4 = "Amazon Web Services";
    $exp_year4 = "2034 - Present";
    ?>
    <div class="container1">
        <div class="left">
            <div class="info">
            <div class="img">
                <img src="darren1.jpg"></div> 
                    <div class="contactinfo">
                        <h3 class = "title">CONTACT ME:</h3>
                        <ul>
                            <li>
                                <span class = "icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></span>
                                <span class = "test"> <?php print $phone ?> </span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></span>
                                <span class = "test"> <?php print $email ?></span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-brands fa-linkedin"></i></span>
                                <span class = "test"> <?php print $linkedin ?></span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span>
                                <span class = "test"> <?php print $address ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="skills">
                    <h4 class = "title">SKILLS:</h4>
                        <ul>
                            <li>
                                <span class = "icon"><i class="fa-brands fa-python"></i></span>
                                <span class = "test"><?php print $skill1 ?></span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-brands fa-java"></i></span>
                                <span class = "test"><?php print $skill2 ?></span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-solid fa-c"></i></span>
                                <span class = "test"><?php print $skill3 ?></span>
                            </li>
                            <li>
                                <span class = "icon"><i class="fa-brands fa-html5"></i></i></span>
                                <span class = "test"><?php print $skill4 ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="hobbies">
                        <h5 class = "title">HOBBIES:</h5>
                            <ul>
                            <li>
                                <span class = "test"><?php print $hobby1 ?></span>
                            </li>
                            <li>
                                <span class = "test"><?php print $hobby2 ?></span>
                            </li>
                            <li>
                                <span class = "test"><?php print $hobby3 ?></span>
                            </li>
                            <li>
                                <span class = "test"><?php print $hobby4 ?></span>
                            </li>
                            </ul>
                    </div>
            </div>
        </div>
        <div class="right">
            <div class="name">
                <h1><?php print $name ?></h1><br>
                <h2><?php print $profession ?></h2>
            </div>
                <div class="education">
                    <h1>EDUCATION: </h1>
                    <ul>
                        <li class="level">PRIMARY:</li>
                        <li>
                            <div class="school-year">
                                <span class ="school"><?php print $educ1 ?></span> 
                                <span class="year"><?php print $educ1_year ?></span>
                            </div>
                        </li>
                        <li class="level">SECONDARY:</li>
                        <li>
                            <div class="school-year">
                                <span class ="school"><?php print $educ2 ?></span> 
                                <span class="year"><?php print $educ2_year ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="school-year">
                                <span class ="school"><?php print $educ3 ?></span> 
                                <span class="year"><?php print $educ3_year ?></span>
                            </div>
                        </li>
                        <li class="level">TERTIARY:</li>
                        <li>
                            <div class="school-year">
                                <span class ="school"><?php print $educ4 ?></span> 
                                <span class="year"><?php print $educ4_year ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="exp">
                <h1>WORK-EXPRERIENCE: </h1>
                    <ul>
                        <li class="position">Systems Analyst</li>
                        <li>
                            <div class="exp-year">
                                <span class ="workplace"><?php print $work1 ?></span> 
                                <span class="year"><?php print $exp_year1 ?></span>
                            </div>
                        </li>
                        <li class="position">Software Development Engineer</li>
                        <li>
                            <div class="exp-year">
                                <span class ="workplace"><?php print $work2 ?></span> 
                                <span class="year"><?php print $exp_year2 ?></span>
                            </div>
                        </li>
                        <li class="position">Software Developer</li>
                        <li>
                            <div class="exp-year">
                                <span class ="workplace"><?php print $work3 ?></span> 
                                <span class="year"><?php print $exp_year3 ?></span>
                            </div>
                        </li>
                        <li class="position">Senior Software Development Engineer</li>
                        <li>
                            <div class="exp-year">
                                <span class ="workplace"><?php print $work4 ?></span> 
                                <span class="year"><?php print $exp_year4 ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</body>
</html>
