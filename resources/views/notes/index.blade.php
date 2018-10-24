@extends('layouts.app1')
@section('content')
<section id="home" class="s-home target-section">
    <div class="home-content">
        <div class="row home-content__main wide">
            <div class="container">
                <div class="row">
                    <div class="col-three tab-full card">
                    
                    @if($notes->isEmpty())
                    <p>
                        You have not created any notes! <a href="{{ url('create') }}">Create one</a> now.
                    </p>
                    @else
                    <ul class="list-group">
                        @foreach($notes as $note)
                        <li id="{{$note->id}}" class="list-group-item" onclick="myFunction(this)">
                            <a href="{{ url('edit', [$note->slug]) }}">
                                {{ $note->title }}
                            </a>
                            <span class="pull-right">{{ $note->updated_at->diffForHumans() }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                
                <div class=" col-nine card">
                  <div id="note-card">
                      <div id="note-heading"><h3>Note</h3></div>
                       <div id="note-info">
                        <p>Click the note at the side to view.</p>
                       </div>
                  </div>
                </div>
            </div>
        </div>

</div>
</section>



<script>
function myFunction(elmt) {

  var id = elmt.id; // A random variable for this example

$.ajax({

    method: 'GET', // Type of response and matches what we said in the route
    url: '/note/ajaxget', // This is the url we gave in the route
    data: {'id' : id,
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        console.log(response[0]);

        var div = document.getElementById('note-info');

        $("#note-card #note-heading").html("<h3 style='color:black;'>"+response[0]['title']+"</h3>");
        $("#note-card #note-info").html("<p>"+response[0]['body']+"</p>");
    
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
}
</script>
@endsection