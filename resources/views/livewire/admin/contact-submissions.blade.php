<div>
    <h2>Contact Submissions</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $submission)
            <tr>
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->email }}</td>
                <td>{{ $submission->message }}</td>
                <td>{{ $submission->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
