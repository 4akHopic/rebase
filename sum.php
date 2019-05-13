<?php
	class ArraySumHelper
	{
    private $arr;
		/*
			Находит сумму первых
			степеней элементов массива:
		*/
		public function getAvg1($arr)
		{
      return $this->calcSqrt($this->getSum($arr,1), 1);
		}

		/*
			Находит сумму вторых степеней
			элементов массива и извлекает
			из нее квадратный корень:
		*/
		public function getAvg2($arr)
		{
      return $this->calcSqrt($this->getSum($arr,2), 1/2);
		}

		/*
			Находит сумму третьих степеней
			элементов массива и извлекает
			из нее кубический корень:
		*/
		public function getAvg3($arr)
		{
      return $this->calcSqrt($this->getSum($arr,3), 1/3);
		}

		/*
			Находит сумму четвертых степеней
			элементов массива и извлекает
			из нее корень четвертой степени:
		*/
		public function getAvg4($arr)
		{
      // $sum = $this->getSum($arr,4);
      // calcSqrt($this->getSum($arr,4), 1/4);
      return $this->calcSqrt($this->getSum($arr,4), 1/4);
		}

		/*
			Вспомогательный метод, который параметром
			принимает массив и степень и возвращает
			сумму степеней элементов массива:
		*/
		private function getSum($arr, $power)
		{
      $sum = 0;
      foreach ($arr as $key) {
        $sum +=pow($key,$power);
      }
      return $sum;
		}

		/*
			Вспомогательный метод, который параметром
			принимает целое
				число и степень и возвращает
			корень заданной степени из числа:
		*/
		private function calcSqrt($num, $power)
		{
      return pow($num, $power);
		}
	}

echo (new ArraySumHelper)->getAvg3([3,2,5,3,7]);
