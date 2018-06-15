<?php 
$config= ['login_rules'=> [
								[
									'field' => 'username',
									'label' => 'User Name',
									'rules' => 'required|alpha_numeric_spaces|trim'
								],
								[
									'field' => 'password',
									'label' => 'Password',
									'rules' => 'required|trim'
								],
								
							],
							'signup_rules'=>[
		  						[
		  							'field' => 'username',
									'label' => 'User Name',
									'rules' => 'required|alpha_numeric_spaces|trim|is_unique[users.uname]'
		  						],
		  						[
		  							'field' => 'dname',
									'label' => 'Display Name',
									'rules' => 'required|alpha_numeric_spaces|trim'
		  						],
		  						[
		  							'field' => 'email',
									'label' => 'Email',
									'rules' => 'required|trim|valid_email|xss_clean'
		  						],
		  						[
		  							'field' => 'password',
									'label' => 'Password',
									'rules' => 'required|trim|min_length[6]|max_length[15]|matches[confirmpassword]'
		  						],
		  						[
		  							'field' => 'confirmpassword',
									'label' => 'Confirm Password',
									'rules' => 'required|trim'
		  						]
		  					],
		  					'add_article_rules'=>[
		  						[
		  							'field' => 'title',
									'label' => 'Title of the article',
									'rules' => 'required|alpha_numeric_spaces|trim'
		  						],
		  						[
		  							'field' => 'content',
									'label' => 'Article Content',
									'rules' => 'required|trim'
		  						],
		  						[
		  							'field' => 'excerpts',
									'label' => 'Excerpts',
									'rules' => 'required|trim'
		  						],
		  						[
		  							'field' => 'category',
									'label' => 'category',
									'rules' => 'required'
		  						]
		  					],
		  					'comment_rules'=>[
		  						[
		  							'field' => 'comment_body',
									'label' => 'Comment_body',
									'rules' => 'required|trim'
		  						],
		  					]
		  				];