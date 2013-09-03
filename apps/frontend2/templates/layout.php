<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body class="<?php include_slot('bodyclass'); ?>">
    <div class="main">
      <?php if ($sf_user->isAuthenticated()): ?>
        <div class="header">
          <div class="clearfix">
            <div class="left">
              <h1><a href="<?php echo url_for('homepage'); ?>"><span>Netcook, manger malin, &ccedil;a vous va bien</span></a></h1>
              
            </div>
            <div class="member media">
              <div style="border: 1px solid #ccc; width: 100px; font-size: 40px; background-color: #fff; height: 20px; text-align: left; color: #000; text-align: center; margin: 0 5px; padding: 40px 0;" class="pull-left">?</div>
  <!--              <a href="#" class="pull-left"><img src="<?php //echo $sf_user->getEntity()->image;   ?>" alt="" class="media-object" /></a>-->
              <div class="media-body pull-left">
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $sf_user->getUsername(); ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="<?php echo url_for('profile'); ?>">Editer</a></li>
                    <li><a href="<?php echo url_for('member_card'); ?>">Carte membre</a></li>
                    <li><?php echo link_to('deconnexion', 'sf_guard_signout') ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <h2 class="formHeader">Chercher les bons plans autour de vous</h2>
          <div class="form">
            <form>
              <fieldset>
                <div>
                  <input type="text" placeholder="Où souhaitez-vous être livré ?" id="search" data-provide="typeahead" autocomplete="off" class="span11 pull-left" />
                  <button class="btn pull-right" type="button"><i class="icon-search"></i></button>
                </div>
              </fieldset>
            </form>
          </div>
          
          <div class="clearfix mea">
            <div class="pull-left">
              Suivez nous sur les réseaux sociaux !<br />
              <a href="https://www.facebook.com/rapidcook.fr" class="fb" target="_blank"><img src="/images/fb.png" alt="facebook" /></a>
            </div>
            <div class="pull-right">
              Imprimez votre carte membre !<br />
              <a href="<?php echo url_for('member_card'); ?>" class="fb" target="_blank"><img src="/images/netcook.png" alt="netcook" /></a>
            </div>
          </div>
          <?php if ($sf_user->hasFlash('notice')): ?>
            <div class="alert alert-success"><?php echo $sf_user->getFlash('notice') ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php echo $sf_content ?>
      
      <div class="footer" style="padding: 10px; text-align: center;background-color: #d2af5f; margin: 20px 0 0 0; color: #fff;">
        <a href="<?php echo url_for('concept'); ?>" style="color: #fff; text-decoration: underline;">Notre concept ?</a> -
        <a href="<?php echo url_for('qui'); ?>" style="color: #fff; text-decoration: underline;">Qui sommes-nous ?</a> -
        <a href="<?php echo url_for('mentions'); ?>" style="color: #fff; text-decoration: underline;">CGV & Mentions légales</a> - <strong>Netcook &copy; <?php echo date('Y'); ?></strong>
      </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    <script type="text/javascript">
      $(window).load(function(){
        $('.dropdown-toggle').dropdown();
        var results;
        $('#search').autocomplete({
          source: function (query, typeahead){
            $.ajax({
              url: '<?php echo url_for('get_city'); ?>',
              data: {'q': query.term},
              dataType: 'json',
              success: function(data){
                results = data;
                typeahead(data);
              }
            });
          },
          select: function(event, ui){
            window.location.href = "/restaurants/" + ui.item.value.split('(')[1].replace(')', '') + "/";
          }
        });
      });
    </script>
  </body>
</html>
