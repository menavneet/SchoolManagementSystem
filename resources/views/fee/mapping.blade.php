@extends('layout.admin')
@section('content')
<h1>Fee Mapping</h1>
<form method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label>Select Session</label>
    <select name="session" class="form-control" required>
    <option disabled selected value>--Select Session--</option>
    @foreach (App\SchoolSession::all() as $item)
    <option value="{{$item->name}}">{{$item->name}}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
        <label>Select Class</label>
        <select name="class" class="form-control" required>
                <option disabled selected value>--Select Class--</option>
        @foreach (App\SchoolClass::all() as $item)
        <option value="{{$item->name}}">{{$item->name}}</option>
        @endforeach
        </select>
</div>
<div class="form-group">
    <label>Fee Mode</label>
    <select name="mode" id="mode" class="form-control" required>
            <option disabled selected >Choose Fee Mode</option> 
            <option value="Monthly">Monthly</option>
            <option value="Quarterly">Quarterly</option>
            <option value="Half-Yearly">Half-Yearly</option>
            <option value="Yearly">Yearly</option>
    </select>
</div>
<div class="form-group">
        <label>Fee Duration</label>
        <select name="duration" id="duration"  required class="form-control">
                <option disabled selected >Choose Fee Duration</option> 
        </select>
    </div>
    <div class="form-group">
            <label>Select Fee Head</label>
            <select name="fee" class="form-control" required>
            <option disabled selected value>--Select Class--</option>
            @foreach (App\Fee::all() as $item)
            <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
            </select>
    </div>  
    <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" placeholder="Amount" required class="form-control"> 
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Fee</button>
    </div>
</form>

<script>
    $('document').ready(function(){
        $("#mode").change(function(){
            console.log(this.value);
            if(this.value=='Monthly'){
                $('#duration').html("<option value='Jan'>Jan</option><option value='Feb'>Feb</option><option value='Mar'>Mar</option><option value='Apr'>Apr</option><option value='May'>May</option><option value='Jun'>Jun</option><option value='Jul'>Jul</option><option value='Aug'>Aug</option><option value='Sep'>Sep</option><option value='Oct'>Oct</option><option value='Nov'>Nov</option><option value='Dec'>Dec</option>");
            }
            else if(this.value=='Quarterly'){
                $('#duration').html("<option value='Jul-Sep'>Jul-Sep</option><option value='Oct-Dec'>Oct-Dec</option><option value='Jan-Mar'>Jan-Mar</option><option value='Apr-Jun'>Apr-Jun</option>");
            }
            else if(this.value=='Half-Yearly'){
                $('#duration').html("<option value='Jul-Dec'>Jul-Dec</option><option value='Jan-Jun'>Jan-Jun</option>");
            }else if(this.value=='Yearly'){
                $('#duration').html("<option value='Jul-Jan'>Jul-Jan</option>");
            }
        });
    });
</script>
<div>
    <table class="table table-condensed table-responsive table-hover table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Session Name</th>
                <th>Class Name</th>
                <th>Fee Mode</th>
                <th>Fee Duration</th>
                <th>Fee Head</th>
                <th>Amount</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Feemap::all() as $feemap)
            <tr>
            <td>{{$feemap->id}}</td>
            <td>{{$feemap->session}}</td>
            <td>{{$feemap->class}}</td>
            <td>{{$feemap->mode}}</td>
            <td>{{$feemap->duration}}</td>
            <td>{{$feemap->fee}}</td>
            <td>{{$feemap->amount}}</td>
                <td>
                    <form class="inline"  method="post" action="/admin/FeesMapping/{{$feemap->id}}">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
@endsection