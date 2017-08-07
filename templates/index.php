<!DOCTYPE html>
<html>
	<head>
		<title>task2</title>
		<link href="templates/css/bootstrap.min.css" rel="stylesheet">
		<!--<link href="templates/css/style.css" rel="stylesheet">-->
		<meta charset="utf-8">
	</head>
	<body style="background: #71b3ca">
		<div class="container">

			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-4" style="font-weight: bold; text-align: center">
				</div>
			</div>
			<div class="row" style="margin-top: 10%;">
				<div class="col-md-3">
				</div>
				<div class="col-md-3" style="background: #d5ecf4; padding: 30px;">
					<label style="text-align: center;font-weight: bold;font-size: 110%">Calc</label>
					%err%
					<form name="calc" method="post" action="" >
				<input type="text" name="input" value="%out%">%mem%
				<p>
				<input type="button" value="1" onClick="document.calc.input.value+='1'">
				<input type="button" value="2" onClick="document.calc.input.value+='2'">
				<input type="button" value="3" onClick="document.calc.input.value+='3'">
				
				<button type="submit" name="calc[action]" value="+">+</button>
				<button type="submit" name="calc[action]" value="ms">ms</button>
				<p>
				<input type="button" value="4" onClick="document.calc.input.value+='4'">
				<input type="button" value="5" onClick="document.calc.input.value+='5'">
				<input type="button" value="6" onClick="document.calc.input.value+='6'">
				
				<button type="submit" name="calc[action]" value="-">-</button>
				<button type="submit" name="calc[action]" value="m+">m+</button>
				<p>
				<input type="button" value="7" onClick="document.calc.input.value+='7'">
				<input type="button" value="8" onClick="document.calc.input.value+='8'">
				<input type="button" value="9" onClick="document.calc.input.value+='9'">
				
				<button type="submit" name="calc[action]" value="*">*</button>
				<button type="submit" name="calc[action]" value="m-">m-</button>
				<p>
				<input type="button" value="0" onClick="document.calc.input.value+='0'">
				<input type="button" value="." onClick="document.calc.input.value+='.'">
				<button type="submit" name="calc[action]" value="=">=</button>
				<button type="submit" name="calc[action]" value="/">/</button>
				<button type="submit" name="calc[action]" value="mr">mr</button>
				<p>
				<button type="submit" name="calc[action]" value="%">%</button>
				<button type="submit" name="calc[action]" value="root">root</button>
				<button type="reset" value="reset">ce</button>
				<button type="submit" name="calc[action]" value="mc">mc</button>
				<p>
				<button type="submit" name="calc[action]" value="c">c</button>
				</form>
				</div>
			</div>
		</div>
 </body>
</html>