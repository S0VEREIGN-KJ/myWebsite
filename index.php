<!DOCTYPE html>
<html lang="en" dir="ltr">
    
 <head>
    <meta charset="UTF-8"/>
    <title>Karl Website</title>
     <link rel="icon" href="pics/KJ.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- roboto google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 </head>

 <style>
    .project-description {
    font-family: Arial, sans-serif;
    font-size: 26px;
    color: #ffffff;
    background: #5e5e5e;
    padding: 15px;
    border-radius: 8px;
    margin-top: 10px;
    line-height: 1.5;
    text-align: left;
    max-width: 400px;
}
 </style>
 <body>

<!--navigation menu-->
<nav>
    <div class="nav-container">
        <div class="logo" data-aos="zoom-in" data-aos-duration="1500">
        <span>Karl Jasper</span>
        </div>
        <div class="links">
            <div class="link" data-aos="fade-up" data-aos-duration="1500 "data-aos-delay="150"><a href="#home">Home</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"><a href="#about">About</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><a href="#awards_recognitions">Awards and Recognition</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><a href="#certificate">Certificates</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"><a href="#skills">Skills</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"><a href="#projects">Projects</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600"><a href="#services">Services</a></div>
            <div class="link" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700"><a href="#contact">Contact</a></div>
        </div>
        <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
    </div>

    <div class="dropdown">
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#awards_recognitions">Awards and Recognition</a>
            <a href="#certificate">Certificates</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#services">Service</a>
            <a href="#contact">Contact</a>
            <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
        </div>
    </div>
</nav>

<section class="home" id="home" style="margin-top: 100px;">
    <div class="main-container">
        <div class="image" data-aos="zoom-out" data-aos-duration="3000">
            <img src="main.jpg" alt="">
        </div>
        <div class="content">
            <h1 data-aos="fade-left" data-aos-duration="1500" data-aos-delay="700" style="font-size:22pt;">
                Hey I'm <span>KARL JASPER G. DEL ROSARIO</span>
            </h1>
            <div class="typewriter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900" style="font-size: 18pt;">
                I'm a <span class="typewriter-text"style="margin-left: 10px;font-size:20pt;"></span><label for="">|</label> </div>
            <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100">A Fresh Bachelor of Science in Information Technology (BSIT)<br> of Kalinga State University 
            <br> <br>" Life would be so much easier if we had Ctrl+Z for everything "</p>

            <div class="social-links">
                <a href="https://github.com/S0VEREIGN-KJ" data-aos="fade-up" target="_blank" data-aos-duration="1500" data-aos-delay="1300"> <i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/KJ.SOLOlvling" target="_blank" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"> <i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/del-rosario-karl-jasper-g-68454334a/" target="_blank" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"> <i class="fa-brands fa-linkedin"></i></a>
                <!-- <a href="#" data-aos="fade-up" target="_blank" data-aos-duration="1500" data-aos-delay="1600"> <i class="fa-brands fa-twitter"></i></a> -->
            </div>

            <!-- <div class="btn" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1800">
                <button>Contact me</button>
            </div> -->

        </div>
    </div>
</section>
<br>
<br>
<!--About Section Start-->
<section class="about" id="about">
    <div class="content">
        <div class="title" data-aos="fade-up" data-aos-duration="1500"><span>About Me</span></div>
        <div class="about-details">
            <div class="left" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
                <img src="main2.jpg" alt=""/>
            </div>
            <div class="right">
                <div class="topic" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">Adaptability is a Key</div>
                <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="300">
                        A motivated Fresh BSIT graduate with adaptability, teamwork, and flexibility. Experienced in managing academic projects, 
                        including both AI-based / Rule-Based chatbot development and a ticketing system prototype. Adept in hardware troubleshooting, software maintenance, and IT support, 
                        backed by a TESDA CSS NC II certification. Demonstrates strong problem-solving skills and hands-on experience in 
                        providing technical assistance and managing IT resources.
                </p>
                <div class="button" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="400">
                    <!-- <button>Contact Me</button> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!--Awards and Recognitions Section Start-->
