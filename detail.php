<?php
// INSERT DATA HERE.
$members = array(
	array(
		'name' => 'Logan Poe',
		'position' => 'Front End',
		'email' => 'loganpoe430@gmail.com',
		'image' => 'picture.jpg',
		'number' => '859 308 2175',
		'linked' => 'logan-poe-b70786289/',
		'git' => 'LogaPoe',
		'website' => 'https://logapoe.github.io/ASE220_Assignment1_Personal_Website/',
		'sum' => 'Dedicated Software Engineering student with great knowledge in informatic technologies and multiple coding languages who is seeking a internship or co-op in the software engineering field, preferably in the greater Cincinnati area. Able to work remotely and will accept hybrid or on site roll in the greater Cincinnati area.',
		'title' => 'Contractor',
		'timeline' => '2021 -2022',
		'desc' => 'I helped find parts and bring them to there desired locations. I also helped test machines and made sure everything was running smothly on the floor.',
		'Skill1' => 'Coding',
		'Skill2' => 'Microsoft Programs',
		'major' => 'Bachelors in Applied Software Engineering',
		'school' => 'Northern Kentucky University',
		'graddate' => '2021-present',
		'int1' => 'Gaming',
		'int2' => 'TV/Movies',
		'int3' => 'Reading',
	),
	array(
		'name' => 'Tom Cruise',
		'position' => 'Back End',
		'email' => 'tomcruise@gmail.com',
		'image' => 'tom_cruise.jpg',
		'number' => '123 123 1234',
		'linked' => 'tomcruise',
		'git' => 'tommy',
		'website' => 'tomcruise.com',
		'sum' => 'Im Tom Cruise...',
		'title' => 'Actor',
		'timeline' => 'forever',
		'desc' => 'I love acting!',
		'Skill1' => 'Acting',
		'Skill2' => 'Stunts',
		'major' => 'Bachelors in Acting',
		'school' => 'Acting University',
		'graddate' => '...',
		'int1' => 'Acting',
		'int2' => 'Stunts',
		'int3' => 'Movies',
	),
	array(
		'name' => 'Stock Guy',
		'position' => 'Coordinator',
		'email' => 'stockguy@gmail.com',
		'image' => 'profile.jpg',
		'number' => '123 456 7890',
		'linked' => 'stockguy',
		'git' => 'stockguy',
		'website' => 'stockguy.com',
		'sum' => 'Im Stock Guy...',
		'title' => 'Model',
		'timeline' => 'Indefinite',
		'desc' => 'I love modeling',
		'Skill1' => 'Posing',
		'Skill2' => 'Smiling',
		'major' => 'Bachelors in Modeling',
		'school' => 'Stock Photo University',
		'graddate' => '2021-present',
		'int1' => 'Smiling',
		'int2' => 'Standing',
		'int3' => 'Pictures',
	),
);
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
	<?php
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			echo $id;
		} else {
			echo '<p>No person selected.</p>';
		}
	?>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/<?php echo $members[$id]['image']; ?> " alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $members[$id]['name']; ?></h1>
							    <div class="title mb-3"><?php echo $members[$id]['position']; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $members[$id]['email']; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $members[$id]['number']; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/<?php echo $members[$id]['linked']; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/<?php echo $members[$id]['git']; ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $members[$id]['website']; ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $members[$id]['sum']; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $members[$id]['title']; ?></h3>
										        <div class="resume-company-name ms-auto">Startup Hub</div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $members[$id]['timeline']; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $members[$id]['desc']; ?></p>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $members[$id]['Skill1']; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $members[$id]['Skill2']; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $members[$id]['major']; ?></div>
								        <div class="resume-degree-org"><?php echo $members[$id]['school']; ?></div>
								        <div class="resume-degree-time"><?php echo $members[$id]['graddate']; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo $members[$id]['int1']; ?></li>
								    <li class="mb-1"><?php echo $members[$id]['int2']; ?></li>
								    <li class="mb-1"><?php echo $members[$id]['int3']; ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

