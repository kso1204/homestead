

    <div class="form-group row">

           


        <table class="table table-striped" id="mainTable" >
            <tr>
                <td>
Corresponding Author	
                </td>
                <td>
                    Presenter
                </td>
                
                <td>
                    No
                </td>
                
                <td>
                    Prefix	
                </td>
                <td>
                    First Name	
                </td>
                <td>
                    Last Name	
                </td>
                <td>
                    Institution / Company
                </td>
                <td>
                    Country
                </td>
                <td>
                    E-mail
                </td>
            </tr>
            @for ($i = 1; $i < 3; $i++)
                
            <input type="hidden" name="a_no{{$i}}" value="{{$i}}">
            <tr id="authors_{{$i}}" >
                <td ><input type="checkbox" name="a_c_{{$i}}" class='form-control'></td>
                <td ><input type="checkbox" name="a_p{{$i}}" class='form-control'></td>
                <td >{{$i}}</td>
                <td ><input type="text" name="a_tname_{{$i}}" class='form-control'></td>
                <td ><input type="text" name="a_fname_{{$i}}" class='form-control'></td>
                <td ><input type="text" name="a_lname_{{$i}}" class='form-control'></td>
                <td ><input type="text" name="a_company_{{$i}}" class='form-control'></td>
                <td ><input type="text" name="a_country_{{$i}}" class='form-control'></td>
                <td ><input type="text" name="a_email_{{$i}}" class='form-control'></td>
            </tr>
            
            @endfor
        </table>
</div>
<div class="RegSpLeft" id="phone">
    <button type="button" value="Phone" class="button">Button</button>
</div>




@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<script>

        

            $(document).ready(function () {
                
              $(".button").click(function () {
                $("#DataRow").clone().appendTo("#mainTable");

                        
                   
            });

            /*

            for($i=2;$i<=20;$i++){
                    $("#authors_"+$i).hide();
                }

                for($i=1;$i<=$("select[id='authors_su']").val();$i++){
                    $("#authors_"+$i).show();
                }

                $("select[id='authors_su']").change(function(){
                    $authors_su=$("select[id='authors_su']").val();
                    
                    for($i=1;$i<=20;$i++){
                        $("#authors_"+$i).hide();
                    }

                    for($i=1;$i<=$authors_su;$i++){
                        $("#authors_"+$i).show();
                    }

                });
                */

        });

  </script>
@endsection