
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d9de173ff4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <title>Mini Project</title>
</head>
    <style>
        .college-logo
{
    display: inline-block;
    float: left;
}
.college-logo img
{
    width: 80px;
    margin-left: 10px;
    margin-top: 5px;
    height: auto;
}
.college-text
{
    display: inline-block;
	padding-top: 15px;
    vertical-align: top;

    color: white;
}
.college-text h1
{
    font-size: 30px;
	font-family: Georgia,serif;
    margin-top: 0;
	font-variant: small-caps;
}
.college-text h3
{
    font-size: 16px;
	margin-top: -10px;
    text-align: left;
	font-family: Georgia,serif;
	font-variant: small-caps;
}



*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
}
body{
    background-color: azure;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
nav{
    background:blue;
    height: 100px;
    width: 100%;
}
label.logo{
    color:whitesmoke;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
}
nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active,a:hover{
    font-size: 20px;
    background: blue;
    transition: 0.5s;
}
.checkbtn{
    font-size: 30px;
    color: aliceblue;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
}
#check{
    display: none;
}
@media (max-width: 952px){
 label.logo{
     font-size: 30px;
     padding-left: 50px;
 }
nav ul li a{
     font-size: 16px;
 }
}
@media (max-width: 858px){
    .checkbtn{
        display: block;
    }
    ul{
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2c3e50;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
    }
    nav ul li{
        display: block;
        margin: 50px 0;
        line-height: 30px;
    }

    nav ul li a{
        font-size: 20px;
    }
    a.active,a:hover{
        background: none;
        color: burlywood;
    }
    #check:checked ~ ul{
        left: 0;
    }
}
.team_container{
    width: 100%;
    height: auto;
    padding-top: 40px;
    padding-bottom: 30px;
}
.text{
    color: black;
    font-size: 20px;
    font-weight: light;
    text-transform: uppercase;
    text-align: center;
}
.row1{
    width: 100%;
    display: flex;
    flex-direction: row;
    background-image: url('iitpbackground.jpg');
    background-repeat: no-repeat;
    background-blend-mode: color;
    flex-wrap: wrap;
    background-size: 100% 100%;
    float: left;
    margin-bottom: 35px;
    justify-content: space-around;
    justify-items: center;

}
.row{
    width: 100%;
    /* margin: auto; */
    display: flex;
    flex-direction: column;
    /* flex-wrap: wrap; */
    justify-content: center;
    /* justify-items: center; */
}

.profile-card{
    background-color:whitesmoke;
    width: 80%;
    height: 100%;
    border-radius: 30px;
    padding: 10px;
    margin: 1%;
}
#cont{
    /* background-color:red; */
    display: flex;
    justify-content: center !important;
    text-align: center !important;
    align-items:center;
}
.profile-card1{
    background-color:black;
    width: 65%;
    height: 330px;
    opacity: 0.65;
    border-radius: 25px;
    margin: 30px 0px 30px 10px;
}
.profile-card:hover{
    background-color: cornsilk;
}
.profile-content1{
    padding: 15px;
}

.profile-image1{
    text-align: center;
}
.desc1 h2{
    text-align: center;
    font-size: 35px;
    padding-bottom: 20px;
}
.desc1{
    font-family:'Times New Roman', Times, serif;
    margin-top: 15px;
    margin-bottom: 20px;
    font-size: 20px;
    padding: 15px;
    color:white;
    font-weight: bold;
    float: left;
}

.raman1{
    float: left;
    display: flex;
    flex-direction: column;
    margin-top: 80px;
    /* padding-top: 100px; */
    margin-right: 29px;
}

.newcards34{
    display: flex;
    flex-direction: row;
    width:80%;
    justify-content:center;
}

.heading1{
    text-align: center;
    font-size: large;
    /* margin-left: 70px; */
    /* background-color:blue ; */
}
.change{
    background-color: #8cc9f5;
    padding-bottom: 30px;
    margin-top: 20px;
}

/* .heading{
    text-align: center;
    font-size: 30px; */
    /* margin-left: 70px/; */
    /* margin-top: 20px; */
    /* margin-bottom: 20px;
padding-top: 20px;
justify-content: center;
align-items: center; */
    /* background-color:blue ; */
/* } */

.btn-div1{
    text-align: center;
    margin-bottom: 30px;
    
}
.btn1{
    background-color:rgb(6, 223, 6);
    color: black;
    width: 150px;
    cursor: pointer;
    height: 38px;
    font-size: 28px;
    font-weight: 600px;
    box-shadow: 3px 3px 3px 3px darkgreen;
    border-radius: 3px;
    outline: none;
    transition: 2s;
    border: none;
}
.btn:hover{
    background-color: rgb(141, 141, 245);
    width: 170px;
    /* scale: 0.9; */
}
.profile-content{
    padding: 10px;
    width:100%;
    /* margin: 10px; */
    /* background-color: red; */
}
img{
    width: 100px;
    height: 100px;
    border-radius: 50px;
}

