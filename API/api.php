<?php

    require_once('request.php');
    require_once('../DB/book.php');
    require_once('response.php');

    $request  = new Request($_SERVER);
    $book = new Book();

    if ($request->is_method('get')) {
        if ($request->is_action('/api/books')) {
            $headers = [
                'Content-Type' => 'application/json; charset=utf-8'
            ];
            $data = $book->get_all();
            $result = mysqli_fetch_all($data, MYSQLI_ASSOC);

            Response::send(200, $headers, json_encode($result));
        }
        if ($request->is_action('/api/books/category/:id')) {
            $headers = [
                'Content-Type' => 'application/json; charset=utf-8'
            ];
            $data = $book->get_by_category($request->get_id());
            $result = mysqli_fetch_all($data, MYSQLI_ASSOC);

            Response::send(200, $headers, json_encode($result));
        }
        if ($request->is_action('/api/books/:id')) {
            $headers = [
                'Content-Type' => 'application/json; charset=utf-8'
            ];
            $data = $book->get_by_id($request->get_id());
            $result = mysqli_fetch_all($data, MYSQLI_ASSOC);

            Response::send(200, $headers, json_encode($result));
        }

        Response::send(501, [], 'unknown action: ' . $request->get_uri());
    }

    if ($request->is_method('delete')) {
        if ($request->is_action('/api/books/:id')) {
            $book->delete($request->get_id());

            Response::send(204, [], '');
        }

        Response::send(501, [], 'unknown action: ' . $request->get_uri());
    }

    if ($request->is_method('put')) {
        if ($request->is_action('/api/books/:id')) {
            $values = array(
                "name"    => $_SERVER['HTTP_NAME'],
                "link"    => $_SERVER['HTTP_LINK'],
                "content" => $_SERVER['HTTP_CONTENT']
            );
            $book->update($values, $request->get_id());

            Response::send(204, [], '');
        }

        Response::send(501, [], 'unknown action: ' . $request->get_uri());
    }

    Response::send(501, [], 'unknown action: ' . $request->get_method());
?>