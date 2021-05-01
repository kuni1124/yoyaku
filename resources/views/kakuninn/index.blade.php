<div class="row">
        <div class="col-sm-4">
            <div class="text-center my-4">
                <h3 class="brown border p-2">予約検索</h3>
            </div>
            {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                <div class="form-group">
                    {!! Form::label('text', '名前:') !!}
                    {!! Form::text('name' ,'', ['class' => 'form-control',] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '電話番号:') !!}
                    {!! Form::text('tel' )!!}
                </div>
                {!! Form::submit('予約確認', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            
            
        </div>
    </div>