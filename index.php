<?php

include_once __DIR__.'/lib/config.php';
include_once ROOT_DIR.'/lib/functions.php';

session_start();
$calc = new Calc();
$result = '';

if(!empty($_POST['calc']))
{
	$post = $_POST['calc'];
	if($post['action'] == 'c')
	{
		$calc->clearData();
	}
	else
	{
		$input = $_POST['input'];
		if($calc->checkInput($input) || ($input == 0))
		{
			$calc->setVal1($input);
			if(!isset($_SESSION['calc']['input']))
			{
				$_SESSION['calc']['input'] = $calc->getVal1();
			}
			if(!empty($_SESSION['calc']['input']) || ($_SESSION['calc']['input'] == 0))
			{
				$val2=$_SESSION['calc']['input'];
				$calc->setVal2($val2);
			}
		}

		$calc->setAction($post['action']);
		if(isset($_SESSION['calc']['action']))
		{
			$sessAct = $_SESSION['calc']['action'];
			$calc->setSessAction($sessAct);
		}
		if(!isset($_SESSION['calc']['action']) && (!empty($input)))
		{
			if($calc->checkInput($input) || ($input == 0))
			{
				$_SESSION['calc']['action'] = $calc->getAction();
			}
			else
			{
				$calc->setErr('Invalid input');
			}
		}
		switch ($calc->getAction())
		{
			case '=':
					if((!empty($calc->getVal1()) || $calc->getVal1() == '0') && (!empty($calc->getVal2()) || $calc->getVal2() == '0'))
				{
	
					switch ($calc->getSessAction())
					{
						case '+':
						$result = $calc->plus($calc->getVal2(),$calc->getVal1());
							
						$calc->clearData();
						break;

						case '-':
						$result = $calc->minus($calc->getVal2(),$calc->getVal1());
						$calc->clearData();
						break;

						case '*':
						$result = $calc->mult($calc->getVal2(),$calc->getVal1());
						$calc->clearData();
						break;

						case '/':
						$result = $calc->division($calc->getVal2(),$calc->getVal1());
						$calc->clearData();
						break;
					}
				}
				break;

			case 'm+':
				$calc->memPLus($calc->getVal1());
				$result = $calc->getVal1();
				break;
			case 'm-':
				$calc->memMinus($calc->getVal1());
				$result = $calc->getVal1();
				break;
			case 'ms':
				$calc->memSave($calc->getVal1());
				$result = $calc->getVal1();
				$_SESSION['calc']['input'] = $calc->getVal1();
				break;
			case 'mr':
				$result = $calc->memRead();
				break;
			case 'mc':
				$calc->memClear();
				$result = $calc->getVal1();
				break;
			case 'root':
				$result = $calc->squareRoot($calc->getVal1());
				$calc->clearData();
				break;
			case '%':
				$result = $calc->percent($calc->getVal1(), $calc->getVal2());
				break;
		}
	}

}

$calc->checkMem();
$calc->addToRender($result);
display($calc->getOutput());
