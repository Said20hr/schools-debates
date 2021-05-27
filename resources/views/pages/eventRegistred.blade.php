@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-14 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <div class="d-block justify-content-center m-tb-56">
                    @if(session()->has('success_message'))
                        <div>
                            <h1 class="color-2 fs-42 fw-bold mb-4">{{session()->get('success_message')}}</h1>
                        </div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                    @endif
                </div>
            <div class="m-tb-56 col-lg-3">
                <a href="{{route('event.index')}}" class="btn btn-primary btn-lg p-lr-25 p-tb-10"> العودة</a>
            </div>
            </div>
        </section>
    </div>
@endsection
<script>
    import App from "../../../public/js/app";
    export default {
        components: {App}
    }
</script>