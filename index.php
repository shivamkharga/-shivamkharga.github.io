<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
                    
            $emailTo = "me@shivamkharga.com";
            
            $subject = $_POST['subject'];
            
            $content = "From: ".$_POST['name']."<br><br>Message:<br>".$_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, I\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
  
            }
            
        }   
        
    
?>
<html>
	<head>
         <title> Portfolio - Shivam Kharga </title>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" >
        
		
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link	rel="stylesheet"	href="styles/mobile.css"	media="screen	and (orientation : portrait) "	/>
        <link rel="stylesheet" type="text/css" href="styles/style.css" media="screen	and (orientation : landscape) " >
        
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script src ="script/script.js"></script>
        
	</head>
	
	<body>
<!-- Describing the header portion of the bodloy-->
        <header id = "top">
            <span class="openbtn nav" > &#9776; </span>
                 Welcome !!! 
        </header>
                
        <div id = "sidenav">
             <a href="javascript:void(0)" class="closebtn nav">&times;</a>
            <div class= "image">
                <img id="profile-img" src="resources/images/profile.jpg"/></div>
                
            <p id ="profile-caption"> Shivam Kharga <br> <span style="font-size:22px; margin-top:1px;">Computer Science Student</span></p>
            <div class="navigation">
                <ul>
                    <a  onclick="closeLight()" href="#first"><li class="nav-bar">About me</li></a>
                    <a onclick="openLight(1)"><li class="nav-bar"> Education</li></a>
                    <a onclick="openLight(2)"><li class="nav-bar">Relevant Courses</li></a>
                    <a onclick="openLight(3)"><li class="nav-bar">Projects</li></a>
                    <a onclick="closeLight()" href="#skills-box"><li class="nav-bar">Skills</li></a>
                    <a onclick="openLight(5)"><li class="nav-bar">Involvements</li></a>
                    <a onclick="openLight(4)"><li class="nav-bar">Work Experiences</li></a>
                    <a onclick="openLight(6)"><li class="nav-bar">Resume</li></a>
                    <a onclick="closeLight()" href="#content"><li class="nav-bar">Contact</li></a>
                </ul>

            
            </div>
        </div>
        
        
<!-- Describing the main portion of the document-->
        <main>
                                  <div id="error" styel="width:80vw;"><?php echo $error.$successMessage; ?></div>

            <div id="first"> Hi There!
            </div>           
             <div class="hi">           
             I am a rising Senior with a keen interest in technologies; always perseverant in learning innovative ideas and utilizing them ingeniously.
            </div>
            <br>
               <div id="interest-box">
                  <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapse1">&#10095; Interests:</a> </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                             
                                <figure>
                                    <img class = "interest" src="resources/images/novel.jpg" >
                                    <figcaption> Reading Novels</figcaption>
                                </figure>
                                
                                <figure>
                                    <img class = "interest" src="resources/images/cricket.jpg">
                                    <figcaption> Playing Cricket</figcaption>
                                </figure>
                                
                                <figure>
                                    <img class = "interest" src="resources/images/tv.png">
                                    <figcaption> Watching TV</figcaption>
                                </figure>
                                
                                <figure>
                                    <img class = "interest" src="resources/images/music.jpg">
                                    <figcaption> Listening Songs</figcaption>
                                </figure>
                                            
                                        
                            </div>
                          </div>
                        </div>
                         </div> 
                   </div>
            <div id="goal-box">
             <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapse2">&#10095; Goals</a> </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                
                                <UL>
                                    <li>To obtain a professional position in the consulting industry utilizing my relevant experience, technical expertise, and problem solving skills</li>
                                    <li>To use mycomputer science knowledge in software development for designing web apps.</li>
                                    <li>To work in a company that will enable me to use my strong organizational skills, award-winning educational background, and ability to work well with people.</li>
                                    <li>To find a job where skills in mathematics, computer programming and deductive reasoning will contribute to new systems development.</li>
                                    <li>To Maximize my management, quality assurance, program development, and training experiences.</li>
                                    <li>To become a Full Stack Developer.</li>  
                                </UL>
                                
                                
                              </div>
                        </div>
                 </div>
            </div>
            </div>
            
                
                
                             <div class="box" onclick="openLight(1)">
                                <div class="box-before"></div>
                                <img class = "box-img" src="resources/images/education.jpg">
                                <div class ="box-caption">Education</div>
                                <div class="box-after"></div>
                                 
                                    

                            </div>
                            
                            <div class="box" onclick="openLight(2)">
                                 <div class="box-before"></div>
                                    <img class = "box-img" src="resources/images/course.jpg">
                                    <div class ="box-caption">Coursework</div>
                                <div class="box-after"></div>

                            </div>
                            
                            <div class="box" onclick="openLight(3)">
                                 <div class="box-before"></div>
                                    <img class = "box-img" src="resources/images/project.jpg">
                                    <div class ="box-caption">Projects</div>
                                <div class="box-after"></div>

                            </div>
                             <div class="box" onclick="openLight(4)">
                                 <div class="box-before"></div>
                                    <img class = "box-img" src="resources/images/work.jpg">
                                    <div class ="box-caption">Work Experiences</div>
                                <div class="box-after"></div>
                            </div>
                        
                            <div class="box" onclick="openLight(5)">
                                 <div class="box-before"></div>
                                    <img class = "box-img" src="resources/images/involve.jpg">
                                    <div class ="box-caption">Involvements</div>
                                <div class="box-after"></div>
                            </div>
                            <div class="box" onclick="openLight(6)">
                                 <div class="box-before"></div>
                                    <img class = "box-img" src="resources/images/resumeIcon.jpg">
                                    <div class ="box-caption">Resume</div>
                                <div class="box-after"></div>
                            </div>
                    
            
                  <div  id="light1">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">EDUCATION</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr>
                            <article class="details">
                                <img class="detail-img" src="resources/images/uni.JPG"/>
                                <div class="detail-desc">
                                    <strong ><a href="http://www.ulm.edu"><span style="padding: none; color:black">The&nbsp;University&nbsp;of&nbsp;Louisiana&nbsp;Monroe</span></a> <br/>                                    </strong><hr>
                                    Computer Science<br/>
                                    Bachelor of Science (B.S.)<br/>
                                        May&nbsp;2019<br>
                                        GPA 3.96
                                </div>
                            </article>

                         </div>
                      </div>

        
             <div  id="light2">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">COURSEWORK</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr/>
                            <article class="details">
                                
                                    <OL>
                                        <li>Design and Analysis of Algorithms</li>
                                        <li>Theory of Data Base Management Systems</li>
                                        <li>Computer Organization and Assembly Language Programming </li>
                                        <li>Internet Programming </li>
                                        <li>Data Structures </li>
                                        <li>Discrete Mathematics </li>
                                        <li>Object-Oriented Design and Programming </li>
                                        <li>Operating Systems </li>
                                        <li>Organization of Programming Languages </li>
                                        <li>Networks and Data Communications </li>
                                        <li>Advanced Networking </li>
                                        <li>Information Security Management </li>
                                        <li>Ethical and Professional Issues in Computing </li>
                                        <li>Calculus </li>
                                        <li>Linear Algebra </li>
                                        <li>Elementary Mathematical Statistics </li>
                                    </OL>
                                    
                            </article>

                         </div>
                      </div>
            
             <div  id="light3">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">PROJECTS</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr/>
                            <article class="details">
                                    <dt>TCP Simulation App</dt><hr>
                                        <UL>
                                        <li><dl>A web-based simulation that graphs the transmission of packets and compares the congestion control of TCP Tahoe and TCP Reno algorithm.</dl></li>
                                        <li><dl>A part of Honors Thesis Project that will be used as a teaching tool in the University.</dl></li>
                                            
                                </UL>
                                <strong>The project is under testing</strong><br>
                                   <a href="resources/Thesis/new.html"> <button>Link to the Project!</button></a>
                            </article>

                         </div>
                      </div>
            
            <div  id="light4">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">WORK EXPERIENCES</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr/>
                            <article class="details">

            
                                <div class="panel-group accordion2" id="accordion">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2" href="#collapse5" class ="work-head">&#10095; Help Desk Technician | ULM Computing Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="light-right-head">August 2017 – Present</span></a>
                                            </h4>
                                          </div>
                                          <div id="collapse5" class="panel-collapse collapse in">
                                            <div class="panel-body"><UL>
                                                        <li>Troubleshoot hardware and software issues through phone or in-person.</li>
                                                        <li>Install, modify, and repair computer hardware and software.</li>
                                                        <li>Image computers, set up devices into network and resolve technical issues.</li>
                                                        <li>Provide excellent customer service by effective dealing with clients.</li>
                                                        <li>Run reports to determine issues that continue to occur and find solution.</li>
                                                        <li>Follow up with customers to ensure issue has been resolved.</li>
                                                    </UL></div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2" href="#collapse6" class ="work-head">&#10095; Call Center Agent | ULM Computing Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="light-right-head">May 2017 – August 2017</span></a>
                                            </h4>
                                          </div>
                                          <div id="collapse6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <UL>
                                                        <li>Used SSH in a terminal to reset the students’ credentials.</li>
                                                        <li>Created tickets for technical issues to the concerning departments.</li>
                                                    </UL>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent=".accordion2" href="#collapse7" class ="work-head">&#10095; Mathematics Tutor | eULM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="light-right-head">September 2015 – May 2017 </span></a>
                                            </h4>
                                          </div>
                                          <div id="collapse7" class="panel-collapse collapse">
                                            <div class="panel-body"> <UL>
                                                        <li>Tutored math to students and helped them score good grades.</li>
                                                        <li>Distributed supplemental materials to distance learners.</li>
                                                    </UL></div>
                                          </div>
                                        </div>
                                       

                                <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" data-parent=".accordion2" href="#collapse8" class ="work-head">&#10095;Student Assistant | TEACH ULM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="light-right-head">June 2016 – August 2016</span></a>
                                            </h4>
                                          </div>
                                          <div id="collapse8" class="panel-collapse collapse">
                                            <div class="panel-body"><UL>
                                                        <li>Attended phone calls, organized files and managed the database.</li>
                                                        <li>IEdited videos of interviews and demo lessons of teaching interns.</li>
                                                        <li>Set up the Summer Camp site for teaching interns.</li>
                                                        
                                                    </UL></div>
                                          </div>
                                        </div>
                                      </div> 
                                
                                </article>    

                         </div>
                      </div>

                    


            <div  id="light5">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">INVOLVEMENTS</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr/>
                            <article class="details">
                                <strong>Leadership</strong>
                                <br>
                                <table>
                                    <thead>
                                        <th>Position</th>
                                        <th>Organization</th>
                                        <th>Year</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senator</td>
                                            <td>Student Government Association</td>
                                            <td>March 2017 - Present</td>
                                        </tr>
                                        <tr>
                                            <td>Member</td>
                                            <td>Campus Activities Board</td>
                                            <td>September 2017 - Present</td>
                                        </tr>
                                        <tr>
                                            <td>Member</td>
                                            <td>ULM Scouts</td>
                                            <td>August 2017 - Present</td>
                                        </tr>
                                        <tr>
                                            <td>President</td>
                                            <td>Nepalese Student Association</td>
                                            <td>August 2016 - August 2017</td>
                                        </tr>
                                    </tbody>
                                </table>    
                                <br>
                                <strong> Honors</strong>
                                <UL>
                                    <li>Participated and successfully completed Emerging Scholars Program 2016 - 2017.</li>
                                    <li>Ranked 2nd in 2016 ACM/IEEE Programming Contest in the University.</li>
                                    <li>Enrolled in Honors Program in the University.</li>
                                    <li>Member of Association of Computing Machinery (ACM).</li>
                                </UL>
                                    
                            </article>    

                         </div>
                      </div>
            
            <div  id="light6">
                      <div class="back-light-box"></div>
                            <div class="light-box">
                            <h3 class="light-box-head">RESUME</h3><a href="javascript:void(0)" class="light-box-close closeModal" onclick="closeLight()">&times;</a>
                            <hr/>
                            <article class="details">
                                <div id="resume-img">
                                    <img src="resources/images/resume.jpg">
                                    </div>
                                
                                <a href="resources/Resume_Shivam_kharga.pdf" download><button id="resume">Download Resume !</button></a>
                                
                                </article>    

                         </div>
                      </div>


            

            <div id="skills-box">
             <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapse3">&#10095; Skills</a> </h4>
                          </div>
                          <div id="collapse3" class="panel-collapse collapse in">
                            <div class="panel-body">
                            <div class="group-book">
                                <div class="books book1">Java</div>
                                <div class="books book2">C++</div>
                                <div class="books book3">Python</div>
                                <div class="books book4">HTML</div>
                                <div class="books book5">CSS</div>
  
                            </div>
                            <div class="group-book">
                                <div class="books book1">BootStrap</div>
                                <div class="books book2">JavaScript</div>
                                <div class="books book3">JQuery</div>
                                <div class="books book4">D3</div>
                                <div class="books book5">JSON</div>
                            </div>
                            
                               <div class="group-book">
                                <div class="books book1">AJAX</div>
                                <div class="books book2">SQL</div>
                                <div class="books book3">PHP</div>
                                <div class="books book4">Graphics Designing</div>
                                <div class="books book5">Camtasia</div>
                            </div>
                                
                             <div class="group-book">
                                <div class="books book1"><span style="font-size:18px">LAN/WAN, TCP/IP</span></div>
                                 <div class="books book2"><span style="font-size:18px">DNS, DHCP, SSH, VPN</span></div>
                                <div class="books book3">phpMyAdmin</div>
                                <div class="books book4">Web Hosting</div>
                                 <div class="books book5"><span style="font-size:16px; padding:2px;">Content Management Systems</span></div>
                            </div>
                                
                              </div>
                        </div>
                 </div>
            </div>
            </div>
            
            
              
                                   
         
<!-- Describing the footer portion of the body that contains the contact information and navigation to the top of the document-->
            
        <footer>
                <div id="content">
              
                <h1>Contact me here!</h1>
      
                      <div id="error2"></div>
                <div class="form">    
                <form method="post">
                    <fieldset class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name   ">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    <small class="text-muted">Your email will not be shared with anyone else.</small>
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="exampleTextarea">Message</label>
                    <textarea class="form-control" id="content-box" name="content" rows="3"></textarea>
                  </fieldset>
                  <button type="submit" id="submit" class="btn btn-primary" >Submit</button>
                </form>
         </div>
       <script type="text/javascript">
      $("form").submit(function(e) {

              var error = "";
              
        if ($("#name").val() == "") {
                  
                  error += "The name field is required.<br>"
                  
              }
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content-box").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error2").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          });
                    </script>
                <p class="center-align">
                    <a href="https://www.facebook.com/kharga.shivam"> <img class="icon" src="/resources/images/facebook.svg" ></a>
				    <a href="https://www.instagram.com/shivam_kharga"> <img class="icon" src="resources/images/instagram.png" ></a>
					<a href="https://www.twitter.com/shivamKharga"> <img class="icon" src="resources/images/twitter.png" ></a>
					<a href="mailto:shivam.kharga@hotmail.com"> <img class="icon" src="resources/images/email.svg" ></a>
					<a href="tel:+13183163677"> <img class="icon" src="resources/images/call.png"></a>
                </p>
                
          </div>
        </footer>
            
        </main>

	</body>
</html>
