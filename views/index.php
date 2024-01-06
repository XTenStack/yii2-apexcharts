<?php
/**
 * @copyright Copyright (c) 2023
 * @author Travis Saron <admin@xten.au>
 * @package yii2-apexcharts
 */

/** @var $this \yii\web\View */
/** @var $id string */
/** @var $chartOptions string */
/** @var $series string */
/** @var $type string */
/** @var $width string */
/** @var $height string */
/** @var $timeout integer */

?>

<div id="<?= json_decode($id) ?>" class="apexcharts-container">
    <widget-apexcharts :width="width" :height="height" :type="type" :chart-options="chartOptions" :series="series"></widget-apexcharts>
</div>

<?php

$this->registerJs(<<<JS

setTimeout(function(e) {
  new ApexCharts({
  el: '#' + $id,
  data: function() {
      return {
          chartOptions: $chartOptions,
          series: $series,
          type: $type,
          width: $width,
          height: $height
      }
  }
});
}, $timeout);


JS
);

