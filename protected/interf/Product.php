<?php 

namespace interf;

interface Product {
    public function add();
    public function delete();
    public function show($type, $id = null);
}