<section class="awards_recognitions" id="awards_recognitions">
    <div class="content">
        <div class="title" data-aos="fade-up" data-aos-duration="1500"><span>Awards and Recognitions</span></div>

        <div class="c-holder2">
            <img src="awards&recognitions/dost_lodixr.jpg" loading="lazy" class="c-holder2 img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="50">
            <div class="c-body">
                <h1 class="c-title">DOST Project LODIxR Internship</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">539 hrs On-the-Job-Training</p>
                <p class="c-info">Project DOST LODIxR (“League of Developers Initiative by the Regions”) is a DOST 
                    initiative that provides DOST scholars in IT-related programs with real-world training opportunities—such as internships—to strengthen 
                    their professional skills while supporting regional digital transformation efforts
                </p>
                <p class="c-info" style="font-size:14pt; font-weight:bold; text-decoration:underline;">DOST-CAR LODIxR Intern <br> 1st BATCH 2025
                </p>
            </div>
        </div>

        <div class="c-holder">
            <img src="awards&recognitions/ksu_lodi.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
            <div class="c-body">
                <h1 class="c-title">DOST Project LODIxR COMPLETION</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Kalinga State University Recognition</p>
                <p class="c-info">By the College of Engineering and Information Technology
                </p>
            </div>
        </div>

        <div class="c-holder">
            <img src="awards&recognitions/ksu.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
            <div class="c-body">
                <h1 class="c-title">Effeciency Award On-the-Job-Training</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Kalinga State University Recognition</p>
                <p class="c-info">By the College of Engineering and Information Technology
                </p>
            </div>
        </div>

        <div class="c-holder">
            <img src="awards&recognitions/ksu_startup9.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600">
            <div class="c-body">
                <h1 class="c-title">Sports Awardee</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Kalinga State University Recognition</p>
                <p class="c-info">By the College of Engineering and Information Technology</p>
                <h1 class="c-title" style="text-decoration: underline; font-weight: bold;">2nd Place</h1>
                <p class="c-info">TARAKI MAKEATHON CAR Startup-Week Competition</p>
            </div>
        </div>



        <div class="c-holder">
            <img src="awards&recognitions/taraki.png" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1000">
        <div class="c-body">
            <h1 class="c-title">TARAKI MAKEATHON CAR Startup Week Competition </h1>
            <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">As a Competitor</p>
            <h1 class="c-title" style="text-decoration: underline; font-weight: bold;">2nd Place</h1>
            <p class="c-info">Held on October 14-18, 2024</p>
            </div>
        </div>
        </div>
</div>
</section>

