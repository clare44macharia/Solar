@extends('layouts.app')
{{--@extends('layouts.admin')--}}
@section('content')
<form action="/insert" method="post">
    <div class="col-lg-12" width = 5px>
<table>
        <tr>
            {{csrf_field()}}
            <td>
                Altimeter Readings
            </td>
            <td>
                <label>
                    <input type="text" name="Altimeter">
                </label>
            </td>
        </tr>
    <tr>
        <td>
            InverterReadings(kJ)
        </td>
        <td>
            <label>
                <input type="text" name="Inverters">
            </label>
    </td>
    </tr>

    <tr>
        <td>

            Solar Energy:(kWh)
        </td>


    <td>
            <label>
                <input type="text" name="Energy">
            </label>
        </td>

        </tr>
</table>

        <button type="submit">Insights</button>
    </div>
</form>

    @endsection
