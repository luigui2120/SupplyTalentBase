<?php

namespace boostrap;

class boostrap
{
                public function __construct()
                {
                    $url = $this->GetUrl();
                    var_dump($url);
                }
                private function GetUrl()
                {
                    $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
                    $url =rtrim($url, '/');
                    $url = explode('/', $url);
                    return $url;
                }

                private function GetMetodos()
                {
                    $metodos = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
                    return $metodos;
                }
}