<table style="font-size: 13px;">
    <thead>
        <tr>
            <th colspan="20" align="center">
               <h1 style="font-size:20px;"> <strong>Senator Aminu Iya Abbas Scholarship Applications ({{date("M d, Y H:i")}}) </strong></h1> 
            </th> {{-- cols 25 --}}
        </tr>
        <tr>
            <th style="white-space: nowrap;">Name</th>
            <th style="white-space: nowrap;">Email</th>
            <th style="white-space: nowrap;">GSM Number</th>
            <th style="white-space: nowrap;">Gender</th>
            <th style="white-space: nowrap;">Institution</th>
            <th style="white-space: nowrap;">Registration No</th>
            <th style="white-space: nowrap;">Course of Study</th>
            <th style="white-space: nowrap;">Duration</th>
            <th style="white-space: nowrap;">Level</th>
            <th style="white-space: nowrap;">Year of Admission</th>
            <th style="white-space: nowrap;">Date of Birth</th>
            <th style="white-space: nowrap;">Marital Status</th>
            <th style="white-space: nowrap;">Permanent Address</th>
            <th style="white-space: nowrap;">Bank Name</th>
            <th style="white-space: nowrap;">Account Number</th>
            <th style="white-space: nowrap;">Local Government</th>
            <th style="white-space: nowrap;">Ward</th>
            {{-- <th style="white-space: nowrap;">Voter Card</th> --}}
            <th style="white-space: nowrap;">Admission Letter</th>
            <th style="white-space: nowrap;">Last Semester Result</th>
            <th style="white-space: nowrap;">Registration Receipt</th>
            <th style="white-space: nowrap;">Indigene Letter</th>
            {{-- <th style="white-space: nowrap;">SSCE</th> --}}
            <th style="white-space: nowrap;">Passport Photo</th>
            {{-- <th style="white-space: nowrap;">Signature</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
            <tr>
                <td>{{ $application->name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->gsm_number }}</td>
                <td>{{ $application->gender }}</td>
                <td>{{ $application->institution }}</td>
                <td>{{ $application->registration_no }}</td>
                <td>{{ $application->course_of_study }}</td>
                <td>{{ $application->duration }}</td>
                <td>{{ $application->level }}</td>
                <td>{{ $application->year_of_admission }}</td>
                <td>{{ $application->date_of_birth }}</td>
                <td>{{ $application->marital_status }}</td>
                <td>{{ $application->permanent_address }}</td>
                <td>{{ $application->bank_name }}</td>
                <td>{{ $application->account_number }}</td>
                <td>{{ $application->local_government }}</td>
                <td>{{ $application->ward }}</td>
                {{-- <td><a href="{{ url('/storage/applications/' . $application->voter_card) }}">View</a></td> --}}
                <td><a href="{{ url('/storage/applications/' . $application->admission_letter) }}">View</a></td>
                <td><a href="{{ url('/storage/applications/' . $application->last_semester_result) }}">View</a></td>
                <td><a href="{{ url('/storage/applications/' . $application->registration_receipt) }}">View</a></td>
                <td><a href="{{ url('/storage/applications/' . $application->indigene_letter) }}">View</a></td>
                {{-- <td><a href="{{ url('/storage/applications/' . $application->ssce) }}">View</a></td> --}}
                <td><a href="{{ url('/storage/applications/' . $application->passport_photo) }}">View</a></td>
                {{-- <td><a href="{{ url('/storage/applications/' . $application->signature) }}">View</a></td> --}}

            </tr>
        @endforeach
    </tbody>
</table>
