@extends('pdf/page')

@section('body')

<table style="width:100%;" border="0">
      <tbody>

      	<tr >
          <td colspan="2" style="text-align:left;">
          	<h2>Invoice </h2>
          </td>
          <td colspan="2" style="text-align:right;">
          	<h2>Order # 2342342</h2>
          </td>
        </tr>
        <tr >
        	<td class="bb" colspan="4"></td>
        </tr>
        <tr >
        	<td  colspan="4" style="height:10px;"></td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	<strong>Billed To: </strong>
          </td>
          <td colspan="2" style="text-align:right;">
          	<strong>Bakery</strong>
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
			customer
          </td>
          <td colspan="2" style="text-align:right;">
          	bakery address
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	Customer address
          </td>
          <td colspan="2" style="text-align:right;">
          	bakery phone
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	customer email
          </td>
          <td colspan="2" style="text-align:right;">
			bakery email
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	customer phone 
          </td>
          <td colspan="2" style="text-align:right;">
          	bakery register
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	customer register
          </td>
          <td colspan="2" style="text-align:right;"></td>
        </tr>
        <tr>
        	<td style="height:30px;" ></td>
        	
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	<strong>Shipped to:</strong>
          </td>
          <td colspan="2" style="text-align:right;">
          	<strong>Order date:</strong>
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	order address
          </td>
          <td colspan="2" style="text-align:right;">
          	date
          </td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	order address
          </td>
          <td colspan="2" style="text-align:right;"></td>
        </tr>
        <tr >
          <td colspan="2" style="text-align:left;">
          	Status : <strong>status</strong>
          </td>
          <td colspan="2" style="text-align:right;"></td>
        </tr>                                
        <tr>
        	<td colspan="2" style="text-align:left;">
				Delivery date: date
        	</td>
        	<td colspan="2" style="text-align:right;"></td>
        </tr>
      </tbody>
    </table>
	<br>
    <table style="width:100%;" class="summary">
    	<tr>
    		<td class="title" colspan="4" style="text-align:center;">
    			<h4>Order Summary</h4>
    		</td>
    	</tr>
    	<tr >
    		<td style="text-align:left; width:35%; ">
    				<strong>Item</strong>
    		</td>
    		<td style="width:20%;">
    			<center>
    				<strong>Price</strong>
    			</center>
    		</td>
    		<td style="width:20%;">
    			<center>
    				<strong>Quantity</strong>
    			</center>
    		</td>
    		<td style="text-align:right; width:25%;">
    			<strong>Total</strong>
    		</td>
    	</tr>
		<tr><td colspan="4" class="bb"></td></tr>
    	<tr>
    		<td style="text-align:left; width:35%; ">
    			empanada
    		</td>
    		<td style="width:20%;">
    				<center> 20000,00 </center>
    		</td>
    		<td style="width:20%;">
    				<center>5</center>
    		</td>
    		<td style="text-align:right; width:25%;">
    			100000,00
    		</td>
    	</tr>
		<tr><td colspan="4" class="bb"></td></tr>
    	<tr>
    		<td style="text-align:left; width:35%; ">
    			empanada
    		</td>
    		<td style="width:20%;">
    				<center> 20000,00 </center>
    		</td>
    		<td style="width:20%;">
    				<center>5</center>
    		</td>
    		<td style="text-align:right; width:25%;">
    			100000,00
    		</td>
    	</tr>
    	<tr><td colspan="4" class="bb"></td></tr>
    	<tr>
    		<td style="text-align:left; width:35%; ">
    			empanada
    		</td>
    		<td style="width:20%;">
    				<center> 20000,00 </center>
    		</td>
    		<td style="width:20%;">
    				<center>5</center>
    		</td>
    		<td style="text-align:right; width:25%;">
    			100000,00
    		</td>
    	</tr>
    </table>

	<hr>



@endsection