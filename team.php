<?php require 'php_local_libs/header-inc.php';?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F; padding-top: 10px; padding-left: 10px; }
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F; padding: 10px; }
.item6 { grid-area: div-1; background-color: #FFFFFF; margin-top: 10px; margin-left: 10px; margin-right: 50px; border-style: solid; border-width: 1px; border-color: #2196F3; padding: 10px; }
.item7 { grid-area: div-2; background-color: #FF7F50; margin-top: 10px; margin-left: 10px; margin-right: 50px; border-style: solid; border-width: 1px; border-color: #2196F3; padding: 10px; }
.item3 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 100px; margin-right: 20px; border-style: solid; border-width: 1px; border-color: #2196F3; padding: 10px; box-shadow: 10px 10px; }
.item4 { grid-area: footer; background-color: #FFFFFF; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F; padding: 10px; }
.item5 { grid-area: photo; background-color: #FFFFFF; margin-left: 25px; margin-top: 10px; margin-right: 20px; width: 224.8px; border-style: solid; border-width: 5px; border-color: #716162;}
.grid-container { display: grid;
  grid: 'primary-header primary-header' 'nav-bar nav-bar' 'photo div-1' 'photo div-2' 'main main' 'footer footer';
  grid-gap: 1px; padding: 10px; height: 1390px;
  width: 1000px; grid-template-rows: 200px 50px 155px 155px 630px 200px; grid-template-columns: 1fr 4fr; text-align: left;}
.sub-tab { display: none; } .main-tab:hover .sub-tab { display: inline; }
</style></head><body style="background-color:#F8F8F8"><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color:white; display:inline"><a style="color: white" href="css.grid-test,6.php">Home</a> | <span class="main-tab">Team⬇️<button class="sub-tab" style="position:absolute;top:254;left:60px;background-color:2daf26;height:40px">
<a href='message-board.php?board=department&pg_数=1' style="color:#00ffff;">Announcements</a></button></span> | <a style="color: white" href="student-resources.php">Student-Resources</a> | 
<a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <?php echo $research_full_element;?> | <a style="color: white" href="contact.php">Contact</a></p></div>
<div class="item6"><h1>div-1:<button style="float: right; margin-right: 10px; width: 100px; border-radius: 10px; background-color: 2778F8; color: FFFFFF">+ 关注</button></h1>
<p><br>[zp515]江苏日星电动车辆有限公司，是集生产智能轨道平车(RGV)、智能牵引车、冶金工矿车辆、工业自动化流水线的研发、
生产、销售为一体的专业化企业。公司座落于黄海之滨，沿海经济开发城市--江苏盐城亭湖开发区。紧靠沿海高速、盐城机场、环境优越,交通十分便捷。
</p></div>
<div class="item7"><h1>div-2:</h1><p><br>[ganpz a-r]
    四川龙一医药有限公司是一家医药批发零售企业，位于成都市彭州市国际医药港。公司秉承 合作、诚信、效率、感恩 核心价值观，与上千家制药企业建立良好合作关系，公司销售服务网点辐射全川，拥有药店、诊所、商业等万余家下游客户。
	公司拥有  龙一医药网 电商平台，致力打造一个可供上游供货商与下游采购商无界限.无阻碍的医药联盟平台。同时，为提高服务质量，实现共赢，我们还建立了龙一药品零售连锁有限公司，龙一保健食品有限公司，
	通过整合资源，我们与上下游客户形成战略合作同盟，</p></div>
<div class="item3"><p>main:
<div style="float: right; margin-right:20px">
     <iframe width="325" height="280" frameborder="0" src="https://www.bing.com/maps/embed?h=280&w=325&cp=42.953392~-78.818278&lvl=13&typ=s&sty=h&src=SHELL&FORM=MBEDV8" scrolling="no"></iframe>
     <div style="white-space: nowrap; text-align: center; width: 325px; padding: 6px 0;">
        <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=42.953392~-78.818278&amp;sty=h&amp;lvl=13&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
        <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=42.953392~-78.818278&amp;sty=h&amp;lvl=13&amp;rtp=~pos.42.983553512196735_-78.72871398925781____&amp;FORM=MBEDLD">Get Directions</a>
    </div></div></p><br>
<p>[zp515, a-r]
1、协同相关人员参照客户需求产品资料编写可行性技术方案
<br>2、协同项目对接人员到客户现场讲解设备设计的原理以及达到的功能及效率分析；
<br>3、独立负责非标自动化设备开发设计，并依据设计图参与组装调配及功能改进；
<br>4、对新装配的设备联合生产人员进行试运行；
<br>5、与电气工程师协作设计上的组合和引导项目进行工作
<br>6、完成部门领导支配的其他技术性工作。
<br>7、大专或以上学历，机械自动化专业，机械设计相关专业
8、具备独立非标自动化设备设计经验者优先；
<img src="/media/big_team.jpg" alt="big_team,text" width="504" height="264" style="margin-left:-40px; margin-top:20px; float:left; margin-right: 10px"><br><br><br><br><br><br><br><br><br><br>
H5S: Cataracts as a Scaffold for Optical Recovery<#creative!>感受线条和角度的不可抗拒的强加lichess.org/4ac8J5jN⭐️<dev-Mozilla>: Because the eye has vastly more rods than cones (about 120 million rods to around 6 or 7 million cones), 
we see detail in greyscale, with color being far less detailed. In essence, our eyes are like a camera with two image sensor chips: one greyscale and one color. The greyscale sensor is 120 megapixels, while the color sensor is only about 7 megapixels. 
// quote from: developer.mozilla.org/en-US/docs/Web/Media/Formats/Video_concepts 审美品味随着检索间隔,变得更加精细。 Hu: A step is the movement of a Large Object onto a Smaller | Object, but, due to the Maintenance of a Constant Proportion, relative to distance 
| between, there is a Causality of Size | Expansion, uni-directionally, toward the Smaller | Object, such that, as the distance closes between, the Smaller will expand | linearly, in Proportion, to meet the Large Object, such that an Original | 
Proportion is maintained, and that distance, which is variable, is measured from the Perspective of the Larger. Hu: An adequate-step requires, at minimum, the Presence of an | Operator in the step.down-loc, since the Larger | 
Stepper may not have the requisite | Precision, from his Perspective, to reach the and only the<taot>the Safe | Step.down-Point and, therefore, a Pivoting | Plate, in the Safe.step-down,point: needs to have adequate | linear and rotational </p>
</div>
<div class="item4"><h2>Footer: References:</h2><br><p>https://www.zp515.com/job/23204.html<br>
<span style="background-color:00FF00">https://www.ganpz.com/company/c_show-id_6672.html</span><br>
> <a href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">CfH+D-profile</a><br>
> <a href="https://arts-sciences.buffalo.edu/cds.html" target="_blank">Dept of Communicative Disorders + Sci Site</a></p></div>
<div class="item5"><img src="/media/hu_photo_team.jpg" alt="hu_photo_team" width="224.8" height="290"></div></div></body>
<!-- concept-map:
12.31-22,4th.13: 
	.main-tab:hover .sub-tab { display: block; } 
		This line declares https://www.w3schools.com/CSSref/sel_hover.php that when an element # with class-assign # "main-tab" is
		mouse-hovered<native-interact>, element(s)with class-assign "sub-tab" will be displayed # as # "block" display-type # 
Earlier: 
	2 items are floated: img src big_team, and <div Bing map>; text thematically wraps, opposite the float-direction<mal-pr>, and this is
	elucidated in WP.MIC-H2S56,H5S1

<style>.sub-tab { display: none; }
.main-tab:hover .sub-tab { display: inline; }</style>

Rome <div class="main-tab" style="display:inline">Italy<button class="sub-tab" style="position:absolute; top:24px; left:43px; background-color:2daf26; color:#00ffff; ">Italian Peninsula</button></div> Moscow
	
-->
<!-- test-url: http://hu-lab/team.php -->
<!-- issues-list
	For the Team->Announcements drop-down, display: block in the hover activation # ensures that the sub-tab is displayed in a newline #  
	In this same feature, the display:none style has to be declared internally; if declared inline, this styling will override the hover override<🚩> -->
<!-- testing-log:
12.31-22,4th.10:
	Test passed: Bing map does not affect load time, lazy-loaded with about a 2-s delay sequestered inside that map div # -->
<!-- references:
Drop-down<Hu.lab-notes>: https://www.w3schools.com/Css/tryit.asp?filename=trycss_dropdown_button
Bing map code generated via https://www.bing.com/maps/embed-a-map
	Zoom level can be adjusted lvl=## in each URL # -->