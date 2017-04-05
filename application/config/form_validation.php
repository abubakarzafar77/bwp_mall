<?php 


$config = 
[
	'admin_login_rules' =>
		[
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|trim|max_length[25]|alpha'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			]
		]
];
