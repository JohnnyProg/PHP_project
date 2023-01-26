@extends('home')

@section('content')
<div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
            
        @foreach($comments as $comment)
        
            <div class="card-body">
            <!-- autor -->
                <div class="d-flex flex-start align-items-center">
                    <div>
                    <h6 class="fw-bold text-primary mb-1">{{$comment->user}}</h6>
                    <p class="text-muted small mb-0">
                        {{$comment->created_at}}
                    </p>
                    </div>
                </div>
            <!-- treść -->
                <p class="mt-3 mb-4 pb-2">
                    {{$comment->text}}
                </p>

            
            </div>
        @endforeach
           
            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <form method="POST" action="{{route('commentStore')}}">
            @csrf
            <div class="d-flex flex-start w-100">
                <div class="form-outline w-100">
                <textarea name="comment" class="form-control" id="textAreaExample" rows="4"
                    style="background: #fff;"></textarea>
                </div>
            </div>
            <div class="float-end mt-2 pt-1">
                <button type="submit" class="btn btn-primary btn-sm">Wyślij </button>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection