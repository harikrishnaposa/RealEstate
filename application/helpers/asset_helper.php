<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		Sekati
 * @author		Jason M Horwitz
 * @copyright	Copyright (c) 2013, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.2.7
 * @filesource
 *
 * @usage 		$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy config/asset.php to your CI application/config directory
 *				& helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 *				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 *				Autoload CodeIgniter's url_helper in application/config/autoload.php:
 *				$autoload['helper'] = array('url');
 *
 * @notes		Organized assets in the top level of your CodeIgniter 2.x app:
 *					- assets/
 *						-- css/
 *						-- download/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- upload/
 *						-- xml/
 *					- application/
 * 						-- config/asset.php
 * 						-- helpers/asset_helper.php
 */

// ------------------------------------------------------------------------
// URL HELPERS

/**
 * Get asset URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('asset_url'))
{
    function asset_url()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        //return the full asset path
        return base_url() . $CI->config->item('asset_path');
    }
}

/**
 * Get css_Js URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('css_js_url'))
{
    function css_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('css_js_path');
    }
}

/**
 * Get Admin css_JS URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_css_js_url'))
{
    function admin_css_js_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_css_js_path');
    }
}

/**
 * Get images URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('images_url'))
{
    function images_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('images_path');
    }
}

/**
 * Get Admin images URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_images_url'))
{
    function admin_images_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_images_path');
    }
}

/**
 * Get icons URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('icons_url'))
{
    function icons_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('icons_path');
    }
}

/**
 * Get Admin icons URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_icons_url'))
{
    function admin_icons_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_icons_path');
    }
}

/**
 * Get dist URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('dist_url'))
{
    function dist_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('dist_path');
    }
}

/**
 * Get Admin dist URL
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_dist_url'))
{
    function admin_dist_url()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('admin_dist_path');
    }
}



// ------------------------------------------------------------------------
// PATH HELPERS

/**
 * Get asset Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('asset_path'))
{
    function asset_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('asset_path');
    }
}

/**
 * Get CSS_JS Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('css_js_path'))
{
    function css_js_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('css_js_path');
    }
}

/**
 * Get admin CSS_JS Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_css_js_path'))
{
    function admin_css_js_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('admin_css_js_path');
    }
}

/**
 * Get images Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('images_path'))
{
    function images_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('images_path');
    }
}

/**
 * Get Admin images Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_images_path'))
{
    function admin_images_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('admin_images_path');
    }
}

/**
 * Get icons Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('icons_path'))
{
    function icons_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('icons_path');
    }
}

/**
 * Get Admin icons Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_icons_path'))
{
    function admin_icons_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('admin_icons_path');
    }
}

/**
 * Get dist Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('dist_path'))
{
    function dist_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('dist_path');
    }
}

/**
 * Get Admin dist Path
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('admin_dist_path'))
{
    function admin_dist_path()
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();
        return FCPATH . $CI->config->item('admin_dist_path');
    }
}

// ------------------------------------------------------------------------
// EMBED HELPERS

/**
 * Load CSS
 * Creates the <link> tag that links all requested css file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('css'))
{
    function css($file, $media='all')
    {
        return '<link rel="stylesheet" type="text/css" href="' . css_js_url() . $file . '" media="' . $media . '">'."\n";
    }
}

/**
 * Load Admin CSS
 * Creates the <link> tag that links all requested css file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('css'))
{
    function css($file, $media='all')
    {
        return '<link rel="stylesheet" type="text/css" href="' . admin_css_js_url() . $file . '" media="' . $media . '">'."\n";
    }
}

/**
 * Load JS
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @param 	array 	$atts Optional, additional key/value attributes to include in the SCRIPT tag
 * @return  string
 */
if ( ! function_exists('js'))
{
    function js($file, $atts = array())
    {
        $element = '<script type="text/javascript" src="' . css_js_url() . $file . '"';
        
        foreach ( $atts as $key => $val )
            $element .= ' ' . $key . '="' . $val . '"';
            $element .= '></script>'."\n";
            
            return $element;
    }
}

/**
 * Load Admin JS
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @param 	array 	$atts Optional, additional key/value attributes to include in the SCRIPT tag
 * @return  string
 */
if ( ! function_exists('js'))
{
    function js($file, $atts = array())
    {
        $element = '<script type="text/javascript" src="' . admin_css_js_url() . $file . '"';
        
        foreach ( $atts as $key => $val )
            $element .= ' ' . $key . '="' . $val . '"';
            $element .= '></script>'."\n";
            
            return $element;
    }
}

/**
 * Load Images
 * Creates an <img> tag with src and optional attributes
 * @access  public
 * @param   string
 * @param 	array 	$atts Optional, additional key/value attributes to include in the IMG tag
 * @return  string
 */
if ( ! function_exists('images'))
{
    function images($file,  $atts = array())
    {
        $url = '<images src="' . images_url() . $file . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
            $url .= " />\n";
            return $url;
    }
}

/**
 * Load Images
 * Creates an <img> tag with src and optional attributes
 * @access  public
 * @param   string
 * @param 	array 	$atts Optional, additional key/value attributes to include in the IMG tag
 * @return  string
 */
if ( ! function_exists('images'))
{
    function images($file,  $atts = array())
    {
        $url = '<images src="' . admin_imges_url() . $file . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
            $url .= " />\n";
            return $url;
    }
}
/**
 * Load Minified JQuery CDN w/ failover
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('jquery'))
{
    function jquery($version='')
    {
        // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
        $out = '<script src="//ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js"></script>'."\n";
        $out .= '<script>window.jQuery || document.write(\'<script src="'.css_js_url().'jquery-'.$version.'.min.js"><\/script>\')</script>'."\n";
        return $out;
    }
}
/**
 * Load Google Analytics
 * Creates the <script> tag that links all requested js file
 * @access  public
 * @param   string
 * @return  string
 */
if ( ! function_exists('google_analytics'))
{
    function google_analytics($ua='')
    {
        // Change UA-XXXXX-X to be your site's ID
        $out = "<!-- Google Webmaster Tools & Analytics -->\n";
        $out .='<script type="text/javascript">';
        $out .='	var _gaq = _gaq || [];';
        $out .="    _gaq.push(['_setAccount', '$ua']);";
        $out .="    _gaq.push(['_trackPageview']);";
        $out .='    (function() {';
        $out .="      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
        $out .="      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
        $out .="      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
        $out .="    })();";
        $out .="</script>";
        return $out;
    }
}

/* End of file asset_helper.php */
