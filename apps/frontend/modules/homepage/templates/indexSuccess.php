<div class="row-fluid">
<div class="form span12">
  <form>
    <fieldset>
      <div class="input-append span12">
        <input type="text" placeholder="Où souhaitez-vous être livré ?" class="span12" id="search" data-provide="typeahead" autocomplete="off" />
        <button class="btn" type="button"><i class="icon-search"></i></button>
      </div>
    </fieldset>
  </form>
</div>
</div>

<div id="featured"> 
     <img src="/images/affiche1.jpg" alt="Overflow: Hidden No More" width="940" height="450" id="test" />
     <img src="/images/affiche2.jpg"  alt="HTML Captions" width="940" height="450" />
     <img src="/images/affiche3.jpg" alt="and more features" width="940" height="450" />
     <img src="/images/affiche4.jpg" alt="" width="940" height="450" />
</div>

<div class="row-fluid">
<div class="span4">
<h2>Tous les restaurants</h2>
<ul data-role="listview">
<?php foreach($restaurants as $restaurant): ?>
  <li><a href="<?php echo url_for('restaurant', $restaurant); ?>" data-ajax="false"><?php echo $restaurant->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>

<div class="span4">
<h2>Les derniers restaurants ajoutés</h2>
<ul data-role="listview">
<?php foreach($recentRestaurants as $recentRestaurant): ?>
  <li><a href="<?php echo url_for('restaurant', $recentRestaurant); ?>" data-ajax="false"><?php echo $recentRestaurant->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>

<div class="span4">
<h2>Trouver un restaurant par ville</h2>
<ul>
<?php foreach($cities as $city): ?>
  <li><a href="<?php echo url_for('restaurant_list', array('postal_code' => $city->postal_code)); ?>"><?php echo $city->city; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

<script type="text/javascript">
$(window).load(function(){
$('#search').autocomplete({
    source: function (query, typeahead){
      $.ajax({
        url: '<?php echo url_for('get_city'); ?>',
        data: {'q': query.term},
        dataType: 'json',
        success: function(data){
          typeahead(data);
        }
      });
    },
    select: function(event, ui){
      $.ajax({
        url: '<?php echo url_for('get_postalcode'); ?>',
        data: {'q': ui.item.value},
        dataType: 'json',
        success: function(data){
          window.location.href = "/frontend.php/restaurants/" + data + "/";
        }
      });
    }
});
console.log(true);
$('#featured').orbit({bullets: true});

});
</script>
