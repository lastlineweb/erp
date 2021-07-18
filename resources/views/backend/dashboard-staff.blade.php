@extends('layouts.app')

@section('content')

@if (\Session::has('paypal_success'))
  <div class="alert alert-success text-center">
	<b>{{ \Session::get('paypal_success') }}</b>
  </div>
@endif
<br>
<!-- Cart Box -->
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-3">
	 <div class="cart-box-purpel">
		<h4 class="widget-label">
		{{ _lang('Current Day Income') }}
		<h4>
		<canvas id="income-gauge" height="100" width="160"></canvas>
		<div id="income-preview">{{ currency() }} <span id='current-income-preview'>{{ $current_day_income }}</span></div>
	 </div>
  </div>
  <div class="col-md-6 col-sm-12 col-lg-3">
	 <div class="cart-box-red">
		<h4 class="widget-label">
		{{ _lang('Current Day Expense') }}
		<h4>
		<canvas id="expense-gauge" height="100" width="160"></canvas>
		<div id="expense-preview">{{ currency() }} <span id='current-expense-preview'>{{ $current_day_expense }}</span></div>
	 </div>
  </div>
  <div class="col-md-6 col-sm-12 col-lg-3">
	 <div class="cart-box-purpel">
		<h4 class="widget-label">
		{{ _lang('Monthly Income') }}
		<h4>
		<canvas id="monthly-income-gauge" height="100" width="160"></canvas>
		<div id="monthly-income-preview">{{ currency() }} <span id='current-month-income-preview'>{{ $current_month_income }}</span></div>
	 </div>
  </div>
  <div class="col-md-6 col-sm-12 col-lg-3">
	 <div class="cart-box-red">
		<h4 class="widget-label">
		{{ _lang('Monthly Expense') }}
		<h4>
		<canvas id="monthly-expense-gauge" height="100" width="160"></canvas>
		<div id="monthly-expense-preview">{{ currency() }} <span id='current-month-expense-preview'>{{ $current_month_expense }}</span></div>
	 </div>
  </div>
</div>
<!-- End Cart-Box -->

@php $currency = currency() @endphp

<div class="row">
  <div class="col-md-12 admin-panel">
	 <div class="panel panel-default dashboard-panel">
		<div class="panel-heading">{{ _lang('Income VS Expense')." - ".date('Y') }}</div>
		
		<div class="panel-body">
		   <div id="yearly_income_expense" style="width:100%; height:300px;"></div>	
		</div>
	 </div>
  </div>
</div>


