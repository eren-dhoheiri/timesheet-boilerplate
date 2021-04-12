@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <!-- <div class="card">
                <div class="card-header">
                    Welcome Celerators! 
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <div class="jumbotron" style="height: 70vh">
                        <div class="text-justify mb-3">
                            <h1>Hello, {{ Auth::user()->name }}</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed consequat justo. In sodales laoreet enim, ac semper lectus laoreet ac. Mauris cursus tellus tempor, tristique justo at, fringilla leo. Sed euismod ac est quis dapibus. Duis volutpat in sem quis elementum. Cras eu mi ut lorem interdum ornare a nec justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id fringilla ex, eu malesuada urna.</p>

                            <p>Fusce ac ultricies orci. Donec nec feugiat leo. Cras dui libero, scelerisque ut posuere at, porttitor in diam. Duis ut nisl at nunc efficitur sodales eu non nibh. Maecenas consequat dolor mi, quis sollicitudin mi pulvinar a. Nulla facilisis lectus ac lobortis fermentum. Nullam cursus bibendum faucibus. Aenean non est facilisis, pellentesque mi vitae, maximus diam. Curabitur laoreet malesuada mauris. Donec imperdiet aliquet odio, nec mattis odio rhoncus non.</p>

                            <p>Sed congue dolor quis volutpat tempus. Proin a accumsan velit, sed vulputate nisi. Donec scelerisque ante augue, ac gravida massa scelerisque a. Mauris lacinia, arcu vel fringilla pharetra, ligula quam pretium orci, ac viverra erat metus at tellus. Integer sed quam vel urna egestas vestibulum. Aliquam mattis congue orci sit amet luctus. Phasellus gravida est et magna varius, sit amet sollicitudin nibh iaculis. Cras convallis fringilla ante, eu bibendum mauris maximus sit amet. Maecenas facilisis ac eros et rutrum. Nam tellus lorem, pellentesque ac dignissim maximus, accumsan non tortor. Etiam tristique mauris non est imperdiet sollicitudin. Curabitur eget pharetra eros. Nam fermentum dolor elit, sit amet elementum augue mattis non. Fusce vehicula massa at orci sagittis dignissim. Cras non maximus urna, eu finibus enim. Suspendisse non odio finibus, pharetra mi vel, consectetur augue.</p>

                            <p>Fusce ac ultricies orci. Donec nec feugiat leo. Cras dui libero, scelerisque ut posuere at, porttitor in diam. Duis ut nisl at nunc efficitur sodales eu non nibh. Maecenas consequat dolor mi, quis sollicitudin mi pulvinar a. Nulla facilisis lectus ac lobortis fermentum. Nullam cursus bibendum faucibus. Aenean non est facilisis, pellentesque mi vitae, maximus diam. Curabitur laoreet malesuada mauris. Donec imperdiet aliquet odio, nec mattis odio rhoncus non.</p>

                            <p>Sed congue dolor quis volutpat tempus. Proin a accumsan velit, sed vulputate nisi. Donec scelerisque ante augue, ac gravida massa scelerisque a. Mauris lacinia, arcu vel fringilla pharetra, ligula quam pretium orci, ac viverra erat metus at tellus. Integer sed quam vel urna egestas vestibulum. Aliquam mattis congue orci sit amet luctus. Phasellus gravida est et magna varius, sit amet sollicitudin nibh iaculis. Cras convallis fringilla ante, eu bibendum mauris maximus sit amet. Maecenas facilisis ac eros et rutrum. Nam tellus lorem, pellentesque ac dignissim maximus, accumsan non tortor. Etiam tristique mauris non est imperdiet sollicitudin. Curabitur eget pharetra eros. Nam fermentum dolor elit, sit amet elementum augue mattis non. Fusce vehicula massa at orci sagittis dignissim. Cras non maximus urna, eu finibus enim. Suspendisse non odio finibus, pharetra mi vel, consectetur augue.</p>
                            <p><a class="btn btn-primary btn-lg" role="button" href="admin/time-entries">
                                Go to timesheet</a>
                            </p>
                        </div>
                    <!-- </div>

               
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection