<?php
$con = mysqli_connect('localhost', 'root', '', 'ali');
$query = "SELECT * from detail where id=1"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Resume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
</head>
<body>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$position =$_REQUEST['position'];
$email =$_REQUEST['email'];
$phone =$_REQUEST['phone'];
$website =$_REQUEST['website'];


$update="update detail set name='".$name."',
position='".$position."', email='".$email."',
phone='".$phone."', website='".$website."' where id= 1";
mysqli_query($con, $update) or die(mysqli_error());
header('location: resume.php');
}else {
?>
<div>
<form name="form" method="post" action=""> 


<div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <input type="hidden" name="new" value="1" />
                <input style="text-align: center;" name="name" value="<?php echo $row["name"]; ?>" placeholder="Enter Name" ></input>
                <input style="text-align: center;" name="position" value="<?php echo $row["position"]; ?>"placeholder="Enter Position"></input>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><input style="text-align: center;" name="email" value="<?php echo $row["email"]; ?>"placeholder="Enter Email"></input></li>
                    <li class="phone"><i class="fas fa-phone"></i><input style="text-align: center;" name="phone" value="<?php echo $row["phone"]; ?>"placeholder="Enter Phone Number"></input></li>
                    <li class="website"><i class="fas fa-globe"></i><input style="text-align: center;" name="website" value="<?php echo $row["website"]; ?>"placeholder="Your Website"></input></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">MSc in Computer Science</h4>
                    <h5 class="meta">University of London</h5>
                    <div class="time">2011 - 2012</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">BSc in Applied Mathematics</h4>
                    <h5 class="meta">Bristol University</h5>
                    <div class="time">2007 - 2011</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Professional)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            <span>
            <button style="margin-left: 20px;" type="button" class="btn btn-warning"><input name="submit" type="submit" value="Update" /></button>
            </span>

            <span>
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/" target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Lead Developer</h3>
                            <div class="time">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>  
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Senior Software Engineer</h3>
                            <div class="time">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class="company">Google, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class="company">Amazon, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>
                    
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> - 
                    <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title">Python &amp; Django</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                              
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Angular</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
                                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                                
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                                  
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                                 
                    </div><!--//item-->

<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>

                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
</form>
<?php } ?>
</div>
</div>
</body>
</html>