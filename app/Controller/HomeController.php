<?php

class HomeController extends AppController {
    public function index() {
        $this->layout = 'index_layout';
        $this->title = 'Home';
    }
}
?>