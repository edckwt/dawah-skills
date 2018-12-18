<?php
$DSHtml = new html_ds_helper();
global $dscategories,$opicds_categories_lang;
 
$category_slug = esc_attr($_GET['cat_slug']);

$opicds_lang = get_option(OPICDS_Input_SLUG.'language');
$link = $opicds_categories_lang[$opicds_lang][$category_slug]['url'];
$jsoncaturl = $opicds_categories_lang[$opicds_lang][$category_slug]['cat'];
$slug = $category_slug.'_'.$opicds_lang;
$cat_options = $DSHtml->categoryFromTransient($jsoncaturl,$slug);

?>
<div class="category-head">
	<table width="100%">
		<tr>
			<td width="80px"><span class="category-logo"><?php echo opicds_cat_logo($category_slug,array('width'=>'80px','class'=>$category_slug)) ?></span></td>
			<td><h1 class="category-title"><a target="_blank" href="<?php echo $link; ?>"><?php echo $this->getLang($category_slug); ?></a></h1></td>
		</tr>
	</table>

</div>
<hr />
<?php
	echo $DSHtml->Input('checkbox',array('name'=>'category_'.$opicds_lang.'_'.$category_slug.'[]','options'=>$cat_options));
?>
