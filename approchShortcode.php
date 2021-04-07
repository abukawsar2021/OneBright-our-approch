<?php

function our_approch_members_sc($atts,$content = null){
extract(shortcode_atts(array(
 'sec_image' =>'',
  'sec_title'=>'',
  'sec_desc'=>'',
  'sec_sub_title'=>'',
  'sec_link_arrow_image'=>'',
  'single_item_infos'=>'', 
  'single_item_image' =>'',
  'sinlge_item_title'=>'',
  'single_item_desc'=>'',
  'single_item_link_arrow_text'=>'',
  'single_item_link_arrow'=>'',
  'single_item_arrow_icon'=>'',
  'pad_top'=>'80',
  'pad_bot'=>'80',
  'pad_lef'=>'50',
  'pad_rig'=>'0',

),$atts));

$s_image = wp_get_attachment_image_src($sec_image,'full');
$sec_link_arrow_icon = wp_get_attachment_image_src($sec_link_arrow_image,'full');


if(!empty($single_item_infos)){
$single_item_infos = vc_param_group_parse_atts( $atts['single_item_infos'] );
}else{
	$single_item_infos = '';
}
$oneBright_our_approch_markup ='

<div style="padding-top:'.$pad_top.'px; padding-bottom:'.$pad_bot.'px; padding-left:'.$pad_lef.'px; padding-right:'.$pad_rig.'px" class="wak-vc-addon-wak_vc_our_approach_addon wak-top-padding wak-bottom-padding wak-left-padding">
    <div class="wak-our-approach-wrapper">
      <div class="wak-circle-overlay">
       <img src="'.$s_image[0].'" alt="" />
      </div>
      <div class="wak-titles">
        <h2 class="wak-title"> '.$sec_title.'<br>['.$sec_sub_title.']</h2>
        <p class="wak-description">
         '.$sec_desc.'
          <a href="#" class="wak-description-link">
			 <img src="'.$sec_link_arrow_icon[0].'" alt="" />
          </a>
        </p>
      </div>	  
      <div class="wak-approach-items">';  
	  
	  foreach($single_item_infos as $single_item){
		$item_image = wp_get_attachment_image_src($single_item['single_item_image'],'full');  
		$arrow_icon_image = wp_get_attachment_image_src($single_item['single_item_arrow_icon'],'full');  
		  
		 if(!empty($single_item)){
		  $oneBright_our_approch_markup.='	 
				<div class="wak-approach-item">
				  <div class="wak-item-image">
					 <img src="'.$item_image[0].'" alt="" />
				  </div>
				  <h2 class="wak-item-title">
					'.$single_item['sinlge_item_title'].'
				  </h2>
				  <p class="wak-item-description">
					'.$single_item['single_item_desc'].'
				  </p>
				  <a href="'.get_permalink($id).'" class="wak-item-read-link">	
				  '.$single_item['single_item_link_arrow_text'].'
					  <img src="'.$arrow_icon_image[0].'" alt="" />			
				  </a>
				</div>';
			} 	
				
		   }
			
	    $oneBright_our_approch_markup.='
      </div>
    </div>
  </div>';

return $oneBright_our_approch_markup;	
}
add_shortcode('oneBright_our_approch','our_approch_members_sc');