<!--Certificate Section Start-->
<section class="certificate" id="certificate">
    <div class="content">
        <div class="title" data-aos="fade-up" data-aos-duration="1500"><span>Certificates</span></div>

        <div class="c-holder2">
    <div class="nc2-text" 
         data-aos="fade-right" 
         data-aos-duration="1500" 
         data-aos-delay="1600" 
         style="
            position: absolute; 
            left: 50%; 
            transform: translateX(-50%);
            color: #fff; 
            font-size: 10pt;
            font-weight: bold;
            background: rgba(0,0,0,0.4); 
            padding: 3px 8px; 
            border-radius: 5px;">
        Valid: 2019 - 2024
    </div>
            <img src="certificates/nc2.jpg" loading="lazy" class="c-holder2 img"   data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1600">
            <div class="c-body">
                
                <h1 class="c-title">National Certificate II in Computer System Servicing</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Certified Computer Systems Servicing Professional</p>
                <p class="c-info">TESDA CERTIFIED</p>
                <p class="c-info">Issued on: October 28, 2019</p>
                <p class="c-info">Valid Until: October 27, 2024</p>
                </div>
            </div>

        <div class="c-holder2">
    <div class="nc2-text" 
         data-aos="fade-right" 
         data-aos-duration="1500" 
         data-aos-delay="1600" 
         style="
            position: absolute; 
            left: 50%; 
            transform: translateX(-50%);
            color: #fff; 
            font-size: 10pt;
            font-weight: bold;
            background: rgba(0,0,0,0.4); 
            padding: 3px 8px; 
            border-radius: 5px;">
        Valid: 2025 - 2030
    </div>
            <img src="certificates/nc2.png" loading="lazy" class="c-holder2 img"   data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1600">
            <div class="c-body">
                
                <h1 class="c-title">National Certificate II in Computer System Servicing</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Certified Computer Systems Servicing Professional</p>
                <p class="c-info">TESDA CERTIFIED</p>
                <p class="c-info">Issued on: August 27, 2025</p>
                <p class="c-info">Valid Until: August 26, 2030</p>
                </div>
            </div>


        <div class="c-holder">
            <img src="certificates/MSoffice.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="50">
            <div class="c-body">
                <h1 class="c-title">Basic Mircosoft Office Productivity Tool</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">16 hrs Training</p>
                <p class="c-info">Held on January 30-31, 2025 at
                    DICT Kalinga TECH4ED Center
                </p>
            </div>
        </div>

        <div class="c-holder">
            <img src="certificates/dict_cybersecurity.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
            <div class="c-body">
                <h1 class="c-title">2024 Cybersecurity Advocacy Awareness and Promotion of DICT-CAR Programs in Kalinga</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">8 hrs</p>
                <p class="c-info" >Held on October 24, 2024
                    at Kalinga State University
                </p>
            </div>
        </div>

        <div class="c-holder">
            <img src="certificates/startup9.jpg" loading="lazy" class="c-holder img" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
            <div class="c-body">
                <h1 class="c-title">Philippine Startup 9 Cordillera Pitching Competition </h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">As a Competitor</p>
                <p class="c-info">Held on October 30, 2024 at the DICT-CAR, Baguio City</p>
            </div>
        </div>

        <div class="c-holder">
            <img src="certificates/intensfying.jpg" loading="lazy" class="c-holder img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600">
        <div class="c-body">
            <h1 class="c-title">Intensifying Digital Citizenship:</h1>
            <p class="c-sub-title" style="font-size: 15pt;margin-top: -10px;">Skills Training in Basic Computer Operations, Netiquette and Web Navigation</p>
            <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">As a Facilitator</p>
            <p class="c-info">part of C.E.I.T-W.O.W Projects for ALS of the College of Engineering and Technology held on October 15-16, 2024 at Kalinga State University</p>
            </div>
        </div>

        <div class="c-holder">
            <img src="certificates/enhancing.png" loading="lazy" class="c-holder img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="800">
        <div class="c-body">
            <h1 class="c-title">Enhancing Classroom Productivity with AI Technology</h1>
            <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
            <p class="c-info">A 2 hour seminar, held virtually via Zoom on August 17, 2024</p>
            </div>
        </div>

        <div class="c-holder">
            <img src="certificates/Cloud Computing.png" loading="lazy" class="c-holder img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1000">
            <div class="c-body">
                <h1 class="c-title">Introduction to Cloud Computing</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
                <p class="c-info">A 3 hour seminar, held virtually via Zoom on August 24, 2024</p>
                </div>
            </div>

        <div class="c-holder">
            <img src="certificates/Edge Computing.png" loading="lazy" class="c-holder img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1200">
            <div class="c-body">
                <h1 class="c-title">Introduction to Edge Computing</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
                <p class="c-info">A 3 hour seminar, held virtually via Zoom on August 31, 2024</p>
                </div>
            </div>

        <div class="c-holder">
            <img src="certificates/Radio Access Network.png" loading="lazy" class="c-holder img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1400">
            <div class="c-body">
                <h1 class="c-title">Introduction to Radio Access Network</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
                <p class="c-info">A 3 hour seminar, held virtually via Zoom on September 07, 2024</p>
                </div>
            </div>

        <div class="c-holder2">
            <img src="certificates/Digital Literacy.png" loading="lazy" class="c-holder2 img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="1800">
            <div class="c-body">
                <h1 class="c-title">Digital Literacy: Digital Solutions for Local Challenges</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
                <p class="c-info">Held virtually via Zoom on August 30, 2024</p>
                </div>
            </div>

         <div class="c-holder2">
            <img src="certificates/SkillLogic.png" loading="lazy" class="c-holder2 img"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="2000">
           <div class="c-body">
                <h1 class="c-title">Cyber Security Bootcamp</h1>
                <p class="c-sub-title" style="text-decoration: underline; font-weight: bold;">Webinar</p>
                <p class="c-info">Held virtually via Zoom on August 21, 2024</p>
                </div>
            </div>

    </div>
</section>

