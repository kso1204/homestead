
<!--
    
     <div class='form-group row {{ $errors->has('c_tname') ? 'has-error' : '' }}' >
        <label for="c_tname" class="col-md-4 col-form-label text-md-right">{{ __('Prefix') }}</label>
        <div class="col-md-6">
        <input type='text' name='c_tname' id='c_tname' value="{{old('c_tname', $paper->c_tname)}}" class='form-control'>
        {!! $errors->first('c_tname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <?php
    $countries = DB::select('select * from countries');
   ?>
    <div class='form-group row {{ $errors->has('c_country') ? 'has-error' : '' }}' >
        <label for="c_country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
        <div class="col-md-6">
            <select name="c_country" class="form-control" required autocomplete="c_country">
                <option value=''>
                    Select Country
                </option>
                @foreach ($countries as $country)
                    <option value="{{$country->country_code}}" {{ $paper->c_country==$country->country_code ? 'selected="selected"' : '' }}>
                        {{$country->country_name}}
                    </option>
                @endforeach
            </select>
           {!! $errors->first('c_country', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('c_fname') ? 'has-error' : '' }}' >
        <label for="c_fname" class="col-md-4 col-form-label text-md-right">{{ __('First(Given) Name') }}</label>
        <div class="col-md-6">
        <input type='text' name='c_fname' id='c_fname' value="{{old('c_fname', $paper->c_fname)}}" class='form-control'>
        {!! $errors->first('c_fname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('c_lname') ? 'has-error' : '' }}' >
        <label for="c_lname" class="col-md-4 col-form-label text-md-right">{{ __('Last(Family) Name') }}</label>
        <div class="col-md-6">
        <input type='text' name='c_lname' id='c_lname' value="{{old('c_lname', $paper->c_lname)}}" class='form-control'>
        {!! $errors->first('c_lname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('c_company') ? 'has-error' : '' }}' >
        <label for="c_company" class="col-md-4 col-form-label text-md-right">{{ __('Institution / Company') }}</label>
        <div class="col-md-6">
        <input type='text' name='c_company' id='c_company' value="{{old('c_company', $paper->c_company)}}" class='form-control'>
        {!! $errors->first('c_company', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group row">
        <label for="c_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

        <div class="col-md-2">
            <input id="c_mobile_1" type="text" class="form-control @error('c_mobile_1') is-invalid @enderror" name="c_mobile_1" required autocomplete="c_mobile_1">
        
            @error('c_mobile_1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        
        <div class="col-md-2">
            <input id="c_mobile_2" type="text" class="form-control " name="c_mobile_2" required autocomplete="c_mobile_2">
        </div>
        
        <div class="col-md-2">
            <input id="c_mobile_3" type="text" class="form-control " required autocomplete="c_mobile_3">
        </div>
    </div>

    <div class="form-group row">
        <label for="c_tel" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

        <div class="col-md-2">
            <input id="c_tel_1" type="text" class="form-control @error('c_tel_1') is-invalid @enderror" name="c_tel_1" required autocomplete="c_tel_1">
        </div>
        
        <div class="col-md-4">
            <input id="c_tel_2" type="text" class="form-control @error('c_tel_2') is-invalid @enderror" name="c_tel_2" required autocomplete="c_tel_2">
        </div>
        
        @error('c_tel_1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    @error('c_tel_2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>

    <div class='form-group row {{ $errors->has('p_email') ? 'has-error' : '' }}' >
        <label for="p_email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
        <div class="col-md-6">
        <input type='email' name='p_email' id='p_email' value="{{old('p_email', $paper->p_email)}}" class='form-control'>
        {!! $errors->first('p_email', '<span class="form-error">:message</span>') !!}
        </div>
    </div>


    <div class='form-group row {{ $errors->has('p_tname') ? 'has-error' : '' }}' >
        <label for="p_tname" class="col-md-4 col-form-label text-md-right">{{ __('Prefix') }}</label>
        <div class="col-md-6">
        <input type='text' name='p_tname' id='p_tname' value="{{old('p_tname', $paper->p_tname)}}" class='form-control'>
        {!! $errors->first('p_tname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <?php
    $countries = DB::select('select * from countries');
   ?>
    <div class='form-group row {{ $errors->has('p_country') ? 'has-error' : '' }}' >
        <label for="p_country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
        <div class="col-md-6">
            <select name="p_country" class="form-control" required autocomplete="p_country">
                <option value=''>
                    Select Country
                </option>
                @foreach ($countries as $country)
                    <option value="{{$country->country_code}}" {{ $paper->p_country==$country->country_code ? 'selected="selected"' : '' }}>
                        {{$country->country_name}}
                    </option>
                @endforeach
            </select>
           {!! $errors->first('p_country', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('p_fname') ? 'has-error' : '' }}' >
        <label for="p_fname" class="col-md-4 col-form-label text-md-right">{{ __('First(Given) Name') }}</label>
        <div class="col-md-6">
        <input type='text' name='p_fname' id='p_fname' value="{{old('p_fname', $paper->p_fname)}}" class='form-control'>
        {!! $errors->first('p_fname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('p_lname') ? 'has-error' : '' }}' >
        <label for="p_lname" class="col-md-4 col-form-label text-md-right">{{ __('Last(Family) Name') }}</label>
        <div class="col-md-6">
        <input type='text' name='p_lname' id='p_lname' value="{{old('p_lname', $paper->p_lname)}}" class='form-control'>
        {!! $errors->first('p_lname', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class='form-group row {{ $errors->has('p_company') ? 'has-error' : '' }}' >
        <label for="p_company" class="col-md-4 col-form-label text-md-right">{{ __('Institution / Company') }}</label>
        <div class="col-md-6">
        <input type='text' name='p_company' id='p_company' value="{{old('p_company', $paper->p_company)}}" class='form-control'>
        {!! $errors->first('p_company', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group row">
        <label for="p_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

        <div class="col-md-2">
            <input id="p_mobile_1" type="text" class="form-control @error('p_mobile_1') is-invalid @enderror" name="p_mobile_1" required autocomplete="p_mobile_1">
        
            @error('p_mobile_1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        
        <div class="col-md-2">
            <input id="p_mobile_2" type="text" class="form-control " name="p_mobile_2" required autocomplete="p_mobile_2">
        </div>
        
        <div class="col-md-2">
            <input id="p_mobile_3" type="text" class="form-control " required autocomplete="p_mobile_3">
        </div>
    </div>

    <div class="form-group row">
        <label for="p_tel" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

        <div class="col-md-2">
            <input id="p_tel_1" type="text" class="form-control @error('p_tel_1') is-invalid @enderror" name="p_tel_1" required autocomplete="p_tel_1">
        </div>
        
        <div class="col-md-4">
            <input id="p_tel_2" type="text" class="form-control @error('p_tel_2') is-invalid @enderror" name="p_tel_2" required autocomplete="p_tel_2">
        </div>
        
        @error('p_tel_1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    @error('p_tel_2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>

    <div class='form-group row {{ $errors->has('p_email') ? 'has-error' : '' }}' >
        <label for="p_email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
        <div class="col-md-6">
        <input type='email' name='p_email' id='p_email' value="{{old('p_email', $paper->p_email)}}" class='form-control'>
        {!! $errors->first('p_email', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    
    <div class="form-group row">
        <label for="topic" class="col-md-4 col-form-label text-md-right">{{ __('Biography') }}</label>

        <div class="col-md-6">
            
            <textarea name='p_biography' id='p_biography' class='ckeditor form-control'>
                {{old('p_biography', $paper->p_biography)}}
            </textarea>
            {!! $errors->first('p_biography', '<span class="form-error">:message</span>') !!}
        </div>
    </div>


    <fieldset class="form-group">
        <div class="row">
            
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Presentation Preference') }}</label>
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="s_type" id="gridRadios1" value="Oral" >
              <label class="form-check-label" for="gridRadios1">
                Oral
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="s_type" id="gridRadios2" value="Poster">
              <label class="form-check-label" for="gridRadios2">
                Poster
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="s_type" id="gridRadios3" value="Any" >
              <label class="form-check-label" for="gridRadios3">
                Any
              </label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="s_type" id="gridRadios3" value="Invited Talk" >
                <label class="form-check-label" for="gridRadios3">
                    Invited Talk
                </label>
              </div>
        </div>
      </fieldset>

      <?php
      $topics = DB::select('select * from topics');
     ?>
     <div class="form-group row {{ $errors->has('s_topic') ? 'has-error' : '' }}">
         <label for="s_topic" class="col-md-4 col-form-label text-md-right">{{ __('Topic') }}</label>

         <div class="col-md-6">
             <select name="s_topic" class="form-control" required autocomplete="s_topic">
                 <option value=''>
                     Select Topic
                 </option>
                 @foreach ($topics as $topic)
                     <option value="{{$topic->topic_code}}" {{ $paper->s_topic==$topic->topic_code ? 'selected="selected"' : '' }}>
                         {{$topic->topic_name}}
                     </option>
                 @endforeach
             </select>
            {!! $errors->first('s_topic', '<span class="form-error">:message</span>') !!}
         </div>
     </div>

     <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

        <div class="col-md-6">
            
            <textarea name='title' id='title' class='ckeditor form-control'>
                {{old('title', $paper->title)}}
            </textarea>
            {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
        </div>
    </div>
  
    
    <div class="form-group row">
        <label for="abstracts" class="col-md-4 col-form-label text-md-right">{{ __('Summary') }}</label>

        <div class="col-md-6">
            
            <textarea name='abstracts' id='abstracts' class='ckeditor form-control'>
                {{old('abstracts', $paper->abstracts)}}
            </textarea>
            {!! $errors->first('abstracts', '<span class="form-error">:message</span>') !!}
        </div>
    </div>
  
  
    <div class="form-group row">
        <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Paper File (PDF)') }}</label>

        <div class="col-md-6">
            <input type='file' name='files_1[]' >
        </div>
    </div>
                                
    
    <div class="form-group row">
        <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Paper File (Word)') }}</label>

        <div class="col-md-6">
            <input type='file' name='files_2[]' >
        </div>
    </div>-->

    <div class="form-group row">
        <!--
        <div class="details" style="display:none">HIDDEN CONTENT</div>
<a id="more" href="#" onclick="$('.details').slideToggle(function(){$('#more').html
($('.details').is(':visible')?'See Less Details':'See More Details');});">See More Details</a>
        --> 
</div>