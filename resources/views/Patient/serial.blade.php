@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Doctor
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/serial.css') }}" rel="stylesheet">
@endsection


@section('ContentOfBody')
    <div class="container">
        <div class=" col-sm-12 add_doc_head clearfix">
            <h2 class="pull-left">Book Your Serial</h2>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                <div align="center">


                    <img src="{{ asset($Doctor->img)}}" class="img-thumbnail" alt="Profile Pic" width="200"
                         height="200">
                    <div class="docInfo">
                        <h2><strong><i>Nama: </i></strong>{{$Doctor->name}}</h2>
                        <h3><strong><i>Kategori: </i></strong>{{$Doctor->category}}</h3>
                        <h4><strong><i>Tanggal: </i></strong> {{$Date->serial_date}}</h4>
                        <h4><strong><i>Waktu Mulai: </i></strong> {{$Date->start_time}}</h4>
                        <h4><strong><i>Waktu Selesai: </i></strong> {{$Date->end_time}}</h4>
                        <p><strong><i>Ruang: </i> </strong>{{$Date->chember}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-sm-12 add_doc_head clearfix">
            <h4 class="pull-left">Pilih dibawah ini</h4>
        </div>

        <div class="col-sm-6 col-sm-offset-3 well">
            <form action="{{Route('bookSerial.submit')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Interval</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($Serials as $serial)
                        @if($serial->patient==null)
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"
                                                      value="{{$serial->id}}" checked>From: {{$serial->start_time}},
                                            To: {{$serial->end_time}}</label>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endif
                    @endforeach
                    </tbody>
                </table>
                @if($i>1)
                    <h4 class="alert alert-info">Pembayaran dilakukan pada saat praktek</h4>
                    <input type="submit" value="submit" class="btn btn-primary">
                @endif
            </form>
        </div>

    </div>
@endsection