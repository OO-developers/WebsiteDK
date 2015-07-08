<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'My Clickbooks - Contact Us';

$this->registerJsFile(
  Url::to("@web/frontend/assets/js/ebogholderen.index.js?v=1.3"), [
    "depends" => "\\frontend\\assets\\AppAsset"
  ]);

$this->params["top_banner"] = '<img src="' . Url::to("@web/assets/images/original-us_office.jpg?v=1.0", true) . '" class="document-img img-responsive" />
<div class="blue-contact-panel">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2 left">
        <strong>ADDRESSES:</strong><br/>
    </div><br class="address_separator"/>
    <div class="col-lg-3 left">
        ClickBooks, LLC<br/>
        500 Edgewater Drive<br/>
        Wakefield MA 01880<br/>
        USA
        <br/><br/>
        ' . Yii::$app->params['contactPhone'] . '<br/>
    </div>
    <div class="col-lg-3 left">
        ClickBooks, LLC<br/>
        Marstalsgade 7<br/>
        DK-2100 Copenhagen<br/>
        DENMARK
        <br/><br/>
        (+45) 9111 1117<br/>
    </div>
</div>
';

//facebook tracker
$this->params["html_head_appendix"] = file_get_contents( dirname(__FILE__) . '/../../config/facebook-tracking.php');
?>
<section class="contact-us" id="contact-us">
<br class="clear"/>
	<div class="container">
      	<div class="section-header">
        	<h2 class="subpage dark-text">Contact Us</h2>
          <h6>
            No question is too small - We would love to hear from you
          </h6>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => ['site/contact'], 'options' => ['class' => 'ajax_form' ] ]); ?>
                	<div class="col-lg-12"><?= $form->field($model, 'name') ?></div>
                    <div class="col-lg-12"><?= $form->field($model, 'email') ?></div>
                    <div class="col-lg-12"><?= $form->field($model, 'phone') ?></div>
                    <div class="col-lg-12"><?= $form->field($model, 'message')->textArea(['rows' => 6]) ?></div>


                    <div class="form-group right">
                    	<br/>
                        <?= Html::submitButton('Submit Form', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                    <br class="clear"/>
                    <span id="notice"></span>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="contact-contact col-lg-5 left">
                <big class="big">Looking for support?</big><br/>
                <br/>
                Do you have any problems using ClickBooks, please don't
                hesitate to contact us. Our support teams are standing by
                to help you.
                <br/><br/>
                <strong>CUSTOMER SERVICE:</strong><br/>
                contact@myclickbooks.com<br/>
                <br/>
                <strong>APP & TECHNICAL SUPPORT:</strong><br/>
                support@myclickbooks.com<br/>
                <br/>
                <strong>BILLING:</strong><br/>
                billing@myclickbooks.com<br/>
                <br/>
            </div>
        </div>
    </div>
</section>