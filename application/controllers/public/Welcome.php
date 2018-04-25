 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    function general()
    {
        $data['layout']   =   'admin/layouts/layout';
        $data['header']   =   'admin/layouts/header';
        $data['sidebar']  =   'admin/layouts/sidebar';
        $data['footer']   =   'admin/layouts/footer';
        return $data;
    }
	
	public function index()
	{
	    $data = $this->general();
	    $data['pageName']                                 =     "index";
	    $data['pageTitle']                                =     '';
	    $data['metaKeywords']                             =     '';
	    $data['metaDescription']                          =     '';
	    $data['content']                                  =     'public/pages/index';
	    $this->load->view('public/welcome',$data);
	}

}
 