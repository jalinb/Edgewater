<?php // no direct access



defined( '_JEXEC' ) or die( 'Restricted access' );

$document = JFactory::getDocument();
$jinput = JFactory::getApplication()->input;

//Set the URL Base
$url_base = JURI::base();

//Get the Article Category from the Module
$show_category = $BoatNewsParams['show_category'];

//Get the Article Category View All Text from the Module
$category_title = $BoatNewsParams['category_title'];

//Get the Article IDs from the Module
$article_id_1 = $BoatNewsParams['article_id_1'];
$article_id_2 = $BoatNewsParams['article_id_2'];

//Get the Article Titles from the Module
$title_1 = $BoatNewsParams['title_1'];
$title_2 = $BoatNewsParams['title_2'];

//Get the Show Months from the Module
$month_1 = $BoatNewsParams['month_1'];
$month_2 = $BoatNewsParams['month_2'];

//Get the Show Years from the Module
$year_1 = $BoatNewsParams['year_1'];
$year_2 = $BoatNewsParams['year_2'];

//Get the Show Start Dates from the Module
$date_1 = $BoatNewsParams['date_1'];
$date_2 = $BoatNewsParams['date_2'];

//Get the Show Excerpts from the Module
$article_excerpt_1 = $BoatNewsParams['article_excerpt_1'];
$article_excerpt_2 = $BoatNewsParams['article_excerpt_2'];

?>


<div class="news-articles drop-shadow curved curved-hz-1">


<?php

    echo '<a href="' . $url_base . $show_category .'" class="moduleTitle">' .$module->title .'</a>';

?>

<div class="section section-top">
<div class="left-col">
<div class="date-box"><?php echo $date_1 ;?></div>
<span class="event-dates"><?php echo $month_1 ;?></span>
<span class="event-year"><?php echo $year_1 ;?></span>

</div>
<div class="right-col">

<?php


  $article = JTable::getInstance("content");
  $article->load($article_id_1);
  $article->get("title");
  $showpage = $article->get("title");
  echo '<h3 class="show-title">' . '<a class="show-title" href="' . $url_base. 'index.php?option=com_content&amp;view=article&amp;id='. $article_id_1 . '">' . $title_1 .'</a></h3>';
  
//$excerpt = strip_tags($article->get("introtext"));
//$excerpt = substr($excerpt, 0, 70);


echo '<p class="show-text">'.$article_excerpt_1 . '</p>';
echo '<a class="shows news-btn" href="' . $url_base. 'index.php?option=com_content&amp;view=article&amp;id='. $article_id_1 . '">More</a>';
 ?>
  


</div>
</div>

<?php if (isset($article_id_2)) {;?>

<div class="section section-bottom">
<div class="left-col">
<div class="date-box"><?php echo $date_2 ;?></div>
<span class="event-dates"><?php echo $month_2 ;?></span>
<span class="event-year"><?php echo $year_2 ;?></span>

</div>
<div class="right-col">

<?php


  $article->load($article_id_2);
  $article->get("title");
  $showpage = $article->get("title");
  echo '<h3 class="show-title">' . '<a class="show-title" href="' . $url_base. 'index.php?option=com_content&amp;view=article&amp;id='. $article_id_2 . '">' . $title_2 .'</a></h3>';
  
//$excerpt = strip_tags($article->get("introtext"));
//$excerpt = substr($excerpt, 0, 70);


echo '<p class="show-text">'.$article_excerpt_2 . '</p>';
echo '<a class="shows news-btn" href="' . $url_base. 'index.php?option=com_content&amp;view=article&amp;id='. $article_id_2 . '">More</a>';
 ?>
  


</div>
</div>
<?php };?>


<?php // if the view all articles link is not set, we don't want to show it.

if (isset($show_category)) {
$str = $module->title;
$split = explode(" ", $str);


;?>

<?php if (isset($category_title)) { ;?>

<a class="news-btn view-all" href="<?php echo $url_base . $show_category; ?>"><?php echo $category_title;?></a>

<?php } else { ; ?>
<a class="news-btn view-all" href="<?php echo $url_base . $show_category; ?>">View All <?php echo $split[count($split)-1];?></a>
<?php };?>

<?php }
else { ; ?>
<span class="view-all"></a>
<?php };?>

</div>