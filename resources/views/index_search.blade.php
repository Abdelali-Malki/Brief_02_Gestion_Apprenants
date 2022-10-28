
<div id="data">

        <div>
            <table>
                <tr>
                    <th>Id promotion </th>
                    <th> Nom </th>
                    <th> Actions </th>
                </tr>
                @foreach ($data as $row)

                <tr>
                    <td>{{ $row->id }} </td>
                    <td>{{ $row->name }}</td>
                    <td> 
                        <a href="/update_promotion/{{ $row->id }}"> Edit </a> 
                        <a href="/deletepromo?id={{ $row->id }}"> / Delete </a> 
                    </td>
                </tr>
                @endforeach

        </table>
        </div>
    
</div>