<div class="row">
  <!-- Panel 1 -->
  <div class="col-md-6 col-lg-6 col-sm-12 admin-panel">
	 <div class="panel panel-default dashboard-panel">
		<div class="panel-heading">{{ _lang('Last 5 Income') }}</div>
		
		<div class="panel-body">
		    <div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					  <tr>
						<th>{{ _lang('Date') }}</th>
						<th>{{ _lang('Type') }}</th>
						<th class="text-right">{{ _lang('Amount') }}</th>
						<th>{{ _lang('Details') }}</th>
					  </tr>
					</thead>
					<tbody>
					  
					  @foreach($latest_income as $transaction)
					  <tr id="row_{{ $transaction->id }}">
						<td class='trans_date'>{{ date('d M, Y',strtotime($transaction->trans_date)) }}</td>
						<td class='chart_id'>{{ isset($transaction->income_type->name) ? $transaction->income_type->name : _lang('Transfer') }}</td>
						<td class='amount text-right'>{{ $currency." ".decimalPlace($transaction->amount) }}</td>
						<td>
							<a href="{{action('IncomeController@show', $transaction['id'])}}" data-title="{{ _lang('View Income') }}" class="btn btn-info btn-xs ajax-modal">{{ _lang('View') }}</a>
						</td>
					  </tr>
					  @endforeach
					</tbody>
				</table>
			</div>
		</div>
	 </div>
  </div>
  <!-- End Panel 1 -->
  <!-- Panel 2 -->
  <div class="col-md-6 col-lg-6 col-sm-12 admin-panel">
	 <div class="panel panel-default dashboard-panel">
		<div class="panel-heading">{{ _lang('Last 5 Expense') }}</div>
		
		<div class="panel-body">
		   <div class="table-responsive">
			   <table class="table table-bordered">
					<thead>
					  <tr>
						<th>{{ _lang('Date') }}</th>
						<th>{{ _lang('Type') }}</th>
						<th class="text-right">{{ _lang('Amount') }}</th>
						<th>{{ _lang('Details') }}</th>
					  </tr>
					</thead>
					<tbody>
					  
					  @foreach($latest_expense as $expense)
					  <tr id="row_{{ $expense->id }}">
						<td class='trans_date'>{{ date('d M, Y',strtotime($expense->trans_date)) }}</td>
						<td class='chart_id'>{{ isset($expense->expense_type->name) ? $expense->expense_type->name : _lang('Transfer') }}</td>
						<td class='amount text-right'>{{ $currency." ".decimalPlace($expense->amount) }}</td>
						<td>
							<a href="{{action('ExpenseController@show', $expense['id'])}}" data-title="{{ _lang('View Expense') }}" class="btn btn-info btn-xs ajax-modal">{{ _lang('View') }}</a>
						</td>
					  </tr>
					  @endforeach
					</tbody>
				</table>
			</div>
		</div>
	 </div>
  </div>
  <!-- End Panel 2 -->
  <!-- Panel 3 -->
  <div class="col-md-6">
	 <div class="panel panel-default dashboard-panel">
		<div class="panel-heading">{{ _lang('Income vs Expense')." - ".date('M, Y') }}</div>
		
		<div class="panel-body">
		   <div id="dn_income_expense" style="width:100%; height:300px;"></div>
		</div>
	 </div>
  </div>
  <!-- End Panel 3 -->
  <!-- Panel 4 -->
  <div class="col-md-6">
	 <div class="panel panel-default dashboard-panel">
		<div class="panel-heading">{{ _lang('Financial Balance Status') }}</div>
		
		<div class="panel-body">
		  <div class="table-responsive">
			<table class="table table-bordered">
				<thead>
				  <tr>
					<th>{{ _lang('A/C') }}</th>
					<th>{{ _lang('A/C Number') }}</th>
					<th class="text-right">{{ _lang('Balance') }}</th>
				  </tr>
				</thead>
				<tbody>
				  @foreach(get_financial_balance() as $account)
				  <tr id="row_{{ $account->id }}">
					<td class='account_title'>{{ $account->account_title }}</td>
					<td class='account_number'>{{ $account->account_number }}</td>
					<td class='opening_balance text-right'>{{ $currency." ".decimalPlace($account->balance) }}</td>
				  </tr>
				  @endforeach
				</tbody>
			  </table>
            </div>
		</div>
	 </div>
  </div>
  <!-- End Panel 4 -->
</div>
@endsection

