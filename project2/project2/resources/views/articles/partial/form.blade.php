
            <div class='form-group' {{ $errors->has('title') ? 'has-error' : '' }} >
                <label for="title">제목</label>
                <input type='text' name='title' id='title' value="{{old('title', $article->title)}}" class='form-control'>
                {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
            </div>

            <div class='form-group' {{ $errors->has('content') ? 'has-error' : '' }} >
                <label for="content">본문</label>
                <textarea name='content' id='content' class='form-control'>
                    {{old('content', $article->content)}}
                </textarea>
                {!! $errors->first('content', '<span class="form-error">:message</span>') !!}
            </div>

            <div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }} ">
                <label for="tags">태그</label>
                <select class="form-control" name="tags[]" id="tags" multiple="multiple">
                    @foreach ($allTags as $tag)
                        <option value="{{ $tag->id }}" {{ $article->tags->contains($tag->id) ? 'selected="selected"' : '' }}>
                            {{ $tag->name }}
                        </option>
                                                
                    @endforeach
                </select>
                {!! $errors->first('tags', '<span class="form-error">:message</span>') !!}
            </div>

            <div class="form-group  ">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="notification" value="{{old('notification',1)}}" checked>
                        댓글이 작성되면 이메일 알림 받기
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="mydropzone">파일</label>
                <div id="mydropzone" ></div>
            </div>

            @section('script')
                @parent
                <script>

                    Dropzone.autoDiscover = false;
                    var form = $('form').first();
                    var myDropzone = new Dropzone('#mydropzone',{
                        url : '/attachments',
                        paramName : 'files',
                        maxFilesize : 3,
                        accptedFiles : '.jpg,.png,.zip,.tar',
                        uploadMultiple : true,
                        params : {
                            _token : $('meta[name="csrf-token"]').attr('content'),
                            article_id: '{{ $article->id }} '
                        },

                        dictDefaultMessage:'<div class="text-center text-muted">' +
                            '<h2>첨부할 파일을 끌어다 놓으세요!</h2>' +
                            '<p>또는 클릭하셔도 됩니다.</p></div>',
                        dictFileToobig:'파일당 최대 크기 3mb,',
                        dictInvalidFileType:'jpg, png, zip ,tar 파일만 가능'
                    });

                    myDropzone.on('successmultiple', function(file, data) {
                        for (var i= 0,len=data.length; i<len; i++) {
                        // 책에 있는 'attachments[]' 숨은 필드 추가 로직을 별도 메서드로 추출했다.
                                            
                            $('<input>', {
                            type: 'hidden',
                            name: 'attachments[]',
                            value: id
                            }).appendTo(form);
                        }
                        });
                </script>
                @stop