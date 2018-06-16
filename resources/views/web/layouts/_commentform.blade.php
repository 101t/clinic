<div class="panel panel-default">
	<div class="panel-body">
		<p><strong>{{ __("Write your comment") }}</strong></p>
		{!! Form::open(['url' => app()->getLocale()."/blog/{$post->slug}/comment"]) !!}
            <div class="form-group">
                {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'required']) !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-comment"></i> {{ __("Reply") }}</button>
            </div>
        {!! Form::close() !!}
	</div>
</div>