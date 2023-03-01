

</div>
<?php
   
    require __DIR__.'./vendor/autoload.php';
    
   
    use App\Controller\GitController;

    $git = new GitController();
    echo $git->iniciar();
       
?>
