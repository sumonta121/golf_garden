<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf Garden</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_resorce/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_resorce/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_resorce/css/bootstrap-datetimepicker.min.css')}}">
	</head>
  <body>
<div align="center">
<table border="0">
                <tr>
                    <td>
                        <table border="0" width="100%" >
                            <tr>                               
                                <td align="center" style="border-bottom:2px #333 solid;"><span>
                                    <img src="http://gcms.issit.org/public/website/images/logo.png" height="50" class="" alt=""></span><br>     
									<span style="font-weight:300">Golf Garden</span>  <br>
									<span style="font-weight:100">Army Golf Club</span>  <br>
									<span style="">Money Receipt</span>                              
                                </td>                              
                            </tr>                          
                        </table>

                        <table width="100%">
                            <tr>
                                <td width="50%">Date</th>
                                <td width="50%"> {{ $print_payslip->book_date }} </td>                               
                            </tr>
							<tr>
                                <td width="50%">Booking No</th>
                                <td width="50%"> <?php $dbValue = $print_payslip->book_no; echo $dbValue = str_pad($dbValue, 7, "0", STR_PAD_LEFT); ?> </td>                               
                            </tr>
							<tr>
                                <td width="50%">Member ID</th>
                                <td width="50%">{{ $print_payslip->member_id }}</td>                               
                            </tr>
							<tr>
                                <td width="50%">Member Name</th>
                                <td width="50%">{{ $print_payslip->member_name }}</td>                               
                            </tr>
							<tr>
                                <td width="50%">Booking Date</th>
                                <td width="50%">{{ $print_payslip->date_of_reserv }}</td>                               
                            </tr>
							<tr>
                                <td width="50%">Time</th>
                                <td width="50%">{{ $print_payslip->shift }}</td>                               
                            </tr>
							<tr>
                                <td width="50%">Purpose</th>
                                <td width="50%">{{ $print_payslip->purpose }}</td>                               
                            </tr>						
							 <?php 
								 $i = 1;
								 $totalAmount = 0;
								 foreach($expense_detail as $v){
								 $auto_inc = $i++;		
								 if($v->table_name != 'column_1'){									
								 																 
							 ?>
							 <tr>
                                <td width="50%"><?php  echo $v->expense_name; ?></th>
                                <td width="50%"><?php  $variable = 'column_'.$auto_inc; echo $print_payslip->$variable; ?></td>                               
                             </tr>	
								
							 <?php } }  ?>
								 
								 
							<tr>
                                <td width="50%">Grand Total :</th>
                                <td width="50%">{{ $print_payslip->total }}</td>                               
                            </tr>
							
							<tr>
                                <td width="50%">Payment By :</th>
                                <td width="50%">{{ $print_payslip->payment_type }}</td>                               
                            </tr>
							
							<script>
							<?php
						   $number = $print_payslip->total;
						   $no = round($number);
						   $point = round($number - $no, 2) * 100;
						   $hundred = null;
						   $digits_1 = strlen($no);
						   $i = 0;
						   $str = array();
						   $words = array('0' => '', '1' => 'One', '2' => 'Two',
							'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
							'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
							'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
							'13' => 'Thirteen', '14' => 'Fourteen',
							'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
							'18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
							'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
							'60' => 'Sixty', '70' => 'Seventy',
							'80' => 'Eighty', '90' => 'Ninety');
						   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
						   while ($i < $digits_1) {
							 $divider = ($i == 2) ? 10 : 100;
							 $number = floor($no % $divider);
							 $no = floor($no / $divider);
							 $i += ($divider == 10) ? 1 : 2;
							 if ($number) {
								$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
								$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
								$str [] = ($number < 21) ? $words[$number] .
									" " . $digits[$counter] . $plural . " " . $hundred
									:
									$words[floor($number / 10) * 10]
									. " " . $words[$number % 10] . " "
									. $digits[$counter] . $plural . " " . $hundred;
							 } else $str[] = null;
						  }
						  $str = array_reverse($str);
						  $result = implode('', $str);
						  $points = ($point) ?
							"." . $words[$point / 10] . " " . 
								  $words[$point = $point % 10] : '';
								  
								  if(!empty($points)){
								  $poisa = "Paise";
								  }
						   $inword =  $result . "Taka  " . $points;
						 ?> 
							
							</script>
							
							<tr>
                                <td width="50%">In Word :</th>
                                <td width="50%"><?php echo $inword; ?></td>                               
                            </tr>
							
                            <tr>
                              <td>                            
                              <td>&nbsp;</td>
                            </tr>        
                        </table>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Powered  By : ISSIT Ltd,<a href="http://www.issit.org/">http://www.issit.org/</a>                       
                    </td>
                </tr>
            </table>

</div>
 
 
<script language="javascript" type="text/javascript">
 window.print();
</script>
 
<script type="text/javascript" src="{{ asset('admin_resorce/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin_resorce/js/app.js')}}"></script>
  </body>
</html>

