@extends('frontEnd.layout')
<div class="page-title pb-0">
    <div class="container">
        <h1>MY BOOKS</h1>
        <span></span>
        <p>MY BOOKS</p>

        <ul class="nav nav-tabs home-tabs mt-5" id="books" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="flaticon-plane2"></i> {{ trans('backLang.airport_book') }}</a></li>
            <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-hotel"></i> {{ trans('backLang.hotel_book') }}</a></li>
        </ul>
    </div>
</div>
<div class="section">


<div class="container">


    

    <div class="tab-content" id="booksContent">
        <div id="home" class="tab-pane fade show active">
            
            <div class="section-title">
                <h3>{{ trans('backLang.airport_book') }}</h3>
                <span></span>
              </div>
            <table id="dtBasicExample" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr class="table-secondary">
                        <th class="th-sm">{{ trans('backLang.id_trip') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.type_trip') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.Flight_Class') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.leave_from') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.arrive_to') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.date_leave') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.end_date') }}
                        </th>
                        </th>
                        <th class="th-sm">{{ trans('backLang.numb_travel_Adult') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.numb_travel_child') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.numb_travel_infant') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.status_trip') }}
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if(empty($airport_books))

                    @else

                    @foreach($airport_books as $airport_book)
                    <tr>
                        <td>{{$airport_book->id}}</td>
                        @foreach(\App\Flight::where('id',$airport_book->type_flight)->get() as $fligh_type_book)
                        @if($fligh_type_book->flight1 == "checked")
                        <td class="text-center">ذهاب فقط
                        </td>

                        @elseif($fligh_type_book->flight2 == "checked")
                        <td class="text-center">ذهاب وعوده
                        </td>

                        @else
                        <td class="text-center">وجهات متعددة
                        </td>

                        @endif

                        @endforeach
                        @foreach(\App\Traveler::where('number_air',$airport_book->id)->get() as $fligh_type)
                        <td class="text-center">{{$fligh_type->type_grad}}
                        </td>
                        @endforeach
                        <td>{{$airport_book->leave_city}}</td>
                        <td>{{$airport_book->arrive_city}}</td>
                        <td>{{$airport_book->leave_date}}</td>
                        <td>{{$airport_book->arrive_date}}</td>
                        @foreach(\App\Traveler::where('number_air',$airport_book->id)->get() as $fligh_type)
                        @php
                        $a = $fligh_type->Adult_age + $fligh_type->child_age + $fligh_type->infant_age;
                        @endphp
                        <td class="text-center">{{ $fligh_type->Adult_age }}
                        </td>
                        <td>{{$fligh_type->child_age }}</td>
                        <td>{{$fligh_type->infant_age }}</td>
                        @endforeach
                        @if($airport_book->agree_status == '1')

                            <td> {{ trans('backLang.agree_t') }} </td>
                        @else
                            <td> {{ trans('backLang.refuse_t') }} </td>
                        @endif

                    </tr>
                    @endforeach

                    @endif
                </tbody>
                {{--<tfoot>--}}
                    {{--<tr class="table-secondary">--}}
                        {{--<th>{{ trans('backLang.id_trip') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.status_trip') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.Flight_Class') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.leave_from') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.arrive_to') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.date_leave') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.end_date') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.numb_travel_Adult') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.numb_travel_child') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.numb_travel_infant') }}--}}
                        {{--</th>--}}

                    {{--</tr>--}}
                {{--</tfoot>--}}
            </table>
            {{$airport_books->links()}}

        </div>
        <div id="menu1" class="tab-pane fade">
            
            <div class="section-title">
                <h3>{{ trans('backLang.hotel_book') }}</h3>
                <span></span>
              </div>
            <table id="tabel_book_airport" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr class="table-secondary">
                        <th class="th-sm">{{ trans('backLang.id_trip') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.go_trip_h') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.date_leave_h') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.end_date_h') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.num_night') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.num_Class') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.numb_travel_Adult') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.numb_travel_child') }}
                        </th>
                        <th class="th-sm">{{ trans('backLang.status_trip') }}
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @if(empty($hote_book))

                    @else

                    @foreach($hote_book as $hote_b)
                    <tr>
                        <td>{{$hote_b->id}}</td>
                        <td>{{$hote_b->way_name}}</td>
                        <td>{{$hote_b->entry_date}}</td>
                        <td>{{$hote_b->leave_date}}</td>
                        <td>{{$hote_b->night_numb}}</td>
                        @foreach(\App\Classroom::where('hotel_id',$hote_b->id)->get() as $hotel_class)
                        <td>{{$hotel_class->num_class}}</td>
                        <td>{{$hotel_class->Adult}}</td>
                        <td>{{$hotel_class->child}}</td>
                        @endforeach
                        @if($hote_b->agree_status == '1')

                            <td> {{ trans('backLang.agree_t') }} </td>
                        @else
                            <td> {{ trans('backLang.refuse_t') }} </td>
                        @endif

                    </tr>
                    @endforeach

                    @endif

                </tbody>
                {{--<tfoot>--}}
                    {{--<tr class="table-secondary">--}}
                        {{--<th>{{ trans('backLang.id_trip') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.go_trip_h') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.date_leave_h') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.end_date_h') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.num_night') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.num_Class') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.numb_travel_Adult') }}--}}
                        {{--</th>--}}
                        {{--<th>{{ trans('backLang.numb_travel_child') }}--}}
                        {{--</th>--}}
                    {{--</tr>--}}
                {{--</tfoot>--}}
            </table>
            {{$hote_book->links()}}

        </div>



    </div>
</div>
</div>
<script type="text/javascript">

    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
