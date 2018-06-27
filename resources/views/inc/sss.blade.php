@extends('layouts.app')
@section('content')
<div class="table100 ver1">
	<h1>SSS Downloadable Forms</h1>
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">MEMBER FORMS</th>
								<th class="column100 column3" data-column="column3">EMPLOYER-MEMBER FORMS</th>
								<th class="column100 column4" data-column="column4">APPLICATION FOR SPECIAL PROGRAMS</th>
								
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column2" onclick="document.getElementById('link').click()" data-column="column2">Personal Data Record
    							<a id="link" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank"></a></td>
								<td class="column100 column3" onclick="document.getElementById('link2').click()" data-column="column3">Employer Registration Form
    							<a id="link2" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column4" onclick="document.getElementById('link3').click()" data-column="column4">Cooperative Accreditation Form
    							<a id="link3" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
							</tr>

							<tr class="row100">
							<td class="column100 column2" onclick="document.getElementById('link4').click()" data-column="column2">Member's Data Change Request
    							<a id="link4" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Change_Request.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column3" onclick="document.getElementById('link5').click()" data-column="column3">List of Requirements
    							<a id="link5" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column4" onclick="document.getElementById('link6').click()" data-column="column4">Cooperative Guidelines
    							<a id="link6" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
							</tr>

							<tr class="row100">
							<td class="column100 column2" onclick="document.getElementById('link7').click()" data-column="column2">UMID Card Application Form
    							<a id="link7" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column3" onclick="document.getElementById('link8').click()" data-column="column3">Employment Report
    							<a id="link8" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column4" onclick="document.getElementById('link9').click()" data-column="column4">Cooperative Member List
    							<a id="link9" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
							</tr>

							<tr class="row100">
							<td class="column100 column2" onclick="document.getElementById('link10').click()" data-column="column2">Kasambahay Unified Registration Form
    							<a id="link10" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column3" onclick="document.getElementById('link11').click()" data-column="column3">Employer Data Change Request
    							<a id="link11" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column4" onclick="document.getElementById('link12').click()" data-column="column4">Sickness and Maternity Benefits Payment thru the Bank Form
    							<a id="link12" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
							</tr>

							<tr class="row100">
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" onclick="document.getElementById('link13').click()" data-column="column3">Employer Registration Plate
    							<a id="link13" href="https://www.sss.gov.ph/sss/DownloadContent?fileName=SSSForms_Personal_Record.pdf" target="_blank" download hidden></a></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
						</tbody>
					</table>
				</div>
@endsection