.profile-image{
    text-align: center;
}
.desc{
    font-family:sans-serif;
    /* margin-top: 10px;
    margin-bottom: 20px; */
    text-align: center;
    justify-content: center;
    padding:10px;
    font-size: 20px !important;
    color:rgb(15, 21, 6);
    font-weight: lighter;
}

.btn-div{
    text-align: center;
    margin-bottom: 10px;
}
.btn{
    background-color:chartreuse;
    color: black;
    width: 200px;
    cursor: pointer;
    height: 32px;
    font-size: 20px;
    font-weight: 600px;
    box-shadow: 3px 3px 3px 3px rgb(8, 78, 8);
    border-radius: 3px;
    outline: none;
    border: none;
    transition: 0.5s;
}
.btn1{
    background-color:chartreuse;
    color: black;
    width: 200px;
    cursor: pointer;
    height: 32px;
    font-size: 20px;
    font-weight: 600px;
    box-shadow: 3px 3px 3px 3px rgb(8, 78, 8);
    border-radius: 3px;
    outline: none;
    border: none;
    transition: 0.5s;
}
.footer{
    /* margin-top: 30px; */
    padding: 40px 0;
    background-color: black;
}
.social{
    text-align: center;
    padding-bottom: 25px;
    color: white;
}
.footer .social a{
    font-size: 30px;
    color: inherit;
    border: 1px solid #ccc;
    width: 50px;
    height: 50px;
    line-height: 50px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    margin: 0 8px;
    opacity: 0.75;
}
.footer .social a:hover{
    opacity: 0.9;
}
.footer ul{
    margin-top: 0;
    padding: 0;
    list-style: none;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 0;
    text-align: center;
}
.footer ul li a{
    color: white;
    text-decoration: none;
    opacity: 0.8;
    text-transform: uppercase;

}

.footer ul li{
    display: inline-block;
    padding: 0 15px;
}
.footer ul li a:hover{
    opacity: 1;
}
.footer .copyright{
    margin-top: 15px;
    text-align: center;
    font-size: 13px;
    color: white;
    text-transform: uppercase;
    font-size: 24px;
}
    </style>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="college-logo">
				<img src="iitp2.png"/>
				<div class="college-text logo" style="padding-left:22px;">
					<!-- <span style="font-size:18pt;">Placements, IIT PATNA</span><br /> -->
                    <span style="font-size:20pt;">Training and Placement Cell</span><br /><span style="font-size:20pt;">Indian Institute of Technology Patna</span><br /><br />
					<!-- <h3>Indian Institute of Technology Patna<br /><span style="font-size:18pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h3> -->
				</div>
			</div>
        <!-- <label class="logo">Placements, IIT PATNA</label> -->
        <ul>
            <li><a class="active" href="#OVERVIEW">Overview</a></li>
            <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>
            <li><a  href="faq.php">Recruitment Process</a></li>
            <!-- <li><a href="#">iit patna</a></li> -->
            <li><a href="#CONTACTUS">Contact us</a></li>
        </ul>
    </nav>
    <section class="team-section">
    <!-- <div class="container"> -->
        <!-- <div class="team_container">
            <div class="text">Meet Our Team</div>
        </div> -->
        <!--Card making starts here-->
        <div class="row1">
        <!--First Card making starts here-->
            <div class="profile-card1">
                <div class="profile-content1">
                    <div class="profile-image1">
                        <!-- <img src="dog.png"  alt="Coordinator"> -->
                    </div>
                    <div class="desc1">
                       <h2>A one stop portal for Placements</h2>
                       <p>Welcome to the recruitment website For IIT Patna.<br>
