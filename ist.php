<!DOCTYPE html>
<HTML>
<HEAD>
<?php require_once("build/head.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/projects.css">
</HEAD>
<BODY class="bg-ist">

<?php require_once("build/header.php"); ?>

<div id="wrapper">
    <section id="introduction">
        <div class="content tall">
            <div class="vertical-align center">
                <h1 class="project-title white text-center">RIT IST Website Redesign</h1>
                <p class="project-subtitle white text-center">redesign of the RIT IST website</p>
                <div class="project-links">
                    <a href="https://people.rit.edu/~yxk6281/iste340/project02/"><div class="deck-button">demo</div></a> <a href="https://github.com/YouMeKim/RIT-IST-Site-Redesign"><div class="deck-button">github</div></a>
                </div>
            </div>
        </div>
    </section>
    <section id="overview" class="bg-white">
        <div class="content">
            <h1>RIT IST Website Redesign</h1>
            <p>This project was a submission for a RIT hosted competition on redeisgning the <a target="_blank" href="http://ist.rit.edu/index.php">IST Department website</a>. All information used in this site was pulled from the <a target="_blank" href="http://ist.rit.edu/api/">IST Site API</a>. As part of the competition, all information provided in the API was utilized and assets were used from various web sources.</p>
            <img class="block center" style="width: 480px;" alt="screen" src="assets/projects/ist/screen1.jpg">
        </div>
    </section>
    <section id="api" class="overlay-blacker white">
        <div class="content">
            <h1>API</h1>
            <p>The <a target="_blank" href="">IST Site API</a> is a comprehensive </p>
            <div class="fourth-first">
                <h3><a target="_blank" href="http://ist.rit.edu/api/about/">About</a></h3>
                <p>A short introduction to the site and its purpose.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/degrees/">Degrees</a></h3>
                <p>Lists out undergraduate and graduate degrees offered from the IST department at RIT for students.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/minors/">Minors</a></h3>
                <p>List of minors offered to students from the IST department.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/employment/">Employment</a></h3>
                <p>List of past co-op and full-time employment information from current and past students.</p>
            </div>
            <div class="fourth-first">
                <h3><a target="_blank" href="http://ist.rit.edu/api/people/">People</a></h3>
                <p>List of all faculty and staff employed by the department.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/research/">Research</a></h3>
                <p>List of research papers authored by staff and faculty from the IST department. Sortable by interest or author.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/resources/">Resources</a></h3>
                <p>List of resources available to students on various topics.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/news/">News</a></h3>
                <p>Recent news and posts from the IST department at RIT.</p>
            </div>
            <div class="fourth-first">
                <h3><a target="_blank" href="http://ist.rit.edu/api/footer/">Footer</a></h3>
                <p>Social media and helpful links to be included in the website footer.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/courses/">Courses</a></h3>
                <p>Lists all courses available and required by degree.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/contactForm/">Contact Form</a></h3>
                <p>HTML document of the contact form for submitting questions and comments to the IST department at RIT.</p>
            </div>
            <div class="fourth">
                <h3><a target="_blank" href="http://ist.rit.edu/api/map/">Maps</a></h3>
                <p>Returns employment map in HTML form.</p>
            </div>
        </div>
    </section>
    <section id="technologies" class="bg-grey-light">
        <div class="content">
            <h1>Technologies</h1>
            <p>This project is primarily written in HTML, CSS, and JavaScript. I used AJAX to access data from the <a target="_blank" href="http://ist.rit.edu/api/">IST Site API</a> through jQuery. I decided to utilize JavaScript due to the need to query for data auto synchronously while the user accesses the site.</p>
            <h3>jQuery Plugins</h3>
            <div class="fourth-first">
                <h4><a target="_blank" href="https://jqueryui.com/">jQuery UI</a></h4>
                <p>jQuery UI is a set of user interface interactions, effects, widgets, and themes build on top of the jQuery library. Various components were utilized in this project.</p>
            </div>
            <div class="fourth">
                <h4><a target="_blank" href="https://plugins.jquery.com/remodal/">Remodal</a></h4>
                <p>Remodal is a lightweight modal plugin that is highly customizable.</p>
            </div>
            <div class="fourth">
                <h4><a target="_blank" href="https://plugins.jquery.com/typist/">Typist</a></h4>
                <p>Typist is an animated typing plugin. This plugin was utlized in the testimonial section of the redesign.</p>
            </div>
            <div class="fourth">
                <h4><a target="_blank" href="https://datatables.net/">Datatables</a></h4>
                <p>Datatables is a highly flexible jQuery plugin used to manipulate and display tables of data. The Past Employers and Past Coop tables were displayed using Datatables.</p>
            </div>
            <div class="half-first">
                <img style="width: 100%;" alt="screen" src="assets/projects/ist/screen2.jpg">
            </div>
            <div class="half">
                <img style="width: 100%;" alt="screen" src="assets/projects/ist/screen3.jpg">
            </div>
        </div>
    </section>
    <section id="design" class="bg-white">
        <div class="content">
            <h1>Design</h1>
            <div class="half-first">
                <h3>Font</h3>
                <img style="width: 75%;" alt="font" src="assets/projects/ist/font.png">
                <p>I decided to go with <a target="_blank" href="https://www.google.com/fonts/specimen/Open+Sans">Open Sans</a> from Google Fonts for the website due to it's clean, simple nature. I was also looking for a font with a variety of weights available to use.</p>
            </div>
            <div class="half">
                <h3>Color Scheme</h3>
                <img style="width:460px;" class="colors center" alt="colors" src="assets/projects/ist/colors.jpg">
                <p>To keep in theme with RIT, the official RIT orange was used for the website. In addition, I decided to keep with a greyscale to create a neutral design for the orange to pop out.</p>
            </div>
        </div>
    </section>
</div>

<?php require_once("build/footer.php"); ?>

</BODY>
</HTML>
