<div class="container">
               
　　　　　　　　　　　　　
                        @foreach($data as $item)
                                <div class="row py-2 border-bottom text-center">
                                    <div class="col-sm-4">
                                        <a href="">{{ $item->date }}</a>
                                    </div>
                                    <div class="col-sm-4">
                                        {{ $item->time }}時に予約されています。
                                    </div>
                                </div>
                                <td>{!! Form::model($item, ['route' => ['yoyaku-delete', $item->id ], 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}</td>
                        @endforeach
                   
                    {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
           
            </div>