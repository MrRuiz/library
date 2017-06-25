<?php
    /*
        **  URL                                     HTTP Method                         Operation
        **  ==================================================================================================
        **  /api/books/                             GET                                 Lists books.
        **  /api/books/category/:category_id        GET                                 Lists books by category.
        **  /api/books/:id                          GET                                 Gets book data by id.
        **  /api/books/:name                        GET                                 Gets book data by name.
        **  /api/books/:id                          DELETE                              Deletes a book from the Database.
        **  /api/books/:id                          PUT                                 Updates a book from the Database.
    */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Library API</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Library API</h1>
            </div>
        </header>

        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>URL</th>
                        <th>HTTP METHOD</th>
                        <th>OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>/api/books/</td>
                        <td>GET</td>
                        <td>Lists books</td>
                    </tr>
                    <tr>
                        <td>/api/books/category/:category_id</td>
                        <td>GET</td>
                        <td>Lists books by category</td>
                    </tr>
                    <tr>
                        <td>/api/books/:id</td>
                        <td>GET</td>
                        <td>Gets book data by id</td>
                    </tr>
                    <tr>
                        <td>/api/books/:name</td>
                        <td>GET</td>
                        <td>Gets book data by name</td>
                    </tr>
                    <tr>
                        <td>/api/books/:id</td>
                        <td>DELETE</td>
                        <td>Deletes a book from the Database</td>
                    </tr>
                    <tr>
                        <td>/api/books/:id</td>
                        <td>PUT</td>
                        <td>Updates a book from the Database</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="container">
            <form action="API/api.php" method="POST">
                <div class="row">
                    <div class="col-md-8">
                        <label for="url">URL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="addon">http://api/books/</span>
                            <input type="text" id="url" name="url" class="form-control" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="method">HTTP METHOD</label>
                            <select id="method" name="method" class="form-control">
                                <option value="get">GET</option>
                                <option value="put">PUT</option>
                                <option value="delete">DELETE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="no-visible">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" id="name" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="link">LINK</label>
                                <input type="text" id="link" name="link" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="content">CONTENT</label>
                                <textarea id="content" name="content" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="submit" class="form-control" />
                    </div>
                </div>
            </form>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $(".no-visible").hide();

                $("#method").change(function() {
                    if( $(this).val() == "put" ) {
                        $(".no-visible").slideDown();
                    }
                    else {
                        $(".no-visible").slideUp();
                    }
                });
            });
        </script>
  </body>
</html>