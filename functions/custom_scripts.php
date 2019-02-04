<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php if( session_status() != PHP_SESSION_ACTIVE ){session_start();} ?>
<?php if($_GET['u']&&isset($_GET['u'])){$_SESSION['u'] = $_GET['u'];} ?>

<script>
	


    //track boton inscripcion
      var u = null;
      var u = '<?php echo (isset($_SESSION['u']) ? $_SESSION['u'] : ''); ?>';

      console.log('tracking working function');
      console.log(u);

      jQuery( document ).ready(function(){

          jQuery(".track").click(function() { 
            //console.log('click');
            if( u != null){ 

              var url=jQuery(this).attr('href');    
              //alert('click destino track: '+url+'/'+u);
              jQuery(this).attr("href", url+'/'+u);
              
            }

          });
          
          jQuery(".out_track").click(function() { 
            
            console.log('out click');
            if( isset($_SESSION['u']) && $_SESSION['u']!='' ){ 

              var url=jQuery(this).attr('href');    
              //alert('click destino out_track: '+url+'/'+u);
              jQuery(this).attr("href", url+'?u='+u);
              
            }

          });



  });




</script>