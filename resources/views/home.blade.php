@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                @include('errors.error_message')

                <!-- Feed Contents buttons -->
                <div class="card-header">
                    <p>Please register a new citizen <a href="{{ route('register') }}">here</a></p>
                </div>
                
                <!-- Feed Contents -->
                <div class="card-body" style="background-color: #f8f1f9;">
                    <div class="tab-content" id="myTabContent">                        

                        <div class="table-responsive" id="table_print">
                            <table class="table table-bordered table-hover" name="all_table_data"
                                    id="" role="grid">
                                <thead>
                                    <tr class="fw-bolder fs-0 text-gray-800 px-7" role="row">
                                        <th class="text-center" colspan="14" rowspan="1">
                                            <strong>
                                                <h3 name="table_head">Report for the list of users in the country registered on NPCommision</h3>
                                            </strong>
                                        </th>
                                    </tr>
                                    <tr role="row" name="table_head_2">
                                        <td style="font-weight: 700;">Name</td>
                                        <td style="font-weight: 700;">Country</td>

                                        <td style="font-weight: 700;">Gender</td>
                                        <td style="font-weight: 700;">Address</td>
                                        <td style="font-weight: 700;">LGA</td>
                                        <td style="font-weight: 700;">Ward</td>
                                    </tr>
                                </thead>

                                @if (isset($citizens))
                                    @foreach ($citizens as $citizen)
                                        <tbody>
                                            <tr class="odd" name="table_body">
                                                <td class="text-right">{{ $citizen->name }}</td>
                                                <td class="text-right">Nigeria</td>

                                                <td class="text-right">{{ $citizen->gender}}</td>
                                                <td class="text-right">{{ $citizen->address}}</td>
                                                <td class="text-right">{{ $citizen->lga}}</td>
                                                {{-- <td class="text-right">{{ $citizen->ward()->name}}</td> --}}
                                            </tr>
                                        </tbody>
                                    @endforeach
                                @endif

                                
                                    
                                <tfoot>
                                    <tr name="table_foot" style="font-weight: 700;">

                                        <td class="text-right">TOTAL</td>
                                        <td class="text-right">  </td>

                                        <td class="text-right">hhd</td>
                                        <td class="text-right">hhd</td>
                                        <td class="text-right">hhd</td>
                                        <td class="text-right">hhd</td>
                                        <td class="text-right">hhd</td>
                                    </tr>
                                </tfoot>

                                
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">

    $("#post_content").on('click', function () {
        $("#contents").click();
    })

</script>

@endsection
