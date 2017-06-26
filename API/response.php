<?php

    class Response {
        public static function send($code, $headers, $data) {
            foreach ($headers as $key => $value) {
                header("$key: $value");
            }
            http_response_code($code);
            echo $data;
            exit();
        }
    }
?>