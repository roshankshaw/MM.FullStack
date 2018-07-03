<?php
class MY_Controller extends CI_Controller{
	public function index()
	{
	}

	public function get_dpt_array(){
 		$departments=[
			'bm'=>'Biotechnology and biomedical engineering',
			'cr'=>'Ceramic Engineering',
			'ch'=>'Chemical Engineering',
			'ce'=>'Civil Engineering',
			'cs'=>'Computer Science and Engineering',
			'cy'=>'Department of Chemistry',
			'hs'=>'Department of Humanities',
			'ls'=>'Department of Life Science',
			'ma'=>'Department of Mathematics',
			'py'=>'Department of Physics',
			'ee'=>'Electrical Engineering',
			'ece'=>'Electronics and Communication Engineering',
			'fp'=>'Food Process Engineering',
			'id'=>'Industrial Design',
			'me'=>'Mechanical Engineering',
			'mm'=>'Metallurgical and Materials Engineering',
			'mn'=>'Mining Engineering',
			'ar'=>'Planning and Architecture',
			'mg'=>'School of Management',
			'ea'=>'Department of Earth and Atmospheric Sciences',
		];
		return $departments;
 	}
 	public function category_array(){
 		$category=[
 			'cam'=>'campus',
 			'dpt'=>'departments',
 			'car'=>'career',
 			'vws'=>'views',
 			'ddc'=>'dd&cwc',
 			'alm'=>'aLumni',
			'Not Assigned'=>'Not Assigned'
		];
		return $category;
 	}
}