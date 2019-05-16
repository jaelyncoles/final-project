@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>


                <div class="card-body">
                    <form method="POST" action="/createpost" enctype="multipart/form-data">
                        @csrf
                        <div>

                            {{-- <label  for="title">Title:</label> --}}
                            <input type='text' placeholder="Title" name="title" id="title">
                            <br>

                            <div id='postimageholder'>
                                <input style="color:white;" placeholder="Click to choose" type="file" name="postimage"
                                    id="postimage">
                            </div>
                            <br>
                            <div id='postdescription'>
                                {{-- <label for="description">Tell us about your Event:</label> --}}

                                <textarea id="description" placeholder="Tell Us About Your Event" name="description">
                                    </textarea>
                                <br>
                                <button style='color:white;'> Post</button>
                            </div>
                        </div>
                        {{-- route back to home/profile home --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection