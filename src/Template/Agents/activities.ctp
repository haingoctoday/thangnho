

<section class="mbr-section form3 cid-qFh2EUhmPg" id="form3-14" data-rv-view="794">
<div class=" form-group">
 <div class="featurette">
   <div class="featurette-inner text-center">
    <form role="form" class="search" id="search_hotel">

     <div class="input-group pr-2">
    <!--   <input type="text" id="search_name" name="search_name" placeholder="Search by destination, point of interest, hotel or address..." class="form-control col-sm-5 ml-1"> -->
      <div class="typeahead__container col-sm-11 ml-1">
        <div class="typeahead__field ">
 
            <span class="typeahead__query form-inline">
                <input class="form-control" id="search_name" name="search_name" type="search" placeholder="Search by destination, point of interest, hotel or address..." autocomplete="off">
            </span>
            
 
        </div>
    </div>
      
      


    
    

  <span class="input-group-btn">
    <!-- <button class="btn btn-danger disabled" id="search_submit" type="submit">Search</button> -->
      <a href="<?php echo $this->Url->build('/activitis-result '); ?>" class="btn btn-danger">Search</a>
  </span>
   </form>
</div>
<!-- /input-group -->
</form>
<!-- /.max-width on this form -->

</div>
<!-- /.featurette-inner (display:table-cell) -->

</div>

</div>
</section>


<section class="features18 popup-btn-cards cid-qFgOqvn1QF" id="features18-8" data-rv-view="530">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-5">Activities</h2>
        
        <div class="media-container-row">
<?php
  foreach($top_localtion as $key => $top_localtion_item){
?>


            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                      <?=  $this->Html->image('/upload/localtion/'.$top_localtion_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                       
                    </div>
                    <div class="card-box">
                       
                        <p class="mbr-text mbr-fonts-style align-left display-4"><a href="<?php echo $this->Url->build('/activitybooking'); ?>"> Demo One day in Halong </a></p>
                           <p class="mbr-text mbr-fonts-style align-left display-4">Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.</p>
                              <p class="mbr-text mbr-fonts-style align-left display-4">Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.</p>
                    </div>
                </div>
            </div>

            <?php 
}
            ?>
           

            
        </div>
    </div>
</section>


<script type="text/javascript">
    $( "#search_name" ).focus(function() {
    $("body").css('background',"rgba(0, 0, 0, 0.45)");
    $(".search").css('background',"#fff");
    $(".features18").css('opacity',".3");
  });
  $( "#search_name" ).blur(function() {
    $("body").css('background',"none");
    $(".search").css('background',"#555");
    $(".features18").css('opacity',"1");
  });
$.typeahead({
    input: '#search_name',
    minLength: 1,
    maxItem: 5,
    order: "asc",
    hint: true,
    group: {
        template: "{{group}}"
    },
    maxItemPerGroup: 0,
    backdrop: {
        "background-color": "#fff"
    },
      filter: true,        
   // href: "/beers/{{group|slugify}}/{{display|slugify}}/",
    //dropdownFilter: "all beers",
    emptyTemplate: 'No result for "{{query}}"',
    source: {
        "Hotel": {
            ajax: {
                url: "/jquerytypeahead/beer_v1.json",
                path: "data.beer.Hotel"
            }
        },
        "Address": {
            ajax: {
                url: "/jquerytypeahead/beer_v1.json",
                path: "data.beer.Address"
            }
        },
        "City": {
            ajax: {
                url: "/jquerytypeahead/beer_v1.json",
                path: "data.beer.City"
            }
        },
        "Haha": {
            ajax: {
                url: "/jquerytypeahead/beer_v1.json",
                path: "data.beer.Haha"
            }
        }
    },
    callback: {
        onClickAfter: function (node, a, item, event) {
 
            event.preventDefault;
 
            // href key gets added inside item from options.href configuration
        //    alert(item.href);
 
        }
    },
    debug: true
});

</script>
