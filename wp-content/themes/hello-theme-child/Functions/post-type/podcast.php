<?php

function cptui_register_my_cpts_visa() {


	$labels = [
        "name" => __( "پادکست", "Letsstyle-ir" ),
		"singular_name" => __( "پادکست", "Letsstyle-ir" ),
		"menu_name" => __( "پادکست", "Letsstyle-ir" ),
		"all_items" => __( " همه پادکست", "Letsstyle-ir" ),
		"add_new" => __( "اضافه کردن", "Letsstyle" ),
		"add_new_item" => __( "اضافه کردن", "Letsstyle-ir" ),
		"edit_item" => __( "ویرایش", "Letsstyle-ir" ),
		"new_item" => __( "اضافه کردن", "Letsstyle-ir" ),
		"view_item" => __( "نمایش", "Letsstyle-ir" ),
		"view_items" => __( "نمایش", "Letsstyle-ir" ),
		"search_items" => __( "جستوجو", "Letsstyle-ir" ),
		"not_found" => __( "موردی یافت نشد", "Letsstyle-ir" ),
		"not_found_in_trash" => __( "موردی یافت نشد", "Letsstyle-ir" ),
		"parent" => __( "Parent Podcast:", "Letsstyle-ir" ),
		"featured_image" => __( "Featured image for this Podcast", "Letsstyle-ir" ),
		"set_featured_image" => __( "Set featured image for this Podcast", "Letsstyle-ir" ),
		"remove_featured_image" => __( "Remove featured image for this Podcast", "Letsstyle-ir" ),
		"use_featured_image" => __( "Use as featured image for this Podcast", "Letsstyle-ir" ),
		"archives" => __( "Podcast archives", "Letsstyle-ir" ),
		"insert_into_item" => __( "Insert into Podcast", "Letsstyle-ir" ),
		"uploaded_to_this_item" => __( "Uploaded to this Podcast", "Letsstyle-ir" ),
		"filter_items_list" => __( "Filter Podcast list", "Letsstyle-ir" ),
		"items_list_navigation" => __( "Podcast list navigation", "Letsstyle-ir" ),
		"items_list" => __( "Podcast list", "Letsstyle-ir" ),
		"attributes" => __( "Podcast Attributes", "Letsstyle-ir" ),
		"name_admin_bar" => __( "Podcast", "Letsstyle-ir" ),
		"item_published" => __( "Podcast published", "Letsstyle-ir" ),
		"item_published_privately" => __( "Podcast published privately", "Letsstyle-ir" ),
		"item_reverted_to_draft" => __( "Podcast reverted to draft", "Letsstyle-ir" ),
		"item_scheduled" => __( "Podcast scheduled", "Letsstyle-ir" ),
		"item_updated" => __( "Podcast updated", "Letsstyle-ir" ),
		"parent_item_colon" => __( "Parent Podcast:", "Letsstyle-ir" ),

    ];
    $args = [
		"label" => __( "Podcast", "Letsstyle-ir" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "visa", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-id",
		"supports" => [ "title", "editor", "thumbnail", "trackbacks", "revisions", "author", "page-attributes", "post-formats" ],
		"show_in_graphql" => false,
	];

	register_post_type( "Podcast", $args );
}

add_action( 'init', 'cptui_register_my_cpts_visa' );
