<?php
/**
 * Classe index do Admin
 */
class Pages extends CI_Controller {

//	public function view($page = 'home')
//	{
//
//	}
    public function view($page = 'dashboard')
{

	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter
        $data['start_url'] = $page ;
//        $data['start_url'] = "docs" ;

	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);

}

}