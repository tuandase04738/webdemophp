@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <div class="card-header">Manage</div>
                
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                        <thead class="thead-light"> 
                             <tr>
                                 <th style="width: 10%"> ID </th>
                                 <th style="width: 20%"> Username </th>
                                 <th style="width: 45%"> Email </th>
                                 <th style="width: 25%"> Action </th>
                             </tr> 
                        </thead>
                        <tbody>
                            @foreach ($listUserWaiting as $listWaiting)
                            <tr>
                                    <td> {{$listWaiting->id}} </td> 
                                    <td> {{$listWaiting->username}} </td> 
                                    <td> {{$listWaiting->email}} </td> 
                                    <td>
                                        <form method="POST" action="{{ route('acceptform',[$listWaiting->id]) }}">
                                                    @csrf
                                          <button class="btn btn-success" type="submit" value="2" name="status">Accept</button> 
                                          <button class="btn btn-danger" type="submit" value="3" name="status">Reject</button>                                    
                                        </form>
                                    </td>    
                                 </tr>
                            @endforeach                           
                        </tbody>   
                        </table>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
