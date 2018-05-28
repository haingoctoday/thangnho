      <div class="search-accom">
        <div class="container">
          <div class="form-group-search-tour" style="padding: 20px 10px 20px 10px;">
            <div class="input_search_tour mb-2">
              <div class="col-md-12 col-xs-12">
                        <div class="input-group">
            <input type="button" class="button_search-twt11" data-toggle="collapse" data-target="#pick-input-tour-input" id="text-search-des">
            <input type="text" class="form-control" value="" placeholder="Search by destination or activity..." id="texxt-search" />
            <input type="button" class="button_search-twt1" value="SEARCH">
        </div>
            <div id="pick-input-tour-input" class="collapse" style="position: absolute;z-index: 99;width: 95%;">
      <div class="panel-body">
      
          <div class="input-group control-group style-drop-type" style="width: 190px;">
        <div class="item-drop-tour">

  <div class="item-tour-des">All Destinations</div>
<?php foreach ($agentstype as $destination){ ?>
  <?php if($destination->type_tour == '1') {?>
    <div class="item-tour-des"><?php echo $destination->name?></div>
  <?php }?>
<?php }?>

         </div>
        </div>
      </div>
    </div>

              </div>
            </div>
            <div class="container">





<div class="container">
  <div class="row">

<div class="col-md-2 offset-md-3 p-0"><button class="btn border-0 button-tour ditme" id="btn-tour-type"><div id="text-type">Activities Styles</div> <img src="img/arrow-down.png" style="margin-top: 8px;float: right;" ></button>

</div>
    <div id="pick-input-tourtype" class="col-md-2 p-0">
    <div class="panel-body">

      <div class="input-group control-group style-drop-type style-drop-type">
        <div class="item-drop-tour">
             <div class="item-tour-type">All types</div>
<?php foreach ($agentstype as $tourtype){ ?>
  <?php if($tourtype->type_tour == '3') {?>
    <div class="item-tour-type"><?php echo $tourtype->name?></div>
  <?php }?>
<?php }?>
         </div>
       </div>
     </div>
     </div>
  </div>
</div>

</div>

</div>
</div>
</div>