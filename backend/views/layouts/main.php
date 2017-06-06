<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 container-left">
            <div class="me_1">
                <p>YÊU THÍCH</p>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="<?php echo Yii::$app->homeUrl.'/product' ?>">Thông tin sản phẩm</a></li>
                    <li role="presentation"><a href="#">Tin nhắn</a></li>
                    <li role="presentation"><a href="#">Sự kiện</a></li>
                    <li role="presentation"><a href="#">Cửa hàng</a></li>
                    <li role="presentation"><a href="#">Đã lưu</a></li>
                </ul>
            </div>
            <div class="me_1">
                <p>NHÓM</p>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="#">CNTT2</a></li>
                    <li role="presentation"><a href="#">Để thi UTC</a></li>
                    <li role="presentation"><a href="#">Lập trình php</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 container-right">
            <?= $content ?>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