@section('js-script')
<script type="text/javascript">
  $(document).ready(function() {
	  //Current day/month Income
	  var opts = {
	  angle: 0, // The span of the gauge arc
	  lineWidth: 0.44, // The line thickness
	  radiusScale: 0.8, // Relative radius
	  pointer: {
		length: 0.6, // // Relative to gauge radius
		strokeWidth: 0.035, // The thickness
		color: '#000000' // Fill color
	  },
	  limitMax: false,     // If false, max value increases automatically if value > maxValue
	  limitMin: false,     // If true, the min value of the gauge will be fixed
	  colorStart: '#2ECC71',   // Colors
	  colorStop: '#27AE60',    // just experiment with them
	  strokeColor: '#DEDEDE',  // to see which ones work best for you
	  generateGradient: true,
	  highDpiSupport: true,     // High resolution support
	  
	};
	
	var target = document.getElementById('income-gauge'); // your canvas element
	var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
	gauge.maxValue = {{ $current_day_income*1.5 }}; // set max gauge value
	gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
	gauge.animationSpeed = 100; // set animation speed (32 is default value)
	gauge.set({{ $current_day_income }}); // set actual value
	gauge.setTextField(document.getElementById("current-income-preview"));
	
	
	var target = document.getElementById('monthly-income-gauge'); // your canvas element
	var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
	gauge.maxValue = {{ $current_month_income*1.5 }}; // set max gauge value
	gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
	gauge.animationSpeed = 100; // set animation speed (32 is default value)
	gauge.set({{ $current_month_income }}); // set actual value
	gauge.setTextField(document.getElementById("current-month-income-preview"));
	
	
	//Current day/month expense
	var opts = {
		angle: 0, // The span of the gauge arc
		lineWidth: 0.44, // The line thickness
		radiusScale: 0.8, // Relative radius
		pointer: {
			length: 0.6, // // Relative to gauge radius
			strokeWidth: 0.035, // The thickness
			color: '#000000' // Fill color
		},
		limitMax: 'false', // If true, the pointer will not go past the end of the gauge
		colorStart: '#f39c12', // Colors
		colorStop: '#f39c12', // just experiment with them
		strokeColor: '#E0E0E0', // to see which ones work best for you
		generateGradient: true
	};
	var target = document.getElementById('expense-gauge'); // your canvas element
	var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
	gauge.maxValue = {{ $current_day_expense*1.5 }}; // set max gauge value
	gauge.animationSpeed = 100; // set animation speed (32 is default value)
	gauge.set({{ $current_day_expense }}); // set actual value	
	gauge.setTextField(document.getElementById("current-expense-preview"));

	
	var target = document.getElementById('monthly-expense-gauge'); // your canvas element
	var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
	gauge.maxValue = {{ $current_month_expense*1.5 }}; // set max gauge value
	gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
	gauge.animationSpeed = 100; // set animation speed (32 is default value)
	gauge.set({{ $current_month_expense }}); // set actual value
	gauge.setTextField(document.getElementById("current-month-expense-preview"));
	
	//Yearly Income
	var link = _url + "/dashboard/json_month_wise_income_expense/";
    $.ajax({
        url: link, 
		success: function (data) {
			//console.log(data);
			var json = JSON.parse(data);
            var cashflow = echarts.init(document.getElementById('yearly_income_expense'));

            // specify chart configuration item and data
            var option = {
                /* title : {
                 text: 'Income And Expense'
                 },*/
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['{{ _lang('Income') }}', '{{ _lang('Expense') }}']
                },
                toolbox: {
                    show: true,
                    feature: {
                        mark: {show: true},
                        dataView: {
                            show: true,
                            readOnly: false,
                            title: 'Data View',
                            lang: ['Data View', 'Cancel', 'Reset']
                        },
                        magicType: {
                            show: true, title: {
                                line: 'Line',
                                bar: 'Bar',
                                stack: 'Stack',
                                tiled: 'Tiled',
                                force: 'Force',
                                chord: 'Chord',
                                pie: 'Pie',
                                funnel: 'Funnel'
                            }, type: ['line', 'bar', 'stack', 'tiled']
                        },
                        restore: {show: true, title: 'Reset'},
                        saveAsImage: {
                            show: true, title: 'Save as Image',
                            type: 'png',
                            lang: ['Click to Save']
                        }
                    }

                },
                calculable: true,
                xAxis: [
                    {
                        type: 'category',
                        boundaryGap: false,
                        data: json['Months']
                    }
                ],
                yAxis: [
                    {
                        type: 'value'
                    }
                ],
                series: [
                    {
                        name: '{{ _lang('Income') }}',
                        type: 'line',
                        stack: 'stack',
                        color: [
                            '#2196f3'
                        ],
                        data: json['Income']
                    },
                    {
                        name: '{{ _lang('Expense') }}',
                        type: 'line',
                        stack: 'stack',
                        color: [
                            '#eb3c00'
                        ],
                        data: json['Expense']
                    }
                ]
            };

            // use configuration item and data specified to show chart
            cashflow.setOption(option);

        }
    });
	
	//Income Vs Expense Donut Chart
    var link2 = _url + "/dashboard/json_income_vs_expense/";
    $.ajax({
        url: link2,
		success: function (data2) {
			//console.log(data2);
            var json2 = JSON.parse(data2);
            var dn_income_expense = echarts.init(document.getElementById('dn_income_expense'));
            var option2 = {
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['{{ _lang('Income') }}', '{{ _lang('Expense') }}']
                },

                calculable: true,
                series: [
                    {
						name: '{{ _lang('Income vs Expense') }}',
                        type: 'pie',
                        radius: ['50%', '70%'],
                        color: ['#2196f3', '#eb3c00'],
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                },
                                labelLine: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: true,
                                    position: 'center',
                                    textStyle: {
                                        fontSize: '24',
                                        fontWeight: 'bold'
                                    }
                                }
                            }
                        },
                        data: [
							{value: json2['Income'], name: '{{ _lang('Income') }}'},
                            {value: json2['Expense'], name: '{{ _lang('Expense') }}'},
                        ]
                    }
                ]
            };


            dn_income_expense.setOption(option2);
        }
    });
	
	
  });
</script>
@endsection
