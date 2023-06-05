@extends('layouts.app')

@section('content')


<form class="account-setting-form" action="{{route('update.about')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Edit About</h3>

    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>About</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="About..." name="about">{{auth()->user()->about}}</textarea>

            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <button type="submit" class="default-btn">Save</button>
        </div>
    </div>
</form>






@endsection

