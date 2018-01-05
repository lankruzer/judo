<?php
function areklama_page(){

function areklama_select_uslugi_posts(){
        $args = array(
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'uslugi',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );
        $myposts = get_posts( $args );
        //print_r($myposts);
        foreach($myposts as $post){ 
            
            $arr[$post->ID] = $post->post_title;
        }
        return $arr;
        
    }




$sections_page = array();

$sections_page['contact_page'] = array(
    'dash_icon' => 'list-view',
    'title' =>  'Контактная информация',
    'description' => 'В данный блок заносится контактная информация которая будет отображена на сайте',
    'context' => 'normal',
    'priority' => 'high',
    'caps' => array(),
    'fields' => array(
		'logo' => array(
            'type' => 'media',
            'title' => 'Логотип',
            'sub_title' => 'Выбрать логотип через медиагалерею',
            'upload_title' => 'Выбрать логотип',
            'media_title' => 'Выбор логотипа',
            'media_select' => 'Выбрать логотип',
            'description' => ''
        ),
        'logo_in_footer' => array(
            'type' => 'media',
            'title' => 'Логотип в футере',
            'sub_title' => 'Выбрать логотип через медиагалерею',
            'upload_title' => 'Выбрать логотип',
            'media_title' => 'Выбор логотипа',
            'media_select' => 'Выбрать логотип',
            'description' => ''
        ),
        'email' => array(
			'title' => 'Email',
			'type' => 'email',
            'sub_title' => 'Email',
            'description' => '',
        ),
		'phone' => array(
			'title' => 'Телефон',
			'type' => 'text',
            'sub_title' => 'Номер телефона',
            'description' => '',
        ),
		'phoneheader' => array(
			'title' => 'Телефоны в шапке',
			'sub_title' => '',
			'description' => '',
			'multiple' => true,
			'type' => 'group',
			'fields' => array(
				'number' => array(
					'title' => 'Номер телефона',
					'width' => '70'
				),
			),
			'default' => array(
				array(
					'number' => '',
				),
			),
        ),
//		'adresses' => array(
//			'title' => 'Адреса',
//			'sub_title' => '',
//			'description' => '',
//			'multiple' => true,
//			'type' => 'group',
//			'fields' => array(
//				'title' => array(
//					'title' => 'Название подразделения',
//					'width' => '15'
//				),
//				'adress' => array(
//					'title' => 'Адрес',
//					'width' => '55'
//				),
//				'coordinats' => array(
//					'title' => 'Координаты(lat,lon)',
//					'width' => '20'
//				),
//				'in_header' => array(
//					'title' => 'Выводить в шапке',
//					'type' => 'checkbox',
//					'options' => array(
//						'header' => '',
//					),
//					'width' => '10'
//				),
//			),
//		),
//        'center_map' => array(
//            'type' => 'text',
//            'title' => 'Центр карты',
//            'sub_title' => 'Координаты(lat,lon)',
//            'description' => '',
//        ),

    ),
); 




//load normal options page
$args_page = array(
    'dev_mode' => false,
    'option_name' => 'areklama_settings',
    'page_args' => array(
        'slug' => 'areklama-options',//the unique slug of the page
        'menu_title' => 'Настройки сайта',//the title in the sidebar menu of the page
        'page_title' => 'Настройки сайта',//the page title when rendered
        'parent' => '',//a string referencing the parent menu item if any, e.g: 'admin.php?page=somepage'
        //'cap' => 'manage_options',//the capability of users who can access this page
        'priority' => 1,//the menu item priority
        'menu_icon' => '',//the dash icon or url to image icon for use in the menu (only for top level pages)
        'page_icon' => 'icon-themes',//the dash icon if any to use on the page when rendered
        'callback' => false//the page render callback
    ),
    'restore' => false,//false to disable the restore option
    'show_updated' => false,//false to disable the last updated time
    'messages' => array(//here you can provide custom messages which will overwrite the default ones used on different actions
        'save_button' => 'Сохранить',//displays in the settings save box
        'saved' => 'Настройки сохранены',//displays in the settings saved notice
        'restore' => 'Настройки восстановлены',//displays in the settings saved notice
        'save_box' => '',//displays a message in the save box
    )
);
$panel = new Fluent_Options_Page( $args_page, $sections_page );

//optionall store the panel instance for later access
//Fluent_Store::set('panel', $panel);



}

add_action('init', 'areklama_page');