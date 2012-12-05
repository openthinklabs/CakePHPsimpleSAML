<?php
class PostsController extends AppController {
    public $helpers    = array('Html', 'Form');
    public $components = array('Saml.Saml');
    
    public function index() {
		$this->Saml->requireAuth();
        $this->set('posts', $this->Post->find('all'));
    }    
}
