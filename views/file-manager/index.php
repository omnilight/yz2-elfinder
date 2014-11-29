<?php
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var \yii\web\View $this
 */
$this->title = Yii::t('admin/elfinder', 'File manager');
$this->params['breadcrumbs'][] = $this->title;
$this->params['header'] = $this->title;
?>

<?php echo \mihaildev\elfinder\ElFinder::widget([
    'controller' => '/filemanager/elfinder',
]) ?>

<?php
$css =<<<CSS
section.content > div {
    height: 100%;
}
CSS;

$js =<<<JS
(function() {
    function resize() {
        var content = $('section.content');
        content.css('height', $(window).innerHeight() - content.offset().top);
    }
    $(window).resize(resize);
    resize();
})();
JS;
$this->registerCss($css);
$this->registerJs($js);
