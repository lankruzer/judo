<?php

function cptui_register_my_cpts() {


    /**
	 * Post Type: Отзывы ремонт.
	 */

	$labels = array(
		"name" => __( 'Отзывы на ремонт', 'window' ),
		"singular_name" => __( 'Отзывы на ремонт', 'window' ),
		"menu_name" => __( 'Отзывы на ремонт', 'window' ),
		"all_items" => __( 'Все Отзывы на ремонт', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый отзыв', 'window' ),
		"edit_item" => __( 'Редактировать отзыв', 'window' ),
		"new_item" => __( 'Новый отзыв', 'window' ),
		"view_item" => __( 'Показать отзыв', 'window' ),
		"view_items" => __( 'Показать отзывы', 'window' ),
		"search_items" => __( 'Поиск отзыва', 'window' ),
		"not_found" => __( 'Не найдено отзывов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено отзывов в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в отзыв', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот отзыв', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список отзывов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка отзывов', 'window' ),
		"items_list" => __( 'Список отзывов', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Отзывы на ремонт', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "reportsrem", $args );
    
    
       /**
	 * Post Type: Отзывы на окна и балконы.
	 */

	$labels = array(
		"name" => __( 'Отзывы на окна и балконы', 'window' ),
		"singular_name" => __( 'Отзывы на окна и балконы', 'window' ),
		"menu_name" => __( 'Отзывы на окна и балконы', 'window' ),
		"all_items" => __( 'Все отзывы', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый отзыв', 'window' ),
		"edit_item" => __( 'Редактировать отзыв', 'window' ),
		"new_item" => __( 'Новый отзыв', 'window' ),
		"view_item" => __( 'Показать отзыв', 'window' ),
		"view_items" => __( 'Показать отзывы', 'window' ),
		"search_items" => __( 'Поиск отзыва', 'window' ),
		"not_found" => __( 'Не найдено отзывов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено отзывов в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в отзыв', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот отзыв', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список отзывов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка отзывов', 'window' ),
		"items_list" => __( 'Список отзывов', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Отзывы на окна и балконы', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "reportswin", $args );
        /**
	 * Post Type: Отзывы на перегородки.
	 */

	$labels = array(
		"name" => __( 'Отзывы на перегородки', 'window' ),
		"singular_name" => __( 'Отзывы на перегородки', 'window' ),
		"menu_name" => __( 'Отзывы на перегородки', 'window' ),
		"all_items" => __( 'Все отзывы', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый отзыв', 'window' ),
		"edit_item" => __( 'Редактировать отзыв', 'window' ),
		"new_item" => __( 'Новый отзыв', 'window' ),
		"view_item" => __( 'Показать отзыв', 'window' ),
		"view_items" => __( 'Показать отзывы', 'window' ),
		"search_items" => __( 'Поиск отзыва', 'window' ),
		"not_found" => __( 'Не найдено отзывов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено отзывов в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в отзыв', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот отзыв', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список отзывов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка отзывов', 'window' ),
		"items_list" => __( 'Список отзывов', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Отзывы на перегородки', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "reportspart", $args );
    
        /**
	 * Post Type: Отзывы на аксесуары.
	 */

	$labels = array(
		"name" => __( 'Отзывы на аксесуары', 'window' ),
		"singular_name" => __( 'Отзывы на аксесуары', 'window' ),
		"menu_name" => __( 'Отзывы на аксесуары', 'window' ),
		"all_items" => __( 'Все отзывы', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый отзыв', 'window' ),
		"edit_item" => __( 'Редактировать отзыв', 'window' ),
		"new_item" => __( 'Новый отзыв', 'window' ),
		"view_item" => __( 'Показать отзыв', 'window' ),
		"view_items" => __( 'Показать отзывы', 'window' ),
		"search_items" => __( 'Поиск отзыва', 'window' ),
		"not_found" => __( 'Не найдено отзывов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено отзывов в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в отзыв', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот отзыв', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список отзывов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка отзывов', 'window' ),
		"items_list" => __( 'Список отзывов', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Отзывы на аксесуары', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "reportsacc", $args );
    
    
    
    /**
	 * Post Type: работы по окнам и балконам.
	 */

	$labels = array(
		"name" => __( 'Работы по окнам и балконам', 'window' ),
		"singular_name" => __( 'Работы по окнам и балконам', 'window' ),
		"menu_name" => __( 'Работы по окнам и балконам', 'window' ),
		"all_items" => __( 'Все Работы по окнам и балконам', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новую работу', 'window' ),
		"edit_item" => __( 'Редактировать работу', 'window' ),
		"new_item" => __( 'Новая работа', 'window' ),
		"view_item" => __( 'Показать работу', 'window' ),
		"view_items" => __( 'Показать работы', 'window' ),
		"search_items" => __( 'Поиск работы', 'window' ),
		"not_found" => __( 'Не найдено работ', 'window' ),
		"not_found_in_trash" => __( 'Не найдено работ в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в работу', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этоту работу', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список работ', 'window' ),
		"items_list_navigation" => __( 'Навигация списка работ', 'window' ),
		"items_list" => __( 'Список работ', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Работы по окнам и балконам', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "projectwin", $args );
    /**
	 * Post Type: работы по ремонту.
	 */

	$labels = array(
		"name" => __( 'Работы по ремонту', 'window' ),
		"singular_name" => __( 'Работы по ремонту', 'window' ),
		"menu_name" => __( 'Работы по ремонту', 'window' ),
		"all_items" => __( 'Все Работы по ремонту', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новую работу', 'window' ),
		"edit_item" => __( 'Редактировать работу', 'window' ),
		"new_item" => __( 'Новая работа', 'window' ),
		"view_item" => __( 'Показать работу', 'window' ),
		"view_items" => __( 'Показать работы', 'window' ),
		"search_items" => __( 'Поиск работы', 'window' ),
		"not_found" => __( 'Не найдено работ', 'window' ),
		"not_found_in_trash" => __( 'Не найдено работ в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в работу', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этоту работу', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список работ', 'window' ),
		"items_list_navigation" => __( 'Навигация списка работ', 'window' ),
		"items_list" => __( 'Список работ', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Работы по ремонту', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "projectrem", $args );
    
    
    
    /**
	 * Post Type: работы Перегородки.
	 */

	$labels = array(
		"name" => __( 'Работы по перегородкам', 'window' ),
		"singular_name" => __( 'Работы по перегородкам', 'window' ),
		"menu_name" => __( 'Работы по перегородкам', 'window' ),
		"all_items" => __( 'Все Работы по перегородкам', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новую работу', 'window' ),
		"edit_item" => __( 'Редактировать работу', 'window' ),
		"new_item" => __( 'Новая работа', 'window' ),
		"view_item" => __( 'Показать работу', 'window' ),
		"view_items" => __( 'Показать работы', 'window' ),
		"search_items" => __( 'Поиск работы', 'window' ),
		"not_found" => __( 'Не найдено работ', 'window' ),
		"not_found_in_trash" => __( 'Не найдено работ в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в работу', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этоту работу', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список работ', 'window' ),
		"items_list_navigation" => __( 'Навигация списка работ', 'window' ),
		"items_list" => __( 'Список работ', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Работы по перегородкам', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "projectpart", $args );
    
    
    /**
	 * Post Type: работы Аксесуары.
	 */

	$labels = array(
		"name" => __( 'Работы по аксессуарам', 'window' ),
		"singular_name" => __( 'Работы по аксессуарам', 'window' ),
		"menu_name" => __( 'Работы по аксессуарам', 'window' ),
		"all_items" => __( 'Все Работы по аксессуарам', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новую работу', 'window' ),
		"edit_item" => __( 'Редактировать работу', 'window' ),
		"new_item" => __( 'Новая работа', 'window' ),
		"view_item" => __( 'Показать работу', 'window' ),
		"view_items" => __( 'Показать работы', 'window' ),
		"search_items" => __( 'Поиск работы', 'window' ),
		"not_found" => __( 'Не найдено работ', 'window' ),
		"not_found_in_trash" => __( 'Не найдено работ в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в работу', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этоту работу', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список работ', 'window' ),
		"items_list_navigation" => __( 'Навигация списка работ', 'window' ),
		"items_list" => __( 'Список работ', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Работы по аксессуарам', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "page-attributes"),
	);

	register_post_type( "projectacc", $args );
    
    /**
	 * Post Type: Услуги по ремонту.
	 */

	$labels = array(
		"name" => __( 'Услуги по ремонту', 'window' ),
		"singular_name" => __( 'Услуги по ремонту', 'window' ),
		"menu_name" => __( 'Услуги по ремонту', 'window' ),
		"all_items" => __( 'Все услуги по ремонту', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новую услугу', 'window' ),
		"edit_item" => __( 'Редактировать услугу', 'window' ),
		"new_item" => __( 'Новая услуга', 'window' ),
		"view_item" => __( 'Показать услугу', 'window' ),
		"view_items" => __( 'Показать услуги', 'window' ),
		"search_items" => __( 'Поиск услуги', 'window' ),
		"not_found" => __( 'Не найдено услуг', 'window' ),
		"not_found_in_trash" => __( 'Не найдено услуг в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в услугу', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в эту услугу', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список услуг', 'window' ),
		"items_list_navigation" => __( 'Навигация списка услуг', 'window' ),
		"items_list" => __( 'Список услуг', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Услуги по ремонту', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "editor", "page-attributes"),
	);

	register_post_type( "remonts", $args );
    
    
    /**
	 * Post Type: Аксесуары.
	 */

	$labels = array(
		"name" => __( 'Аксесуары', 'window' ),
		"singular_name" => __( 'Аксесуары', 'window' ),
		"menu_name" => __( 'Аксесуары', 'window' ),
		"all_items" => __( 'Все Аксесуары', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый Аксесуар', 'window' ),
		"edit_item" => __( 'Редактировать Аксесуар', 'window' ),
		"new_item" => __( 'Новый Аксесуары', 'window' ),
		"view_item" => __( 'Показать Аксесуар', 'window' ),
		"view_items" => __( 'Показать Аксесуары', 'window' ),
		"search_items" => __( 'Поиск Аксесуара', 'window' ),
		"not_found" => __( 'Не найдено Аксесуаров', 'window' ),
		"not_found_in_trash" => __( 'Не найдено Аксесуаров в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в Аксесуар', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот Аксесуар', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список Аксесуаров', 'window' ),
		"items_list_navigation" => __( 'Навигация списка Аксесуаров', 'window' ),
		"items_list" => __( 'Список Аксесуаров', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Аксесуары', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "editor", "page-attributes"),
	);

	register_post_type( "accessories", $args );
    
    
    /**
	 * Post Type: Балконы.
	 */

	$labels = array(
		"name" => __( 'Балконы', 'window' ),
		"singular_name" => __( 'Балконы', 'window' ),
		"menu_name" => __( 'Балконы', 'window' ),
		"all_items" => __( 'Все Балконы', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый Балкон', 'window' ),
		"edit_item" => __( 'Редактировать Балкон', 'window' ),
		"new_item" => __( 'Новый Балкон', 'window' ),
		"view_item" => __( 'Показать Балкон', 'window' ),
		"view_items" => __( 'Показать Балконы', 'window' ),
		"search_items" => __( 'Поиск Балкона', 'window' ),
		"not_found" => __( 'Не найдено Балконов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено Балконов в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в Балкон', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в этот Балкон', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список Балконов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка Балконов', 'window' ),
		"items_list" => __( 'Список Балконов', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Балконы', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "editor", "page-attributes"),
	);

	register_post_type( "balcons", $args );
    
    /**
	 * Post Type: Окна.
	 */

	$labels = array(
		"name" => __( 'Окна', 'window' ),
		"singular_name" => __( 'Окна', 'window' ),
		"menu_name" => __( 'Окна', 'window' ),
		"all_items" => __( 'Все Окна', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новое окно', 'window' ),
		"edit_item" => __( 'Редактировать Окно', 'window' ),
		"new_item" => __( 'Новое окно', 'window' ),
		"view_item" => __( 'Показать окно', 'window' ),
		"view_items" => __( 'Показать окна', 'window' ),
		"search_items" => __( 'Поиск окна', 'window' ),
		"not_found" => __( 'Не найдено окон', 'window' ),
		"not_found_in_trash" => __( 'Не найдено окон в корзине', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в окна', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в это окно', 'window' ),
		"filter_items_list" => __( 'Отфильтровать список окон', 'window' ),
		"items_list_navigation" => __( 'Навигация списка окон', 'window' ),
		"items_list" => __( 'Список окон', 'window' ),
		"attributes" => __( 'Атрибуты', 'window' ),
	);

	$args = array(
		"label" => __( 'Окна', 'window' ),
				"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "editor", "page-attributes"),
	);

	register_post_type( "windows", $args );

	/**
	 * Post Type: Слайдер.
	 */

	$labels = array(
		"name" => __( 'Слайдер', 'areklama' ),
		"singular_name" => __( 'Слайдер', 'window' ),
		"menu_name" => __( 'Слайдер', 'window' ),
		"all_items" => __( 'Все слайды', 'window' ),
		"add_new" => __( 'Добавить новый', 'window' ),
		"add_new_item" => __( 'Добавить новый слайд', 'window' ),
		"edit_item" => __( 'Редактировать слайд', 'window' ),
		"new_item" => __( 'Новый слайд', 'window' ),
		"view_item" => __( 'Показать слайд', 'window' ),
		"view_items" => __( 'Показать слайды', 'window' ),
		"search_items" => __( 'Поиск слайда', 'window' ),
		"not_found" => __( 'Не найдено слайдов', 'window' ),
		"not_found_in_trash" => __( 'Не найдено слайдов в корзине', 'window' ),
		"parent_item_colon" => __( 'Родительский слайд', 'window' ),
		"featured_image" => __( 'Изображение', 'window' ),
		"set_featured_image" => __( 'Установить изображение', 'window' ),
		"remove_featured_image" => __( 'Удалить изображение для данной записи', 'window' ),
		"use_featured_image" => __( 'Использовать изображение', 'window' ),
		"archives" => __( 'Архивы', 'window' ),
		"insert_into_item" => __( 'Вставить в запись', 'window' ),
		"uploaded_to_this_item" => __( 'Загружено в эту запись', 'window' ),
		"filter_items_list" => __( 'Сортировать список слайдов', 'window' ),
		"items_list_navigation" => __( 'Навигация списка слайдов', 'window' ),
		"items_list" => __( 'Список слайдов', 'window' ),
		"attributes" => __( 'Аттрибуты', 'window' ),
		"parent_item_colon" => __( 'Родительский слайд', 'window' ),
	);

	$args = array(
		"label" => __( 'Слайдер', 'window' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slider", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title","page-attributes"),
		"menu_position" => 5,
	);

	register_post_type( "slider", $args );
    
}

add_action( 'init', 'cptui_register_my_cpts' );



function cptui_register_my_taxes() {

}

add_action( 'init', 'cptui_register_my_taxes' );

