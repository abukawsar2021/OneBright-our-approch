<?php

vc_map( array(
  "name" => __( "Our Approch Members", "my-text-domain" ),
  "base" => "oneBright_our_approch",
  "category" => __( "One Bright", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "attach_image",
	  "heading" => __( "Section Image", "my-text-domain" ),
	  "param_name" => "sec_image",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Attach Section Image", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Section Title", "my-text-domain" ),
	  "param_name" => "sec_title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Member Name", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Section Subtitle", "my-text-domain" ),
	  "param_name" => "sec_sub_title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Subtitle", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Section Desc", "my-text-domain" ),
	  "param_name" => "sec_desc",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Section Description", "my-text-domain" )
	 ),
	 array(
	  "type" => "attach_image",
	  "heading" => __( "Section Iink Arrow Image ", "my-text-domain" ),
	  "param_name" => "sec_link_arrow_image",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Attach Section Link Arrow Image", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Section Padding Top ", "my-text-domain" ),
	  "param_name" => "pad_top",
	  "value" => __( "80", "my-text-domain" ),
	  "description" => __( "Type section padding top", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Section Padding Bottom ", "my-text-domain" ),
	  "param_name" => "pad_bot",
	  "value" => __( "80", "my-text-domain" ),
	  "description" => __( "Type section padding bottom", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Section Padding Right ", "my-text-domain" ),
	  "param_name" => "pad_rig",
	  "value" => __( "0", "my-text-domain" ),
	  "description" => __( "Type section padding right", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Section Padding Left ", "my-text-domain" ),
	  "param_name" => "pad_lef",
	  "value" => __( "50", "my-text-domain" ),
	  "description" => __( "Type section padding left", "my-text-domain" )
	 ),
	 array(
	  "type" => "param_group",
	  "heading" => __( "Singe Item Info", "my-text-domain" ),
	  "param_name" => "single_item_infos",
	  "description" => __( "Single Item Info", "my-text-domain" ),
	  "params" => array(
			 array(
			  "type" => "attach_image",
			  "heading" => __( "Single Item Image", "my-text-domain" ),
			  "param_name" => "single_item_image",
			  "value" => __( "", "my-text-domain" ),
			  "description" => __( "Attach Single Item Image", "my-text-domain" )
			 ),
			  array(
			  "type" => "textfield",
			  "heading" => __( "Single Item Title", "my-text-domain" ),
			  "param_name" => "sinlge_item_title",
			  "value" => __( "", "my-text-domain" ),
			  "description" => __( "Add Single Item Title", "my-text-domain" )
			 ),
			  array(
			  "type" => "textfield",
			  "heading" => __( "Single Item Description", "my-text-domain" ),
			  "param_name" => "single_item_desc",
			  "value" => __( "", "my-text-domain" ),
			  "description" => __( "Add Single Item Description", "my-text-domain" )
			 ),
			  array(
			  "type" => "textfield",
			  "heading" => __( "Single Item Link Text", "my-text-domain" ),
			  "param_name" => "single_item_link_arrow_text",
			  "value" => __( "", "my-text-domain" ),
			  "description" => __( "Add Single Item Link Text", "my-text-domain" )
			 ),
			 array(
			  "type" => "attach_image",
			  "heading" => __( "Single Item Link Arrow Image", "my-text-domain" ),
			  "param_name" => "single_item_arrow_icon",
			  "value" => __( "", "my-text-domain" ),
			  "description" => __( "Add Single Item Link Text", "my-text-domain" )
			 ),
		),
	),
      array(
	  "type" => "css_editor",
	  "heading" => __( "Css Editor", "my-text-domain" ),
	  "param_name" => "css",
	  "group" => __( "Design Groups", "my-text-domain" )
	 ),
	
  )
 ) );
