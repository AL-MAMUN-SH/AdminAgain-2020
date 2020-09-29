
@if(session()->has('message'))
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-info text-left text-info font-weight-bold">
                    {{session('message')}}
                </div>
            </div>
        </div>
    </div>
 @endif

@if(session()->has('error'))
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-danger text-left text-info font-weight-bold">
                        {{session('error')}}
                    </div>
                </div>
            </div>
        </div>
@endif
