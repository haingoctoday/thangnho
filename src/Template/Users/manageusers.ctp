  <style>
.content-agent-detail{
    padding-top: 15px;
    padding-bottom: 20px;
}
.card-col-user{
    background-color: #fff;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 10px;
}
.padding-card{
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>

<div class="container" style="background-color: #ebf1f1;margin-top: 4px;">

    <div class="row" style="background-color: #fff">
        <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">Existing Users</h3>       
    </div>

<div class="content-agent-detail">
    <div class="container">
    <div class="row" style="padding-bottom: 6px;">

        <?php 
        foreach ($user_view_data as $key => $valueuser_view_data) {
       
         ?>
        <div class="col-md-4 padding-card">
            <div class="card-col-user">
                <span><?php echo $user_view[$valueuser_view_data] ?></span>
            </div>
        </div>
        <?php 
            }
         ?>                         
    </div>
    </div>
</div>



</div>
</div>
