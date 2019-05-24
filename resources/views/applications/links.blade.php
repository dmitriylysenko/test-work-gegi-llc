
<div class="flex-center position-ref full-height">
    <a href="{{ url('school/table') }}" class="btn btn-info {{ Route::currentRouteNamed('table') ? 'active' : '' }}">Table</a>
    <a href="{{ url('school/chart') }}" class="btn btn-info {{ Route::currentRouteNamed('chart') ? 'active' : '' }}">Chart</a>
</div>