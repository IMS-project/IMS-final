<table class="table" id="companies-table">
<thead>
    <tr>
        <th>company name</th>
        <th>Address</th>
        <th>work_area</th>
        <th>offer_capacity</th>
        <th>CGPA</th>
        <th>Related skills</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->address }}</td>
        <td>{{ $company->work_area }}</td>
        <td>{{ $company->offer_capacity }}</td>
        <td>{{ $company->mini_grade}}</td>
        <td>{{ $company->other_skills }}</td>
    </tr>
</tbody>

</table>


<!-- Updated At Field -->