<!--My Skill Section Start-->
<section class="skills" id="skills">
    <div class="content">
        <div class="title" data-aos="fade-up" data-aos-duration="1200" ><span>My Skills</span></div>
        <div class="skills-details">
            <div class="text">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    Skills Reflect Our Knowledge
                </div>
                <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">Being deeply passionate about exploring the ever-evolving world of technology, <br>
                    constantly learning and adapting to new tools and programming languages.  <br>Education empowers us to solve real-world problems, 
                    innovate through software  <br>development, and stay ahead in a dynamic digital landscape. Technology is  <br>an ever-evolving field, where learning is a continuous journey </p>
                <div class="experience" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                <div class="num">   </div>
                <div class="exp">
                    <!-- Years Of<br/> -->
                    <!-- Experience -->
                </div>
            </div>
        </div>
        
        <div class="boxes">
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">HTML</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">67%</div>
            </div>
        
       
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">CSS</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">58%</div>
            </div>
      
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">Javascript</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">18%</div>
            </div>
      
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">PHP</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">27%</div>
            </div>
       
     
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">Adobe Photoshop</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">57%</div>
            </div>
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">Adobe Premiere</div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">45%</div>
            </div>
            <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">Computer System Servicing 
                </div>
                
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300" style="font-size: 16pt;">NATIONAL CERTIFICATE II
                    <i class="fa-solid fa-check-circle" style="color: #28a745; margin-left: 5px;"></i>
                </div>
                
                <!-- <p style="font-size: 12px; color: #888;" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300">Certification expired on [October, 2024].</p> -->
            </div>
              <div class="box">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150">BASIC
                <i class="fa-solid fa-check-circle" style="color: #28a745; margin-left: 5px;"></i></div>
                <div class="per" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="300" style="font-size:16pt;">Microsoft Office Productivity Tools</div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</section>
<!--Project Section-->

<section class="projects" id="projects" >
    <div class="title" data-aos="fade-up" data-aos-duration="1200" style="margin-bottom: 10px;"><span>My Projects</span></div>
    <div class="content">
       
        <div class="project-holder">
            <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150" >AI POWERED CHATBOT</div>
            <div class="clickme" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150" style="color: #fff; font-size: 10pt;">click me↓</div>
            <img src="projects/systems/ai-chatbot/a1.png" loading="lazy" alt="Project Image"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300" style="margin-bottom: 50px;">
            
            
        </div>
        
        <div class="project-holder">
            <div class="topic" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" >RULE BASED CHATBOT</div>
            <div class="clickme" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" style="color: #fff; font-size: 10pt;">click me↓</div>
            <img src="projects/systems/rule-based-chatbot/r1.png" loading="lazy" alt="Project Image"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" style="margin-bottom: 50px;">
        </div>

        <div class="ticket-row">
        <div class="project-holder">
            <div class="topic" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" >WordPress Plugin</div>
             <div class="topic" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" >Feedback Overlay w/ Admin Monitoring</div>
            <div class="clickme" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" style="color: #fff; font-size: 10pt;">click me↓</div>
            <img src="projects/systems/wordpress-feedback-plugin/wp4.png" loading="lazy" alt="Project Image"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" style="margin-bottom: 50px;">
        </div>
        </div>

        <div class="ticket-row">
        <div class="project-holder">
            <div class="topic" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" >DOST-Kalinga Project Locator</div>
            <div class="clickme" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150" style="color: #fff; font-size: 10pt;">click me↓</div>
            <img src="projects/systems/dost-kalinga/dost-k-project2.png" loading="lazy" alt="" class="project-img"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" style="margin-bottom: 50px;">
        </div>
        </div>    

        <div class="ticket-row">
            <div class="project-holder">
                <div class="topic" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150" >TICKETING SYSTEM</div>
                <div class="clickme" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="150" style="color: #fff; font-size: 10pt;">click me↓</div>
                <img src="projects/systems/ticketing-system/ticketing_system1.png" loading="lazy" alt="" class="project-img"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" style="margin-bottom: 50px;">
            </div>
        </div>
        

    </div>
</section>

<div class="project-overlay" id="projectOverlay">
    <div class="overlay-content">
        <span class="close-btn-overlay" id="closeOverlay">&times;</span>
        <div class="overlay-images" id="overlayImages">
            <!-- Related images/videos will be injected dynamically -->
        </div>
    </div>
</div>