IIT is India's foremost industrial leadership development institution. Our Graduates are a combination of rigorous thinking, hardwork and fundamental stronghold. They are nurtured by the institute to strive for excellence and deliver impact in their field of work. Let us begin...</p>
                    </div>
                    <!-- <div class="btn-div1">
                        <button class="btn"><i class="fa fa-linkedin"></i> LinkedIn</button>
                    </div>
                    <div class="btn-div1">
                        <button class="btn"><i class="fa fa-google"></i> Gmail</button>
                    </div> -->
                </div>
            </div>
            
            <div class="raman1">
            <div class="btn-div1">
                <a href="studentlogin.php"> <button  class="btn"> Student</button></a>
            </div>
            
            <div class="btn-div1">
                <a href="companylogin.php"><button  class="btn"> Company</button></a> 
                </div>
                <div class="btn-div1">
                       <a href="alumnuslogin.php"><button  class="btn" > Alumnus</button></a> 
                    </div>
                <div class="btn-div1">
                       <a href="adminlogin.php"><button  class="btn" > ADMIN</button></a> 
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- Fourth Card making ends here-->
            <!--Fifth Card making starts here-->
            <!-- <div class="heading" >
                <h1>OVERVIEW</h1>
            </div> -->

            <!-- First Card making ends here-->
    <div class="row " id='cont'>
            <!--Second Card making starts here-->
            <div class="profile-card pc1">
                <div class="profile-content">
                    <!-- <div class="profile-image">
                        <img src="dog.png" alt="Coordinator">
                    </div> -->
                    <div class="desc">
                        <h2>About Us</h2>
                        <br>
                        <p style="padding:5px">IIT Patna has been critically acclaimed across borders with its renowned alumni holding top national and international positions. It is now recognized as the No.1 Educational Institute of India**. The foundation stone of IIT Patna was laid in 1959 with the collaboration of UK Government and the Federation of British Industries in London. Getting its first admission in 1961 and being recognised as Institute of national importance in 1963, IIT Patna has witnessed unprecedented success across various fields, not limited to engineering — even though it is quite young as compared to some of the global universities.</p>
                    </div>
                    <!-- <div class="btn-div">
                        <button class="btn"><i class="fa fa-linkedin"></i> LinkedIn</button>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-google"></i> Gmail</button>
                    </div> -->
                </div>
            </div>
            <!-- Second Card making ends here-->
            <!--Third Card making starts here-->
            <div class="profile-card pc1">
                <div class="profile-content">
                   
                    <div class="desc">
                        <h2>Academic Curriculum</h2>
                        <br>
                        <p style="padding:5px font-size:20px">IIT Patna offers rigorous courses and vast exposure through multivariate extra- curricular and co-curricular activities. Besides, students are skilled with social skills along with technical expertise. In contemporary times, these students work in multi-faceted domains like on roles as scientists, designers, technologists, business managers, entrepreneurs, etc. Also, several alumni has transcended from their original disciplines to another fields of administrative services, active politics, NGOs, etc. IITians are significantly contributing in nation building and to the technological expansion and industrial developments around the globe. The institution, in itself, is ranked amongst the best in the world.</p>
                    </div>
                    
                </div>
            </div>
</div>
<div class="change">
            <div class="heading1" id="CONTACTUS">
                <br>
                <br>
                <h2>CONTACT US</h2>
                <br>
            </div>
            

<div class="row" id="cont">
            <div class ="newcards34">
            <!-- Sixth Card making ends here-->
            <!--Seventh Card making starts here-->
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="profile.jpg"  alt="Coordinator">
                    </div>
                    <div class="desc">
                        <h2>Pradeep</h2>
                        <p>Coordinator</p>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-linkedin"></i> LinkedIn</button>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-google"></i> Gmail</button>
                    </div>
                </div>
            </div>
            <!-- Seventh Card making ends here-->
            <!--Eigth Card making starts here-->
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="profile.jpg " alt="Coordinator">
                    </div>
                    <div class="desc">
                        <h2>Nishant</h2>
                        <p>Coordinator</p>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-linkedin"></i> LinkedIn</button>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-google"></i> Gmail</button>
                    </div>
                </div>
            </div>
            <!-- Eigth Card making ends here-->
            <!--Ninth Card making starts here-->
            <div class="profile-card">
                <div class="profile-content">
                    <div class="profile-image">
                        <img src="profile.jpg" alt="Coordinator">
                    </div>
                    <div class="desc">
                        <h2>Raman Bansal</h2>
                        <p>Coordinator</p>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-linkedin"></i> LinkedIn</button>
                    </div>
                    <div class="btn-div">
                        <button class="btn"><i class="fa fa-google"></i> Gmail</button>
                    </div>
                </div>
            </div>
            </div>
            <!-- Ninth Card making ends here-->
        <!-- </div>   -->
        <!-- </diV>    -->
        <!-- </div> -->
          <!-- Card making ends here-->
    </section>
    <section class="footer">
        <div class="social">
            <a href="https://www.instagram.com/iit_patna_official/" target="_blank" ><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/iitp.ac.in/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/IITPAT?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter" ></i></a>
            <a href="https://www.linkedin.com/school/indian-institute-of-technology-patna/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin" ></i></a>
        </div>
        <ul class="lists">
            <li><a href="https://www.iitp.ac.in/" target="_blank">IITP</a></li>
            <li><a href="https://www.iitp.ac.in/placement/contactus.php" target="_blank">TPC</a></li>
            <li><a href="#">HOME</a></li>
        </ul>
        <p class="copyright">Placement, IITP @2023</p>
    </section>
</body>
</html>