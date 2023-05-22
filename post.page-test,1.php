<?php require 'php_local_libs/mysql.query-inc.php'; ?>
<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"><style>
.item1 { grid-area: primary-header; background-color: #FFFFFF; text-align: center; border-style: solid; border-width: 3px; border-color: #1F1F1F;}
.item2 { grid-area: nav-bar; background-color: #25438B; margin-top: 10px; border-style: solid; border-width: 1px; border-color: #1F1F1F;}
.item6 { grid-area: div-1; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; margin-right: 20px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item3 { grid-area: main; background-color: #FFFFFF; margin-top: 10px; margin-left: 20px; width: 650px; border-style: solid; border-width: 1px; border-color: #2196F3;}
.item4 { grid-area: footer; background-color: #FFFFFF; margin-top: 10px; border-style: solid; border-width: 2px; border-color: #1F1F1F;}
.grid-container { display: grid;
  grid: 'primary-header primary-header' 'nav-bar nav-bar' 'div-1 div-1' 'main sidebar' 'footer footer';
  grid-gap: 1px; padding: 10px; height: 1390px;
  width: 1000px; grid-template-rows: 200px 50px 150px 750px 200px; grid-template-columns: 4fr 1fr; text-align: left;}
.grid-container > div { padding-top: 10px; padding-left: 10px; } 
</style></head><body style="background-color:#F8F8F8"><div class="grid-container">
<div class="item1"><a href="css.grid-test,6.php"><img src="/media/big-UB.jpg" alt="big.UB-text,text" width="970" height="200"></a><h1>primary-header:</h2><p></p></div>
<div class="item2"><p style="color: white"><a style="color: white" href="css.grid-test,6.php">Home</a> | <a style="color: white" href="team.php">Team</a> | <a style="color: white" href="contact.php">Contact</a>
 | Student-Resources | <a style="color: white" href="https://www.acsu.buffalo.edu/~bhu/" target="_blank">UB-site</a>↗️ | <a style="color: white" href="http://hu-lab/research.main-test,1.php">Research</a></p></div>
<div class="item6"><h1>div-1:</h1><p><br>
<?php echo 'Post Title:' . select_single_grid($_GET['author'], $_GET['post_ID'], 'post_title'); 
echo '<br>' . 'Post Author:' . $_GET['author']; ?></p></div>
<div class="item3"><h2>main:</h2><br>
<p><?php echo select_single_grid($_GET['author'], $_GET['post_ID'], 'post');?><br></p></div>
<div class="item4"><h2>Footer: References:</h2><br>
<p><?php echo select_single_grid($_GET['author'], $_GET['post_ID'], 'attributes');?></p></div>
</body>

<!-- test-url: http://hu-lab/post.page-test,1.php?author=bohuahu&post_ID=1 -->
<!-- issues-list--> 
<!-- testing-log:-->
<!-- references:-->