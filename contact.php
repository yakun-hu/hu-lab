<?php require 'php_local_libs/header-inc.php'; ?>
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
  grid-gap: 1px; padding: 10px; height: 1590px; width: 1000px; grid-template-rows: 200px 50px 150px 750px 400px; grid-template-columns: 4fr 1fr; text-align: left;}
.grid-container > div { padding-top: 10px; padding-left: 10px; } 
</style></head><body><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color: white"><a style="color: white" href="css.grid-test,6.php">Home</a> | <?php echo $team_full_element; ?> | 
<a style="color: white" href="student-resources.php">Student-Resources</a> | <a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <?php echo $research_full_element;?> | Contact</p></div>
<div class="item6"><h4 style="display:inline"><a href=https://arts-sciences.buffalo.edu/cds/clinic/who-we-are.html">CDS-clinic</a>: University at Buffalo:</h4>
<p>52 Biomedical Education Building (South Wing) | South Campus | Buffalo, New York | 14214-8016 | Phone: 716.829-3980 | Fax: 716.829-3974</p></div>
<div class="item3"><h2>main:</h2><br><div style="display:flex;color:FFFFFF">
<div style="background-color:2F3A84;margin:10px;padding:20px;flex-grow:1;height:160px;color:B13B3A">Henderson D. Involvement of p53 and Bcl-2 in sensory cell degeneration in aging rat cochleae. Acta oto-laryngologica.<br><br><button>Place-Holder</button></div>
<div style="background-color:F0B5B5;margin:10px;padding:20px;flex-grow:1;height:160px;color:FFF0CB">UB is renowned for the special attention it gives to international undergraduate students.<br><br><button>Place-Holder</button></div>
<div style="background-color:38761D;margin:10px;padding:20px;flex-grow:1;height:160px;color:F1C232">We are New York State's leading public center for graduate and professional education.<br><br><button>Place-Holder</button></div></div><p><br></p></div>
<div style="color:FFFFFF" class="item4"><h2>Footer: References:</h2><br>
<p>> <a style="color:FFD86C;font-size:10px;font-weight:bold" href="https://www.buffalo.edu/home/academics/schools_and_colleges.html" target="_blank">Schools and Colleges</a><br>
> <a style="color:FFFFFF" href="http://archplan.buffalo.edu/" target="_blank">Architecture and Planning</a><br>
> <a style="color:FFFFFF" href="http://arts-sciences.buffalo.edu/" target="_blank">Arts and Sciences</a><br>
> <a style="color:FFFFFF" href="http://dental.buffalo.edu/" target="_blank">Dental Medicine</a><br>
> <a style="color:FFFFFF" href="http://ed.buffalo.edu/" target="_blank">Education</a><br>
> <a style="color:FFFFFF" href="http://engineering.buffalo.edu/" target="_blank">Engineering and Applied Sciences</a><br>
> <a style="color:FFFFFF" href="http://medicine.buffalo.edu/" target="_blank">Jacobs School of Medicine and Biomedical Sciences</a><br>
> <a style="color:FFFFFF" href="http://www.law.buffalo.edu/" target="_blank">Law</a><br>
> <a style="color:FFFFFF" href="https://management.buffalo.edu/" target="_blank">Management</a><br>
> <a style="color:FFFFFF" href="http://nursing.buffalo.edu/" target="_blank">Nursing</a><br>
> <a style="color:FFFFFF" href="http://pharmacy.buffalo.edu/" target="_blank">Pharmacy and Pharmaceutical Sciences</a><br>
> <a style="color:FFFFFF" href="http://publichealth.buffalo.edu/" target="_blank">Public Health and Health Professions</a><br>
> <a style="color:FFFFFF" href="https://www.roswellpark.org/education" target="_blank">Roswell Park Graduate Division</a><br>
> <a style="color:FFFFFF" href="http://socialwork.buffalo.edu/" target="_blank">Social Work</a></p></div>
<div class="item5"><h3>Bohua Hu, Ph.D.</h3><h4>CCC-A</h4><p>Associate Professor<br>
<b>Department</b> of Communicative Disorders and Sciences<br>
Center for Hearing and Deafness<br>
State University of New York at Buffalo<br>
137 Cary Hall, 3435 Main St.<br>
Buffalo, NY 14214<br>
Tel: 716-829-5316<br>
e-mail: bhu@buffalo.edu<br></p></div></div></body>
<!-- concept-map:
	In display:flex, the 3 column container in div-main, I can potentially use various align-properties<Hu.lab-web,Refs.H2S2-H4S2>
<!-- test-url: http://hu-lab/~.php -->
<!-- issues-list--> 
<!-- testing-log:-->
<!-- references:-->