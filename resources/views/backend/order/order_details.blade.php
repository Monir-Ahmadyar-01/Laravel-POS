
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <style type="text/css" media="screen">
        .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}

    </style>
</head>
<body>
    


<div class="container" dir="rtl">
    <div class="row" >
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>بل فروش</h2><h3 class="pull-left">شماره مسلسل فروش # {{$order->id}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>مشتری :</strong><br>
    					{{uppercase($order->customer->name)}}<br>
    					{{$order->customer->number}}
    				</address>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>نوعیت پرداخت:</strong><br>
    					{{$order->payment_method}}<br>
    					{{$order->number}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>تاریخ فروش :</strong><br>
    					{{$order->created_at->format('l jS \\of F Y h:i:sa')}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>لیست فروش</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>محصول</strong></td>
        							<td class="text-center"><strong>قیمت</strong></td>
        							<td class="text-center"><strong>تعداد</strong></td>
        							<td class="text-right"><strong>مجموع</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                @foreach ($order->products as $pp)
                                    
                                
    							<tr>
    								<td>{{$pp->name}}</td>
    								<td class="text-center">AFN {{$pp->price}}</td>
    								<td class="text-center">{{$pp->pivot->quantity}}</td>
    								<td class="text-right">AFN {{$pp->price * $pp->pivot->quantity}}</td>
    							</tr>

                                @endforeach
                                
    			            
    							@if (isset($order->discount))
                                     <tr>
                                        
                                         <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>تخفیف</strong></td>
                                        <td class="thick-line text-right">AFN {{$order->discount}}</td>
                                       
                                    </tr>
                                @endif
                                     <tr>
                                        <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>مجموع نهایی</strong></td>
                                     <td class="no-line text-right">AFN {{$order->total_amount}}</td>
                                       
                                    </tr>

                                <tr>
                                  
                                    <td><a href="" id="print" class="btn btn-info">چاپ بل</a></td>
                                 </tr>
    							      
    						</tbody>

    					</table>
                        
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<script>
    $(document).ready(function(){
       $('#print').click(function(){
        $(this).hide();
        event.preventDefault();
            window.print();
            $(this).show();
       });
    });
</script>
</body>
</html>