<!-- Created At Field -->
{{-- <div class="form-group">
    {!! Form::label('name', 'name:') !!}
    <p>{{ $company->name }}</p>
</div> --}}
<div class="form-group">
    <div class="table-responsive">
    <table class="table" id="companies-table">
        <thead>
            <tr>
        <th>SN</th>
        <th>company name</th>
        {{-- <th>work_area</th> --}}
        <th>offer_capacity</th>
        <th>mini_grade</th>
        <th>skills required</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <td>{{$company->id}}</td>
            <td>{{ $company->name }}</td>
            {{-- <td>{{ $company->work_area }}</td> --}}
            <td>{{ $company->offer_capacity }}</td>
            <td>{{ $company->mini_grade}}</td>
            <td>{{ $company->other_skills }}</td>
            <td><a href="{{ route('applicant',[$company->id]) }}" class="btn btn-success">apply here</a>
                <a href="{{ route('Applicants.index') }}" class="btn btn-primary">back</a></td>
        </tbody>
    </table>
    </div>
</div>

