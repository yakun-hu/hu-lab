<?php require 'php_local_libs/header-inc.php'; ?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F;}
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F;}
.item6 { grid-area: div-1; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; margin-right: 20px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item3 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; width: 650px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item4 { grid-area: footer; background-color: #FFFFFF; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F;}
.item5 { grid-area: sidebar; background-color: #FFF2CC; margin-left: 25px; margin-top: 10px; margin-right: 50px;
	width: 220px; border-style: solid; border-width: 5px; border-color: #CC0000; }
.grid-container { display: grid;
  grid: 'primary-header primary-header' 'nav-bar nav-bar' 'div-1 div-1' 'main sidebar' 'footer footer';
  grid-gap: 1px; padding: 10px; height: 1390px;
  width: 1000px; grid-template-rows: 200px 50px 150px 750px 200px; grid-template-columns: 4fr 1fr; text-align: left;}
.grid-container > div { padding-top: 10px; padding-left: 10px; } 
</style></head><body style="background-color:#F8F8F8"><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color: white">Home | <?php echo $team_full_element; ?> | <a style="color: white" href="student-resources.php">Student-Resources</a> | 
<a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <?php echo $research_full_element;?> | <a style="color: white" href="contact.php">Contact</a></p></div>
<div class="item6"><h1>div-1:</h1><p><br>
Background: The human cochlea was earlier believed to lack capacity to mount specific immune responses. Recent studies established that the human cochlea holds macrophages. 
The cells appear to surveil, dispose of, and restore wasted cells to maintain tissue integrity. 
Macrophage activities are believed to be the central elements in immune responses and could swiftly defuse invading microbes that enter via adjacent infection-prone areas. 
This review updates recent human studies in light of the current literature and adds information about chemokine gene expression.</p></div>
<div class="item3"><h2>main:</h2><br>
<p>0) Zhang C, Sun W, Li J, Xiong B, Frye MD, Ding D, Salvi R, Kim MJ, Someya S, Hu BH. Loss of sestrin 2 potentiates the early onset of age-related sensory cell degeneration in the cochlea. Neuroscience. 2017;361:179-91.
<br>1) Sheppard AM, Chen GD, Manohar S, Ding D, Hu BH, Sun W, Zhao J, Salvi R. Prolonged low-level noise-induced plasticity in the peripheral and central auditory system of rats. Neuroscience. 2017;359:159-71.
<br>2) Xu Y, Yang WP, Hu BH, Yang S, Henderson D. Involvement of p53 and Bcl-2 in sensory cell degeneration in aging rat cochleae. Acta oto-laryngologica. 2017;137(6):572-80.
<br>3) Frye MD, Yang W, Zhang C, Xiong B, Hu BH. Dynamic activation of basilar membrane macrophages in response to chronic sensory cell degeneration in aging mouse cochleae. Hear Res. 2017;344:125-34.
<br>4) Yang SZ, Cai QF, Vethanayagam RR, Wang JM, Yang WP, Hu BH. Immune defense is the primary function associated with the differentially expressed genes in the cochlea following acoustic trauma. Hear Res. 2016;333:283-94.
<br>5) Vethanayagam RR, Yang W, Dong Y, Hu BH. Toll-like receptor 4 modulates the cochlear immune response to acoustic injury. Cell Death Dis. 2016;7(6):e2245.
<br>6) Yang W, Vethanayagam RR, Dong Y, Cai Q, Hu BH. Activation of the antigen presentation function of mononuclear phagocyte populations associated with the basilar membrane of the cochlea after acoustic overstimulation. Neuroscience. 2015;303:1-15.
<br>7) Elam simply sucks[just.as-important!]</p></div>
<div class="item4"><h2>Footer: References:</h2><br>
<p>[div.p-1]AUTHOR=Liu Wei, Danckwardt-Lillieström Niklas | TITLE=Distribution of Immune Cells Including Macrophages in the Human Cochlea
URL=https://www.frontiersin.org/articles/10.3389/fneur.2021.781702</p></div>
<div class="item5"><h3>Bohua Hu, Ph.D.</h3><h4>CCC-A</h4><p>Associate Professor<br>
Department of Communicative Disorders and Sciences<br>
Center for Hearing and Deafness<br>
State University of New York at Buffalo<br>
137 Cary Hall, 3435 Main St.<br>
Buffalo, NY 14214<br>
Tel: 716-829-5316<br>
e-mail: bhu@buffalo.edu<br></p></div></div></body>
<!-- concept-map:
.place-holder {
	Hu-lab: H2S5.H3S1-H4S1 [D.grid-Sketch 观察]
	1) There will be 6 elements: 
		1a) Primary-header<super-nav> 1b) nav-bar 1c) div.p-1 1d) side-bar 1e) div-main:
		the div-main will take on the min-height of the side-bar; 
		1f) footer | Note-i: The nav-bar and footer will both take upon 比例-100 of grid-max
	2) 1c)和1e) set a ~50-px margin-ext, all.4-边 | The sidebar takes a 50.px-margin on all
		sides and 100-px on the right, or adheres left to div-main | 
	3) The 6 elements will stack-vert on 所有装置, 除 side.bar-z,zug 2/4 <1024 
} 
HTML:<div class="place-holder">-->
<!-- test-url: http://hu-lab/css.grid-test,6.php -->
<!-- issues-list	
12.31-22,3rd.14: We need 20.4^20x more flexibility.
Holy Grail Responsive 3-Column Layout (Floated Blocks) can be a backup option via Grid: 
https://matthewjamestaylor.com/holy-grail-layout--> 
<!-- testing-log:
12.31-22,3rd.18: 
	border: // hard-coded works only with verbal colors; 
	to define a border with custom colors, all of border.style-color,width have to be used, in the same element | 
12.31-22,3rd.17: 
	grid-template-columns is unresponsive in testing, at least in setting px-widths # in my wholesale 
	setup at the time<Notes-H3S1, Hu.lab-web,notes.G-doc
	| Kaaba.Muslim-Mecca, the "Black Box": youtube.com/watch?v=nflYs1SJLTk
-->
<!-- references
https://www.w3schools.com/cssref/tryit.php?filename=trycss_grid3 | 
l.o-a,2.https://www.w3schools.com/cssref/tryit.php?filename=trycss_grid-area
l.o-a,3.https://www.w3schools.com/cssref/tryit.php?filename=trycss_grid2
How to Create Website Layouts Using CSS Grid<Krossing>youtube.com/watch?v=HgwCeNVPlo0
CSS.grid-2<Krossing>https://www.youtube.com/watch?v=rErAwncfzVs
:-->