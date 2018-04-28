

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
    <button class="btn btn-danger disabled" id="search_submit" type="submit">Search</button>
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
<section class="mbr-section article content9 cid-qFgTGx7c5G" id="content9-i" data-rv-view="546">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-7">Please be advised that we are unable to quote any Mediterranean ferry requests for 2018 as the ferry companies have not announced their availability and rates for the new season.
<div>
</div><div>Kindly note that Excite Holidays will be able to book and issue tickets from March 2018.</div></div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section class="features18 popup-btn-cards cid-qFgS3jFjhz" id="features18-c" data-rv-view="538">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-5">Transfers</h2>
        
        <div class="media-container-row  ">

           <?php
  foreach($transfer_hot as $key => $transfer_hot_item){
?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
              
                          <?=  $this->Html->image('/upload/cruisedrive/'.$transfer_hot_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5"><?php echo $transfer_hot_item->name?></h4>
                        <p class="mbr-text mbr-fonts-style align-left display-7"><?php echo h($transfer_hot_item->detail)?>.</p>
                    </div>
                </div>
            </div>

            <?php } ?>
            

           

            
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qFgXBuvoZE" id="content4-x" data-rv-view="551">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">Our Routes</h2>
                
                
            </div>
        </div>
    </div>

    

    <figure class="mbr-figure">
        <div class="image-block" style="width: 100%;">
            <img src="assetsagent/images/ferries-map-2065x1837.jpg" alt="Mobirise" title="" media-simple="true">
            
        </div>
    </figure>
</section>
<section class="mbr-section content4 cid-qFgUO3kQ3T" id="content4-o" data-rv-view="555">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5">Booking Conditions</h2>
                
                
            </div>
        </div>
    </div>

     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li>Ferry tickets will be issued once full payment is received</li>
                    <li>Once ticketed, all ferry tickets are non-refundable, non-transferable and non-amendable</li>
                    <li>Travel agents will earn 10% commission on all Greek Island ferry tickets</li><li>Standalone ferry tickets without land are subject to a 25AUD fee (incl GST) which is applied per person, per booking</li><li>The 25AUD fee is waived where land services are included with the ferry ticket</li><li>Express postage costs are included in the ticket price. Ferry tickets will be posted to your agency</li><li>Ferry departures are subject to weather conditions. Excite Holidays cannot be held liable if the Greek Port Authority does not allow ferries to travel due to weather conditions or for safety reasons</li><li>Ferry and hydrofoil schedules and services are subject to change. Excite Holidays cannot be held liable if ferry or hydrofoil services do not operate for reasons beyond our control</li>
                </ul>
            </div>
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
