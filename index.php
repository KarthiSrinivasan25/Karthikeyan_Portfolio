<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karthikeyan S | Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>


    <div id="loading-screen">
        <div class="spinner"></div>
        <p>Loading...</p>
      </div>

    <div id="content">

    <header>
        <div class="logo"> 
            <img src="assets/img/logo.png">
        </div>
       <div class="navDiv">
        <label for="menu" class="click-button">
            <i class="fa-solid fa-bars"></i>
        </label>
       </div>
        <input type="checkbox" id="menu">
        <ul class="nav">
            
            <label for="menu" class="click-button">
                <i class="fa-solid fa-xmark"></i>
            </label>
            <li class="link"><i class="fas fa-house-user icon icon-home"></i><a href="#home" class="nav-link"> Home</a></li>
            <li class="link"><i class="fas fa-code icon icon-skills"></i><a href="#skill" class="nav-link"> Skills</a></li>
            <li class="link"><i class="fas fa-laptop-code icon icon-projects"></i><a href="#project" class="nav-link"> Projects</a></li>
            <li class="link"><i class="fas fa-envelope-open-text icon icon-contact"></i><a href="#contact" class="nav-link"> Contact</a></li>
            <li class="link"><i class="fas fa-file-alt icon icon-resume"></i><a href="assets/resume/Karthikeyan S - Resume.pdf" class="nav-link"> Resume</a></li>
            
        </ul>

        <script>
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    document.getElementById('menu').checked = false;
                });
            });
        </script>
    </header>

    <div class="container">
        <div class="banner" id="home">
            <div class="content">
                <p class="profile">WELCOME TO MY PROFILE</p>
                <h1>
                    Hi, I'm Karthikeyan S<br/>
                    a <div class="gradientText">
                        <div class="job" data-job1="{Fresher.}" data-job2="{Fresher.}"></div>
                    </div>
                </h1>
                <p>
                    I love working with technology, especially Java Full Stack, Python, and MySQL. I'm always learning new things to solve problems better. I'm good at making both the Front-End and Back-End of websites. I enjoy working with others and being creative. I'm excited to help make cool things with technology. Let's chat and see what we can do together!
                </p>
                <div class="nav-button">
                    <button class="btn" id="downloadCVButton"><a href="assets/resume/Karthikeyan S - Resume.pdf">Download CV</a> <i class="uil uil-file-alt"></i></button>
                </div>
                <div class="find">
                    <h3>CONTACT WITH ME</h3>
                    <ul>
                        <a href="https://www.facebook.com/profile.php?id=100040605194777&mibextid=ZbWKwL"><li><i class="fa-brands fa-facebook-f icon-color-facebook"></i></li></a>
                        <a href="https://www.instagram.com/kk_the_lightning_king?igsh=OWIwenZydmR6M3p3"><li><i class="fa-brands fa-instagram icon-color-instagram"></i></li></a>
                        <a href="https://github.com/KarthiSrinivasan25"><li><i class="fab fa-github icon-color-github"></i></li></a>
                        <a href="https://www.linkedin.com/in/karthikeyan-s-217149238"><li><i class="fa-brands fa-linkedin icon-color-linkedin"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="avatar">
                <img src="assets/img/avatar.png" alt="">
            </div>
        </div>

       <div id="skill">
        <h1 class="title">SKILLS</h1>
        <div class="listSkill">
            <div class="item">
                <div class="name"><i class="bx bxl-java icon-color-java"></i> Java</div>
                <div class="evaluate" style="--point:90%"></div>
            </div>
         <!-- <div class="item">
                <div class="name"><i class="bx bxl-python icon-color-python"></i> Python</div>
                <div class="evaluate" style="--point:70%"></div>
            </div> -->  
            <div class="item">
                <div class="name"><i class="bx bxl-javascript icon-color-js"></i> Javascript</div>
                <div class="evaluate" style="--point:75%"></div>
            </div>
            <div class="item">
                <div class="name"><i class="fas fa-database icon-color-mysql"></i> MySQL</div>
                <div class="evaluate" style="--point:85%"></div>
            </div>
            <div class="item">
                <div class="name"><i class="bx bxl-html5 icon-color-html"></i> HTML5</div>
                <div class="evaluate" style="--point:90%"></div>
            </div>
            <div class="item">
                <div class="name"><i class="bx bxl-css3 icon-color-css"></i> CSS3</div>
                <div class="evaluate" style="--point:85%"></div>
            </div>
            <div class="item">
                <div class="name"><i class="bx bxl-react icon-color-react"></i> React JS</div>
                <div class="evaluate" style="--point:70%"></div>
            </div>
            <div class="item">
                <div class="name"><i class="fas fa-cloud icon-color-salesforce"></i> Salesforce Administrator</div>
                <div class="evaluate" style="--point:70%"></div>
            </div>
            <!--<div class="item">
                <div class="name"><i class="fas fa-cloud icon-color-salesforce"></i> Salesforce Developer</div>
                <div class="evaluate" style="--point:70%"></div>
            </div> -->
        </div>
       </div>
       <div id="project">
            <h1 class="title">PROJECTS</h1>
            <div class="listProject">
                <div class="item" onclick="showModal('modal1')">
                    <img src="assets/img/iot.jpg" alt="">
                    <div class="name">
                        IoT-Based Passenger Authentication System for Transportation Services
                    </div>
                    
                </div>
               
                <div class="item" onclick="showModal('modal2')">
                    <img src="assets/img/aqua.jpg" alt="">
                    <div class="name">
                        Enhancing Aquaculture Yield Through Data-Driven Fish Species Recommendation System
                    </div>
                   
                </div>

                <div class="item" onclick="showModal('modal3')">
                    <img src="assets/img/cyber.jpg" alt="">
                    <div class="name">
                        Symposium of CyberTalk'22 Website
                    </div>

                </div>
                
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="hideModal('modal1')">&times;</span>
                        <h2>IoT-Based Passenger Authentication System for Transportation Services</h2>
                        <div class="box-content">
                            <h3>Description:</h3>
                            <p>Developed an 'IoT-Based Passenger Authentication System' using RFID technology to enhance passenger authentication and automate vehicle door operations. The system verifies passenger authenticity through RFID-based unique identities, personalized security questions, and OTP communication. Streamlining access and ensuring passenger safety.</p>
                            <p><strong>Role:</strong> Coding and Circuit Design</p>
                            <p><strong>Video Link: &nbsp;</strong> <a class="link video-button" href="#" onclick="window.open('assets/videos/IOT.mp4', '_blank'); return false;">
                                <i class="fas fa-video"></i> Watch Video
                            </a></p>
                        </div>
                    </div>
                </div>
            
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="hideModal('modal2')">&times;</span>
                        <h2>Enhancing Aquaculture Yield Through Data-Driven Fish Species Recommendation System</h2>
                        <div class="box-content">
                            <h3>Description:</h3>
                            <p>I developed a web application that employs a linear discriminant algorithm to offer targeted food recommendations for aquaculture fish farmers. The application features a user-friendly interface with a responsive design, enabling farmers to input specific requirements and receive tailored food suggestions based on their aquaculture operations.</p>
                            <p><strong>Role: </strong>Front-end, Back-end, Django Framework and Python coding</p>
                            <p><strong>Video Link: &nbsp;</strong> <a class="link video-button" href="#" onclick="window.open('assets/videos/Aqua.mp4', '_blank'); return false;">
                                <i class="fas fa-video"></i> Watch Video
                            </a></p>
                        </div>
                    </div>
                </div>
            
                <div id="modal3" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="hideModal('modal3')">&times;</span>
                        <h2>Symposium of CyberTalk'22 Website</h2>
                        <div class="box-content">
                            <h3>Description:</h3>
                            <p>Developed a college symposium website enabling candidates to register their details seamlessly. Designed and implemented an intuitive web interface that facilitated efficient registration and information management. This project highlights my web development skills and ability to create user-friendly platforms to streamline event registration processes.</p>
                            <p><strong>Role: </strong> Front-end and Responsive Design</p>
                            <p><strong>Link: </strong><a class="link-a" href="https://cybertalk22.netlify.app/" target="_blank">Cybertalk22</a></p>
                        </div>
                    </div>
                </div>
            
            </div>
       </div>
       <div id="contact">
        <h1 class="title">Contact</h1>
    
        <section class="contact section" id="contact">
            <div class="contact__container bg-grid">
                <form id="contactForm" class="contact__form" action="assets\php\send_email.php" method="post">
                    <input type="text" id="name" name="name" placeholder="Name" class="contact__input" required>
                    <input type="email" id="email" name="email" placeholder="Email" class="contact__input" required>
                    <textarea id="message" name="message" placeholder="Message" cols="30" rows="10" class="contact__input" required></textarea>
                    <input type="submit" value="Send" class="contact__button button">
                </form>
            </div>
        </section>





        <ul class="contact">
            <a href="https://www.facebook.com/profile.php?id=100040605194777&mibextid=ZbWKwL"><li><i class="fa-brands fa-facebook-f icon-color-facebook"></i></li></a>
            <a href="https://www.instagram.com/kk_the_lightning_king?igsh=OWIwenZydmR6M3p3"><li><i class="fa-brands fa-instagram icon-color-instagram"></i></li></a>
            <a href="https://github.com/KarthiSrinivasan25"><li><i class="fab fa-github icon-color-github"></i></li></a>
            <a href="https://www.linkedin.com/in/karthikeyan-s-217149238"><li><i class="fa-brands fa-linkedin icon-color-linkedin"></i></li></a>
        </ul>
       </div>
    </div>
    <footer class="footer">
        <p class="footer___copy">&#169; 2024 Karthikeyan S | All Rights Reserved</p>
    </footer>
    </div>

    
      <script src="assets/js/script.js"></script>
</body>
</html>