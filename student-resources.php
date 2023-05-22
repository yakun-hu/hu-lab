<?php require 'php_local_libs/header-inc.php';?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F;}
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F;}
.item6 { grid-area: div-1; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; margin-right: 20px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item3 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; width: 650px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item4 { grid-area: footer; background-color: #005BBB; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F;}
.item5 { grid-area: sidebar; background-color: #FFF2CC; margin-left: 25px; margin-top: 10px; margin-right: 50px; width: 220px; border-style: solid; border-width: 5px; border-color: #CC0000; }
.grid-container { display: grid; grid: 'primary-header primary-header' 'nav-bar nav-bar' 'div-1 div-1' 'main sidebar' 'footer footer';
  grid-gap: 1px; padding: 10px; height: 1390px; width: 1000px; grid-template-rows: 200px 50px 150px 750px 200px; grid-template-columns: 4fr 1fr; text-align: left;}
.grid-container > div { padding-top: 10px; padding-left: 10px; } 
</style></head><body><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color: white"><a style="color: white" href="css.grid-test,6.php">Home</a> | <?php echo $team_full_element; ?> | Student-Resources | 
<a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <?php echo $research_full_element; ?> | <a style="color: white" href="contact.php">Contact</a></p></div>
<div class="item6"><h1>div-1:</h1><p><br>
Stud-res:</p></div>
<div class="item3"><h2>main:</h2><br><p>
Students seeking resource-positions: see site Footer, here:</p></div>
<div style="color:FFFFFF" class="item4"><h2>Footer:</h2>
<h4>Graduate students</h4>
<p>Will participant in lab experiments (hearing test, data analysis and others)</p>
<h4>Postdoctoral Positions</h4>
<p>With strong background in cellular and molecular biology, and/or mouse genetics.</p>
<h4>Visiting students/scholars</h4>
<p>With strong background in hearing science</p></div>
<div class="item5"><h3>Bohua Hu, Ph.D.</h3><h4>CCC-A | Associate Professor</h4>
<p><b><a href="http://hu-lab/message-board.php?board=department&pg_数=1">Dept</a> of Communicative Disorders & Sci:</b><br>
122 Cary Hall, South Campus | Buffalo, NY 14214 | 716.829-2797 | 716.829-3979[fax]  cdsdept@buffalo.edu<br>
<b>Center for Hearing and Deafness:</b><br>
<h4>Dept-services:</h4>
<p>Dir of grad-admission;</p>
<h4>Teaching-services:</h4>
<ul style="font-family: Arial; font-size: 10.666px; font-style: normal; font-variant: normal; font-weight: normal; line-height: 18.4px; margin-top: 0px; margin-bottom: 0px;"><li>CDS611 Medical Audiology (2013-present)</li>
<li>CDS687 Industrial Audiology (2014-present)</li>
<li>CDS 551 Diagnostic Audiology I (2006-present)</li>
<li>CDS 552 Diagnostic Audiology II (2013-present)</li>
<li>CDS 499/600 Independent Study (2006-present)</li>
<li>CDS 700 Thesis Guidance (2006-present)</li>
<li>CDS 484/529 Aural Rehabilitation (2006-2012)</li>
<li>CDS 502 Research Methods and Design (2006-2013)</li>
<li>CDS 497 Dept Honor Thesis/Project</li>
<li>CDS 498 Ug Research & Creative (2006-present)</li>
<li>CDS687J Clinical and Basic Research in Audiology (2009, Summer)</li>
<li>CAS 101 Trends in Arts and Sciences (Fall ’09) (guest speaker)</li></ul>
</p></div></div></body>
<!-- concept-map:
	In display:flex, the 3 column container in div-main, I can potentially use various align-properties<Hu.lab-web,Refs.H2S2-H4S2>
<!-- test-url: http://hu-lab/~.php -->
<!-- issues-list
	12.31-22,4th.15: Adding a right padding to the sidebar-elem changes its total-width --> 
<!-- testing-log:-->
<!-- references:-->