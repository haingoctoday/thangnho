<section class="content-header">
  <h1>
    Transfer
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title"><?= __('Form') ?></h3> -->
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($transferanddrive, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
           // echo $this->Form->input('destination', ['label' => 'Destination']);
            //echo $this->Form->input('pickupfrom', ['label' => 'Pick-Up From']);
           // echo $this->Form->input('dropoffto', ['label' => 'Drop-off To']);
           // echo $this->Form->input('diachi', array('label'=>false, 'type'=>'select', 'options'=>$transferdrive_view));
          ?>
          <div class="panel panel-default">

  <div class="panel-heading">Add transfers</div>
  <div class="panel-body">
  
   <div class="expandable form-group" data-count="1">
    <?php
    $datalist_drive = isset($datalist_drive) ? $datalist_drive : array('0') ;
   
    foreach($datalist_drive as $id_drive => $value_drive){

    ?>
        <div class="row">
         
          <div class="col-sm-6 nopadding">
              <div class="form-group">
                 <?php echo $this->Form->input('diachi[]', array('label'=>false, 'type'=>'select', 'options'=>$transferdrive_view ,'class'=>'','value'=>$id_drive));?>
              </div>
          </div>
         <div class="col-sm-3 nopadding">
            <div class="form-group">
                <input type="text" class="form-control" id="price" name="price[]" value="<?php echo isset($value_drive)?$value_drive:''?>" placeholder="Price">
            </div>
        </div>
        <button class="btn add-more" id="add-more" type="button">+</button>

      </div>
      <?php }?>
    </div>


<div class="clear"></div>
  
  </div>
  <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field </small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>

</div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<?php $this->start('scriptBotton'); ?>

<script type="text/javascript">
  
               $(document).ready(function() {
          $(".expandable").on("click", ".add-more", function(e) {
            e.preventDefault();
            var rmButton = '<button class="btn btn-danger remove-me" type="button">-</button>';
            var grandParent = $(this).parent().parent();
            var countVal = grandParent.data("count");
            var count = parseInt(countVal);
            if (count == 1) {
              $(this).before(rmButton);
            }
            var toBeCopied = $(this).parent().clone();
            if (count == 1) { 
                var curClass = toBeCopied.find("input").attr('class');
                toBeCopied.find("input:first").attr('class', curClass + " offset-md-3");
                toBeCopied.find("label").remove();

            }
            var add_button = $(this).detach();
            grandParent.append(toBeCopied);
            count++;
            grandParent.data("count", count);
          });
          $(".expandable").on("click", ".remove-me", function(e) {
            e.preventDefault();
            var grandParent = $(this).parent().parent();
            var countVal = grandParent.data("count");
            count = parseInt(countVal);
            count--;
            grandParent.data("count", count);

            var nextButton = $(this).next("button");
            var prevButton = $(this).parent().prev().find("button");

            //When we click remove on the last entry:
            if (/add-more/.test(nextButton.attr("class")) && /remove-me/.test(prevButton.attr("class"))) {
              var add_button = nextButton.detach();
              $(this).parent().prev().find(".remove-me").after(add_button);
            }
            //When we click on the first entry:
            if ($(this).parent().children().is("label")) {
                secondEntry=$(this).parent().next().find("input");
                secondEntry.removeClass("offset-md-3");
                secondEntry.before($(this).parent().find("label"));
            }
            if (count == 1) {
              $(this).parent().prev().find(".remove-me").remove();
              $(this).parent().next().find(".remove-me").remove();
            }
            $(this).parent().remove();
          });


        });

   </script>
   <?php $this->end(); ?>