<?php require 'php_local_libs/header-inc.php'; ?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F;}
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F;}
.item3 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; width: 650px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item4 { grid-area: footer; background-color: #FFFFFF; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F;}
.item5 { grid-area: sidebar; background-color: #FFF2CC; margin-left: 25px; margin-top: 10px; margin-right: 50px;
	width: 220px; border-style: solid; border-width: 5px; border-color: #CC0000; }
.grid-container { display: grid;
  grid: 'primary-header primary-header' 'nav-bar nav-bar' 'main sidebar' 'footer footer';
  grid-gap: 1px; padding: 10px; height: 2770px;
  width: 1000px; grid-template-rows: 200px 50px 750px 1730px; grid-template-columns: 4fr 1fr; text-align: left;}
.grid-container > div { padding-top: 10px; padding-left: 10px; } 
.sub-tab { display: none; } .main-tab:hover .sub-tab { display: inline; }
</style></head><body style="background-color:#F8F8F8"><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color: white"><a style="color: white" href="css.grid-test,6.php">Home</a> | <?php echo $team_full_element; ?> | 
 <a style="color: white" href="student-resources.php">Student-Resources</a> | <a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <span class="main-tab">Research⬇️
 <button class="sub-tab" style="position:absolute;top:254;left:268px;background-color:2daf26;height:40px"><a href="research-methods.php" style="color:#00ffff;">Research-Focus</a></button>
 <button class="sub-tab" style="position:absolute;top:294;left:268px;background-color:2daf26;height:40px"><a href="research-methods.php" style="color:#00ffff;">Research-Achievement</a></button>
 <button class="sub-tab" style="position:absolute;top:334;left:268px;background-color:2daf26;height:40px"><a href="research-methods.php" style="color:#00ffff;">Research-Support</a></button>
 <button class="sub-tab" style="position:absolute;top:374;left:268px;background-color:2daf26;height:40px"><a href="research-methods.php" style="color:#00ffff;">Research-Methods</a></button></span>
 | <a style="color: white" href="contact.php">Contact</a></p></div>
<div class="item3"><p><?php require 'php_local_libs/mysql.query-inc.php'; 
$result = full_post_list_select1(); 
echo '<h2>Latest Publications:</h2>';
echo '<table><tr><th><h3>ID:</h3></th>';
echo '<th><h3>Title:</h3></th>';
echo '<th><h3>Date:</h3></th></tr>';
while($row = $result->fetch_assoc()) {
	echo '<tr>'; 
	echo '<td>' . $row['post_ID'] . '</td/>'; 
	echo '<td>' . '<a href="../post.page-test,1.php?author=' . $_SESSION['username'] . '&post_ID=' . $row['post_ID'] . '">' . $row['post_title'] . '</a></td/>';
	echo '<td>' . '<a href="delete-confirm.php?author=' . $_SESSION['username'] . '&post_ID=' . $row['post_ID'] . '">Delete</a></td></tr>';
}
echo '</table>';
?></p></div>
<div class="item4"><h2>Footer: References:</h2>
<h4>Selected publications:</h4>
<ol style="font-family: Arial; font-size: 10.666px; font-style: normal; font-variant: normal; font-weight: normal; line-height: 18.4px; margin-top: 0px; margin-bottom: 0px;"><li>Zhang C, Sun W, Li J, Xiong B, Frye MD, Ding D, Salvi R, Kim MJ, Someya S, Hu BH. Loss of sestrin 2 potentiates the early onset of age-related sensory cell degeneration in the cochlea. Neuroscience. 2017;361:179-91.</li>
<li>Sheppard AM, Chen GD, Manohar S, Ding D, Hu BH, Sun W, Zhao J, Salvi R. Prolonged low-level noise-induced plasticity in the peripheral and central auditory system of rats. Neuroscience. 2017;359:159-71.</li>
<li>Xu Y, Yang WP, Hu BH, Yang S, Henderson D. Involvement of p53 and Bcl-2 in sensory cell degeneration in aging rat cochleae. Acta oto-laryngologica. 2017;137(6):572-80.</li>
<li>Frye MD, Yang W, Zhang C, Xiong B, Hu BH. Dynamic activation of basilar membrane macrophages in response to chronic sensory cell degeneration in aging mouse cochleae. Hear Res. 2017;344:125-34.</li>
<li>Yang SZ, Cai QF, Vethanayagam RR, Wang JM, Yang WP, Hu BH. Immune defense is the primary function associated with the differentially expressed genes in the cochlea following acoustic trauma. Hear Res. 2016;333:283-94.</li>
<li>Vethanayagam RR, Yang W, Dong Y, Hu BH. Toll-like receptor 4 modulates the cochlear immune response to acoustic injury. Cell Death Dis. 2016;7(6):e2245.</li>
<li>Yang W, Vethanayagam RR, Dong Y, Cai Q, Hu BH. Activation of the antigen presentation function of mononuclear phagocyte populations associated with the basilar membrane of the cochlea after acoustic overstimulation. Neuroscience. 2015;303:1-15.</li>
<li>Wang D, Xiong B, Xiong F, Chen G-D, Hu BH, Sun W. Apical hair cell degeneration causes the increase in the amplitude of summating potential. Acta Oto-Laryngologica. 2016:1-6.</li>
<li>Yang SZ, Cai QF, Bard J, Jamison J, Wang JM, Yang WP, Hu BH. Variation analysis of transcriptome changes reveals cochlear genes and their associated functions in cochlear susceptibility to acoustic overstimulation. Hearing Research. 2015;330:78-89.</li>
<li>Wang B, Hu B, Yang S. Cell junction proteins within the cochlea: A review of recent research. Journal of Otology. 2015;10(4):131-5.</li>
<li>Guo Z, Tzvetkova B, Bassik JM, Bodziak T, Wojnar BM, Qiao W, Obaida MA, Nelson SB, Hu BH, Yu P. RNASeqMetaDB: a database and web server for navigating metadata of publicly available mouse RNA-Seq datasets. Bioinformatics. 2015;31(24):4038-40.</li>
<li>Cai Q, Wang B, Coling D, Zuo J, Fang J, Yang S, Vera K, Hu BH. Reduction in noise-induced functional loss of the cochleae in mice with pre-existing cochlear dysfunction due to genetic interference of prestin. PloS one. 2014;9(12):e113990.</li>
<li>Cai Q, Vethanayagam RR, Yang S, Bard J, Jamison J, Cartwright D, Dong Y, Hu BH. Molecular profile of cochlear immunity in the resident cells of the organ of Corti. Journal of Neuroinflammation. 2014;11(1):173.</li>
<li>Yang WP, Xu Y, Guo WW, Liu HZ, Hu BH. Modulation of Mcl-1 expression reduces age-related cochlear degeneration. Neurobiol Aging. 2013.</li>
<li>Patel M, Hu Z, Bard J, Jamison J, Cai Q, Hu BH. Transcriptome characterization by RNA-Seq reveals the involvement of the complement components in noise-traumatized rat cochleae. Neuroscience. 2013;248C:1-16.</li>
<li>Patel M, Cai Q, Ding D, Salvi R, Hu Z, Hu BH. The miR-183/Taok1 target pair is implicated in cochlear responses to acoustic trauma. PloS one. 2013;8(3):e58471.</li>
<li>Hu BH. High-Throughput Technologies for Gene Expression Analyses: What We Have Learned for Noise-Induced Cochlear Degeneration. Journal of Otology. 2013;8(1):25-31.</li>
<li>Cai Q, Whitcomb C, Eggleston J, Sun W, Salvi R, Hu BH. Round window closure affects cochlear responses to suprathreshold stimuli. Laryngoscope. 2013;123(12).</li>
<li>Cai Q, Wang B, Patel M, Yang SM, Hu BH. RNAlater facilitates microdissection of sensory cell-enriched samples from the mouse cochlea for transcriptional analyses. J Neurosci Methods. 2013;219(2):240-51.</li>
<li>Zheng G, Hu BH. Cell-cell junctions: a target of acoustic overstimulation in the sensory epithelium of the cochlea. BMC neuroscience. 2012;13:71.</li>
<li>Yang WP, Guo WW, Liu HZ, Xu Y, Chen L, Hu BH. Age-related changes in the ratio of Mcl-1/Bax expression in the rat cochlea. Acta Otolaryngol. 2012;132(2):123-32.</li>
<li>Tanaka C, Coling DE, Manohar S, Chen GD, Hu BH, Salvi R, Henderson D. Expression pattern of oxidative stress and antioxidant defense-related genes in the aging Fischer 344/NHsd rat cochlea. Neurobiol Aging. 2012;33(8):1842.e1-.e14.</li>
<li>Patel M, Hu BH. MicroRNAs in inner ear biology and pathogenesis. Hear Res. 2012;287(1-2):6-14. Epub 2012/04/10.</li>
<li>Hu BH, Cai Q, Hu Z, Patel M, Bard J, Jamison J, Coling D. Metalloproteinases and their associated genes contribute to the functional integrity and noise-induced damage in the cochlear sensory epithelium. J Neurosci. 2012;32(43):14927-41. Epub 2012/10/27.</li>
<li>Hu B. Noise-Induced Structural Damage to the Cochlea. In: Le Prell CG, Henderson D, Fay RR, Popper AN, editors. Noise-Induced Hearing Loss - Scientific Advances: Springer New York; 2012. p. 57-86.</li>
<li>Cai Q, Patel M, Coling D, Hu BH. Transcriptional changes in adhesion-related genes are site-specific during noise-induced cochlear pathogenesis. Neurobiology of disease. 2012;45(2):723-32.</li>
<li>Jamesdaniel, S., Hu, B.H., Kermany, M.H., Jiang, H., Ding, D., Salvi, R., Coling, D. 2011. Noise induced changes in the expression of p38/MAPK signaling proteins in the sensory epithelium of the inner ear. Journal of Proteomics. 75, 410-24.</li>
<li>Hu, B.H., Cai, Q. 2010. Acoustic overstimulation modifies Mcl-1 expression in cochlear sensory epithelial cells. J Neurosci Res 88, 1812-21.</li>
<li>Hu, B.H., Cai, Q., Manohar, S., Jiang, H., Ding, D., Coling, D.E., Zheng, G., Salvi, R. 2009. Differential expression of apoptosis-related genes in the cochlea of noise-exposed rats. Neuroscience 161, 915-925.</li>
<li>Chen, G.D., Li, M., Tanaka, C., Bielefeld, E.C., Hu, B.H., Kermany, M.H., Salvi, R., Henderson, D. 2009. Aging outer hair cells (OHCs) in the Fischer 344 rat cochlea: function and morphology. Hear Res 248, 39-47.</li>
<li>Tanaka, C., Chen, G.D., Hu, B.H., Chi, L.H., Li, M., Zheng, G., Bielefeld, E.C., Jamesdaniel, S., Coling, D., Henderson, D. 2009. The effects of acoustic environment after traumatic noise exposure on hearing and outer hair cells. Hear Res 250, 10-8.</li>
<li>Yang, W.P., Hu, B.H., Chen, G.D., Bielefeld, E.C., Henderson, D. 2009. Protective effect of N-acetyl-L-cysteine (L-NAC) against styrene-induced cochlear injuries. Acta Otolaryngol, 1036-1043.</li>
<li>Hu, B.H., Yang, W.P., Bielefeld, E.C., Li, M., Chen, G.D., Henderson, D. 2008. Apoptotic outer hair cell death in the cochleae of aging Fischer 344/NHsd rats. Hear Res 245, 48-57.</li>
<li>Hu, B.H., Zheng, G.L. 2008. Membrane disruption: An early event of hair cell apoptosis induced by exposure to intense noise. Brain Res 1239, 107-18.</li>
<li>Hu, B.H., Henderson, D., Yang, W.P. 2008. The impact of mitochondrial energetic dysfunction on apoptosis in outer hair cells of the cochlea following exposure to intense noise. Hear Res 236, 11-12.</li>
<li>Bielefeld, E.C., Coling, D., Chen, G.D., Li, M., Tanaka, C., Hu, B.H., Henderson, D. 2008. Age-related hearing loss in the Fischer 344/NHsd rat substrain. Hear Res 241, 26-33.</li>
<li>Hu, B.H. 2007. Delayed mitochondrial dysfunction in apoptotic hair cells in chinchilla cochleae following exposure to impulse noise. Apoptosis 12, 1025-36.</li>
<li>Harris, K.C., Bielefeld, E., Hu, B.H., Henderson, D. 2006. Increased resistance to free radical damage induced by low-level sound conditioning. Hear Res 213, 118-29.</li>
<li>Hu, B.H., Henderson, D., Nicotera, T.M. 2006. Extremely rapid induction of outer hair cell apoptosis in the chinchilla cochlea following exposure to impulse noise. Hear Res 211, 16-25.</li>
<li>Henderson, D., Bielefeld, E.C., Harris, K.C., Hu, B.H. 2006. The Role of Oxidative Stress in Noise-Induced Hearing Loss. Ear Hear 27, 1-19.</li>
<li>Bielefeld, E.C., Hu, B.H., Harris, K.C., Henderson, D. 2005. Damage and threshold shift resulting from cochlear exposure to paraquat-generated superoxide. Hear Res 207, 35-42.</li>
<li>Harris, K.C., Hu, B., Hangauer, D., Henderson, D. 2005. Prevention of noise-induced hearing loss with Src-PTK inhibitors. Hear Res 208, 14-25.</li>
<li>Yang, W.P., Henderson, D., Hu, B.H., Nicotera, T.M. 2004. Quantitative analysis of apoptotic and necrotic outer hair cells after exposure to different levels of continuous noise. Hear Res 196, 69-76.</li>
<li>Nicotera, T.M., Hu, B.H., Henderson, D. 2003. The caspase pathway in noise-induced apoptosis of the chinchilla cochlea. J Assoc Res Otolaryngol 4, 466-77.</li>
<li>Hu, B.H., Henderson, D., Nicotera, T.M. 2003. Progression of outer hair cell death in the chinchilla cochlea following traumatic noise exposure. Seminars in Hearing 24, 111-114.</li>
<li>Hu, B.H., Henderson, D., Nicotera, T.M. 2002. Involvement of apoptosis in progression of cochlear lesion following exposure to intense noise. Hear Res 166, 62-71.</li>
<li>Hu, B.H., Henderson, D., Nicotera, T.M. 2002. F-actin cleavage in apoptotic outer hair cells in chinchilla cochleas exposed to intense noise. Hear Res 172, 1-9.</li>
<li>Hu, B.H., Guo, W., Wang, P.Y., Henderson, D., Jiang, S.C. 2000. Intense noise-induced apoptosis in hair cells of guinea pig cochleae. Acta Otolaryngol 120, 19-24.</li>
<li>Henderson, D., Hu, B., McFadden, S., Zheng, X. 1999. Evidence of a Common Pathway in Noise-Induced Hearing Loss and Carboplatin Ototoxicity. Noise Health 2, 53-70.</li>
<li>Hu, B.H., McFadden, S.L., Salvi, R.J., Henderson, D. 1999. Intracochlear infusion of buthionine sulfoximine potentiates carboplatin ototoxicity in the chinchilla. Hear Res 128, 125-34.</li>
<li>Hu, B.H., Zheng, X.Y., McFadden, S.L., Kopke, R.D., Henderson, D. 1997. R-phenylisopropyladenosine attenuates noise-induced hearing loss in the chinchilla. Hear Res 113, 198-206.</li>
<li>Hu, B.H., Henderson, D. 1997. Changes in F-actin labeling in the outer hair cell and the Deiters cell in the chinchilla cochlea following noise exposure. Hear Res 110, 209-18.</li>
<li>Zheng, X.Y., Henderson, D., Hu, B.H., McFadden, S.L. 1997. Recovery of structure and function of inner ear afferent synapses following kainic acid excitotoxicity. Hear Res 105, 65-76.</li>
<li>Zheng, X.Y., Henderson, D., McFadden, S.L., Hu, B.H. 1997. The role of the cochlear efferent system in acquired resistance to noise-induced hearing loss. Hear Res 104, 191-203.</li>
<li>Zheng, X.Y., Henderson, D., Hu, B.H., Ding, D.L., McFadden, S.L. 1997. The influence of the cochlear efferent system on chronic acoustic trauma. Hear Res 107, 147-59.</li>
<li>Hu, B.H., Jiang, S.C. 1995. Effect of focal cochlear vascular lesion on endocochlear potential in guinea pigs. Hear Res 89, 69-75.</li></ol>

<h4>BOOK CHAPTERS:</h4>

<ol style="font-family: Arial; font-size: 10.666px; font-style: normal; font-variant: normal; font-weight: normal; line-height: 18.4px; margin-top: 0px; margin-bottom: 0px;"><li>Hu, B.H. 2011. Noise-induced structural damage to the cochlea. In: Popper, A.N., Fay, R.R., Henderson, D., Prell, C.L., (Eds), Springer Handbook of Auditory Research, Noise Induced Hearing Loss: Scientific Advances. Springer Science, New York. pp. 57-86.</li>
<li>Henderson, D., Hu, B.H., Bielefeld E. (2008) Patterns and Mechanisms of Noise-induced Cochlear Pathology. In Schacht, J., Popper, A.N. and Fay R.R. (Eds.), Auditory Trauma, Protection, and Repair. Springer. pp. 195-217.</li>
<li>Henderson, D., Hu, B.H., Bielefeld E., Nicotera, T.M. (2006) Cellular mechanisms of noise-induced hearing loss. In Campbell, K (Ed.), Pharmacology and Ototoxicity for Audiologists. Thomson Delmar Learning, pp. 216-229.</li>
<li>Hu, B.H., Henderson, D., Nicotera, T.M. (2003). Progression of outer hair cell death in the chinchilla cochlea following traumatic noise exposure. In: Simmons, D.D., Palmer, C., (Eds.), Seminars in Hearing.  New Frontiers in the Amelioration of Hearing Loss: Part 2 Hair Cell Development, Regeneration, Protection, and Rescue, Vol. 24. Theime Medical Publishers, New York. pp. 111-114.</li>
<li>Hu, B.H., Henderson, D., Liu, C.C., Zheng, X.Y., McFadden, S.L., Nicotera, T.M., Hight, N.G. (2001). Protection from impulse noise with R-PIA is dependent on the level of the noise and the duration of the treatment. In: Henderson, D., Prasher, D., Kopke, R., Salvi, R.J., Hamernik, R.P., (Eds.), Noise Induced Hearing Loss: Basic Mechanisms, Prevention and Control, 1st ed. Noise Res. Network Publications (nRn), London. pp. 203-213.</li>
<li>Nicotera, T.M., Henderson, D., Hu, B.H., Zheng, X.Y. 2001. Noise exposure and mechanisms of hair cell death. In: Henderson, D., Prasher, D., Kopke, R., Salvi, R.J., Hamernik, R.P., (Eds.), Noise Induced Hearing Loss: Basic Mechanisms, Prevention and Control, 1st ed. Noise Res. Network Publications (nRn), London. pp. 99-117.</li></ol>

</p></div>
<div class="item5"><h3>Bohua Hu, Ph.D.</h3><h4>CCC-A | Associate Professor</h4>
<h4>Current Research</h4>
<p>Cochlear immunity | Inflammatory responses to cochlear stress | Cochlear immune cells | Immune control for reduction of cochlear stress responses | 
Biological/molecular mechanisms and prevention of sensory cell death | Acoustic trauma, aging-related cochlear degeneration, and genetic cochlear degeneration</p>
<h4>Completed Research</h4>
<ul style="margin:1px;padding:10px"><li><p>NIH/NIDCD R01DC010154</p>
<ul><li><p>Title: Noise-induced acute hair cell death</p></ul></li>
<li><p>National Organization for Hearing Research Foundation (NOHR)</p></li>
<ul><li><p>Title: Cell death pathways involved in compression/decompression stress-induced apoptosis of hair cells subject to acoustic trauma</p></li></ul>
<li><p>NIH/NIDCD RO3</p></li>
<ul><li><p>Title: Apoptotic and Necrotic Death of OHCs in NIHL</p></li></ul>
<li><p>National Organization for Hearing Research Foundation (NOHR)</p></li>
<ul><li><p>Title: Prophylactice effects of Src kinase inhibition on noise-induced hair cell death and hearing loss.</p></li></ul></p></div></div></body>

<!-- test-url: http://hu-lab/~.php -->
<!-- issues-list
	In <ol>s of References, I don't know how to set all <ol>style as p from CSS-external; --> 
<!-- testing-log:-->
<!-- references:-->