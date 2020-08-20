<?php

class BlogController extends Controller {
    
    function index() {
        echo "home page of BlogController";
    }
    
    function list($pageNumber) {
        echo "This page number is $pageNumber";
    }
    
}

?>