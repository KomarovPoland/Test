@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 row justify-content-center"> 
        <model-edit-component :modelId="{{id}}" :isNewModel="false"></model-edit-component>
    </div>
</div>
@endsection