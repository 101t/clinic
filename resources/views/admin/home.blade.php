@extends('admin.layouts.base')
@section('title', $CONFIG->name.' | '.trans("Dashboard"))
@section('css')
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-content">
		<div class="m-portlet">
			<div class="m-portlet__body m-portlet__body--no-padding">
				<div class="row m-row--no-padding m-row--col-separator-xl">
					<div class="col-md-12 col-lg-12 col-xl-4">
						<!--begin:: Widgets/Stats2-1 -->
						<div class="m-widget1">
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">{{ __("Users") }}</h3>
										<span class="m-widget1__desc">{{ __("Number of users in website") }}</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-brand">{{ App\User::count() }}</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">{{ __("Slids") }}</h3>
										<span class="m-widget1__desc">{{ __("Number of slids in home page") }}</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-danger">{{ App\Models\HomeSlider::count() }}</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">{{ __("FAQs") }}</h3>
										<span class="m-widget1__desc">{{ __("Number of FAQs in website") }}</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-success">{{ App\Models\Faq::count() }}</span>
									</div>
								</div>
							</div>
						</div>
						<!--end:: Widgets/Stats2-1 -->
						</div>
						<div class="col-md-12 col-lg-12 col-xl-4">
						<!--begin:: Widgets/Stats2-2 -->
						<div class="m-widget1">
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">IPO Margin</h3>
										<span class="m-widget1__desc">Awerage IPO Margin</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-accent">+24%</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">Payments</h3>
										<span class="m-widget1__desc">Yearly Expenses</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-info">+$560,800</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">Logistics</h3>
										<span class="m-widget1__desc">Overall Regional Logistics</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-warning">-10%</span>
									</div>
								</div>
							</div>
						</div>
						<!--begin:: Widgets/Stats2-2 -->
						</div>
						<div class="col-md-12 col-lg-12 col-xl-4">
						<!--begin:: Widgets/Stats2-3 -->
						<div class="m-widget1">
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">Orders</h3>
										<span class="m-widget1__desc">Awerage Weekly Orders</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-success">+15%</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">Transactions</h3>
										<span class="m-widget1__desc">Daily Transaction Increase</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-danger">+80%</span>
									</div>
								</div>
							</div>
							<div class="m-widget1__item">
								<div class="row m-row--no-padding align-items-center">
									<div class="col">
										<h3 class="m-widget1__title">Revenue</h3>
										<span class="m-widget1__desc">Overall Revenue Increase</span>
									</div>
									<div class="col m--align-right">
										<span class="m-widget1__number m--font-primary">+60%</span>
									</div>
								</div>
							</div>
						</div>
						<!--begin:: Widgets/Stats2-3 -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
@endsection