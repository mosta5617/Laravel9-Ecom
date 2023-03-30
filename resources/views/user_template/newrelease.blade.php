@extends('user_template.layouts.template')

@section('page_title')
    Flayer | News Release 
@endsection

@section('main-content')

<h2> News Release </h2>
<table border="1px">
    <tr>
        <th>SSC</th>
        <th>HSC</th>
        <th>B. Sc</th>
        <th>B. Sc</th>
    </tr>
    <tr>
        <td>SSC Book</td>
        <td>HSC Book</td>
        <td>B. Sc Book</td>
        <td>B. Sc Book</td>
    </tr>
    <tr>
        <td>SSC Book</td>
        <td>HSC Book</td>
        <td>B. Sc Book</td>
        <td>B. Sc Book</td>
    </tr>

</table>
<h2>An Unordered HTML List</h2>
<img src="html.jpg" alt="picture/image">
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>  

<h2>An Ordered HTML List</h2>

<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol> 
<form action="action.html">
   Your Name <input type="text" value="name"> <br>
   Phone Number: <input type="number" value="phone number">
</form>
@endsection