<?php
    class Request {

        private $method;
        private $uri;
        private $data;

        public function __construct($server) {
            $this->method = $server['REQUEST_METHOD'];
            $this->uri = $server['REQUEST_URI'];
            $this->data = json_decode(file_get_contents('php://input'));
        }

        public function get_method() {
            return $this->method;
        }

        public function get_uri() {
            return $this->uri;
        }

        public function get_data() {
            return $this->data;
        }

        public function is_method($method) {
            return strcasecmp($this->method, $method) === 0;
        }

        public function is_action($action) {
            $regex = '/' . str_replace('\:id', '\d+', preg_quote($action, '/')) . '$/i';

            return preg_match($regex, $this->uri) === 1;
        }

        public function get_id() {
            preg_match('/\d+$/', $this->uri, $id);

            return $id[0];
        }
    }
?>