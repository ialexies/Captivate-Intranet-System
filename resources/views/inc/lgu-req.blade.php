@extends('layouts.app')
@section('content')

<div class="table100 ver1" style="padding-bottom:40px;">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2 ms" data-column="column2"></th>
								<th class="column100 column3" data-column="column3" style="padding-right:90px;">LGU REQUIREMENTS</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column2 ms" data-column="column2">Mayor's Permit</td>
								<td class="column100 column3" data-column="column3">
                                    <label class="container1">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                    </label>
                                </td>
							</tr>

							<tr class="row100">
							<td class="column100 column2 ms" data-column="column2">Sanitary Permit</td>
                            <td class="column100 column3" data-column="column3">
                                    <label class="container1">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                    </label>
                            </td>
							</tr>

							<tr class="row100">
                                <td class="column100 column2 ms" data-column="column2">Fire and Safety Permit</td>
								<td class="column100 column3" data-column="column3">
                                    <label class="container1">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                    </label>
                                </td>
							</tr>
						</tbody>
					</table>
				</div>
@endsection