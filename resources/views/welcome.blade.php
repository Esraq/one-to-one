<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

     <p>

        <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-center main-nav">
                <li class="active"><a href="/"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                @foreach($menu as $menuItem)
                <li class="dropdown">
                    <a href="{{$menuItem->url}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$menuItem->menu_name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($menuItem->submenu as $subMenuItem)
                        <li><a href="{{$subMenuItem->link}}">{{$subMenuItem->submenu_name}}</a></li>
                        @endforeach
                    </ul>

                </li>
              @endforeach

     </p>




</div>

</body>
</html>
