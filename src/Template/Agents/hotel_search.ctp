
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">

<?php
$adults = array('1'=>'Adults 1','2'=>'Adults 2','3'=>'Adults 3','4'=>'Adults 4','5'=>'Adults 5','6'=>'Adults 6');
$children = array('0'=>'Children 0','1'=>'Children 1','2'=>'Children 2','3'=>'Children 3','4'=>'Children 4 ');


?>
<div class="row form-group">
 <div class="featurette">
   <div class="featurette-inner text-center">
    <form role="form" class="search" id="search_hotel">

     <div class="input-group">
    <!--   <input type="text" id="search_name" name="search_name" placeholder="Search by destination, point of interest, hotel or address..." class="form-control col-sm-5 ml-1"> -->
      <div class="typeahead__container col-sm-5 ml-1">
        <div class="typeahead__field ">
 
            <span class="typeahead__query form-inline">
                <input class="form-control" id="search_name" name="search_name" type="search" placeholder="Search by destination, point of interest, hotel or address..." autocomplete="off">
            </span>
            
 
        </div>
    </div>
      <input type="text" id="search_date_to" name="search_date_to" placeholder="Check in" class="form-control col-sm-1 ml-1">
      <input type="text" id="search_date_end" name="search_date_end" placeholder="Check out" class="form-control col-sm-1 ml-1">

      <select class="form-control col-sm-1 ml-1" id="search_night" name="search_night">
        <?php
        for ($num_day=1; $num_day < 32 ; $num_day++) { 
         ?>
         <option value="<?php echo $num_day?>" ><?php echo $num_day?> night</span></option>
         <?php
       }
       ?>


     </select>


     <button type="button" class="form-control col-sm-3 ml-1 check-end" data-toggle="collapse" data-target="#pick-room">Pick Room and Adults</button>
     <div id="pick-room" class="collapse">
      <div class="panel-body">
        <form action="" >

          <div class="input-group control-group after-add-more p-2 border" id="sophong">
             <span class="fa fa-close remove col-sm-1"></span>
            <span class="col-sm-3"> Room </span>
          <!--  <input type="text" name="adults[]" class="form-control col-sm-4" placeholder=""> -->
          <?php echo $this->Form->select('adults[]', $adults,['default' => '2','class'=>'form-control col-sm-4 adults']);?>
           <?php echo $this->Form->select('children[]', $children,['class'=>'form-control col-sm-4 ml-2 children']);?>
         <!--  <input type="text" name="children[]" class="form-control col-sm-4 ml-2" placeholder=""> -->
        </div>

     


      <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
      <div class="copy-fields hide">
        <div class="control-group input-group p-2 border" id="sophong">
           
            <span class="fa fa-close remove col-sm-1"></span>
            <span class="col-sm-3"> Room</span>
           <?php echo $this->Form->select('adults[]', $adults,['default' => '2','class'=>'form-control col-sm-4 adults']);?>
           <?php echo $this->Form->select('children[]', $children,['class'=>'form-control col-sm-4 ml-2 children']);?>
          
        </div>
      </div>

      <div>
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add another room</button>
          </div>
      </div>
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
<!-- Page Heading -->


<div class="row mt-100">
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#">

<?php echo $this->Html->image('NY_Activities.jpg', ['alt' => 'card-img-top','class'=>'card-img-top']);?>
       </a>
      <div class="">
        <h4 class="text-center">Citadines Trafalgar Square London</h4>
        <h5 class="text-center">London, England</h5>
        <p class="card-text text-center">Just a stones’ throw from the hustle and bustle of London city centre, this hotel features laundry facilities, a business centre and onsite restaurant. Sleek and modern apartments provide fully-equipped kitchenettes, ensuite bathrooms and well-partitioned living areas.</p>

      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#">
<?php echo $this->Html->image('Singapore_Activities.jpg', ['alt' => 'card-img-top','class'=>'card-img-top']);?>
       </a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Two</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#">
<?php echo $this->Html->image('NY_Activities.jpg', ['alt' => 'card-img-top','class'=>'card-img-top']);?>
       </a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Project Three</a>
        </h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
      </div>
    </div>
  </div>




</div>

<script type="text/javascript">
    var count=0;
      $(document).ready(function() {
      $(".add-more").click(function(){ 
        
        if(count < 4){
count++;
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);

        }
        if(count == 4){

           $(".add-more").css("display","none");
        }
      });
      $("body").on("click",".remove",function(){ 
          if(count >= 1){
             count--;
            $(this).parents(".control-group").remove();
             $(".add-more").css("display","block");
          }
          
      });

    });


$( ".adults" ).change(function() {
  

//   count = document.getElementById("sophong").length;
//console.log(count);


});
$( ".children" ).change(function() {
  //console.log($('#sophong').size());
});
$( ".check-end" ).click(function() {
 $('#search_submit').removeClass("disabled");

});

  $( "#search_name" ).focus(function() {
    $("body").css('background',"rgba(0, 0, 0, 0.45)");
    $(".search").css('background',"#fff");
    $(".portfolio-item").css('opacity',".3");
  });
  $( "#search_name" ).blur(function() {
    $("body").css('background',"none");
    $(".search").css('background',"#555");
    $(".portfolio-item").css('opacity',"1");
  });


  var nowTemp = new Date();
  var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

  var checkin = $('#search_date_to').datepicker({
   format: 'dd M yyyy',
   beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 1);
    checkout.datepicker("update", newDate);

  }
  $('#search_date_end')[0].focus();
});


var checkout = $('#search_date_end').datepicker({
  format: 'dd M yyyy',
  beforeShowDay: function(date) {
    if (!checkin.datepicker("getDate").valueOf()) {
      return date.valueOf() >= new Date().valueOf();
    } else {
      return date.valueOf() > checkin.datepicker("getDate").valueOf();
    }


  },
  autoclose: true

}).on('changeDate', function(ev) {

  var start = $("#search_date_to").datepicker("getDate");
  var end = $("#search_date_end").datepicker("getDate");
  var days = (end - start) / (1000 * 60 * 60 * 24);
  console.log(days);
  $("#search_night").val(days);
});




$('#search_hotel').submit(function(event) {
    var adults = $('.adults option:selected').map(function(idx, elem) {
          return $(elem).val();
        }).get();
      var ne_adults = adults.slice(0, -1);
     
 var childrens = $('.children option:selected').map(function(idx, elem) {
          return $(elem).val();
        }).get();
      var ne_childrens = childrens.slice(0, -1);

       

         var sophong = ne_adults.length;
   



    var $inputs = $('#search_hotel :input');

    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
    var values = {};
    $inputs.each(function() {
        values[this.name] = $(this).val();
    });
    values['room'] = sophong;
     values['adults_end'] = ne_adults;
      values['children_end'] = ne_childrens;
    console.log(values);
 event.preventDefault();
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