 @if (count($voters) > 0)

  <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Voters</div>

                <div class="panel-body">

                	@if (count($voters) > 0)
                   		<table class="table table-stripped">
                   			<thead>
                   				<tr>
                   					<th>#</th>
                   					<th>Voter No.</th>
                   					<th>Full Name</th>
                   					<th>Father's Name</th>
                   					<th>Epic No.</th>
                   					<th>Mobile No.</th>
                   					<th>Colony</th>
                   				</tr>
                   			</thead>
                   			<tbody>
                   				@for ($i = 0; $i < count($voters); $i++)
                   					<tr>
                   						<td>{{ $i + 1 }}</td>
                   						<td>{{ $voters[$i]->serial_num }}</td>
                   						<td>{{ $voters[$i]->name }}</td>
                   						<td>{{ $voters[$i]->fathers_name }}</td>
                   						<td>{{ $voters[$i]->epic_number }}</td>
                   						<td>{{ $voters[$i]->mobile }} </td>
                   						<td>{{ $voters[$i]->colony }}</td>
                   					</tr>
                   				@endfor
                   			</tbody>
                   			
                   		</table>
                    @endif
                    <a class="btn btn-primary" href="/voter/create">Add a new voter</a>
                </div>
            </div>
        </div>
    </div>
@endif 

