

    <div class="form-group row">
        <!--
        <div class="details" style="display:none">HIDDEN CONTENT</div>
<a id="more" href="#" onclick="$('.details').slideToggle(function(){$('#more').html
($('.details').is(':visible')?'See Less Details':'See More Details');});">See More Details</a>
        --> 
</div>
<div class="RegSpLeft" id="phone">
    <input type="text" value="Phone">
</div>

<div class="RegSpRight">
    <a href="#" class="pl">+
    </a>
    <br/>
    <a href="#" class="mi">-
    </a>
</div>



@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<script>

        

            $(document).ready(function () {
                
        $('a.pl').click(function(e) {
            e.preventDefault();
            $('#phone').append('<input type="text" value="Phone">');
        });
        $('a.mi').click(function (e) {
            e.preventDefault();
            if ($('#phone input').length > 1) {
                $('#phone').children().last().remove();
            }
        });
        });

  </script>
@endsection