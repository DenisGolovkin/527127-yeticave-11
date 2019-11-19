<?php
/**
  ф-ция форматирования суммы в карточке товара
*/
function summ_round($summ) {
  $formated_summ = ceil($summ);
  if ($formated_summ >= 1000) {
      $formated_summ = number_format($formated_summ, 0, '.',' ');
  }
  return $formated_summ . '<b class="rub"> р</b>';
}

/**
  ф-ция подсчёта времени до истечения лота
*/
function get_range_date($end_date) {
  $cur_time = time(); // current timestamp
  $ts_end = strtotime($end_date); // end_date string to timestamp
  $end_time = $ts_end - $cur_time; // diff between end & current timestamp in seconds
  $end_hour = floor($end_time/3600); // hours left to the end_date
  $end_hour = str_pad($end_hour, 2, "0", STR_PAD_LEFT); // add extra null to the left for hours count less than 10
  $end_time_array[0] = $end_hour;
  $end_min = floor($end_time%3600/60); // add minutes to theleft hours
  $end_min = str_pad($end_min, 2, "0", STR_PAD_LEFT);
  $end_time_array[1] = $end_min;
  return $end_time_array; // return an array ['end_hour','end_min']
}
