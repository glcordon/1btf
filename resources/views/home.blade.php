@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard

                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6">
                             {!! QrCode::size(350)->generate('/' . auth()->user()->secondary_id); !!} <br><br>
                        </div>
                        <div class="col-6">
                            <h3>
                                So Far You Have Earned?
                            </h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Value
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse ($userScans as $item)
                                    <tr>
                                       <td>
                                        {{ $item->your_name }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            (BD){{ $item->service_value }}.00
                                        </td>
                                        <td>
                                            {{ $item->city }}, {{ $item->state }}
                                        </td> 
                                    </tr>
                                    
                                    @empty
                                    <tr>
                                        <td colspan="4">No Data Available</td>
                                    </tr>
                                    @endforelse
                                    <tr>
                                        <td style="text-align: right" colspan="4">
                                            <strong>(BD){{ $totalValue.".00" ?? '0.00' }}</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    @if(!is_null($revenueChart))
                        <div class="row">
                            <div class="{{ $revenueChart->options['column_class'] }}">
                                <h3>Last 30 Days Revenue</h3>
                                {!! $revenueChart->renderHtml() !!}
                            </div>
                            <div class="{{ $paymentsTable['column_class'] }}" style="overflow-x: auto;">
                                <h3>{{ $paymentsTable['chart_title'] }}</h3>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            @foreach($paymentsTable['fields'] as $key => $value)
                                                <th>
                                                    {{ ucfirst($key) }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($paymentsTable['data'] as $entry)
                                            <tr>
                                                @foreach($paymentsTable['fields'] as $key => $value)
                                                    <td>
                                                        @if($value === '')
                                                            {{ $entry->{$key} }}
                                                        @elseif(is_iterable($entry->{$key}))
                                                            @foreach($entry->{$key} as $subEentry)
                                                                <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                            @endforeach
                                                        @else
                                                            {{ $entry->{$key}->{$value} }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="{{ count($paymentsTable['fields']) }}">{{ __('No entries found') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent

@if(!is_null($revenueChart))
    {!! $revenueChart->renderChartJsLibrary() !!}
    {!! $revenueChart->renderJs() !!}
@endif

@endsection