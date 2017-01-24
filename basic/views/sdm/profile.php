<?php
use yii\helpers\Html;

$this->title = 'SIIN - Profile';

?>
<div class="row">
  <div class="container">
    <div class="col-md-3">
    <center>
      <?php echo Html::img('@web/images/profile.png', ['width'=>'200', 'height'=>'200']) ?>
    </center>
    </div>
    <div class="col-md-9">
      <h3>BANTI AGUSTINA MANALU</h3>
      <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp; <strong>BPPT &nbsp; BIOTEKNOLOGI</strong></p>
      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
    </div>
  </div>
</div>
<br />
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#paten">Paten</a></li>
        <li><a data-toggle="tab" href="#paper">Paper</a></li>
        <li><a data-toggle="tab" href="#tab1">Tab 1</a></li>
        <li><a data-toggle="tab" href="#tab2">Tab 2</a></li>
      </ul>

      <div class="tab-content">
        <div id="paten" class="tab-pane fade in active">
          <br />
          <div class="col-md-2">
            <br />
            <center>
              <?php echo Html::img('@web/images/paper.png', ['width'=>'100', 'height'=>'100']) ?>
            </center>
          </div>
          <div class="col-md-10">
            <h3>Transgenerational Epigenetics, or the Spectral History of the Flesh</h3>
            <p>
              <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Bookmark |
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 98301 view |
              <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> more
            </p>
          </div>
        </div>
        <div id="paper" class="tab-pane fade">
          <br />
          <div class="col-md-2">
            <br />
            <center>
              <?php echo Html::img('@web/images/paper.png', ['width'=>'100', 'height'=>'100']) ?>
            </center>
          </div>
          <div class="col-md-10">
            <h3>Outliers, Freaks, and Cheats: Constituting Normality in the Age of Enhancement</h3>
            <p>
              <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Bookmark |
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 4218 view |
              <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> more
            </p>
          </div>
        </div>
        <div id="tab1" class="tab-pane fade">
          <h3>Tab 1</h3>
          <p>Some content in Tab 1.</p>
        </div>
        <div id="tab2" class="tab-pane fade">
          <h3>Tab 2</h3>
          <p>Some content in Tab 2.</p>
        </div>
      </div>
    </div>
  </div>
</div>
