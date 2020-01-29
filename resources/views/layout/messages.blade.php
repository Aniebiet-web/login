<div class="col-8 m-auto">
        @if(count($errors)>0)
        <div class="alert arlet-danger" role="arlet">
            @foreach ($errors->all() as $error)
                {{error}}
            @endforeach

        </div>
@endif
</div>
<div class="col-8 m-auto">
    @if(session()->has('success'))
    <div class="arlet arlet-success" role="arlet">
            {{session()->get('success')}}
    
    
    </div>

@endif
</div>