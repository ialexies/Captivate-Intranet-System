@extends('layouts.app')
@section('content')

<div class="table100 ver1" >
    <table data-vertable="ver1">
        <p style="font-size:25px;">TRADEMARK REGISTRATION RECORD</p>
        <thead>
        <tr class="row100 head">
            <th class="column100 column2" data-column="column2">Registration Date</th>
            <th class="column100 column3" data-column="column3">Business Name</th>
            <th class="column100 column4" data-column="column4">Logo</th>
        </tr>
        </thead>
        <tbody>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">February 14, 1997</td>
            <td class="column100 column3" data-column="column3">Maria Anders</td>
            <td class="column100 column4" data-column="column4">*logo here*</td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">February 14, 2000</td>
            <td class="column100 column3" data-column="column3">Maria Anders</td>
            <td class="column100 column4" data-column="column4">*logo here*</td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">February 14, 2003</td>
            <td class="column100 column3" data-column="column3">Maria Anders</td>
            <td class="column100 column4" data-column="column4">*logo here*</td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">February 14, 2006</td>
            <td class="column100 column3" data-column="column3">Maria Anders</td>
            <td class="column100 column4" data-column="column4">*logo here*</td>
            </tr>
            </tbody>
        </table>
    </div>   
    @endsection 
@section('sidebar')
    <div class="table100 ver1" style="margin-top:50px;">
    <table data-vertable="ver1">
            <thead>
            <tr class="row100 head">
            <th class="column100 column2" data-column="column2">Upcoming Registration</th>
            </tr>
            <tr class="row100">
                <td class="column100 column2" data-column="column2">
                    <ul>February 14, 2009</ul>
                    <ul>Maria Anders</ul>
                </td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">
                <ul>February 14, 2012</ul>
                <ul>Maria Anders</ul>
            </td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">
                <ul>February 14, 2015</ul>
                <ul>Maria Anders</ul>
                </td>
            </tr>
            <tr class="row100">
            <td class="column100 column2" data-column="column2">
                <ul>February 14, 2018</ul>
                <ul>Maria Anders</ul>
                </td>
            </tr>
        </table>
    </div>
@endsection