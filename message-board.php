<?php require 'php_local_libs/header-inc.php'; include 'php_local_libs\login.functions-inc.php'; require 'php_local_libs/mysql.query-inc.php'; ?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F; }
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F; padding-top: 10px; padding-left: 10px; }
.item3 { grid-area: micro-nav; padding:1px;}
.item4 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; width: 650px; border-style: solid; border-width: 1px; border-color: #2196F3; padding-top: 10px; padding-left: 10px; }
.item5 { grid-area: footer; background-color: #FFFFFF; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F; padding-top: 10px; padding-left: 10px; }
.item6 { grid-area: sidebar; background-color: #FFF2CC; margin-left: 25px; margin-top: 10px; margin-right: 50px; width: 220px; border-style: solid; border-width: 5px; border-color: #CC0000; padding-top: 10px; padding-left: 10px; }
.grid-container { display:grid; grid:'primary-header primary-header' 'nav-bar nav-bar' 'micro-nav micro-nav' 'main sidebar' 'footer footer'; grid-gap:1px; padding:10px; height:1312px; width:1000px; grid-template-rows:200px 50px 12px 750px 200px; grid-template-columns:4fr 1fr; text-align:left;}
</style></head><body><div class="grid-container"><!-- meta div, last-close-->
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a></div>
<div class="item2"><p style="color:white; display:inline"><a style="color: white" href="css.grid-test,6.php">Home</a> | <span class="main-tab">Team⬇️<button class="sub-tab" style="position:absolute;top:254;left:60px;background-color:2daf26;height:40px">
<a href='message-board.php?board=department&pg_数=1' style="color:#00ffff;">Announcements</a></button></span> | <a style="color: white" href="student-resources.php">Student-Resources</a> | 
<a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <?php echo $research_full_element;?> | <a style="color: white" href="contact.php">Contact</a></p></div>
<div class="item3"><p>⬅️ <a href="team.php">Team</a></p></div>
<div class="item4" id="布告"><h4><div style="display:flex;height:30px;line-height:30px;vertical-align:middle;text-align:center"><div style="flex-grow:1;background-color:2F3A84;align-self:center"><a href="message-board.php?board=department&pg_数=1#布告" style="color:B13B3A">Department</a></div><div style="flex-grow:1;background-color:F0B5B5">
<a href="message-board.php?board=faculty&pg_数=1#布告" style="color:FFF0CB">Faculty</a></div><div style="flex-grow:1;background-color:38761D"><a href="message-board.php?board=graduates&pg_数=1#布告" style="color:F1C232">Graduates</a></div></div></h4>
<?php /* write a looping echo that spits out new lines into a table or a div, containing pulls ranked by post_ID, analogous to post_list, but, also displaying the full post; no need for a post.post_number analogy;
display an edit button, next to each one, that matches the incremented post_ID; the edit button should only be shown to authorized, logged in users #determine #
check if cat mismatch, AND private=true? and don't display if EITHER are true, using an IF OR from attributes-parsed variables 
Design a structured div, table 等等, and have slots for each element # 
Swing this into Research: post.post-number, page-list, and dash-edit, after done # */ ?>
<?php $counter = 1; $termination = 'false'; $result = fpl_message_board($_GET['board']); $between_top = intval($_GET['pg_数'] . '1')-10;
// I can set an internally generated termination condition, such that when the internal count 
while($termination !=='true' && $row = $result->fetch_assoc()) {
	$counter = $counter + 1; if ($counter >= $between_top) {
	echo '<h4>iD=' . $row['post_ID'] . ' | '; echo $row['post_title'] . ' | '; echo $row['author'] . ' |'; 
	// $row['attributes'] can be pulled here and fed into a parse-func in mysql.query-inc #novel
	$attributes = attr_parse_board($row['attributes']);
	if (array_key_exists("date", $attributes)) { echo ' Date: ' . $attributes["date"]; }
	echo '</h4><p>';?>
	<!-- Work on permissions for editing: -->
	<?php if (check_edit_perm($row['author'])==true) { ?>
	
	<a href="message.board-edit.php?board=<?php echo$_GET['board'];?>&post_ID=<?php echo$row['post_ID'];?>">Edit</a>: <?php }?><?php echo $row['post_ID'] . ': ' . $row['post'] . '</p>'; }
	if ($counter == intval($between_top+9)) { $termination = 'true'; } } ?>
<p><?php if (intval($_GET['pg_数']) !== 1) { ?> <a href="<?php echo 'message-board.php?board=department&pg_数='.intval($_GET['pg_数'])-1 .'#布告';?>">Prev-page</a> <?php } ?> | 
<?php if ($termination !== 'false') { ?> <a href="<?php echo 'message-board.php?board=department&pg_数='.intval($_GET['pg_数'])+1 .'#布告';?>">Next-page</a> <?php } ?></p></div>
<div class="item5"><h2>Footer: References:</h2><br><p></p></div>
<div class="item6"><h3>Bohua Hu, Ph.D.</h3><h4>CCC-A</h4><p>Associate Professor<br>Department of Communicative Disorders and Sciences<br>Center for Hearing and Deafness<br>
State University of New York at Buffalo<br>137 Cary Hall, 3435 Main St.<br>Buffalo, NY 14214<br>Tel: 716-829-5316<br>e-mail: bhu@buffalo.edu<br></p></div></div></body>
<!-- test-url: http://hu-lab/message-board.php?board=department&pg_数=1 -->
<!-- issues-list
	Earlier:
		In div-main, to center text vertically inside the category labels, I had to nombre line-height:30px, establish eq-height, with the total div-height #  
		The height of main.e-ment needs to expand if message-sum is quite tall; possible sol:
			https://stackoverflow.com/questions/27172057/auto-adjust-the-height-of-container-based-on-content -->
<!-- testing-log:-->
<!-- references:
	Message.board-retri,ini generated by ssg.mg-test,3
	Link directs to a specific html-tag: stackoverflow.com/questions/15481911/linking-to-a-specific-part-of-a-web-page-->