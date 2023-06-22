<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="{{asset('/js/jquery.js')}}"></script>

    <script>
        $(document).ready(function () {

            console.log('salam ba maram')
            // var tr_row = $('table tr').length - 1;
            // for (let i = 0; i <= tr_row; i++){
            //     if (i !== 0){
            //         for (let j = 8; j <= 21; j++){
            //             console.log($(`#row${i}-col${j}`))
            //         }
            //         // console.log()
            //     }
            // }

            $.each($('.cols'),function (i, item) {

                if(item.innerText != ''){

                    let row = item.dataset.row;
                    let number = parseInt(item.dataset.n);
                    let diff = parseInt(item.dataset.diff);
                    if(diff != NaN)
                    {
                        // for (let j = 0; j <= diff; j++){
                            console.log(item.id)
                        $(item).nextAll().slice(0, diff).remove()
                            // console.log($(item).nextAll().slice(0, diff - 1))
                            // $(item).nextAll().slice(0, diff).remove()
                            // console.log($(item).nextAll())
                        }
                    // }

                    // return false;
                }
            })
        });

    </script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th></th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
        </tr>
        </thead>
        <tbody id="dataTosh">
        @php
            $row = 1;
        @endphp
        @for($i = 0; $i <= count($data); $i++)
            @php
                if (isset(array_values($data)[$i])){
                    $item = array_values($data)[$i];
                  }else{
                    exit();
                  }
            @endphp
            <tr>
                {{--                <td>{{ $item[$i]['title'] }}</td>--}}
                <td></td>

                @for($counter = 8;$counter <= 21;$counter++)
                    <td colspan="
                    @foreach($item as $event)
                    {{ $event['start'] == $counter ? ( ($event['end'] - $event['start']) + 1) : ''}}
                    @endforeach
                        " class="cols" data-diff="
                    @foreach($item as $event)
                    {{ $event['start'] == $counter ? ($event['end'] - $event['start']) : '' }}
                    @endforeach
" data-n="{{$counter}}" data-row="{{ $row }}" id="row-{{$row}}-col-{{$counter}}">
                        @foreach($item as $event)
                            @if($event['start'] == $counter)
                                {{ $event['start'].' - '.$event['end'] }}
                            @endif
                        @endforeach
                    </td>
                @endfor
                @php $row++; @endphp

            </tr>

        @endfor
        </tbody>
    </table>
</div>

</body>


</html>
