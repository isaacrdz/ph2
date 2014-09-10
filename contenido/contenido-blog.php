

<section id="blog" class="container">
        <div class="center">
            <h2>Este es nuestro Blog</h2>
            <p class="lead">Tambien no gusta bloggear de vez en cuando</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
<?
$sql = mysql_query("SELECT * FROM post ORDER BY id DESC ");
while ($row = mysql_fetch_array($sql)){


?>


                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><? echo $row['dia']." ".$row['mes']." ".$row['anio'] ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><? echo $row['autor']?></a></span>
                                    
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<? echo $row['imagen'] ?>" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html"><? echo $row['titulo']?></a></h2>
                                <h3><? echo $row['contenido']?></h3>
                                <a class="btn btn-primary readmore" href="blog.php?n=<? echo $row['id'] ?>">Seguir leyendo <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->


<?
}
?>


                

                        
                 
                        
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class=""><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->
                    <? include "contenido/contenido-blog-aside.php"  ?>
 
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

  