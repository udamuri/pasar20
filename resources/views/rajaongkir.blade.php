@extends('layouts.app')

@section('content')
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
            <g clip-path="url(#clip0)" fill="#EF3B2D">
                <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
            </g>
        </svg>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-1">
                    <div class="p-6">
                        <form method="POST" action="{{route('home.rajaongkir.result')}}">
                            @csrf
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <select class="form-control" id="province" name="province" >
                                    <option value="0" >--Pilih Provinsi--</option>
                                    @foreach($province as $key => $value)
                                        <option value="{{$value['id']}}">{{$value['text']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group d-none" id="city_loading">
                                <img src="{{asset('images/loading.gif')}}" />
                            </div>
                            
                            <div class="form-group d-none" id="content_name_city">
                                <label for="city">Kabupaten/Kota</label>
                                <select class="form-control" id="city" name="city" ></select>
                            </div>
        
                            <div class="form-group">
                                <label for="province">Kurir</label>
                                <select class="form-control" id="courier" name="courier" >
                                    <option value="" >--Pilih Kurir--</option>
                                    <option value="tiki" >Tiki</option>
                                    <option value="jne" >JNE</option>
                                    <option value="pos" >POS</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="weight">Jumlah</label>
                                <input type="number" class="form-control" id="weight" name="weight" min="1000" value="1000" placeholder="Contoh : 1000">
                                <small id="weightHelp" class="form-text text-muted">Berat dalam gram</small>
                              </div>
        
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        
            @if(session('model'))
        
            <div class="row mt-4">
                <div class="col-12">
                    <?php 
                            $data = session('model');
                        ?>
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td width="100"><strong>Dari </strong></td>
                                            <td><strong>:</strong> {{$data['from']}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tujuan  </strong></td>
                                            <td><strong>:</strong> {{$data['to']}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Berat (gram)  </strong></td>
                                            <td><strong>:</strong> {{$data['weight']}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                @if(count($data['results']) > 0)
                                    @foreach($data['results'] as $k => $v)
                                        <table class="table table-bordered table-dark" width="100%" border="0">
                                            <thead>
                                                <tr>
                                                    <td colspan="5">{{$v['name']}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Layanan</td>
                                                    <td align="center">Deskripsi</td>
                                                    <td>Tarif </td>
                                                    <td>ETD(Estimates Days) </td>
                                                    <td>Catatan</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($v['costs']) > 0)
                                                    @foreach($v['costs'] as $key => $value)
                                                    <tr>
                                                        <td>{{$value['service']}}</td>
                                                        <td >{{$value['description']}}</td>
                                                        <td>IDR {{number_format($value['cost'][0]['value']) ?? $value['cost'][0]['value']}}</td>
                                                        <td>{{$value['cost'][0]['etd']}}  D</td>
                                                        <td>{{$value['cost'][0]['note']}}</td>
                                                        </tr>
                                                    <tr>    
                                                    @endforeach     
                                                @else
                                                <tr>
                                                    <td class="alert alert-danger" colspan="5">Layanan tidak ditemukan!!!</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        Layanan tidak ditemukan!!!
                                    </div>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
            @endif
        
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
        
                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>
        
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
        
                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>
        
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $('#province').on('change', function() {
        var id = this.value;
        var struri = "{{route('api.rajaongkir.city', ['id' => 'cityid'])}}";
        var uri = struri.replace("cityid", id);
        
        $('#city_loading').removeClass("d-none");
        $('#content_name_city').removeClass("d-none");
        $('#content_name_city').addClass("d-none");

        $.ajax({
            type: 'GET',
            url: uri,
            processData: false,
            contentType: false,
            success: function (data)
            {
                if(typeof data == "object") {
                    var html = '<option value="0" >--Pilih--</option>';
                    $.each(data, function( index, value ) {
                        html += '<option value="'+value['id']+'">'+value['text']+'</option>';
                    });
                    $('#city').empty();                
                    $('#city').append(html);

                    $('#content_name_city').removeClass("d-none");
                    $('#city_loading').addClass("d-none");
                }
            
            },
            error: function (data)
            {
                console.log(data);
            }
        });
    });
</script>
@endsection