<style>
.style-title{
    color: #38a7c2;
    font-size: 24px;
    letter-spacing: -1px;
}
.ratings i {
    padding-right: 3px;
}
.style-sub{
    color: #555;
    font-weight: 600;
}
.style-p{
    font-size: 14px;
}
.style-a{
    color: #888888;
    font-weight: 600;
}
.google-map{
    width: 100%;
    min-height: 100%;
    position: relative;
}
.list-facilities{
    margin: 0;
    padding: 0;
    width: 100%;
}
ul.list-facilities li.active{
    float: left;
    width: 33%;
    display: inline-block;
    font-size: 16px;
}
.row .col-md-6 .form-group.room-filter {
    position: relative;
    margin-bottom: 0;
    /*border-right: 1px solid #555;*/
}
.row .col-md-6 .form-group {
    background-color: #777;
    margin-bottom: 0;
}
.row .col-md-6 .form-group.room-filter input.form-control {
    color: #fff;
    border-radius: 0;
    background: none;
    padding-left: 30px;
}
.row .col-md-6 .form-group.room-filter .fa-pencil {
    color: #fff;
    position: absolute;
    bottom: 10px;
    right: 25px;
}
.hovereffect:hover div {
background: #DDDDDD;
}
.room-details .details {
    font-weight: 700;
    color: #555;
    margin: 0;
    font-size: 13px;
    text-transform: lowercase;
}
.room-details .extra {
    font-size: 13px;
    color: #444;
    text-transform: lowercase;
}
.room-details .promotions {
    font-size: 13px;
    color: #c90a10;
    font-weight: 700;
    text-transform: lowercase;
}
.room-status {
    text-align: right;
    font-size: 13px;
    font-weight: 700;
    border-right: 1px solid #d8d8d8;
    color: #38a7c2;
    padding-right: 20px;
}
.room-price {
    text-align: right;
}
.room-price .amount {
    font-family: Helvetica Neue Roman,Helvetica,Arial,sans-serif;
    color: #38a7c2;
    text-align: right;
    font-size: 21px;
    font-weight: 730;
}
.room-price .currency {
    font-family: Helvetica Neue Light Std,Helvetica,Arial,sans-serif;
    color: #38a7c2;
    text-align: right;
    font-size: 21px;
}
.room-price .room-checkbox {
    display: inline;
}
.mess-booking {
    display: block;
    width: 100%;
    color: #4bc7dc;
    text-align: center;
    font-size: 15px !important;
    font-weight: 650;
    background: #fff;
}
.button_dl {
    background-color: #777; 
    border: 1px solid #e8e8e8;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
        line-height: 35px;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    border-color: #caced2;
}
.bhoechie-hv:hover{
background-color: #ddd;
}
/*a, a:hover {
    color: #343a40 !important;
}*/
</style>

<div class="container pb-4" style="background-color: #f3f3f3">
        <div class="row">
            <!-- <div class="col"> -->
                <div class="col-8">
                    <h3 class="pb-2 pt-4 mbr-fonts-style style-title"><?= h($newhotel->namehotel)?></h3>

                    <span class="style-sub"><?= h($newhotel->diachimap)?></span>

                    <p class="ratings pt-2" data-bind="rating: rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></p>

                    <p class="style-p"><?= h($newhotel->mota)?></p>

                    <span class="style-sub text-black">Download the pdf of the hotel info <a class="style-a" href="">here</a></span>

                </div>
                <div class="col-4 pt-5 p-0">
                    <div id="carouselControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          
                            <?php echo $this->Html->image('/upload/hotel/'.$newhotel->hinhanh, ['alt' => 'hinhanh','class'=>'d-block img-fluid']);?>
                      </div>
                     <!--  <div class="carousel-item">
                          <img class="d-block img-fluid" src="assets/images/02.jpg">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="assets/images/03.jpg">
                      </div> -->
                  </div>
                  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>  
</div>

<div class="col-12 bhoechie-tab-container">
    <div class="row">
    <div class="col-2 bhoechie-tab-menu">
      <div class="list-group">
        <a href="#" class="list-group-item active text-center p-4 bhoechie-hv">
          <h4 class="fa fa-info-circle fa-2x"></h4><br/>Description
      </a>
      <a href="#" class="list-group-item text-center p-4 bhoechie-hv">
          <h4 class="fa fa-pie-chart fa-2x"></h4><br/>Facilities
      </a>
      <a href="#" class="list-group-item text-center p-4 bhoechie-hv">
          <h4 class="fa fa-map-marker fa-2x"></h4><br/>Map
      </a>
      <a href="#" class="list-group-item text-center p-4 bhoechie-hv">
          <h4 class="fa fa-road fa-2x"></h4><br/>Trip Advisor
      </a>
  </div>
