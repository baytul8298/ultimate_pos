@if($__is_repair_enabled)
	@can("repair.create")
		<a href="{{ action([\App\Http\Controllers\SellPosController::class, 'create']). '?sub_type=repair'}}" title="{{ __('repair::lang.add_repair') }}" data-toggle="tooltip" data-placement="bottom"
		   class="tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-w-auto tw-h-auto tw-py-1 tw-px-4 tw-rounded-md pull-right">
			<i class="fa fa-wrench fa-1x"></i>
			<strong>@lang('repair::lang.repair')</strong>
		</a>
	@endcan
@endif