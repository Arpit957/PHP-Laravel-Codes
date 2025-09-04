<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container">

    <a href="{{ route('customer.create') }}" class="btn btn-primary my-3">
        Add Customer
    </a>
      
    <table class="table">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
            <th>DOB</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <!-- Example row -->
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
             <td>
                @if($customer->gender == "M")
                    Male
                @elifse($customer->gender=="F")
                Female
                @else
                    Other
                 @endif
        </td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->dob }}</td>
            <td>
                @if($customer->status == 1)
                    Active
                @else
                    Inactive
                    @endif
        </td>

        <td>
            <a href = "{{ url('/customer/delete/'.$customer->id) }}"><button>
                Delete
            </button></a>
               
        </td>

        </tr>
    </tbody>
</table>


    </div>
</body>
</html>