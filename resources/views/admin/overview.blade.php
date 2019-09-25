@extends('layouts.admin')

@section('content')
    <div class="container py-6">

        @for($i=0; $i<4; $i++)
        <div class="row mb-3">
            @for($n=0; $n<4; $n++)
                <div class="col-md-3">
                    <div class="card" style="min-height:125px">
                        <div class="card-body">
                            <p class="small text-uppercase font-weight-bold text-muted">Statistic</p>
                            <p class="h2 mb-0" title="" data-toggle="tooltip" data-original-title="0">0</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        @endfor
    </div>
@endsection
