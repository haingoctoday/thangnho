<div class="wrapper-cruise">
    <div class="cruise-sreach-form">
        <h4 class="cruise-title-head">FIJI FERRY REQUEST</h4>
        <div class="input-search-tranfer pb-5 pt-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group" style="width: 93% !important">
                       <label class="form-control-label display-7 cruise-fix-label">From:
                       </label>
                       <div class="input-group">
                           <i class="fa fa-map-marker maucam" aria-hidden="true"></i>
                           <input class="form-control" type="text" name="firstname" id="firstname" placeholder="From (Port name)">
                       </div>
                   </div>
               </div>
               <div class="col-md-5 pl-0">
                 <div class="form-group">
                    <label class="form-control-label display-7">To:
                    </label>
                    <input class="form-control" style="width: 93% !important" type="text" name="firstname" id="firstname" placeholder="To (Port name)">
                </div>
            </div>
            <div class="col-md-2 pl-0">
             <div class="form-group">
                <label class="form-control-label display-7">Date:
                </label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Date">
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="form-button-property-cruise">
    <div class="w-100 mx-auto">
        <div class="border-nut2 mx-auto">
            <button class="btn-block border-0 nen-maucam button-border-nut2 mx-auto">Search</button></div>
        </div>
    </div>
    <div class="display-tranfer">
        <div class="container border-crui">
            <div class="cruise-tranfer text-center">
                <span class="">Cruise</span>
            </div>

            <div class="row">
             <?php
             foreach($transfer_hot as $key => $transfer_hot_item){
                ?>
                <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
                  <div class="card-wrapper" id="card-wrapper1">
                    <div class="card-img">

                      <?=  $this->Html->image('/upload/cruisedrive/'.$transfer_hot_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                  </div>
                  <div class="card-box text-center px-3">
                      <div class="cruise-height-h">
                        <h4 class="mauxanh"><?php echo $transfer_hot_item->name?></h4>
                    </div>

                    <div class="height-p-twt-crui">
                        <p class="" ><?php echo h($transfer_hot_item->detail)?>.</p>

                    </div>
                    <!-- <div class="copy-fade-tour"></div> -->
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>
</div>
<div class="div-blank-white" id="fix-white"></div>
</div>


<style type="text/css">
i.fa.fa-map-marker.maucam {padding-right: 9px;font-size: 38px;}
label.form-control-label.display-7.cruise-fix-label {padding-left: 30px;}
.form-button-property-cruise{padding-bottom: 19px;}
.display-tranfer{background-color: #f5f5f5;}
.cruise-height-h{height: 129px;padding-top: 20px;}
.card-wrapper#card-wrapper1{background-color: #ffffff}
.cruise-tranfer{padding-top: 40px;padding-bottom: 20px;font-size: 25px;}
.wrapper-cruise{background-color: #fff}
.cruise-sreach-form{background-color: #ebf1f1}
.cruise-title-head{font-weight: bold;font-size: 22px;padding-left: 15px;padding-top: 10px;}
.border-nut2{border: 5px solid #ecf0f1 !important;border-radius: 9px;width: 120px;height: 55px;line-height: 40px;margin-top: -28px;}
.button-border-nut2 {font-size: 15px;font-weight: 400;border-radius: 5px;width: 111px;height: 45px;color: #ecf0f1;line-height: 40px;}
.height-p-twt-crui{height: 150px;}
.border-crui{border: 1px solid #dcdcdc;padding-bottom: 60px;}
</style>