<!--My Services Section Start-->
<section class="services" id="services">
    <div class="content">
        <div class="title" data-aos="fade-up" data-aos-duration="1200"><span>My Services</span></div>
        <div class="boxes">
            <div class="box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                <div class="icon">
                    <i class="fas fa-desktop"></i>
                </div>
                <div class="topic">Video Editing</div>
                <p>I use Adobe Premiere to create engaging videos with professional editing techniques.</p>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                <div class="icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="topic">Photo Editing</div>
                <p>With Adobe Photoshop, I enhance images and create compelling graphics.</p>
            </div>
    
            <!-- <div class="box"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
                <div class="icon">
                    <i class="fab fa-android"></i>
                </div>
                <div class="topic">Icon Design</div>
                <p>I design clear and functional icons for digital platforms.</p>
            </div> -->
            <!-- <div class="box"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
                <div class="icon">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <div class="topic">Photography</div>
                <p>afiewafkafuiawefakuefhaef</p>
            </div>
            <div class="box"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
                <div class="icon">
                    <i class="fas fa-tablet-alt"></i>
                </div>
                <div class="topic">App Development</div>
                <p>afiewafkafuiawefakuefhaef</p>
            </div> -->
        <!-- <div class="box"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="topic">Digital Marketing</div>
                <p>afiewafkafuiawefakuefhaef</p>
            </div> -->
        </div>
    </div>
</section>

<!--Contact me section-->
<section class="contact" id="contact">
 <div class="content">
    <div class="title" data-aos="fade-up" data-aos-duration="1500">
        <span>Contact Me</span>
    </div>

    <div class="text">
        <div class="topic"  data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">Have any Questions?</div>
    </div>
    <p>foaiwenfalwefnweulfaef</p>
    <div class="button" style="display: flex; justify-content: center; align-items: center;"  data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
        <button onclick="redirectToFacebook()">Let's Chat</button>
    </div>


    <div class="social-links" style=" display: flex;justify-content: center;align-items: center;">
        <a href="https://github.com/S0VEREIGN-KJ" data-aos="fade-up" target="_blank" data-aos-duration="1500" data-aos-delay="1300"> <i class="fa-brands fa-github"></i></a>
        <a href="https://www.facebook.com/KJ.SOLOlvling" target="_blank" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"> <i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/del-rosario-karl-jasper-g-68454334a/" target="_blank" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"> <i class="fa-brands fa-linkedin"></i></a>
        <!-- <a href="#" data-aos="fade-up" target="_blank" data-aos-duration="1500" data-aos-delay="1600"> <i class="fa-brands fa-twitter"></i></a> -->
    </div>
    </div>
 </div>
</section>


<!--Footer section-->
<footer>
    <div class="text">
        <span>
            <a href="#">karlJDR</a>
            &#169;2025 All Rights Reserved</span>
    </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="script.js"></script>


