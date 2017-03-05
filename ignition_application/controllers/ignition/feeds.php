<?php

/*
|--------------------------------------------------------------------------
| Ignition v0.5.0 ignitionpowered.co.uk
|--------------------------------------------------------------------------
|
| This class is a core part of Ignition. It is advised that you extend
| this class rather than modifying it, unless you wish to contribute
| to the project.
|
*/

class IG_Feeds extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
         
        $this->load->helper('xml');
        $this->load->helper('text');
        $this->load->library('md');
    }
     
    function blog()
    {
        $this->load->model('Blog');

        $posts = $this->Blog->getPosts(10, 0);
        foreach($posts as $post)
        {
        	// transform markdown to HTML
	        $post->Post = $this->md->defaultTransform($post->Post);
        }

        $data['feed_name'] = $this->config->item('website_name');
        $data['encoding'] = 'utf-8';
        $data['feed_url'] = site_url('feeds/blog');
        $data['page_description'] = $this->config->item('website_description');
        $data['page_language'] = 'en-en';
        $data['posts'] = $posts;
        header("Content-Type: application/rss+xml");
         
        $this->load->view('blog/rss', $data);
    }
     
}