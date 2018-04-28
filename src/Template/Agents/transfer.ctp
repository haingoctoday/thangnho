<div class="wrapper-tranfer">
    <div class="transfer-sreach-form">
        <h4 class="transfer-title-head">TRANFERS SEARCH</h4>
        <div class="input-search-tranfer">
            <div class="container">
                <div class="col-md-6 mx-auto pt-4 pb-5">
                    <span class="tranfer-span-des">Destination</span>
                    <div class="form-group">
                        <div class="input-group">
                            <i class="fa fa-map-marker maucam" aria-hidden="true"></i>
                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Destination">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-button-property-tranfer">
        <div class="w-100 mx-auto">
            <div class="border-nut1 mx-auto">
                <button class="btn-block border-0 nen-maucam button-border-nut1 mx-auto">Check Availability</button></div>
            </div>
        </div>
        <div class="display-tranfer">
            <div class="container border-transfer">
                <div class="title-tranfer text-center">
                    <span class="">Transfer</span>
                </div>

                <div class="row">
                 <?php
                 foreach($transfer_hot as $key => $transfer_hot_item){
                    ?>
                    <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
                      <div class="card-wrapper" id="card-wrapper1">
                        <div class="card-img">

                          <?=  $this->Html->image('/upload/transferdrive/'.$transfer_hot_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                      </div>
                      <div class="card-box text-center px-3">
                          <div class="tranfer-height-h">
                            <h4 class="mauxanh"><?php echo $transfer_hot_item->name?></h4>
                        </div>

                        <div class="height-p-twt-tran">
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
.tranfer-height-h{height: 129px;padding-top: 20px;}
.card-wrapper#card-wrapper1{background-color: #ffffff}
.title-tranfer{padding-top: 40px;padding-bottom: 20px;font-size: 25px;}
.display-tranfer{background-color: #f5f5f5;}
.form-button-property-tranfer{padding-bottom: 19px;}
i.fa.fa-map-marker.maucam {padding-right: 9px;font-size: 35px;line-height: 37px;}
.tranfer-span-des{font-size: 22px;padding-left: 33px;padding-bottom: 9px;}
.transfer-title-head{font-weight: bold;font-size: 22px;padding-left: 15px;padding-top: 10px;}
.transfer-sreach-form{background-color: #ebf1f1}
.wrapper-tranfer{background-color: #fff}
.border-nut1{border: 5px solid #ebf1f1 !important;border-radius: 9px;width: 170px;height: 55px;line-height: 40px;margin-top: -28px;}
.button-border-nut1{font-size: 15px;font-weight: 400;border-radius: 5px;width: 160px;height: 45px;color: #ebf1f1;line-height: 40px;}
.form-control-transfer{display: block;width: 100%;font-size: 1rem;line-height: 1.5;color: #495057;background-color: #fff;background-image: none;background-clip: padding-box;border: 1px solid #ced4da;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.border-transfer{border: 1px solid #dcdcdc;padding-bottom: 60px;}
.height-p-twt-tran{height: 150px;}
</style>
