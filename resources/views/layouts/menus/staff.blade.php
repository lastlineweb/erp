@php $permissions = permission_list(); @endphp

<li>
	<a href="#" aria-expanded="false"><i class="fas fa-address-book"></i>&nbsp;<span class="menu-title">{{ _lang('Contacts') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('contacts.index',$permissions))
		<li><a href="{{ url('contacts') }}">{{ _lang('Contacts List') }}</a></li>
	  @endif
	  
	  @if (in_array('contacts.create',$permissions))
		<li><a href="{{ url('contacts/create') }}">{{ _lang('Add New') }}</a></li>
	  @endif
	  
	  @if (in_array('contact_groups.index',$permissions))
		<li><a href="{{ url('contact_groups') }}">{{ _lang('Contact Group') }}</a></li>
	  @endif
	</ul>
</li>

<li>
	<a href="#" aria-expanded="false"><i class="fas fa-shopping-bag"></i>&nbsp;<span class="menu-title">{{ _lang('Products') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('products.create',$permissions))
		<li><a href="{{ url('products/create') }}">{{ _lang('Add New') }}</a></li>
	  @endif
	  
	  @if (in_array('products.index',$permissions))
		<li><a href="{{ url('products') }}">{{ _lang('Product List') }}</a></li>
	  @endif
	</ul>
</li>
<li>
	<a href="#" aria-expanded="false"><i class="fab fa-servicestack"></i>&nbsp;<span class="menu-title">{{ _lang('Service') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('services.index',$permissions))
		<li><a href="{{ url('services') }}">{{ _lang('Service List') }}</a></li>
	  @endif
	  
	  @if (in_array('services.create',$permissions))
		<li><a href="{{ url('services/create') }}">{{ _lang('Add New') }}</a></li>
	  @endif
	</ul>
</li>
<li>
	<a href="#" aria-expanded="false"><i class="fas fa-parachute-box"></i>&nbsp;<span class="menu-title">{{ _lang('Supplier') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('suppliers.index',$permissions))
		<li><a href="{{ url('suppliers') }}">{{ _lang('Supplier List') }}</a></li>
	  @endif
	  
	  @if (in_array('suppliers.create',$permissions))
		<li><a href="{{ url('suppliers/create') }}">{{ _lang('Add New') }}</a></li>
	  @endif
	</ul>
</li>
<li>
	<a href="#" aria-expanded="false"><i class="fas fa-shopping-cart"></i>&nbsp;<span class="menu-title">{{ _lang('Purchase') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('purchase_orders.index',$permissions))
		<li><a href="{{ url('purchase_orders') }}">{{ _lang('Purchase Orders') }}</a></li>
	  @endif
	  
	  @if (in_array('purchase_orders.create',$permissions))
		<li><a href="{{ url('purchase_orders/create') }}">{{ _lang('Create Purchase Order') }}</a></li>
	  @endif
	</ul>
</li>

<li>
	<a href="#" aria-expanded="false"><i class="fas fa-reply"></i>&nbsp;<span class="menu-title">{{ _lang('Return') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('purchase_returns',$permissions))
		<li><a href="{{ url('purchase_returns') }}">{{ _lang('Purchase Return') }}</a></li>
	  @endif
	  
	  @if (in_array('sales_returns',$permissions))
		<li><a href="{{ url('sales_returns') }}">{{ _lang('Sales Return') }}</a></li>
	  @endif
	</ul>
</li>

<li>
	<a href="#" aria-expanded="false"><i class="fas fa-cart-plus"></i>&nbsp;<span class="menu-title">{{ _lang('Sales') }}</span> <span class="glyphicon arrow"></span></a>
	<ul aria-expanded="false" class="collapse">
	  @if (in_array('invoices.create',$permissions))
		<li><a href="{{ url('invoices/create') }}">{{ _lang('Add Invoice') }}</a></li>
	  @endif
	  
	  @if (in_array('invoices.index',$permissions))
		<li><a href="{{ url('invoices') }}">{{ _lang('Invoice List') }}</a></li>
	  @endif
	  
	  @if (in_array('quotations.create',$permissions))
		<li><a href="{{ url('quotations/create') }}">{{ _lang('Add Quotation') }}</a></li>
	  @endif
	  
	  @if (in_array('quotations.index',$permissions))
		<li><a href="{{ url('quotations') }}">{{ _lang('Quotation List') }}</a></li>
	  @endif
	</ul>
</li>

<li>
   <a href="#" aria-expanded="false"><i class="fas fa-university"></i>&nbsp;<span class="menu-title">{{ _lang('Bank & Cash Accounts') }}</span> <span class="glyphicon arrow"></span></a>
   <ul aria-expanded="false" class="collapse">
	  @if (in_array('accounts.index',$permissions))
		<li><a href="{{ url('accounts') }}">{{ _lang('List Account') }}</a></li>
	  @endif
	  
	  @if (in_array('accounts.create',$permissions))
		<li><a href="{{ url('accounts/create') }}">{{ _lang('Add New Account') }}</a></li>
      @endif
   </ul>
</li>

<li>
   <a href="#" aria-expanded="false"><i class="far fa-credit-card"></i>&nbsp;<span class="menu-title">{{ _lang('Transactions') }}</span> <span class="glyphicon arrow"></span></a>
   <ul aria-expanded="false" class="collapse">
	  @if (in_array('income.index',$permissions))
		<li><a href="{{ url('income') }}">{{ _lang('Income/Deposit') }}</a></li>
	  @endif
	  
	  @if (in_array('expense.index',$permissions))
		<li><a href="{{ url('expense') }}">{{ _lang('Expense') }}</a></li>
	  @endif
	  
	  @if (in_array('transfer.create',$permissions))
		<li><a href="{{ url('transfer/create') }}">{{ _lang('Transfer') }}</a></li>
	  @endif
	  
	  @if (in_array('income.income_calendar',$permissions))
		<li><a href="{{ url('income/calendar') }}">{{ _lang('Income Calendar') }}</a></li>
	  @endif
	  
	  @if (in_array('expense.expense_calendar',$permissions))
		<li><a href="{{ url('expense/calendar') }}">{{ _lang('Expense Calendar') }}</a></li>
      @endif
   </ul>
</li>

<li>
   <a href="#" aria-expanded="false"><i class="fas fa-credit-card"></i>&nbsp;<span class="menu-title">{{ _lang('Recurring Transaction') }}</span> <span class="glyphicon arrow"></span></a>
   <ul aria-expanded="false" class="collapse">
	  @if (in_array('repeating_income.create',$permissions))
		<li><a href="{{ url('repeating_income/create') }}">{{ _lang('Add Repeating Income') }}</a></li>
	  @endif
	  
	  @if (in_array('repeating_income.index',$permissions))
		<li><a href="{{ url('repeating_income') }}">{{ _lang('Repeating Income List') }}</a></li>
	  @endif
	  
	  @if (in_array('repeating_expense.create',$permissions))
		<li><a href="{{ url('repeating_expense/create') }}">{{ _lang('Add Repeating Expense') }}</a></li>
	  @endif
	  
	  @if (in_array('repeating_expense.index',$permissions))
		<li><a href="{{ url('repeating_expense') }}">{{ _lang('Repeating Expense List') }}</a></li>
      @endif
   </ul>
</li>


<li>
   <a href="#" aria-expanded="false"><i class="far fa-chart-bar"></i>&nbsp;<span class="menu-title">{{ _lang('Reports') }}</span> <span class="glyphicon arrow"></span></a>
   <ul aria-expanded="false" class="collapse">
	  @if (in_array('reports.account_statement',$permissions))
		<li><a href="{{ url('reports/account_statement') }}">{{ _lang('Account Statement') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.day_wise_income',$permissions))
		<li><a href="{{ url('reports/day_wise_income') }}">{{ _lang('Detail Income Report') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.date_wise_income',$permissions))
		<li><a href="{{ url('reports/date_wise_income') }}">{{ _lang('Date Wise Income') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.day_wise_expense',$permissions))
		<li><a href="{{ url('reports/day_wise_expense') }}">{{ _lang('Detail Expense Report') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.date_wise_expense',$permissions))
		<li><a href="{{ url('reports/date_wise_expense') }}">{{ _lang('Date Wise Expense') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.transfer_report',$permissions))
		<li><a href="{{ url('reports/transfer_report') }}">{{ _lang('Transfer Report') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.income_vs_expense',$permissions))
		<li><a href="{{ url('reports/income_vs_expense') }}">{{ _lang('Income VS Expense') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.report_by_payer',$permissions))
		<li><a href="{{ url('reports/report_by_payer') }}">{{ _lang('Report By Payer') }}</a></li>
	  @endif
	  
	  @if (in_array('reports.income_vs_expense',$permissions))
		<li><a href="{{ url('reports/report_by_payee') }}">{{ _lang('Report By Payee') }}</a></li>
      @endif
   </ul>
</li>

<li>
   <a href="#" aria-expanded="false"><i class="fas fa-cog"></i>&nbsp;<span class="menu-title">{{ _lang('Settings') }}</span> <span class="glyphicon arrow"></span></a>
   <ul aria-expanded="false" class="collapse">
	  @if (in_array('company.change_settings',$permissions))
		<li><a href="{{ url('company/general_settings') }}">{{ _lang('Company Settings') }}</a></li>
	  @endif
	  
	  @if (in_array('company_email_template.index',$permissions))
		<li><a href="{{ url('company_email_template') }}">{{ _lang('Email Template') }}</a></li>
	  @endif
	  
	  @if (in_array('chart_of_accounts.index',$permissions))
		<li><a href="{{ url('chart_of_accounts') }}">{{ _lang('Income & Expense Types') }}</a></li>
	  @endif
	  
	  @if (in_array('payment_methods.index',$permissions))
		<li><a href="{{ url('payment_methods') }}">{{ _lang('Payment Methods') }}</a></li>
	  @endif
	  
	  @if (in_array('product_units.index',$permissions))
		<li><a href="{{ url('product_units') }}">{{ _lang('Product Unit') }}</a></li>
	  @endif
	  
	  @if (in_array('taxs.index',$permissions))
		<li><a href="{{ url('taxs') }}">{{ _lang('Tax Settings') }}</a></li>
	  @endif
   </ul>
</li>
