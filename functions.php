<?php
/*
  ф-ция форматирования суммы в карточке товара
*/
function summ_round($summ) {
  $formated_summ = ceil($summ);
  if ($formated_summ >= 1000) {
      $formated_summ = number_format($formated_summ, 0, '.',' ');
  }
  return $formated_summ . '<b class="rub"> р</b>';
}