<script>
  
     function redirectToFacebook() {
        window.open("https://www.facebook.com/KJ.SOLOlvling", "_blank");
    }
    
    document.querySelectorAll('.links a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default jumping behavior

        const targetId = this.getAttribute('href').substring(1); // Get section ID
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            const navHeight = document.querySelector('nav').offsetHeight; // Get nav height dynamically
            const targetPosition = targetElement.offsetTop - navHeight - 10; // Adjusted for spacing

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth' // Smooth scrolling effect
            });

            // Update URL without instant jump
            history.pushState(null, null, `#${targetId}`);
        }
    });
});




  document.addEventListener("DOMContentLoaded", () => {
    const projects = document.querySelectorAll(".project-holder img");
    const overlay = document.getElementById("projectOverlay");
    const closeOverlay = document.getElementById("closeOverlay");
    const overlayImages = document.getElementById("overlayImages");

const projectData = {
    "systems/ai-chatbot": [
        "a1.png",
        "a1.mp4",
        "This is an AI-powered chatbot using Google's Gemini API for natural language processing and intelligent responses.<br><br>Using:<br>1.HTML<br>2.CSS<br>3.Javascript<br>4.Google API for AI genertive repsonse<br><br>Visit Project: http://generative-ai-chatbot.karljdr.kesug.com"

    ],
    "systems/rule-based-chatbot": [
        "r1.png",
        "r1.mp4", 
        "A rule-based chatbot that responds based on predefined patterns and rules.<br><br>Using:<br>1.HTML<br>2.CSS<br>3.Javascript<br><br>PS.Check Chatbot here on website ↘"
    ],
    "systems/wordpress-feedback-plugin": [
        "wp1.png",
        "wp2.png",
        "wp.mp4",
        "A WordPress plugin that provides feedback overlay functionality with admin monitoring capabilities.<br><br>Download Plugin here: https://github.com/S0VEREIGN-KJ/wordpress-feedback-plugin",
        "wp4.png",
        "wp5.png"

    ],
    "systems/dost-kalinga": [
        "dost-k-project1.png",
        "dost-k-project.mp4",
         "DOST-Kalinga Project Locator system for tracking and managing projects in the Kalinga region.<br><br>Using:<br>1.PHP LARAVEL<br>2.Javascript<br>3.Google Map API<br>4.Rule-based Chatbot<br><br>Visit Project: http://dost-kalinga.karljdr.kesug.com",
        "dost-k-project2.png",
        "dost-k-project3.png", 
        "dost-k-project4.png",
        "dost-k-project5.png",
        "dost-k-project6.png", 
        "dost-k-project7.png"
       
    ],
    "systems/ticketing-system": [
        "ticketing_system1.png",
        "ticketing_system2.png", 
        "ticketing_system3.png",
        "ticketing_system4.png",
        "ticketing_system5.png",
        "ticketing_system6.png",
        "ticketing_system7.png",
        "ticketing_system8.png",
        "ticketing_system9.png",
        "ticketing_system10.png",
        "ticketing_system11.png",
        "ticketing_system12.png", 
        "ticketing_system13.png",
        "ticketing_system14.png",
        "ticketing_system15.png",
        "ticketing_system16.png",
        "ticketing_system17.png",
        "ticketing_system18.png",
        "ticketing_system19.png",
        "ticketing_system20.png",
        "ticketing_system21.png",
        "A comprehensive ticketing system for managing customer support requests and issues."
    ]
};


// Function to convert URLs in text to clickable links
function makeLinksClickable(text) {
    const urlRegex = /(https?:\/\/[^\s]+)/g;

    // Check if current screen matches mobile media query
    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    // Define styles for desktop and mobile
    const linkStyle = isMobile
        ? "color: #4CAF50; text-decoration: underline; font-weight: bold; font-size: 12pt;"
        : "color: #4CAF50; text-decoration: underline; font-weight: bold; font-size: 15pt;";

    return text.replace(urlRegex, (url) => {
        return `<a href="${url}" target="_blank" style="${linkStyle}">${url}</a>`;
    });
}


projects.forEach((project) => {
    project.addEventListener("click", () => {
        const fullPath = project.getAttribute("src");
        const pathParts = fullPath.split("/");
        const projectFolder = pathParts[pathParts.length - 2];
        const projectKey = `systems/${projectFolder}`;
        const relatedMedia = projectData[projectKey] || [];

        const mediaElements = [];

        relatedMedia.forEach((media, index) => {
            if (media.endsWith(".mp4")) {
                // Add video
                mediaElements.push(`
                    <video controls>
                        <source src="projects/systems/${projectFolder}/${media}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                `);
            } else if (media.endsWith(".png") || media.endsWith(".jpg")) {
                // Add image
                mediaElements.push(`<img src="projects/systems/${projectFolder}/${media}" alt="${media}">`);
            } else if (media.startsWith("http")) {
                // If it's just a standalone link, add it as a visit button
                mediaElements.push(`
                    <a href="${media}" target="_blank" class="visit-btn">🌐 Click Here to Visit Project</a>
                `);
            } else {
                // This is a description - process it and make URLs clickaWble
                const processedDescription = makeLinksClickable(media.replace(/\n/g, "<br>"));
                mediaElements.push(`<div class="project-description">${processedDescription}</div>`);
            }
        });

        overlayImages.innerHTML = mediaElements.join("");
        overlay.style.display = "flex";
    });
});

    // Close overlay
    closeOverlay.addEventListener("click", () => {
        overlay.style.display = "none";
        overlayImages.innerHTML = ""; // Clear content
    });

    // Close overlay when clicking outside content
    overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
            overlay.style.display = "none";
            overlayImages.innerHTML = ""; // Clear content
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-container .links a");

    function updateActiveLink() {
        let currentSection = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 100; // Adjust for sticky nav
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(currentSection)) {
                link.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", updateActiveLink);
});

</script>

 </body>
    <div class="rule-based-chatbot" id="rule-based-chatbot"> 
  <?php include 'chatbot.php'; ?>
</div>


</html>
