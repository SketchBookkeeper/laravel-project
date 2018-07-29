<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/blog.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include ('partials.header') @include ('partials.jumbotron')
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                @yield ('content')
            </div>

            <aside class="col-md-4 blog-sidebar">
                @yield ('sidebar')
            </aside>
        </div>
    </main>

    @yield ('footer')
</body>

</html>
