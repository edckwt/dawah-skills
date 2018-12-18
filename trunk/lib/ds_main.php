<?php
$opicds_categories_lang = array();



// ======================   Titles ==============================

											
$dscategories["dawah_skills"]			 		= array(
                                                    'title'=>"Da`wah Skills",
                                                    'url'=>"http://www.dawahskills.com",
                                                    'logo'=>"dawah_skills.png",
                                                );											
// =================== Arabic ===========================
$opicds_categories_lang['ara']['dawah_skills']['url']                 = $dscategories["dawah_skills"]['url'].'/ar' ;
$opicds_categories_lang['ara']['dawah_skills']['cat']                 = $dscategories["dawah_skills"]['url'].'/ar/api/get_category_index/' ;
$opicds_categories_lang['ara']['dawah_skills']['importurl']           = $dscategories["dawah_skills"]['url'].'/ar/api/get_category_posts/?slug=';


// =================== English ===========================
$opicds_categories_lang['eng']['dawah_skills']['url']                     =  $dscategories["dawah_skills"]['url'];
$opicds_categories_lang['eng']['dawah_skills']['cat']                     =  $dscategories["dawah_skills"]['url'].'/api/get_category_index/';
$opicds_categories_lang['eng']['dawah_skills']['importurl']           =  $dscategories["dawah_skills"]['url'].'/api/get_category_posts/?slug=';



?>