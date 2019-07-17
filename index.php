<head> 
    <title>Lino fun | All you need to know about Lino printing</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <h1>Latest Posts</h1>


    <div class="container">
      <div class="row">

            <?php while(have_posts()) : the_post(); ?>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                      <img src="http://placehold.it/300x200" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php the_title();?></h5>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                </div>
            <?php endwhile ?>

      </div>
    </div>
</body>