</div>
<div class="col-10 bhoechie-tab p-0">
    <div class="bhoechie-tab-content active pt-4">
                    <span class="style-sub text-black"><?= h($newhotel->diachimap)?></span>

                    <p class="style-p"><?= h($newhotel->mota)?></p>
  </div>
  <div class="bhoechie-tab-content pt-4">
<ul class="list-facilities" >

  <?php
foreach($list_services as $list_services_item){
  ?>
                            <li class="active" ><?= h($list_services_item->nametienich)?></li>                       
                         <?php }?>
                        </ul>


</div>
<div class="bhoechie-tab-content p-0">
            <iframe class="google-map" frameborder="0" scrolling="no" height="500" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=<?= h($newhotel->diachimap)?>&key=AIzaSyCGz8WzqxQw1OwHWey3LCTjqKFG9feCxP4"></iframe>
         <!-- <iframe src="https://www.google.com/maps/search/?api=1&query=centurylink+field" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> -->
</div>
<div class="bhoechie-tab-content">
    <center>
      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
   
  </center>
</div>
</div>
</div>
</div>

<div class="container p-4" style="background-color: #f3f3f3">
  <div class="media-container-row">
    <div class="title col-12">
      <h2 class="mbr-fonts-style style-title">Book This Property</h2>
    </div>
  </div>
</div>

<div class="row" style="background-color: #f3f3f3">
  <div class="col-md-6 p-0">
    <div class="form-group room-filter">
      <input class="form-control pl-4" type="text"  id="container-search" placeholder="Filter by room type...">
      <i class="fa fa-pencil" aria-hidden="true"></i>
    </div>
  </div>

  <div class="col-md-6 p-0">     <!-- Drop down -->
    <div class="dropdown">
  <button class="button_dl dropdown-toggle w-100" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

    <div class="row">
    <div class="col">room only</div>
    <div class="col">bed and breakfast</div>
    <div class="w-100"></div>
    <div class="col">free wireless internet</div>
    <div class="col">breakfast</div>
    <div class="w-100"></div>
    <div class="col">breakfast continental</div>
    <div class="col">breakfast buffet</div>
    </div>

 
  </div>
</div>

  </div>

  <div class="col-12 pt-3">
     <div class="form-booking" style="border: 1px solid #e0dbdbc4;"  id="searchable-container">


          <div class="row hovereffect" style="background-color: #fff;">
        <div class="col">
          Image
        </div>
        <div class="col-6">
          <div class="room-details">
            <span class="details" data-bind="text: room.room_details">Thắng nhỏ</span>
            <br>
            <span data-bind="visible: room.promotions.length > 0 &amp;&amp; room.promotions[0]">
              <span class="promotions" data-bind="text: room.promotions">Book now and save</span><br>
            </span>
            <span class="extra" data-bind="text: room.extras">Free Wireless Internet</span>
          </div>
        </div>
        <div class="col">
          <div class="room-status">
            <span data-bind="text: 'instant purchase'">instant purchase</span>
          </div>
        </div>
        <div class="col">
          <div class="room-price">
            <span class="amount" data-bind="text: grossPrice | money">258</span>
            <span class="currency" data-bind="text: room.net_currency">AUD</span>
            <div class="room-checkbox">
            </div>
          </div>
        </div>
      </div>

  <div class="row hovereffect" style="background-color: #21252900;">
        <div class="col">
          Image
        </div>
        <div class="col-6">
          <div class="room-details">
            <span class="details" >studio</span>
            <br>
            <span data-bind="visible: room.promotions.length > 0 &amp;&amp; room.promotions[0]">
              <span class="promotions" data-bind="text: room.promotions">Book now and save</span><br>
            </span>
            <span class="extra" data-bind="text: room.extras">Free Wireless Internet</span>
          </div>
        </div>
        <div class="col">
          <div class="room-status">
            <span data-bind="text: 'instant purchase'">instant purchase</span>
          </div>
        </div>
        <div class="col">
          <div class="room-price">
            <span class="amount" data-bind="text: grossPrice | money">258</span>
            <span class="currency" data-bind="text: room.net_currency">AUD</span>
            <div class="room-checkbox">
            </div>
          </div>
        </div>
      </div>


    </div>  <!--booking  -->

    </div>

</div>

<div class="container pt-3">
    <div class="col-12">
      <p class="mess-booking">Scroll to see more rates</p>

    </div>
     <div class="media-container-row">
<button type="button" class="btn btn-primary">Proceed</button>
  </div>
</div>
<div class="container mb-5" style="background-color: #f3f3f3">
 
</div>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
<script>
      $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
     $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.details',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
  </script>

